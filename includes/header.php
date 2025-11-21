<?php
// Determine base path based on script location
$current_script = $_SERVER['PHP_SELF'];
$basePath = '';
if (strpos($current_script, '/pages/') !== false) {
    $basePath = '../';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Real Touch Finance</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo $basePath; ?>assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>

    <!-- ===== Header Section ===== -->
    <header>
        <!-- Top Bar -->
        <div class="header-top">
            <div class="container top-center">
                <div class="contact-info-left">
                    <a href="mailto:care@realtouchfinance.com">
                        <i class="fas fa-envelope"></i> care@realtouchfinance.com
                    </a>
                    <a href="tel:+919876543210">
                        <i class="fas fa-phone-alt"></i> +91 98765 43210
                    </a>
                    <span>
                        <i class="fas fa-map-marker-alt"></i> 1st Street, Nandanam, Chennai - 600035
                    </span>
                </div>
            </div>
        </div>


        <!-- Main Navigation -->
        <nav class="navbar main-nav">
            <div class="container d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <a href="<?php echo $basePath; ?>index.php" class="navbar-brand d-flex align-items-center">
                    <img src="<?php echo $basePath; ?>assets/images/site_logo.png" alt="Logo" class="img-fluid" />
                </a>

                <!-- Nav Menu -->
                <ul class="navbar-nav d-flex align-items-center list-unstyled mb-0 gap-3">
                    <li><a href="<?php echo $basePath; ?>index.php">Home</a></li>

                    <li class="nav-item-dropdown">
                        <a href="<?php echo $basePath; ?>products.php">Products <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/personal-loan.php">Personal Loan</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/personal-loan-education.php">Personal Loan for Education</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/lap.php">LAP</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/secured-business-loan.php">Secured Business Loan</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/structured-finance.php">Structured Finance</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/emi-calculator.php">EMI Calculator</a></li>
                        </ul>
                    </li>

                    <li class="nav-item-dropdown">
                        <a href="<?php echo $basePath; ?>partners.php">For Partners <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/join-us.php">Join Us</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/partner-portfolio.php">Partner’s & Portfolio Details</a></li>
                        </ul>
                    </li>

                    <li class="nav-item-dropdown">
                        <a href="<?php echo $basePath; ?>about.php">About Us <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/overview.php">Overview</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/company-profile.php">Company Profile</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/vision-mission.php">Vision & Mission</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/board-of-directors.php">Board of Directors</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo $basePath; ?>pages/investor-info.php">Investor Info</a></li>

                    <li class="nav-item-dropdown">
                        <a href="<?php echo $basePath; ?>career.php">Career <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/job-vacancy.php">Job Vacancy</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/job-apply.php">Job Apply</a></li>
                        </ul>
                    </li>

                    <li class="nav-item-dropdown">
                        <a href="<?php echo $basePath; ?>news-events.php">News & Events <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu list-unstyled">
                            <li><a href="<?php echo $basePath; ?>pages/news.php">News</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/events.php">Events</a></li>
                            <li><a href="<?php echo $basePath; ?>pages/gallery.php">Gallery</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo $basePath; ?>contact.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
    </header>