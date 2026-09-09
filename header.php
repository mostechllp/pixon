<?php
// Detect current page for active nav highlighting
$currentPage = basename($_SERVER['PHP_SELF']);

$servicesPages = [
    'services.php',
    'installation.php',
    'indoor.php',
    'outdoor.php',
    'rental.php',
    'av-solutions.php',
    'retail-display.php',
    'customized-led-screens.php',
    'immersive-projection.php',
    'content-creation.php'
];
$productsPages = [
    'products.php',
    'all-products.php',
    'indoor-products.php',
    'outdoor-products.php',
    'innovative-led-screens.php',
    'lcd-kiosk.php',
    'indoor-led-screen.php',
    'oled-series.php',
    'indoor-cob.php',
    'indoor-customised-led.php',
    'outdoor-led-screen.php',
    'outdoor-customised-led.php',
    'outdoor-flexible-led.php',
    'outdoor-mesh-screen.php',
    'smart-classroom-led.php',
    'interactive-conference-led.php',
    'kinetic-led-screen.php',
    'glass-transparent-display-solutions.php',
    'transparent-film-led.php',
    'customized-led-products.php',
    'spherical-led-screen.php',
    'video-wall.php',
    'kiosk-poster.php',
    'floor-and-roll-led-display.php'
];
$projectsPages = ['projects.php', 'news.php'];

// $projectsPages = ['projects.php', 'news.php', 'blog.php', 'blogs.php', 'led-screen-company-dubai-tradeshow-display.php'];

function navClass($page, $target, $group = [])
{
    if ($page === $target || in_array($page, $group))
        return 'nav-link active';
    return 'nav-link';
}
function mobileNavClass($page, $target, $group = [])
{
    if ($page === $target || in_array($page, $group))
        return 'mobile-nav-link active';
    return 'mobile-nav-link';
}
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPW8N7BC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- ======================== HEADER ======================== -->
<header id="header">
    <div class="container">
        <div class="header-inner">
            <a aria-label="PIXON TECHNOLOGIES Home" class="logo" href="/">
                <img alt="PIXON TECHNOLOGIES Logo" class="logo-img" src="/assets/pixon-logo.webp" width="242" height="72" fetchpriority="high" decoding="async" />
            </a>
            <nav aria-label="Main navigation">
                <a class="<?= navClass($currentPage, 'index.php') ?>" href="/">Home</a>
                <a class="<?= navClass($currentPage, 'about.php') ?>" href="/about">About Us</a>
                <div class="nav-item-dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($currentPage, $servicesPages) ? 'active' : '' ?>"
                        href="/services">Services</a>
                    <div class="simple-dropdown">
                        <ul>
                            <li><a href="/services/installation-and-configuration">Installation &amp; Configuration</a></li>
                            <li><a href="/services/indoor-led-screens">Indoor LED Screen</a></li>
                            <li><a href="/services/outdoor-led-screens">Outdoor LED Screen</a></li>
                            <li><a href="/services/rental-led-screens">Rental LED Screen</a></li>
                            <li><a href="/services/av-solutions">AV Solutions</a></li>
                            <li><a href="/services/retail-display-solutions">Retail Display Solution</a></li>
                            <li><a href="/services/customized-led-screens">Customized LED Screens</a></li>
                            <li><a href="/services/immersive-projection">Immersive Projection</a></li>
                            <li><a href="/services/content-creation">Content Creation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="nav-item-dropdown">
                    <a class="nav-link dropdown-toggle <?= in_array($currentPage, $productsPages) ? 'active' : '' ?>"
                        href="/products">Products</a>
                    <div class="mega-menu">
                        <div class="mega-menu-grid">
                            <!-- Indoor Products -->
                            <div class="mega-column">
                                <h4 class="mega-title">Indoor Products</h4>
                                <ul class="mega-list">
                                    <li><a href="/products/indoor-led-screen">Indoor LED Screen</a></li>
                                    <li><a href="/products/oled-series">OLED Series</a></li>
                                    <li><a href="/products/indoor-cob">Indoor COB (Chip-On-Board)</a></li>
                                </ul>
                            </div>
                            <!-- Outdoor Products -->
                            <div class="mega-column">
                                <h4 class="mega-title">Outdoor Products</h4>
                                <ul class="mega-list">
                                    <li><a href="/products/outdoor-led-screen">Outdoor LED Screen</a></li>
                                </ul>
                            </div>
                            <!-- Innovative LED Screens -->
                            <div class="mega-column">
                                <h4 class="mega-title">Innovative LED Screens</h4>
                                <ul class="mega-list">
                                    <li><a href="/products/outdoor-mesh-screen">Mesh Transparent Screen</a></li>
                                    <li><a href="/products/smart-classroom-led">Smart Classroom LED System</a></li>
                                    <li><a href="/products/interactive-conference-led">Interactive Conference LED</a></li>
                                    <li><a href="/products/kinetic-led-screen">Kinetic LED Screen</a></li>
                                    <li><a href="/products/transparent-display">Glass Transparent Display Solutions</a></li>
                                    <li><a href="/products/transparent-film-led">Transparent LED Screen</a></li>
                                    <li><a href="/products/customized-led-screens">Customized LED Screens</a></li>
                                    <li><a href="/products/floor-and-roll-led-display">Floor &amp; Roll LED Display</a></li>
                                </ul>
                            </div>
                            <!-- LCD & Kiosk -->
                            <div class="mega-column">
                                <h4 class="mega-title">LCD &amp; Kiosk</h4>
                                <ul class="mega-list">
                                    <li><a href="/products/kiosk-poster">Kiosk &amp; Poster Screen</a></li>
                                </ul>
                            </div>
                            <!-- Right Promo Card -->
                            <div class="mega-promo-card">
                                <div class="promo-content">
                                    <div class="promo-logo">
                                        <svg fill="none" height="40" viewBox="0 0 100 100" width="40"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M48 50C48 50 15 45 15 25C15 10 35 15 45 35C48 40 48 50 48 50Z"
                                                fill="url(#left-wing-grad)"></path>
                                            <path d="M48 50C48 50 15 55 15 75C15 90 35 85 45 65C48 60 48 50 48 50Z"
                                                fill="url(#left-wing-grad)"></path>
                                            <path d="M52 50C52 50 85 45 85 25C85 10 65 15 55 35C52 40 52 50 52 50Z"
                                                fill="url(#right-wing-grad)"></path>
                                            <path d="M52 50C52 50 85 55 85 75C85 90 65 85 55 65C52 60 52 50 52 50Z"
                                                fill="url(#right-wing-grad)"></path>
                                            <defs>
                                                <linearGradient gradientUnits="userSpaceOnUse" id="left-wing-grad"
                                                    x1="15" x2="48" y1="20" y2="80">
                                                    <stop offset="0%" stop-color="#FF5722"></stop>
                                                    <stop offset="100%" stop-color="#FFC107"></stop>
                                                </linearGradient>
                                                <linearGradient gradientUnits="userSpaceOnUse" id="right-wing-grad"
                                                    x1="52" x2="85" y1="20" y2="80">
                                                    <stop offset="0%" stop-color="#2196F3"></stop>
                                                    <stop offset="100%" stop-color="#00BCD4"></stop>
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </div>
                                    <h3 class="promo-heading">Need help to choose the right LED Solution? Feel free
                                        contact us</h3>
                                    <div class="promo-arrow">
                                        <svg fill="none" height="50" viewBox="0 0 100 70" width="70"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10,10 C45,-10 65,40 35,50 C20,55 30,35 60,15 C70,10 85,25 70,45"
                                                fill="none" stroke="rgba(255,255,255,0.7)" stroke-linecap="round"
                                                stroke-width="2.5"></path>
                                            <path d="M60,40 L70,45 L75,35" fill="none" stroke="rgba(255,255,255,0.7)"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5">
                                            </path>
                                        </svg>
                                    </div>
                                    <a class="btn-promo-cta" href="/contact">
                                        <span class="promo-cta-circle">
                                            <svg fill="none" height="12" stroke="currentColor" stroke-width="3"
                                                viewBox="0 0 24 24" width="12">
                                                <line x1="5" x2="19" y1="12" y2="12"></line>
                                                <polyline points="12 5 19 12 12 19"></polyline>
                                            </svg>
                                        </span>
                                        <span class="promo-cta-text">Get in touch</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="<?= navClass($currentPage, 'projects.php', $projectsPages) ?>"
                    href="/projects">Projects</a>
                <a class="<?= navClass($currentPage, 'contact.php') ?>" href="/contact">Contact</a>
            </nav>
            <div class="header-cta">
                <a aria-label="Our Portfolio" class="btn header-cta" href="/projects">Our Portfolio</a>
            </div>
            <button aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle mobile menu" class="hamburger">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
</header>
<!-- ======================== MOBILE MENU ======================== -->
<nav aria-label="Mobile navigation" id="mobile-menu">
    <div class="mobile-menu-header">
        <span class="mobile-menu-title">Menu</span>
        <button class="mobile-menu-close" aria-label="Close menu" id="mobile-menu-close-btn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M18 6L6 18M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <ul class="mobile-nav">
        <li><a class="<?= mobileNavClass($currentPage, 'index.php') ?>" href="/">Home</a></li>
        <li><a class="<?= mobileNavClass($currentPage, 'about.php') ?>" href="/about">About Us</a></li>
        <li class="mobile-nav-item-dropdown">
            <button aria-expanded="false" class="mobile-nav-link mobile-dropdown-toggle">
                Services
                <svg class="dropdown-chevron" fill="none" height="12" stroke="currentColor" stroke-width="3"
                    viewBox="0 0 24 24" width="12">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <ul class="mobile-submenu <?= in_array($currentPage, $servicesPages) ? 'open' : '' ?>">
                <li><a class="mobile-submenu-link" href="/services/installation-and-configuration">Installation &amp; Configuration</a></li>
                <li><a class="mobile-submenu-link" href="/services/indoor-led-screens">Indoor LED Screen</a></li>
                <li><a class="mobile-submenu-link" href="/services/outdoor-led-screens">Outdoor LED Screen</a></li>
                <li><a class="mobile-submenu-link" href="/services/rental-led-screens">Rental LED Screen</a></li>
                <li><a class="mobile-submenu-link" href="/services/av-solutions">AV Solutions</a></li>
                <li><a class="mobile-submenu-link" href="/services/retail-display-solutions">Retail Display Solution</a></li>
                <li><a class="mobile-submenu-link" href="/services/customized-led-screens">Customized LED Screens</a></li>
                <li><a class="mobile-submenu-link" href="/services/immersive-projection">Immersive Projection</a></li>
                <li><a class="mobile-submenu-link" href="/services/content-creation">Content Creation</a></li>
            </ul>
        </li>
        <li class="mobile-nav-item-dropdown">
            <button aria-expanded="false" class="mobile-nav-link mobile-dropdown-toggle">
                Products
                <svg class="dropdown-chevron" fill="none" height="12" stroke="currentColor" stroke-width="3"
                    viewBox="0 0 24 24" width="12">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </button>
            <ul class="mobile-submenu <?= in_array($currentPage, $productsPages) ? 'open' : '' ?>">
                <li class="mobile-submenu-group">
                    <span class="mobile-submenu-title">Indoor Products</span>
                    <ul>
                        <li><a class="mobile-submenu-link" href="/products/indoor-led-screen">Indoor LED Screen</a></li>
                        <li><a class="mobile-submenu-link" href="/products/oled-series">OLED Series</a></li>
                        <li><a class="mobile-submenu-link" href="/products/indoor-cob">Indoor COB (Chip-On-Board)</a></li>
                    </ul>
                </li>
                <li class="mobile-submenu-group">
                    <span class="mobile-submenu-title">Outdoor Products</span>
                    <ul>
                        <li><a class="mobile-submenu-link" href="/products/outdoor-led-screen">Outdoor LED Screen</a></li>
                    </ul>
                </li>
                <li class="mobile-submenu-group">
                    <span class="mobile-submenu-title">Innovative LED Screens</span>
                    <ul>
                        <li><a class="mobile-submenu-link" href="/products/outdoor-mesh-screen">Mesh Transparent Screen</a></li>
                        <li><a class="mobile-submenu-link" href="/products/smart-classroom-led">Smart Classroom LED System</a></li>
                        <li><a class="mobile-submenu-link" href="/products/interactive-conference-led">Interactive Conference LED</a></li>
                        <li><a class="mobile-submenu-link" href="/products/kinetic-led-screen">Kinetic LED Screen</a></li>
                        <li><a class="mobile-submenu-link" href="/products/transparent-display">Glass Transparent Display Solutions</a></li>
                        <li><a class="mobile-submenu-link" href="/products/transparent-film-led">Transparent Film LED</a></li>
                        <li><a class="mobile-submenu-link" href="/products/customized-led-screens">Customized LED Screens</a></li>
                        <li><a class="mobile-submenu-link" href="/products/floor-and-roll-led-display">Floor &amp; Roll LED Display</a></li>
                    </ul>
                </li>
                <li class="mobile-submenu-group">
                    <span class="mobile-submenu-title">LCD &amp; Kiosk</span>
                    <ul>
                        <li><a class="mobile-submenu-link" href="/products/kiosk-poster">Kiosk &amp; Poster Screen</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a class="<?= mobileNavClass($currentPage, 'projects.php', $projectsPages) ?>"
                href="/projects">Projects</a></li>
        <li><a class="<?= mobileNavClass($currentPage, 'contact.php') ?>" href="/contact">Contact Us</a></li>
    </ul>
    <div class="mobile-menu-cta">
        <a aria-label="Our Portfolio" class="btn btn-primary" href="/projects">Our Portfolio</a>
    </div>
</nav>