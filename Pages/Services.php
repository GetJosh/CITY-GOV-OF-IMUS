<?php
declare(strict_types=1);

$pageTitle = 'City Services';
$pageDescription = 'City service programs and public assistance information for residents of Imus.';

require_once __DIR__ . '/../includes/header.navbar.php';
?>
<section class="section-shell py-12 sm:py-14 lg:py-16">
    <div class="rounded-3xl border border-imusBlue/20 bg-white p-6 shadow-soft-xl sm:p-8 lg:p-10">
        <p class="text-xs font-semibold uppercase tracking-[0.16em] text-imusBlue">Services</p>
        <h1 class="mt-2 font-display text-3xl font-bold text-civicInk sm:text-4xl">City Services</h1>
        <p class="mt-4 max-w-3xl text-sm leading-relaxed text-slate-700 sm:text-base">
            The dedicated PHP services page is currently being finalized. You can use the existing services portal while this route is under active migration.
        </p>
        <div class="mt-6 flex flex-wrap gap-3">
            <a href="<?= e(base_url('HTML/Services.html')) ?>"
               class="focusable inline-flex items-center rounded-full bg-imusBlue px-5 py-2.5 text-sm font-semibold text-white transition hover:bg-imusDeep">
                Open Services Portal
            </a>
            <a href="<?= e(base_url('HTML/Contact-Us.html')) ?>"
               class="focusable inline-flex items-center rounded-full border border-imusBlue/30 px-5 py-2.5 text-sm font-semibold text-imusBlue transition hover:bg-imusBlue/10">
                Contact Assistance Desk
            </a>
        </div>
    </div>
</section>
<?php
require_once __DIR__ . '/../includes/footer.php';
?>
