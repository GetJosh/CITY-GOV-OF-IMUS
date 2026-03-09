<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

$pageTitle = 'Business Opportunities';
$pageDescription = 'City business support guidance, eBOSS access, and inquiry intake for investors and business operators interested in Imus.';

$investmentParagraphs = [
    'The City of Imus continues to operate as a major residential, commercial, and service center in Cavite with city-managed support channels for local business transactions.',
    'Its location in northeastern Cavite supports access to nearby markets, workforce movement, and day-to-day business activity across the province and Metro Manila corridor.',
    'For orientation, this page focuses on city-controlled support, permit guidance, and direct inquiry routing instead of volatile rate tables or provider-specific fee references.',
];

$investmentPrograms = [
    [
        'title' => 'Electronic Business One-Stop Shop',
        'summary' => 'Use eBOSS for registration, renewal, payment support, and permit status tracking.',
    ],
    [
        'title' => 'Business One-Stop Shop',
        'summary' => 'Coordinate in-person city permit processing and front-facing filing support when needed.',
    ],
    [
        'title' => 'Citizen Charter and Forms',
        'summary' => 'Review posted service standards, documentary references, and downloadable forms before filing.',
    ],
];

$businessHighlights = [
    ['label' => 'City Class', 'value' => '1st Class Component City', 'summary' => 'A major urban and commercial center in Cavite.'],
    ['label' => 'Barangays', 'value' => '97', 'summary' => 'Wide local market reach across the city.'],
    ['label' => 'Digital Route', 'value' => 'eBOSS', 'summary' => 'Primary online path for permit-related transactions.'],
    ['label' => 'Support Access', 'value' => 'City and archive guidance', 'summary' => 'Use local contact, forms, and charter pages before filing.'],
];

$businessTypes = [
    'Manufacturing',
    'Retail',
    'Services',
    'Real Estate',
    'Technology',
    'Hospitality',
    'Logistics',
    'Other',
];

$preparationTracks = [
    [
        'title' => 'Review city permit guidance first',
        'summary' => 'Start with the city-owned channels before collecting signatures or making a trip.',
        'items' => [
            'Open eBOSS to understand the digital filing path for registration, renewal, and status tracking.',
            'Check the Citizen\'s Charter for office-specific processing steps and expected documentary requirements.',
            'Use the downloadable forms archive to confirm whether a city-issued form is already available online.',
        ],
    ],
    [
        'title' => 'Confirm business structure and registrations',
        'summary' => 'The final filing path depends on your business type, ownership structure, and site arrangement.',
        'items' => [
            'Verify whether your business will require DTI, SEC, or other national registrations before local filing.',
            'Prepare ownership or lease documents, valid IDs, and any location-specific permits tied to your site.',
            'Check current tax and regulatory requirements directly with the concerned national agency before paying.',
        ],
    ],
    [
        'title' => 'Coordinate site and utility readiness',
        'summary' => 'Utility and occupancy requirements often depend on the property, not just the business activity.',
        'items' => [
            'Confirm with the property owner or lessor which documents are already available for your location.',
            'Coordinate directly with utility providers for the latest connection, meter, and occupancy requirements.',
            'Verify fire safety, building, and zoning compliance with the proper office before opening to the public.',
        ],
    ],
];

$verificationNotes = [
    'Provider rates, transport fares, and tax computations change more often than city-controlled guidance.',
    'Confirm current fees and documentary requirements directly with BPLO, BIR, DTI, SEC, your lessor, and utility providers before filing or budgeting.',
    'Use this page as an orientation guide, then verify the final checklist with the concerned office handling your transaction.',
];

$ebossFeatures = [
    'Paperless permit registration and renewal workflow',
    'Status monitoring without repeated walk-in follow-up visits',
    'Digital payment support for business-related transactions',
    'A faster first stop for applicants who want the current city filing route',
];

$nextStepLinks = [
    [
        'title' => 'Open eBOSS',
        'summary' => 'Proceed to the city permit platform for filing and status checks.',
        'href' => 'https://egovcityofimus.ph/ebpls/',
        'external' => true,
    ],
    [
        'title' => 'Review Citizen\'s Charter',
        'summary' => 'Check office-specific public service standards and processing guidance.',
        'href' => base_url('Pages/Services.php#Citizens-Charter'),
        'external' => false,
    ],
    [
        'title' => 'Open Downloadable Forms',
        'summary' => 'Confirm whether the form you need is already in the local city archive.',
        'href' => base_url('Pages/Downloadable-Forms.php'),
        'external' => false,
    ],
    [
        'title' => 'Contact the City',
        'summary' => 'Use verified city contact channels if the correct office or requirement is unclear.',
        'href' => base_url('Pages/Contact-Us.php'),
        'external' => false,
    ],
];

$formValues = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'organization' => '',
    'business_type' => '',
    'message' => '',
];
$formErrors = [];
$formNotice = null;

$normalizeInput = static function (string $value): string {
    $value = trim($value);
    $value = preg_replace('/\s+/', ' ', $value) ?? $value;

    return trim(strip_tags($value));
};

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    foreach ($formValues as $field => $defaultValue) {
        $submittedValue = $_POST[$field] ?? '';
        $formValues[$field] = $normalizeInput(is_string($submittedValue) ? $submittedValue : '');
    }

    if ($formValues['name'] === '') {
        $formErrors['name'] = 'Full name is required.';
    }

    if ($formValues['email'] === '' || filter_var($formValues['email'], FILTER_VALIDATE_EMAIL) === false) {
        $formErrors['email'] = 'Enter a valid email address.';
    }

    if ($formValues['phone'] === '' || preg_match('/^[0-9+()\-\s]{7,20}$/', $formValues['phone']) !== 1) {
        $formErrors['phone'] = 'Enter a valid contact number.';
    }

    if ($formValues['organization'] === '') {
        $formErrors['organization'] = 'Organization or company is required.';
    }

    if ($formValues['business_type'] === '' || !in_array($formValues['business_type'], $businessTypes, true)) {
        $formErrors['business_type'] = 'Select a business type.';
    }

    if ($formValues['message'] === '' || strlen($formValues['message']) < 20) {
        $formErrors['message'] = 'Provide a short message with at least 20 characters.';
    }

    if ($formErrors === []) {
        $logDirectory = __DIR__ . '/../logs';
        $logFile = $logDirectory . '/business_inquiries.log';
        $timestamp = new DateTimeImmutable('now', new DateTimeZone('Asia/Manila'));
        $payload = [
            'submitted_at' => $timestamp->format('c'),
            'submitted_at_local' => $timestamp->format('F j, Y g:i A') . ' PHT',
            'name' => $formValues['name'],
            'email' => $formValues['email'],
            'phone' => $formValues['phone'],
            'organization' => $formValues['organization'],
            'business_type' => $formValues['business_type'],
            'message' => $formValues['message'],
        ];

        $logReady = is_dir($logDirectory) || mkdir($logDirectory, 0775, true);
        $logLine = json_encode($payload, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $writeSuccess = $logReady
            && $logLine !== false
            && file_put_contents($logFile, $logLine . PHP_EOL, FILE_APPEND | LOCK_EX) !== false;

        if ($writeSuccess) {
            $formNotice = [
                'type' => 'success',
                'message' => 'Your inquiry was recorded successfully.',
            ];
            foreach ($formValues as $field => $defaultValue) {
                $formValues[$field] = '';
            }
        } else {
            $formNotice = [
                'type' => 'error',
                'message' => 'The inquiry could not be recorded. Please try again or use the contact page instead.',
            ];
        }
    } else {
        $formNotice = [
            'type' => 'error',
            'message' => 'Please review the highlighted form fields and submit the inquiry again.',
        ];
    }
}

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.25fr_0.75fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Business Guide
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        City business guidance, permit pathways, and inquiry intake
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Use the city-owned filing routes, public archives, and contact channels before preparing a new
                        application, renewal, or site setup request in Imus.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#Why-invest-in-Imus"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Why Invest in Imus
                        </a>
                        <a href="#Business-Inquiry"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Send Inquiry
                        </a>
                    </div>

                    <div class="mt-8 grid gap-3 text-sm sm:grid-cols-2 lg:grid-cols-4">
                        <?php foreach ($businessHighlights as $highlight): ?>
                            <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                <p class="font-semibold"><?= e($highlight['label']) ?>: <?= e($highlight['value']) ?></p>
                                <p class="mt-1 text-white/80"><?= e($highlight['summary']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">What Changed</p>
                    <div class="mt-4 rounded-2xl border border-imusBlue/15 bg-imusBlue/5 p-4">
                        <p class="text-sm leading-relaxed text-slate-700">
                            This page now keeps the focus on city-controlled business guidance. Rapidly changing rate
                            tables, fare references, and general tax summaries were removed so the published guidance
                            stays easier to trust and maintain.
                        </p>
                    </div>
                    <div class="mt-4 space-y-3">
                        <?php foreach ($verificationNotes as $note): ?>
                            <article class="rounded-2xl border border-imusBlue/15 bg-white p-4">
                                <p class="text-sm leading-relaxed text-slate-700"><?= e($note) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section id="Why-invest-in-Imus" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr]">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 1</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Why Invest in Imus</h2>
                    <div class="mt-4 space-y-4 text-sm leading-relaxed text-slate-700 sm:text-base">
                        <?php foreach ($investmentParagraphs as $paragraph): ?>
                            <p><?= e($paragraph) ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="grid gap-4 sm:grid-cols-3 lg:grid-cols-1">
                    <?php foreach ($investmentPrograms as $program): ?>
                        <article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-soft-xl">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Business Support</p>
                            <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($program['title']) ?></h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($program['summary']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="sm:flex sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 2</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Prepare the right filing path</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        Use the city-owned business channels below to confirm the correct office, form set, and permit
                        route before spending time on provider-specific or national requirements.
                    </p>
                </div>
                <a href="https://egovcityofimus.ph/ebpls/" target="_blank" rel="noopener noreferrer"
                    class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-imusDeep sm:mt-0">
                    Open eBOSS
                </a>
            </div>

            <div class="mt-8 grid gap-5 lg:grid-cols-3">
                <?php foreach ($preparationTracks as $track): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-soft-xl">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Preparation Track</p>
                        <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($track['title']) ?></h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($track['summary']) ?></p>
                        <ul class="page-list mt-4 text-sm leading-relaxed text-slate-700">
                            <?php foreach ($track['items'] as $item): ?>
                                <li><?= e($item) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Business-Inquiry" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-5 shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[0.95fr_1.05fr] lg:items-start">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 3</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Business inquiry</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        Submit an inquiry if you need help identifying the correct city route, archive page, or first
                        office to contact for your business concern.
                    </p>

                    <div class="mt-6 space-y-3">
                        <?php foreach ($nextStepLinks as $link): ?>
                            <article class="rounded-2xl border border-imusBlue/15 bg-white/90 p-4 shadow-sm">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($link['title']) ?></p>
                                <p class="mt-2 text-sm leading-relaxed text-slate-600"><?= e($link['summary']) ?></p>
                                <a href="<?= e($link['href']) ?>"
                                    class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep"
                                    <?= $link['external'] ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                    Open Link
                                </a>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="rounded-3xl border border-imusBlue/15 bg-white/95 p-5 shadow-soft-xl">
                    <?php if ($formNotice !== null): ?>
                        <div class="rounded-2xl border px-4 py-3 text-sm <?= $formNotice['type'] === 'success' ? 'border-imusGreen/50 bg-imusGreen/10 text-imusGreen' : 'border-imusBlue/20 bg-imusBlue/5 text-civicInk' ?>"
                            aria-live="polite">
                            <?= e($formNotice['message']) ?>
                        </div>
                    <?php endif; ?>

                    <form method="post" action="<?= e(base_url('Pages/Business.php#Business-Inquiry')) ?>" class="mt-4">
                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="mb-2 block text-sm font-semibold text-civicInk">Full Name</label>
                                <input id="name" name="name" type="text" value="<?= e($formValues['name']) ?>" class="page-input focusable"
                                    <?= imus_html_attributes([
                                        'required' => true,
                                        'autocomplete' => 'name',
                                        'aria-invalid' => isset($formErrors['name']) ? 'true' : 'false',
                                        'aria-describedby' => isset($formErrors['name']) ? 'name-error' : null,
                                    ]) ?>>
                                <?php if (isset($formErrors['name'])): ?>
                                    <p id="name-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['name']) ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-civicInk">Email Address</label>
                                <input id="email" name="email" type="email" value="<?= e($formValues['email']) ?>" class="page-input focusable"
                                    <?= imus_html_attributes([
                                        'required' => true,
                                        'autocomplete' => 'email',
                                        'aria-invalid' => isset($formErrors['email']) ? 'true' : 'false',
                                        'aria-describedby' => isset($formErrors['email']) ? 'email-error' : null,
                                    ]) ?>>
                                <?php if (isset($formErrors['email'])): ?>
                                    <p id="email-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['email']) ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="phone" class="mb-2 block text-sm font-semibold text-civicInk">Phone Number</label>
                                <input id="phone" name="phone" type="tel" value="<?= e($formValues['phone']) ?>" class="page-input focusable"
                                    <?= imus_html_attributes([
                                        'required' => true,
                                        'autocomplete' => 'tel',
                                        'inputmode' => 'tel',
                                        'aria-invalid' => isset($formErrors['phone']) ? 'true' : 'false',
                                        'aria-describedby' => isset($formErrors['phone']) ? 'phone-error' : null,
                                    ]) ?>>
                                <?php if (isset($formErrors['phone'])): ?>
                                    <p id="phone-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['phone']) ?></p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <label for="organization" class="mb-2 block text-sm font-semibold text-civicInk">Organization or Company</label>
                                <input id="organization" name="organization" type="text" value="<?= e($formValues['organization']) ?>" class="page-input focusable"
                                    <?= imus_html_attributes([
                                        'required' => true,
                                        'autocomplete' => 'organization',
                                        'aria-invalid' => isset($formErrors['organization']) ? 'true' : 'false',
                                        'aria-describedby' => isset($formErrors['organization']) ? 'organization-error' : null,
                                    ]) ?>>
                                <?php if (isset($formErrors['organization'])): ?>
                                    <p id="organization-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['organization']) ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="business_type" class="mb-2 block text-sm font-semibold text-civicInk">Type of Business</label>
                            <select id="business_type" name="business_type" class="page-select focusable"
                                <?= imus_html_attributes([
                                    'required' => true,
                                    'aria-invalid' => isset($formErrors['business_type']) ? 'true' : 'false',
                                    'aria-describedby' => isset($formErrors['business_type']) ? 'business-type-error' : null,
                                ]) ?>>
                                <option value="">Select one</option>
                                <?php foreach ($businessTypes as $businessType): ?>
                                    <option value="<?= e($businessType) ?>" <?= $formValues['business_type'] === $businessType ? 'selected' : '' ?>>
                                        <?= e($businessType) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?php if (isset($formErrors['business_type'])): ?>
                                <p id="business-type-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['business_type']) ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="mt-4">
                            <label for="message" class="mb-2 block text-sm font-semibold text-civicInk">Message</label>
                            <textarea id="message" name="message" class="page-textarea focusable"
                                <?= imus_html_attributes([
                                    'required' => true,
                                    'minlength' => '20',
                                    'aria-invalid' => isset($formErrors['message']) ? 'true' : 'false',
                                    'aria-describedby' => isset($formErrors['message']) ? 'message-error' : null,
                                ]) ?>><?= e($formValues['message']) ?></textarea>
                            <?php if (isset($formErrors['message'])): ?>
                                <p id="message-error" class="mt-2 text-sm text-imusBlue"><?= e($formErrors['message']) ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="mt-5 flex flex-wrap gap-3">
                            <button type="submit"
                                class="focusable inline-flex items-center rounded-full bg-imusBlue px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-imusDeep">
                                Send Inquiry
                            </button>
                            <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                                class="focusable inline-flex items-center rounded-full border border-imusBlue/30 px-5 py-2.5 text-sm font-semibold text-imusBlue transition hover:bg-imusBlue/10">
                                Open Contact Page
                            </a>
                        </div>
                    </form>
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
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">Digital Process</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Use eBOSS as the first permit route</h2>
                    <ul class="page-list mt-5 text-sm leading-relaxed text-white/90 sm:text-base">
                        <?php foreach ($ebossFeatures as $feature): ?>
                            <li><?= e($feature) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-white/75">Next Step</p>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-white/85 sm:text-base">
                        After reviewing the city guidance on this page, continue to eBOSS for permit transactions and
                        use the contact page if you still need office-level clarification.
                    </p>
                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://egovcityofimus.ph/ebpls/" target="_blank" rel="noopener noreferrer"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Open eBOSS Portal
                        </a>
                        <a href="<?= e(base_url('Pages/Services.php#EBOSS')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-white/35 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            View Services eBOSS Section
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
