<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

$pageTitle = 'Contact Us';
$pageDescription = 'Verified public contact numbers, office hours, location details, and official communication channels for the City Government of Imus.';
$officialFacebook = imus_official_facebook_url();
$mainLines = imus_city_hall_main_lines();
$contactGroups = imus_contact_groups();

$quickActions = [
    [
        'title' => 'Call City Hall',
        'summary' => 'Use the main city hall line for public routing and general assistance.',
        'href' => imus_phone_href($mainLines[0]['value']),
        'label' => $mainLines[0]['value'],
    ],
    [
        'title' => 'Open Google Maps',
        'summary' => 'Navigate directly to New Imus City Hall using Google Maps.',
        'href' => imus_city_hall_maps_url(),
        'label' => 'View location',
        'external' => true,
    ],
    [
        'title' => 'Message the Official Page',
        'summary' => 'Public announcements and verified updates are also posted on the official Facebook page.',
        'href' => $officialFacebook,
        'label' => 'Open Facebook',
        'external' => true,
    ],
];

$visitHighlights = imus_city_visit_highlights();
$contactTips = imus_contact_tips();

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.18fr_0.82fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Public Contact Guide
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        Verified contact channels, office hours, and city hall directions in one place
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Use this page to find verified city contact channels, office hours, and visitor guidance in one
                        place.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#contact-directory"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            View Contact Directory
                        </a>
                        <a href="#visit-city-hall"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Plan a Visit
                        </a>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Quick Actions</p>
                    <div class="mt-4 space-y-3">
                        <?php foreach ($quickActions as $action): ?>
                            <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 p-4">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80"><?= e($action['title']) ?></p>
                                <p class="mt-2 text-sm leading-relaxed text-slate-700"><?= e($action['summary']) ?></p>
                                <a href="<?= e($action['href']) ?>"
                                    class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep"
                                    <?= !empty($action['external']) ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                    <?= e($action['label']) ?>
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-amber-300 bg-amber-50/95 p-5 shadow-soft-xl">
            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-amber-800">Notice</p>
            <p class="mt-2 text-sm leading-relaxed text-amber-950 sm:text-base">
                This portal currently provides verified numbers, office hours, location details, and official Facebook
                access. An online submission form is not yet connected to a live backend.
            </p>
        </div>
    </div>
</section>

<section id="contact-directory" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="text-center">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Directory</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Public contact directory</h2>
            <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base">
                Use these published channels for verified city government, emergency, and facility-related contact.
            </p>
        </div>

        <div class="mt-8 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($contactGroups as $group): ?>
                <article class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Verified Contact</p>
                    <h3 class="mt-2 font-display text-xl font-semibold text-civicInk"><?= e($group['title']) ?></h3>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($group['summary']) ?></p>

                    <ul class="mt-5 space-y-3">
                        <?php foreach ($group['numbers'] as $entry): ?>
                            <?php $tel = imus_phone_href($entry['value']); ?>
                            <li class="rounded-2xl border border-slate-200 bg-white px-4 py-3">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-slate-500"><?= e($entry['label']) ?></p>
                                <?php if ($tel !== ''): ?>
                                    <a href="<?= e($tel) ?>"
                                        class="focusable mt-1 inline-flex text-sm font-semibold text-imusBlue transition hover:text-imusGreen sm:text-base">
                                        <?= e($entry['value']) ?>
                                    </a>
                                <?php else: ?>
                                    <p class="mt-1 text-sm font-semibold text-imusBlue sm:text-base"><?= e($entry['value']) ?></p>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="visit-city-hall" class="deferred-section relative z-10 overflow-hidden pb-12 sm:pb-14 lg:pb-16">
    <div class="pointer-events-none absolute left-0 top-6 h-64 w-64 rounded-full bg-imusBlue/15 blur-3xl"></div>
    <div class="pointer-events-none absolute right-0 bottom-6 h-72 w-72 rounded-full bg-imusGreen/15 blur-3xl"></div>

    <div class="section-shell relative">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-4 shadow-soft-2xl sm:p-6 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.2fr_0.8fr] xl:items-stretch">
                <div class="overflow-hidden rounded-3xl border border-imusBlue/20 bg-white/90 p-3 shadow-soft-xl backdrop-blur-sm sm:p-4">
                    <div class="mb-4 flex flex-wrap items-center justify-between gap-2 px-1">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue/80">Location</p>
                            <h2 class="mt-1 font-display text-2xl font-bold text-civicInk sm:text-3xl">Visit City Hall</h2>
                        </div>
                        <a href="<?= e(imus_city_hall_maps_url()) ?>" target="_blank" rel="noopener noreferrer"
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
                </div>

                <div class="relative overflow-hidden rounded-3xl border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b467f] p-6 text-white shadow-soft-xl sm:p-7 lg:p-8">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-white/80">Plan Your Visit</p>
                    <h3 class="mt-2 font-display text-3xl font-bold leading-tight sm:text-4xl">Office hours and arrival details</h3>
                    <p class="mt-3 text-sm leading-relaxed text-white/85 sm:text-base">
                        Use the location details below to plan in-person transactions, document pickup, and office visits.
                    </p>

                    <div class="mt-6 space-y-4">
                        <?php foreach ($visitHighlights as $highlight): ?>
                            <article class="rounded-2xl border border-white/25 bg-white/10 p-4 backdrop-blur-sm">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/80"><?= e($highlight['label']) ?></p>
                                <p class="mt-1 text-sm font-medium text-white sm:text-base"><?= e($highlight['value']) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-7 rounded-2xl border border-white/20 bg-white/10 p-4 backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/75">Before You Call or Visit</p>
                        <ul class="page-list mt-3 text-sm leading-relaxed text-white/90">
                            <?php foreach ($contactTips as $tip): ?>
                                <li><?= e($tip) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div class="rounded-3xl border border-white/20 bg-white/10 p-5 shadow-soft-xl backdrop-blur-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">Public Resources</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Need the next step after contacting an office?</h2>
                    <p class="mt-4 text-sm leading-relaxed text-white/85 sm:text-base">
                        Use the forms library for downloadable files or open the full disclosure archive for public
                        governance records and posted issuances.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="<?= e(base_url('Pages/Downloadable-Forms.php')) ?>"
                        class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                        Downloadable Forms
                    </a>
                    <a href="<?= e(base_url('Pages/Full-Disclosure.php')) ?>"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Full Disclosures
                    </a>
                    <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Official Facebook
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
