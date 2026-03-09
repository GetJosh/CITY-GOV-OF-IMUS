<?php
declare(strict_types=1);

$pageTitle = 'Tourism';
$pageDescription = 'History, culture, visitor highlights, heroes, notable personalities, and creative professionals connected to the City of Imus.';

$heritageStories = [
    [
        'title' => 'Araw ng Imus and Gawad Parangal',
        'period' => 'Civic Celebration',
        'summary' => 'Araw ng Imus commemorates the October 7, 1795 independence of Imus from Cavite El Viejo and includes the annual Gawad Parangal for outstanding Imus residents.',
        'image' => 'IMG/events-and-culture/Gawad-Parangal.png',
    ],
    [
        'title' => 'National Flag Day and the Battle of Alapan',
        'period' => 'May 28, 1898',
        'summary' => 'The victory at Alapan is tied to the first battle use of the Philippine flag and remains one of the defining historical observances in Imus.',
        'image' => 'IMG/events-and-culture/National-Flag-Day.png',
    ],
    [
        'title' => 'Battle of Imus',
        'period' => 'September 1, 1896',
        'summary' => 'The Battle of Imus is remembered as a decisive revolutionary victory that strengthened the Filipino campaign against Spanish forces in Cavite.',
        'image' => 'IMG/events-and-culture/Battle-of-Imus.png',
    ],
    [
        'title' => 'Imus Historical Museum',
        'period' => 'Heritage Destination',
        'summary' => 'The former arsenal and foundry of Jose Ignacio Paua now presents moving tableaus, murals, and exhibits on the revolutionary history of Imus.',
        'image' => 'IMG/events-and-culture/Imus-Historical-Museum.png',
    ],
    [
        'title' => 'Imus Cathedral',
        'period' => 'Religious Landmark',
        'summary' => 'The cathedral is a major spiritual and heritage landmark in Imus, known for its old Hispanic architectural character and long religious history.',
        'image' => 'IMG/events-and-culture/Imus-Cathedral.png',
    ],
    [
        'title' => 'City Plaza',
        'period' => 'Public Space',
        'summary' => 'The city plaza was beautified with tourism support in 1990 and underwent major rehabilitation in 2009, remaining a visible public landmark in the poblacion.',
        'image' => 'IMG/events-and-culture/City-Plaza.png',
    ],
    [
        'title' => 'Isabel Bridge',
        'period' => 'Historical Marker',
        'summary' => 'Located in Palico, this concrete arch bridge and marker recall a key battle site from the Philippine-Spanish War.',
        'image' => 'IMG/events-and-culture/Isabel-Bridge.png',
    ],
    [
        'title' => 'Pasong Santol',
        'period' => 'Battle Site',
        'summary' => 'Located in Barangay Anabu II, Pasong Santol marks the 1897 battle site that figured in the defense of the revolutionary capital.',
        'image' => 'IMG/events-and-culture/Pasong-Santol.png',
    ],
];

$visitGuides = [
    [
        'title' => 'Start at the historic core',
        'summary' => 'The cathedral, city plaza, and nearby heritage markers provide the quickest introduction to old Imus.',
    ],
    [
        'title' => 'Include the battle landmarks',
        'summary' => 'The Battle of Imus and Battle of Alapan sites connect a visit to the city\'s central role in the revolution.',
    ],
    [
        'title' => 'Add the museum stop',
        'summary' => 'The Imus Historical Museum gives visitors a more detailed look at local history through tableaus and interpretive exhibits.',
    ],
    [
        'title' => 'Check official tourism updates',
        'summary' => 'The official tourism channel posts schedules for commemorations, heritage activities, and local visitor advisories.',
    ],
];

$heroes = [
    [
        'name' => 'General Licerio Topacio',
        'years' => '1839 to 1925',
        'summary' => 'An elder Magdalo leader who declined nomination to the revolutionary presidency at Tejeros and later served twice as Municipal President of Imus.',
        'image' => 'IMG/heroes-of-imus/General Licerio Topacio.png',
    ],
    [
        'name' => 'Colonel Jose S. Tagle',
        'years' => 'Born 1854',
        'summary' => 'He led the revolt in Imus in 1896, mobilized local residents for battle, and served as capitan municipal during the revolutionary period.',
        'image' => 'IMG/heroes-of-imus/Colonel Jose S. Tagle.png',
    ],
    [
        'name' => 'General Flaviano A. Yengco',
        'years' => '1873 to 1897',
        'summary' => 'One of the youngest revolutionary generals, he fought at Binakayan and was mortally wounded during the Battle of Pasong Santol in 1897.',
        'image' => 'IMG/heroes-of-imus/General Flaviano A. Yengco.png',
    ],
    [
        'name' => 'General Pantaleon Garcia',
        'years' => '1856 to 1936',
        'summary' => 'A trusted general of Emilio Aguinaldo, representative to the Malolos Convention, and later Municipal President of Imus.',
        'image' => 'IMG/heroes-of-imus/General Pantaleon Garcia.png',
    ],
    [
        'name' => 'General Juan Saraza Castaneda',
        'years' => '1870 to 1902',
        'summary' => 'A landowner and revolutionary leader who organized Katipuneros in Imus, helped source weapons abroad, and later served briefly as Municipal Mayor.',
        'image' => 'IMG/notable-persons/General Juan Saraza Castaneda.png',
    ],
];

$humanizeArchiveLabel = static function (string $filename): string {
    $label = pathinfo($filename, PATHINFO_FILENAME);
    $label = str_replace(['_', '-'], ' ', $label);
    $label = preg_replace('/\s+/', ' ', $label) ?? $label;

    return trim($label);
};

$notablePersonProfiles = [
    'Francisca Tirona y Benitez.png' => [
        'name' => 'Francisca Tirona Benitez',
        'category' => 'Arts and Education',
        'summary' => 'Founder of the Philippine Women\'s University and organizer of women\'s groups that helped shape national women\'s advocacy in the Philippines.',
    ],
    'Helena Zoila Tirona Benitez.png' => [
        'name' => 'Helena Zoila Tirona Benitez',
        'category' => 'Education, Arts, and Politics',
        'summary' => 'An educator and public servant who became the seventh Filipina senator and later served in the Batasang Pambansa.',
    ],
    'Dominador Monzon Camerino.png' => [
        'name' => 'Dominador Monzon Camerino',
        'category' => 'Politics',
        'summary' => 'He served for decades in public office as barangay chief, mayor of Imus, and governor of Cavite; the two-story town government building rose during his administration.',
    ],
    'Lydia Casama.png' => [
        'name' => 'Lydia Casama',
        'category' => 'Culinary Tradition',
        'summary' => 'Her kutsinta became widely known in Imus and was often prepared as a signature delicacy for celebrations and gifts.',
    ],
    'General Juan Saraza Castaneda.png' => [
        'name' => 'General Juan Saraza Castaneda',
        'category' => 'History and Politics',
        'summary' => 'A landowner and revolutionary leader who organized Katipuneros in Imus, helped source weapons abroad, and later served briefly as Municipal Mayor.',
    ],
    'Hilaria Del Rosario.png' => [
        'name' => 'Hilaria del Rosario',
        'category' => 'History and Socio-Civic Work',
        'summary' => 'She helped care for the wounded and sick during the revolution and was among the founders of Hijas de la Revolucion, later linked with the national Red Cross movement.',
    ],
    'General Pantaleon Garcia 2.png' => [
        'name' => 'General Pantaleon Garcia',
        'category' => 'History and Politics',
        'summary' => 'A trusted general of Emilio Aguinaldo, representative to the Malolos Convention, and later Municipal President of Imus.',
    ],
    'Panfilo Lacson.png' => [
        'name' => 'Panfilo "Ping" Morena Lacson',
        'category' => 'Military and Politics',
        'summary' => 'A former chief of the Philippine National Police and long-serving senator, recognized for public service and law-enforcement leadership.',
    ],
    'Hilario De Guzman Lara.png' => [
        'name' => 'Dr. Hilario de Guzman Lara',
        'category' => 'Science and Public Health',
        'summary' => 'Awarded National Scientist in 1985, he is widely remembered as the Father of Modern Public Health in the Philippines.',
    ],
    'Erineo Ayong Maliksi.png' => [
        'name' => 'Erineo "Ayong" S. Maliksi',
        'category' => 'Politics',
        'summary' => 'Former mayor of Imus, representative of Cavite, and governor of the province.',
    ],
    'General Tomas Mascardo.png' => [
        'name' => 'General Tomas Mascardo',
        'category' => 'History and Politics',
        'summary' => 'A commander general in the revolution who later served as politico-military governor of Bataan and Zambales during the struggle against American forces.',
    ],
    'Juanito Remulla Sr.png' => [
        'name' => 'Juanito R. Remulla Sr.',
        'category' => 'Politics',
        'summary' => 'Featured in the City of Imus tourism archive among the province\'s notable political figures.',
    ],
    'Jose Acuña Bautista (Ramon B. Revilla Sr.).png' => [
        'name' => 'Jose Acuna Bautista (Ramon B. Revilla Sr.)',
        'category' => 'Film and Public Service',
        'summary' => 'Widely known as Ramon Revilla Sr., he is listed in the city tourism archive among notable public figures connected to Imus.',
    ],
    'Teodora Bella Sapinoso.png' => [
        'name' => 'Teodora Bella Sapinoso',
        'category' => 'Featured Personality',
        'summary' => 'Listed in the official City of Imus tourism notable persons archive.',
    ],
    'Solomon Saprid.png' => [
        'name' => 'Solomon Saprid',
        'category' => 'Featured Personality',
        'summary' => 'Listed in the official City of Imus tourism notable persons archive.',
    ],
    'Leonardo Salvador Sarao.png' => [
        'name' => 'Leonardo Salvador Sarao',
        'category' => 'Crafts and Automotive Design',
        'summary' => 'He became known as a pioneer of the jeepney industry after extending and adapting surplus vehicles into mass transportation units.',
    ],
    'Simon Saulog.png' => [
        'name' => 'Simon Saulog',
        'category' => 'Featured Personality',
        'summary' => 'Listed in the official City of Imus tourism notable persons archive.',
    ],
    'Coronel Jose S. Tagle.png' => [
        'name' => 'Colonel Jose S. Tagle',
        'category' => 'History and Politics',
        'summary' => 'He led the revolt in Imus in 1896, mobilized local residents for battle, and served as capitan municipal during the revolutionary period.',
    ],
    'Cardinal Luis Antonio Gokim Tagle.png' => [
        'name' => 'Cardinal Luis Antonio Gokim Tagle',
        'category' => 'Religion',
        'summary' => 'The first cardinal from Cavite, he went on to hold senior Vatican posts, including prefect-level leadership in the Roman Curia.',
    ],
    'Heneral Gicerio Cuenca Topacio.png' => [
        'name' => 'General Licerio C. Topacio',
        'category' => 'History and Politics',
        'summary' => 'An elder Magdalo leader who declined nomination to the revolutionary presidency at Tejeros and later served twice as Municipal President of Imus.',
    ],
    'Jose Ramirez Velasco.png' => [
        'name' => 'Jose Ramirez Velasco',
        'category' => 'Featured Personality',
        'summary' => 'Listed in the official City of Imus tourism notable persons archive.',
    ],
    'Cesar E.A. Virata.png' => [
        'name' => 'Cesar E. A. Virata',
        'category' => 'Economics and Governance',
        'summary' => 'Former Prime Minister of the Philippines from 1981 to 1986 and a representative of the country in the World Bank and IMF development committee.',
    ],
    'Leonides Sarao Virata.png' => [
        'name' => 'Leonides Sarao Virata',
        'category' => 'Economics',
        'summary' => 'He served as Secretary of Commerce and Industry and later chaired the Development Bank of the Philippines.',
    ],
    'General Flaviano Yengko.png' => [
        'name' => 'General Flaviano Yengko',
        'category' => 'History and Politics',
        'summary' => 'One of the youngest revolutionary generals, he fought at Binakayan and was mortally wounded during the Battle of Pasong Santol in 1897.',
    ],
    'Thirteen Martyrs of Imus.png' => [
        'name' => 'Thirteen Martyrs of Imus',
        'category' => 'History',
        'summary' => 'Commemorated in local revolutionary memory and included in the city tourism notable persons archive.',
    ],
    'Amado de los santos Castrillo.png' => [
        'name' => 'Amado de los Santos Castrillo',
        'category' => 'Featured Personality',
        'summary' => 'Listed in the official City of Imus tourism notable persons archive.',
    ],
];

$notablePersonOrder = [
    'Francisca Tirona y Benitez.png',
    'Helena Zoila Tirona Benitez.png',
    'Dominador Monzon Camerino.png',
    'Lydia Casama.png',
    'General Juan Saraza Castaneda.png',
    'Amado de los santos Castrillo.png',
    'Hilaria Del Rosario.png',
    'General Pantaleon Garcia 2.png',
    'Panfilo Lacson.png',
    'Hilario De Guzman Lara.png',
    'Erineo Ayong Maliksi.png',
    'General Tomas Mascardo.png',
    'Juanito Remulla Sr.png',
    'Jose Acuña Bautista (Ramon B. Revilla Sr.).png',
    'Teodora Bella Sapinoso.png',
    'Solomon Saprid.png',
    'Leonardo Salvador Sarao.png',
    'Simon Saulog.png',
    'Coronel Jose S. Tagle.png',
    'Cardinal Luis Antonio Gokim Tagle.png',
    'Heneral Gicerio Cuenca Topacio.png',
    'Jose Ramirez Velasco.png',
    'Cesar E.A. Virata.png',
    'Leonides Sarao Virata.png',
    'General Flaviano Yengko.png',
    'Thirteen Martyrs of Imus.png',
];

$notablePersons = [];
foreach ($notablePersonOrder as $notableFilename) {
    $profile = $notablePersonProfiles[$notableFilename] ?? [];

    $notablePersons[] = [
        'name' => $profile['name'] ?? $humanizeArchiveLabel($notableFilename),
        'category' => $profile['category'] ?? 'Featured Personality',
        'summary' => $profile['summary'] ?? 'Listed in the official City of Imus tourism notable persons archive.',
        'image' => 'IMG/notable-persons/' . $notableFilename,
    ];
}

$notableInitialCount = 8;
$artistInitialCount = 12;

if (!function_exists('tourism_humanize_filename')) {
    function tourism_humanize_filename(string $filename): string
    {
        $label = pathinfo($filename, PATHINFO_FILENAME);
        $label = str_replace(['_', '-'], ' ', $label);
        $label = preg_replace('/\s+/', ' ', $label) ?? $label;

        return trim($label);
    }
}

$artistFiles = glob(__DIR__ . '/../IMG/directory-of-professionals/*.png') ?: [];
sort($artistFiles, SORT_NATURAL | SORT_FLAG_CASE);

$artistDirectory = [];
foreach ($artistFiles as $artistFile) {
    $artistDirectory[] = [
        'name' => tourism_humanize_filename(basename($artistFile)),
        'image' => 'IMG/directory-of-professionals/' . basename($artistFile),
    ];
}

$artistCount = count($artistDirectory);
$featuredNotablePersons = array_slice($notablePersons, 0, $notableInitialCount);
$remainingNotablePersons = array_slice($notablePersons, $notableInitialCount);
$featuredArtists = array_slice($artistDirectory, 0, $artistInitialCount);
$remainingArtists = array_slice($artistDirectory, $artistInitialCount);

require_once __DIR__ . '/../includes/header.navbar.php';
?>

<section class="relative z-10 py-12 sm:py-14 lg:py-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusDeep via-imusBlue to-[#0b3f76] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 xl:grid-cols-[1.22fr_0.78fr] xl:items-stretch">
                <div>
                    <p class="inline-flex rounded-full border border-white/35 bg-white/10 px-3 py-1 text-[11px] font-semibold uppercase tracking-[0.14em] text-white/90">
                        Tourism and Heritage
                    </p>
                    <h1 class="mt-3 font-display text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">
                        History, heritage sites, and notable Imus personalities
                    </h1>
                    <p class="mt-4 max-w-3xl text-sm leading-relaxed text-white/90 sm:text-base lg:text-lg">
                        Imus brings together battle landmarks, heritage sites, religious traditions, revolutionary
                        figures, and a growing local arts community in one city story.
                    </p>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="#History-and-Culture"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Explore Heritage
                        </a>
                        <a href="#Heroes-of-Imus"
                            class="focusable inline-flex items-center rounded-full border border-white/40 px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-white/15">
                            View Heroes
                        </a>
                    </div>

                    <div class="mt-8 grid gap-3 text-sm sm:grid-cols-3">
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold"><?= e((string) count($heritageStories)) ?> heritage highlights</p>
                            <p class="mt-1 text-white/80">Historic locations, civic traditions, and landmark spaces.</p>
                        </div>
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold"><?= e((string) count($heroes)) ?> heroes featured</p>
                            <p class="mt-1 text-white/80">Profiles tied to the revolutionary identity of Imus.</p>
                        </div>
                        <div class="rounded-2xl border border-white/20 bg-white/10 px-4 py-3">
                            <p class="font-semibold"><?= e((string) $artistCount) ?> artists listed</p>
                            <p class="mt-1 text-white/80">Selected from the city artist registry archive.</p>
                        </div>
                    </div>
                </div>

                <aside class="glass-card rounded-3xl p-4 sm:p-5">
                    <?= imus_image('IMG/Cathedral Aerial View.png', 'Aerial view associated with Imus heritage sites', [
                        'loading' => 'eager',
                        'decoding' => 'async',
                        'fetchpriority' => 'high',
                        'class' => 'h-64 w-full rounded-2xl object-cover sm:h-72 lg:h-80',
                    ]) ?>
                    <p class="mt-3 text-xs font-semibold uppercase tracking-[0.14em] text-imusBlue">Historic Imus</p>
                    <p class="mt-2 text-sm leading-relaxed text-slate-700">
                        The heritage landscape of Imus includes churches, plazas, battle markers, museums, and civic
                        traditions that continue to define the city.
                    </p>
                </aside>
            </div>
        </div>
    </div>
</section>

<section id="History-and-Culture" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 1</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">History and Culture</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Heritage in Imus is shaped by revolutionary victories, church traditions, civic commemorations, and
                longstanding public landmarks in the old town center.
            </p>

            <div class="mt-8 grid gap-5 lg:grid-cols-4">
                <?php foreach ($heritageStories as $story): ?>
                    <article class="overflow-hidden rounded-3xl border border-slate-200 bg-white shadow-soft-xl">
                        <?= imus_image($story['image'], $story['title'], [
                            'loading' => 'lazy',
                            'decoding' => 'async',
                            'class' => 'h-56 w-full object-cover',
                        ]) ?>
                        <div class="p-5">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($story['period']) ?></p>
                            <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($story['title']) ?></h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($story['summary']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Visiting-Imus" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-[#e9f4ff] via-white to-[#e6f8f3] p-5 shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr] lg:items-center">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 2</p>
                    <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Visiting Imus</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                        A good first-time route through Imus combines the historic core, battle markers, the museum,
                        and official tourism updates on local commemorations.
                    </p>

                    <div class="mt-8 grid gap-4 sm:grid-cols-2">
                        <?php foreach ($visitGuides as $guide): ?>
                            <article class="rounded-2xl border border-imusBlue/15 bg-white/90 p-5 shadow-sm">
                                <h3 class="font-display text-lg font-semibold text-civicInk"><?= e($guide['title']) ?></h3>
                                <p class="mt-2 text-sm leading-relaxed text-slate-600"><?= e($guide['summary']) ?></p>
                            </article>
                        <?php endforeach; ?>
                    </div>

                    <div class="mt-7 flex flex-wrap gap-3">
                        <a href="https://www.facebook.com/ImusCityTourism" target="_blank" rel="noopener noreferrer"
                            class="focusable inline-flex items-center rounded-full bg-imusGreen px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-green-700">
                            Open Tourism Facebook
                        </a>
                        <a href="<?= e(base_url('Pages/AboutImus.php#History')) ?>"
                            class="focusable inline-flex items-center rounded-full border border-imusBlue/30 px-5 py-2.5 text-sm font-semibold text-imusBlue transition hover:bg-imusBlue/10">
                            Read City History
                        </a>
                    </div>
                </div>

                <div class="overflow-hidden rounded-3xl border border-imusBlue/20 bg-white/90 p-4 shadow-soft-xl backdrop-blur-sm sm:p-5">
                    <?= imus_image('IMG/Church.png', 'Imus Church and heritage environment', [
                        'loading' => 'lazy',
                        'decoding' => 'async',
                        'class' => 'h-[340px] w-full rounded-2xl object-cover sm:h-[400px]',
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Heroes-of-Imus" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 3</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Heroes of Imus</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Revolutionary leaders connected to Imus continue to define the city's place in national history.
            </p>

            <div class="mt-8 grid gap-5 lg:grid-cols-2">
                <?php foreach ($heroes as $hero): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-4 shadow-soft-xl sm:p-5">
                        <div class="grid gap-4 sm:grid-cols-2 sm:items-center">
                            <?= imus_image($hero['image'], $hero['name'], [
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'class' => 'h-72 w-full rounded-2xl bg-imusGreen/10 object-contain p-4 sm:h-80',
                            ]) ?>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($hero['years']) ?></p>
                                <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($hero['name']) ?></h3>
                                <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($hero['summary']) ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section id="Notable-Persons" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 4</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Notable Persons</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Beyond the revolutionary record, Imus is also associated with educators, faith leaders, public
                servants, scientists, entrepreneurs, and cultural figures.
            </p>

            <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <?php foreach ($featuredNotablePersons as $person): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-4 shadow-soft-xl sm:p-5">
                        <div class="rounded-2xl bg-imusBlue/5 p-4">
                            <?= imus_image($person['image'], $person['name'], [
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'class' => 'h-80 w-full object-contain sm:h-96',
                            ]) ?>
                        </div>
                        <div class="pt-5">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($person['category']) ?></p>
                            <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($person['name']) ?></h3>
                            <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($person['summary']) ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php if ($remainingNotablePersons !== []): ?>
                <details class="page-details mt-6 p-5">
                    <summary class="flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue">More Personalities</p>
                            <h3 class="mt-2 font-display text-xl font-semibold text-civicInk">Additional notable persons</h3>
                        </div>
                        <span class="inline-flex rounded-full bg-imusBlue px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-white">
                            <?= e((string) count($remainingNotablePersons)) ?> more
                        </span>
                    </summary>
                    <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                        <?php foreach ($remainingNotablePersons as $person): ?>
                            <article class="rounded-3xl border border-slate-200 bg-white p-4 shadow-soft-xl sm:p-5">
                                <div class="rounded-2xl bg-imusBlue/5 p-4">
                                    <?= imus_image($person['image'], $person['name'], [
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                        'class' => 'h-80 w-full object-contain sm:h-96',
                                    ]) ?>
                                </div>
                                <div class="pt-5">
                                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-imusBlue"><?= e($person['category']) ?></p>
                                    <h3 class="mt-2 font-display text-xl font-semibold leading-snug text-civicInk"><?= e($person['name']) ?></h3>
                                    <p class="mt-3 text-sm leading-relaxed text-slate-600"><?= e($person['summary']) ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </details>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] overflow-hidden rounded-[2rem] border border-imusBlue/20 bg-gradient-to-br from-imusBlue via-imusDeep to-[#052346] p-5 text-white shadow-soft-2xl sm:p-7 lg:p-8">
            <div class="sm:flex sm:items-end sm:justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-[0.16em] text-white/75">Creative Directory</p>
                    <h2 class="mt-2 font-display text-2xl font-bold leading-tight sm:text-3xl">Imus Artists and Art Professionals</h2>
                    <p class="mt-3 max-w-3xl text-sm leading-relaxed text-white/85 sm:text-base">
                        The Imus City Artist Registry highlights local practitioners in music, visual arts,
                        literature, design, film, and related disciplines.
                    </p>
                </div>
                <div class="mt-4 rounded-2xl border border-white/20 bg-white/10 px-4 py-3 text-sm font-semibold text-white/90 sm:mt-0">
                    <?= e((string) $artistCount) ?> registry entries in local archive
                </div>
            </div>

            <div class="mt-8 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6">
                <?php foreach ($featuredArtists as $artist): ?>
                    <article class="overflow-hidden rounded-3xl border border-white/20 bg-white/10 shadow-soft-xl backdrop-blur-sm">
                        <div class="bg-white/10">
                            <?= imus_image($artist['image'], $artist['name'], [
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'class' => 'h-56 w-full bg-white/10 object-contain p-4',
                            ]) ?>
                        </div>
                        <div class="p-4">
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/75">Creative Professional</p>
                            <h3 class="mt-2 font-display text-base font-semibold leading-snug text-white"><?= e($artist['name']) ?></h3>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php if ($remainingArtists !== []): ?>
                <details class="page-details mt-6 border-white/20 bg-white/10 p-5 text-white">
                    <summary class="flex flex-wrap items-center justify-between gap-3">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/75">More From The Registry</p>
                            <h3 class="mt-2 font-display text-xl font-semibold text-white">Additional artists and art professionals</h3>
                        </div>
                        <span class="inline-flex rounded-full border border-white/20 bg-white/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.12em] text-white">
                            <?= e((string) count($remainingArtists)) ?> more
                        </span>
                    </summary>
                    <div class="mt-5 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6">
                        <?php foreach ($remainingArtists as $artist): ?>
                            <article class="overflow-hidden rounded-3xl border border-white/20 bg-white/10 shadow-soft-xl backdrop-blur-sm">
                                <div class="bg-white/10">
                                    <?= imus_image($artist['image'], $artist['name'], [
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                        'class' => 'h-56 w-full bg-white/10 object-contain p-4',
                                    ]) ?>
                                </div>
                                <div class="p-4">
                                    <p class="text-xs font-semibold uppercase tracking-[0.12em] text-white/75">Creative Professional</p>
                                    <h3 class="mt-2 font-display text-base font-semibold leading-snug text-white"><?= e($artist['name']) ?></h3>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </details>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>
