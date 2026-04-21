<?php
declare(strict_types=1);

require_once __DIR__ . '/../includes/bootstrap.php';

$pageTitle = 'Business in Imus';
$pageDescription = 'Discover why Imus is one of the Philippines\' most economically dynamic and business-friendly cities. Learn about business categories, investment support, and growth opportunities.';

$whyInvestContent = [
    'The City of Imus is recognized as one of the country\'s most economically dynamic component cities. Geographically located in the northeastern part of Cavite, Imus is politically subdivided into 97 barangays, making it a highly urbanized hub with effective technological progression and competitive advantage at the national level.',
    'The investment climate in Imus has consistently attracted both foreign and local investors. These investments create new jobs, generate substantial tax revenue, serve as vehicles for technological innovation, and boost export earnings across various sectors.',
    'Major corporations such as Liwayway Corporation, San Miguel-Yamamura Asia Corporation, and EDS Manufacturing Incorporated-Yazaki have established long-term operations in the city. Multiple shopping centers including Robinsons Place Imus, The District, S&R Membership Shopping, CityMall, Shopwise, Lotus Mall, Puregold, and SM Center Imus demonstrate the robust retail and commercial landscape.',
    'Committed to supporting its economic enterprises, Imus provides businesses—particularly micro, small, and medium enterprises (MSMEs)—with learning resources and development platforms. The city conducts regular talks, trainings, and workshops including the Imus Seminars of Emerging Entrepreneurs (iSEE), Imus City Business Summit, Business Cliniquing, Business Expo, and E-Talakayan.',
];

$businessCategories = [
    [
        'name' => 'Accommodation & Tourism',
        'description' => 'Hotels, lodges, resorts, and hospitality services supporting local and transit visitors.',
    ],
    [
        'name' => 'Communication & IT',
        'description' => 'Telecommunications, internet services, broadcasting, and information technology operations.',
    ],
    [
        'name' => 'Courier & Cargo',
        'description' => 'Shipping, logistics, warehousing, and distribution center operations.',
    ],
    [
        'name' => 'National Taxes & Finance',
        'description' => 'Banks, financial institutions, insurance companies, and tax-regulated services.',
    ],
    [
        'name' => 'Transportation & Utilities',
        'description' => 'Power supply, water services, public transportation, and utility management.',
    ],
    [
        'name' => 'Manufacturing & Retail',
        'description' => 'Industrial production, wholesale operations, retail establishments, and commerce.',
    ],
];

$supportPrograms = [
    [
        'title' => 'Business One-Stop Shop (BOSS)',
        'description' => 'Streamlined permit application and renewal processing with ease and convenience for business operators seeking registration and licensing.',
    ],
    [
        'title' => 'Go Negosyo Center',
        'description' => 'Direct link between entrepreneurs and the Department of Trade and Industry (DTI) for business consultations, training, and registration support.',
    ],
    [
        'title' => 'Ease of Doing Business Act',
        'description' => 'Implementation of simplified business procedures to reduce bureaucratic barriers and accelerate the permitting and compliance process.',
    ],
    [
        'title' => 'Imus Seminars of Emerging Entrepreneurs (iSEE)',
        'description' => 'Educational workshops and seminars designed to equip entrepreneurs with business management and operational skills.',
    ],
    [
        'title' => 'City Business Summit',
        'description' => 'Annual gathering of business leaders, entrepreneurs, and government officials for networking, knowledge sharing, and policy updates.',
    ],
    [
        'title' => 'Business Cliniquing & Expo',
        'description' => 'Direct business advisory sessions and trade exposition platforms connecting investors, suppliers, retailers, and service providers.',
    ],
];

$cityFeatures = [
    [
        'label' => 'City Class',
        'value' => '1st Class Component City',
    ],
    [
        'label' => 'Administrative Divisions',
        'value' => '97 Barangays',
    ],
    [
        'label' => 'Economic Status',
        'value' => 'Most Business Friendly City',
    ],
    [
        'label' => 'Key Advantage',
        'value' => 'Strategic Cavite Location',
    ],
];

require_once __DIR__ . '/../includes/header.navbar.php';
?>


<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.25fr_0.75fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Investment Opportunities
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        Why Invest in Imus?
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Discover why Imus stands as one of the Philippines' most economically dynamic and business-friendly component cities, with strategic location, robust infrastructure, and comprehensive support for all business sizes.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#why-invest"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Learn More
                        </a>
                        <a href="#business-categories"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            Explore Categories
                        </a>
                    </div>

                    <div class="mt-8 grid gap-3 text-sm sm:grid-cols-2 lg:grid-cols-4">
                        <?php foreach ($cityFeatures as $feature): ?>
                            <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                                <p class="font-semibold"><?= e($feature['label']) ?></p>
                                <p class="mt-1 text-white/80"><?= e($feature['value']) ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-5 sm:p-6">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Quick Facts</p>
                    <div class="mt-4 space-y-3">
                        <div class="rounded-2xl border border-imusBlue/15 bg-white p-4">
                            <p class="text-sm font-semibold text-civicInk">Most Economically Dynamic</p>
                            <p class="mt-1 text-sm leading-relaxed text-slate-600">Recognized as one of the country's most dynamic component cities with consistent economic growth.</p>
                        </div>
                        <div class="rounded-2xl border border-imusBlue/15 bg-white p-4">
                            <p class="text-sm font-semibold text-civicInk">97 Barangays</p>
                            <p class="mt-1 text-sm leading-relaxed text-slate-600">Wide geographic reach and administrative capacity serving diverse business needs.</p>
                        </div>
                        <div class="rounded-2xl border border-imusBlue/15 bg-white p-4">
                            <p class="text-sm font-semibold text-civicInk">Business-Friendly Policies</p>
                            <p class="mt-1 text-sm leading-relaxed text-slate-600">Comprehensive support systems and simplified procedures for all business types.</p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<section id="why-invest" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="mb-8">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Investment Case</p>
                <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Why Invest in Imus</h2>
            </div>

            <div class="space-y-6 text-sm leading-relaxed text-slate-700 sm:text-base">
                <?php foreach ($whyInvestContent as $paragraph): ?>
                    <p><?= e($paragraph) ?></p>
                <?php endforeach; ?>
            </div>

            <div class="mt-8 pt-8 border-t border-slate-200">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Investment Distinction</p>
                <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                    Imus has earned the distinction of being one of the most business-friendly cities in the Philippines, with proven policies that have successfully created and sustained a business-friendly environment attracting investors from both local and international markets.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="business-categories" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <div class="mb-8">
                <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Business Sectors</p>
                <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Business Categories in Imus</h2>
                <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                    Imus supports a diverse range of business sectors with infrastructure and services tailored to each industry's unique requirements.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($businessCategories as $category): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-soft-xl">
                        <h3 class="font-display text-lg font-semibold text-civicInk"><?= e($category['name']) ?></h3>
                        <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($category['description']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="support-programs" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-[#0b5fa0] to-imusDeep p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="mb-8">
                <p class="text-xs font-semibold uppercase tracking-[0.14em] text-white/75">Business Support</p>
                <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Support Programs & Platforms</h2>
                <p class="mt-3 max-w-3xl text-sm leading-relaxed text-white/85 sm:text-base">
                    The City Government of Imus has established multiple platforms and programs designed to support businesses at every stage of growth.
                </p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($supportPrograms as $program): ?>
                    <article class="rounded-3xl border border-white/20 bg-white/10 p-5 backdrop-blur-sm">
                        <h3 class="font-display text-lg font-semibold text-white"><?= e($program['title']) ?></h3>
                        <p class="mt-3 text-sm leading-relaxed text-white/90"><?= e($program['description']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-5 shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-2 lg:items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Getting Started</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Next Steps for Your Business</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        Ready to establish or expand your business in Imus? Use these resources to get started with permit applications, forms, and direct support.
                    </p>

                    <div class="mt-6 space-y-3">
                        <article class="rounded-2xl border border-imusBlue/15 bg-white/90 p-4 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">eBOSS Portal</p>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">Digital permit application and renewal platform for business registration and licensing.</p>
                            <a href="https://egovcityofimus.ph/ebpls/" target="_blank" rel="noopener noreferrer"
                                class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                                Access eBOSS
                            </a>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-white/90 p-4 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Downloadable Forms</p>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">Browse and download city-issued forms required for various business transactions and registrations.</p>
                            <a href="<?= e(base_url('Pages/Downloadable-Forms.php')) ?>"
                                class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                                View Forms
                            </a>
                        </article>
                        <article class="rounded-2xl border border-imusBlue/15 bg-white/90 p-4 shadow-sm">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">Services & Charter</p>
                            <p class="mt-2 text-sm leading-relaxed text-slate-600">Review service standards, processing requirements, and office-specific guidance from the Citizen's Charter.</p>
                            <a href="<?= e(base_url('Pages/Services.php')) ?>"
                                class="focusable mt-4 inline-flex items-center rounded-full bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusDeep">
                                View Services
                            </a>
                        </article>
                    </div>
                </div>

                <div class="rounded-3xl border border-imusBlue/15 bg-white/95 p-5 shadow-soft-xl">
                    <p class="text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Need Assistance?</p>
                    <h3 class="mt-3 font-display text-xl font-bold text-civicInk">Contact the City</h3>
                    <p class="mt-4 text-sm leading-relaxed text-slate-600">
                        If you need help identifying the correct office, clarifying requirements, or have specific questions about business establishment in Imus, use the contact channels below.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-3">
                        <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                            class="focusable inline-flex items-center rounded-full bg-imusBlue px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-imusDeep">
                            Contact Us
                        </a>
                        <a href="<?= e(base_url('Pages/Services.php#Citizens-Charter')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-imusBlue/30 px-5 py-2.5 text-sm font-semibold text-imusBlue transition hover:bg-imusBlue/10">
                            Citizen's Charter
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
