<?php
/**
 * Footer Include
 * This file contains the footer for all pages
 */
?>

    <!-- Footer -->
    <footer class="footer-custom mt-0 pt-0">
        <div class="container py-5">
            <div class="row align-items-center gy-4">
                <div class="col-12 col-md-4 mb-4 mb-md-0 text-center text-md-start">
                    <img src="/IMG/seal_imus_sm100.png" alt="City Seal" class="img-fluid mb-3" style="max-width: 90px;">
                    <p class="mb-2 small text-white-50">
                        The Official Website of the City of Imus<br>
                        Maintained by the City Information Office
                    </p>
                    <a href="https://www.facebook.com/CityofImus" target="_blank" class="btn btn-success btn-sm rounded-pill px-3 mb-2">
                        <i class="bi bi-facebook me-1"></i> Facebook Page
                    </a>
                </div>
                <div class="col-6 col-md-2">
                    <h6 class="fw-bold text-white mb-3">Site Map</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= e(base_url('HTML/Full-disclosure.html')) ?>" class="footer-link">Full Disclosures</a></li>
                        <li><a href="#" class="footer-link">Bids & Awards</a></li>
                        <li><a href="<?= e(base_url('Pages/AboutImus.php#City-Government')) ?>" class="footer-link">City Mayor</a></li>
                        <li><a href="<?= e(base_url('Pages/AboutImus.php#City-Government')) ?>" class="footer-link">City Council</a></li>
                        <li><a href="<?= e(base_url('index.php#latest-news')) ?>" class="footer-link">News</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h6 class="fw-bold text-white mb-3">Government Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="https://www.officialgazette.gov.ph/" target="_blank" class="footer-link">Official Gazette</a></li>
                        <li><a href="https://www.gov.ph/the-government/directory-of-departments-and-agencies/" target="_blank" class="footer-link">Directory</a></li>
                        <li><a href="https://www.officialgazette.gov.ph/calendar/" target="_blank" class="footer-link">Calendar</a></li>
                        <li><a href="https://op-proper.gov.ph/" target="_blank" class="footer-link">Office of the President</a></li>
                        <li><a href="http://www.senate.gov.ph/" target="_blank" class="footer-link">Senate</a></li>
                        <li><a href="https://www.congress.gov.ph/" target="_blank" class="footer-link">House of Representatives</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-3 text-center text-md-end">
                    <h6 class="fw-bold text-white mb-3">Connect</h6>
                    <div class="d-flex justify-content-center justify-content-md-end gap-3 mb-2">
                        <a href="https://www.facebook.com/CityofImus" target="_blank" aria-label="Facebook" class="footer-social">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="#" aria-label="Twitter" class="footer-social">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="#" aria-label="Instagram" class="footer-social">
                            <i class="bi bi-instagram"></i>
                        </a>
                    </div>
                    <small class="text-white-50">&copy; 2025 City of Imus</small>
                </div>
            </div>
            <hr class="border-secondary my-4">
            <div class="row">
                <div class="col text-center small text-white-50">
                    All Rights Reserved &nbsp;|&nbsp; 2025 Terms of Use and Privacy Policy
                </div>
            </div>
        </div>
        <style>
            .footer-custom {
                background-color: #00489a;
                color: #fff;
                font-size: 1rem;
                letter-spacing: 0.01em;
            }
            .footer-custom h6 {
                letter-spacing: 0.5px;
                font-size: 1.1rem;
            }
            .footer-link {
                color: #e0e0e0;
                text-decoration: none;
                display: block;
                padding: 2px 0;
                transition: color 0.15s;
                font-size: 0.97rem;
            }
            .footer-link:hover, .footer-link:focus {
                color: #18a54a;
                text-decoration: underline;
            }
            .footer-social {
                color: #fff;
                font-size: 1.5rem;
                transition: color 0.15s;
                display: inline-block;
            }
            .footer-social:hover, .footer-social:focus {
                color: #18a54a;
            }
            .footer-custom .btn-success {
                background: #18a54a;
                border: none;
            }
            .footer-custom .btn-success:hover, .footer-custom .btn-success:focus {
                background: #146c36;
            }
            @media (max-width: 767.98px) {
                .footer-custom .container {
                    padding-left: 1rem !important;
                    padding-right: 1rem !important;
                }
                .footer-custom .row > div {
                    text-align: center !important;
                }
                .footer-custom .text-md-end {
                    text-align: center !important;
                }
            }
        </style>
    </footer>
    <!-- Footer -->
    <!-- SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js" integrity="sha512-j12pXc2gXZL/JZw5Mhi6LC7lkiXL0e2h+9ZWpqhniz0DkDrO01VNlBrG3LkPBn6DgG2b8CDjzJT+lxfocsS1Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>
