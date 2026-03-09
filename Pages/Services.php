<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/document-portal.php';

$pageTitle = 'City Services';
$pageDescription = 'Library access, assistance requirements, citizen charter references, and digital service links for residents of Imus.';

$serviceHighlights = [
    [
        'eyebrow' => 'Public Library',
        'title' => 'Learning, reading, and community study access',
        'summary' => 'A dedicated city library space for students, families, and researchers with on-site resources and a public Facebook page for updates.',
        'href' => '#City-Public-Library',
    ],
    [
        'eyebrow' => 'Assistance',
        'title' => 'Requirements for common city aid requests',
        'summary' => 'Medical, burial, fire victim, and Balik Probinsya assistance requirements are consolidated into one guided section.',
        'href' => '#Assistance',
    ],
    [
        'eyebrow' => "Citizen's Charter",
        'title' => 'Service references by office and floor',
        'summary' => 'Browse charter files by office location and quickly open the latest references available in the project document archive.',
        'href' => '#Citizens-Charter',
    ],
    [
        'eyebrow' => 'eBOSS',
        'title' => 'Digital business permit access',
        'summary' => 'The online Electronic Business One-Stop Shop remains the fastest route for business registration, renewal, and status tracking.',
        'href' => '#EBOSS',
    ],
];

$libraryFacts = [
    'Lower Ground Floor, Imus Government Center, Malagasang I-G, City of Imus, Cavite',
    'Monday to Friday, 8:00 AM to 5:00 PM',
    'Open to residents, students, and visitors for on-site reading and research',
];

$assistancePrograms = [
    [
        'title' => 'Medical Assistance: Regular Medication',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Original or certified true copy of the medical certificate signed by the doctor',
            'Photocopy of the prescription signed by the same doctor',
            'Photocopy of laboratory requests, if applicable',
        ],
    ],
    [
        'title' => 'Medical Assistance: Hospitalization or Confinement',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Original or certified true copy of the medical abstract signed by the doctor',
            'Photocopy of hospital bill signed by the billing clerk or promissory note if unpaid',
        ],
    ],
    [
        'title' => 'Medical Assistance: Chemotherapy or Dialysis',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Original or certified true copy of the medical abstract signed by the doctor',
            'Original or certified true copy of the treatment protocol or price quotation signed by the doctor',
        ],
    ],
    [
        'title' => 'Burial Assistance',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Certified true copy of the registered death certificate',
            'Funeral contract',
        ],
    ],
    [
        'title' => 'Financial Assistance: Fire Victims',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Fire incident report',
            'Photo of the house after the fire incident',
        ],
    ],
    [
        'title' => 'Financial Assistance: Balik Probinsya',
        'requirements' => [
            'Back-to-back photocopy of valid IDs of claimant and beneficiary with Imus address',
            "Voter's certification from COMELEC for claimant and beneficiary",
            'Barangay certification for claimant and beneficiary',
            'Transportation or fare quotation',
            'Acceptance letter from the receiving province',
        ],
    ],
];

$featuredCharters = [
    [
        'title' => "City Government of Imus Citizen's Charter 2024",
        'summary' => 'Primary citywide charter reference for front-facing public services.',
        'path' => 'DOCS/Citizen_s Charter/Outside_Office/IMUS LGU.pdf',
    ],
    [
        'title' => 'Business Permit and Licensing Office',
        'summary' => 'Permit processing, renewal workflows, and service steps for business applicants.',
        'path' => 'DOCS/Citizen_s Charter/Ground_Floor/BPLO_Revised_2024.pdf',
    ],
    [
        'title' => 'City Tourism and Heritage Office',
        'summary' => 'Tourism and heritage service references published in the charter archive.',
        'path' => 'DOCS/Citizen_s Charter/2nd_Floor/TOURISM_2024.pdf',
    ],
    [
        'title' => 'City of Imus Public Library',
        'summary' => 'Library-related procedures and public-facing service information.',
        'path' => 'DOCS/Citizen_s Charter/Ground_Floor/LIBRARY.pdf',
    ],
];

$ebossFeatures = [
    'Fast, paperless business registration and permit transactions',
    'Online payment support for taxes, fees, and permit-related obligations',
    'Real-time application tracking without repeated City Hall visits',
    'Always-available digital access for entrepreneurs and business operators',
];

$charterRoot = __DIR__ . '/../DOCS/Citizen_s Charter';
$charterLabels = [
    'Outside_Office' => 'Outside Offices',
    'Ground_Floor' => 'Ground Floor',
    '2nd_Floor' => '2nd Floor',
    '3rd_Floor' => '3rd Floor',
    '4th_Floor' => '4th Floor',
    '5th_Floor' => '5th Floor',
    'Citywide' => 'Citywide',
];
$charterOrder = array_keys($charterLabels);
$charterDocuments = imus_collect_documents(
    $charterRoot,
    'DOCS/Citizen_s Charter',
    true,
    ['pdf']
);
$citizenCharterGroups = imus_group_documents(
    $charterDocuments,
    static function (array $document): string {
        return $document['top_level_dir'] !== '' ? $document['top_level_dir'] : 'Citywide';
    }
);

uksort(
    $citizenCharterGroups,
    static function (string $left, string $right) use ($charterOrder): int {
        $leftIndex = array_search($left, $charterOrder, true);
        $rightIndex = array_search($right, $charterOrder, true);

        if ($leftIndex === false && $rightIndex === false) {
            return strcasecmp($left, $right);
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

$charterDocumentCount = count($charterDocuments);

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.22fr_0.78fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        City Services
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        City services, assistance routes, and digital support in one guide
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Browse the main resident-facing service areas, document references, and digital business support
                        available through the City Government of Imus.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#City-Public-Library"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            View Service Hubs
                        </a>
                        <a href="#Citizens-Charter"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Open Charter Directory
                        </a>
                    </div>

                    <div class="mt-8 grid gap-3 text-sm sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold">4 major service zones</p>
                            <p class="mt-1 text-white/80">Library, assistance, charter access, and eBOSS.</p>
                        </div>
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold"><?= e((string) $charterDocumentCount) ?> charter files</p>
                            <p class="mt-1 text-white/80">Grouped by office location for faster browsing.</p>
                        </div>
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold">On-site and digital support</p>
                            <p class="mt-1 text-white/80">Walk-in guidance plus online business transactions.</p>
                        </div>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-4 sm:p-5">
                    <?= imus_image('IMG/LibraryV1.jpg', 'City of Imus Public Library', [
                        'loading' => 'eager',
                        'decoding' => 'async',
                        'fetchpriority' => 'high',
                        'class' => 'h-64 w-full rounded-2xl object-cover sm:h-72 lg:h-80',
                    ]) ?>
                    <p class="mt-3 text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Featured Hub</p>
                    <h2 class="mt-1 font-display text-2xl font-semibold text-civicInk">City Public Library</h2>
                    <p class="mt-2 text-sm leading-relaxed text-slate-700">
                        A welcoming learning space inside the Imus Government Center for reading, study, and public
                        reference use.
                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto grid w-full max-w-[90rem] gap-5 lg:grid-cols-4">
            <?php foreach ($serviceHighlights as $highlight): ?>
                <article class="rounded-3xl border border-slate-200 bg-white/90 p-5 shadow-soft-xl backdrop-blur-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($highlight['eyebrow']) ?></p>
                    <h2 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($highlight['title']) ?></h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($highlight['summary']) ?></p>
                    <a href="<?= e($highlight['href']) ?>"
                        class="focusable mt-5 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                        Go to section
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="City-Public-Library" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 1</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">City Public Library</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        The City of Imus Public Library serves as a civic learning space for reading, reference work,
                        and quieter study sessions inside the Government Center.
                    </p>

                    <ul class="page-list mt-6 text-sm leading-relaxed text-slate-700 sm:text-base">
                        <?php foreach ($libraryFacts as $fact): ?>
                            <li><?= e($fact) ?></li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://www.facebook.com/cityofimuspubliclibrary" target="_blank" rel="noopener noreferrer"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Visit Library Facebook
                        </a>
                        <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-imusBlue/30 px-5 py-2.5 text-sm font-semibold text-imusBlue transition hover:bg-imusBlue/10">
                            Contact Assistance Desk
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden rounded-3xl border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-4 shadow-soft-xl sm:p-5">
                    <?= imus_image('IMG/LibraryV1.jpg', 'Inside the City of Imus Public Library', [
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'class' => 'h-[340px] w-full rounded-2xl object-cover sm:h-[400px]',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Assistance" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-5 shadow-soft-2xl sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 2</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Assistance Requirements</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                For assistance requests, proceed to the Action Center at the Office of the Congressman, 3rd Floor,
                City of Imus Government Center, and prepare the applicable documentary requirements below.
            </p>

            <div class="mt-8 grid gap-5 lg:grid-cols-2">
                <?php foreach ($assistancePrograms as $program): ?>
                    <article class="rounded-3xl border border-imusBlue/15 bg-white/90 p-5 shadow-soft-xl backdrop-blur-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Document Checklist</p>
                        <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($program['title']) ?></h3>
                        <ul class="page-list mt-4 text-sm leading-relaxed text-slate-700">
                            <?php foreach ($program['requirements'] as $requirement): ?>
                                <li><?= e($requirement) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Citizens-Charter" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="sm:flex sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 3</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Citizen's Charter Directory</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        Find charter documents through featured references and grouped floor-based collections for faster
                        browsing.
                    </p>
                </div>
                <div class="mt-4 rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-3 text-sm font-semibold text-imusBlue sm:mt-0">
                    <?= e((string) $charterDocumentCount) ?> charter files available in the local archive
                </div>
            </div>

            <div class="mt-8 grid gap-5 lg:grid-cols-4">
                <?php foreach ($featuredCharters as $charter): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-soft-xl">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Featured Reference</p>
                        <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($charter['title']) ?></h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($charter['summary']) ?></p>
                        <a href="<?= e(base_url($charter['path'])) ?>" target="_blank" rel="noopener noreferrer"
                            class="focusable mt-5 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                            Open PDF
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="mt-8 space-y-4">
                <?php if ($citizenCharterGroups !== []): ?>
                    <?php foreach ($citizenCharterGroups as $groupKey => $documents): ?>
                        <details class="page-details p-5" <?= $groupKey === array_key_first($citizenCharterGroups) ? 'open' : '' ?>>
                            <summary class="sm:flex sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Archive Group</p>
                                    <h3 class="mt-2 font-display text-xl font-semibold text-civicInk">
                                        <?= e($charterLabels[$groupKey] ?? imus_document_humanize($groupKey)) ?>
                                    </h3>
                                </div>
                                <span class="mt-3 inline-flex rounded-full border border-imusBlue/20 bg-imusBlue/5 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue sm:mt-0">
                                    <?= e((string) count($documents)) ?> files
                                </span>
                            </summary>
                            <div class="mt-5 grid gap-3 lg:grid-cols-2">
                                <?php foreach ($documents as $document): ?>
                                    <a href="<?= e($document['url']) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm font-medium text-slate-700 transition hover:border-imusBlue/25 hover:bg-imusBlue/5 hover:text-imusBlue">
                                        <?= e($document['label']) ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="rounded-3xl border border-imusBlue/15 bg-imusBlue/5 px-5 py-4 text-sm leading-relaxed text-slate-700">
                        Citizen's charter files were not found in the local archive for this route.
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="EBOSS" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                    <?= imus_image('IMG/EBOSS.png', 'eBOSS portal', [
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'class' => 'mx-auto h-full w-full max-w-sm rounded-2xl bg-white/90 p-2',
                    ]) ?>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-white/75">Section 4</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Electronic Business One-Stop Shop</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-white/85 sm:text-base">
                        eBOSS remains the most direct online route for entrepreneurs who need to register, renew, or
                        monitor business permit activity without relying on purely walk-in processing.
                    </p>
                    <ul class="page-list mt-5 text-sm leading-relaxed text-white/90 sm:text-base">
                        <?php foreach ($ebossFeatures as $feature): ?>
                            <li><?= e($feature) ?></li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://egovcityofimus.ph/ebpls/" target="_blank" rel="noopener noreferrer"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Open eBOSS Portal
                        </a>
                        <a href="<?= e(base_url('Pages/Business.php')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            View Business Page
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
