# Project Refactor Audit Report

## Executive Summary

The current codebase is already partway through a cleanup. The major beginner-readability problems are no longer legacy HTML folders or old component trees. The remaining issues are live-code issues: helper indirection, repeated static data between pages, one page with a much heavier inline enhancement layer than the rest of the site, and a large asset/tooling footprint that is harder to understand than the runtime frontend itself.

The public site is currently a small PHP-driven website with 8 live routes, 5 shared include files, one authored Tailwind source file, one generated runtime stylesheet, and a single image optimization script. That is a much smaller and cleaner surface area than the repository size suggests. The biggest beginner-first gains now come from simplifying the live execution paths, not from inventing more structure.

The site already has strong baseline semantics, responsive layout patterns, and low runtime JavaScript. The highest-value refactor work is to reduce unnecessary wrappers and duplicated page data, reuse one shared document scanning path, simplify the Tourism page's JS/CSS enhancement layer, trim volatile business-reference content, and make the asset build story easier to understand. All live PHP and include files currently pass `php -l`.

## System Scope & Audit Boundaries

This audit reviews only the project's custom application code that affects the frontend experience.

Included in scope:

- PHP templates that output the site's HTML: `index.php` and the 7 files under `Pages/`
- Shared runtime includes under `includes/`
- Authored and runtime CSS in `CSS/index.tailwind.input.css` and `CSS/index.tailwind.min.css`
- Tailwind configuration in `CSS/tailwind.index.config.js`
- Inline and shared JavaScript embedded in PHP templates
- Asset/tooling files that directly affect frontend maintainability or performance, especially `scripts/optimize-images.cjs`, `IMG/optimized/responsive-manifest.json`, and the `IMG/optimized/responsive/` tree

Excluded from scope:

- Browser behavior, standards, or platform APIs treated as project mistakes
- Third-party embeds unless the project misuses them
- The contents of archived PDFs and office documents inside `DOCS/`
- Deep analysis of generated or minified production files beyond their maintainability and workflow impact

## Codebase Inventory & File/Folders Sprawl Analysis

The live custom application layer is compact. The repository footprint is dominated by archived documents and responsive image output rather than by a sprawling live frontend source tree.

Current verified inventory:

- 8 public routes: `index.php` plus 7 PHP pages in `Pages/`
- 5 shared includes: `bootstrap.php`, `document-portal.php`, `footer.php`, `header.navbar.php`, and `image-helpers.php`
- 2 CSS files: `CSS/index.tailwind.input.css` as authored source and `CSS/index.tailwind.min.css` as runtime output
- 1 Tailwind config file: `CSS/tailwind.index.config.js`
- 1 asset script: `scripts/optimize-images.cjs`

Current structure facts:

- No live `HTML/` directory exists in the working tree
- No live `JS/` directory exists in the working tree
- No live `Pages/AboutComponents/`, `Pages/ServiceComponents/`, `Pages/TourismComponents/`, or `Pages/FullDisclosureComponents/` directories exist in the working tree
- The largest folder sprawl is now in `IMG/` and `DOCS/`, not in the page/source structure

Verified payload size facts:

- `IMG/` contains 1,686 files totaling about 833.70 MB
- `DOCS/` contains 646 files totaling about 787.74 MB

Beginner-first inventory assessment:

- The live source structure is reasonably flat and understandable
- The main sprawl problem is asset output depth, especially under `IMG/optimized/responsive/`
- The runtime frontend is small, but the rebuild story is not. There is no `package.json`, no `package-lock.json`, and no documented Tailwind build command in the repo, so a beginner can see the CSS source and config but cannot immediately tell how to regenerate the runtime CSS
- The image pipeline is also functional but high-cognitive-load because the source image folders, optimized top-level images, responsive variants, and manifest all coexist

## Dead, Unused, and Unnecessary Files, Functions, Helpers & Folders

Current evidence does not support carrying over the old audit's claims about live legacy folders. Those folders are already gone from the working tree. The cleanup targets that remain are smaller and more specific.

Current evidence-backed findings:

- `includes/bootstrap.php` still contains a redundant `tel_href()` wrapper that only calls `imus_phone_href()`. That extra helper adds a second name for the same behavior without reducing complexity.
- `Pages/Services.php` uses its own citizen-charter scanning path built on `RecursiveDirectoryIterator`, custom sorting, and a local label formatter. `Pages/Downloadable-Forms.php` and `Pages/Full-Disclosure.php` already use `includes/document-portal.php`. That means the site has two different document-discovery patterns for the same general problem.
- Static data is repeated across routes. `$officialFacebook` is redefined in multiple pages, and the emergency contact blocks in `index.php` and `Pages/Contact-Us.php` duplicate the same office and phone information in separate arrays.
- `index.php` uses a `surface-noise` CSS class, but no matching definition exists in `CSS/index.tailwind.input.css` or the generated runtime stylesheet. For a beginner, that reads like meaningful styling even though it is currently a no-op.
- `includes/image-helpers.php` is not dead code, because the site actively uses responsive images backed by `IMG/optimized/responsive-manifest.json`. However, it exposes 7 helper functions and several layers of helper-to-helper behavior for what appears in templates as a simple image output call. That is justified by the responsive image pipeline, but it is still a high mental load for simple page edits.
- `Pages/Tourism.php` is the largest live complexity outlier. It contains inline page CSS, an inline pre-enhancement script, a second inline behavior script, loading skeleton markup, image-loaded state handling, and see-more toggles. The rest of the site is much more direct.

Conservative asset-cleanup note:

- This audit should not claim broad image deletion from static string matching alone. Many source images are referenced through helper-driven output or through directory scans. Asset removal should be limited to files that are verified as orphaned after checking current PHP usage and the current responsive-image pipeline.

## HTML Structure, Semantics & SEO Assessment

The live site has a solid semantic baseline and a shared metadata path that keeps the public pages consistent.

Current strengths:

- `includes/header.navbar.php` centralizes page title handling, meta description output, canonical links, `lang="en"`, and Open Graph basics
- The live routes use shared `header`, `nav`, `main`, and `footer` landmarks
- Each public page exposes a single `h1`
- The site includes a skip link for keyboard navigation
- Image calls consistently pass alt text through the helper layer
- The content structure is clear, readable, and mostly section-driven rather than div-driven

Current gaps:

- The shared head output includes `og:type`, `og:title`, `og:description`, and `og:url`, but there is no `og:image`
- `index.php` and `Pages/Contact-Us.php` repeat some of the same user-facing content: emergency contacts, location, office hours, and contact intent. That is not broken HTML, but it does create more places to update later
- The business inquiry form in `Pages/Business.php` has server-side validation feedback, but its controls do not use simple HTML-level affordances such as `required`, `aria-invalid`, or `aria-describedby`. That makes the form harder to understand quickly in DevTools and less explicit for assistive technology
- The Business page also mixes stable city-controlled content with more volatile reference material such as transport rates, communication fees, courier rates, and tax-reference summaries. That content is harder to keep accurate and is a weaker fit for a static local-government page

## CSS Maintainability, Responsiveness & Cross-Browser Styling Assessment

The authored CSS surface is small and mostly centralized, which is good for a beginner-first site.

Current strengths:

- `CSS/index.tailwind.input.css` is the real authored stylesheet and stays relatively compact
- `CSS/index.tailwind.min.css` is the single runtime stylesheet, which keeps delivery simple
- Shared classes such as `hero-pattern`, `glass-card`, `page-details`, `page-list`, `page-table`, and `document-item` reduce repeated styling logic across pages
- Responsive tables are wrapped with `overflow-x-auto`, which helps prevent layout breakage on smaller screens
- Global reduced-motion handling is present
- The active CSS avoids large browser-specific hacks and sticks to practical layout patterns

Current weaknesses:

- `surface-noise` is used in `index.php` but is not defined in the authored or generated stylesheet
- `Pages/Tourism.php` contains its own inline `<style>` block for page-specific loading skeletons and see-more behavior. That makes Tourism a separate styling system inside an otherwise shared CSS approach
- The generated CSS workflow is not beginner-reproducible from the repo alone. The project has a Tailwind source file and config file, but no `package.json` and no documented command explaining how the minified CSS is produced
- The image pipeline creates many nested responsive variant folders. That does not directly break rendering, but it increases repository noise and makes asset ownership less obvious for junior developers

## JavaScript Logic, Function Complexity & Compatibility Assessment

The runtime JavaScript footprint is small and mostly browser-safe. That is one of the cleaner parts of the current frontend.

Current strengths:

- Shared site behavior lives mainly in the footer script, which handles the menu and Manila time display with standard DOM APIs
- The site is mostly server-rendered and content-first, so pages remain understandable without a heavy client-side state model
- There are no obvious heavy scroll listeners or framework-style abstractions in the live runtime code
- Most routes have no page-specific JavaScript at all

Current complexity and compatibility concerns:

- `Pages/Tourism.php` is the only route with a substantial page-specific enhancement layer. It mixes inline CSS state classes, loading skeleton logic, image-loaded state handling, and see-more toggles in one file
- The Tourism enhancement path depends on several custom `data-*` hooks and class-state transitions. That is still compatible browser code, but it is much less beginner-readable than the rest of the site
- The footer script is already the global behavior center, so Tourism's separate inline behavior path creates a second style of interaction code in the project
- `Pages/Business.php` keeps validation on the server side, which is safe and simple, but the markup does not expose the same validation state through basic HTML attributes that would make debugging easier in the browser

Overall, the JavaScript story is healthy for compatibility and performance. The cleanup goal is not to remove all JS. It is to keep the site close to its current low-JS baseline by simplifying the one page that has become noticeably more complex than the rest.

## Refactor & Cleanup Action Plan (Priority-Ordered)

1. Remove redundant wrappers and duplicated static data first. Delete `tel_href()` and standardize on `imus_phone_href()`. Move shared contact and Facebook constants into one obvious source of truth so `index.php` and `Pages/Contact-Us.php` stop maintaining the same values separately.
2. Reuse one shared document-scanning path. Refactor `Pages/Services.php` so the citizen-charter listing is built on the same shared document helper approach already used by `Pages/Downloadable-Forms.php` and `Pages/Full-Disclosure.php`.
3. Simplify or remove Tourism's page-specific enhancement layer where plain HTML and shared CSS are enough. Prioritize removing the loading skeleton system and reducing custom class-state behavior if the page still reads well without it.
4. Trim volatile business-reference content. Keep stable city-controlled guidance, but reduce or externalize content that is likely to age quickly, especially rates, fee tables, and general tax-reference summaries.
5. Reduce the public complexity of `includes/image-helpers.php`. Keep the responsive image pipeline, but simplify helper naming and the number of concepts a beginner must understand before changing one image output line.
6. Fix low-cost clarity issues in place. Remove the undefined `surface-noise` class or define it explicitly, and add simple form accessibility attributes in `Pages/Business.php` so the markup reflects server validation more clearly.
7. Make the build path understandable. Either document the Tailwind and responsive-image build prerequisites directly in the repo or simplify the workflow so a beginner can tell how `CSS/index.tailwind.min.css` and `IMG/optimized/responsive-manifest.json` are regenerated.
8. Keep asset deletion conservative. Only remove images, generated artifacts, or folders after confirming they are not referenced by current PHP templates, current directory-scan logic, or the active responsive image manifest workflow.
