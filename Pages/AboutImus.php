<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Basic Page Setup
|--------------------------------------------------------------------------
| BASE_URL helps all local links work in both root and subfolder hosting.
| Example:
|   /index.php
|   /.TESTING/CITY-GOV-OF-IMUS/index.php
*/
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = str_replace('\\', '/', dirname($scriptName));
$scriptDir = trim($scriptDir, '/');
$baseUrl = ($scriptDir === '' || $scriptDir === '.') ? '/' : '/' . $scriptDir . '/';

define('BASE_URL', $baseUrl);

/* Build a local URL using BASE_URL. */
function base_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    if ($path === '') {
        return BASE_URL;
    }

    return BASE_URL . $path;
}

/* Safe HTML output helper. */
function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* Convert visible phone number text to a tel: link. */
function tel_href(string $value): string
{
    $normalized = preg_replace('/[^0-9+]/', '', $value) ?? '';

    return $normalized === '' ? '' : 'tel:' . $normalized;
}

$officialFacebook = 'https://www.facebook.com/CityofImus/';
$mayorFacebook = 'https://www.facebook.com/alexladvincula';
$pageTitle = 'About Imus';
$pageDescription = 'Learn about the City of Imus, its history, culture, government structure, and community information.';

$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') === '443')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$canonicalUrl = $scheme . '://' . $host . base_url('Pages/AboutImus.php');
$initialManilaDateTime = (new DateTimeImmutable('now', new DateTimeZone('Asia/Manila')))
    ->format('F j, Y | g:i A') . ' (PHT)';
$transparentPixel = 'data:image/gif;base64,R0lGODlhAQABAAAAACw=';

/* Top utility links (small links above the main navigation). */
$utilityLinks = [
    [
        'label' => 'Full Disclosures',
        'href' => base_url('HTML/Full-disclosure.html'),
        'external' => false,
    ],
    [
        'label' => 'Downloadable Forms',
        'href' => base_url('HTML/Downloadable-forms.html'),
        'external' => false,
    ],
    [
        'label' => 'Contact Us',
        'href' => base_url('HTML/Contact-Us.html'),
        'external' => false,
    ],
    [
        'label' => 'Official Facebook',
        'href' => $officialFacebook,
        'external' => true,
    ],
];

/* Main navigation menu and dropdown items. */
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
            ['label' => 'City Public Library', 'href' => base_url('HTML/Services.html#City-Public-Library')],
            ['label' => 'Assistance Programs', 'href' => base_url('HTML/Services.html#Assistance')],
            ['label' => "Citizen's Charter", 'href' => base_url('HTML/Services.html#Citizens-Charter')],
            ['label' => 'EBOSS', 'href' => base_url('HTML/Services.html#EBOSS')],
        ],
    ],
    [
        'label' => 'Tourism',
        'children' => [
            ['label' => 'History and Culture', 'href' => base_url('HTML/Tourism.html')],
            ['label' => 'Visiting Imus', 'href' => base_url('HTML/Tourism.html#Visiting-Imus')],
            ['label' => 'Heroes of Imus', 'href' => base_url('HTML/Tourism.html#Heroes-of-Imus')],
            ['label' => 'Notable Persons', 'href' => base_url('HTML/Tourism.html#Notable-Persons')],
        ],
    ],
    [
        'label' => 'Business',
        'href' => base_url('Pages/Business.php'),
    ],
    [
        'label' => 'Employees',
        'href' => base_url('HTML/Employees-Hub.html'),
    ],
];

/* Quick links shown in the hero section. */
$quickLinks = [
    [
        'title' => 'Downloadable Forms',
        'description' => 'Get official forms for permits, clearances, and city applications.',
        'href' => base_url('HTML/Downloadable-forms.html'),
    ],
    [
        'title' => 'Full Disclosures',
        'description' => 'Review city disclosures, reports, bids, and governance updates.',
        'href' => base_url('HTML/Full-disclosure.html'),
    ],
    [
        'title' => 'Contact Us',
        'description' => 'Reach the right office for concerns, requests, and public inquiries.',
        'href' => base_url('HTML/Contact-Us.html'),
    ],
    [
        'title' => 'City Services',
        'description' => 'Explore service desks, online support, and citizen resources.',
        'href' => base_url('HTML/Services.html'),
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

/* About Imus Contents here */


/* Footer: Site map links. */
$siteMapLinks = [
    ['label' => 'Full Disclosures', 'href' => base_url('HTML/Full-disclosure.html')],
    ['label' => 'Downloadable Forms', 'href' => base_url('HTML/Downloadable-forms.html')],
    ['label' => 'Contact Us', 'href' => base_url('HTML/Contact-Us.html')],
    ['label' => 'Latest News', 'href' => '#latest-news'],
    ['label' => 'Emergency Contacts', 'href' => '#emergency-contacts'],
];

/* Footer: Government reference links. */
$governmentLinks = [
    ['label' => 'Official Gazette', 'href' => 'https://www.officialgazette.gov.ph/'],
    ['label' => 'Government Directory', 'href' => 'https://www.gov.ph/the-government/directory-of-departments-and-agencies/'],
    ['label' => 'Official Calendar', 'href' => 'https://www.officialgazette.gov.ph/calendar/'],
    ['label' => 'Office of the President', 'href' => 'https://op-proper.gov.ph/'],
    ['label' => 'Senate of the Philippines', 'href' => 'http://www.senate.gov.ph/'],
    ['label' => 'House of Representatives', 'href' => 'https://www.congress.gov.ph/'],
];

// Include header and navbar
require_once __DIR__ . '/includes/header.navbar.php';
?>
    <!-- Hero section similar to home -->
    <section class="hero bg-imusBlue text-white py-12">
        <div class="container">
            <h1 class="text-center display-6 mb-3">About the City of Imus</h1>
            <p class="text-center mb-5">Discover the history, government, and community that make Imus the Flag Capital of the Philippines.</p>
            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-6">
                <?php foreach ($quickLinks as $quickLink): ?>
                    <a href="<?= e($quickLink['href']) ?>"
                        class="focusable group glass-card rounded-2xl p-4 transition hover:-translate-y-1 hover:border-imusBlue/20 hover:bg-white">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h3 class="font-display text-lg font-semibold text-civicInk"><?= e($quickLink['title']) ?></h3>
                                <p class="mt-2 text-sm text-slate-600"><?= e($quickLink['description']) ?></p>
                            </div>
                            <span class="mt-1 inline-flex h-8 w-8 items-center justify-center rounded-full bg-imusBlue/10 text-imusBlue transition group-hover:bg-imusBlue group-hover:text-white" aria-hidden="true">
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
    <!-- Content (City Profile)-->
      <section class="city-profile" id="City-Profile">
        <div class="container py-5">
          <h2 class="text-center mb-4" style="color: #00489a;"><strong>City Profile</strong></h2>
          <div class="row align-items-center g-4">
            <div class="col-lg-6 text-center">
              <img src="/IMG/Cathedral Aerial View.png" alt="Imus Cathedral Aerial View" class="img-fluid rounded shadow" style="max-width: 90%; border: 3px solid #fff;">
            </div>
            <div class="col-lg-6">
              <div class="bg-dark bg-opacity-75 rounded p-4 h-100 d-flex flex-column justify-content-center" style="min-height: 300px;">
                <h4 class="mb-3 fw-bold" style="letter-spacing:1px; color: #fff;">Flag Capital of the Philippines</h4>
                <p class="text-white mb-3">
                  Imus, officially the City of Imus, is a first-class component city in Cavite, Philippines. Renowned as the "Flag Capital of the Philippines," it played a pivotal role in the Philippine Revolution, serving as the site of historic battles for independence.
                </p>
                <p class="text-white mb-3">
                  Today, Imus is a thriving urban center that blends residential, commercial, and industrial growth. Iconic landmarks such as the Imus Cathedral, Heritage Park, and the Battle of Alapan Monument highlight its rich legacy, while vibrant festivals like the Wagayway Festival celebrate its culture.
                </p>
                <p class="text-white mb-0">
                  Strategically located near Metro Manila, Imus serves as a vital gateway to southern Luzon. The city continues to advance in business, education, and tourism, all while preserving its historical and cultural heritage.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Content (City Government)-->
      <section class="city-government" id="City-Government">
        <div class="container py-5">
          <h2 class="text-center mb-4" style="color: #00489a;"><strong>City Government</strong></h2>
            <div class="row g-4 justify-content-center">
            <!-- City Executives (improved responsive cards) -->
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <article class="card gov-card h-100 shadow-sm border-0" aria-labelledby="mayor-name" role="group">
              <div class="ratio ratio-4x3 overflow-hidden rounded-top">
                <img src="/IMG/officials-and-councilors/Mayor-AA.jpg" alt="Hon. Alex L. Advincula — City Mayor" class="card-img-top w-100 h-100" style="object-fit:contain;">
              </div>
              <div class="card-body d-flex flex-column">
                <h3 id="mayor-name" class="h5 mb-1 fw-bold" style="color: #00489a;">Hon. Alex L. Advincula</h3>
                <p class="mb-2 text-muted small official-role" aria-hidden="true">City Mayor</p>
                <p class="mb-3 small text-secondary flex-grow-1">Leads the city government and oversees executive functions to ensure the welfare and services for Imus residents.</p>
                <div class="d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm rounded-pill" href="#" aria-label="Mayor profile">Profile</a>
                <button class="btn btn-success btn-sm rounded-pill" type="button" aria-pressed="false">Contact Office</button>
                </div>
              </div>
              <style>
                .gov-card { border-radius: .75rem; overflow: hidden; }
                .gov-card .ratio { background-color: #18a54a; }
                .gov-card .card-body { padding: 1rem; background: #f8fbfd; }
                .gov-card .official-role { color: #6c757d; letter-spacing: .2px; }
                @media (max-width: 575.98px) {
                .gov-card .card-body { padding: .85rem; }
                }
              </style>
              </article>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <article class="card gov-card h-100 shadow-sm border-0" aria-labelledby="vice-mayor-name" role="group">
              <div class="ratio ratio-4x3 overflow-hidden rounded-top">
                <img src="/IMG/officials-and-councilors/VM-Saki.jpg" alt="Hon. Homer T. Saquilayan — City Vice Mayor" class="card-img-top w-100 h-100" style="object-fit: contain;">
              </div>
              <div class="card-body d-flex flex-column">
                <h3 id="vice-mayor-name" class="h5 mb-1 fw-bold" style="color: #00489a;">Hon. Homer T. Saquilayan</h3>
                <p class="mb-2 text-muted small official-role" aria-hidden="true">City Vice Mayor</p>
                <p class="mb-3 small text-secondary flex-grow-1">Presides over the Sangguniang Panlungsod and champions legislative initiatives that drive local development.</p>
                <div class="d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm rounded-pill" href="#" aria-label="Vice Mayor profile">Profile</a>
                <button class="btn btn-success btn-sm rounded-pill" type="button" aria-pressed="false">Office Contact</button>
                </div>
              </div>
              </article>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <article class="card gov-card h-100 shadow-sm border-0" aria-labelledby="congressman-name" role="group">
              <div class="ratio ratio-4x3 overflow-hidden rounded-top">
                <img src="/IMG/officials-and-councilors/Cong-AJ.jpg" alt="Hon. Adrian Jay C. Advincula — Congressman" class="card-img-top w-100 h-100" style="object-fit: contain;">
              </div>
              <div class="card-body d-flex flex-column">
                <h3 id="congressman-name" class="h5 mb-1 fw-bold" style="color: #00489a;">Hon. Adrian Jay C. Advincula</h3>
                <p class="mb-2 text-muted small official-role" aria-hidden="true">Congressman</p>
                <p class="mb-3 small text-secondary flex-grow-1">Represents Imus in the House of Representatives and advocates for legislation and national resources that benefit the city.</p>
                <div class="d-flex gap-2">
                <a class="btn btn-outline-primary btn-sm rounded-pill" href="#" aria-label="Congressman profile">Profile</a>
                <button class="btn btn-success btn-sm rounded-pill" type="button" aria-pressed="false">Legislative Office</button>
                </div>
              </div>
              </article>
            </div>
            </div>
          <!-- Board Members -->
          <h4 class="mt-2 mb-5" style="color: #00489a;">Board Members & SK Provincial Federation President</h4>
          <div id="boardMembersCards" class="row g-4 justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <div class="card h-100 border-10 shadow-sm board-member-card">
                <img src="/IMG/officials-and-councilors/BM-Lloyd.png" class="card-img-top board-member-img" alt="Hon. Lloyd Emman D. Jaro">
                <div class="card-body text-center">
                  <h6 class="card-title mb-1 fw-semibold text-primary">Hon. Lloyd Emman D. Jaro</h6>
                  <p class="card-text small">Represents Imus at the provincial board, supporting local and provincial policies.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <div class="card h-100 border-10 shadow-sm board-member-card">
                <img src="/IMG/officials-and-councilors/BM-Oni.png" class="card-img-top board-member-img" alt="Hon. Arnel M. Cantimbuhan">
                <div class="card-body text-center">
                  <h6 class="card-title mb-1 fw-semibold text-primary">Hon. Arnel M. Cantimbuhan</h6>
                  <p class="card-text small">Works with city and provincial officials to advance community interests.</p>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <div class="card h-100 border-10 shadow-sm board-member-card">
                <img src="/IMG/officials-and-councilors/SK-Pres-Chelsea.png" class="card-img-top board-member-img" alt="Hon. Chelsea Jillian Sarno">
                <div class="card-body text-center">
                  <h6 class="card-title mb-1 fw-semibold text-primary">Hon. Chelsea Jillian Sarno</h6>
                  <p class="card-text small">Leads the Sangguniang Kabataan Federation at the provincial level, advocating for youth issues and programs.</p>
                </div>
              </div>
            </div>
          </div>

          <style>
            /* Board members card grid */
            #boardMembersCards .board-member-card {
              border-radius: 1rem;
              overflow: hidden;
              transition: transform .12s ease, box-shadow .12s ease;
              min-height: 340px;
              background: #fff;
            }
            #boardMembersCards .board-member-card:hover {
              transform: translateY(-6px);
              box-shadow: 0 10px 30px rgba(5,55,116,0.12);
            }
            #boardMembersCards .board-member-img {
              width: 100%;
              height: 260px;
              object-fit: contain;
              background: #18a54a;
              padding: 1.25rem;
            }
            #boardMembersCards .card-body {
              padding: 1rem;
            }
            @media (max-width: 767.98px) {
              #boardMembersCards .board-member-img {
                height: 140px;
                padding: .75rem;
              }
              #boardMembersCards .board-member-card {
                min-height: auto;
              }
            }
          </style>
          <!-- Councilors -->
          <h4 class="mt-5 mb-3" style="color: #00489a;">City Councilors</h4>
            <div id="councilorsCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">
              <!-- Slide 1 -->
              <div class="carousel-item active">
              <div class="row justify-content-center g-4">
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                  <div class="councilor-img-wrapper bg-gradient">
                  <img src="/IMG/officials-and-councilors/Konsi-Shernan.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Shernan S. Jaro">
                  </div>
                  <div class="card-body text-center bg-white rounded-bottom-4">
                  <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Shernan S. Jaro</h6>
                  <p class="card-text small text-secondary councilor-role">City Councilor</p>
                  <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                  <p class="card-text small councilor-desc">Committee on Finance, Budget and Appropriations/ Committee on Ways and Means</p>
                  </div>
                </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3">
                <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                  <div class="councilor-img-wrapper bg-gradient">
                  <img src="/IMG/officials-and-councilors/Konsi-Dennis.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Dennis T. Lacson">
                  </div>
                  <div class="card-body text-center bg-white rounded-bottom-4">
                  <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Dennis T. Lacson</h6>
                  <p class="card-text small text-secondary councilor-role">City Councilor</p>
                  <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                  <p class="card-text small councilor-desc">Committee on Land Utilization, Zoning, and Housing/ Human Settlements</p>
                  </div>
                </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                  <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Wency.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Peter Emmanuel C. Lara">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Peter Emmanuel C. Lara</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Ordinances, Rules, Privileges, and Legal Matters</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Sherwin.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Sherwin L. Comia">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Sherwin L. Comia</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Public Works and Infrastructures, Special Projects</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 2 -->
              <div class="carousel-item">
                <div class="row justify-content-center g-4">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Yen.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Lloren Dionella G. Saquilayan">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Lloren Dionella G. Saquilayan</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Social Services, Family, Women, and Children</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Larry.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Larry Boy S. Nato">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Larry Boy S. Nato</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Games and Amusement/ Franchise/ Transportations and Communications/ Information and Communication Technology</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Darwin.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Darwin Marti M. Remulla">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Darwin Marti M. Remulla</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Agriculture and Agrarian Reforms/ Environment Protection and Ecology/ Market and Slaughterhouses</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Enzo.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Enzo Gaston A. Asistio">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Enzo Gaston A. Asistio</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Health, Nutrition, Population, and Sanitation;</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 3 -->
              <div class="carousel-item">
                <div class="row justify-content-center g-4">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Jelyn.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Jogie Lyn L. Maliksi">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Jogie Lyn L. Maliksi</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Tourism and Culture</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Mark.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Mark Anthony P. Villanueva">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Mark Anthony P. Villanueva</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Trade, Commerce, and Industry/ Labor and Employment and Industrial Peace</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-David.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. David Sapitan Jr.">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. David Sapitan Jr.</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Cooperatives/ People's Organization Accreditation Livelihood/ Elderly</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 d-none d-lg-block">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Igi.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Gregorio Miguel B. Ocampo Jr.">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Gregorio Miguel B. Ocampo Jr.</h6>
                        <p class="card-text small text-secondary councilor-role">City Councilor</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Education</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Slide 4 -->
              <div class="carousel-item">
                <div class="row justify-content-center g-4">
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-Capt-RR.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Reymundo G. Ramirez">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Reymundo G. Ramirez</h6>
                        <p class="card-text small text-secondary councilor-role">LNB President</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Peace and Order, Public Welfare and Safety and Fire Protection/ Human Rights/ Barangay Affairs</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card councilor-card h-100 border-0 shadow-lg position-relative overflow-hidden">
                      <div class="councilor-img-wrapper bg-gradient">
                        <img src="/IMG/officials-and-councilors/Konsi-SK-Glian.png" class="card-img-top rounded-circle mx-auto d-block" alt="Hon. Glian Piolo P. Ilagan">
                      </div>
                      <div class="card-body text-center bg-white rounded-bottom-4">
                        <h6 class="card-title mb-1 fw-bold text-primary councilor-name">Hon. Glian Piolo P. Ilagan</h6>
                        <p class="card-text small text-secondary councilor-role">SK Federation President</p>
                        <hr class="my-2" style="width: 40px; margin: 0 auto; border-top: 2px solid #18a54a;">
                        <p class="card-text small councilor-desc">Committee on Sports and Youth Development</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#councilorsCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#councilorsCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <style>
          .councilor-card {
            background: #18a54a;
            border-radius: 1.25rem;
            transition: transform 0.16s, box-shadow 0.16s;
            min-height: 390px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.1);
          }
          .councilor-img-wrapper {
            background: linear-gradient(120deg, #18a54a 0%, #053774 100%);
            padding: 2rem 0 1.2rem 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 180px;
          }
          .councilor-card .card-img-top {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border: 6px solid #fff;
            box-shadow: 0 2px 12px rgba(5,55,116,0.13);
            background: #e9ecef;
            margin-bottom: 0.5rem;
            transition: transform 0.18s;
          }
          .councilor-card:hover .card-img-top {
            transform: scale(1.10);
          }
          .councilor-card .card-body {
            padding: 1.3rem 1.1rem 1.1rem 1.1rem;
            border-radius: 0 0 1.25rem 1.25rem;
            min-height: 200px;
          }
          .councilor-name {
            font-size: 1.13rem;
            letter-spacing: 0.5px;
          }
          .councilor-role {
            font-size: 0.98rem;
            color: #18a54a !important;
            margin-bottom: 0.2rem;
          }
          .councilor-desc {
            font-size: 1rem;
            color: #444;
            margin-top: 0.5rem;
          }
          @media (max-width: 991.98px) {
            .councilor-card {
              min-height: 350px;
            }
            .councilor-card .card-img-top {
              width: 120px;
              height: 120px;
            }
            .councilor-img-wrapper {
              min-height: 120px;
              padding: 1.2rem 0 0.8rem 0;
            }
            .councilor-card .card-body {
              padding: 1rem 0.7rem 0.9rem 0.7rem;
              min-height: 150px;
            }
            /* Show only 2 cards per slide on tablet */
            #councilorsCarousel .carousel-item .col-lg-3.d-none.d-lg-block {
              display: none !important;
            }
          }
          @media (max-width: 767.98px) {
            .councilor-card {
              min-height: 0;
            }
            .councilor-card .card-img-top {
              width: 90px;
              height: 90px;
            }
            .councilor-img-wrapper {
              min-height: 80px;
              padding: 0.7rem 0 0.5rem 0;
            }
            .councilor-card .card-body {
              padding: 0.8rem 0.5rem 0.7rem 0.5rem;
            }
            .councilor-name {
              font-size: 1rem;
            }
            .councilor-desc {
              font-size: 0.93rem;
            }
            /* Show only 1 card per slide on mobile */
            #councilorsCarousel .carousel-item .col-lg-3,
            #councilorsCarousel .carousel-item .col-sm-6:not(:first-child) {
              display: none !important;
            }
            #councilorsCarousel .carousel-item .col-12 {
              display: block !important;
              width: 100%;
            }
          }
          </style>
          <script>
          document.addEventListener('DOMContentLoaded', function () {
            // Make carousel infinite (wrap-around)
            var carousel = document.getElementById('councilorsCarousel');
            if (carousel) {
              carousel.addEventListener('slide.bs.carousel', function (e) {
                var items = carousel.querySelectorAll('.carousel-item');
                var activeIndex = Array.from(items).indexOf(carousel.querySelector('.carousel-item.active'));
                if (e.direction === 'left' && activeIndex === items.length - 1) {
                  setTimeout(function () {
                    items[0].classList.add('active');
                    items[items.length - 1].classList.remove('active');
                  }, 600);
                }
                if (e.direction === 'right' && activeIndex === 0) {
                  setTimeout(function () {
                    items[items.length - 1].classList.add('active');
                    items[0].classList.remove('active');
                  }, 600);
                }
              });
            }
          });
          </script>
      </section>
      <!--Content (Barangay Officials)-->
      <section class="barangay-officials" id="Brgy-Officials">
        <div class="container py-5">
          <h2 class="text-center mb-4" style="color: #00489a;"><strong>Barangay Officials</strong></h2>
          <div class="row justify-content-center mb-3">
            <div class="col-12 col-md-8 col-lg-6">
              <input type="text" id="barangayFilterInput" class="form-control form-control-lg rounded-pill shadow-sm" placeholder="🔍 Search barangay or official...">
            </div>
          </div>
          <div class="table-responsive-lg">
            <table class="table table-hover align-middle bg-white rounded-4 overflow-hidden shadow-sm" style="border-radius: 1.25rem;">
              <thead class="table-primary sticky-top" style="z-index: 2;">
                <tr>
                  <th class="text-start" style="width: 32%; font-size: 1.08rem;">Barangay</th>
                  <th class="text-start" style="width: 38%; font-size: 1.08rem;">Barangay Captain</th>
                  <th class="text-center" style="width: 18%; font-size: 1.08rem;">Cluster</th>
                </tr>
              </thead>
              <tbody id="barangayTableBody">
                <!-- CLUSTER 1 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 1
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Alapan I-A</td>
                  <td class="text-start">Aman, Jeffrey Primero</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Alapan I-B</td>
                  <td class="text-start">Santos, Rico David</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Alapan I-C</td>
                  <td class="text-start">Marcial, Noriel Santiaguel</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Alapan II-A</td>
                  <td class="text-start">Barzaga, Marc Albert Didal</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Alapan II-B</td>
                  <td class="text-start">Camia, Benedicto Dayrit</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Bucandala I</td>
                  <td class="text-start">Santiaguel, Ferdinand Apolinar</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Bucandala II</td>
                  <td class="text-start">Vilbar, Mark Jefferson Legaspi</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Bucandala III</td>
                  <td class="text-start">Sarreal, Amado Saria</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Bucandala IV</td>
                  <td class="text-start">Bacos, Gary Olaes</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <tr>
                  <td class="text-start">Bucandala V</td>
                  <td class="text-start">Saliba, Reynaldo Obispo</td>
                  <td class="text-center">Cluster 1</td>
                </tr>
                <!-- CLUSTER 2 -->
                <tr class="table-light cluster-row"></tr>
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 2
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Carsadang Bago I</td>
                  <td class="text-start">Cubillo, Laila Papa</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Carsadang Bago II</td>
                  <td class="text-start">Candalla, Eliseo Jarin</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Pag-Asa I</td>
                  <td class="text-start">Galang, Rolito Jarin</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Pag-Asa II</td>
                  <td class="text-start">Medina, Ernesto Jarin</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Pag-Asa III</td>
                  <td class="text-start">Dagumboy, Joemar Felix</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion I-A</td>
                  <td class="text-start">Camat, Leomar Viña</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion I-B</td>
                  <td class="text-start">Condalor, Ferdinand Dayson</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion I-C</td>
                  <td class="text-start">Dominguez, Roberto Toledo</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion I-D</td>
                  <td class="text-start">Igtiben, Mark Luigi Monreal</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-A</td>
                  <td class="text-start">Jarin, Alexander Monzon</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-B</td>
                  <td class="text-start">Monzon, Eduardo Frias</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-C</td>
                  <td class="text-start">Bella, Riciel Barzaga</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-D</td>
                  <td class="text-start">Nas, Rommel Cairme</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-E</td>
                  <td class="text-start">Monzon, Lamberto Episioco</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <tr>
                  <td class="text-start">Medicion II-F</td>
                  <td class="text-start">Octavo, Eugenio Risco</td>
                  <td class="text-center">Cluster 2</td>
                </tr>
                <!-- CLUSTER 3 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 3
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-A</td>
                  <td class="text-start">Saratan, Jan Wilmher Cuenca</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-B</td>
                  <td class="text-start">Minaldo, Rafael Ochoa</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-C</td>
                  <td class="text-start">Ramos, Romeo Ignacio</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-D</td>
                  <td class="text-start">Advincula, Jordan Roxas</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-E</td>
                  <td class="text-start">Cammungol, Antonio Barco</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-F</td>
                  <td class="text-start">Sarte, Rocky Marciano</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu I-G</td>
                  <td class="text-start">Silla, Robinson Papa</td>
                  <td class="text-center">Cluster 3</td>
                </tr>
                <!-- CLUSTER 4 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 4
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-A</td>
                  <td class="text-start">Atanacio, James Bryan Remulla</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-B</td>
                  <td class="text-start">Diato, Christian Rementilla</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-C</td>
                  <td class="text-start">Sarte, Joey Bernardo</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-D</td>
                  <td class="text-start">Lares, Geraldo Calitis</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-E</td>
                  <td class="text-start">Paredes, Lorenzo Genido</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <tr>
                  <td class="text-start">Anabu II-F</td>
                  <td class="text-start">Parreñas, Bernadette Gaborro</td>
                  <td class="text-center">Cluster 4</td>
                </tr>
                <!-- CLUSTER 5 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 5
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma I</td>
                  <td class="text-start">Canaynay, Melquiades Tala Tala</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma II</td>
                  <td class="text-start">Bautista, Reuben Jesse Magsaysay</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma III</td>
                  <td class="text-start">Borromeo, Reynaldo Pastor</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma IV</td>
                  <td class="text-start">Aquilino, Natividad Chua</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma V</td>
                  <td class="text-start">Reyes, Edgardo Dela Cruz</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma VI</td>
                  <td class="text-start">Salvador, Kent Lewis Cani</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma VII</td>
                  <td class="text-start">Camia, Zosimo Jr. Cruz</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma VIII</td>
                  <td class="text-start">Esguerra, Efren Jr. Bautista</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <tr>
                  <td class="text-start">Bayan Luma IX</td>
                  <td class="text-start">Tined, Ruben Jr. De Guzman</td>
                  <td class="text-center">Cluster 5</td>
                </tr>
                <!-- CLUSTER 6 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 6
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Bagong Silang</td>
                  <td class="text-start">Cariño, Carlito Dumalanta</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Magdalo</td>
                  <td class="text-start">Jardin, Kaizer Lozada</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Maharlika</td>
                  <td class="text-start">Hynson, Gina Delos Reyes</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Mariano Espeleta I</td>
                  <td class="text-start">Cruz, Alnair Macahilig</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Mariano Espeleta II</td>
                  <td class="text-start">Punzalan, Nelson Jr. Dagum</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Mariano Espeleta III</td>
                  <td class="text-start">Nato, Silvestre Campaña</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Pinagbuklod</td>
                  <td class="text-start">Ocampo, Ricardo Salvador</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Pasong Buaya I</td>
                  <td class="text-start">Ramos, Wilfredo Esguerra</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <tr>
                  <td class="text-start">Pasong Buaya II</td>
                  <td class="text-start">Tagle, Carlito Camantigue</td>
                  <td class="text-center">Cluster 6</td>
                </tr>
                <!-- CLUSTER 7 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 7
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Buhay na Tubig</td>
                  <td class="text-start">Ramirez, Reymundo De Guzman</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Palico I</td>
                  <td class="text-start">Olives, Nicanor Zaragosa</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Palico II</td>
                  <td class="text-start">Sapanghila, Ryan Jay Gayamo</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Palico III</td>
                  <td class="text-start">Dominguez, Luisito Zapanta</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Palico IV</td>
                  <td class="text-start">Dominguez, Marlo Espiritu</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma I</td>
                  <td class="text-start">Dones, Reynante Dominguez</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma II</td>
                  <td class="text-start">Lacson, Carlo Rey Perez</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma III</td>
                  <td class="text-start">Manela, Marty Landas</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma IV</td>
                  <td class="text-start">Cinto, Jhun Gaña</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma V</td>
                  <td class="text-start">Acuña, Bienvenido Camaclang</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <tr>
                  <td class="text-start">Tanzang Luma VI</td>
                  <td class="text-start">Crisologo, Redentor Magsakay</td>
                  <td class="text-center">Cluster 7</td>
                </tr>
                <!-- CLUSTER 8 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 8
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion I-A</td>
                  <td class="text-start">Tacus, Gregorio Escobido</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion I-B</td>
                  <td class="text-start">Dominguez, Kristel Joy De Leon</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion I-C</td>
                  <td class="text-start">Constantino, Hilario Sapin</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion II-A</td>
                  <td class="text-start">Sauler, Gary Dela Cruz</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion II-B</td>
                  <td class="text-start">Ravelo, Ferdinand Tambio</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion III-A</td>
                  <td class="text-start">Maluto, Carlos Serviano</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion III-B</td>
                  <td class="text-start">Ramirez, Elmer Diones</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion IV-A</td>
                  <td class="text-start">Figueras, Perpetua Fernandez</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion IV-B</td>
                  <td class="text-start">Caimol, John Orly Gonzaga</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion IV-C</td>
                  <td class="text-start">Kamantigue, Imelda Gacos</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Poblacion IV-D</td>
                  <td class="text-start">Virata, Michael Samonte</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Toclong I-A</td>
                  <td class="text-start">Sañez, Oktubre Camandang</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Toclong I-B</td>
                  <td class="text-start">Badion, Nerrie Salem</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Toclong I-C</td>
                  <td class="text-start">Santos, Joey Remulla</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Toclong II-A</td>
                  <td class="text-start">Sañez, Abraham Jr. Santos</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <tr>
                  <td class="text-start">Toclong II-B</td>
                  <td class="text-start">Remulla, Joseph Regalado</td>
                  <td class="text-center">Cluster 8</td>
                </tr>
                <!-- CLUSTER 9 -->
                <tr class="table-light cluster-row">
                  <td colspan="3" class="text-primary fw-bold text-uppercase py-2 ps-3" style="background: #eaf4fb; letter-spacing: 1px;">
                    <i class="bi bi-diagram-3 me-2"></i>Cluster 9
                  </td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-A</td>
                  <td class="text-start">Parnala, Pedro Manimbao</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-B</td>
                  <td class="text-start">Reyes, Mario Jr. Palajos</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-C</td>
                  <td class="text-start">Saulog, Gerardo Sanchez</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-D</td>
                  <td class="text-start">Tapawan, Manuel Saquilayan</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-E</td>
                  <td class="text-start">Sayaman, Josefino Macalawa</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-F</td>
                  <td class="text-start">Lara, Randy Sapinoso</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang I-G</td>
                  <td class="text-start">Valerio, Mark Oliver Jarin</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-A</td>
                  <td class="text-start">Progoso, Aldrin Olivarez</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-B</td>
                  <td class="text-start">Andallon, Lenie Herrera</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-C</td>
                  <td class="text-start">Herrera, Danilo Magsino</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-D</td>
                  <td class="text-start">Servida, Alexander Vasquez</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-E</td>
                  <td class="text-start">Topacio, Jose Zanido Camarce</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-F</td>
                  <td class="text-start">Fauni, Edward Dayuta</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
                <tr>
                  <td class="text-start">Malagasang II-G</td>
                  <td class="text-start">Fauni, Armando Saquilayan</td>
                  <td class="text-center">Cluster 9</td>
                </tr>
              </tbody>
            </table>
          </div>
          <style>
            #barangayTableBody tr td,
            #barangayTableBody tr th {
              vertical-align: middle;
              font-size: 1.04rem;
              padding-top: 0.55rem;
              padding-bottom: 0.55rem;
            }
            .cluster-row td {
              font-size: 1.02rem;
              background: #eaf4fb !important;
              border-top: 2px solid #000;
              border-bottom: 1px solid #000;
              color: #053774 !important;
              letter-spacing: 1px;
            }
            .table thead th {
              background-color: #00489a !important;
              color: #fff !important;
              border: none;
              font-weight: 700;
              letter-spacing: 0.5px;
              text-shadow: 1px 1px 2px #0002;
            }
            .table tbody tr:hover:not(.cluster-row) {
              background: #f3f8f3 !important;
              transition: background 0.15s;
            }
            @media (max-width: 767.98px) {
              .table-responsive-lg {
                border-radius: 0.7rem;
              }
              .table thead th {
                font-size: 0.98rem;
                padding: 0.6rem 0.3rem;
              }
              #barangayTableBody tr td {
                font-size: 0.97rem;
                padding: 0.45rem 0.3rem;
              }
              .cluster-row td {
                font-size: 0.95rem;
                padding: 0.4rem 0.3rem;
              }
            }
          </style>
          <script>
            document.getElementById('barangayFilterInput').addEventListener('keyup', function () {
              const filter = this.value.toLowerCase();
              const rows = document.querySelectorAll('#barangayTableBody tr');
              let currentClusterRow = null;
              rows.forEach(row => {
                if (row.classList.contains('cluster-row')) {
                  row.style.display = '';
                  currentClusterRow = row;
                  row.setAttribute('data-has-visible', 'false');
                } else {
                  const cells = row.querySelectorAll('td');
                  const match = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(filter));
                  row.style.display = match ? '' : 'none';
                  if (match && currentClusterRow) {
                    currentClusterRow.setAttribute('data-has-visible', 'true');
                  }
                }
              });
              // Hide cluster headers if none of their rows are visible
              rows.forEach(row => {
                if (row.classList.contains('cluster-row')) {
                  if (row.getAttribute('data-has-visible') === 'true') {
                    row.style.display = '';
                  } else {
                    row.style.display = 'none';
                  }
                  row.setAttribute('data-has-visible', 'false');
                }
              });
            });
          </script>
        </div>
      </section>
      <!--Content (History)-->
      <section class="history" id="History">
        <div class="container py-5">
          <h2 class="text-center mb-5 fw-bold" style="color: #00489a;">
            <i class="bi bi-clock-history me-2"></i>History of Imus
          </h2>
          <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="bg-dark bg-opacity-75 rounded-4 p-4 shadow-lg h-100">
                <h4 class="text-white fw-bold mb-3" style="letter-spacing:1px;">Origins and Early Years</h4>
                <p class="text-white mb-2">
                  Imus began as a "visita" of Cavite Viejo (now Kawit), administered by Jesuits until 1686, then by the Recollects. The Recollects guided Imus toward independence from Cavite Viejo's ecclesiastical and civil authority.
                </p>
                <p class="text-white mb-0">
                  The Royal Order of October 30, 1776, initiated Imus' separation, culminating in its establishment as an independent municipality in 1795. The Recollects were instrumental in both religious and political emancipation.
                </p>
              </div>
            </div>
            <div class="col-lg-6 text-center">
              <img src="/IMG/Church.png" alt="Imus Church" class="img-fluid rounded-4 shadow-lg border border-3 border-white" style="max-width: 85%;">
            </div>
          </div>
          <div class="row align-items-center flex-lg-row-reverse mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
              <div class="bg-dark bg-opacity-75 rounded-4 p-4 shadow-lg h-100">
                <h4 class="text-white fw-bold mb-3" style="letter-spacing:1px;">Growth and Modernization</h4>
                <p class="text-white mb-2">
                  The Imus Municipal Building opened in 1935 at the town center, with a new building inaugurated in 2003 to accommodate the city's growth.
                </p>
                <p class="text-white mb-0">
                  In 2009, Republic Act 9727 established Imus as Cavite's "Third District." Cityhood followed with Republic Act 10161, ratified by plebiscite in 2012. The City Government Center, a 30,595-square-meter facility, was inaugurated in 2022, marking a new era in local governance.
                </p>
              </div>
            </div>
            <div class="col-lg-6 text-center">
              <img src="/IMG/Licerio.png" alt="Licerio" class="img-fluid rounded-4 shadow-lg border border-3 border-white" style="max-width: 65%;">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="bg-dark bg-opacity-75 rounded-4 p-4 shadow-lg">
                <h4 class="text-white fw-bold mb-3" style="letter-spacing:1px;">Imus Today</h4>
                <p class="text-white mb-2">
                  Imus is now a first-class city celebrated for its rich history, vibrant culture, and rapid development. Landmarks such as the Imus Cathedral, Heritage Park, and Battle of Alapan Monument, along with the annual Wagayway Festival, highlight its enduring legacy and dynamic community.
                </p>
              </div>
            </div>
          </div>
        </div>
        <style>
          .history .bg-dark.bg-opacity-75 {
            background: linear-gradient(120deg, #053774 80%, #18a54a 100%) !important;
            color: #fff;
          }
          .history h4 {
            text-shadow: 1px 1px 4px #000;
          }
          .history img {
            transition: transform 0.18s, box-shadow 0.18s;
          }
          .history img:hover {
            transform: scale(1.04) rotate(-1deg);
            box-shadow: 0 8px 32px rgba(5,55,116,0.18);
            z-index: 2;
          }
          @media (max-width: 991.98px) {
            .history .rounded-4 {
              border-radius: 1rem !important;
            }
            .history img {
              max-width: 90% !important;
            }
          }
          @media (max-width: 767.98px) {
            .history h2 {
              font-size: 2rem;
            }
            .history h4 {
              font-size: 1.2rem;
            }
            .history img {
              max-width: 100% !important;
            }
          }
        </style>
      </section>
      <!--Content (Past Mayors)-->
      <section class="past-mayors" id="Past-Mayors">
        <div class="container py-5">
          <h2 class="text-center mb-4" style="color: #00489a;"><strong>Past Mayors</strong></h2>
          <input type="text" id="pastMayorsFilter" class="form-control mb-4 rounded-pill shadow-sm" placeholder="🔍 Search for past mayors...">
          <div class="table-responsive" style="max-height: 500px; overflow-y: auto;">
            <table class="table table-hover table-bordered align-middle text-center rounded-4 overflow-hidden shadow-sm" style="border-radius: 1.25rem;">
              <thead class="table-primary sticky-top" style="z-index: 2;">
                <tr>
                  <th style="width: 36%; font-size: 1.08rem;">Name</th>
                  <th style="width: 28%; font-size: 1.08rem;">Status</th>
                  <th style="width: 36%; font-size: 1.08rem;">Term</th>
                </tr>
              </thead>
              <tbody id="pastMayorsTableBody">
                <tr><td>Alex L. Advincula</td><td>Elected</td><td>July 2022 - Present</td></tr>
                <tr><td>Emmanuel L. Maliksi</td><td>Elected</td><td>Jan 2012 - 2022</td></tr>
                <tr><td>Homer T. Saquilayan</td><td>Elected</td><td>July 2010 - Dec 2011</td></tr>
                <tr><td>Emmanuel L. Maliksi</td><td>Elected</td><td>July 2007 - June 2010</td></tr>
                <tr><td>Oscar A. Jaro</td><td>Elected</td><td>April - June 2007</td></tr>
                <tr><td>Homer T. Saquilayan</td><td>Elected</td><td>July 2001 - March 2007</td></tr>
                <tr><td>Oscar A. Jaro</td><td>Elected</td><td>July 1998 - June 2001</td></tr>
                <tr><td>Ricardo Paredes</td><td>Appointed</td><td>April - June 1998</td></tr>
                <tr><td>Erineo S. Maliksi</td><td>Elected</td><td>Feb 1988 - Mar 1988</td></tr>
                <tr><td>Wilfredo Garde</td><td>OIC</td><td>Oct 1986 - Feb 1988</td></tr>
                <tr><td>Atty. Damian Villaseca</td><td>OIC</td><td>May 1986 - Oct 1986</td></tr>
                <tr><td>Jose Jamir</td><td>Elected</td><td>1968 - May 15, 1986</td></tr>
                <tr><td></td><td></td><td>Feb 1 - April 10, 1971</td></tr>
                <tr><td></td><td></td><td>Sept 1 - 30, 1969</td></tr>
                <tr><td></td><td></td><td>Sept 15 - Oct 15, 1968</td></tr>
                <tr><td>Mariano Reyes</td><td>Acting</td><td>Mar 15 - Apr 1968</td></tr>
                <tr><td>Atty. Manuel Paredes</td><td>Acting</td><td>Sept 15 - Dec 31, 1967</td></tr>
                <tr><td>Dominador Camerino</td><td>Elected</td><td>Jan 1946 - Sept 1967</td></tr>
                <tr><td>Rodrigo Camia</td><td>Acting</td><td>Jan 8 - Feb 28, 1960</td></tr>
                <tr><td></td><td>Elected</td><td>Nov 1947 - 1963</td></tr>
                <tr><td>Dominador Ilano</td><td>Appointed</td><td>June 1946 - 1947</td></tr>
                <tr><td>Epifanio Gabriel</td><td>Appointed</td><td>Mar 1946 - June 1946</td></tr>
                <tr><td>Dominador Ilano</td><td>Appointed</td><td>Nov 1945 - Feb 1946</td></tr>
                <tr><td>Fortunato Remulla</td><td>Appointed</td><td>Mar 1945 - Oct 1945</td></tr>
                <tr><td>Dr. Alfredo Saqui</td><td>Appointed</td><td>Dec 1944 - Feb 1945</td></tr>
                <tr><td>Dr. Elpidio Osteria</td><td>Elected</td><td>1940 - 1944</td></tr>
                <tr><td>Dominador Camerino</td><td>Elected</td><td>1931 - 1940</td></tr>
                <tr><td>Epifanio Gabriel</td><td>Elected</td><td>1928 - 1931</td></tr>
                <tr><td>Blas Mallari</td><td>Elected</td><td>1925 - 1928</td></tr>
                <tr><td>Felipe Topacio</td><td>Elected</td><td>1912 - 1915</td></tr>
                <tr><td>Maximo Abad</td><td>Elected</td><td>1910 - 1912</td></tr>
                <tr><td></td><td>Elected</td><td>Nov 1905 - 1910</td></tr>
                <tr><td>Felipe Topacio</td><td>Appointed</td><td>June - 05</td></tr>
                <tr><td>Pantaleon Garcia</td><td>Appointed</td><td>1904 - 1905</td></tr>
                <tr><td>Pedro Buenaventura</td><td>Appointed</td><td>Sept - Dec 1903</td></tr>
                <tr><td>Licerio Topacio</td><td>Appointed</td><td>1903</td></tr>
                <tr><td>Juan Fajardo</td><td>Appointed</td><td>Jan - April 1903</td></tr>
                <tr><td>Donato Virata</td><td>Appointed</td><td>1900</td></tr>
                <tr><td>Juan Castañeda</td><td>Appointed</td><td>1899</td></tr>
                <tr><td>Valentin Conejo</td><td>Appointed</td><td>1898</td></tr>
                <tr><td>Jose Tagle</td><td>Appointed</td><td>1896 - 1898</td></tr>
                <tr><td>Bernardino Paredes</td><td>Appointed</td><td>1894 - 1896</td></tr>
                <tr><td>Angel Buenaventura Paredes</td><td>Appointed</td><td>1892 - 1894</td></tr>
                <tr><td>Cayetano Topacio</td><td>Appointed</td><td>1890 - 1892</td></tr>
                <tr><td>Licerio Topacio</td><td>Appointed</td><td>1888 - 1890</td></tr>
              </tbody>
            </table>
          </div>
          <style>
            #pastMayorsTableBody tr td,
            #pastMayorsTableBody tr th {
              vertical-align: middle;
              font-size: 1.04rem;
              padding-top: 0.55rem;
              padding-bottom: 0.55rem;
            }
            .table thead th {
              background: linear-gradient(90deg, #18a54a 0%, #00489a 100%) !important;
              color: #fff !important;
              border: none;
              font-weight: 700;
              letter-spacing: 0.5px;
              text-shadow: 1px 1px 2px #0002;
            }
            .table tbody tr:hover {
              background: #f3f8f3 !important;
              transition: background 0.15s;
            }
            @media (max-width: 767.98px) {
              .table-responsive {
                border-radius: 0.7rem;
              }
              .table thead th {
                font-size: 0.98rem;
                padding: 0.6rem 0.3rem;
              }
              #pastMayorsTableBody tr td {
                font-size: 0.97rem;
                padding: 0.45rem 0.3rem;
              }
            }
          </style>
          <script>
            document.getElementById('pastMayorsFilter').addEventListener('keyup', function () {
              const filter = this.value.toLowerCase();
              const rows = document.querySelectorAll('#pastMayorsTableBody tr');
              rows.forEach(row => {
                const cells = row.querySelectorAll('td');
                const match = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(filter));
                row.style.display = match ? '' : 'none';
              });
            });
          </script>
        </div>
      </section>
      <!--Content (Departments and Units)-->
      <section class="deptandunits" id="Dept-and-Units">
        <div class="container py-5">
          <h2 class="text-center mb-4" style="color: #00489a;"><strong>Departments and Units</strong></h2>
          <input type="text" id="departmentsFilterInput" class="form-control mb-3" placeholder="Search for departments or units...">
          <div style="height: 400px; overflow-y: auto;">
            <table class="table table-bordered table-striped table-hover align-middle text-center">
              <thead class="table-dark" style="position: sticky; top: 0;">
                <tr>
                  <th style="width: 30%;">Department/Unit</th>
                  <th style="width: 40%;">Department Head</th>
                  <th style="width: 20%;">Floor</th>
                  <th style="width: 10%;">Local</th>
                </tr>
              </thead>
              <tbody id="departmentsTableBody">
                <!-- LOWER GROUND AND GROUND FLOOR -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>Lower Ground and Ground Floor</strong></td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - City of Imus Public Library</td>
                  <td>Ms. Rosena V. Roman</td>
                  <td>Lower Ground Floor</td>
                  <td>001</td>
                </tr>
                <tr>
                  <td>Office of the City Assessor</td>
                  <td>Mr. Elmer Camerino</td>
                  <td>Ground Floor</td>
                  <td>106</td>
                </tr>
                <tr>
                  <td>Office of the Local Economic Development and Investment Promotions Officer</td>
                  <td>Ms. Marie Jenneth Vilbar-Lungcay</td>
                  <td>Ground Floor</td>
                  <td>142</td>
                </tr>
                <tr>
                  <td>Office of the City Treasurer</td>
                  <td>Mr. Manuel Reynold W. Dela Fuente</td>
                  <td>Ground Floor</td>
                  <td>131</td>
                </tr>
                <tr>
                  <td>Office of the Business Permits and Licensing Officer</td>
                  <td>Ms. Jasmin C. Ramos</td>
                  <td>Ground Floor</td>
                  <td>101</td>
                </tr>
                <tr>
                  <td>Office of the Civil Registrar</td>
                  <td>Mr. Randy B. Gonzales</td>
                  <td>Ground Floor</td>
                  <td>121</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Office of the Senior Citizens Affairs </td>
                  <td>Mr. Arturo B. Pangilinan</td>
                  <td>Ground Floor</td>
                  <td>136</td>
                </tr>
                <tr>
                  <td>Office of the Persons with Disability Affairs Officer</td>
                  <td>Ms. Josephine G. Villanueva</td>
                  <td>Ground Floor</td>
                  <td>138</td>
                </tr>
                <tr>
                  <td>Local Housing Board	</td>
                  <td>Mr. Jose Froilan G. Abad</td>
                  <td>Ground Floor</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Social Welfare and Development Officer</td>
                  <td>Ms. Josephine G. Villanueva, RSW</td>
                  <td>Ground Floor</td>
                  <td>126</td>
                </tr>
                <!-- 2ND FLOOR -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>2nd Floor</strong></td>
                </tr>
                <tr>
                  <td>Office of the Building Official</td>
                  <td>Engr. Alvin S. Saitanan</td>
                  <td>2nd Floor</td>
                  <td>231</td>
                </tr>
                <tr>
                  <td>Office of the City Planning and Development Officer</td>
                  <td>Engr. Guiana F. Monzon</td>
                  <td>2nd Floor</td>
                  <td>221</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Public Employment Service Office</td>
                  <td>Ms. Clarita T. Casing</td>
                  <td>2nd Floor</td>
                  <td>241</td>
                </tr>
                <tr>
                  <td>Office of the City Information Officer</td>
                  <td>Mr. Ervin Ace H. Navarette</td>
                  <td>2nd Floor</td>
                  <td>213</td>
                </tr>
                <tr>
                  <td>Office of the City Tourism and Heritage Officer</td>
                  <td>Dr. Emanuel R. Paredes</td>
                  <td>2nd Floor</td>
                  <td>225</td>
                </tr>
                <tr>
                  <td>Office of the City Disaster Risk Reduction and Management Officer</td>
                  <td>Ms. Marisel R. Cayetano</td>
                  <td>2nd Floor</td>
                  <td>206</td>
                </tr>
                <tr>
                  <td>Office of the City Health Officer - City Sanitation Unit</td>
                  <td>Dr. Ferdinand P. Mina</td>
                  <td>2nd Floor</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Veterinarian</td>
                  <td>Dr. Maribel Depayso-Reyes</td>
                  <td>2nd Floor</td>
                  <td>227</td>
                </tr>
                <tr>
                  <td>Office of the City Cooperatives Development Officer</td>
                  <td>Mr. Generoso F. Ramos, Jr.</td>
                  <td>2nd Floor</td>
                  <td>215</td>
                </tr>
                <tr>
                  <td>Office of the City Population Officer</td>
                  <td>Ms. Maria Theresa C. Sañez</td>
                  <td>2nd Floor</td>
                  <td>236</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Tricycle Regulatory Unit</td>
                  <td>Mr. Nestor C. Sauquillo</td>
                  <td>2nd Floor</td>
                  <td>243</td>
                </tr>
                <tr>
                  <td>Office of the City Agriculturist</td>
                  <td>Mr. Robert R. Marges</td>
                  <td>2nd Floor</td>
                  <td>201</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - City of Imus Traffic Management Unit</td>
                  <td>Mr. Rizaldy T. Nato</td>
                  <td>2nd Floor</td>
                  <td>219</td>
                </tr>
                <tr>
                  <td>Office of the City Health Officer</td>
                  <td>Dr. Ferdinand P. Mina	</td>
                  <td>2nd Floor</td>
                  <td>248</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - City of Imus Sports Development Unit</td>
                  <td>Mr. Jericho F. Reyes</td>
                  <td>2nd Floor</td>
                  <td>217</td>
                </tr>
                <tr>
                  <td>City Local Government Operations Office</td>
                  <td>Ms. Mary Roxanne T. Vicedo</td>
                  <td>2nd Floor</td>
                  <td>229</td>
                </tr>
                <tr>
                  <td>City Chaplain Office</td>
                  <td>Mr. Sancho R. Sampot</td>
                  <td>2nd Floor</td>
                  <td>247</td>
                </tr>
                <!-- 3RD FLOOR -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>3rd Floor</strong></td>
                </tr>
                <tr>
                  <td>Office of the City Legal Officer</td>
                  <td>Atty. Leonard Martin E. Syjuco</td>
                  <td>3rd Floor</td>
                  <td>316</td>
                </tr>
                <tr>
                  <td>Barangay Accounting</td>
                  <td rowspan="2">Ms. Roselie A. Pangilinan</td>
                  <td rowspan="2">3rd Floor</td>
                  <td>304</td>
                </tr>
                <tr>
                  <td>Office of the City Accountant</td>
                  <td>301</td>
                </tr>
                <tr>
                  <td>Office of the City Budget Officer</td>
                  <td>Ms. Arlene DG. Duminding</td>
                  <td>3rd Floor</td>
                  <td>306</td>
                </tr>
                <tr>
                  <td>Office of the Congressman</td>
                  <td>Hon. Adrian Jay C. Advincula / Mr. Allen Bryan R. Atienza</td>
                  <td>3rd Floor</td>
                  <td>900</td>
                </tr>
                <tr>
                  <td>Office of the City Environment and Natural Resources Officer</td>
                  <td>Ms. Phoebe Januarie M. Camaisa</td>
                  <td>3rd Floor</td>
                  <td>311</td>
                </tr>
                <tr>
                  <td>Commission on Audit</td>
                  <td>Silla, Robinson Papa</td>
                  <td>3rd Floor</td>
                  <td>322</td>
                </tr>
                <tr>
                  <td>Office of the City Human Resource Management Officer</td>
                  <td>Ms. Van Carlyne F. Rocha</td>
                  <td>3rd Floor</td>
                  <td>322</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Civil Security Unit</td>
                  <td>PCOL Jose Junar P. Alamo (Ret)</td>
                  <td>3rd Floor</td>
                  <td>318</td>
                </tr>
                <tr>
                  <td>Office of the City Administrator</td>
                  <td>Mr. Lauro D. Monzon</td>
                  <td>3rd Floor</td>
                  <td>601</td>
                </tr>
                <tr>
                  <td>Office of the City Mayor</td>
                  <td>Hon. Alex L. Advincula / Atty. Tricia Villaluz-Barzaga</td>
                  <td>3rd Floor</td>
                  <td>805</td>
                </tr>
                <!-- 4TH FLOOR -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>4th Floor</strong></td>
                </tr>
                <tr>
                  <td>Bids and Awards Committee</td>
                  <td>Mr. Lauro D. Monzon</td>
                  <td>4th Floor</td>
                  <td>420</td>
                </tr>
                <tr>
                  <td>Office of the City Engineer</td>
                  <td>Engr. Christian Mervin S. Sarno</td>
                  <td>4th Floor</td>
                  <td>805</td>
                </tr>
                <tr>
                  <td>Office of the City General Services Officer</td>
                  <td>Mr. Patrick M. Paulme</td>
                  <td>4th Floor</td>
                  <td>415</td>
                </tr>
                <tr>
                  <td>Angat Imus Homeowners Alliance Inc. - Federation</td>
                  <td>Mr. Enrique Romero R. Martin</td>
                  <td>4th Floor</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - City Information Technology and Records Management Unit</td>
                  <td>Engr. Christian D. Barco</td>
                  <td>4th Floor</td>
                  <td>411</td>
                </tr>
                <tr>
                  <td>Civil Society Organization Office</td>
                  <td>Ms. Sheryline S. Timtiman</td>
                  <td>4th Floor</td>
                  <td>407</td>
                </tr>
                <tr>
                  <td>City of Imus Task Force for Road Clearing</td>
                  <td>Mr. Peter Simon C. Lara</td>
                  <td>4th Floor</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Peace and Order for Public Safety</td>
                  <td>Mr. Arturo B. Pangilinan</td>
                  <td>4th Floor</td>
                  <td>425</td>
                </tr>
                <!-- 5TH FLOOR -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>5th Floor</strong></td>
                </tr>
                <tr>
                  <td>Office of the Sangguniang Panlungsod</td>
                  <td>Mr. Jose Rafael C. Alarcon</td>
                  <td>5th Floor</td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Vice Mayor</td>
                  <td>Hon. Homer T. Saquilayan / Mr. Alan Dexter C. Jamir</td>
                  <td>5th Floor</td>
                  <td>701</td>
                </tr>
                <tr>
                  <td>Office of the Sangguniang Panlungsod Secretary (Records and Legislative Section)</td>
                  <td>Ms. Mary Jemeny V. Yulo</td>
                  <td>5th Floor</td>
                  <td>703</td>
                </tr>
                <tr>
                  <td>Liga ng mga Barangay ng Imus</td>
                  <td>Hon. Reymundo G. Ramirez</td>
                  <td>5th Floor</td>
                  <td></td>
                </tr>
                <!-- OUTSIDE OFFICES -->
                <tr class="table-primary">
                  <td colspan="4" class="text-start"><strong>Outside Offices</strong></td>
                </tr>
                <tr>
                  <td>City College of Imus</td>
                  <td>Mr. Generoso F. Ramos, Jr.</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Health Officer - City Epidemiology and Surveillance Unit</td>
                  <td>Ms. Donabelle R. Melo, RN</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Health Officer - City of Imus Diagnostic Laboratory</td>
                  <td>Ms. Alexandra Regilyne M. Romero, RMT</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Economic Enterprise Management Unit</td>
                  <td rowspan="2">Mr. Peter Simon C. Lara</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Office of the City Mayor - Extension Unit</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Ospital ng Imus</td>
                  <td>Dr. Gabriel G. Gabriel</td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Robinsons and District Satellite Offices</td>
                  <td>Mr. Manuel Reynold W. Dela Fuente</td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          <script>
            document.getElementById('departmentsFilterInput').addEventListener('keyup', function () {
              const filter = this.value.toLowerCase();
              const rows = document.querySelectorAll('#departmentsTableBody tr');
              let currentClusterRow = null;
              rows.forEach(row => {
                // If this is a cluster header row, always show it for now
                if (row.classList.contains('table-primary')) {
                  row.style.display = '';
                  currentClusterRow = row;
                  row.setAttribute('data-has-visible', 'false');
                } else {
                  const cells = row.querySelectorAll('td');
                  const match = Array.from(cells).some(cell => cell.textContent.toLowerCase().includes(filter));
                  row.style.display = match ? '' : 'none';
                  // Mark cluster header if any of its rows are visible
                  if (match && currentClusterRow) {
                    currentClusterRow.setAttribute('data-has-visible', 'true');
                  }
                }
              });
              // Hide cluster headers if none of their rows are visible
              let clusterRow = null;
              rows.forEach(row => {
                if (row.classList.contains('table-primary')) {
                  clusterRow = row;
                  if (row.getAttribute('data-has-visible') === 'true') {
                    row.style.display = '';
                  } else {
                    row.style.display = 'none';
                  }
                  row.setAttribute('data-has-visible', 'false');
                }
              });
            });
          </script>
        </div>
      </section>
    <!-- Content -->
<?php
// Include footer
require_once __DIR__ . '/includes/footer.php';
?>