<?php
declare(strict_types=1);

if (!defined('BASE_URL')) {
    $scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $scriptDir = trim(str_replace('\\', '/', dirname($scriptName)), '/');
    $rootDir = preg_replace('~(?:^|/)Pages(?:/.*)?$~i', '', $scriptDir) ?? $scriptDir;
    $rootDir = trim($rootDir, '/');
    $baseUrl = ($rootDir === '' || $rootDir === '.') ? '/' : '/' . $rootDir . '/';

    define('BASE_URL', $baseUrl);
}

if (!function_exists('base_url')) {
    function base_url(string $path = ''): string
    {
        $path = ltrim($path, '/');

        return $path === '' ? BASE_URL : BASE_URL . $path;
    }
}

if (!function_exists('e')) {
    function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('imus_phone_href')) {
    function imus_phone_href(string $value): string
    {
        $normalized = preg_replace('/[^0-9+]/', '', $value) ?? '';

        return $normalized === '' ? '' : 'tel:' . $normalized;
    }
}

if (!function_exists('imus_normalize_asset_path')) {
    function imus_normalize_asset_path(string $path): string
    {
        return ltrim(str_replace('\\', '/', $path), '/');
    }
}

if (!function_exists('imus_asset_url')) {
    function imus_asset_url(string $path): string
    {
        return base_url(imus_normalize_asset_path($path));
    }
}

if (!function_exists('imus_absolute_url')) {
    function imus_absolute_url(string $path = ''): string
    {
        if (preg_match('~^https?://~i', $path) === 1) {
            return $path;
        }

        $isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
            || (($_SERVER['SERVER_PORT'] ?? '') === '443')
            || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
        $scheme = $isHttps ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'] ?? 'localhost';

        return $scheme . '://' . $host . base_url($path);
    }
}

if (!function_exists('imus_html_attributes')) {
    function imus_html_attributes(array $attributes): string
    {
        $parts = [];

        foreach ($attributes as $name => $value) {
            if ($value === null || $value === false || $value === '') {
                continue;
            }

            if ($value === true) {
                $parts[] = $name;
                continue;
            }

            $parts[] = $name . '="' . e((string) $value) . '"';
        }

        return $parts === [] ? '' : ' ' . implode(' ', $parts);
    }
}

if (!function_exists('imus_image')) {
    function imus_image(string $path, string $alt, array $attributes = []): string
    {
        $attributes['src'] = imus_asset_url($path);
        $attributes['alt'] = $alt;

        return '<img' . imus_html_attributes($attributes) . '>';
    }
}

if (!function_exists('imus_official_facebook_url')) {
    function imus_official_facebook_url(): string
    {
        return 'https://www.facebook.com/CityofImus/';
    }
}

if (!function_exists('imus_mayor_facebook_url')) {
    function imus_mayor_facebook_url(): string
    {
        return 'https://www.facebook.com/alexladvincula';
    }
}

if (!function_exists('imus_city_hall_address')) {
    function imus_city_hall_address(): string
    {
        return 'Imus Boulevard, Brgy. Malagasang I-G, City of Imus, Cavite';
    }
}

if (!function_exists('imus_city_hall_office_hours')) {
    function imus_city_hall_office_hours(): string
    {
        return 'Monday to Friday, 8:00 AM to 5:00 PM';
    }
}

if (!function_exists('imus_city_primary_assistance_office')) {
    function imus_city_primary_assistance_office(): string
    {
        return 'City Information Office';
    }
}

if (!function_exists('imus_city_hall_maps_url')) {
    function imus_city_hall_maps_url(): string
    {
        return 'https://maps.google.com/?q=New+Imus+City+Hall';
    }
}

if (!function_exists('imus_city_hall_main_lines')) {
    function imus_city_hall_main_lines(): array
    {
        return [
            ['label' => 'Main Line 1', 'value' => '(046) 888 9910'],
            ['label' => 'Main Line 2', 'value' => '(046) 888 9912'],
            ['label' => 'Emergency Line', 'value' => '(046) 888 9911'],
        ];
    }
}

if (!function_exists('imus_contact_groups')) {
    function imus_contact_groups(): array
    {
        return [
            [
                'title' => 'City Government of Imus',
                'summary' => 'General public assistance, office routing, and basic city hall contact support.',
                'numbers' => imus_city_hall_main_lines(),
            ],
            [
                'title' => 'City Disaster Risk Reduction Management Office',
                'summary' => 'Emergency response coordination, disaster readiness, and incident support.',
                'numbers' => [
                    ['label' => 'Landline 1', 'value' => '(046) 472-2618'],
                    ['label' => 'Landline 2', 'value' => '(046) 472-2623'],
                    ['label' => 'Landline 3', 'value' => '(046) 472-2625'],
                    ['label' => 'Mobile', 'value' => '0919-069-1703'],
                ],
            ],
            [
                'title' => 'Bureau of Fire Protection',
                'summary' => 'Fire emergencies, station coordination, and local fire-related public response.',
                'numbers' => [
                    ['label' => 'Landline 1', 'value' => '970-5161'],
                    ['label' => 'Landline 2', 'value' => '416-3032'],
                    ['label' => 'Mobile', 'value' => '0915-528-3256'],
                ],
            ],
            [
                'title' => 'Ospital ng Imus',
                'summary' => 'Hospital trunk line for medical facility-related inquiries and connection requests.',
                'numbers' => [
                    ['label' => 'Hospital Trunk Line', 'value' => '419-8300 to 07'],
                ],
            ],
            [
                'title' => 'City of Imus Molecular Laboratory',
                'summary' => 'Laboratory line for laboratory support and related coordination.',
                'numbers' => [
                    ['label' => 'Laboratory Line', 'value' => '853-3364'],
                ],
            ],
        ];
    }
}

if (!function_exists('imus_city_visit_highlights')) {
    function imus_city_visit_highlights(): array
    {
        return [
            ['label' => 'Address', 'value' => imus_city_hall_address()],
            ['label' => 'Office Hours', 'value' => imus_city_hall_office_hours()],
            ['label' => 'Primary Assistance', 'value' => imus_city_primary_assistance_office()],
        ];
    }
}

if (!function_exists('imus_contact_tips')) {
    function imus_contact_tips(): array
    {
        return [
            'Use the city hall main line first if you are unsure which office handles your request.',
            'For emergency incidents, call the dedicated disaster, fire, or hospital numbers directly.',
            'This public portal currently highlights verified contact channels. An online message form is not yet enabled.',
        ];
    }
}
