<?php
declare(strict_types=1);

$pageTitle = 'Downloadable Forms';
$pageDescription = 'Official downloadable forms published by the City Government of Imus, grouped by service area and linked to the files stored in the local document archive.';

require_once __DIR__ . '/../includes/document-portal.php';

if (!function_exists('downloadable_forms_category')) {
    function downloadable_forms_category(array $document): string
    {
        $relativePath = strtolower($document['relative_path']);
        $label = strtolower($document['label']);

        if (str_starts_with($relativePath, 'bplo_requirements/')) {
            return 'Business Permit and Licensing Office';
        }

        if (str_starts_with($relativePath, 'pdao/')) {
            return 'Persons with Disability Affairs Office';
        }

        if (str_contains($label, 'bplo') || str_contains($label, 'business permit')) {
            return 'Business Permit and Licensing Office';
        }

        if (str_contains($label, 'pdao') || str_contains($label, 'pwd')) {
            return 'Persons with Disability Affairs Office';
        }

        if (str_contains($label, 'osca') || str_contains($label, 'senior')) {
            return 'Office for Senior Citizens Affairs';
        }

        if (
            str_contains($label, 'marriage')
            || str_contains($label, 'birth')
            || str_contains($label, 'death')
            || str_contains($label, 'cenomar')
            || str_contains($label, 'late registration')
            || str_contains($label, 'nso')
        ) {
            return 'Civil Registry and Personal Records';
        }

        if (str_contains($label, 'fire')) {
            return 'Bureau of Fire Protection';
        }

        if (
            str_contains($label, 'building')
            || str_contains($label, 'zoning')
            || str_contains($label, 'electrical')
            || str_contains($label, 'plumbing')
            || str_contains($label, 'mechanical')
            || str_contains($label, 'sanitary')
            || str_contains($label, 'fencing')
            || str_contains($label, 'sign')
            || str_contains($label, 'occupancy')
            || str_contains($label, 'completion')
            || str_contains($label, 'construction')
            || str_contains($label, 'subdivision')
            || str_contains($label, 'solar')
            || str_contains($label, 'evaluation')
            || str_contains($label, 'parking')
            || str_contains($label, 'permit')
        ) {
            return 'Building, Engineering, and Zoning';
        }

        if (
            str_contains($label, 'affidavit')
            || str_contains($label, 'deed')
            || str_contains($label, 'contract')
            || str_contains($label, 'quitclaim')
            || str_contains($label, 'loss')
            || str_contains($label, 'support')
            || str_contains($label, 'dissistance')
            || str_contains($label, 'denial')
            || str_contains($label, 'publication')
            || str_contains($label, 'reconciliation')
            || str_contains($label, 'free state')
            || str_contains($label, 'estimated value')
            || str_contains($label, 'vehicular accident')
            || str_contains($label, 'sale')
        ) {
            return 'Affidavits and Supporting Forms';
        }

        return 'Other Forms';
    }
}

$formsRoot = __DIR__ . '/../DOCS/Downloadable Forms';
$formDocuments = imus_collect_documents($formsRoot, 'DOCS/Downloadable Forms');
$formCategoryDescriptions = [
    'Business Permit and Licensing Office' => 'Permit applications, requirements, and renewal files commonly used by business applicants.',
    'Building, Engineering, and Zoning' => 'Construction, occupancy, permit, and zoning files for engineering and development-related transactions.',
    'Civil Registry and Personal Records' => 'Marriage, birth, death, and civil registry request forms for residents and families.',
    'Persons with Disability Affairs Office' => 'PWD application forms and supporting requirement files published by PDAO.',
    'Bureau of Fire Protection' => 'Fire safety application files and related bureau-issued forms.',
    'Office for Senior Citizens Affairs' => 'Senior citizen-related forms and support documents.',
    'Affidavits and Supporting Forms' => 'Common affidavit templates and supporting forms often required during document processing.',
    'Other Forms' => 'Published files that do not cleanly fit the main service buckets but remain available for download.',
];
$formCategoryOrder = array_keys($formCategoryDescriptions);
$groupedForms = imus_group_documents(
    $formDocuments,
    static fn(array $document): string => downloadable_forms_category($document)
);

uksort(
    $groupedForms,
    static function (string $left, string $right) use ($formCategoryOrder): int {
        $leftIndex = array_search($left, $formCategoryOrder, true);
        $rightIndex = array_search($right, $formCategoryOrder, true);

        if ($leftIndex === false && $rightIndex === false) {
            return strnatcasecmp($left, $right);
        }

        if ($leftIndex === false) {
            return 1;
        }

        if ($rightIndex === false) {
            return -1;
        }

        return $leftIndex <=> $rightIndex;
    }
);

$latestFormTimestamp = imus_latest_document_timestamp($formDocuments);
$latestFormLabel = $latestFormTimestamp !== null ? date('F j, Y', $latestFormTimestamp) : 'Archive unavailable';
$featuredCategories = [];

foreach ($groupedForms as $category => $documents) {
    $featuredCategories[] = [
        'title' => $category,
        'count' => count($documents),
        'description' => $formCategoryDescriptions[$category] ?? 'Published forms available for download.',
    ];

    if (count($featuredCategories) === 4) {
        break;
    }
}

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div
            class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.2fr_0.8fr] xl:items-stretch">
                <div>
                    <p
                        class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Forms Library
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        Official downloadable forms for permits, clearances, and city requests
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Browse permit, registry, affidavit, and support forms published by city offices and grouped by
                        service area.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#forms-library"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Browse Forms
                        </a>
                        <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Need Help Choosing a Form?
                        </a>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Archive Snapshot</p>
                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Published
                                Files</p>
                            <p class="mt-1 font-display text-2xl font-semibold text-civicInk">
                                <?= e((string) count($formDocuments)) ?>
                            </p>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Categories</p>
                            <p class="mt-1 font-display text-2xl font-semibold text-civicInk">
                                <?= e((string) count($groupedForms)) ?>
                            </p>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4 sm:col-span-2">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Latest Archive
                                Update</p>
                            <p class="mt-1 font-display text-xl font-semibold text-civicInk"><?= e($latestFormLabel) ?>
                            </p>
                        </article>
                    </div>
                    <p class="mt-5 text-sm leading-relaxed text-slate-700">
                        If the form you need is not listed, confirm the latest version with the concerned office before
                        visiting City Hall.
                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto grid w-full max-w-[90rem] gap-5 md:grid-cols-2 xl:grid-cols-4">
            <?php foreach ($featuredCategories as $category): ?>
                <article class="rounded-3xl border border-slate-200 bg-white/90 p-5 shadow-soft-xl backdrop-blur-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">
                        <?= e($category['count'] . ' files') ?>
                    </p>
                    <h2 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk">
                        <?= e($category['title']) ?>
                    </h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($category['description']) ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="forms-library" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div
            class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="flex flex-wrap justify-between gap-4">
                <div class="max-w-3xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">
                        Archive View
                    </p>

                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">
                        Downloadable forms library
                    </h2>

                    <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                        Use the grouped archive below to open the latest published forms by service area and office.
                    </p>
                </div>

                <a href="<?= e(base_url('Pages/Services.php#Citizens-Charter')) ?>"
                    class="inline-flex h-10 shrink-0 items-center self-start rounded-full border border-imusBlue/25 bg-imusBlue/5 px-5 text-sm font-semibold leading-none text-imusBlue transition hover:bg-imusBlue hover:text-white focus:outline-none focus:ring-2 focus:ring-imusBlue/40">
                    Open Citizen's Charter
                </a>
            </div>

            <?php if ($groupedForms === []): ?>
                <div class="mt-8 rounded-3xl border border-amber-300 bg-amber-50 px-5 py-4 text-sm text-amber-900">
                    No form files were found in the local archive.
                </div>
            <?php else: ?>
                <div class="mt-8 space-y-4">
                    <?php foreach ($groupedForms as $category => $documents): ?>
                        <details class="page-details p-5" <?= $category === array_key_first($groupedForms) ? 'open' : '' ?>>
                            <summary class="flex flex-wrap items-start justify-between gap-4">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Forms Category
                                    </p>
                                    <h3 class="mt-2 font-display text-xl font-semibold text-civicInk"><?= e($category) ?></h3>
                                    <p class="mt-2 max-w-3xl text-sm leading-relaxed text-slate-600">
                                        <?= e($formCategoryDescriptions[$category] ?? 'Published form files available in the document archive.') ?>
                                    </p>
                                </div>
                                <span
                                    class="inline-flex rounded-full bg-imusBlue px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-white">
                                    <?= e((string) count($documents)) ?> files
                                </span>
                            </summary>

                            <div class="mt-5 space-y-3">
                                <?php foreach ($documents as $document): ?>
                                    <article class="document-item">
                                        <div class="min-w-0">
                                            <h4 class="font-semibold text-civicInk"><?= e($document['label']) ?></h4>
                                            <div class="document-meta">
                                                <span
                                                    class="document-pill document-pill-blue"><?= e($document['extension_label']) ?></span>
                                                <span
                                                    class="document-pill document-pill-green"><?= e($document['size_label']) ?></span>
                                                <span class="text-sm text-slate-500">Updated
                                                    <?= e($document['modified_label']) ?></span>
                                            </div>
                                        </div>
                                        <a href="<?= e($document['url']) ?>" target="_blank" rel="noopener noreferrer"
                                            class="focusable inline-flex flex-none items-center rounded-full bg-imusGreen px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                                            Open File
                                        </a>
                                    </article>
                                <?php endforeach; ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div
            class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div class="rounded-3xl border border-white/20 bg-white/10 p-5 shadow-soft-xl backdrop-blur-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">Need Assistance</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Use verified channels
                        before making a trip</h2>
                    <p class="mt-4 text-sm leading-relaxed text-white/85 sm:text-base">
                        If a required file is missing or you need to confirm which version applies to your request,
                        contact the city first so you avoid unnecessary back-and-forth.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                        class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                        Open Contact Page
                    </a>
                    <a href="<?= e(base_url('Pages/Business.php')) ?>"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Business Assistance
                    </a>
                    <a href="<?= e(base_url('Pages/Services.php')) ?>"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Resident Services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
