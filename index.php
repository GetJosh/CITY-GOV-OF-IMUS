<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/bootstrap.php';

$officialFacebook = imus_official_facebook_url();
$mayorFacebook = imus_mayor_facebook_url();
$cityHallAddress = imus_city_hall_address();
$cityHallOfficeHours = imus_city_hall_office_hours();
$cityHallMapsUrl = imus_city_hall_maps_url();
$pageTitle = 'City Government of Imus | Official Public Information Portal';
$pageDescription = 'Official City Government of Imus website for services, forms, full disclosures, contacts, emergency hotlines, and verified community updates.';

/* Quick links shown in the hero section. */
$quickLinks = [
    [
        'title' => 'Downloadable Forms',
        'description' => 'Get official forms for permits, clearances, and city applications.',
        'href' => base_url('Pages/Downloadable-Forms.php'),
    ],
    [
        'title' => 'Full Disclosures',
        'description' => 'Review city disclosures, reports, bids, and governance updates.',
        'href' => base_url('Pages/Full-Disclosure.php'),
    ],
    [
        'title' => 'Contact Us',
        'description' => 'Reach the right office for concerns, requests, and public inquiries.',
        'href' => base_url('Pages/Contact-Us.php'),
    ],
    [
        'title' => 'City Services',
        'description' => 'Explore service desks, online support, and citizen resources.',
        'href' => base_url('Pages/Services.php'),
    ],
    [
        'title' => 'Emergency Contacts',
        'description' => 'View essential hotlines and response numbers for urgent needs.',
        'href' => '#emergency-contacts',
    ],
    [
        'title' => 'Business and Permits',
        'description' => 'Access business-related information, requirements, and guidance.',
        'href' => base_url('Pages/Business.php'),
    ],
];

/* Home page news cards. */
$newsItems = [
    [
        'title' => 'Medical and Dental Mission Expands City Health Support',
        'summary' => 'A city-supported mission delivered consultations, medicines, and preventive services to families in need.',
        'date' => 'December 2025',
        'image' => 'IMG/optimized/news-2025-dec-medical.jpg',
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Financial Assistance Reaches Women Across Imus Communities',
        'summary' => 'Qualified women beneficiaries received targeted aid through coordinated local programs.',
        'date' => 'January 2025',
        'image' => 'IMG/optimized/news-2025-jan-financial.jpg',
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Influenza Vaccination Drive Protects Senior Citizens',
        'summary' => 'Public health teams strengthened preventive care through scheduled vaccination efforts.',
        'date' => 'January 2025',
        'image' => 'IMG/optimized/news-2025-jan-flu-vax.jpg',
        'url' => $officialFacebook,
    ],
    [
        'title' => 'City of Imus Sports Complex Reopens with Upgrades',
        'summary' => 'Facility improvements now support safer and better recreation for residents and athletes.',
        'date' => 'January 2025',
        'image' => 'IMG/optimized/news-2025-jan-sports.jpg',
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Job Matching Activity Connects Applicants to New Opportunities',
        'summary' => 'The city recorded hundreds of applicants in a focused employment matching initiative.',
        'date' => 'January 2025',
        'image' => 'IMG/optimized/news-2025-jan-job-matching.jpg',
        'url' => $officialFacebook,
    ],
    [
        'title' => 'Local Officials Take Oath for Clean and Peaceful Elections',
        'summary' => 'City leaders reaffirmed their commitment to lawful, accountable, and people-centered governance.',
        'date' => 'January 2025',
        'image' => 'IMG/optimized/news-2025-jan-oath.jpg',
        'url' => $officialFacebook,
    ],
];

$emergencyContacts = imus_contact_groups();

require_once __DIR__ . '/includes/header.navbar.php';
?>
            <!-- Hero + Quick Links -->
            <section class="hero-pattern relative z-10 pb-12 pt-8 text-white sm:pt-12 lg:pt-14">
                <div class="section-shell">
                    <div class="grid gap-6 md:gap-8 xl:grid-cols-2">
                        <div
                            class="rounded-3xl border border-white/25 p-5 shadow-soft-2xl animate-fade-slide sm:p-8 lg:p-10 xl:p-12">
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
                                <a href="<?= e(base_url('Pages/Services.php')) ?>"
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
                                <?= imus_image('IMG/optimized/carousel-ngc.jpg', 'New Government Center in the City of Imus', [
                                    'loading' => 'eager',
                                    'decoding' => 'async',
                                    'fetchpriority' => 'high',
                                    'class' => 'h-64 w-full object-cover sm:h-72 lg:h-full',
                                ]) ?>
                                <div
                                    class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-civicInk/95 via-civicInk/40 to-transparent p-5">
                                    <h2 class="font-display text-xl font-semibold">New Government Center</h2>
                                    <p class="mt-1 text-sm text-white/85"><?= e($cityHallAddress) ?></p>
                                </div>
                            </article>
                            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-1 2xl:grid-cols-2">
                                <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                    <p class="text-xs uppercase tracking-[0.12em] text-white/75">Office Hours</p>
                                    <p class="mt-2 text-sm font-semibold"><?= e($cityHallOfficeHours) ?></p>
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
                        <div
                            class="pointer-events-none absolute inset-y-0 right-[44%] hidden w-px bg-white/12 lg:block">
                        </div>

                        <div
                            class="relative grid gap-7 px-5 py-6 sm:px-8 sm:py-8 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-10 lg:py-10">
                            <div class="order-2 lg:order-1">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-white/75">Mayor's
                                    Message</p>
                                <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl lg:text-4xl">
                                    Public service that is visible, responsive, and people-first
                                </h2>
                                <div
                                    class="mt-5 rounded-2xl border border-white/15 bg-white/10 p-4 backdrop-blur-sm sm:p-5">
                                    <p class="text-sm leading-relaxed text-white/90 sm:text-base">
                                        Welcome to the City of Imus. The local government continues to deliver public
                                        services, health and education programs, infrastructure projects, and verified
                                        community updates guided by transparent and responsive governance.
                                    </p>
                                    <p class="mt-3 text-sm leading-relaxed text-white/90 sm:text-base">
                                        Residents can use this website to access forms, disclosures, emergency
                                        contacts, and official updates while learning more about the city's history,
                                        leadership, and programs.
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

                            <div class="order-1 mx-auto w-full max-w-md lg:order-2 lg:max-w-none">
                                <div
                                    class="relative rounded-3xl border border-white/20 bg-white/10 p-4 shadow-soft-xl backdrop-blur-sm">
                                    <div
                                        class="pointer-events-none absolute inset-x-8 -top-px h-px bg-gradient-to-r from-transparent via-white/65 to-transparent">
                                    </div>
                                    <?= imus_image('IMG/officials-and-councilors/MayorStanding.png', 'Hon. Alex AA L. Advincula, City Mayor of Imus', [
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                        'class' => 'mx-auto h-[420px] w-full object-contain drop-shadow-2xl sm:h-[520px] lg:h-[580px]',
                                    ]) ?>
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
                <div class="pointer-events-none absolute -left-16 top-8 h-56 w-56 rounded-full bg-imusBlue/10 blur-3xl">
                </div>
                <div
                    class="pointer-events-none absolute -right-16 bottom-6 h-60 w-60 rounded-full bg-imusGreen/10 blur-3xl">
                </div>

                <div class="section-shell relative">
                    <div
                        class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
                        <div class="flex flex-col gap-5 sm:flex-row sm:items-end sm:justify-between">
                            <div class="max-w-2xl">
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-imusBlue">Latest News
                                </p>
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
                                        <?= imus_image($newsItem['image'], $newsItem['title'], [
                                            'loading' => 'lazy',
                                            'decoding' => 'async',
                                            'fetchpriority' => 'low',
                                            'class' => 'h-48 w-full object-cover transition duration-500 group-hover:scale-[1.04] sm:h-52 lg:h-56',
                                        ]) ?>
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
            <section
                class="deferred-section relative z-10 overflow-hidden bg-gradient-to-br from-imusDeep via-imusBlue to-[#0a3a70] py-12 text-white sm:py-14 lg:py-16">
                <div
                    class="pointer-events-none absolute -left-12 top-10 h-56 w-56 rounded-full bg-imusGreen/20 blur-3xl">
                </div>
                <div
                    class="pointer-events-none absolute -right-16 bottom-6 h-72 w-72 rounded-full bg-sky-300/15 blur-3xl">
                </div>

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
                                <article
                                    class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Core
                                        Value
                                    </p>
                                    <p class="mt-1 text-sm font-semibold">Integrity in Service</p>
                                </article>
                                <article
                                    class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">
                                        Direction</p>
                                    <p class="mt-1 text-sm font-semibold">Smart and Sustainable Growth</p>
                                </article>
                                <article
                                    class="rounded-2xl border border-white/25 bg-white/10 px-4 py-3 backdrop-blur-sm">
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">Focus
                                    </p>
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
                                                <path d="m9.5 12.5 1.8 1.8L15 11" stroke="currentColor"
                                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/80">
                                            Mission</p>
                                    </div>

                                    <h3 class="mt-4 font-display text-2xl font-semibold leading-tight sm:text-3xl">
                                        Deliver trusted and responsive public service
                                    </h3>
                                    <p class="mt-4 text-sm leading-relaxed text-white/90 sm:text-base">
                                        The City Government of Imus is committed to transparent, reliable, and efficient
                                        programs that respond to people's needs while advancing inclusive and
                                        sustainable
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
                                                <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7S2 12 2 12Z"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <circle cx="12" cy="12" r="3" stroke="currentColor"
                                                    stroke-width="1.5" />
                                            </svg>
                                        </span>
                                        <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/80">
                                            Vision</p>
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
                        <div
                            class="pointer-events-none absolute -left-20 top-10 h-64 w-64 rounded-full bg-imusGreen/20 blur-3xl">
                        </div>
                        <div
                            class="pointer-events-none absolute -right-20 bottom-10 h-64 w-64 rounded-full bg-sky-300/20 blur-3xl">
                        </div>

                        <div
                            class="relative grid gap-6 px-5 py-6 sm:px-8 sm:py-8 xl:grid-cols-[1.25fr_0.75fr] xl:gap-8 lg:p-10">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/75">Stay
                                    Connected
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
                                    <div
                                        class="aspect-video overflow-hidden rounded-2xl border border-imusGreen/35 bg-black/15">
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
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">
                                        Official
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
                                    <p class="text-[11px] font-semibold uppercase tracking-[0.14em] text-white/75">
                                        Mayor's
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
                                    <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
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
                <div class="pointer-events-none absolute left-0 top-6 h-64 w-64 rounded-full bg-imusBlue/15 blur-3xl">
                </div>
                <div
                    class="pointer-events-none absolute right-0 bottom-6 h-72 w-72 rounded-full bg-imusGreen/15 blur-3xl">
                </div>

                <div class="section-shell relative">
                    <div
                        class="relative mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-4 shadow-soft-2xl sm:p-6 lg:p-8">
                        <div
                            class="pointer-events-none absolute -left-16 top-12 h-44 w-44 rounded-full bg-imusBlue/15 blur-3xl">
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
                                    <a href="<?= e($cityHallMapsUrl) ?>" target="_blank"
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
                                        <p
                                            class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
                                            City Hall</p>
                                        <p class="mt-1 text-sm font-semibold text-civicInk"><?= e($cityHallAddress) ?></p>
                                    </div>
                                    <div class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3">
                                        <p
                                            class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
                                            Weekday Hours</p>
                                        <p class="mt-1 text-sm font-semibold text-civicInk"><?= e($cityHallOfficeHours) ?></p>
                                    </div>
                                    <div class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3">
                                        <p
                                            class="text-[11px] font-semibold uppercase tracking-[0.12em] text-imusBlue/80">
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
                                    Plan your visit with verified location details, office schedule, and public
                                    assistance
                                    information.
                                </p>

                                <div class="mt-6 space-y-4">
                                    <article
                                        class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">
                                            Address</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            <?= e($cityHallAddress) ?>
                                        </p>
                                    </article>
                                    <article
                                        class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">
                                            Office Hours</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            <?= e($cityHallOfficeHours) ?>
                                        </p>
                                    </article>
                                    <article
                                        class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80">
                                            Public Assistance</p>
                                        <p class="mt-1 text-sm font-medium text-white sm:text-base">
                                            For urgent concerns, use the emergency contact section below.
                                        </p>
                                    </article>
                                </div>

                                <div class="mt-7 grid gap-3 sm:grid-cols-2">
                                    <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
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
                                <h3 class="font-display text-xl font-semibold text-civicInk"><?= e($contact['title']) ?>
                                </h3>
                                <ul class="mt-4 space-y-3">
                                    <?php foreach ($contact['numbers'] as $entry): ?>
                                        <?php $tel = imus_phone_href($entry['value']); ?>
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
<?php require_once __DIR__ . '/includes/footer.php'; ?>
