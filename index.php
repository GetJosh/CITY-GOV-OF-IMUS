<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Basic Page Setup
|--------------------------------------------------------------------------
| BASE_URL helps all local links work in both root and subfolder hosting.
| Example:
|   /index.php
|   /.TESTING/CITY-GOV-OF-IMUS/index.php
*/
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = str_replace('\\', '/', dirname($scriptName));
$scriptDir = trim($scriptDir, '/');
$baseUrl = ($scriptDir === '' || $scriptDir === '.') ? '/' : '/' . $scriptDir . '/';

define('BASE_URL', $baseUrl);

/* Build a local URL using BASE_URL. */
function base_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    if ($path === '') {
        return BASE_URL;
    }

    return BASE_URL . $path;
}

/* Safe HTML output helper. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* Convert visible phone number text to a tel: link. */
function tel_href(string $value): string
{
    $normalized = preg_replace('/[^0-9+]/', '', $value) ?? '';

    return $normalized === '' ? '' : 'tel:' . $normalized;
}

$officialFacebook = 'https://www.facebook.com/CityofImus/';
$mayorFacebook = 'https://www.facebook.com/alexladvincula';
$pageTitle = 'City Government of Imus | Official Public Information Portal';
$pageDescription = 'Official City Government of Imus website for services, forms, full disclosures, contacts, emergency hotlines, and verified community updates.';

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') === '443')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$canonicalUrl = $scheme . '://' . $host . base_url('index.php');
$initialManilaDateTime = (new DateTimeImmutable('now', new DateTimeZone('Asia/Manila')))
    ->format('F j, Y | g:i A') . ' (PHT)';
$transparentPixel = 'data:image/gif;base64,R0lGODlhAQABAAAAACw=';

/* Top utility links (small links above the main navigation). */
$utilityLinks = [
    [
        'label' => 'Full Disclosures',
        'href' => base_url('Pages/Full-Disclosure.php'),
        'external' => false,
    ],
    [
        'label' => 'Downloadable Forms',
        'href' => base_url('HTML/Downloadable-forms.html'),
        'external' => false,
    ],
    [
        'label' => 'Contact Us',
        'href' => base_url('HTML/Contact-Us.html'),
        'external' => false,
    ],
    [
        'label' => 'Official Facebook',
        'href' => $officialFacebook,
        'external' => true,
    ],
];

/* Main navigation menu and dropdown items. */
$navMenus = [
    [
        'label' => 'Home',
        'href' => base_url('index.php'),
    ],
    [
        'label' => 'About Imus',
        'children' => [
            ['label' => 'City Profile', 'href' => base_url('Pages/AboutImus.php#City-Profile')],
            ['label' => 'City Government', 'href' => base_url('Pages/AboutImus.php#City-Government')],
            ['label' => 'Barangay Officials', 'href' => base_url('Pages/AboutImus.php#Brgy-Officials')],
            ['label' => 'History', 'href' => base_url('Pages/AboutImus.php#History')],
            ['label' => 'Past Mayors', 'href' => base_url('Pages/AboutImus.php#Past-Mayors')],
            ['label' => 'Departments and Units', 'href' => base_url('Pages/AboutImus.php#Dept-and-Units')],
        ],
    ],
    [
        'label' => 'Services',
        'children' => [
            ['label' => 'City Public Library', 'href' => base_url('HTML/Services.html#City-Public-Library')],
            ['label' => 'Assistance Programs', 'href' => base_url('HTML/Services.html#Assistance')],
            ['label' => "Citizen's Charter", 'href' => base_url('HTML/Services.html#Citizens-Charter')],
            ['label' => 'EBOSS', 'href' => base_url('HTML/Services.html#EBOSS')],
        ],
    ],
    [
        'label' => 'Tourism',
        'children' => [
            ['label' => 'History and Culture', 'href' => base_url('HTML/Tourism.html')],
            ['label' => 'Visiting Imus', 'href' => base_url('HTML/Tourism.html#Visiting-Imus')],
            ['label' => 'Heroes of Imus', 'href' => base_url('HTML/Tourism.html#Heroes-of-Imus')],
            ['label' => 'Notable Persons', 'href' => base_url('HTML/Tourism.html#Notable-Persons')],
        ],
    ],
    [
        'label' => 'Business',
        'href' => base_url('Pages/Business.php'),
    ],
    [
        'label' => 'Employees',
        'href' => base_url('HTML/Employees-Hub.html'),
    ],
];

/* Quick links shown in the hero section. */
$quickLinks = [
    [
        'title' => 'Downloadable Forms',
        'description' => 'Get official forms for permits, clearances, and city applications.',
        'href' => base_url('HTML/Downloadable-forms.html'),
    ],
    [
        'title' => 'Full Disclosures',
        'description' => 'Review city disclosures, reports, bids, and governance updates.',
        'href' => base_url('Pages/Full-Disclosure.php'),
    ],
    [
        'title' => 'Contact Us',
        'description' => 'Reach the right office for concerns, requests, and public inquiries.',
        'href' => base_url('HTML/Contact-Us.html'),
    ],
    [
        'title' => 'City Services',
        'description' => 'Explore service desks, online support, and citizen resources.',
        'href' => base_url('HTML/Services.html'),
    ],
    [
        'title' => 'Emergency Contacts',
        'description' => 'View essential hotlines and response numbers for urgent needs.',
        'href' => '#emergency-contacts',
    ],
    [
        'title' => 'Business and Permits',
        'description' => 'Access business-related information, requirements, and guidance.',
        'href' => base_url('HTML/Business.html'),
    ],
];

/* Home page news cards. */
$newsItems = [
    [
        'title' => 'Medical and Dental Mission Expands City Health Support',
        'summary' => 'A city-supported mission delivered consultations, medicines, and preventive services to families in need.',
        'date' => 'December 2025',
        'image' => base_url('IMG/optimized/news-2025-dec-medical.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Financial Assistance Reaches Women Across Imus Communities',
        'summary' => 'Qualified women beneficiaries received targeted aid through coordinated local programs.',
        'date' => 'January 2025',
        'image' => base_url('IMG/optimized/news-2025-jan-financial.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Influenza Vaccination Drive Protects Senior Citizens',
        'summary' => 'Public health teams strengthened preventive care through scheduled vaccination efforts.',
        'date' => 'January 2025',
        'image' => base_url('IMG/optimized/news-2025-jan-flu-vax.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
    [
        'title' => 'City of Imus Sports Complex Reopens with Upgrades',
        'summary' => 'Facility improvements now support safer and better recreation for residents and athletes.',
        'date' => 'January 2025',
        'image' => base_url('IMG/optimized/news-2025-jan-sports.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Job Matching Activity Connects Applicants to New Opportunities',
        'summary' => 'The city recorded hundreds of applicants in a focused employment matching initiative.',
        'date' => 'January 2025',
        'image' => base_url('IMG/optimized/news-2025-jan-job-matching.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Local Officials Take Oath for Clean and Peaceful Elections',
        'summary' => 'City leaders reaffirmed their commitment to lawful, accountable, and people-centered governance.',
        'date' => 'January 2025',
        'image' => base_url('IMG/optimized/news-2025-jan-oath.jpg'),
        'imageWidth' => 960,
        'imageHeight' => 640,
        'url' => $officialFacebook,
    ],
];

/* Emergency and hotline cards. */
$emergencyContacts = [
    [
        'office' => 'City Government of Imus Landline',
        'numbers' => [
            ['label' => 'Main Line 1', 'value' => '(046) 888 9910'],
            ['label' => 'Main Line 2', 'value' => '(046) 888 9912'],
            ['label' => 'Emergency Line', 'value' => '(046) 888 9911'],
        ],
    ],
    [
        'office' => 'City Disaster Risk Reduction Management Office (CDRRMO)',
        'numbers' => [
            ['label' => 'Landline 1', 'value' => '(046) 472-2618'],
            ['label' => 'Landline 2', 'value' => '(046) 472-2623'],
            ['label' => 'Landline 3', 'value' => '(046) 472-2625'],
            ['label' => 'Mobile', 'value' => '0919-069-1703'],
        ],
    ],
    [
        'office' => 'Bureau of Fire Protection',
        'numbers' => [
            ['label' => 'Landline 1', 'value' => '970-5161'],
            ['label' => 'Landline 2', 'value' => '416-3032'],
            ['label' => 'Mobile', 'value' => '0915-528-3256'],
        ],
    ],
    [
        'office' => 'Ospital ng Imus',
        'numbers' => [
            ['label' => 'Hospital Trunk Line', 'value' => '419-8300 to 07'],
        ],
    ],
    [
        'office' => 'City of Imus Molecular Laboratory',
        'numbers' => [
            ['label' => 'Laboratory Line', 'value' => '853-3364'],
        ],
    ],
];

/* Footer: Site map links. */
$siteMapLinks = [
    ['label' => 'Full Disclosures', 'href' => base_url('Pages/Full-Disclosure.php')],
    ['label' => 'Downloadable Forms', 'href' => base_url('HTML/Downloadable-forms.html')],
    ['label' => 'Contact Us', 'href' => base_url('HTML/Contact-Us.html')],
    ['label' => 'Latest News', 'href' => '#latest-news'],
    ['label' => 'Emergency Contacts', 'href' => '#emergency-contacts'],
];

/* Footer: Government reference links. */
$governmentLinks = [
    ['label' => 'Official Gazette', 'href' => 'https://www.officialgazette.gov.ph/'],
    ['label' => 'Government Directory', 'href' => 'https://www.gov.ph/the-government/directory-of-departments-and-agencies/'],
    ['label' => 'Official Calendar', 'href' => 'https://www.officialgazette.gov.ph/calendar/'],
    ['label' => 'Office of the President', 'href' => 'https://op-proper.gov.ph/'],
    ['label' => 'Senate of the Philippines', 'href' => 'http://www.senate.gov.ph/'],
    ['label' => 'House of Representatives', 'href' => 'https://www.congress.gov.ph/'],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="theme-color" content="#062a5d">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($pageTitle) ?>">
    <meta property="og:description" content="<?= e($pageDescription) ?>">
    <meta property="og:url" content="<?= e($canonicalUrl) ?>">
    <link rel="canonical" href="<?= e($canonicalUrl) ?>">
    <link rel="icon" href="<?= e(base_url('IMG/seal_imus_sm100.png')) ?>" sizes="100x100">
    <link rel="preload" href="<?= e(base_url('CSS/index.tailwind.min.css')) ?>" as="style">
    <link rel="stylesheet" href="<?= e(base_url('CSS/index.tailwind.min.css')) ?>">
    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            position: relative;
            overflow-x: hidden;
            /* background-color: #e7f1ff; */
            /* fallback */
        }

        .hero-pattern {
            position: relative;
            isolation: isolate;
            overflow: hidden;

            /* Primary blue gradient - calm, authoritative */
            background:
                linear-gradient(135deg,
                    #0b1f3a 0%,
                    #0e2a4f 48%,
                    #103b66 100%);
        }

        /* Subtle blue mesh for depth (no color noise) */
        .hero-pattern::before {
            content: "";
            position: absolute;
            inset: -20%;
            background:
                radial-gradient(circle at 18% 12%,
                    rgba(56, 189, 248, 0.14),
                    transparent 42%),
                radial-gradient(circle at 82% 10%,
                    rgba(14, 165, 233, 0.12),
                    transparent 44%),
                radial-gradient(circle at 50% 85%,
                    rgba(59, 130, 246, 0.10),
                    transparent 48%);
            filter: blur(42px);
            z-index: 0;
        }

        /* Soft bottom fade into light background */
        /* .hero-pattern::after {
            content: "";
            position: absolute;
            inset: auto 0 0 0;
            height: clamp(96px, 14vw, 180px);
            background: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0) 0%,
                    rgba(255, 255, 255, 0.55) 72%,
                    #ffffff 100%);
            pointer-events: none;
            z-index: 1;
        } */

        /* Content layer */
        .hero-pattern>* {
            position: relative;
            z-index: 2;
        }

        .deferred-section {
            content-visibility: auto;
            contain-intrinsic-size: 920px;
        }


        /* Respect motion preferences */
        @media (prefers-reduced-motion: reduce) {
            .parallax-layer {
                transition: none !important;
                transform: none !important;
            }

            *,
            *::before,
            *::after {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }
    </style>
</head>

<body class="min-h-screen font-sans text-slate-800 antialiased">
    <a href="#main-content"
        class="focusable sr-only absolute left-3 top-3 z-[120] rounded-lg bg-imusDeep px-4 py-2 text-sm font-semibold text-white focus:not-sr-only focus:absolute">
        Skip to main content
    </a>
    <div class="relative isolate overflow-hidden">
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-imusGreen/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-20 top-[22rem] h-80 w-80 rounded-full bg-imusBlue/20 blur-3xl">
        </div>

        <header class="relative z-40">
            <div class="bg-imusDeep text-white/95">
                <div
                    class="section-shell flex flex-col gap-3 py-3 text-sm sm:flex-row sm:items-center sm:justify-between">
	                    <p id="manila-datetime" class="font-medium tracking-wide"><?= e($initialManilaDateTime) ?></p>
                    <ul class="flex flex-wrap gap-2 sm:justify-end">
                        <?php foreach ($utilityLinks as $link): ?>
                            <li>
                                <a href="<?= e($link['href']) ?>"
                                    class="focusable inline-flex items-center rounded-full border border-white/25 bg-white/10 px-3 py-1.5 text-xs font-medium uppercase tracking-[0.08em] transition hover:border-white/40 hover:bg-white/20"
                                    <?= $link['external'] ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                    <?= e($link['label']) ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

            <div class="sticky top-0 z-50 border-b border-white/20 bg-imusBlue/95 backdrop-blur-lg shadow-soft-xl">
                <nav class="section-shell" aria-label="Main navigation">
                    <div class="flex min-h-[78px] flex-wrap items-center justify-between gap-4">
                        <a href="<?= e(base_url('index.php')) ?>"
                            class="focusable inline-flex items-center gap-3 rounded-xl px-1 py-1 text-white">
                            <img src="<?= e(base_url('IMG/Logo_City_Government_of_Imuss.png')) ?>"
                                alt="City Government of Imus logo"
                                width="250" height="100" decoding="async" fetchpriority="high"
                                class="h-10 w-auto rounded-lg bg-white/90 px-2 py-1 shadow-md sm:h-12">
                            <span class="text-left">
                                <span class="block font-display text-base font-bold leading-tight sm:text-lg">City Government of
                                    Imus</span>
                                <span class="block text-[10px] uppercase tracking-[0.16em] text-white/75 sm:text-xs">Official
                                    Portal</span>
                            </span>
                        </a>

                        <button type="button" data-menu-toggle aria-controls="primary-menu" aria-expanded="false"
                            class="focusable inline-flex items-center justify-center rounded-xl border border-white/30 bg-white/10 p-2 text-white transition hover:bg-white/20 lg:hidden">
                            <span class="sr-only">Toggle navigation menu</span>
                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" />
                            </svg>
                        </button>

                        <div id="primary-menu" class="hidden w-full pb-4 lg:block lg:w-auto lg:pb-0">
                            <ul class="flex flex-col gap-1 lg:flex-row lg:items-center lg:gap-1">
                                <?php foreach ($navMenus as $index => $item): ?>
                                    <?php if (isset($item['children'])): ?>
                                        <li class="relative lg:group" data-dropdown>
                                            <button type="button"
                                                class="focusable inline-flex w-full items-center justify-between rounded-xl px-3 py-2.5 text-sm font-medium text-white/95 transition hover:bg-white/15 lg:w-auto"
                                                data-dropdown-button aria-expanded="false"
                                                aria-controls="menu-panel-<?= $index ?>">
                                                <span><?= e($item['label']) ?></span>
                                                <svg class="ml-2 h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                                    <path d="m5 8 5 5 5-5" stroke="currentColor" stroke-width="1.6"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                            <div id="menu-panel-<?= $index ?>" data-dropdown-panel
                                                class="hidden overflow-hidden rounded-2xl border border-slate-200 bg-white p-2 shadow-soft-2xl lg:absolute lg:left-1/2 lg:top-[calc(100%+0.35rem)] lg:z-50 lg:min-w-[17rem] lg:-translate-x-1/2">
                                                <?php foreach ($item['children'] as $child): ?>
                                                    <a href="<?= e($child['href']) ?>"
                                                        class="focusable block rounded-xl px-3 py-2 text-sm font-medium text-civicInk transition hover:bg-imusBlue/10 hover:text-imusBlue">
                                                        <?= e($child['label']) ?>
                                                    </a>
                                                <?php endforeach; ?>
                                            </div>
                                        </li>
                                    <?php else: ?>
                                        <li>
                                            <a href="<?= e($item['href']) ?>"
                                                class="focusable inline-flex w-full rounded-xl px-3 py-2.5 text-sm font-medium text-white/95 transition hover:bg-white/15 lg:w-auto">
                                                <?= e($item['label']) ?>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <li class="pt-2 lg:pl-2 lg:pt-0">
                                    <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable inline-flex w-full items-center justify-center rounded-xl border border-white/35 bg-white/10 px-3 py-2 text-sm font-semibold text-white transition hover:border-white/50 hover:bg-white/20 lg:w-auto">
                                        Official Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <main id="main-content" tabindex="-1">
            <!-- Hero + Quick Links -->
            <section class="hero-pattern relative z-10 pb-12 pt-8 text-white sm:pt-12 lg:pt-14">
                <div class="section-shell">
                    <div class="grid gap-6 md:gap-8 xl:grid-cols-2">
                        <div
                            class="surface-noise rounded-3xl border border-white/25 p-5 shadow-soft-2xl animate-fade-slide sm:p-8 lg:p-10 xl:p-12">
                            <p
                                class="inline-flex items-center rounded-full border border-white/30 bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-white/90">
                                Serving Imus with Integrity
                            </p>
                            <h1
                                class="mt-4 font-display text-2xl font-bold leading-tight sm:text-3xl md:text-4xl lg:text-5xl">
                                Welcome to the Official Website of the City Government of Imus
                            </h1>
                            <p class="mt-4 text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                                Access trusted public information, city services, and governance updates in one place.
                                This portal reflects our commitment to transparent leadership, responsive programs,
                                and a stronger future for every resident.
                            </p>
                            <div class="mt-7 flex flex-wrap gap-3">
                                <a href="<?= e(base_url('HTML/Services.html')) ?>"
                                    class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                                    Explore Services
                                </a>
                                <a href="#latest-news"
                                    class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                                    View Latest Updates
                                </a>
                            </div>
                            <div class="mt-8 grid gap-3 text-sm sm:grid-cols-2 lg:grid-cols-3">
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="font-semibold">Transparent Governance</p>
                                    <p class="mt-1 text-white/80">Verified documents and public disclosures.</p>
                                </div>
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="font-semibold">Citizen Services</p>
                                    <p class="mt-1 text-white/80">Forms, contacts, and service information.</p>
                                </div>
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="font-semibold">City Updates</p>
                                    <p class="mt-1 text-white/80">Programs, news, and community initiatives.</p>
                                </div>
                            </div>
                        </div>

                        <aside class="flex flex-col gap-5">
                            <article
                                class="relative overflow-hidden rounded-3xl border border-white/20 shadow-soft-2xl">
                                <img src="<?= e(base_url('IMG/optimized/carousel-ngc.jpg')) ?>"
                                    alt="New Government Center in the City of Imus"
                                    width="1280" height="471" fetchpriority="high" decoding="async"
                                    class="h-64 w-full object-cover sm:h-72 lg:h-full">
                                <div
                                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-civicInk/95 via-civicInk/40 to-transparent p-5">
                                    <h2 class="font-display text-xl font-semibold">New Government Center</h2>
                                    <p class="mt-1 text-sm text-white/85">Imus Boulevard, Brgy. Malagasang I-G, City of
                                        Imus, Cavite</p>
                                </div>
                            </article>
                            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1 2xl:grid-cols-2">
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="text-xs uppercase tracking-[0.12em] text-white/75">Office Hours</p>
                                    <p class="mt-2 text-sm font-semibold">Monday to Friday</p>
                                    <p class="text-sm text-white/85">8:00 AM to 5:00 PM</p>
                                </div>
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="text-xs uppercase tracking-[0.12em] text-white/75">Need Help Fast?</p>
                                    <a href="#emergency-contacts"
                                        class="focusable mt-2 inline-flex text-sm font-semibold text-white underline decoration-white/40 underline-offset-4 transition hover:text-white/80">
                                        View Emergency Contacts
                                    </a>
                                </div>
                            </div>
                        </aside>
                    </div>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6">
                        <?php foreach ($quickLinks as $quickLink): ?>
                            <a href="<?= e($quickLink['href']) ?>"
                                class="focusable group glass-card rounded-2xl p-4 transition hover:-translate-y-1 hover:border-imusBlue/20 hover:bg-white">
                                <div class="flex items-start justify-between gap-4">
                                    <div>
                                        <h3 class="font-display text-lg font-semibold text-civicInk">
                                            <?= e($quickLink['title']) ?>
                                        </h3>
                                        <p class="mt-2 text-sm text-slate-600"><?= e($quickLink['description']) ?></p>
                                    </div>
                                    <span
                                        class="mt-1 inline-flex h-8 w-8 items-center justify-center rounded-full bg-imusBlue/10 text-imusBlue transition group-hover:bg-imusBlue group-hover:text-white"
                                        aria-hidden="true">
                                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none">
                                            <path d="M4 10h12M10 4l6 6-6 6" stroke="currentColor" stroke-width="1.7"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>

            <!-- Mayor's Message -->
            <section class="deferred-section relative z-10 py-12 sm:py-14 lg:py-16">
                <div class="section-shell">
                    <div
                        class="relative mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] text-white shadow-soft-2xl">
                        <div
                            class="pointer-events-none absolute -left-16 top-8 h-44 w-44 rounded-full bg-imusGreen/20 blur-3xl">
                        </div>
                        <div
                            class="pointer-events-none absolute -right-16 bottom-8 h-56 w-56 rounded-full bg-sky-300/20 blur-3xl">
                        </div>
                        <div class="pointer-events-none absolute inset-y-0 right-[44%] hidden w-px bg-white/12 lg:block">
                        </div>

                        <div
                            class="relative grid gap-7 px-5 py-6 sm:px-8 sm:py-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-10 lg:py-10">
                            <div class="order-2 lg:order-1">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/75">Mayor's
                                    Message</p>
                                <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl lg:text-4xl">
                                    Public service that is visible, responsive, and people-first
                                </h2>
                                <div class="mt-5 rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm sm:p-5">
                                    <p class="text-sm leading-relaxed text-white/90 sm:text-base">
                                        Welcome to the City of Imus. This official platform is designed to make city
                                        services easier to access, improve transparency, and keep every resident informed
                                        about programs, policies, and ongoing projects.
                                    </p>
                                    <p class="mt-3 text-sm leading-relaxed text-white/90 sm:text-base">
                                        We invite you to learn more about our heritage, discover opportunities for growth,
                                        and stay connected with initiatives that move Imus forward.
                                    </p>
                                </div>
                                <div
                                    class="mt-5 grid gap-3 text-xs font-semibold uppercase tracking-[0.12em] text-white/85 sm:grid-cols-3">
                                    <p class="rounded-xl border border-white/20 bg-white/10 px-3 py-2 text-center">
                                        Transparent Governance</p>
                                    <p class="rounded-xl border border-white/20 bg-white/10 px-3 py-2 text-center">
                                        Accessible Services</p>
                                    <p class="rounded-xl border border-white/20 bg-white/10 px-3 py-2 text-center">
                                        Community Progress</p>
                                </div>
                                <a href="<?= e($mayorFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                    class="focusable mt-5 inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                                    Follow the Mayor's Updates
                                </a>
                            </div>

                            <div class="order-1 mx-auto w-full max-w-sm lg:order-2">
                                <div class="relative rounded-3xl border border-white/20 bg-white/10 p-4 shadow-soft-xl backdrop-blur-sm">
                                    <div
                                        class="pointer-events-none absolute inset-x-8 -top-px h-px bg-gradient-to-r from-transparent via-white/65 to-transparent">
                                    </div>
                                    <img src="<?= e($transparentPixel) ?>"
                                        alt="Hon. Alex AA L. Advincula, City Mayor of Imus"
                                        width="614" height="1024" loading="lazy" decoding="async"
                                        data-src="<?= e(base_url('IMG/officials-and-councilors/MayorStanding.png')) ?>"
                                        class="mx-auto w-full max-w-xs object-contain drop-shadow-2xl sm:max-w-sm">
                                    <div
                                        class="absolute inset-x-5 bottom-5 rounded-2xl border border-imusGreen/45 bg-imusGreen/90 px-4 py-2.5 text-center shadow-lg">
                                        <p class="font-display text-base font-bold leading-tight">Hon. Alex "AA" L.
                                            Advincula</p>
                                        <p class="mt-0.5 text-[11px] uppercase tracking-[0.14em] text-white/90">City
                                            Mayor</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Latest News -->
            <section id="latest-news" class="deferred-section relative z-10 overflow-hidden py-12 sm:py-14 lg:py-16">
                <div class="pointer-events-none absolute -left-16 top-8 h-56 w-56 rounded-full bg-imusBlue/10 blur-3xl"></div>
                <div class="pointer-events-none absolute -right-16 bottom-6 h-60 w-60 rounded-full bg-imusGreen/10 blur-3xl">
                </div>

                <div class="section-shell relative">
                    <div
                        class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
                        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                            <div class="max-w-2xl">
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-imusBlue">Latest News</p>
                                <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">
                                    News and Community Updates
                                </h2>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                                    Read recent city initiatives, health campaigns, employment efforts, and local
                                    governance updates from official channels.
                                </p>
                            </div>
                            <div class="flex flex-col items-start gap-2 sm:items-end">
                                <p
                                    class="rounded-full border border-imusBlue/15 bg-imusBlue/5 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-imusBlue/80">
                                    Verified Public Information
                                </p>
                                <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                    class="focusable inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                                    Visit Official Feed
                                </a>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <?php foreach ($newsItems as $newsItem): ?>
                                <article
                                    class="group flex h-full flex-col overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft-xl transition hover:-translate-y-1 hover:border-imusBlue/25 hover:shadow-soft-2xl">
                                    <div class="relative overflow-hidden">
                                        <img src="<?= e($transparentPixel) ?>" data-src="<?= e($newsItem['image']) ?>"
                                            alt="<?= e($newsItem['title']) ?>"
                                            width="<?= e((string) $newsItem['imageWidth']) ?>"
                                            height="<?= e((string) $newsItem['imageHeight']) ?>" loading="lazy"
                                            decoding="async" fetchpriority="low"
                                            class="h-48 w-full object-cover transition duration-500 group-hover:scale-[1.04] sm:h-52 lg:h-56">
                                        <p
                                            class="absolute left-3 top-3 rounded-full border border-white/35 bg-civicInk/70 px-3 py-1 text-[10px] font-semibold uppercase tracking-[0.14em] text-white backdrop-blur-sm">
                                            <?= e($newsItem['date']) ?>
                                        </p>
                                        <div
                                            class="pointer-events-none absolute inset-x-0 bottom-0 h-20 bg-gradient-to-t from-civicInk/45 to-transparent">
                                        </div>
                                    </div>
                                    <div class="flex grow flex-col p-5">
                                        <h3 class="font-display text-xl font-semibold leading-snug text-civicInk">
                                            <?= e($newsItem['title']) ?>
                                        </h3>
                                        <p class="mt-3 grow text-sm leading-relaxed text-slate-600">
                                            <?= e($newsItem['summary']) ?>
                                        </p>
                                        <a href="<?= e($newsItem['url']) ?>" target="_blank" rel="noopener noreferrer"
                                            class="focusable mt-5 inline-flex items-center gap-2 rounded-full bg-imusGreen px-4 py-2 text-sm font-semibold text-white transition hover:bg-green-700">
                                            Read Update
                                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                                                <path d="M4 10h12M10 4l6 6-6 6" stroke="currentColor" stroke-width="1.7"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </article>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Mission and Vision -->
            <section class="deferred-section relative z-10 overflow-hidden bg-gradient-to-br from-imusDeep via-imusBlue to-[#0a3a70] py-12 text-white sm:py-14 lg:py-16">
                <div class="pointer-events-none absolute -left-12 top-10 h-56 w-56 rounded-full bg-imusGreen/20 blur-3xl"></div>
                <div class="pointer-events-none absolute -right-16 bottom-6 h-72 w-72 rounded-full bg-sky-300/15 blur-3xl"></div>

                <div class="section-shell relative">
                    <div
                        class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-white/20 bg-white/10 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
                        <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-end">
                            <header class="max-w-2xl">
                                <p
                                    class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.16em] text-white/85">
                                    Guiding Principles
                                </p>
                                <h2 class="mt-3 font-display text-2xl font-bold leading-tight sm:text-3xl md:text-4xl">
                                    Mission and Vision
                                </h2>
                                <p class="mt-3 text-sm leading-relaxed text-white/85 sm:text-base">
                                    These principles shape every city program, policy, and service outcome, anchored in
                                    accountability, inclusion, and long-term progress.
                                </p>
                            </header>

                            <div class="grid gap-3 sm:grid-cols-3">
                                <article class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Core Value
                                    </p>
                                    <p class="mt-1 text-sm font-semibold">Integrity in Service</p>
                                </article>
                                <article class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Direction</p>
                                    <p class="mt-1 text-sm font-semibold">Smart and Sustainable Growth</p>
                                </article>
                                <article class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Focus</p>
                                    <p class="mt-1 text-sm font-semibold">People-First Governance</p>
                                </article>
                            </div>
                        </div>

                        <div class="mt-8 grid gap-6 lg:grid-cols-2">
                            <article
                                class="group relative overflow-hidden rounded-[1.75rem] border border-white/25 bg-white/10 p-6 shadow-soft-xl backdrop-blur-md sm:p-7">
                                <div
                                    class="pointer-events-none absolute -right-8 -top-8 h-28 w-28 rounded-full bg-imusGreen/20 blur-2xl">
                                </div>
                                <div class="relative">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="inline-flex h-11 w-11 flex-none items-center justify-center rounded-xl border border-white/20 bg-white/15 text-imusGreen"
                                            aria-hidden="true">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                                <path d="M12 2 3 6v5c0 5 3.8 9.7 9 11 5.2-1.3 9-6 9-11V6l-9-4Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path d="m9.5 12.5 1.8 1.8L15 11" stroke="currentColor" stroke-width="1.6"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/80">Mission</p>
                                    </div>

                                    <h3 class="mt-4 font-display text-2xl font-semibold leading-tight sm:text-3xl">
                                        Deliver trusted and responsive public service
                                    </h3>
                                    <p class="mt-4 text-sm leading-relaxed text-white/90 sm:text-base">
                                        The City Government of Imus is committed to transparent, reliable, and efficient
                                        programs that respond to people's needs while advancing inclusive and sustainable
                                        development.
                                    </p>

                                    <ul class="mt-5 space-y-2 text-sm text-white/90">
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 h-1.5 w-1.5 flex-none rounded-full bg-imusGreen"></span>
                                            Transparent decision-making and public accountability
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 h-1.5 w-1.5 flex-none rounded-full bg-imusGreen"></span>
                                            Service delivery that is fast, fair, and accessible
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="mt-1 h-1.5 w-1.5 flex-none rounded-full bg-imusGreen"></span>
                                            Policies that improve quality of life in every barangay
                                        </li>
                                    </ul>
                                </div>
                            </article>

                            <article
                                class="group relative overflow-hidden rounded-[1.75rem] border border-white/25 bg-white/10 p-6 shadow-soft-xl backdrop-blur-md sm:p-7">
                                <div
                                    class="pointer-events-none absolute -left-10 -bottom-10 h-32 w-32 rounded-full bg-sky-300/20 blur-2xl">
                                </div>
                                <div class="relative">
                                    <div class="flex items-center gap-3">
                                        <span
                                            class="inline-flex h-11 w-11 flex-none items-center justify-center rounded-xl border border-white/20 bg-white/15 text-imusGreen"
                                            aria-hidden="true">
                                            <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none">
                                                <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z" stroke="currentColor"
                                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.5" />
                                            </svg>
                                        </span>
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/80">Vision</p>
                                    </div>

                                    <h3 class="mt-4 font-display text-2xl font-semibold leading-tight sm:text-3xl">
                                        Build a secure, healthy, and future-ready city
                                    </h3>
                                    <p class="mt-4 text-sm leading-relaxed text-white/90 sm:text-base">
                                        A model city in the region where people thrive in a smart, green, and
                                        sustainable environment, supported by technology and guided by integrity.
                                    </p>

                                    <div class="mt-5 rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">
                                            Long-Term Direction
                                        </p>
                                        <p class="mt-1 text-sm leading-relaxed text-white/90">
                                            Safe communities, resilient infrastructure, digital-ready services, and
                                            inclusive economic opportunities for all residents.
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Stay Connected: YouTube + Facebook embeds -->
            <section class="deferred-section relative z-10 overflow-hidden py-10 sm:py-12 lg:py-14">
                <div class="section-shell">
                    <div
                        class="relative mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] text-white shadow-soft-2xl">
                        <div class="pointer-events-none absolute -left-20 top-10 h-64 w-64 rounded-full bg-imusGreen/20 blur-3xl">
                        </div>
                        <div
                            class="pointer-events-none absolute -right-20 bottom-10 h-64 w-64 rounded-full bg-sky-300/20 blur-3xl">
                        </div>

                        <div class="relative grid gap-6 px-5 py-6 sm:px-8 sm:py-8 xl:grid-cols-[1.25fr_0.75fr] xl:gap-8 lg:p-10">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/75">Stay Connected
                                </p>
                                <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">
                                    Follow Official City Channels
                                </h2>
                                <p class="mt-3 max-w-2xl text-sm leading-relaxed text-white/85 sm:text-base">
                                    Watch city videos and follow official pages for timely updates, announcements, and
                                    public advisories.
                                </p>

                                <div
                                    class="mt-6 overflow-hidden rounded-3xl border border-white/20 bg-white/10 p-3 shadow-soft-xl backdrop-blur-sm sm:p-4">
                                    <div class="aspect-video overflow-hidden rounded-2xl border border-imusGreen/35 bg-black/15">
                                        <iframe class="h-full w-full" src="https://www.youtube.com/embed/xGNOCWXM9pM"
                                            title="AAngat ang Imus official city video"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen loading="lazy"></iframe>
                                    </div>
                                    <div class="mt-3 flex flex-wrap items-center justify-between gap-2">
                                        <p class="text-sm font-semibold text-white">Official City Video Feature</p>
                                        <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.12em] text-white transition hover:bg-green-700">
                                            Visit Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <aside class="space-y-4">
                                <article class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Official
                                        City Page</p>
                                    <p class="mt-1 text-sm text-white/85">
                                        Follow the City Government page for advisories, updates, and announcements.
                                    </p>
                                    <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable mt-3 inline-flex items-center rounded-full border border-white/35 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.12em] text-white transition hover:bg-white/15">
                                        Open Official Page
                                    </a>
                                </article>

                                <article class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Mayor's
                                        Page</p>
                                    <p class="mt-1 text-sm text-white/85">
                                        Get direct updates from the Office of the City Mayor.
                                    </p>
                                    <a href="<?= e($mayorFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable mt-3 inline-flex items-center rounded-full border border-white/35 px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.12em] text-white transition hover:bg-white/15">
                                        Open Mayor's Page
                                    </a>
                                </article>

                                <article class="rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Need
                                        Assistance?</p>
                                    <p class="mt-1 text-sm text-white/85">
                                        Contact the city information office for inquiries and public concerns.
                                    </p>
                                    <a href="<?= e(base_url('HTML/Contact-Us.html')) ?>"
                                        class="focusable mt-3 inline-flex items-center rounded-full bg-imusGreen px-3 py-1.5 text-xs font-semibold uppercase tracking-[0.12em] text-white transition hover:bg-green-700">
                                        Contact Us
                                    </a>
                                </article>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Location and Office Hours -->
            <section class="deferred-section relative z-10 overflow-hidden py-12 sm:py-14 lg:py-16">
                <div class="pointer-events-none absolute left-0 top-6 h-64 w-64 rounded-full bg-imusBlue/15 blur-3xl"></div>
                <div class="pointer-events-none absolute right-0 bottom-6 h-72 w-72 rounded-full bg-imusGreen/15 blur-3xl">
                </div>

                <div class="section-shell relative">
                    <div
                        class="relative mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-4 shadow-soft-2xl sm:p-6 lg:p-8">
                        <div class="pointer-events-none absolute -left-16 top-12 h-44 w-44 rounded-full bg-imusBlue/15 blur-3xl">
                        </div>
                        <div
                            class="pointer-events-none absolute -right-16 -top-8 h-52 w-52 rounded-full bg-imusGreen/20 blur-3xl">
                        </div>

                        <div class="relative grid gap-6 xl:grid-cols-[1.22fr_0.78fr] xl:items-stretch">
                            <div
                                class="overflow-hidden rounded-3xl border border-imusBlue/20 bg-white/90 p-3 shadow-soft-xl backdrop-blur-sm sm:p-4">
                                <div class="mb-4 flex flex-wrap items-center justify-between gap-2 px-1">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue/80">
                                            Imus City Hall Map</p>
                                        <h2 class="mt-1 font-display text-2xl font-bold text-civicInk sm:text-3xl">
                                            Visit City Hall
                                        </h2>
                                    </div>
                                    <a href="https://maps.google.com/?q=New+Imus+City+Hall" target="_blank"
                                        rel="noopener noreferrer"
                                        class="focusable inline-flex items-center rounded-full border border-imusBlue/25 bg-imusBlue/5 px-3 py-1.5 text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue transition hover:bg-imusBlue hover:text-white">
                                        Open in Google Maps
                                    </a>
                                </div>

                                <div class="overflow-hidden rounded-2xl border-2 border-imusGreen/50 bg-white">
                                    <iframe class="h-[340px] w-full sm:h-[400px] md:h-[470px] xl:h-[560px]"
                                        src="https://maps.google.com/maps?q=New%20Imus%20City%20Hall&output=embed"
                                        loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen
                                        title="Map location of Imus City Hall"></iframe>
                                </div>

                                <div class="mt-4 grid gap-3 sm:grid-cols-3">
                                    <div class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3">
                                        <p class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
                                            City Hall</p>
                                        <p class="mt-1 text-sm font-semibold text-civicInk">Imus Boulevard</p>
                                    </div>
                                    <div class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3">
                                        <p class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
                                            Weekday Hours</p>
                                        <p class="mt-1 text-sm font-semibold text-civicInk">8:00 AM to 5:00 PM</p>
                                    </div>
                                    <div class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3">
                                        <p class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
                                            Assistance</p>
                                        <p class="mt-1 text-sm font-semibold text-civicInk">City Information Office</p>
                                    </div>
                                </div>
                            </div>

                            <div
                                class="relative overflow-hidden rounded-3xl border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b467f] p-6 text-white shadow-soft-xl sm:p-7 lg:p-8">
                                <div
                                    class="pointer-events-none absolute inset-x-10 -top-px h-px bg-gradient-to-r from-transparent via-white/70 to-transparent">
                                </div>
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/80">
                                    Plan Your Visit
                                </p>
                                <h3 class="mt-2 font-display text-3xl font-bold leading-tight sm:text-4xl">
                                    Office Location and Hours
                                </h3>
                                <p class="mt-3 text-sm leading-relaxed text-white/85 sm:text-base">
                                    Plan your visit with verified location details, office schedule, and public assistance
                                    information.
                                </p>

                                <div class="mt-6 space-y-4">
                                    <article class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">Address</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            Imus Boulevard, Brgy. Malagasang I-G<br>City of Imus, Cavite
                                        </p>
                                    </article>
                                    <article class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">
                                            Office Hours</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            Monday to Friday, 8:00 AM to 5:00 PM
                                        </p>
                                    </article>
                                    <article class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">
                                            Public Assistance</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            For urgent concerns, use the emergency contact section below.
                                        </p>
                                    </article>
                                </div>

                                <div class="mt-7 grid gap-3 sm:grid-cols-2">
                                    <a href="<?= e(base_url('HTML/Contact-Us.html')) ?>"
                                        class="focusable inline-flex items-center justify-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                                        Go to Contact Page
                                    </a>
                                    <a href="#emergency-contacts"
                                        class="focusable inline-flex items-center justify-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                                        View Emergency Contacts
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Emergency Contacts -->
            <section id="emergency-contacts" class="deferred-section relative z-10 py-12 sm:py-14 lg:py-16">
                <div class="section-shell">
                    <div class="text-center">
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Emergency and Hotline
                        </p>
                        <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">
                            Important Contact Numbers</h2>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                            Keep these official emergency and support numbers ready for urgent city services and
                            incident response.
                        </p>
                    </div>

                    <div class="mt-8 grid gap-5 md:grid-cols-2 2xl:grid-cols-3">
                        <?php foreach ($emergencyContacts as $contact): ?>
                            <article class="glass-card rounded-2xl p-5 sm:p-6">
                                <h3 class="font-display text-xl font-semibold text-civicInk"><?= e($contact['office']) ?>
                                </h3>
                                <ul class="mt-4 space-y-3">
                                    <?php foreach ($contact['numbers'] as $entry): ?>
                                        <?php $tel = tel_href($entry['value']); ?>
                                        <li
                                            class="flex flex-col gap-1 rounded-xl border border-slate-200 bg-white px-3 py-2.5 sm:flex-row sm:items-center sm:justify-between">
                                            <span class="text-sm font-medium text-slate-600"><?= e($entry['label']) ?></span>
                                            <?php if ($tel !== ''): ?>
                                                <a href="<?= e($tel) ?>"
                                                    class="focusable text-sm font-semibold text-imusBlue hover:text-imusGreen">
                                                    <?= e($entry['value']) ?>
                                                </a>
                                            <?php else: ?>
                                                <span class="text-sm font-semibold text-imusBlue"><?= e($entry['value']) ?></span>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </main>

        <footer class="deferred-section relative z-10 bg-imusDeep text-white">
            <div class="section-shell py-12">
                <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                    <section>
                        <img src="<?= e($transparentPixel) ?>"
                            data-src="<?= e(base_url('IMG/seal_imus_sm100.png')) ?>" alt="City Seal of Imus"
                            width="100" height="100" loading="lazy" decoding="async"
                            class="h-20 w-20 rounded-full border border-white/20 bg-white/90 p-1">
                        <p class="mt-4 text-sm leading-relaxed text-white/80">
                            Official website of the City Government of Imus, maintained by the City Information Office.
                        </p>
                        <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                            class="focusable mt-4 inline-flex items-center rounded-full border border-white/30 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/20">
                            Follow Official Page
                        </a>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Site Map</h3>
                        <ul class="mt-4 space-y-2 text-sm text-white/80">
                            <?php foreach ($siteMapLinks as $siteMapLink): ?>
                                <li>
                                    <a href="<?= e($siteMapLink['href']) ?>"
                                        class="focusable inline-flex rounded px-1 py-0.5 transition hover:text-imusGreen">
                                        <?= e($siteMapLink['label']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Government Links</h3>
                        <ul class="mt-4 space-y-2 text-sm text-white/80">
                            <?php foreach ($governmentLinks as $governmentLink): ?>
                                <li>
                                    <a href="<?= e($governmentLink['href']) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable inline-flex rounded px-1 py-0.5 transition hover:text-imusGreen">
                                        <?= e($governmentLink['label']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Connect</h3>
                        <div class="mt-4 flex items-center gap-3">
                            <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                class="focusable inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 transition hover:border-imusGreen hover:bg-imusGreen"
                                aria-label="City Government of Imus on Facebook">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M13.5 21v-7h2.4l.4-3h-2.8V9.1c0-.9.2-1.6 1.6-1.6h1.3V4.8c-.2 0-1-.1-2-.1-2 0-3.4 1.2-3.4 3.5V11H9v3h2.1v7h2.4Z" />
                                </svg>
                            </a>
                            <a href="<?= e(base_url('HTML/Contact-Us.html')) ?>"
                                class="focusable inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 transition hover:border-imusGreen hover:bg-imusGreen"
                                aria-label="Contact the City Government of Imus">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="1.7"
                                        stroke-linejoin="round" />
                                    <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.7"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <p class="mt-4 text-sm text-white/75">City Information Office<br>City of Imus, Cavite</p>
                    </section>
                </div>

                <div
                    class="mt-10 flex flex-col gap-2 border-t border-white/20 pt-6 text-sm text-white/70 sm:flex-row sm:items-center sm:justify-between">
                    <p>&copy; <?= date('Y') ?> City Government of Imus. All rights reserved.</p>
                    <p>Public information portal for residents, visitors, and stakeholders.</p>
                </div>
            </div>
        </footer>
    </div>

    <script>
        (function () {
            // -------------------------------------------------------------
            // 1) Live Manila date and time
            // -------------------------------------------------------------
            const dateTimeElement = document.getElementById('manila-datetime');
            const mobileBreakpoint = 1024;

            function updateDateTime() {
                if (!dateTimeElement) {
                    return;
                }

                const now = new Date();
                const date = now.toLocaleDateString('en-PH', {
                    timeZone: 'Asia/Manila',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                const time = now.toLocaleTimeString('en-PH', {
                    timeZone: 'Asia/Manila',
                    hour: 'numeric',
                    minute: '2-digit',
                    hour12: true
                });

                dateTimeElement.textContent = date + ' | ' + time + ' (PHT)';
            }

            const now = new Date();
            const delayUntilNextMinute = (60 - now.getSeconds()) * 1000;
            window.setTimeout(() => {
                updateDateTime();
                window.setInterval(updateDateTime, 60000);
            }, delayUntilNextMinute);

            // -------------------------------------------------------------
            // 2) Mobile navigation and dropdowns
            // -------------------------------------------------------------
            const menuToggleButton = document.querySelector('[data-menu-toggle]');
            const menuPanel = document.getElementById('primary-menu');
            const dropdownButtons = document.querySelectorAll('[data-dropdown-button]');
            const menuLinks = menuPanel ? menuPanel.querySelectorAll('a') : [];

            function closeDropdowns(exceptButton = null) {
                dropdownButtons.forEach((button) => {
                    if (exceptButton && button === exceptButton) {
                        return;
                    }

                    const panelId = button.getAttribute('aria-controls');
                    const panel = panelId ? document.getElementById(panelId) : null;

                    button.setAttribute('aria-expanded', 'false');
                    if (panel) {
                        panel.classList.add('hidden');
                    }
                });
            }

            function openDropdown(button, panel) {
                closeDropdowns(button);
                panel.classList.remove('hidden');
                button.setAttribute('aria-expanded', 'true');
            }

            if (menuToggleButton && menuPanel) {
                menuToggleButton.addEventListener('click', () => {
                    const willOpen = menuPanel.classList.contains('hidden');
                    menuPanel.classList.toggle('hidden');
                    menuToggleButton.setAttribute('aria-expanded', String(willOpen));
                    if (!willOpen) {
                        closeDropdowns();
                    }
                });
            }

            dropdownButtons.forEach((button) => {
                const panelId = button.getAttribute('aria-controls');
                const panel = panelId ? document.getElementById(panelId) : null;
                if (!panel) {
                    return;
                }

                button.addEventListener('click', (event) => {
                    event.preventDefault();
                    const isOpen = button.getAttribute('aria-expanded') === 'true';
                    closeDropdowns();
                    if (!isOpen) {
                        openDropdown(button, panel);
                    }
                });

                button.addEventListener('keydown', (event) => {
                    if (event.key !== 'ArrowDown' && event.key !== 'Enter' && event.key !== ' ') {
                        return;
                    }

                    event.preventDefault();
                    if (panel.classList.contains('hidden')) {
                        openDropdown(button, panel);
                    }

                    const firstLink = panel.querySelector('a');
                    if (firstLink) {
                        firstLink.focus();
                    }
                });

            });

            if (menuLinks.length > 0 && menuToggleButton && menuPanel) {
                menuLinks.forEach((link) => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth >= mobileBreakpoint) {
                            return;
                        }

                        closeDropdowns();
                        menuPanel.classList.add('hidden');
                        menuToggleButton.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            document.addEventListener('click', (event) => {
                if (!(event.target instanceof Element)) {
                    return;
                }

                if (event.target.closest('[data-dropdown]') || event.target.closest('[data-menu-toggle]')) {
                    return;
                }

                closeDropdowns();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key !== 'Escape') {
                    return;
                }

                closeDropdowns();

                if (window.innerWidth < mobileBreakpoint && menuToggleButton && menuPanel && !menuPanel.classList.contains('hidden')) {
                    menuPanel.classList.add('hidden');
                    menuToggleButton.setAttribute('aria-expanded', 'false');
                    menuToggleButton.focus();
                }
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth < mobileBreakpoint && menuToggleButton && menuPanel && menuToggleButton.getAttribute('aria-expanded') !== 'true') {
                    menuPanel.classList.add('hidden');
                }

                if (window.innerWidth >= mobileBreakpoint) {
                    closeDropdowns();
                    if (menuToggleButton) {
                        menuToggleButton.setAttribute('aria-expanded', 'false');
                    }
                }
            });

            // -------------------------------------------------------------
            // 3) Explicit lazy-loading for below-the-fold images
            // -------------------------------------------------------------
            const lazyImages = document.querySelectorAll('img[data-src]');

            function hydrateImage(img) {
                const source = img.getAttribute('data-src');
                if (!source) {
                    return;
                }

                img.setAttribute('src', source);
                img.removeAttribute('data-src');
            }

            if ('IntersectionObserver' in window && lazyImages.length > 0) {
                const imageObserver = new IntersectionObserver((entries, observer) => {
                    entries.forEach((entry) => {
                        if (!entry.isIntersecting) {
                            return;
                        }

                        const target = entry.target;
                        if (!(target instanceof HTMLImageElement)) {
                            return;
                        }

                        hydrateImage(target);
                        observer.unobserve(target);
                    });
                }, {
                    rootMargin: '220px 0px',
                    threshold: 0.01
                });

                lazyImages.forEach((img) => {
                    imageObserver.observe(img);
                });
            } else {
                lazyImages.forEach((img) => {
                    if (!(img instanceof HTMLImageElement)) {
                        return;
                    }

                    hydrateImage(img);
                });
            }
        })();
    </script>
</body>

</html>

