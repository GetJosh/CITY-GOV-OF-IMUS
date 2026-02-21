<?php
/**
 * Header and Navbar Include
 * This file contains the header and navigation bar for all pages
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/IMG/seal_imus_sm100.png">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | City of Imus' : 'City of Imus'; ?></title>
</head>
<body>
    <!-- Header -->
    <header>
        <div id="datetime"></div>

        <script>
        function updateDateTime() {
          const now = new Date();

          const optionsDate = {
            timeZone: 'Asia/Manila',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
          };

          const optionsTime = {
            timeZone: 'Asia/Manila',
            hour: 'numeric',
            minute: '2-digit',
            second: '2-digit',
            hour12: true
          };

          const formattedDate = now.toLocaleString('en-PH', optionsDate);
          const formattedTime = now.toLocaleString('en-PH', optionsTime);

          document.getElementById('datetime').textContent = formattedDate + " | " + formattedTime;
        }

        setInterval(updateDateTime, 1000);
        updateDateTime();
        </script>

        <div class="header">
            <div class="header-nav">
                <nav>
                    <ul>
                        <li><a href="./Full-disclosure.html" class="full-disclosures">Full Disclosures</a></li>
                        <li><a href="./Downloadable-forms.html">Downloadable Forms</a></li>
                        <li><a href="./Contact-Us.html">Contact Us</a></li>
                        <li>
                            <a href="https://www.facebook.com/alexladvincula" target="_blank" aria-label="Facebook">
                                <i class="bi bi-facebook" style="font-size: 1rem"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm sticky-top py-0">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="../index.php">
                <img src="/IMG/Logo_City_Government_of_Imuss.png" alt="City of Imus" height="54" class="me-2" style="background:rgba(255,255,255,0.85); border-radius:8px; padding:2px 8px;">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-semibold" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 fw-semibold" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Imus
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="./AboutImus.html#City-Profile">City Profile</a></li>
                            <li><a class="dropdown-item" href="./AboutImus.html#City-Government">City Government</a></li>
                            <li><a class="dropdown-item" href="./AboutImus.html#Brgy-Officials">Barangay Officials</a></li>
                            <li><a class="dropdown-item" href="./AboutImus.html#History">History</a></li>
                            <li><a class="dropdown-item" href="./AboutImus.html#Past-Mayors">Past Mayors</a></li>
                            <li><a class="dropdown-item" href="./AboutImus.html#Dept-and-Units">Departments and Units</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 fw-semibold" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="./Services.html#City-Public-Library">City Public Library</a></li>
                            <li><a class="dropdown-item" href="./Services.html#Assistance">Assistance</a></li>
                            <li><a class="dropdown-item" href="./Services.html#Citizens-Charter">Citizen's Charter</a></li>
                            <li><a class="dropdown-item" href="./Services.html#EBOSS">EBOSS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 fw-semibold" href="./Tourism.html" id="tourismDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tourism
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="tourismDropdown">
                            <li><a class="dropdown-item" href="./Tourism.html">History and Culture</a></li>
                            <li><a class="dropdown-item" href="./Tourism.html#Visiting-Imus">Visiting Imus</a></li>
                            <li><a class="dropdown-item" href="./Tourism.html#Heroes-of-Imus">Heroes of Imus</a></li>
                            <li><a class="dropdown-item" href="./Tourism.html#Notable-Persons">Notable Persons</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle px-3 fw-semibold" href="./Business.html" id="businessDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Business
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="businessDropdown">
                            <li><a class="dropdown-item" href="./Business.php#Why-invest-in-Imus">Why Invest in Imus</a></li>
                            <li><a class="dropdown-item" href="./Business.php#Accomodation">Accomodation</a></li>
                            <li><a class="dropdown-item" href="./Business.php#Communication">Communication</a></li>
                            <li><a class="dropdown-item" href="./Business.php#Courier-and-Cargo">Courier and Cargo</a></li>
                            <li><a class="dropdown-item" href="./Business.php#National-Taxes">National Taxes</a></li>
                            <li><a class="dropdown-item" href="./Business.php#Transportation">Transportation</a></li>
                            <li><a class="dropdown-item" href="./Business.php#Utilities">Utilities</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ms-lg-3 d-none d-lg-block">
                        <a href="https://www.facebook.com/CityofImus" target="_blank" class="btn btn-outline-light btn-sm rounded-pill px-3">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 fw-semibold" href="./Employees-Hub.html">Employees</a>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            .navbar {
                background-color: #00489a !important;
            }
            .navbar .navbar-brand img {
                box-shadow: 0 2px 8px rgba(5,55,116,0.10);
            }
            .navbar-nav .nav-link {
                color: #fff !important;
                transition: background 0.15s, color 0.15s;
                border-radius: 6px;
                margin: 0 2px;
            }
            .navbar-nav .nav-link.active, .navbar-nav .nav-link:focus, .navbar-nav .nav-link:hover {
                background: rgba(24,165,74,0.18);
                color: #18a54a !important;
            }
            .navbar-nav .dropdown-menu {
                min-width: 220px;
                border-radius: 10px;
                border: none;
                background: #fff;
                margin-top: 8px;
                box-shadow: 0 6px 24px rgba(5,55,116,0.10);
            }
            .navbar-nav .dropdown-item {
                color: #053774;
                font-weight: 500;
                transition: background 0.12s, color 0.12s;
                border-radius: 6px;
            }
            .navbar-nav .dropdown-item:hover, .navbar-nav .dropdown-item:focus {
                background: #18a54a;
                color: #fff;
            }
            .navbar .btn-outline-light {
                border-color: #fff;
                color: #fff;
                font-weight: 600;
                transition: background 0.15s, color 0.15s;
            }
            .navbar .btn-outline-light:hover, .navbar .btn-outline-light:focus {
                background: #18a54a;
                color: #fff;
                border-color: #18a54a;
            }
            @media (max-width: 991.98px) {
                .navbar-brand span {
                    display: none !important;
                }
                .navbar-nav .nav-link {
                    padding-left: 1rem !important;
                    padding-right: 1rem !important;
                }
                .navbar .btn-outline-light {
                    margin-top: 1rem;
                    display: block;
                    width: 100%;
                }
                .navbar-nav .dropdown-menu {
                    margin-top: 0;
                }
            }
            /* Dropdown on hover for desktop */
            @media (min-width: 992px) {
                .navbar-nav .dropdown:hover .dropdown-menu {
                    display: block;
                }
            }
        </style>
    </nav>
    <!-- Navbar -->
