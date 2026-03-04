<?php
declare(strict_types=1);

/* Basic Page Setup (BASE_URL + helpers) */
$scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
$scriptDir = str_replace('\\', '/', dirname($scriptName));
$scriptDir = trim($scriptDir, '/');
$baseUrl = ($scriptDir === '' || $scriptDir === '.') ? '/' : '/' . $scriptDir . '/';

define('BASE_URL', $baseUrl);

function base_url(string $path = ''): string
{
    $path = ltrim($path, '/');
    if ($path === '') {
        return BASE_URL;
    }

    return BASE_URL . $path;
}

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function tel_href(string $value): string
{
    $normalized = preg_replace('/[^0-9+]/', '', $value) ?? '';

    return $normalized === '' ? '' : 'tel:' . $normalized;
}

$pageTitle = 'Full Disclosure';
$pageDescription = 'Full disclosure reports, ordinances, bids, resolutions and other governance documents for the City of Imus.';
$isHttps = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || (($_SERVER['SERVER_PORT'] ?? '') === '443')
    || (($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https');
$scheme = $isHttps ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$canonicalUrl = $scheme . '://' . $host . base_url('Pages/FullDisclosureComponents/Full-Disclosure.php');

// Include shared header (uses base_url() + e())
require_once __DIR__ . '/../../includes/header.navbar.php';
?>

    <section class="city-ordinances" id="city-ordinances">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">City Ordinances</h2>
            <div class="overflow-x-auto rounded-lg border border-imusBlue/20 shadow-soft-xl">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-imusBlue text-white">
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Ordinance No.</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold">Title</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Date Approved</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[90px]">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm font-medium">2024-001</td>
                            <td class="px-4 py-3 text-sm">An Ordinance Adopting the Revised Revenue Code of the City of Imus</td>
                            <td class="px-4 py-3 text-sm">Jan 15, 2024</td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/ordinances/2024-001.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm font-medium">2024-002</td>
                            <td class="px-4 py-3 text-sm">An Ordinance Providing for the Comprehensive Anti-Smoking Policy in Public Places</td>
                            <td class="px-4 py-3 text-sm">Feb 10, 2024</td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/ordinances/2024-002.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm font-medium">2023-015</td>
                            <td class="px-4 py-3 text-sm">An Ordinance Regulating the Use of Plastic Bags and Promoting Eco-Friendly Packaging</td>
                            <td class="px-4 py-3 text-sm">Nov 28, 2023</td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/ordinances/2023-015.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm font-medium">2023-010</td>
                            <td class="px-4 py-3 text-sm">An Ordinance Establishing the Imus City Scholarship Program</td>
                            <td class="px-4 py-3 text-sm">Aug 5, 2023</td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/ordinances/2023-010.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <!-- Add more ordinances as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="executive-orders" id="executive-orders">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Executive Orders</h2>
            <div class="space-y-3" id="executiveOrdersAccordion">
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#eoCollapseOne" aria-expanded="true" aria-controls="eoCollapseOne">
                            2024 Executive Orders
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="eoCollapseOne" class="collapse show px-6 py-4 border-t border-imusBlue/10" aria-labelledby="eoHeadingOne" data-parent="#executiveOrdersAccordion">
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li>EO No. 01, s.2024 - Example Executive Order Title</li>
                            <li>EO No. 02, s.2024 - Example Executive Order Title</li>
                            <!-- Add more executive orders here -->
                        </ul>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#eoCollapseTwo" aria-expanded="false" aria-controls="eoCollapseTwo">
                            2023 Executive Orders
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="eoCollapseTwo" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="eoHeadingTwo" data-parent="#executiveOrdersAccordion">
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li>EO No. 01, s.2023 - Example Executive Order Title</li>
                            <li>EO No. 02, s.2023 - Example Executive Order Title</li>
                            <!-- Add more executive orders here -->
                        </ul>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#eoCollapseThree" aria-expanded="false" aria-controls="eoCollapseThree">
                            2022 Executive Orders
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="eoCollapseThree" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="eoHeadingThree" data-parent="#executiveOrdersAccordion">
                        <ul class="space-y-2 text-sm text-slate-700">
                            <li>EO No. 01, s.2022 - Example Executive Order Title</li>
                            <li>EO No. 02, s.2022 - Example Executive Order Title</li>
                            <!-- Add more executive orders here -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bids-and-awards" id="bids-and-awards">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Bids and Awards</h2>
            <div class="space-y-3" id="bidsAwardsAccordion">
            <!-- Accordion Items -->
            <!-- Example for 3 items, repeat pattern up to 120 -->
            <!-- For brevity, only first 3 and last 2 items are shown, fill in the rest as needed -->
            <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                <h3 class="accordion-header">
                <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#baCollapse1" aria-expanded="true" aria-controls="baCollapse1">
                    Bid Opportunity #1
                    <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
                </h3>
                <div id="baCollapse1" class="collapse show px-6 py-4 border-t border-imusBlue/10" aria-labelledby="baHeading1" data-parent="#bidsAwardsAccordion">
                    <p class="text-sm text-slate-700 mb-3">Details for Bid Opportunity #1.</p>
                    <a href="<?= e(base_url('docs/bids/bid1.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-2 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download Bid File">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                        Download Bid File
                    </a>
                </div>
            </div>
            <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                <h3 class="accordion-header">
                <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#baCollapse2" aria-expanded="false" aria-controls="baCollapse2">
                    Bid Opportunity #2
                    <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
                </h3>
                <div id="baCollapse2" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="baHeading2" data-parent="#bidsAwardsAccordion">
                    <p class="text-sm text-slate-700 mb-3">Details for Bid Opportunity #2.</p>
                    <a href="<?= e(base_url('docs/bids/bid2.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-2 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download Bid File">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                        Download Bid File
                    </a>
                </div>
            </div>
            <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                <h3 class="accordion-header">
                <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#baCollapse3" aria-expanded="false" aria-controls="baCollapse3">
                    Bid Opportunity #3
                    <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
                </h3>
                <div id="baCollapse3" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="baHeading3" data-parent="#bidsAwardsAccordion">
                    <p class="text-sm text-slate-700 mb-3">Details for Bid Opportunity #3.</p>
                    <a href="<?= e(base_url('docs/bids/bid3.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-2 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download Bid File">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                        Download Bid File
                    </a>
                </div>
            </div>
            <!-- ...repeat for items 4 to 119... -->
            <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                <h3 class="accordion-header">
                <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#baCollapse119" aria-expanded="false" aria-controls="baCollapse119">
                    Bid Opportunity #119
                    <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                </button>
                </h3>
                <div id="baCollapse119" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="baHeading119" data-parent="#bidsAwardsAccordion">
                    <p class="text-sm text-slate-700 mb-3">Details for Bid Opportunity #119.</p>
                    <a href="<?= e(base_url('docs/bids/bid119.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-2 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download Bid File">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                        Download Bid File
                    </a>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="baHeading120">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse120" aria-expanded="false" aria-controls="baCollapse120">
                    Bid Opportunity #120
                </button>
                </h2>
                <div id="baCollapse120" class="accordion-collapse collapse" aria-labelledby="baHeading120" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #120.<br>
                    <a href="<?= e(base_url('docs/bids/bid120.pdf')) ?>" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            </div>
            <!-- END ACCORDION ITEMS -->
            </div>
        </div>
        <script>
            // Optionally, you can generate the accordion dynamically with JS for maintainability
            // Example:
            /*
            const accordion = document.getElementById('bidsAwardsAccordion');
            for(let i=1; i<=120; i++) {
            const item = document.createElement('div');
            item.className = 'accordion-item';
            item.innerHTML = `
                <h2 class="accordion-header" id="baHeading${i}">
                <button class="accordion-button${i===1?'':' collapsed'}" type="button" data-bs-toggle="collapse" data-bs-target="#baCollapse${i}" aria-expanded="${i===1?'true':'false'}" aria-controls="baCollapse${i}">
                    Bid Opportunity #${i}
                </button>
                </h2>
                <div id="baCollapse${i}" class="accordion-collapse collapse${i===1?' show':''}" aria-labelledby="baHeading${i}" data-bs-parent="#bidsAwardsAccordion">
                <div class="accordion-body">
                    Details for Bid Opportunity #${i}.<br>
                    <a href="<?= e(base_url('docs/bids/')) ?>bid${i}.pdf" class="btn btn-outline-success btn-sm mt-2" target="_blank" aria-label="Download Bid File">
                    <i class="bi bi-file-earmark-arrow-down"></i> Download Bid File
                    </a>
                </div>
                </div>
            `;
            accordion.appendChild(item);
            }
            */
        </script>
    </section>

    <section class="resolutions" id="resolutions">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Resolutions</h2>
            <div class="overflow-x-auto rounded-lg border border-imusBlue/20 shadow-soft-xl">
            <table class="w-full border-collapse">
                <thead>
                <tr class="bg-imusBlue text-white">
                    <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Resolution No.</th>
                    <th scope="col" class="px-4 py-3 text-left text-sm font-semibold">Title</th>
                    <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Date Passed</th>
                </tr>
                </thead>
                <tbody>
                <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                    <td class="px-4 py-3">
                    <span class="inline-flex items-center rounded-full bg-imusBlue text-white text-xs font-semibold px-3 py-1">2024-010</span>
                    </td>
                    <td class="px-4 py-3">
                    <p class="font-semibold text-sm">Resolution Honoring Outstanding Citizens of Imus</p>
                    <p class="text-xs text-slate-500 mt-1">Recognizing exemplary contributions to the community</p>
                    </td>
                    <td class="px-4 py-3 text-sm">Mar 12, 2024</td>
                </tr>
                <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                    <td class="px-4 py-3">
                    <span class="inline-flex items-center rounded-full bg-imusGreen text-white text-xs font-semibold px-3 py-1">2024-005</span>
                    </td>
                    <td class="px-4 py-3">
                    <p class="font-semibold text-sm">Resolution Adopting the City Disaster Risk Reduction Plan</p>
                    <p class="text-xs text-slate-500 mt-1">For enhanced preparedness and response</p>
                    </td>
                    <td class="px-4 py-3 text-sm">Feb 20, 2024</td>
                </tr>
                <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                    <td class="px-4 py-3">
                    <span class="inline-flex items-center rounded-full bg-imusGreen text-white text-xs font-semibold px-3 py-1">2023-022</span>
                    </td>
                    <td class="px-4 py-3">
                    <p class="font-semibold text-sm">Resolution Supporting Local Business Recovery Programs</p>
                    <p class="text-xs text-slate-500 mt-1">Post-pandemic economic initiatives</p>
                    </td>
                    <td class="px-4 py-3 text-sm">Nov 8, 2023</td>
                </tr>
                <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                    <td class="px-4 py-3">
                    <span class="inline-flex items-center rounded-full bg-imusBlue text-white text-xs font-semibold px-3 py-1">2023-015</span>
                    </td>
                    <td class="px-4 py-3">
                    <p class="font-semibold text-sm">Resolution Approving the Annual Investment Plan</p>
                    <p class="text-xs text-slate-500 mt-1">Fiscal year development priorities</p>
                    </td>
                    <td class="px-4 py-3 text-sm">Sep 18, 2023</td>
                </tr>
                <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                    <td class="px-4 py-3">
                    <span class="inline-flex items-center rounded-full bg-slate-600 text-white text-xs font-semibold px-3 py-1">2022-008</span>
                    </td>
                    <td class="px-4 py-3">
                    <p class="font-semibold text-sm">Resolution for the Establishment of Green Spaces</p>
                    <p class="text-xs text-slate-500 mt-1">Urban environmental sustainability</p>
                    </td>
                    <td class="px-4 py-3 text-sm">May 10, 2022</td>
                </tr>
                <!-- Add more resolutions as needed -->
                </tbody>
            </table>
            </div>
        </div>
    </section>
        
    <section class="full-disclosures" id="full-disclosures">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Full Disclosure Reports</h2>
            <div class="space-y-3" id="fullDisclosureAccordion">
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse1" aria-expanded="true" aria-controls="fdCollapse1">
                            Annual Budget
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse1" class="collapse show px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading1" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Annual Budget.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse2" aria-expanded="false" aria-controls="fdCollapse2">
                            Statement of Receipts and Expenditures
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse2" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading2" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Statement of Receipts and Expenditures.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse3" aria-expanded="false" aria-controls="fdCollapse3">
                            Procurement Plan
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse3" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading3" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Procurement Plan.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse4" aria-expanded="false" aria-controls="fdCollapse4">
                            Special Purpose Fund Utilization
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse4" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading4" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Special Purpose Fund Utilization.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse5" aria-expanded="false" aria-controls="fdCollapse5">
                            Annual Procurement Plan
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse5" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading5" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Annual Procurement Plan.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse6" aria-expanded="false" aria-controls="fdCollapse6">
                            SEF Utilization
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse6" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading6" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for SEF Utilization.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse7" aria-expanded="false" aria-controls="fdCollapse7">
                            20% Development Fund Utilization
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse7" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading7" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for 20% Development Fund Utilization.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#fdCollapse8" aria-expanded="false" aria-controls="fdCollapse8">
                            Gender and Development Fund Utilization
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="fdCollapse8" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="fdHeading8" data-parent="#fullDisclosureAccordion">
                        <p class="text-sm text-slate-700">Content for Gender and Development Fund Utilization.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="job-opportunities" id="job-opportunities">
            <div class="section-shell py-12 sm:py-14 lg:py-16">
                <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Job Opportunities</h2>
                <div class="overflow-x-auto rounded-lg border border-imusBlue/20 shadow-soft-xl">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-imusGreen text-white">
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[180px]">Position Title</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold">Department/Office</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">No. of Vacancies</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[160px]">Posting Date</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Deadline</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[110px]">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">Administrative Aide IV</td>
                                <td class="px-4 py-3 text-sm">City Human Resource Management Office</td>
                                <td class="px-4 py-3 text-sm">2</td>
                                <td class="px-4 py-3 text-sm">Apr 10, 2024</td>
                                <td class="px-4 py-3 text-sm">Apr 25, 2024</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/jobs/admin-aide-iv.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusBlue hover:bg-imusBlue/10 transition" target="_blank" aria-label="View Details">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 12a1 1 0 011 1v6H3a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v7a1 1 0 11-2 0V5H4v12a1 1 0 001 1h6a1 1 0 011-1v-6a1 1 0 011-1z"/></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">City Planning Officer</td>
                                <td class="px-4 py-3 text-sm">City Planning and Development Office</td>
                                <td class="px-4 py-3 text-sm">1</td>
                                <td class="px-4 py-3 text-sm">Apr 5, 2024</td>
                                <td class="px-4 py-3 text-sm">Apr 20, 2024</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/jobs/city-planning-officer.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusBlue hover:bg-imusBlue/10 transition" target="_blank" aria-label="View Details">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 12a1 1 0 011 1v6H3a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v7a1 1 0 11-2 0V5H4v12a1 1 0 001 1h6a1 1 0 011-1v-6a1 1 0 011-1z"/></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">Medical Technologist I</td>
                                <td class="px-4 py-3 text-sm">City Health Office</td>
                                <td class="px-4 py-3 text-sm">3</td>
                                <td class="px-4 py-3 text-sm">Mar 28, 2024</td>
                                <td class="px-4 py-3 text-sm">Apr 15, 2024</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/jobs/medtech-i.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusBlue hover:bg-imusBlue/10 transition" target="_blank" aria-label="View Details">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 12a1 1 0 011 1v6H3a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v7a1 1 0 11-2 0V5H4v12a1 1 0 001 1h6a1 1 0 011-1v-6a1 1 0 011-1z"/></svg>
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">Social Welfare Officer II</td>
                                <td class="px-4 py-3 text-sm">City Social Welfare and Development Office</td>
                                <td class="px-4 py-3 text-sm">1</td>
                                <td class="px-4 py-3 text-sm">Mar 20, 2024</td>
                                <td class="px-4 py-3 text-sm">Apr 5, 2024</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/jobs/social-welfare-officer-ii.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-imusBlue hover:bg-imusBlue/10 transition" target="_blank" aria-label="View Details">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 12a1 1 0 011 1v6H3a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v7a1 1 0 11-2 0V5H4v12a1 1 0 001 1h6a1 1 0 011-1v-6a1 1 0 011-1z"/></svg>
                                    </a>
                                </td>
                            </tr>
                            <!-- Add more job opportunities as needed -->
                        </tbody>
                    </table>
                </div>
                <div class="mt-6 p-4 rounded-lg border border-sky-200 bg-sky-50">
                    <p class="text-sm text-slate-700">For application procedures and requirements, please visit the <a href="https://www.cityofimus.gov.ph/careers" target="_blank" class="text-imusBlue font-medium hover:underline">official careers page</a> or contact the City Human Resource Management Office.</p>
                </div>
            </div>
    </section>

    <section class="GAD-database" id="gad-database">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">GAD Database</h2>
            <div class="overflow-x-auto rounded-lg border border-imusBlue/20 shadow-soft-xl">
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="bg-sky-500 text-white">
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[180px]">Year</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold">Program/Project</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[180px]">Budget</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[180px]">Status</th>
                            <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[120px]">Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm">2024</td>
                            <td class="px-4 py-3 text-sm">Women Empowerment and Livelihood Training</td>
                            <td class="px-4 py-3 text-sm font-medium">₱1,200,000</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-imusGreen text-white text-xs font-semibold px-3 py-1">Ongoing</span></td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/gad/2024-women-empowerment.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-sky-500 hover:bg-sky-100 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm">2023</td>
                            <td class="px-4 py-3 text-sm">Gender Sensitivity Seminar for City Employees</td>
                            <td class="px-4 py-3 text-sm font-medium">₱500,000</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-slate-500 text-white text-xs font-semibold px-3 py-1">Completed</span></td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/gad/2023-gender-sensitivity.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-sky-500 hover:bg-sky-100 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                            <td class="px-4 py-3 text-sm">2022</td>
                            <td class="px-4 py-3 text-sm">Anti-Violence Against Women Campaign</td>
                            <td class="px-4 py-3 text-sm font-medium">₱800,000</td>
                            <td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-slate-500 text-white text-xs font-semibold px-3 py-1">Completed</span></td>
                            <td class="px-4 py-3">
                                <a href="<?= e(base_url('docs/gad/2022-anti-violence.pdf')) ?>" class="focusable inline-flex items-center justify-center px-2 py-1.5 rounded text-sky-500 hover:bg-sky-100 transition" target="_blank" aria-label="Download PDF">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                </a>
                            </td>
                        </tr>
                        <!-- Add more GAD entries as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="BANAAG" id="banaag">
            <div class="section-shell py-12 sm:py-14 lg:py-16">
                <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">BANAAG Issuances</h2>
                <div class="overflow-x-auto rounded-lg border border-imusBlue/20 shadow-soft-xl">
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-amber-500 text-white">
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[60px]">#</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold">BANAAG Name</th>
                                <th scope="col" class="px-4 py-3 text-left text-sm font-semibold w-[140px]">Download File</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">1</td>
                                <td class="px-4 py-3 text-sm">BANAAG 2024-01: Guidelines on Barangay Reporting</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/banaag/2024-01.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download BANAAG 2024-01">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                        Download
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">2</td>
                                <td class="px-4 py-3 text-sm">BANAAG 2023-05: Community Health Initiatives</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/banaag/2023-05.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download BANAAG 2023-05">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                        Download
                                    </a>
                                </td>
                            </tr>
                            <tr class="border-b border-imusBlue/10 hover:bg-imusBlue/5 transition">
                                <td class="px-4 py-3 text-sm font-medium">3</td>
                                <td class="px-4 py-3 text-sm">BANAAG 2022-03: Environmental Protection Measures</td>
                                <td class="px-4 py-3">
                                    <a href="<?= e(base_url('docs/banaag/2022-03.pdf')) ?>" class="focusable inline-flex items-center gap-2 px-3 py-1.5 rounded text-imusGreen hover:bg-imusGreen/10 transition text-sm font-medium" target="_blank" aria-label="Download BANAAG 2022-03">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10 4.5a.5.5 0 01.5.5v7.586l2.293-2.293a.5.5 0 01.707.707l-3.5 3.5a.5.5 0 01-.707 0l-3.5-3.5a.5.5 0 11.707-.707L9 12.586V5a.5.5 0 01.5-.5z"/></svg>
                                        Download
                                    </a>
                                </td>
                            </tr>
                            <!-- Add more BANAAG issuances as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
    </section>

    <section class="local-government-support-funds" id="local-government-support-funds">
        <div class="section-shell py-12 sm:py-14 lg:py-16">
            <h2 class="mb-6 text-2xl sm:text-3xl font-display font-bold text-imusBlue">Local Government Support Funds</h2>
            <div class="space-y-3" id="lgSupportFundsAccordion">
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse1" aria-expanded="true" aria-controls="lgCollapse1">
                            Fund Category 1
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse1" class="collapse show px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading1" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 1.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse2" aria-expanded="false" aria-controls="lgCollapse2">
                            Fund Category 2
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse2" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading2" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 2.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse3" aria-expanded="false" aria-controls="lgCollapse3">
                            Fund Category 3
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse3" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading3" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 3.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse4" aria-expanded="false" aria-controls="lgCollapse4">
                            Fund Category 4
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse4" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading4" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 4.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse5" aria-expanded="false" aria-controls="lgCollapse5">
                            Fund Category 5
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse5" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading5" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 5.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse6" aria-expanded="false" aria-controls="lgCollapse6">
                            Fund Category 6
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse6" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading6" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 6.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse7" aria-expanded="false" aria-controls="lgCollapse7">
                            Fund Category 7
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse7" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading7" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 7.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse8" aria-expanded="false" aria-controls="lgCollapse8">
                            Fund Category 8
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse8" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading8" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 8.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse9" aria-expanded="false" aria-controls="lgCollapse9">
                            Fund Category 9
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse9" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading9" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 9.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse10" aria-expanded="false" aria-controls="lgCollapse10">
                            Fund Category 10
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse10" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading10" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 10.</p>
                    </div>
                </div>
                <div class="border border-imusBlue/20 rounded-lg overflow-hidden">
                    <h3 class="accordion-header">
                        <button class="w-full px-6 py-4 text-left font-semibold text-imusBlue hover:bg-imusBlue/5 flex items-center justify-between" type="button" data-toggle="collapse" data-target="#lgCollapse11" aria-expanded="false" aria-controls="lgCollapse11">
                            Fund Category 11
                            <svg class="w-5 h-5 transition" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                        </button>
                    </h3>
                    <div id="lgCollapse11" class="collapse px-6 py-4 border-t border-imusBlue/10" aria-labelledby="lgHeading11" data-parent="#lgSupportFundsAccordion">
                        <p class="text-sm text-slate-700">Details for Fund Category 11.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inline footer removed; using shared footer include below -->
<?php
// Include shared footer (adds scripts and closes the document)
require_once __DIR__ . '/../../includes/footer.php';
?>