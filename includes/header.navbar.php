<?php
declare(strict_types=1);

require_once __DIR__ . '/bootstrap.php';

$resolvedPageTitle = trim((string) ($pageTitle ?? 'City Government of Imus'));
if ($resolvedPageTitle === '') {
    $resolvedPageTitle = 'City Government of Imus';
}
if (stripos($resolvedPageTitle, 'City Government of Imus') === false) {
    $resolvedPageTitle .= ' | City Government of Imus';
}

$resolvedPageDescription = trim((string) ($pageDescription
    ?? 'Official City Government of Imus website for services, forms, full disclosures, contacts, emergency hotlines, and verified community updates.'));

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') === '443')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$requestPath = explode('?', $_SERVER['REQUEST_URI'] ?? base_url('index.php'), 2)[0];
$resolvedCanonicalUrl = (isset($canonicalUrl) && is_string($canonicalUrl) && $canonicalUrl !== '')
    ? $canonicalUrl
    : ($scheme . '://' . $host . $requestPath);

$officialFacebook = (isset($officialFacebook) && is_string($officialFacebook) && trim($officialFacebook) !== '')
    ? $officialFacebook
    : imus_official_facebook_url();
$resolvedOgImage = (isset($ogImagePath) && is_string($ogImagePath) && trim($ogImagePath) !== '')
    ? imus_absolute_url($ogImagePath)
    : imus_absolute_url('IMG/city_seal.png');

$utilityLinks = [
    [
        'label' => 'Full Disclosures',
        'href' => base_url('Pages/Full-Disclosure.php'),
        'external' => false,
    ],
    [
        'label' => 'Downloadable Forms',
        'href' => base_url('Pages/Downloadable-Forms.php'),
        'external' => false,
    ],
    [
        'label' => 'Contact Us',
        'href' => base_url('Pages/Contact-Us.php'),
        'external' => false,
    ],
    [
        'label' => 'Official Facebook',
        'href' => $officialFacebook,
        'external' => true,
    ],
];

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
            ['label' => 'City Public Library', 'href' => base_url('Pages/Services.php#City-Public-Library')],
            ['label' => 'Assistance Programs', 'href' => base_url('Pages/Services.php#Assistance')],
            ['label' => "Citizen's Charter", 'href' => base_url('Pages/Services.php#Citizens-Charter')],
            ['label' => 'EBOSS', 'href' => base_url('Pages/Services.php#EBOSS')],
        ],
    ],
    [
        'label' => 'Tourism',
        'children' => [
            ['label' => 'History and Culture', 'href' => base_url('Pages/Tourism.php#History-and-Culture')],
            ['label' => 'Visiting Imus', 'href' => base_url('Pages/Tourism.php#Visiting-Imus')],
            ['label' => 'Heroes of Imus', 'href' => base_url('Pages/Tourism.php#Heroes-of-Imus')],
            ['label' => 'Notable Persons', 'href' => base_url('Pages/Tourism.php#Notable-Persons')],
        ],
    ],
    [
        'label' => 'Business',
        'href' => base_url('Pages/Business.php'),
    ],
];

$initialManilaDateTime = (new DateTimeImmutable('now', new DateTimeZone('Asia/Manila')))
    ->format('F j, Y | g:i A') . ' (PHT)';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($resolvedPageTitle) ?></title>
    <meta name="description" content="<?= e($resolvedPageDescription) ?>">
    <meta name="theme-color" content="#062a5d">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= e($resolvedPageTitle) ?>">
    <meta property="og:description" content="<?= e($resolvedPageDescription) ?>">
    <meta property="og:url" content="<?= e($resolvedCanonicalUrl) ?>">
    <meta property="og:image" content="<?= e($resolvedOgImage) ?>">
    <meta property="og:image:alt" content="City Government of Imus">
    <link rel="canonical" href="<?= e($resolvedCanonicalUrl) ?>">
    <link rel="icon" href="<?= e(imus_asset_url('IMG/city_seal.png')) ?>" sizes="100x100">
    <link rel="preload" href="<?= e(base_url('CSS/index.tailwind.min.css')) ?>" as="style">
    <link rel="stylesheet" href="<?= e(base_url('CSS/index.tailwind.min.css')) ?>">
</head>

<body class="min-h-screen font-sans text-slate-800 antialiased">
    <a href="#main-content"
        class="focusable sr-only absolute left-3 top-3 z-[120] rounded-lg bg-imusDeep px-4 py-2 text-sm font-semibold text-white focus:not-sr-only focus:absolute">
        Skip to main content
    </a>
    <div class="relative isolate overflow-hidden">
        <div class="pointer-events-none absolute -left-24 top-20 h-72 w-72 rounded-full bg-imusGreen/20 blur-3xl"></div>
        <div class="pointer-events-none absolute -right-20 top-[22rem] h-80 w-80 rounded-full bg-imusBlue/20 blur-3xl"></div>

        <header class="relative z-40">
            <div class="bg-imusDeep text-white/95">
                <div class="section-shell flex flex-col gap-3 py-3 text-sm sm:flex-row sm:items-center sm:justify-between">
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
                            <?= imus_image('IMG/Logo_City_Government_of_Imuss.png', 'City Government of Imus logo', [
                                'loading' => 'eager',
                                'decoding' => 'async',
                                'fetchpriority' => 'high',
                                'class' => 'h-10 w-auto rounded-lg bg-white/90 px-2 py-1 shadow-md sm:h-12',
                            ]) ?>
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
