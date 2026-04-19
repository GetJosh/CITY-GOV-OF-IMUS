<?php
declare(strict_types=1);

$pageTitle = 'About Imus';
$pageDescription = 'City profile, local government overview, barangay information, history, and offices of the City of Imus.';

$profileFacts = [
    ['label' => 'Classification', 'value' => '1st Class Component City'],
    ['label' => 'Province', 'value' => 'Cavite'],
    ['label' => 'Population', 'value' => '539,743'],
    ['label' => 'Population Density', 'value' => '101.56 persons/sq.km.'],
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

$cityCouncilors = [
    [
        'name' => 'Hon. Shernan S. Jaro',
        'committee' => 'Committee on Finance, Budget and Appropriations / Committee on Ways and Means',
        'image' => 'IMG/officials-and-councilors/Konsi-Shernan.png',
    ],
    [
        'name' => 'Hon. Dennis T. Lacson',
        'committee' => 'Committee on Land Utilization, Zoning, and Housing / Human Settlements',
        'image' => 'IMG/officials-and-councilors/Konsi-Dennis.png',
    ],
    [
        'name' => 'Hon. Peter Emmanuel C. Lara',
        'committee' => 'Committee on Ordinances, Rules, Privileges, and Legal Matters',
        'image' => 'IMG/officials-and-councilors/Konsi-Wency.png',
    ],
    [
        'name' => 'Hon. Lloren Dionella G. Saquilayan',
        'committee' => 'Committee on Social Services, Family, Women, and Children',
        'image' => 'IMG/officials-and-councilors/Konsi-Yen.png',
    ],
    [
        'name' => 'Hon. Larry Boy S. Nato',
        'committee' => 'Committee on Games and Amusement / Franchise / Transportations and Communications / Information and Communication Technology',
        'image' => 'IMG/officials-and-councilors/Konsi-Larry.png',
    ],
    [
        'name' => 'Hon. Sherwin L. Comia',
        'committee' => 'Committee on Public Works and Infrastructures, Special Projects',
        'image' => 'IMG/officials-and-councilors/Konsi-Sherwin.png',
    ],
    [
        'name' => 'Hon. Darwin Marti M. Remulla',
        'committee' => 'Committee on Agriculture and Agrarian Reforms / Environment Protection and Ecology / Market and Slaughterhouses',
        'image' => 'IMG/officials-and-councilors/Konsi-Darwin.png',
    ],
    [
        'name' => 'Hon. Enzo Gaston A. Asistio',
        'committee' => 'Committee on Health, Nutrition, Population, and Sanitation',
        'image' => 'IMG/officials-and-councilors/Konsi-Enzo.png',
    ],
    [
        'name' => 'Hon. Jogie Lyn L. Maliksi',
        'committee' => 'Committee on Tourism and Culture',
        'image' => 'IMG/officials-and-councilors/Konsi-Jelyn.png',
    ],
    [
        'name' => 'Hon. Gregorio Miguel B. Ocampo Jr.',
        'committee' => 'Committee on Education',
        'image' => 'IMG/officials-and-councilors/Konsi-Igi.png',
    ],
    [
        'name' => 'Hon. David Sapitan Jr.',
        'committee' => 'Committee on Cooperatives / People\'s Organization Accreditation Livelihood / Elderly',
        'image' => 'IMG/officials-and-councilors/Konsi-David.png',
    ],
    [
        'name' => 'Hon. Mark Anthony P. Villanueva',
        'committee' => 'Committee on Trade, Commerce, and Industry / Labor and Employment and Industrial Peace',
        'image' => 'IMG/officials-and-councilors/Konsi-Mark.png',
    ],
    [
        'name' => 'Hon. Reymundo Ramirez',
        'committee' => 'Committee on Peace and Order, Public Welfare and Safety and Fire Protection / Human Rights / Barangay Affairs',
        'image' => 'IMG/officials-and-councilors/Konsi-Capt-RR.png',
    ],
    [
        'name' => 'Hon. Glian Ilagan',
        'committee' => 'Committee on Sports and Youth Development',
        'image' => 'IMG/officials-and-councilors/Konsi-SK-Glian.png',
    ],
];

$provincialReps = [
    [
        'name' => 'Hon. Ony Cantimbuhan',
        'committee' => 'Provincial Board Member, 3rd District of Cavite',
        'image' => 'IMG/officials-and-councilors/BM-Oni.png',
    ],
    [
        'name' => 'Hon. Lloyd Emman D. Jaro',
        'committee' => 'Provincial Board Member, 3rd District of Cavite',
        'image' => 'IMG/officials-and-councilors/BM-Lloyd.png',
    ],
    [
        'name' => 'Hon. Chelsea Jillian Sarno',
        'committee' => 'Cavite SK Provincial Federation President',
        'image' => 'IMG/officials-and-councilors/SK-Pres-Chelsea.png',
    ],
];

$barangayClusters = [
    [
        'name' => 'Cluster 1',
        'coverage' => 'Alapan area and nearby barangays',
        'barangays' => [
            ['name' => 'Alapan I-A', 'captain' => 'Aman, Jeffrey Primero'],
            ['name' => 'Alapan I-B', 'captain' => 'Santos, Rico David'],
            ['name' => 'Alapan I-C', 'captain' => 'Marcial, Noriel Santiaguel'],
            ['name' => 'Alapan II-A', 'captain' => 'Barzaga, Marc Albert Didal'],
            ['name' => 'Alapan II-B', 'captain' => 'Camia, Benedicto Dayrit'],
            ['name' => 'Bucandala I', 'captain' => 'Santiaguel, Ferdinand Apolinar'],
            ['name' => 'Bucandala II', 'captain' => 'Vilbar, Mark Jefferson Legaspi'],
            ['name' => 'Bucandala III', 'captain' => 'Sarreál, Amado Saria'],
            ['name' => 'Bucandala IV', 'captain' => 'Bacos, Gary Olaes'],
            ['name' => 'Bucandala V', 'captain' => 'Saliba, Reynaldo Obispo'],
        ],
    ],
    [
        'name' => 'Cluster 2',
        'coverage' => 'Bantayan and Bucandala area',
        'barangays' => [
            ['name' => 'Carsadang Bago I', 'captain' => 'Cubillo, Laila Papa'],
            ['name' => 'Carsadang Bago II', 'captain' => 'Candalla, Eliseo Jarin'],
            ['name' => 'Pag-Asa I', 'captain' => 'Galang, Rolito Jarin'],
            ['name' => 'Pag-Asa II', 'captain' => 'Medina, Ernesto Jarin'],
            ['name' => 'Pag-Asa III', 'captain' => 'Dagumboy, Joemar Felix'],
            ['name' => 'Medicion I-A', 'captain' => 'Camat, Leomar Viña'],
            ['name' => 'Medicion I-B', 'captain' => 'Condalor, Ferdinand Dayson'],
            ['name' => 'Medicion I-C', 'captain' => 'Dominguez, Roberto Toledo'],
            ['name' => 'Medicion I-D', 'captain' => 'Igtiben, Mark Luigi Monreal'],
            ['name' => 'Medicion II-A', 'captain' => 'Jarin, Alexander Monzon'],
            ['name' => 'Medicion II-B', 'captain' => 'Monzon, Eduardo Frias'],
            ['name' => 'Medicion II-C', 'captain' => 'Bella, Riciel Barzaga'],
            ['name' => 'Medicion II-D', 'captain' => 'Nas, Rommel Cairme'],
            ['name' => 'Medicion II-E', 'captain' => 'Monzon, Lamberto Episioco'],
            ['name' => 'Medicion II-F', 'captain' => 'Octavo, Eugenio Risco'],
        ],
    ],
    [
        'name' => 'Cluster 3',
        'coverage' => 'Carsadang Bago and neighboring barangays',
        'barangays' => [
            ['name' => 'Anabu I-A', 'captain' => 'Saratan, Jan Wilmher Cuenca'],
            ['name' => 'Anabu I-B', 'captain' => 'Minaldo, Rafael Ochoa'],
            ['name' => 'Anabu I-C', 'captain' => 'Ramos, Romeo Ignacio'],
            ['name' => 'Anabu I-D', 'captain' => 'Lares, Joven A.'],
            ['name' => 'Anabu I-E', 'captain' => 'Camungol, Antonio Barco'],
            ['name' => 'Anabu I-F', 'captain' => 'Sarte, Rocky Marciano A.'],
            ['name' => 'Anabu I-G', 'captain' => 'Silla, Robinson Papa'],
        ],
    ],
    [
        'name' => 'Cluster 4',
        'coverage' => 'Malagasang area',
        'barangays' => [
            ['name' => 'Anabu II-A', 'captain' => 'Atanacio, James Bryan Remulla'],
            ['name' => 'Anabu II-B', 'captain' => 'Diato, Christian Rementilla'],
            ['name' => 'Anabu II-C', 'captain' => 'Sarte, Joey Bernardo'],
            ['name' => 'Anabu II-D', 'captain' => 'Lares, Geraldo Calitis'],
            ['name' => 'Anabu II-E', 'captain' => 'Paredes, Lorenzo Genido'],
            ['name' => 'Anabu II-F', 'captain' => 'Parreñas, Bernadette Gaborro'],
        ],
    ],
    [
        'name' => 'Cluster 5',
        'coverage' => 'Medicion and nearby barangays',
        'barangays' => [
            ['name' => 'Bayan Luma I', 'captain' => 'Canaynay, Melquiades Tala Tala'],
            ['name' => 'Bayan Luma II', 'captain' => 'Bautista, Reuben Jesse Magsaysay'],
            ['name' => 'Bayan Luma III', 'captain' => 'Borromeo, Reynaldo Pastor'],
            ['name' => 'Bayan Luma IV', 'captain' => 'Aquilino, Natividad Chua'],
            ['name' => 'Bayan Luma V', 'captain' => 'Reyes, Edgardo Dela Cruz'],
            ['name' => 'Bayan Luma VI', 'captain' => 'Salvador, Kent Lewis Cani'],
            ['name' => 'Bayan Luma VII', 'captain' => 'Camia, Zosimo Jr. Cruz'],
            ['name' => 'Bayan Luma VIII', 'captain' => 'Esguerra, Efren Jr. Bautista'],
            ['name' => 'Bayan Luma IX', 'captain' => 'Tined, Ruben Jr. De Guzman'],
        ],
    ],
    [
        'name' => 'Cluster 6',
        'coverage' => 'Poblacion area',
        'barangays' => [
            ['name' => 'Bagong Silang', 'captain' => 'Cariño, Carlito Dumalanta'],
            ['name' => 'Magdalo', 'captain' => 'Jardin, Kaizer Lozada'],
            ['name' => 'Maharlika', 'captain' => 'Hynson, Gina Delos Reyes'],
            ['name' => 'Mariano Espeleta I', 'captain' => 'Cruz, Alnair Macahilig'],
            ['name' => 'Mariano Espeleta II', 'captain' => 'Punzalan, Nelson Jr. Dagum'],
            ['name' => 'Mariano Espeleta III', 'captain' => 'Nato, Silvestre Campaña'],
            ['name' => 'Pinagbuklod', 'captain' => 'Ocampo, Ricardo Salvador'],
            ['name' => 'Pasong Buaya I', 'captain' => 'Ramos, Wilfredo Esguerra'],
            ['name' => 'Pasong Buaya II', 'captain' => 'Tagle, Carlito Camantigue'],
        ],
    ],
    [
        'name' => 'Cluster 7',
        'coverage' => 'Pasong Buaya area',
        'barangays' => [
            ['name' => 'Buhay Na Tubig', 'captain' => 'Ramirez, Reymundo De Guzman'],
            ['name' => 'Palico I', 'captain' => 'Olives, Nicanor Zaragosa'],
            ['name' => 'Palico II', 'captain' => 'Sapanghila, Ryan Jay Gayamo'],
            ['name' => 'Palico III', 'captain' => 'Dominguez, Luisito Zapanta'],
            ['name' => 'Palico Iv', 'captain' => 'Dominguez, Marlo Espiritu'],
            ['name' => 'Tanzang Luma I', 'captain' => 'Dones, Reynante Dominguez'],
            ['name' => 'Tanzang Luma II', 'captain' => 'Lacson, Carlo Rey Perez'],
            ['name' => 'Tanzang Luma III', 'captain' => 'Manela, Marty Landas'],
            ['name' => 'Tanzang Luma Iv', 'captain' => 'Cinto, Jhun Gaña'],
            ['name' => 'Tanzang Luma V', 'captain' => 'Acuña, Bienvenido Camaclang'],
            ['name' => 'Tanzang Luma VI', 'captain' => 'Crisologo, Redentor Magsakay'],
        ],
    ],
    [
        'name' => 'Cluster 8',
        'coverage' => 'Tanzang Luma and neighboring barangays',
        'barangays' => [
            ['name' => 'Poblacion I-A', 'captain' => 'Tacus, Gregorio Escobido'],
            ['name' => 'Poblacion I-B', 'captain' => 'Dominguez, Kristel Joy De Leon'],
            ['name' => 'Poblacion I-C', 'captain' => 'Constantino, Hilario Sapin'],
            ['name' => 'Poblacion II-A', 'captain' => 'Sauler, Gary Dela Cruz'],
            ['name' => 'Poblacion II-B', 'captain' => 'Ravelo, Ferdinand Tambio'],
            ['name' => 'Poblacion III-A', 'captain' => 'Maluto, Carlos Serviano'],
            ['name' => 'Poblacion III-B', 'captain' => 'Ramirez, Elmer Diones'],
            ['name' => 'Poblacion IV-A', 'captain' => 'Figueras, Perpetua Fernandez'],
            ['name' => 'Poblacion IV-B', 'captain' => 'Caimol, John Orly Gonzaga'],
            ['name' => 'Poblacion IV-C', 'captain' => 'Kamantigue, Imelda Gacos'],
            ['name' => 'Poblacion IV-D', 'captain' => 'Virata, Michael Samonte'],
            ['name' => 'Toclong I-A', 'captain' => 'Sañez, Oktubre Camandang'],
            ['name' => 'Toclong I-B', 'captain' => 'Badion, Nerrie Salem'],
            ['name' => 'Toclong I-C', 'captain' => 'Santos, Joey Remulla'],
            ['name' => 'Toclong II-A', 'captain' => 'Sañez, Abraham Jr. Santos'],
            ['name' => 'Toclong II-B', 'captain' => 'Remulla, Joseph Regalado'],
        ],
    ],
    [
        'name' => 'Cluster 9',
        'coverage' => 'Anabu and surrounding barangays',
        'barangays' => [
            ['name' => 'Malagasang I-A', 'captain' => 'Parnala, Pedro Manimbao'],
            ['name' => 'Malagasang I-B', 'captain' => 'Reyes, Mario Jr. Palajos'],
            ['name' => 'Malagasang I-C', 'captain' => 'Saulog, Gerardo Sanchez'],
            ['name' => 'Malagasang I-D', 'captain' => 'Tapawan, Manuel Saquilayan'],
            ['name' => 'Malagasang I-E', 'captain' => 'Sayaman, Josefino Macalawa'],
            ['name' => 'Malagasang I-F', 'captain' => 'Lara, Randy Sapinoso'],
            ['name' => 'Malagasang I-G', 'captain' => 'Valerio, Mark Oliver Jarin'],
            ['name' => 'Malagasang II-A', 'captain' => 'Progoso, Aldrin Olivarez'],
            ['name' => 'Malagasang II-B', 'captain' => 'Andallon, Lenie Herrera'],
            ['name' => 'Malagasang II-C', 'captain' => 'Herrera, Danilo Magsino'],
            ['name' => 'Malagasang II-D', 'captain' => 'Servida, Alexander Vasquez'],
            ['name' => 'Malagasang II-E', 'captain' => 'Topacio, Jose Zanido Camarce'],
            ['name' => 'Malagasang II-F', 'captain' => 'Fauni, Edward Dayuta'],
            ['name' => 'Malagasang II-G', 'captain' => 'Fauni, Armando Saquilayan'],
        ],
    ],
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

$vision = 'The model city in the region, with secured and healthy citizenry, living in a smart, green and sustainable environment in a technology-driven economy, governed with integrity and transparency.';

$mission = 'The City Government of Imus is committed to delivering a transparent, reliable, and efficient public service that is proactive to the needs of its people while actively pursuing development for a dynamic and unified Imus.';

$mayorMessage = 'Welcome to the City of Imus! Explore the official website of the City Government of Imus, where we showcase our commitment to good governance and transparency. Here, you\'ll find essential information about our programs, services, and projects aligned with our mission, AAngat ang Imus. We warmly invite you to dive into our City\'s rich history and vibrant culture, taste our local flavors, visit our must-see attractions, and feel the genuine hospitality that makes Imuseños proud. Start planning your visit today, and experience the charm of Imus—proudly known as the Flag Capital of the Philippines!';

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

<section id="Vision" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 2</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Vision</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                <?= e($vision) ?>
            </p>
        </div>
    </div>
</section>

<section id="Mission" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 3</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Mission</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                <?= e($mission) ?>
            </p>
        </div>
    </div>
</section>

<section id="Mayor-Message" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 4</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Message from the Mayor</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                <?= e($mayorMessage) ?>
            </p>
        </div>
    </div>
</section>

<section id="City-Government" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 5</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">City Government</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Current elected city leaders and their core public responsibilities.
            </p>

            <div class="mt-8 grid gap-6 lg:grid-cols-3">
                <?php foreach ($cityOfficials as $official): ?>
                    <article class="rounded-3xl border border-slate-200 bg-white p-5 shadow-soft-xl sm:p-6">
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

            <div class="mt-16">
                <h3 class="font-display text-xl font-bold text-civicInk sm:text-2xl">Provincial Representatives</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">Provincial board members and youth leaders representing Imus at the provincial level.</p>
                <div class="mt-6 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                    <?php foreach ($provincialReps as $rep): ?>
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <?= imus_image($rep['image'], $rep['name'], [
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'fetchpriority' => 'low',
                                'class' => 'h-56 w-full rounded-xl bg-imusGreen/10 object-contain',
                            ]) ?>
                            <h4 class="mt-3 font-display text-lg font-semibold text-civicInk"><?= e($rep['name']) ?></h4>
                            <p class="mt-1 text-xs leading-relaxed text-slate-600"><?= e($rep['committee']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mt-16">
                <h3 class="font-display text-xl font-bold text-civicInk sm:text-2xl">City Councilors</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">Meet the members of the Sangguniang Panlungsod and their committee assignments.</p>
                <div class="mt-6 grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
                    <?php foreach ($cityCouncilors as $councilor): ?>
                        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm">
                            <?= imus_image($councilor['image'], $councilor['name'], [
                                'loading' => 'lazy',
                                'decoding' => 'async',
                                'fetchpriority' => 'low',
                                'class' => 'h-56 w-full rounded-xl bg-imusGreen/10 object-contain',
                            ]) ?>
                            <h4 class="mt-3 font-display text-lg font-semibold text-civicInk"><?= e($councilor['name']) ?></h4>
                            <p class="mt-1 text-xs leading-relaxed text-slate-600"><?= e($councilor['committee']) ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="Brgy-Officials" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 6</p>
            <h2 class="mt-2 font-display text-2xl font-bold text-civicInk sm:text-3xl">Barangay Clusters</h2>
            <p class="mt-3 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                The official barangay directory groups the city's 97 barangays into nine coordination clusters.
            </p>

            <div class="mt-8">
                <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
                    <div class="flex gap-2">
                        <button id="expand-all" class="inline-flex items-center rounded-lg border border-imusBlue bg-imusBlue px-4 py-2 text-sm font-semibold text-white transition hover:bg-imusBlue/90">
                            Expand All
                        </button>
                        <button id="collapse-all" class="inline-flex items-center rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm font-semibold text-slate-700 transition hover:bg-slate-50">
                            Collapse All
                        </button>
                    </div>
                    <div class="relative">
                        <input type="text" id="barangay-search" placeholder="Search barangays or captains..." class="w-full rounded-lg border border-slate-300 bg-white px-4 py-2 text-sm focus:border-imusBlue focus:outline-none sm:w-80">
                        <svg class="absolute right-3 top-2.5 h-4 w-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <div class="mt-6 space-y-4" id="barangay-clusters">
                    <?php foreach ($barangayClusters as $index => $cluster): ?>
                        <details class="group rounded-2xl border border-slate-200 bg-white shadow-sm cluster-item" <?= $index < 2 ? 'open' : '' ?>>
                            <summary class="flex flex-col gap-2 px-5 py-4 text-left cursor-pointer sm:flex-row sm:items-center sm:justify-between">
                                <div>
                                    <p class="text-lg font-semibold text-civicInk cluster-name"><?= e($cluster['name']) ?></p>
                                    <p class="text-sm text-slate-600 cluster-coverage"><?= e($cluster['coverage']) ?></p>
                                </div>
                                <span class="text-xs font-semibold text-imusBlue transition group-open:rotate-180">▼</span>
                            </summary>
                            <div class="border-t border-slate-200 bg-slate-50 px-5 py-5 cluster-content">
                                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 barangay-grid">
                                    <?php foreach ($cluster['barangays'] as $barangay): ?>
                                        <div class="rounded-xl bg-white p-4 shadow-sm barangay-item">
                                            <p class="font-semibold text-sm text-civicInk barangay-name"><?= e($barangay['name']) ?></p>
                                            <p class="mt-1 text-xs text-slate-600 barangay-captain"><?= e($barangay['captain']) ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const searchInput = document.getElementById('barangay-search');
                    const expandAllBtn = document.getElementById('expand-all');
                    const collapseAllBtn = document.getElementById('collapse-all');
                    const clusters = document.querySelectorAll('.cluster-item');

                    // Search functionality
                    searchInput.addEventListener('input', function() {
                        const searchTerm = this.value.toLowerCase().trim();
                        let hasVisibleClusters = false;

                        clusters.forEach(cluster => {
                            const clusterName = cluster.querySelector('.cluster-name').textContent.toLowerCase();
                            const clusterCoverage = cluster.querySelector('.cluster-coverage').textContent.toLowerCase();
                            const barangayItems = cluster.querySelectorAll('.barangay-item');
                            let hasVisibleBarangays = false;

                            barangayItems.forEach(item => {
                                const barangayName = item.querySelector('.barangay-name').textContent.toLowerCase();
                                const barangayCaptain = item.querySelector('.barangay-captain').textContent.toLowerCase();

                                const matches = barangayName.includes(searchTerm) ||
                                               barangayCaptain.includes(searchTerm) ||
                                               clusterName.includes(searchTerm) ||
                                               clusterCoverage.includes(searchTerm);

                                item.style.display = matches ? '' : 'none';
                                if (matches) hasVisibleBarangays = true;
                            });

                            cluster.style.display = hasVisibleBarangays || searchTerm === '' ? '' : 'none';
                            if (hasVisibleBarangays || searchTerm === '') hasVisibleClusters = true;

                            // Auto-expand clusters with matches
                            if (hasVisibleBarangays && searchTerm !== '') {
                                cluster.setAttribute('open', '');
                            }
                        });

                        // Show/hide no results message
                        let noResultsMsg = document.getElementById('no-results');
                        if (!hasVisibleClusters && searchTerm !== '') {
                            if (!noResultsMsg) {
                                noResultsMsg = document.createElement('p');
                                noResultsMsg.id = 'no-results';
                                noResultsMsg.className = 'mt-4 text-center text-slate-500';
                                noResultsMsg.textContent = 'No barangays found matching your search.';
                                document.getElementById('barangay-clusters').appendChild(noResultsMsg);
                            }
                        } else if (noResultsMsg) {
                            noResultsMsg.remove();
                        }
                    });

                    // Expand All button
                    expandAllBtn.addEventListener('click', function() {
                        clusters.forEach(cluster => cluster.setAttribute('open', ''));
                    });

                    // Collapse All button
                    collapseAllBtn.addEventListener('click', function() {
                        clusters.forEach(cluster => cluster.removeAttribute('open'));
                    });
                });
            </script>
        </div>
    </div>
</section>

<section id="History" class="deferred-section relative z-10 pb-12 sm:pb-14 lg:pb-16">
    <div class="section-shell">
        <div class="mx-auto w-full max-w-[90rem] rounded-[2rem] border border-imusBlue/15 bg-white/90 p-5 shadow-soft-2xl backdrop-blur-sm sm:p-7 lg:p-8">
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 7</p>
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
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 8</p>
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
            <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Section 9</p>
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
