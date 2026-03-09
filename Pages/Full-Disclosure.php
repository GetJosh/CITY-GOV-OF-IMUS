<?php
declare(strict_types=1);

$pageTitle = 'Full Disclosure';
$pageDescription = 'Full disclosure reports, executive orders, ordinances, bids, resolutions, GAD records, and other governance documents for the City of Imus.';

require_once __DIR__ . '/../includes/document-portal.php';

$disclosureRoot = __DIR__ . '/../DOCS/FULL DISCLOSURE';
$gadLabels = [
    'CSWDO' => 'CSWDO',
    'Demography' => 'Demography',
    'Education' => 'Education',
    'Health' => 'Health',
    'OSCA' => 'OSCA',
    'PDAO' => 'PDAO',
];

$sectionDefinitions = [
    [
        'id' => 'executive-orders',
        'title' => 'Executive Orders',
        'description' => 'Executive issuances published in the disclosure archive and grouped by detected year.',
        'directory' => 'Executive Orders',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'resolutions',
        'title' => 'Resolutions',
        'description' => 'Published Sangguniang Panlungsod resolutions available for review and download.',
        'directory' => 'Resolutions',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'city-ordinances',
        'title' => 'City Ordinances',
        'description' => 'Posted city ordinances currently present in the disclosure folder.',
        'directory' => 'City Ordinances',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'bids-and-awards',
        'title' => 'Bids and Awards',
        'description' => 'Bidding notices, bulletins, and BAC files grouped by the year found in each filename.',
        'directory' => 'Bids and Awards',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'full-disclosure-policy',
        'title' => 'Full Disclosure Policy',
        'description' => 'Budget, compliance, and supporting disclosure policy files from the posted archive.',
        'directory' => 'Full Disclosure Policy',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'local-government-support-funds',
        'title' => 'Local Government Support Funds',
        'description' => 'Trust fund and support fund records grouped by year.',
        'directory' => 'TrustFund',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'banaag',
        'title' => 'BanAAg Issuances',
        'description' => 'BanAAg publications and related issuances available in the local disclosure archive.',
        'directory' => 'BanAAg',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'gad-database',
        'title' => 'GAD Database',
        'description' => 'Gender and Development records grouped by subject area using the posted folder structure.',
        'directory' => 'GAD DATABASE',
        'recursive' => true,
        'grouping' => 'gad',
    ],
    [
        'id' => 'job-vacancies',
        'title' => 'Job Vacancies',
        'description' => 'Published vacancy postings and related job opportunity files from the disclosure archive.',
        'directory' => 'Job vacancies',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'disposal-invitations',
        'title' => 'Disposal Invitations',
        'description' => 'Disposal notices, invitations, and related files for posted disposal activities.',
        'directory' => 'Disposal-Invitations',
        'recursive' => false,
        'grouping' => 'year',
    ],
    [
        'id' => 'additional-records',
        'title' => 'Additional Records',
        'description' => 'Files stored at the top level of the disclosure archive outside the named folders.',
        'directory' => '',
        'recursive' => false,
        'grouping' => 'year',
    ],
];

$sections = [];
$allDisclosureDocuments = [];

foreach ($sectionDefinitions as $definition) {
    $absoluteDirectory = $definition['directory'] === ''
        ? $disclosureRoot
        : $disclosureRoot . '/' . $definition['directory'];
    $publicDirectory = 'DOCS/FULL DISCLOSURE' . ($definition['directory'] === '' ? '' : '/' . $definition['directory']);
    $documents = imus_collect_documents($absoluteDirectory, $publicDirectory, $definition['recursive']);

    if ($definition['directory'] === '') {
        $documents = array_values(
            array_filter(
                $documents,
                static fn(array $document): bool => $document['relative_dir'] === ''
            )
        );
    }

    if ($definition['grouping'] === 'gad') {
        $groupedDocuments = imus_group_documents(
            $documents,
            static function (array $document) use ($gadLabels): string {
                $groupKey = $document['top_level_dir'];

                if ($groupKey === '') {
                    return 'General GAD Records';
                }

                return $gadLabels[$groupKey] ?? imus_document_humanize($groupKey);
            }
        );
    } else {
        $groupedDocuments = imus_group_documents(
            $documents,
            static fn(array $document): string => $document['year']
        );
    }

    $sections[] = $definition + [
        'count' => count($documents),
        'documents' => $documents,
        'groups' => $groupedDocuments,
    ];

    foreach ($documents as $document) {
        $allDisclosureDocuments[] = $document;
    }
}

$latestDisclosureTimestamp = imus_latest_document_timestamp($allDisclosureDocuments);
$latestDisclosureLabel = $latestDisclosureTimestamp !== null ? date('F j, Y', $latestDisclosureTimestamp) : 'Archive unavailable';
$latestArchiveYear = 'Undated';

foreach ($allDisclosureDocuments as $document) {
    if (!ctype_digit($document['year'])) {
        continue;
    }

    if (!ctype_digit($latestArchiveYear) || (int) $document['year'] > (int) $latestArchiveYear) {
        $latestArchiveYear = $document['year'];
    }
}

$publishedSectionCount = 0;
foreach ($sections as $section) {
    if ($section['count'] > 0) {
        $publishedSectionCount++;
    }
}

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.18fr_0.82fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Public Records
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        Full disclosure records and governance documents
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Review executive orders, resolutions, ordinances, bids and awards, GAD records, job vacancies,
                        and related public disclosures published by the City Government of Imus.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#executive-orders"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Start with Executive Orders
                        </a>
                        <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Contact the City
                        </a>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Archive Snapshot</p>
                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Published Files</p>
                            <p class="mt-1 font-display text-2xl font-semibold text-civicInk"><?= e((string) count($allDisclosureDocuments)) ?></p>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Active Sections</p>
                            <p class="mt-1 font-display text-2xl font-semibold text-civicInk"><?= e((string) $publishedSectionCount) ?></p>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Latest Archive Year</p>
                            <p class="mt-1 font-display text-xl font-semibold text-civicInk"><?= e($latestArchiveYear) ?></p>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 px-4 py-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue/80">Last File Update</p>
                            <p class="mt-1 font-display text-xl font-semibold text-civicInk"><?= e($latestDisclosureLabel) ?></p>
                        </article>
                    </div>
                    <p class="mt-5 text-sm leading-relaxed text-slate-700">
                        Files may open as PDF, image, or document formats depending on the published source record.
                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto grid w-full max-w-[90rem] gap-5 md:grid-cols-2 xl:grid-cols-3">
            <?php foreach ($sections as $section): ?>
                <a href="#<?= e($section['id']) ?>"
                    class="focusable rounded-3xl border border-slate-200 bg-white/90 p-5 shadow-soft-xl transition hover:-translate-y-1 hover:border-imusBlue/25 hover:shadow-soft-2xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e((string) $section['count']) ?> files</p>
                    <h2 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($section['title']) ?></h2>
                    <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($section['description']) ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php foreach ($sections as $sectionIndex => $section): ?>
    <section id="<?= e($section['id']) ?>" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
        <div class="section-shell">
            <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
                <div class="flex flex-wrap items-start justify-between gap-4">
                    <div>
                        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Disclosure Section</p>
                        <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl"><?= e($section['title']) ?></h2>
                        <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                            <?= e($section['description']) ?>
                        </p>
                    </div>
                    <span class="inline-flex rounded-full bg-imusBlue px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-white">
                        <?= e((string) $section['count']) ?> files
                    </span>
                </div>

                <?php if ($section['count'] === 0): ?>
                    <div class="mt-8 rounded-3xl border border-amber-300 bg-amber-50 px-5 py-4 text-sm text-amber-900">
                        No files are currently published in this archive folder.
                    </div>
                <?php else: ?>
                    <div class="mt-8 space-y-4">
                        <?php foreach ($section['groups'] as $groupLabel => $documents): ?>
                            <details class="page-details p-5" <?= $groupLabel === array_key_first($section['groups']) && $sectionIndex < 2 ? 'open' : '' ?>>
                                <summary class="flex flex-wrap items-start justify-between gap-4">
                                    <div>
                                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Archive Group</p>
                                        <h3 class="mt-2 font-display text-xl font-semibold text-civicInk"><?= e((string) $groupLabel) ?></h3>
                                        <p class="mt-2 text-sm leading-relaxed text-slate-600">
                                            <?= e(count($documents) . ' published file' . (count($documents) === 1 ? '' : 's')) ?>
                                        </p>
                                    </div>
                                    <span class="inline-flex rounded-full bg-imusBlue/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">
                                        <?= e((string) count($documents)) ?> items
                                    </span>
                                </summary>

                                <div class="mt-5 space-y-3">
                                    <?php foreach ($documents as $document): ?>
                                        <article class="document-item">
                                            <div class="min-w-0">
                                                <h4 class="font-semibold text-civicInk"><?= e($document['label']) ?></h4>
                                                <div class="document-meta">
                                                    <span class="document-pill document-pill-blue"><?= e($document['extension_label']) ?></span>
                                                    <span class="document-pill document-pill-green"><?= e($document['size_label']) ?></span>
                                                    <span class="text-sm text-slate-500">Updated <?= e($document['modified_label']) ?></span>
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
<?php endforeach; ?>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div class="rounded-3xl border border-white/20 bg-white/10 p-5 shadow-soft-xl backdrop-blur-sm">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">Need Another Public Resource</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Pair disclosures with forms and service guidance</h2>
                    <p class="mt-4 text-sm leading-relaxed text-white/85 sm:text-base">
                        Use the downloadable forms page for public files, the services page for citizen charter access,
                        or the contact page if you need help finding the correct office.
                    </p>
                </div>
                <div class="flex flex-wrap gap-3">
                    <a href="<?= e(base_url('Pages/Downloadable-Forms.php')) ?>"
                        class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                        Downloadable Forms
                    </a>
                    <a href="<?= e(base_url('Pages/Services.php#Citizens-Charter')) ?>"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Citizen's Charter
                    </a>
                    <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                        class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
