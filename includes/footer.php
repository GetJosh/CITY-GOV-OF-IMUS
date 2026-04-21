<?php
declare(strict_types=1);

$officialFacebook = $officialFacebook ?? imus_official_facebook_url();

$siteMapLinks = $siteMapLinks ?? [
    ['label' => 'Full Disclosures', 'href' => base_url('Pages/Full-Disclosure.php')],
    ['label' => 'Downloadable Forms', 'href' => base_url('Pages/Downloadable-Forms.php')],
    ['label' => 'Contact Us', 'href' => base_url('Pages/Contact-Us.php')],
    ['label' => 'Latest News', 'href' => base_url('index.php#latest-news')],
    ['label' => 'Emergency Contacts', 'href' => base_url('index.php#emergency-contacts')],
];

$governmentLinks = $governmentLinks ?? [
    ['label' => 'Official Gazette', 'href' => 'https://www.officialgazette.gov.ph/'],
    ['label' => 'Government Directory', 'href' => 'https://www.gov.ph/the-government/directory-of-departments-and-agencies/'],
    ['label' => 'Official Calendar', 'href' => 'https://www.officialgazette.gov.ph/calendar/'],
    ['label' => 'Office of the President', 'href' => 'https://op-proper.gov.ph/'],
    ['label' => 'Senate of the Philippines', 'href' => 'http://www.senate.gov.ph/'],
    ['label' => 'House of Representatives', 'href' => 'https://www.congress.gov.ph/'],
];
?>
        </main>

        <footer class="relative z-10 bg-imusDeep text-white">
            <div class="section-shell py-12">
                <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-4">
                    <section>
                        <?= imus_image('IMG/city_seal.png', 'City Seal of Imus', [
                            'loading' => 'lazy',
                            'decoding' => 'async',
                            'class' => 'h-20 w-20 rounded-full border border-white/20 bg-white/90 p-1',
                        ]) ?>
                        <p class="mt-4 text-sm leading-relaxed text-white/80">
                            Official website of the City Government of Imus, maintained by the City Information Office.
                        </p>
                        <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                            class="focusable mt-4 inline-flex items-center rounded-full border border-white/30 bg-white/10 px-4 py-2 text-sm font-semibold text-white transition hover:bg-white/20">
                            Follow Official Page
                        </a>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Site Map</h3>
                        <ul class="mt-4 space-y-2 text-sm text-white/80">
                            <?php foreach ($siteMapLinks as $siteMapLink): ?>
                                <li>
                                    <a href="<?= e($siteMapLink['href']) ?>"
                                        class="focusable inline-flex rounded px-1 py-0.5 transition hover:text-imusGreen">
                                        <?= e($siteMapLink['label']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Government Links</h3>
                        <ul class="mt-4 space-y-2 text-sm text-white/80">
                            <?php foreach ($governmentLinks as $governmentLink): ?>
                                <li>
                                    <a href="<?= e($governmentLink['href']) ?>" target="_blank" rel="noopener noreferrer"
                                        class="focusable inline-flex rounded px-1 py-0.5 transition hover:text-imusGreen">
                                        <?= e($governmentLink['label']) ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </section>

                    <section>
                        <h3 class="font-display text-lg font-semibold">Connect</h3>
                        <div class="mt-4 flex items-center gap-3">
                            <a href="<?= e($officialFacebook) ?>" target="_blank" rel="noopener noreferrer"
                                class="focusable inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 transition hover:border-imusGreen hover:bg-imusGreen"
                                aria-label="City Government of Imus on Facebook">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path d="M13.5 21v-7h2.4l.4-3h-2.8V9.1c0-.9.2-1.6 1.6-1.6h1.3V4.8c-.2 0-1-.1-2-.1-2 0-3.4 1.2-3.4 3.5V11H9v3h2.1v7h2.4Z" />
                                </svg>
                            </a>
                            <a href="<?= e(base_url('Pages/Contact-Us.php')) ?>"
                                class="focusable inline-flex h-10 w-10 items-center justify-center rounded-full border border-white/30 bg-white/10 transition hover:border-imusGreen hover:bg-imusGreen"
                                aria-label="Contact the City Government of Imus">
                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                                    <path d="M4 6h16v12H4z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round" />
                                    <path d="m4 7 8 6 8-6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <p class="mt-4 text-sm text-white/75">City Information Office<br>City of Imus, Cavite</p>
                    </section>
                </div>

                <div class="mt-10 flex flex-col gap-2 border-t border-white/20 pt-6 text-sm text-white/70 sm:flex-row sm:items-center sm:justify-between">
                    <p>&copy; <?= date('Y') ?> City Government of Imus. All rights reserved.</p>
                    <p>Public information portal for residents, visitors, and stakeholders.</p>
                </div>
            </div>
        </footer>
    </div>

    <!-- Scroll to Top Button -->
    <button id="scroll-to-top" type="button"
        class="fixed bottom-8 right-8 z-[100] h-14 w-14 items-center justify-center rounded-full border-2 border-white/40 bg-imusDeep text-white shadow-2xl backdrop-blur-sm transition-all duration-300 hover:bg-imusBlue hover:shadow-3xl hover:scale-110 focus:outline-none focus:ring-2 focus:ring-imusGreen focus:ring-offset-2 opacity-50 scale-90"
        aria-label="Back to top">
        <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M12 4v16m0 0l-8-8m8 8l8-8" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>

    <script>
        (function () {
            const dateTimeElement = document.getElementById('manila-datetime');
            const mobileBreakpoint = 1024;

            function updateDateTime() {
                if (!dateTimeElement) {
                    return;
                }

                const now = new Date();
                const date = now.toLocaleDateString('en-PH', {
                    timeZone: 'Asia/Manila',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                const time = now.toLocaleTimeString('en-PH', {
                    timeZone: 'Asia/Manila',
                    hour: 'numeric',
                    minute: '2-digit',
                    hour12: true
                });

                dateTimeElement.textContent = date + ' | ' + time + ' (PHT)';
            }

            const now = new Date();
            const delayUntilNextMinute = (60 - now.getSeconds()) * 1000;
            window.setTimeout(() => {
                updateDateTime();
                window.setInterval(updateDateTime, 60000);
            }, delayUntilNextMinute);

            const menuToggleButton = document.querySelector('[data-menu-toggle]');
            const menuPanel = document.getElementById('primary-menu');
            const dropdownButtons = document.querySelectorAll('[data-dropdown-button]');
            const menuLinks = menuPanel ? menuPanel.querySelectorAll('a') : [];

            function closeDropdowns(exceptButton = null) {
                dropdownButtons.forEach((button) => {
                    if (exceptButton && button === exceptButton) {
                        return;
                    }

                    const panelId = button.getAttribute('aria-controls');
                    const panel = panelId ? document.getElementById(panelId) : null;
                    button.setAttribute('aria-expanded', 'false');
                    if (panel) {
                        panel.classList.add('hidden');
                    }
                });
            }

            function openDropdown(button, panel) {
                closeDropdowns(button);
                panel.classList.remove('hidden');
                button.setAttribute('aria-expanded', 'true');
            }

            if (menuToggleButton && menuPanel) {
                menuToggleButton.addEventListener('click', () => {
                    const willOpen = menuPanel.classList.contains('hidden');
                    menuPanel.classList.toggle('hidden');
                    menuToggleButton.setAttribute('aria-expanded', String(willOpen));
                    if (!willOpen) {
                        closeDropdowns();
                    }
                });
            }

            dropdownButtons.forEach((button) => {
                const panelId = button.getAttribute('aria-controls');
                const panel = panelId ? document.getElementById(panelId) : null;
                if (!panel) {
                    return;
                }

                button.addEventListener('click', (event) => {
                    event.preventDefault();
                    const isOpen = button.getAttribute('aria-expanded') === 'true';
                    closeDropdowns();
                    if (!isOpen) {
                        openDropdown(button, panel);
                    }
                });

                button.addEventListener('keydown', (event) => {
                    if (event.key !== 'ArrowDown' && event.key !== 'Enter' && event.key !== ' ') {
                        return;
                    }

                    event.preventDefault();
                    if (panel.classList.contains('hidden')) {
                        openDropdown(button, panel);
                    }

                    const firstLink = panel.querySelector('a');
                    if (firstLink) {
                        firstLink.focus();
                    }
                });
            });

            if (menuLinks.length > 0 && menuToggleButton && menuPanel) {
                menuLinks.forEach((link) => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth >= mobileBreakpoint) {
                            return;
                        }

                        closeDropdowns();
                        menuPanel.classList.add('hidden');
                        menuToggleButton.setAttribute('aria-expanded', 'false');
                    });
                });
            }

            document.addEventListener('click', (event) => {
                if (!(event.target instanceof Element)) {
                    return;
                }

                if (event.target.closest('[data-dropdown]') || event.target.closest('[data-menu-toggle]')) {
                    return;
                }

                closeDropdowns();
            });

            document.addEventListener('keydown', (event) => {
                if (event.key !== 'Escape') {
                    return;
                }

                closeDropdowns();

                if (window.innerWidth < mobileBreakpoint && menuToggleButton && menuPanel && !menuPanel.classList.contains('hidden')) {
                    menuPanel.classList.add('hidden');
                    menuToggleButton.setAttribute('aria-expanded', 'false');
                    menuToggleButton.focus();
                }
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth < mobileBreakpoint && menuToggleButton && menuPanel && menuToggleButton.getAttribute('aria-expanded') !== 'true') {
                    menuPanel.classList.add('hidden');
                }

                if (window.innerWidth >= mobileBreakpoint) {
                    closeDropdowns();
                    if (menuToggleButton) {
                        menuToggleButton.setAttribute('aria-expanded', 'false');
                    }
                }
            });

            // Scroll to Top Button Functionality
            const scrollToTopBtn = document.getElementById('scroll-to-top');

            function toggleScrollToTop() {
                if (window.pageYOffset > 150) {
                    scrollToTopBtn.classList.remove('opacity-50', 'scale-90');
                    scrollToTopBtn.classList.add('opacity-100', 'scale-100');
                } else {
                    scrollToTopBtn.classList.remove('opacity-100', 'scale-100');
                    scrollToTopBtn.classList.add('opacity-50', 'scale-90');
                }
            }

            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            // Initial check
            toggleScrollToTop();

            // Event listeners
            window.addEventListener('scroll', toggleScrollToTop);
            scrollToTopBtn.addEventListener('click', scrollToTop);
        })();
    </script>
</body>

</html>
