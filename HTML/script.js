(() => {
    const contentArea = document.getElementById('content-area');
    const sectionLinks = document.querySelectorAll('[data-section]');

    if (!contentArea || sectionLinks.length === 0) {
        return;
    }

    const sections = {
        dashboard: `
            <section class="rounded-2xl bg-white p-6 shadow-sm">
                <h1 class="text-2xl font-bold text-slate-800">Dashboard</h1>
                <p class="mt-3 text-slate-600">
                    Welcome to the Employees Hub. Use the navigation above to view directory records,
                    office announcements, and internal resources.
                </p>
            </section>
        `,
        directory: `
            <section class="rounded-2xl bg-white p-6 shadow-sm">
                <h1 class="text-2xl font-bold text-slate-800">Employee Directory</h1>
                <p class="mt-3 text-slate-600">
                    Directory data can be integrated here from your internal staff records.
                </p>
            </section>
        `,
        announcements: `
            <section class="rounded-2xl bg-white p-6 shadow-sm">
                <h1 class="text-2xl font-bold text-slate-800">Announcements</h1>
                <p class="mt-3 text-slate-600">
                    Post policy reminders, internal notices, and office advisories in this section.
                </p>
            </section>
        `,
        resources: `
            <section class="rounded-2xl bg-white p-6 shadow-sm">
                <h1 class="text-2xl font-bold text-slate-800">Resources</h1>
                <p class="mt-3 text-slate-600">
                    Link internal forms, templates, and standard operating references here.
                </p>
            </section>
        `,
        settings: `
            <section class="rounded-2xl bg-white p-6 shadow-sm">
                <h1 class="text-2xl font-bold text-slate-800">Settings</h1>
                <p class="mt-3 text-slate-600">
                    Configure user preferences and account controls for hub users.
                </p>
            </section>
        `,
    };

    function renderSection(section) {
        const key = Object.prototype.hasOwnProperty.call(sections, section) ? section : 'dashboard';
        contentArea.innerHTML = sections[key];

        sectionLinks.forEach((link) => {
            const isActive = link.dataset.section === key;
            link.classList.toggle('text-sky-300', isActive);
            link.classList.toggle('font-semibold', isActive);
        });
    }

    sectionLinks.forEach((link) => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            renderSection(link.dataset.section || 'dashboard');
        });
    });

    renderSection('dashboard');
})();
