<?php
$og_protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
$og_host = $_SERVER['HTTP_HOST'] ?? 'www.pixonglobal.com';
$og_base_url = $og_protocol . $og_host;
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NPW8N7BC');</script>
  <!-- End Google Tag Manager -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-1DXF42V841"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-1DXF42V841');
  </script>
  <meta charset="utf-8" />
  <link rel="canonical" href="<?php echo $og_base_url; ?>/" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="google-site-verification" content="VEnfiFGWSLn_FEkppFRdk3APHzhlh6IqBdAKGGfYptQ" />
  <meta
    content="Next-generation LED &amp; AV solutions across the Middle East &amp; Africa. We design, supply, install and service LED screens, digital displays and AV systems."
    name="description" />
  <meta
    content="PIXON TECHNOLOGIES, LED screen Middle East &amp; Africa, AV Solutions Dubai, outdoor LED screen Riyadh, digital signage Middle East &amp; Africa, kinetic displays"
    name="keywords" />
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" />
  <meta name="googlebot" content="index, follow" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="LED Screen &amp; AV Solutions Company - Pixon Global Technologies" />
  <meta property="og:url" content="<?php echo $og_base_url; ?>/" />
  <meta property="og:image" content="<?php echo $og_base_url; ?>/assets/ogcard.webp" />
  <meta property="og:image:secure_url" content="<?php echo $og_base_url; ?>/assets/ogcard.webp" />
  <meta property="og:image:type" content="image/webp" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:alt" content="Pixon Technologies LLC" />
  <meta property="og:description" content="Next-generation LED &amp; AV solutions across the Middle East &amp; Africa. We design, supply, install and service LED screens, digital displays and AV systems." />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="LED Screen &amp; AV Solutions Company - Pixon Global Technologies" />
  <meta name="twitter:site" content="@https://www.pixonglobal.com/" />
  <meta name="twitter:description" content="Next-generation LED &amp; AV solutions across the Middle East &amp; Africa. We design, supply, install and service LED screens, digital displays and AV systems." />
  <meta name="twitter:image" content="<?php echo $og_base_url; ?>/assets/ogcard.webp" />
  <meta name="twitter:image:alt" content="Pixon Technologies LLC" />
  <link rel="image_src" href="<?php echo $og_base_url; ?>/assets/ogcard.webp" />
  <meta content="#18315B" name="theme-color" />
  <!-- Favicon -->
  <link href="assets/favicon.png" rel="icon" type="image/png" />
  <link href="assets/favicon.png" rel="apple-touch-icon" />
  <title>LED Screen &amp; AV Solutions Company - Pixon Global Technologies</title>
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <link href="style.css?v=2" rel="stylesheet" />
  <!-- Hero video: avoid GPU translate layers that soften clarity -->
  <style>
    #hero-bg-video {
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      transform: none !important;
      -webkit-transform: none !important;
      will-change: auto;
      backface-visibility: visible;
      image-rendering: -webkit-optimize-contrast;
    }

    .hero-bg {
      contain: paint;
    }

    .hero-vignette {
      background: radial-gradient(ellipse at 60% 50%,
          transparent 35%,
          rgba(2, 6, 23, 0.2) 65%,
          rgba(2, 6, 23, 0.5) 100%);
    }
  </style>

  <style>
    /* Bento CSS Override */
    .bento-overlay {
      position: absolute;
      inset: auto 0 0 0;
      height: 60%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0) 100%);
      pointer-events: none;
      z-index: 1;
    }

    .bento-title {
      position: absolute;
      bottom: 20px;
      left: 24px;
      color: #ffffff !important;
      font-size: 18px;
      font-weight: 600;
      margin: 0;
      z-index: 2;
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);
    }

    .brand-item img{
      height : 75px;
    }
  </style>

  <!-- Structured Data: WebSite Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "WebSite",
    "name": "Pixon Technologies LLC",
    "url": "https://www.pixonglobal.com/",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "{search_term_string}",
      "query-input": "required name=search_term_string"
    }
  }
  </script>

  <!-- Structured Data: LocalBusiness Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Pixon Technologies LLC",
    "image": "https://www.pixonglobal.com/assets/pixon-logo.webp",
    "@id": "",
    "url": "https://www.pixonglobal.com/",
    "telephone": "+971 58 106 5959",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "1st Floor, Al Awadhi Building, Deira",
      "addressLocality": "Dubai",
      "postalCode": "",
      "addressCountry": "AE"
    }  
  }
  </script>

  <style>
.stats-premium-row::-webkit-scrollbar {
              display: none;
            }

            .stats-premium-row {
              display: flex;
              flex-wrap: nowrap;
              justify-content: flex-start;
              gap: 16px;
              margin-bottom: 60px;
              overflow-x: auto;
              padding: 10px 16px 20px;
              -webkit-overflow-scrolling: touch;
              scrollbar-width: none;
            }

            @media (min-width: 1024px) {
              .stats-premium-row {
                justify-content: center;
                padding: 10px 4px 20px;
              }
            }
          

          #wp-stage {
            position: relative;
            width: 100%;
            aspect-ratio: 1600/650;
            background: radial-gradient(circle at 50% 50%, #0c184c 0%, #060c2b 100%);
            overflow: hidden;
          }

          #wp-topbar {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #1a2fbf, #2f6bd8, #1a2fbf);
          }

          #dotmap {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            display: block;
          }

          .wp-title-wrap {
            position: absolute;
            top: 7%;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            align-items: center;
            gap: 12px;
            z-index: 10;
          }

          .wp-title-wrap h2 {
            font-size: clamp(22px, 2.8vw, 32px);
            font-weight: 600;
            color: #f4f8ff;
            letter-spacing: 0.2px;
            white-space: nowrap;
            margin: 0;
          }

          .wp-title-wrap h2 .wp-accent {
            background: linear-gradient(90deg, #8fe3ff, #38c6f4 60%, #2f8fe0);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            font-weight: 700;
          }

          .wp-sparkle {
            width: 20px;
            height: 20px;
            color: #38c6f4;
            animation: wptwinkle 2.6s ease-in-out infinite;
            flex: none;
          }

          .wp-sparkle.sm {
            width: 14px;
            height: 14px;
            animation-delay: .6s;
          }

          @keyframes wptwinkle {

            0%,
            100% {
              transform: scale(1);
              opacity: .85;
            }

            50% {
              transform: scale(1.25);
              opacity: 1;
            }
          }

          /* Hotspot Design */
          .wp-hotspot {
            position: absolute;
            z-index: 15;
            width: 2px;
            height: 2px;
            transform: translate(-50%, -50%);
          }

          .wp-hotspot-hitbox {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            pointer-events: auto;
            z-index: 5;
            transform: translate(-50%, -50%);
          }

          .wp-hotspot-core {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 8px;
            height: 8px;
            background-color: #38c6f4;
            border-radius: 50%;
            box-shadow: 0 0 10px #38c6f4, 0 0 20px rgba(56, 198, 244, 0.6);
            z-index: 2;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275), background-color 0.3s ease;
            pointer-events: none;
            transform: translate(-50%, -50%);
          }

          .wp-hotspot-pulse {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border: 1.5px solid rgba(56, 198, 244, 0.85);
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            animation: wppulse 2.4s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
          }

          .wp-hotspot-pulse-2 {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border: 1.5px solid rgba(56, 198, 244, 0.5);
            border-radius: 50%;
            opacity: 0;
            pointer-events: none;
            animation: wppulse 2.4s cubic-bezier(0.165, 0.84, 0.44, 1) infinite;
            animation-delay: 1.2s;
          }

          @keyframes wppulse {
            0% {
              transform: translate(-50%, -50%) scale(0.6);
              opacity: 0.9;
            }

            100% {
              transform: translate(-50%, -50%) scale(3.5);
              opacity: 0;
            }
          }

          /* Leader Line - Futuristic callout style */
          .wp-hotspot-line {
            position: absolute;
            bottom: 50%;
            left: 50%;
            width: 1.5px;
            height: 35px;
            background: linear-gradient(to top, #38c6f4 0%, rgba(56, 198, 244, 0) 100%);
            transform: translateX(-50%);
            transform-origin: bottom center;
            transition: height 0.4s cubic-bezier(0.25, 0.8, 0.25, 1), background 0.4s ease;
            pointer-events: none;
          }

          .wp-hotspot-text {
            position: absolute;
            bottom: calc(50% + 40px);
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            pointer-events: none;
            transition: transform 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
            text-align: center;
          }

          .wp-h-country {
            color: #8fe3ff;
            font-size: clamp(11px, 1.4vw, 13px);
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 2px;
            line-height: 1.1;
            margin-bottom: 4px;
            text-shadow: 0 0 10px rgba(56, 198, 244, 0.9), 0 2px 4px rgba(0, 0, 0, 1);
          }

          .wp-h-city {
            color: #ffffff;
            font-size: clamp(14px, 1.7vw, 16px);
            font-weight: 600;
            letter-spacing: 0.8px;
            line-height: 1.2;
            white-space: nowrap;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 1), 0 0 4px rgba(255, 255, 255, 0.5);
          }

          /* Alternate: Downward pointing leader lines */
          .wp-hotspot.wp-dir-down .wp-hotspot-line {
            bottom: auto;
            top: 50%;
            background: linear-gradient(to bottom, #38c6f4 0%, rgba(56, 198, 244, 0) 100%);
            transform-origin: top center;
          }

          .wp-hotspot.wp-dir-down .wp-hotspot-text {
            bottom: auto;
            top: calc(50% + 40px);
          }

          /* Hover & Active States */
          .wp-hotspot:hover .wp-hotspot-core,
          .wp-hotspot.active .wp-hotspot-core {
            transform: translate(-50%, -50%) scale(1.4);
            background-color: #ffffff;
            box-shadow: 0 0 15px #ffffff, 0 0 30px #38c6f4;
          }

          .wp-hotspot:hover .wp-hotspot-line,
          .wp-hotspot.active .wp-hotspot-line {
            height: 48px;
            background: linear-gradient(to top, #ffffff 0%, #38c6f4 100%);
          }

          .wp-hotspot.wp-dir-down:hover .wp-hotspot-line,
          .wp-hotspot.wp-dir-down.active .wp-hotspot-line {
            height: 48px;
            background: linear-gradient(to bottom, #ffffff 0%, #38c6f4 100%);
          }

          .wp-hotspot:hover .wp-hotspot-text,
          .wp-hotspot.active .wp-hotspot-text {
            transform: translate(-50%, -13px);
          }

          .wp-hotspot.wp-dir-down:hover .wp-hotspot-text,
          .wp-hotspot.wp-dir-down.active .wp-hotspot-text {
            transform: translate(-50%, 13px);
          }

          .wp-hotspot:hover .wp-h-city,
          .wp-hotspot.active .wp-h-city {
            color: #38c6f4;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.95), 0 0 6px rgba(56, 198, 244, 0.8);
          }

          /* Responsiveness adjustments */
          @media(max-width: 640px) {
            #wp-stage {
              aspect-ratio: 4/3;
            }

            .wp-h-country {
              font-size: 8px;
              letter-spacing: 1px;
            }

            .wp-h-city {
              font-size: 10px;
            }

            .wp-hotspot-line {
              height: 25px;
            }

            .wp-hotspot-text {
              bottom: 28px;
            }

            .wp-hotspot.wp-dir-down .wp-hotspot-text {
              top: 28px;
            }

            .wp-hotspot:hover .wp-hotspot-line,
            .wp-hotspot.active .wp-hotspot-line {
              height: 33px;
            }

            .wp-hotspot.wp-dir-down:hover .wp-hotspot-line,
            .wp-hotspot.wp-dir-down.active .wp-hotspot-line {
              height: 33px;
            }

            .wp-hotspot:hover .wp-hotspot-text,
            .wp-hotspot.active .wp-hotspot-text {
              transform: translate(-50%, -8px);
            }

            .wp-hotspot.wp-dir-down:hover .wp-hotspot-text,
            .wp-hotspot.wp-dir-down.active .wp-hotspot-text {
              transform: translate(-50%, 8px);
            }
          }
  </style>
</head>

<body class="watermarked-page">
  <?php include 'header.php'; ?>
  <main>
    <!-- ======================== HERO ======================== -->
    <section aria-label="Hero section" id="hero">
      <!-- Full-screen video background -->
      <div class="hero-bg">
        <video aria-hidden="true" autoplay="" id="hero-bg-video" loop="" muted="" playsinline="" preload="auto">
          <source src="assets/home-banner-video.mp4" type="video/mp4" />
        </video>
        <!-- Cinematic vignette: dark edges, clear centre so video shows through -->
        <div class="hero-vignette"></div>
      </div>
      <!-- Audio Toggle - bottom right -->
      <button aria-label="Toggle audio" class="btn-audio-toggle" id="hero-audio-toggle">
        <svg fill="none" height="20" id="audio-icon-muted" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="20">
          <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
          <line x1="23" x2="17" y1="9" y2="15"></line>
          <line x1="17" x2="23" y1="9" y2="15"></line>
        </svg>
        <svg fill="none" height="20" id="audio-icon-unmuted" stroke="currentColor" stroke-linecap="round"
          stroke-linejoin="round" stroke-width="2" style="display: none;" viewbox="0 0 24 24" width="20">
          <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
          <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
        </svg>
      </button>
      <!-- Main hero content — vertically and horizontally centered -->
      <div class="hero-content"
        style="position: absolute; left: 0; padding: 0 20px; top: 50%; bottom: auto; transform: translateY(-50%); text-align: center; display: flex; justify-content: center; width: 100%;">
        <div class="hero-inner" style="align-items: center; max-width: 100%;">
          <div class="hero-text" style="align-items: center; text-align: center;">
            <!-- Headline -->
            <h1 class="hero-title animate-fade-in-up delay-1"
              style="font-size: clamp(32px, 4.5vw, 52px); margin-bottom: 16px;">
              ILLUMINATE IN EVERY<br /><span class="hero-title-accent"
                style="color: white !important; -webkit-text-fill-color: white !important; background: none !important; text-shadow: 0px 4px 20px rgba(0,0,0,0.8), 0px 0px 40px rgba(0,0,0,0.6), 0px 0px 10px rgba(0,0,0,0.9) !important;">DIMENSION</span>
            </h1>
            <!-- CTAs -->
            <div class="hero-actions animate-fade-in-up delay-3" style="justify-content: center;">
              <a class="btn btn-primary" href="#solutions" style="padding: 10px 20px; font-size: 14px;">
                Explore Solutions
                <svg aria-hidden="true" fill="none" height="14" stroke="currentColor" stroke-linecap="round"
                  stroke-linejoin="round" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                  <line x1="5" x2="19" y1="12" y2="12"></line>
                  <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
              </a>
              <a class="btn-ghost-white" href="contact.php" style="padding: 10px 20px; font-size: 14px;" id="home-contact">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ======================== OUR CLIENTS TICKER ======================== -->
      <section aria-label="Our Clients" class="brands-marquee-section">
        <div class="marquee-header">
          <div class="marquee-subtitle">Our Clients</div>
          <h2 class="marquee-title">Loved by <span class="hero-title-accent">Industry Leaders</span></h2>
        </div>
        <div class="marquee-divider"></div>
        <div class="container marquee-container">
          <div class="marquee-wrap">
            <div class="marquee-track" role="list">
              <div class="marquee-group">
                <div class="brand-item brand-item-dubai" role="listitem"><img alt="Dubai Police" src="assets/logo-dubai-police.webp" /></div>
                <div class="brand-item brand-item-partner2" role="listitem"><img alt="Partner 2" src="assets/partner2.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 3" src="assets/partner3.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 4" src="assets/partner4.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 5" src="assets/partner5.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 6" src="assets/partner6.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 7" src="assets/partner7.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 8" src="assets/partner8.webp" /></div>
              </div>
              <div class="marquee-group" aria-hidden="true">
                <div class="brand-item brand-item-dubai" role="listitem"><img alt="Dubai Police Logo" src="assets/logo-dubai-police.webp" /></div>
                <div class="brand-item brand-item-partner2" role="listitem"><img alt="Partner 2 Logo" src="assets/partner2.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 3 Logo" src="assets/partner3.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 4 Logo" src="assets/partner4.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 5 Logo" src="assets/partner5.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 6 Logo" src="assets/partner6.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 7 Logo" src="assets/partner7.webp" /></div>
                <div class="brand-item" role="listitem"><img alt="Partner 8 Logo" src="assets/partner8.webp" /></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== ABOUT PREVIEW ======================== -->
      <section aria-labelledby="about-heading" class="section" id="about">
        <div aria-hidden="true" class="about-bg-glow">
          <div class="about-orb orb-blue"></div>
        </div>
        <div class="container">
          <div class="about-split-layout" style="align-items: stretch;">
            <!-- Left: Crop Showcase Visual -->
            <div class="about-visual-showcase reveal" style="align-items: stretch;">
              <div class="about-showcase-frame" style="height: 100%;">
                <img alt="PIXON TECHNOLOGIES Display Calibration Laboratory Preview" class="about-showcase-img"
                  src="assetss/home/indoor_ledscreen.webp" style="height: 100%; object-fit: cover;" />
                <div class="about-visual-overlay"></div>
                <!-- <div class="about-float-badge badge-top parallax-card" data-speed="1.0" style="top: 16px; left: 16px;">
                <span class="pulse-dot-orange"></span> Calibration HQ
              </div> -->
              </div>
            </div>
            <!-- Right: Story Summary & Discover CTA -->
            <div class="about-content-showcase reveal reveal-delay-2" style="justify-content: center;">
              <div>
                <div class="section-label">About PIXON TECHNOLOGIES</div>
                <h2 class="section-title" id="about-heading"
                  style="margin-bottom: 20px; font-size: clamp(26px, 4vw, 39px);">
                  <span>We Build Next Generation LED &</span><br /><span class="hero-title-accent">AV Tech
                    Experiences</span>
                </h2>
                <p class="about-story-text">
                  Supplying, designing, installing, commissioning, and servicing commercial indoor/outdoor LED screens,
                  digital
                  displays,
                  and complete professional audio-visual system integrations across the Middle East &amp; Africa.
                </p>
                <p class="about-story-text" style="margin-bottom: 30px;">
                  From supplying weatherproof high-brightness outdoor billboards and kinetic screens to
                  installing mission-critical command centers and executive boardrooms, we redefine visual
                  experiences.
                </p>
                <a class="btn btn-primary" href="/about">
                  Learn More About Us
                  <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5"
                    viewbox="0 0 24 24" width="16">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== SERVICES ======================== -->
      <section aria-labelledby="services-heading" class="section light-section" id="services">
        <div class="container">
          <header class="services-header">
            <div class="section-label reveal">Our Products &amp; Solutions</div>
            <h2 class="services-subheading reveal reveal-delay-1" id="services-heading" style="color: #000000;">
              Everything Your <span class="hero-title-accent">Visual Space Needs</span>
            </h2>
          </header>
          <div class="services-grid">
            <article class="service-card reveal">
              <div class="service-img-wrapper">
                <img alt="Indoor LED Screens" class="service-img" src="assetss/home/indoor_led_screen.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <rect height="14" rx="2" width="20" x="2" y="3"></rect>
                    <line x1="8" x2="16" y1="21" y2="21"></line>
                    <line x1="12" x2="12" y1="17" y2="21"></line>
                  </svg>
                </div>
                <h3 class="service-name">Indoor LED Screens</h3>
                <p class="service-desc">Providing standard SMD, high-contrast Chip-on-Board (COB) LED displays, and
                  advanced OLED solutions calibrated to perfection.</p>
                <a aria-label="Learn more about Indoor LED Screens" class="service-arrow" href="/products/indoor-led-screen" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about Indoor LED Screens</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
            <article class="service-card reveal reveal-delay-1">
              <div class="service-img-wrapper">
                <img alt="Outdoor LED Screens" class="service-img" src="assetss/home/outdoor_led_screen.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                    <path d="M2 17l10 5 10-5"></path>
                    <path d="M2 12l10 5 10-5"></path>
                  </svg>
                </div>
                <h3 class="service-name">Outdoor LED Screens</h3>
                <p class="service-desc">Weatherproof, high-brightness commercial displays, advertising
                  billboards, and Mesh Transparent Screens designed for maximum Middle East &amp; Africa durability.</p>
                <a aria-label="Learn more about Outdoor LED Screens" class="service-arrow" href="/products/outdoor-led-screen" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about Outdoor LED Screens</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
            <article class="service-card reveal reveal-delay-2">
              <div class="service-img-wrapper">
                <img alt="Innovative &amp; Custom Displays" class="service-img"
                  src="assetss/home/innovative-custom-displays.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M12 8v4l3 3"></path>
                  </svg>
                </div>
                <h3 class="service-name">Innovative &amp; Custom Displays</h3>
                <p class="service-desc">Kinetic LED screens (moving displays), spherical LED screens,
                  transparent glass/film screens, and custom architectural integrations.</p>
                <a aria-label="Learn more about Innovative and Custom Displays" class="service-arrow" href="/products/customized-led-screens" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about Innovative and Custom Displays</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
            <article class="service-card reveal reveal-delay-1">
              <div class="service-img-wrapper">
                <img alt="LCD &amp; Kiosks" class="service-img" src="assetss/home/lcd-kiosks.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <rect height="18" rx="2" width="18" x="3" y="3"></rect>
                    <path d="M9 9h6v6H9z"></path>
                  </svg>
                </div>
                <h3 class="service-name">LCD &amp; Kiosks</h3>
                <p class="service-desc">Dynamic vertical interactive kiosks, poster screens, and
                  large-format seamless video walls optimized for high-impact retail engagement.</p>
                <a aria-label="Learn more about LCD and Kiosks" class="service-arrow" href="/products/kiosk-poster" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about LCD and Kiosks</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
            <article class="service-card reveal reveal-delay-2">
              <div class="service-img-wrapper">
                <img alt="Corporate &amp; Government AV" class="service-img"
                  src="assetss/home/corporate-av-solutions-1.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                    <polyline points="14 2 14 8 20 8"></polyline>
                  </svg>
                </div>
                <h3 class="service-name">Corporate &amp; Government AV</h3>
                <p class="service-desc">Command center mission-critical displays, executive boardrooms,
                  unified video conferencing, and wireless screen sharing integrations.</p>
                <a aria-label="Learn more about Corporate and Government AV" class="service-arrow" href="/services/av-solutions" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about Corporate and Government AV</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
            <article class="service-card reveal reveal-delay-3">
              <div class="service-img-wrapper">
                <img alt="Commercial &amp; Public AV" class="service-img" src="assetss/home/public-av1-1.webp" />
              </div>
              <div class="service-content">
                <div class="service-icon">
                  <svg aria-hidden="true" fill="none" stroke="currentColor" stroke-width="1.5" viewbox="0 0 24 24">
                    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14"></path>
                    <path d="M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                  </svg>
                </div>
                <h3 class="service-name">Commercial &amp; Public AV</h3>
                <p class="service-desc">Immersive projection spaces, retail audio solutions, smart classroom
                  systems, XR studios, and public address (PA) system integrations.</p>
                <a aria-label="Learn more about Commercial and Public AV" class="service-arrow" href="/services/retail-display-solutions" style="text-decoration:none; color:inherit;">Learn more <span class="sr-only">about Commercial and Public AV</span>
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="14">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg></a>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- ======================== PRODUCTS PREVIEW ======================== -->
      <section aria-labelledby="products-heading" class="section" id="products">
        <div aria-hidden="true" class="about-bg-glow" style="right: 5%; left: auto; opacity: 0.65;">
          <div class="about-orb orb-orange"></div>
        </div>
        <div class="container">
          <div class="about-split-layout" style="align-items: stretch;">
            <!-- Left: Description and Products Overview -->
            <div class="about-content-showcase reveal" style="justify-content: center;">
              <div>
                <div class="section-label">Display Hardware</div>
                <h2 class="section-title" id="products-heading" style="margin-bottom: 20px;">
                  <span style="white-space: nowrap;">Advanced Display</span> <br /><span class="hero-title-accent"
                    style="white-space: nowrap;">Solutions &amp; Hardware</span>
                </h2>
                <p class="about-story-text">
                  We supply, design, and configure next-generation commercial indoor/outdoor LED
                  screens, interactive kiosks, and bespoke video walls tailored to your architectural requirements.
                </p>
                <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin: 28px 0 36px 0;">
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--blue-accent); box-shadow: 0 0 8px var(--blue-accent);"></span>
                    SMD &amp; High-Contrast COB Indoor LED
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--yellow); box-shadow: 0 0 8px var(--yellow);"></span>
                    Weatherproof Billboard &amp; Mesh Facades
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--orange); box-shadow: 0 0 8px var(--orange);"></span>
                    Executive Video Walls &amp; Kiosks
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot" style="background: #8b5cf6; box-shadow: 0 0 8px #8b5cf6;"></span>
                    Kinetic Displays &amp; Architectural Glass
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px; grid-column: 1 / -1;">
                    <span class="showcase-spec-dot" style="background: #10b981; box-shadow: 0 0 8px #10b981;"></span>
                    Professional Audio-Visual (AV) System Integration (Middle East &amp; Africa-wide)
                  </div>
                </div>
                <a class="btn btn-primary" href="products.php">
                  Explore Our Display Solutions
                  <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5"
                    viewbox="0 0 24 24" width="16">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
            <!-- Right: Sleek Visual Frame -->
            <div class="about-visual-showcase reveal reveal-delay-2" style="align-items: stretch;">
              <div class="about-showcase-frame" style="height: 100%;">
                <img alt="PIXON TECHNOLOGIES Premium Indoor OLED Display Array" class="about-showcase-img"
                  src="assetss/home/corporate-av-solutions-2.webp" style="height: 100%; object-fit: cover;" />
                <div class="about-visual-overlay"
                  style="position: absolute; inset: 0; background: linear-gradient(0deg, rgba(3, 7, 18, 0.6) 0%, rgba(3, 7, 18, 0) 100%);">
                </div>
                <div class="about-float-badge badge-top parallax-card" data-speed="1.0"
                  style="top: 20px; right: 20px; left: auto; background: rgba(17, 25, 46, 0.75); backdrop-filter: blur(12px); border: 1px solid var(--glass-border); padding: 8px 16px; border-radius: 12px; font-size: 12px; font-weight: 600; color: var(--white); display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                  <span class="pulse-dot-orange"></span> Calibration Showcase
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== SOLUTIONS PREVIEW ======================== -->
      <section aria-labelledby="solutions-heading" class="section light-section" id="solutions">
        <div aria-hidden="true" class="about-bg-glow" style="left: 5%; right: auto; opacity: 0.65;">
          <div class="about-orb orb-blue"></div>
        </div>
        <div class="container">
          <div class="about-split-layout" style="align-items: stretch;">
            <!-- Left: Sleek Visual Frame -->
            <div class="about-visual-showcase reveal" style="align-items: stretch;">
              <div class="about-showcase-frame" style="height: 100%;">
                <img alt="PIXON TECHNOLOGIES Display Solutions Engineering Preview" class="about-showcase-img"
                  src="assetss/home/Unmatched_Expertise_Reliable_Support.webp"
                  style="height: 100%; object-fit: cover;" />
                <div class="about-visual-overlay"
                  style="position: absolute; inset: 0; background: linear-gradient(0deg, rgba(3, 7, 18, 0.6) 0%, rgba(3, 7, 18, 0) 100%);">
                </div>
                <div class="about-float-badge badge-top parallax-card" data-speed="1.0"
                  style="top: 20px; left: 20px; background: rgba(17, 25, 46, 0.75); backdrop-filter: blur(12px); border: 1px solid var(--glass-border); padding: 8px 16px; border-radius: 12px; font-size: 12px; font-weight: 600; color: var(--white); display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                  <span class="pulse-dot-orange"></span> Certified Engineers
                </div>
              </div>
            </div>
            <!-- Right: Description and Environment Overview -->
            <div class="about-content-showcase reveal reveal-delay-2" style="justify-content: center;">
              <div>
                <div class="section-label">Why Choose Us</div>
                <h2 class="section-title" id="solutions-heading" style="margin-bottom: 20px;">
                  Unmatched Expertise &amp; <br /><span class="hero-title-accent">Reliable Support</span>
                </h2>
                <p class="about-story-text" style="color: var(--text-secondary);">
                  We are committed to delivering premium visual experiences through cutting-edge technology, meticulous
                  engineering, and unparalleled customer service across the Middle East &amp; Africa region.
                </p>
                <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin: 28px 0 24px 0;">
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--blue-accent); box-shadow: 0 0 8px var(--blue-accent);"></span>
                    15+ Years of Experience
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--orange); box-shadow: 0 0 8px var(--orange);"></span>
                    Certified Expert Engineers
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--yellow); box-shadow: 0 0 8px var(--yellow);"></span>
                    Premium Quality Hardware
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 600; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot" style="background: #8b5cf6; box-shadow: 0 0 8px #8b5cf6;"></span>
                    Turnkey Project Management
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 600; display: flex; align-items: center; gap: 8px; grid-column: 1 / -1;">
                    <span class="showcase-spec-dot" style="background: #10b981; box-shadow: 0 0 8px #10b981;"></span>
                    24/7 Middle East &amp; Africa-wide Technical Support
                  </div>
                </div>
                <a class="btn btn-primary" href="about.php">
                  Learn More About Us
                  <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5"
                    viewbox="0 0 24 24" width="16">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== PROJECTS PREVIEW ======================== -->
      <section aria-labelledby="projects-heading" class="section" id="projects">
        <div aria-hidden="true" class="about-bg-glow" style="right: 5%; left: auto; opacity: 0.65;">
          <div class="about-orb orb-orange"></div>
        </div>
        <div class="container">
          <div class="about-split-layout" style="align-items: stretch;">
            <!-- Left: Description and Projects Overview -->
            <div class="about-content-showcase reveal" style="justify-content: center;">
              <div>
                <div class="section-label">Our Projects</div>
                <h2 class="section-title" id="projects-heading" style="margin-bottom: 20px;">
                  Transforming Spaces <br /><span class="hero-title-accent">Through Visual
                    Innovation</span>
                </h2>
                <p class="about-story-text">
                  We deliver turnkey spatial visual projects for recognized luxury brands, government
                  entities, and multi-location corporations across the Middle East.
                </p>
                <div style="display: grid; grid-template-columns: 1fr; gap: 16px; margin: 28px 0 36px 0;">
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--blue-accent); box-shadow: 0 0 8px var(--blue-accent);"></span>
                    Porsche &amp; Ferrari Luxury Showrooms
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--orange); box-shadow: 0 0 8px var(--orange);"></span>
                    Dubai Police &amp; Ministry Command Centers
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot"
                      style="background: var(--yellow); box-shadow: 0 0 8px var(--yellow);"></span>
                    Saudi Aramco &amp; ADNOC Industrial Spaces
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px;">
                    <span class="showcase-spec-dot" style="background: #8b5cf6; box-shadow: 0 0 8px #8b5cf6;"></span>
                    Emirates &amp; MasterCard Executive Suites
                  </div>
                  <div class="showcase-spec-item"
                    style="font-size: 14.5px; color: var(--text-secondary); font-weight: 500; display: flex; align-items: center; gap: 8px; grid-column: 1 / -1;">
                    <span class="showcase-spec-dot" style="background: #10b981; box-shadow: 0 0 8px #10b981;"></span>
                    IKEA &amp; Lulu Group International Flagship Displays
                  </div>
                </div>
                <a class="btn btn-primary" href="projects.php">
                  Explore Our Work
                  <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5"
                    viewbox="0 0 24 24" width="16">
                    <line x1="5" x2="19" y1="12" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                  </svg>
                </a>
              </div>
            </div>
            <!-- Right: Sleek Visual Frame -->
            <div class="about-visual-showcase reveal reveal-delay-2" style="align-items: stretch;">
              <div class="about-showcase-frame" style="height: 100%;">
                <img alt="PIXON TECHNOLOGIES Grand Mall Digital Video Wall" class="about-showcase-img"
                  src="assetss/home/Transforming_Spaces_Through_Visual_Innovation.webp"
                  style="height: 100%; object-fit: cover;" />
                <div class="about-visual-overlay"
                  style="position: absolute; inset: 0; background: linear-gradient(0deg, rgba(3, 7, 18, 0.6) 0%, rgba(3, 7, 18, 0) 100%);">
                </div>
                <div class="about-float-badge badge-top parallax-card" data-speed="1.0"
                  style="top: 20px; right: 20px; left: auto; background: rgba(17, 25, 46, 0.75); backdrop-filter: blur(12px); border: 1px solid var(--glass-border); padding: 8px 16px; border-radius: 12px; font-size: 12px; font-weight: 600; color: var(--white); display: flex; align-items: center; gap: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
                  <span class="pulse-dot-orange"></span> Featured Project
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== WHY CHOOSE US ======================== -->
      <section class="section light-section" id="why-choose" style="background-color: #ffffff !important;">
        <div class="container">
          <header style="text-align: center; margin-bottom: 60px;">
            <div class="section-label reveal" style="justify-content: center; margin-bottom: 12px;">Our Advantage</div>
            <h2 class="section-title reveal reveal-delay-1" style="font-size: clamp(22px, 2.8vw, 32px);">Why Choose Us
            </h2>
            <p class="section-sub reveal reveal-delay-2" style="margin: 16px auto 0;">Delivering specialized engineering
              solutions, professional setups, and dedicated support.</p>
          </header>
          <!-- Stats Counters Grid -->
          
          <div class="stats-premium-row reveal">
            <!-- Card 1 -->
            <div
              style="background: #ffffff; border: 1.5px solid rgba(56, 198, 244, 0.3); border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(8, 19, 53, 0.05), 0 8px 10px -6px rgba(8, 19, 53, 0.05); padding: 28px 16px; flex: 1 1 0px; min-width: 140px; max-width: 200px; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-shrink: 0; flex-direction: column; justify-content: center; align-items: center;">
              <div
                style="font-size: clamp(28px, 3vw, 36px); font-weight: 800; background: linear-gradient(135deg, #38c6f4 0%, #1a2fbf 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; font-family: system-ui, -apple-system, sans-serif;">
                <span class="counter" data-target="10">0</span>K+
              </div>
              <div
                style="font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; margin-top: 12px; letter-spacing: 0.5px;">
                Customers</div>
            </div>
            <!-- Card 2 -->
            <div
              style="background: #ffffff; border: 1.5px solid rgba(56, 198, 244, 0.3); border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(8, 19, 53, 0.05), 0 8px 10px -6px rgba(8, 19, 53, 0.05); padding: 28px 16px; flex: 1 1 0px; min-width: 140px; max-width: 200px; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-shrink: 0; flex-direction: column; justify-content: center; align-items: center;">
              <div
                style="font-size: clamp(28px, 3vw, 36px); font-weight: 800; background: linear-gradient(135deg, #38c6f4 0%, #1a2fbf 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; font-family: system-ui, -apple-system, sans-serif;">
                <span class="counter" data-target="15">0</span>+
              </div>
              <div
                style="font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; margin-top: 12px; letter-spacing: 0.5px;">
                Years of Experience</div>
            </div>
            <!-- Card 3 -->
            <div
              style="background: #ffffff; border: 1.5px solid rgba(56, 198, 244, 0.3); border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(8, 19, 53, 0.05), 0 8px 10px -6px rgba(8, 19, 53, 0.05); padding: 28px 16px; flex: 1 1 0px; min-width: 140px; max-width: 200px; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-shrink: 0; flex-direction: column; justify-content: center; align-items: center;">
              <div
                style="font-size: clamp(28px, 3vw, 36px); font-weight: 800; background: linear-gradient(135deg, #38c6f4 0%, #1a2fbf 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; font-family: system-ui, -apple-system, sans-serif;">
                <span class="counter" data-target="1000">0</span>+
              </div>
              <div
                style="font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; margin-top: 12px; letter-spacing: 0.5px;">
                Channel Partners</div>
            </div>
            <!-- Card 4 -->
            <div
              style="background: #ffffff; border: 1.5px solid rgba(56, 198, 244, 0.3); border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(8, 19, 53, 0.05), 0 8px 10px -6px rgba(8, 19, 53, 0.05); padding: 28px 16px; flex: 1 1 0px; min-width: 140px; max-width: 200px; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-shrink: 0; flex-direction: column; justify-content: center; align-items: center;">
              <div
                style="font-size: clamp(28px, 3vw, 36px); font-weight: 800; background: linear-gradient(135deg, #38c6f4 0%, #1a2fbf 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; font-family: system-ui, -apple-system, sans-serif;">
                <span class="counter" data-target="500">0</span>+
              </div>
              <div
                style="font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; margin-top: 12px; letter-spacing: 0.5px;">
                Completed Projects</div>
            </div>
            <!-- Card 5 -->
            <div
              style="background: #ffffff; border: 1.5px solid rgba(56, 198, 244, 0.3); border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(8, 19, 53, 0.05), 0 8px 10px -6px rgba(8, 19, 53, 0.05); padding: 28px 16px; flex: 1 1 0px; min-width: 140px; max-width: 200px; text-align: center; transition: transform 0.3s ease, box-shadow 0.3s ease; display: flex; flex-shrink: 0; flex-direction: column; justify-content: center; align-items: center;">
              <div
                style="font-size: clamp(28px, 3vw, 36px); font-weight: 800; background: linear-gradient(135deg, #38c6f4 0%, #1a2fbf 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; font-family: system-ui, -apple-system, sans-serif;">
                <span class="counter" data-target="25">0</span>+
              </div>
              <div
                style="font-size: 11px; font-weight: 700; color: #475569; text-transform: uppercase; margin-top: 12px; letter-spacing: 0.5px;">
                Subsidiaries</div>
            </div>
          </div>
          <!-- 8 Points Grid - enriched with descriptions -->
          <div class="compact-services-grid">
            <!-- 1 -->
            <div class="compact-service-card reveal">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                  <circle cx="9" cy="7" r="4"></circle>
                  <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                  <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                </svg>
              </div>
              <h3 class="service-name-compact">Experienced Technical Team</h3>
              <p class="service-desc-compact">200+ certified engineers with deep Middle East &amp; Africa deployment
                expertise.</p>
            </div>
            <!-- 2 -->
            <div class="compact-service-card reveal reveal-delay-1">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path d="M19.07 4.93a10 10 0 0 1 0 14.14M4.93 4.93a10 10 0 0 0 0 14.14"></path>
                </svg>
              </div>
              <h3 class="service-name-compact">Customized Solutions</h3>
              <p class="service-desc-compact">Every project is tailor-built to fit your exact architectural and brand
                requirements.</p>
            </div>
            <!-- 3 -->
            <div class="compact-service-card reveal reveal-delay-2">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <line x1="12" x2="12" y1="1" y2="23"></line>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
              </div>
              <h3 class="service-name-compact">Competitive Pricing</h3>
              <p class="service-desc-compact">Premium-quality hardware and turnkey services without premium pricing.</p>
            </div>
            <!-- 4 -->
            <div class="compact-service-card reveal reveal-delay-3">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <polyline points="20 6 9 17 4 12"></polyline>
                </svg>
              </div>
              <h3 class="service-name-compact">Quality Products</h3>
              <p class="service-desc-compact">1,200+ rigorously sourced products from globally certified LED and AV
                manufacturers.</p>
            </div>
            <!-- 5 -->
            <div class="compact-service-card reveal">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <polyline points="21 8 21 21 3 21 3 8"></polyline>
                  <rect height="5" width="22" x="1" y="3"></rect>
                  <line x1="10" x2="14" y1="12" y2="12"></line>
                </svg>
              </div>
              <h3 class="service-name-compact">Professional Installation</h3>
              <p class="service-desc-compact">Full turnkey installation with precision calibration and system
                commissioning.</p>
            </div>
            <!-- 6 -->
            <div class="compact-service-card reveal reveal-delay-1">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6z">
                  </path>
                </svg>
              </div>
              <h3 class="service-name-compact">Fast Response Support</h3>
              <p class="service-desc-compact">Dedicated 24/7 helpdesk with on-site dispatch teams across the region.</p>
            </div>
            <!-- 7 -->
            <div class="compact-service-card reveal reveal-delay-2">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                </svg>
              </div>
              <h3 class="service-name-compact">After Sales Service</h3>
              <p class="service-desc-compact">Comprehensive warranty management, preventive maintenance, and spare parts
                supply.</p>
            </div>
            <!-- 8 -->
            <div class="compact-service-card reveal reveal-delay-3">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <circle cx="12" cy="12" r="10"></circle>
                  <line x1="2" x2="22" y1="12" y2="12"></line>
                  <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                  </path>
                </svg>
              </div>
              <h3 class="service-name-compact">Strong MEA Execution</h3>
              <p class="service-desc-compact">Active operations across UAE, Saudi Arabia, Egypt, Kenya and 15+ more
                countries.</p>
            </div>
            <!-- 9 -->
            <div class="compact-service-card reveal reveal-delay-4">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <circle cx="12" cy="12" r="3"></circle>
                  <path
                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                  </path>
                </svg>
              </div>
              <h3 class="service-name-compact">Innovative Technology</h3>
              <p class="service-desc-compact">Continuously expanding our portfolio with the latest LED display
                technologies.</p>
            </div>
            <!-- 10 -->
            <div class="compact-service-card reveal">
              <div class="check-icon-wrapper">
                <svg fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewbox="0 0 24 24" width="16">
                  <path
                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                  </path>
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                  <line x1="12" x2="12" y1="22.08" y2="12"></line>
                </svg>
              </div>
              <h3 class="service-name-compact">End-to-End Solutions</h3>
              <p class="service-desc-compact">From initial consultation and design to installation and ongoing technical
                support.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- ======================== WORLDWIDE PRESENCE ======================== -->
      <section id="worldwide-presence" style="background:#081335; position:relative; overflow:hidden; padding:0;">
        
        <div id="wp-stage">
          <div id="wp-topbar"></div>
          <canvas id="dotmap"></canvas>
          <div class="wp-title-wrap">
            <!-- <svg class="wp-sparkle" fill="currentColor" viewbox="0 0 24 24">
              <path d="M12 0c.8 4.4 2.8 7.3 6 10.5-3.2 3.2-5.2 6.1-6 10.5-.8-4.4-2.8-7.3-6-10.5C9.2 7.3 11.2 4.4 12 0z">
              </path>
            </svg> -->
            <h2>Our <span class="wp-accent">Worldwide</span> Presence</h2>
            <!-- <svg class="wp-sparkle sm" fill="currentColor" viewbox="0 0 24 24">
              <path d="M12 0c.8 4.4 2.8 7.3 6 10.5-3.2 3.2-5.2 6.1-6 10.5-.8-4.4-2.8-7.3-6-10.5C9.2 7.3 11.2 4.4 12 0z">
              </path>
            </svg> -->
          </div>
          <!-- Oman -->
          <div class="wp-hotspot" style="left:47%;top:28%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇴🇲 Oman</span>
            </div>
          </div>
          <!-- Qatar -->
          <div class="wp-hotspot" style="left:19%;top:54%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇶🇦 Qatar</span>
            </div>
          </div>
          <!-- Kuwait -->
          <div class="wp-hotspot wp-dir-down" style="left:33%;top:65%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇰🇼 Kuwait</span>
            </div>
          </div>
          <!-- Bahrain -->
          <div class="wp-hotspot" style="left:50%;top:75%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇧🇭 Bahrain</span>
            </div>
          </div>
          <!-- KSA -->
          <div class="wp-hotspot wp-dir-down" style="left:60%;top:64%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇸🇦 KSA</span>
            </div>
          </div>
          <!-- UAE (Dubai) - Hub -->
          <div class="wp-hotspot" style="left:66%;top:54%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇦🇪 UAE</span>
            </div>
          </div>
          <!-- India -->
          <div class="wp-hotspot wp-dir-down" style="left:74%;top:58%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇮🇳 India</span>
            </div>
          </div>
          <!-- China -->
          <div class="wp-hotspot" style="left:82%;top:48%;">
            <div class="wp-hotspot-hitbox"></div>
            <div class="wp-hotspot-pulse"></div>
            <div class="wp-hotspot-pulse-2"></div>
            <div class="wp-hotspot-core"></div>
            <div class="wp-hotspot-line"></div>
            <div class="wp-hotspot-text">
              <span class="wp-h-country">🇨🇳 China</span>
            </div>
          </div>
        </div>
        <script>
          (function () {
            const canvas = document.getElementById('dotmap');
            const ctx = canvas.getContext('2d');
            const stage = document.getElementById('wp-stage');
            const hotspots = document.querySelectorAll('.wp-hotspot');

            // Hotspot coordinates matching percent left/top
            const locations = [
              { name: 'Oman', xPct: 0.47, yPct: 0.28 },
              { name: 'Qatar', xPct: 0.19, yPct: 0.54 },
              { name: 'Kuwait', xPct: 0.33, yPct: 0.65 },
              { name: 'Bahrain', xPct: 0.50, yPct: 0.75 },
              { name: 'KSA', xPct: 0.60, yPct: 0.64 },
              { name: 'UAE', xPct: 0.66, yPct: 0.54, isHub: true },
              { name: 'India', xPct: 0.74, yPct: 0.58 },
              { name: 'China', xPct: 0.82, yPct: 0.48 }
            ];

            // Connection links radiating from the UAE Hub
            const connections = [];
            const hubLoc = locations.find(l => l.isHub);
            locations.forEach(loc => {
              if (loc !== hubLoc) {
                connections.push({
                  from: hubLoc,
                  to: loc,
                  t: Math.random(),
                  speed: 0.003 + Math.random() * 0.003
                });
              }
            });

            // Interaction ripples
            let ripples = [];

            function addRipple(x, y) {
              ripples.push({
                x,
                y,
                radius: 0,
                maxRadius: 160,
                opacity: 0.75,
                speed: 2.8
              });
            }

            // Attach hover listeners to hotspots for interactive canvas ripples
            hotspots.forEach((hs, idx) => {
              const hitbox = hs.querySelector('.wp-hotspot-hitbox');
              if (hitbox) {
                hitbox.addEventListener('mouseenter', () => {
                  hs.classList.add('active');
                  const w = stage.clientWidth;
                  const h = stage.clientHeight;
                  const x = locations[idx].xPct * w;
                  const y = locations[idx].yPct * h;
                  addRipple(x, y);
                });
                hitbox.addEventListener('mouseleave', () => {
                  hs.classList.remove('active');
                });
              }
            });

            // Map boundary detection
            function inLand(nx, ny) {
              const blobs = [
                { cx: 0.09, cy: 0.08, rx: 0.05, ry: 0.06 }, { cx: 0.14, cy: 0.20, rx: 0.10, ry: 0.10 },
                { cx: 0.20, cy: 0.34, rx: 0.10, ry: 0.10 }, { cx: 0.24, cy: 0.48, rx: 0.06, ry: 0.06 },
                { cx: 0.27, cy: 0.62, rx: 0.07, ry: 0.09 }, { cx: 0.30, cy: 0.78, rx: 0.06, ry: 0.10 },
                { cx: 0.50, cy: 0.12, rx: 0.06, ry: 0.06 }, { cx: 0.55, cy: 0.20, rx: 0.05, ry: 0.05 },
                { cx: 0.53, cy: 0.38, rx: 0.07, ry: 0.09 }, { cx: 0.55, cy: 0.54, rx: 0.06, ry: 0.10 },
                { cx: 0.56, cy: 0.72, rx: 0.045, ry: 0.08 },
                { cx: 0.62, cy: 0.28, rx: 0.06, ry: 0.06 }, { cx: 0.68, cy: 0.20, rx: 0.09, ry: 0.08 },
                { cx: 0.78, cy: 0.16, rx: 0.10, ry: 0.09 }, { cx: 0.88, cy: 0.20, rx: 0.08, ry: 0.08 },
                { cx: 0.70, cy: 0.34, rx: 0.07, ry: 0.07 }, { cx: 0.80, cy: 0.36, rx: 0.09, ry: 0.08 },
                { cx: 0.90, cy: 0.40, rx: 0.07, ry: 0.07 }, { cx: 0.75, cy: 0.48, rx: 0.05, ry: 0.05 },
                { cx: 0.90, cy: 0.72, rx: 0.06, ry: 0.05 }
              ];
              for (const b of blobs) {
                const dx = (nx - b.cx) / b.rx, dy = (ny - b.cy) / b.ry;
                if (dx * dx + dy * dy <= 1) return true;
              }
              return false;
            }

            // Dot map array
            let dots = [];

            function initDots(w, h) {
              dots = [];
              const sp = Math.max(12, w / 95);
              const cols = Math.ceil(w / sp), rows = Math.ceil(h / sp);
              for (let i = 0; i <= cols; i++) {
                for (let j = 0; j <= rows; j++) {
                  const x = i * sp + (j % 2 ? sp / 2 : 0), y = j * sp;
                  const nx = x / w, ny = y / h;
                  if (!inLand(nx, ny)) continue;
                  const n = Math.random();
                  if (n < 0.12) continue;

                  dots.push({
                    x,
                    y,
                    baseRadius: n > 0.82 ? 1.6 : 1.1,
                    opacity: 0.25 + Math.random() * 0.5,
                    twinkleSpeed: (0.008 + Math.random() * 0.015) * (Math.random() > 0.5 ? 1 : -1),
                    isBright: n > 0.82
                  });
                }
              }
            }

            let animationFrameId;

            function animate() {
              const dpr = window.devicePixelRatio || 1;
              const w = stage.clientWidth, h = stage.clientHeight;

              if (canvas.width !== w * dpr || canvas.height !== h * dpr) {
                canvas.width = w * dpr; canvas.height = h * dpr;
                canvas.style.width = w + 'px'; canvas.style.height = h + 'px';
                ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
                initDots(w, h);
              }

              ctx.clearRect(0, 0, w, h);

              // 1. Process active interaction ripples
              ripples = ripples.filter(r => {
                r.radius += r.speed;
                r.opacity = 1 - (r.radius / r.maxRadius);
                return r.radius < r.maxRadius;
              });

              // 2. Draw subtle starry background particles
              for (let k = 0; k < 45; k++) {
                const sx = (k * 7919) % w;
                const sy = (k * 104729) % h;
                ctx.beginPath();
                ctx.arc(sx, sy, 0.7, 0, Math.PI * 2);
                ctx.fillStyle = 'rgba(56, 198, 244, 0.1)';
                ctx.fill();
              }

              // 3. Update and draw world map dots
              dots.forEach(dot => {
                dot.opacity += dot.twinkleSpeed;
                if (dot.opacity > 0.85) {
                  dot.opacity = 0.85;
                  dot.twinkleSpeed = -Math.abs(dot.twinkleSpeed);
                } else if (dot.opacity < 0.2) {
                  dot.opacity = 0.2;
                  dot.twinkleSpeed = Math.abs(dot.twinkleSpeed);
                }

                let radius = dot.baseRadius;
                let alpha = dot.opacity;

                // Wave propagation interaction
                ripples.forEach(r => {
                  const dx = dot.x - r.x;
                  const dy = dot.y - r.y;
                  const dist = Math.hypot(dx, dy);
                  const waveDist = Math.abs(dist - r.radius);
                  if (waveDist < 25) {
                    const strength = (1 - waveDist / 25) * r.opacity;
                    radius += strength * 1.6;
                    alpha = Math.min(1, alpha + strength * 0.7);
                  }
                });

                ctx.beginPath();
                ctx.arc(dot.x, dot.y, radius, 0, Math.PI * 2);
                ctx.fillStyle = dot.isBright
                  ? `rgba(143, 227, 255, ${alpha})`
                  : `rgba(45, 95, 175, ${alpha * 0.7})`;
                ctx.fill();
              });

              // 4. Draw connectivity arcs & photons
              connections.forEach(conn => {
                const x1 = conn.from.xPct * w;
                const y1 = conn.from.yPct * h;
                const x2 = conn.to.xPct * w;
                const y2 = conn.to.yPct * h;

                // Bend the line upward for visual curvature
                const mx = (x1 + x2) / 2;
                const my = (y1 + y2) / 2;
                const dist = Math.hypot(x2 - x1, y2 - y1);
                const cx = mx;
                const cy = my - dist * 0.15;

                // Draw bezier arc line
                ctx.beginPath();
                ctx.moveTo(x1, y1);
                ctx.quadraticCurveTo(cx, cy, x2, y2);
                ctx.strokeStyle = 'rgba(56, 198, 244, 0.13)';
                ctx.lineWidth = 1;
                ctx.stroke();

                // Photon positioning
                conn.t += conn.speed;
                if (conn.t > 1) {
                  conn.t = 0;
                  conn.speed = 0.003 + Math.random() * 0.003;
                }

                const t = conn.t;
                const px = (1 - t) * (1 - t) * x1 + 2 * (1 - t) * t * cx + t * t * x2;
                const py = (1 - t) * (1 - t) * y1 + 2 * (1 - t) * t * cy + t * t * y2;

                // Photon tail
                const tPrev = Math.max(0, t - 0.07);
                const pxPrev = (1 - tPrev) * (1 - tPrev) * x1 + 2 * (1 - tPrev) * tPrev * cx + tPrev * tPrev * x2;
                const pyPrev = (1 - tPrev) * (1 - tPrev) * y1 + 2 * (1 - tPrev) * tPrev * cy + tPrev * tPrev * y2;

                const grad = ctx.createLinearGradient(pxPrev, pyPrev, px, py);
                grad.addColorStop(0, 'rgba(56, 198, 244, 0)');
                grad.addColorStop(1, 'rgba(143, 227, 255, 0.8)');

                ctx.beginPath();
                ctx.moveTo(pxPrev, pyPrev);
                ctx.quadraticCurveTo((pxPrev + px) / 2, (pyPrev + py) / 2 - 2, px, py);
                ctx.strokeStyle = grad;
                ctx.lineWidth = 1.8;
                ctx.stroke();

                // Photon head
                ctx.beginPath();
                ctx.arc(px, py, 2.0, 0, Math.PI * 2);
                ctx.fillStyle = '#ffffff';
                ctx.fill();
              });

              animationFrameId = requestAnimationFrame(animate);
            }

            window.addEventListener('resize', () => {
              const w = stage.clientWidth, h = stage.clientHeight;
              const dpr = window.devicePixelRatio || 1;
              canvas.width = w * dpr; canvas.height = h * dpr;
              canvas.style.width = w + 'px'; canvas.style.height = h + 'px';
              ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
              initDots(w, h);
            });

            animate();
          })();
        </script>
      </section>
      <!-- ============================================================
     SECTION: CTA
     ============================================================ -->
      <section aria-labelledby="cta-heading" class="section cta-section" id="contact" style="padding: 0;">
        <div
          style="background: transparent; padding: 100px 20px; position: relative; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center;">

          <!-- Left curved lines -->
          <svg width="300" height="100%" viewBox="0 0 300 400" preserveAspectRatio="none"
            style="position: absolute; left: 0; top: 0; opacity: 0.5; pointer-events: none;">
            <path d="M0,0 C120,80 150,250 0,400" fill="none" stroke="#ffffff" stroke-width="1.5" />
            <path d="M0,0 C160,100 190,270 0,400" fill="none" stroke="#ffffff" stroke-width="1" />
            <path d="M0,0 C200,120 230,290 0,400" fill="none" stroke="#ffffff" stroke-width="0.5" />
          </svg>

          <!-- Right curved lines -->
          <svg width="300" height="100%" viewBox="0 0 300 400" preserveAspectRatio="none"
            style="position: absolute; right: 0; bottom: 0; opacity: 0.5; pointer-events: none;">
            <path d="M300,400 C180,320 150,150 300,0" fill="none" stroke="#ffffff" stroke-width="1.5" />
            <path d="M300,400 C140,300 110,130 300,0" fill="none" stroke="#ffffff" stroke-width="1" />
            <path d="M300,400 C100,280 70,110 300,0" fill="none" stroke="#ffffff" stroke-width="0.5" />
          </svg>

          <div class="container" style="position: relative; z-index: 2; max-width: 1000px;">
            <div class="cta-label"
              style="color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem; font-weight: 700; margin-bottom: 15px;">
              UPGRADE TODAY </div>
            <h2 id="cta-heading"
              style="color: #ffffff; font-size: clamp(20px, 2.8vw, 30px); font-weight: 500; margin-bottom: 20px; font-family: 'Inter', sans-serif;">
              Ready To Upgrade Your Display Experience?</h2>
            <p
              style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px; font-weight: 400; max-width: 650px; margin-left: auto; margin-right: auto;">
              From precise LED module calibrations to massive commercial LED meshes, PIXON TECHNOLOGIES's engineering
              team is ready to design and calibrate your layout.
            </p>
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
              <a href="contact.php" class="cta-btn-solid">
                Contact Our Team
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
              <a href="contact.php" class="cta-btn-outline">
                Schedule Consultation
                <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>



    <?php include 'footer.php'; ?>
</body>
</html>
