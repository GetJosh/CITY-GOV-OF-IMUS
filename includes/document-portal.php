<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

if (!function_exists('imus_document_humanize')) {
    function imus_document_humanize(string $filename): string
    {
        $label = pathinfo($filename, PATHINFO_FILENAME);
        $label = str_replace(['_', '-', '.'], ' ', $label);
        $label = preg_replace('/\s+/', ' ', $label) ?? $label;

        return trim($label);
    }
}

if (!function_exists('imus_document_extension_label')) {
    function imus_document_extension_label(string $extension): string
    {
        $normalized = strtoupper(trim($extension));

        return $normalized === '' ? 'FILE' : $normalized;
    }
}

if (!function_exists('imus_document_size_label')) {
    function imus_document_size_label(int $bytes): string
    {
        if ($bytes <= 0) {
            return 'Unknown size';
        }

        $units = ['B', 'KB', 'MB', 'GB'];
        $value = (float) $bytes;
        $unitIndex = 0;

        while ($value >= 1024 && $unitIndex < count($units) - 1) {
            $value /= 1024;
            $unitIndex++;
        }

        $precision = $unitIndex === 0 ? 0 : 1;

        return number_format($value, $precision) . ' ' . $units[$unitIndex];
    }
}

if (!function_exists('imus_document_detect_year')) {
    function imus_document_detect_year(string $value, ?int $fallbackTimestamp = null): string
    {
        if (preg_match('/\b(19\d{2}|20\d{2})\b/', $value, $matches) === 1) {
            return $matches[1];
        }

        if ($fallbackTimestamp !== null && $fallbackTimestamp > 0) {
            return date('Y', $fallbackTimestamp);
        }

        return 'Undated';
    }
}

if (!function_exists('imus_document_sort_documents')) {
    function imus_document_sort_documents(array &$documents): void
    {
        usort(
            $documents,
            static function (array $left, array $right): int {
                $leftYear = ctype_digit($left['year']) ? (int) $left['year'] : -1;
                $rightYear = ctype_digit($right['year']) ? (int) $right['year'] : -1;

                if ($leftYear !== $rightYear) {
                    return $rightYear <=> $leftYear;
                }

                if ($left['modified_timestamp'] !== $right['modified_timestamp']) {
                    return $right['modified_timestamp'] <=> $left['modified_timestamp'];
                }

                return strnatcasecmp($left['label'], $right['label']);
            }
        );
    }
}

if (!function_exists('imus_collect_documents')) {
    function imus_collect_documents(
        string $absoluteRoot,
        string $publicRoot,
        bool $recursive = true,
        array $allowedExtensions = ['pdf', 'doc', 'docx', 'jpg', 'jpeg', 'png']
    ): array {
        if (!is_dir($absoluteRoot)) {
            return [];
        }

        $documents = [];
        $normalizedRoot = rtrim(str_replace('\\', '/', $absoluteRoot), '/');
        $normalizedPublicRoot = trim(str_replace('\\', '/', $publicRoot), '/');

        if ($recursive) {
            $iterator = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($absoluteRoot, FilesystemIterator::SKIP_DOTS)
            );
        } else {
            $iterator = new DirectoryIterator($absoluteRoot);
        }

        foreach ($iterator as $fileInfo) {
            if (!$fileInfo instanceof SplFileInfo || !$fileInfo->isFile()) {
                continue;
            }

            $extension = strtolower($fileInfo->getExtension());
            if (!in_array($extension, $allowedExtensions, true)) {
                continue;
            }

            $absolutePath = str_replace('\\', '/', $fileInfo->getPathname());
            $relativePath = ltrim(substr($absolutePath, strlen($normalizedRoot)), '/');
            $relativeDir = str_replace('\\', '/', pathinfo($relativePath, PATHINFO_DIRNAME));
            $relativeDir = $relativeDir === '.' ? '' : trim($relativeDir, '/');
            $topLevelDir = $relativeDir === '' ? '' : explode('/', $relativeDir)[0];
            $modifiedTimestamp = $fileInfo->getMTime();

            $documents[] = [
                'filename' => $fileInfo->getFilename(),
                'label' => imus_document_humanize($fileInfo->getFilename()),
                'extension' => $extension,
                'extension_label' => imus_document_extension_label($extension),
                'relative_path' => $relativePath,
                'relative_dir' => $relativeDir,
                'top_level_dir' => $topLevelDir,
                'public_path' => $normalizedPublicRoot . '/' . $relativePath,
                'url' => base_url($normalizedPublicRoot . '/' . $relativePath),
                'size_bytes' => $fileInfo->getSize(),
                'size_label' => imus_document_size_label($fileInfo->getSize()),
                'modified_timestamp' => $modifiedTimestamp,
                'modified_label' => date('F j, Y', $modifiedTimestamp),
                'year' => imus_document_detect_year($relativePath, $modifiedTimestamp),
            ];
        }

        imus_document_sort_documents($documents);

        return $documents;
    }
}

if (!function_exists('imus_group_documents')) {
    function imus_group_documents(array $documents, callable $groupResolver): array
    {
        $grouped = [];

        foreach ($documents as $document) {
            $groupKey = trim((string) $groupResolver($document));
            $groupKey = $groupKey === '' ? 'Other' : $groupKey;
            $grouped[$groupKey][] = $document;
        }

        uksort(
            $grouped,
            static function (string $left, string $right): int {
                $leftNumeric = ctype_digit($left);
                $rightNumeric = ctype_digit($right);

                if ($leftNumeric && $rightNumeric) {
                    return (int) $right <=> (int) $left;
                }

                if ($leftNumeric) {
                    return -1;
                }

                if ($rightNumeric) {
                    return 1;
                }

                if ($left === 'Other' && $right !== 'Other') {
                    return 1;
                }

                if ($right === 'Other' && $left !== 'Other') {
                    return -1;
                }

                if ($left === 'Undated' && $right !== 'Undated') {
                    return 1;
                }

                if ($right === 'Undated' && $left !== 'Undated') {
                    return -1;
                }

                return strnatcasecmp($left, $right);
            }
        );

        return $grouped;
    }
}

if (!function_exists('imus_latest_document_timestamp')) {
    function imus_latest_document_timestamp(array $documents): ?int
    {
        $latest = null;

        foreach ($documents as $document) {
            $timestamp = isset($document['modified_timestamp']) ? (int) $document['modified_timestamp'] : 0;
            if ($timestamp <= 0) {
                continue;
            }

            if ($latest === null || $timestamp > $latest) {
                $latest = $timestamp;
            }
        }

        return $latest;
    }
}
