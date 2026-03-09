<?php
declare(strict_types=1);

$pageTitle = 'About Imus';
$pageDescription = 'City profile, local government overview, barangay information, history, and offices of the City of Imus.';

$profileFacts = [
    ['label' => 'Classification', 'value' => '1st Class Component City'],
    ['label' => 'Province', 'value' => 'Cavite'],
    ['label' => 'Population', 'value' => '539,743'],
    ['label' => 'Estimated Households', 'value' => '130,814'],
    ['label' => 'Population Growth Rate', 'value' => '4.24%'],
    ['label' => 'Barangays', 'value' => '97'],
    ['label' => 'Known As', 'value' => 'Flag Capital of the Philippines'],
    ['label' => 'Cityhood', 'value' => 'Ratified June 30, 2012'],
];

$cityOfficials = [
    [
        'position' => 'City Mayor',
        'name' => 'Hon. Alex L. Advincula',
        'summary' => 'Leads executive programs, city services, and local policy implementation.',
        'image' => 'IMG/optimized/about-mayor-aa.jpg',
    ],
    [
        'position' => 'City Vice Mayor',
        'name' => 'Hon. Homer T. Saquilayan',
        'summary' => 'Presides over the Sangguniang Panlungsod and legislative sessions.',
        'image' => 'IMG/optimized/about-vm-saki.jpg',
    ],
    [
        'position' => 'Congressman',
        'name' => 'Hon. Adrian Jay C. Advincula',
        'summary' => 'Represents the district in the House of Representatives.',
        'image' => 'IMG/optimized/about-cong-aj.jpg',
    ],
];

$barangayClusters = [
    ['name' => 'Cluster 1', 'coverage' => 'Alapan area and nearby barangays'],
    ['name' => 'Cluster 2', 'coverage' => 'Bantayan and Bucandala area'],
    ['name' => 'Cluster 3', 'coverage' => 'Carsadang Bago and neighboring barangays'],
    ['name' => 'Cluster 4', 'coverage' => 'Malagasang area'],
    ['name' => 'Cluster 5', 'coverage' => 'Medicion and nearby barangays'],
    ['name' => 'Cluster 6', 'coverage' => 'Poblacion area'],
    ['name' => 'Cluster 7', 'coverage' => 'Pasong Buaya area'],
    ['name' => 'Cluster 8', 'coverage' => 'Tanzang Luma and neighboring barangays'],
    ['name' => 'Cluster 9', 'coverage' => 'Anabu and surrounding barangays'],
];

$historyTimeline = [
    ['period' => 'October 30, 1776', 'event' => 'The Royal Order separating Imus from Cavite Viejo marked the first major step toward its full municipal independence.'],
    ['period' => 'October 7, 1795', 'event' => 'Imus became an independent municipality, separate from Cavite El Viejo (now Kawit).'],
    ['period' => 'September 1, 1896', 'event' => 'The Battle of Imus became one of the decisive revolutionary victories against Spanish forces in Cavite.'],
    ['period' => 'May 28, 1898', 'event' => 'The Battle of Alapan marked the first battle use of the Philippine flag and reinforced Imus as the Flag Capital of the Philippines.'],
    ['period' => 'October 22, 2009', 'event' => 'Republic Act No. 9727 created the lone legislative district of Imus as the Third District of Cavite.'],
    ['period' => 'April 12 and June 30, 2012', 'event' => 'Republic Act No. 10161 converted Imus into a component city, later ratified by plebiscite on June 30, 2012.'],
    ['period' => '2022', 'event' => 'The Imus City Government Center was completed and inaugurated.'],
];

$pastMayors = [
    ['name' => 'Alex L. Advincula', 'status' => 'Elected', 'term' => 'July 2022 - Present'],
    ['name' => 'Emmanuel L. Maliksi', 'status' => 'Elected', 'term' => 'January 2012 - 2022'],
    ['name' => 'Homer T. Saquilayan', 'status' => 'Elected', 'term' => 'July 2010 - December 2011'],
    ['name' => 'Emmanuel L. Maliksi', 'status' => 'Elected', 'term' => 'July 2007 - June 2010'],
    ['name' => 'Oscar A. Jaro', 'status' => 'Elected', 'term' => 'April - June 2007'],
    ['name' => 'Homer T. Saquilayan', 'status' => 'Elected', 'term' => 'July 2001 - March 2007'],
    ['name' => 'Oscar A. Jaro', 'status' => 'Elected', 'term' => 'July 1998 - June 2001'],
    ['name' => 'Ricardo Paredes', 'status' => 'Appointed', 'term' => 'April - June 1998'],
    ['name' => 'Erineo S. Maliksi', 'status' => 'Elected', 'term' => 'February 1988 - March 1998'],
    ['name' => 'Wilfredo Garde', 'status' => 'OIC', 'term' => 'October 1986 - February 1988'],
    ['name' => 'Atty. Damian Villaseca', 'status' => 'OIC', 'term' => 'May 1986 - October 1986'],
    ['name' => 'Jose Jamir', 'status' => 'Elected', 'term' => '1968 - May 15, 1986'],
    ['name' => 'Dominador Camerino', 'status' => 'Elected', 'term' => 'January 1946 - September 1967'],
    ['name' => 'Pantaleon Garcia', 'status' => 'Elected', 'term' => '1904 - 1905'],
    ['name' => 'Jose Tagle', 'status' => 'Appointed', 'term' => '1896 - 1898'],
    ['name' => 'Bernardino Paredes', 'status' => 'Appointed', 'term' => '1894 - 1896'],
    ['name' => 'Cayetano Topacio', 'status' => 'Appointed', 'term' => '1890 - 1892'],
    ['name' => 'Licerio Topacio', 'status' => 'Appointed', 'term' => '1888 - 1890'],
];

$departments = [
    ['office' => 'Office of the City Mayor', 'head' => 'Hon. Alex L. Advincula', 'location' => '3rd Floor, City Hall'],
    ['office' => 'Office of the City Vice Mayor', 'head' => 'Hon. Homer T. Saquilayan', 'location' => '5th Floor, City Hall'],
    ['office' => 'Office of the City Treasurer', 'head' => 'Mr. Manuel Reynold W. Dela Fuente', 'location' => 'Ground Floor'],
    ['office' => 'Office of the City Assessor', 'head' => 'Mr. Elmer Camerino', 'location' => 'Ground Floor'],
    ['office' => 'Office of the City Engineer', 'head' => 'Engr. Christian Mervin S. Sarno', 'location' => '4th Floor'],
    ['office' => 'Office of the City Planning and Development', 'head' => 'Engr. Guiana F. Monzon', 'location' => '2nd Floor'],
    ['office' => 'Office of the City Health', 'head' => 'Dr. Ferdinand P. Mina', 'location' => '2nd Floor'],
    ['office' => 'Office of the City Social Welfare and Development', 'head' => 'Ms. Josephine G. Villanueva, RSW', 'location' => 'Ground Floor'],
];

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr] lg:items-center">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        About Imus
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        City Profile and Local Government Overview
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        View the city profile, elected leadership, major historical milestones, and selected public
                        offices of the City of Imus.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#City-Profile"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            View City Profile
                        </a>
                        <a href="#City-Government"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            View Officials
                        </a>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-4 sm:p-5">
                    <?= imus_image('IMG/optimized/about-cathedral-aerial.jpg', 'Aerial view of Imus Cathedral', [
                        'loading' => 'eager',
                        'decoding' => 'async',
                        'fetchpriority' => 'high',
                        'class' => 'h-64 w-full rounded-2xl object-cover sm:h-72 lg:h-80',
                    ]) ?>
                    <p class="mt-3 text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Imus, Cavite</p>
                    <p class="mt-2 text-sm leading-relaxed text-slate-700">
                        Imus is a gateway city in Cavite with major revolutionary landmarks, a growing urban core, and
                        expanding public services.
                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<section id="City-Profile" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 1</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">City Profile</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Imus is the de jure capital of Cavite, a first-class component city, and a major residential,
                commercial, and service center in the province.
            </p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($profileFacts as $fact): ?>
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($fact['label']) ?></p>
                        <p class="mt-2 font-display text-xl font-semibold text-civicInk"><?= e($fact['value']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="City-Government" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 2</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">City Government</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Current elected city leaders and their core public responsibilities.
            </p>

            <div class="mt-8 grid gap-5 lg:grid-cols-3">
                <?php foreach ($cityOfficials as $official): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-4 shadow-soft-xl sm:p-5">
                        <?= imus_image($official['image'], $official['name'], [
                            'loading' => 'lazy',
                            'decoding' => 'async',
                            'fetchpriority' => 'low',
                            'class' => 'h-72 w-full rounded-2xl bg-imusGreen/10 object-contain p-4 sm:h-80',
                        ]) ?>
                        <p class="mt-4 text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($official['position']) ?></p>
                        <h3 class="mt-1 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($official['name']) ?></h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600"><?= e($official['summary']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Brgy-Officials" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 3</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Barangay Clusters</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                The official barangay directory groups the city's 97 barangays into nine coordination clusters.
            </p>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <?php foreach ($barangayClusters as $cluster): ?>
                    <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                        <h3 class="font-display text-lg font-semibold text-civicInk"><?= e($cluster['name']) ?></h3>
                        <p class="mt-2 text-sm leading-relaxed text-slate-600"><?= e($cluster['coverage']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="History" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 4</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">History</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Key dates and milestones in the city history.
            </p>

            <div class="mt-8 space-y-4">
                <?php foreach ($historyTimeline as $item): ?>
                    <article class="rounded-2xl border border-imusBlue/15 bg-imusBlue/5 p-5">
                        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($item['period']) ?></p>
                        <p class="mt-2 text-sm leading-relaxed text-slate-700 sm:text-base"><?= e($item['event']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Past-Mayors" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 5</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Past Mayors</h2>

            <div class="mt-8 overflow-x-auto rounded-2xl border border-slate-200 bg-white shadow-sm">
                <table class="w-full border-collapse text-left">
                    <caption class="sr-only">Past mayors of Imus, their appointment status, and terms</caption>
                    <thead>
                        <tr class="bg-imusBlue text-white">
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Name</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Status</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Term</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pastMayors as $mayor): ?>
                            <tr class="border-t border-slate-200">
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($mayor['name']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($mayor['status']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($mayor['term']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section id="Dept-and-Units" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 6</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Departments and Units</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Key city offices and their reported office locations.
            </p>

            <div class="mt-8 overflow-x-auto rounded-2xl border border-slate-200 bg-white shadow-sm">
                <table class="w-full border-collapse text-left">
                    <caption class="sr-only">Departments and units with office heads and locations</caption>
                    <thead>
                        <tr class="bg-imusBlue text-white">
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Office</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Department Head</th>
                            <th scope="col" class="px-4 py-3 text-sm font-semibold">Location</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departments as $department): ?>
                            <tr class="border-t border-slate-200">
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($department['office']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($department['head']) ?></td>
                                <td class="px-4 py-3 text-sm text-slate-700"><?= e($department['location']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
