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
<meta charset="utf-8"/>
<base href="/"/>
<link rel="canonical" href="https://www.pixonglobal.com/products" />
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://www.pixonglobal.com/"
  },{
    "@type": "ListItem",
    "position": 2,
    "name": "Products",
    "item": "https://www.pixonglobal.com/products"
  }]
}
</script>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="Explore Pixon’s innovative product range, featuring LED displays, digital screens and visual solutions designed to enhance business spaces and experiences." name="description"/>
<meta content="PIXON TECHNOLOGIES products, commercial LED screens, outdoor billboards Middle East &amp; Africa, digital kiosks Riyadh, kinetic displays Middle East &amp; Africa" name="keywords"/>
<meta content="PIXON TECHNOLOGIES" name="author"/>
<title>Unlock Your Potential with Our Innovative Product Range</title>
<link href="assets/fav-logo.jpg-removebg-preview.png" rel="icon" type="image/png"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="style.css?v=2" rel="stylesheet"/>


</head>
<body class="watermarked-page">
<?php include 'header.php'; ?>
<style>
        /* ===== PRODUCTS PAGE — LAYOUT REDESIGN ONLY (no bg colour changes) ===== */

        /* ---------- Showcase Rows ---------- */
        .products-showcase-container {
            display: flex;
            flex-direction: column;
            gap: 72px;
        }

        /* ---------- Catalog Filter Tabs ---------- */
        .catalog-filter-tabs {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 48px;
        }

        .filter-tab {
            padding: 10px 22px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            letter-spacing: 0.3px;
            transition: all 0.28s ease;
        }

        /* ---------- Catalog Grid ---------- */
        .catalog-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .catalog-card {
            background: rgba(15, 23, 42, 0.4) !important;
            backdrop-filter: blur(16px) !important;
            -webkit-backdrop-filter: blur(16px) !important;
            border: 1px solid rgba(255, 255, 255, 0.06) !important;
            border-radius: 16px;
            padding: 0;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1) !important;
        }

        .catalog-card:hover {
            transform: translateY(-6px) !important;
            background: rgba(15, 23, 42, 0.6) !important;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.3) !important;
        }

        /* Border highlights on hover */
        .catalog-card:nth-child(4n+1):hover { border-color: rgba(30, 136, 229, 0.3) !important; }
        .catalog-card:nth-child(4n+2):hover { border-color: rgba(255, 107, 43, 0.3) !important; }
        .catalog-card:nth-child(4n+3):hover { border-color: rgba(156, 39, 176, 0.3) !important; }
        .catalog-card:nth-child(4n+4):hover { border-color: rgba(0, 188, 212, 0.3) !important; }

        /* Top colour strip per card — purely structural accent line */
        .catalog-card::before {
            content: '';
            display: block;
            height: 4px;
            width: 100%;
            flex-shrink: 0;
        }
        .catalog-card:nth-child(4n+1)::before { background: linear-gradient(90deg,#1E88E5,#42A5F5); }
        .catalog-card:nth-child(4n+2)::before { background: linear-gradient(90deg,#FF6B2B,#FFA552); }
        .catalog-card:nth-child(4n+3)::before { background: linear-gradient(90deg,#9C27B0,#CE93D8); }
        .catalog-card:nth-child(4n+4)::before { background: linear-gradient(90deg,#00BCD4,#80DEEA); }

        .catalog-card-inner {
            padding: 28px 22px 24px;
            display: flex;
            flex-direction: column;
            gap: 18px;
            flex: 1;
        }

        .catalog-header {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 14px;
        }

        .catalog-header-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .catalog-icon {
            font-size: 24px;
            width: 50px;
            height: 50px;
            border-radius: 12px !important;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.3s ease !important;
        }

        /* Card specific glassmorphic icon backgrounds */
        .catalog-card:nth-child(4n+1) .catalog-icon {
            background: rgba(30, 136, 229, 0.08) !important;
            border: 1px solid rgba(30, 136, 229, 0.2) !important;
            color: #42A5F5 !important;
        }
        .catalog-card:nth-child(4n+1):hover .catalog-icon {
            background: rgba(30, 136, 229, 0.16) !important;
            border-color: rgba(30, 136, 229, 0.4) !important;
            box-shadow: 0 4px 15px rgba(30, 136, 229, 0.2) !important;
        }

        .catalog-card:nth-child(4n+2) .catalog-icon {
            background: rgba(255, 107, 43, 0.08) !important;
            border: 1px solid rgba(255, 107, 43, 0.2) !important;
            color: #FFA552 !important;
        }
        .catalog-card:nth-child(4n+2):hover .catalog-icon {
            background: rgba(255, 107, 43, 0.16) !important;
            border-color: rgba(255, 107, 43, 0.4) !important;
            box-shadow: 0 4px 15px rgba(255, 107, 43, 0.2) !important;
        }

        .catalog-card:nth-child(4n+3) .catalog-icon {
            background: rgba(156, 39, 176, 0.08) !important;
            border: 1px solid rgba(156, 39, 176, 0.2) !important;
            color: #CE93D8 !important;
        }
        .catalog-card:nth-child(4n+3):hover .catalog-icon {
            background: rgba(156, 39, 176, 0.16) !important;
            border-color: rgba(156, 39, 176, 0.4) !important;
            box-shadow: 0 4px 15px rgba(156, 39, 176, 0.2) !important;
        }

        .catalog-card:nth-child(4n+4) .catalog-icon {
            background: rgba(0, 188, 212, 0.08) !important;
            border: 1px solid rgba(0, 188, 212, 0.2) !important;
            color: #80DEEA !important;
        }
        .catalog-card:nth-child(4n+4):hover .catalog-icon {
            background: rgba(0, 188, 212, 0.16) !important;
            border-color: rgba(0, 188, 212, 0.4) !important;
            box-shadow: 0 4px 15px rgba(0, 188, 212, 0.2) !important;
        }

        .catalog-num {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            opacity: 0.4;
        }

        .catalog-title {
            font-size: 14.5px;
            font-weight: 700;
            margin: 0;
            line-height: 1.3;
            color: #FFFFFF !important;
        }

        .catalog-divider {
            height: 1px;
            width: 100%;
            opacity: 0.1;
            border: none;
            background: currentColor;
            margin: 0;
        }

        .catalog-list {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
        }

        .catalog-tag {
            background: rgba(255, 255, 255, 0.03) !important;
            border: 1px solid rgba(255, 255, 255, 0.06) !important;
            color: rgba(255, 255, 255, 0.65) !important;
            border-radius: 6px !important;
            padding: 4px 10px !important;
            font-size: 11.5px !important;
            font-weight: 500;
            line-height: 1.3;
            transition: all 0.25s ease !important;
        }

        /* Color tag glows by column group */
        .catalog-card:nth-child(4n+1) .catalog-tag:hover {
            background: rgba(30, 136, 229, 0.15) !important;
            border-color: rgba(30, 136, 229, 0.4) !important;
            color: #FFFFFF !important;
            box-shadow: 0 4px 12px rgba(30, 136, 229, 0.25) !important;
            transform: translateY(-1px) !important;
        }
        .catalog-card:nth-child(4n+2) .catalog-tag:hover {
            background: rgba(255, 107, 43, 0.15) !important;
            border-color: rgba(255, 107, 43, 0.4) !important;
            color: #FFFFFF !important;
            box-shadow: 0 4px 12px rgba(255, 107, 43, 0.25) !important;
            transform: translateY(-1px) !important;
        }
        .catalog-card:nth-child(4n+3) .catalog-tag:hover {
            background: rgba(156, 39, 176, 0.15) !important;
            border-color: rgba(156, 39, 176, 0.4) !important;
            color: #FFFFFF !important;
            box-shadow: 0 4px 12px rgba(156, 39, 176, 0.25) !important;
            transform: translateY(-1px) !important;
        }
        .catalog-card:nth-child(4n+4) .catalog-tag:hover {
            background: rgba(0, 188, 212, 0.15) !important;
            border-color: rgba(0, 188, 212, 0.4) !important;
            color: #FFFFFF !important;
            box-shadow: 0 4px 12px rgba(0, 188, 212, 0.25) !important;
            transform: translateY(-1px) !important;
        }

        @media (max-width: 1100px) {
            .catalog-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 780px) {
            .catalog-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 520px) {
            .catalog-grid { grid-template-columns: 1fr; }
        }

        /* ---------- Industry Grid ---------- */
        .industry-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .industry-card {
            border-radius: 16px;
            padding: 36px 28px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 14px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 14px 36px rgba(0,0,0,0.15);
        }

        .industry-icon {
            font-size: 30px;
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .industry-card h4 {
            font-size: 15px;
            font-weight: 700;
            margin: 0;
        }

        .industry-card p {
            font-size: 14.5px;
            line-height: 1.65;
            margin: 0;
            opacity: 0.75;
        }

        @media (max-width: 900px) {
            .industry-grid { grid-template-columns: repeat(2, 1fr); }
        }
        @media (max-width: 560px) {
            .industry-grid { grid-template-columns: 1fr; }
        }

        .section-title {
            font-size: clamp(26px, 3.5vw, 38px) !important;
        }
    </style>
<main>
<!-- ======================== PRODUCTS HERO ======================== -->
<section aria-label="Products hero section" id="hero" style="display: flex; flex-direction: column; justify-content: center; height: auto !important; min-height: 55vh !important; padding-top: 120px; padding-bottom: 40px; position: relative; background-image: url('assets/product-bg.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<div style="position: absolute; inset: 0; background: rgba(3, 7, 18, 0.72); z-index: 0;"></div>
<div class="hero-bg" style="position: absolute; inset: 0; z-index: 1;">
<div class="hero-mesh"></div>
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>
</div>
<div class="hero-content" style="position: relative; z-index: 2;">
<div class="container">
<div class="animate-fade-in-up" style="max-width: 850px; margin: 0 auto; text-align: center;">
<h1 class="hero-title" style="font-size: clamp(32px, 4.5vw, 52px); margin-bottom: 16px;">
                            Advanced Display <span class="hero-title-accent">Technology</span>
</h1>
<p class="hero-sub" style="margin-bottom: 30px; margin-left: auto; margin-right: auto;">
                            Showcasing ultra-premium display arrays for residential entertainment, modern business
                            spaces, interactive corporate boardrooms, and high-impact outdoor installations.
                        </p>
</div>
</div>
</div>
</section>
<!-- ======================== FEATURED PRODUCTS SHOWCASE ======================== -->
<section class="section light-section" id="showcase">
<div class="container-large">
<header style="text-align: center; margin-bottom: 60px;">
<div class="section-label" style="justify-content: center; margin-bottom: 12px;">Premium Arrays
                    </div>
<h2 class="section-title">Futuristic Display Categories</h2>
<p class="section-sub" style="margin: 16px auto 0;">Delivering state-of-the-art visual hardware
                        calibrated to absolute perfection.</p>
</header>
<div class="products-showcase-container">
<!-- Row 1: Smart LED & OLED TVs -->
<div class="showcase-row reveal">
<div class="showcase-visual">
<div class="showcase-img-frame">
<img alt="PIXON TECHNOLOGIES Premium Indoor OLED Display" class="showcase-img" src="assetss/products home page/Smart Indoor LED.jpeg"/>
<div class="about-visual-overlay"></div>
</div>
</div>
<div class="showcase-content">
<span class="showcase-category-tag">Smart Indoor Displays</span>
<h3 class="showcase-title">Smart Indoor LED <br/><span class="hero-title-accent">Screens
                                    (SMD, COB &amp; OLED)</span></h3>
<p class="showcase-desc">
                                Supplying state-of-the-art indoor SMD screens, high-contrast advanced COB
                                (Chip-On-Board) displays, and bespoke ultra-thin OLED arrays calibrated to absolute
                                color and contrast perfection.
                            </p>
<div class="showcase-specs">
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Fine Pixel
                                    Pitches (P0.9 - P2.5)</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> High-Contrast
                                    COB Diode Bonding</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Deep-Contrast
                                    Self-Lit OLED</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Factory Color &amp;
                                    Uniformity Calibrated</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!-- ======================== ROW 2 SHOWCASE ======================== -->
<section class="section" style="padding-top: 80px; padding-bottom: 80px;">
<div class="container-large">
<div class="products-showcase-container">
<!-- Row 2: Commercial & Outdoor Displays (reversed) -->
<div class="showcase-row reverse reveal">
<div class="showcase-visual">
<div class="showcase-img-frame">
<img alt="PIXON TECHNOLOGIES Outdoor LED Mesh Screen Facade" class="showcase-img" src="assetss/products home page/Gemini_Generated_Image_x5x3i2x5x3i2x5x3.png"/>
<div class="about-visual-overlay"></div>
</div>
</div>
<div class="showcase-content">
<span class="showcase-category-tag">High-Brightness Outdoor</span>
<h3 class="showcase-title">Weatherproof Outdoor <br/><span class="hero-title-accent">LED
                                    Screens &amp; Billboards</span></h3>
<p class="showcase-desc">
                                Engineered for 24/7 continuous operation in harsh Middle East &amp; Africa weather. Our
                                high-brightness outdoor fixed series and transparent mesh screens deliver ultimate glare
                                reduction and visual impact.
                            </p>
<div class="showcase-specs">
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Up to 10000 Nits
                                    Brightness</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> IP67 Dust &amp;
                                    Weatherproof Rating</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> High-Efficiency
                                    Passive Heat Dissipation</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Lightweight
                                    Structural Mesh Facades</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!-- ======================== ROW 3 SHOWCASE ======================== -->
<section class="section light-section" style="padding-top: 80px; padding-bottom: 80px;">
<div class="container-large">
<div class="products-showcase-container">
<!-- Row 3: Interactive Displays -->
<div class="showcase-row reveal">
<div class="showcase-visual">
<div class="showcase-img-frame">
<img alt="PIXON TECHNOLOGIES Interactive Smart Conference Display" class="showcase-img" src="assetss/products home page/Choosing The Right Technology For Multi-Touch Video Wall.jpg"/>
<div class="about-visual-overlay"></div>
</div>
</div>
<div class="showcase-content">
<span class="showcase-category-tag">Corporate &amp; Conference</span>
<h3 class="showcase-title">Executive Video Walls <br/><span class="hero-title-accent">&amp;
                                    Interactive Displays</span></h3>
<p class="showcase-desc">
                                Transform corporate workspaces, control centers, and lobbies with high-impact seamless
                                LCD/LED video walls and multi-touch smart interactive panels built for collaborative
                                power.
                            </p>
<div class="showcase-specs">
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Ultra-Narrow
                                    Bezels for Seamless Walls</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> 20-Point
                                    Multi-Touch Interactive Glass</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Mission-Critical
                                    24/7 Redundancy</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Unified Screen
                                    Sharing Control</div>
</div>

</div>
</div>
</div>
</div>
</section>
<!-- ======================== ROW 4 SHOWCASE ======================== -->
<section class="section" style="padding-top: 80px; padding-bottom: 80px;">
<div class="container-large">
<div class="products-showcase-container">
<!-- Row 4: Digital Signage & Kiosks (reversed) -->
<div class="showcase-row reverse reveal">
<div class="showcase-visual">
<div class="showcase-img-frame">
<img alt="PIXON TECHNOLOGIES Standalone Vertical Digital LCD Kiosk" class="showcase-img" src="assetss/products home page/Touch Screen Interactive Kiosk _ Shop Digital Signage.jpg"/>
<div class="about-visual-overlay"></div>
</div>
</div>
<div class="showcase-content">
<span class="showcase-category-tag">Commercial Signage</span>
<h3 class="showcase-title">Interactive Digital Kiosks <br/><span class="hero-title-accent">&amp;
                                    Poster Screens</span></h3>
<p class="showcase-desc">
                                Engage shopping mall crowds, luxury showrooms, and hospitality receptions with
                                double-sided smart posters, standalone vertical kiosks, and real-time remote cloud
                                scheduled layouts.
                            </p>
<div class="showcase-specs">
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Standalone Slim
                                    Vertical Kiosks</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Real-Time Remote
                                    Cloud Sync (CMS)</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Double-Sided
                                    High-Fidelity Posters</div>
<div class="showcase-spec-item"><span class="showcase-spec-dot"></span> Anti-Glare
                                    Screen with Toughened Glass</div>
</div>

</div>
</div>
</div>
</div>
</section>

<!-- ======================== DETAILED TECHNOLOGY FEATURES ======================== -->
<section class="section light-section" id="tech-specs" style="background: transparent;">
<div class="container">
<header style="text-align: center; margin-bottom: 60px;">
<div class="section-label" style="justify-content: center; margin-bottom: 12px;">Tech Specs</div>
<h2 class="section-title">Engineered For Visual Domination</h2>
<p class="section-sub" style="margin: 16px auto 0;">Every component on our displays represents
                        modern electronics servicing standards.</p>
</header>
<div class="why-choose-grid">
<div class="why-card reveal">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
</div>
<h4>Ultra HD Quality</h4>
<p>Spectrophotometer calibrated panels delivering infinite contrast, high HDR specs, and rich
                            pixel counts.</p>
<div class="why-card-glow-blue"></div>
</div>
<div class="why-card reveal reveal-delay-1">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12.55a11 11 0 0 1 14.08 0"/><path d="M1.42 9a16 16 0 0 1 21.16 0"/><path d="M8.53 16.11a6 6 0 0 1 6.95 0"/><line x1="12" y1="20" x2="12.01" y2="20"/></svg>
</div>
<h4>Smart Connectivity</h4>
<p>Seamless integrations with modern AV interfaces, WiFi cloud arrays, and smartphone
                            configurations.</p>
<div class="why-card-glow-orange"></div>
</div>
<div class="why-card reveal reveal-delay-2">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
</div>
<h4>Commercial Reliability</h4>
<p>Heavy-duty, long-lifespan capacitors, double-insulated wiring layers, and 24/7 continuous
                            operation support.</p>
<div class="why-card-glow-blue"></div>
</div>
<div class="why-card reveal reveal-delay-3">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
</div>
<h4>Energy Efficiency</h4>
<p>Intelligent backlight power dimming and low consumption panels that reduce operational
                            expenses.</p>
<div class="why-card-glow-orange"></div>
</div>
<div class="why-card reveal reveal-delay-4">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
</div>
<h4>Modern Design</h4>
<p>Minimalist bezels, sleek metallic mounting frame structures, and clean integrated cable
                            layouts.</p>
<div class="why-card-glow-blue"></div>
</div>
<div class="why-card reveal reveal-delay-5">
<div class="why-icon">
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
</div>
<h4>Professional Setup</h4>
<p>Certified engineers taking care of custom CAD calculations, precise calibration, and
                            structural anchors.</p>
<div class="why-card-glow-orange"></div>
</div>
</div>
</div>
</section>
<!-- ======================== INDUSTRY SOLUTIONS GRID ======================== -->
<section aria-labelledby="solutions-heading" class="section">
<div class="container">
<header style="text-align: center; margin-bottom: 60px;">
<div class="section-label" style="justify-content: center; margin-bottom: 12px;">Environments</div>
<h2 class="section-title" id="solutions-heading">Designed For Any Sector</h2>
<p class="section-sub" style="margin: 16px auto 0;">Configuring high-fidelity display networks
                        tailored to your specific ambient environments.</p>
</header>
<div class="industry-grid">
<div class="industry-card reveal">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><polyline points="17 2 12 7 7 2"/></svg></div>
<h4>Corporate Offices</h4>
<p>Equipping executive boardrooms, lobby entrances, and video wall systems with low-latency
                            screens.</p>
</div>
<div class="industry-card reveal reveal-delay-1">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg></div>
<h4>Retail Stores</h4>
<p>Engaging mall audiences with high-brightness window displays, product showcase kiosks, and
                            posters.</p>
</div>
<div class="industry-card reveal reveal-delay-2">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg></div>
<h4>Education Centers</h4>
<p>Empowering classrooms and lecture auditoriums with 20-point touch smart interactive
                            whiteboards.</p>
</div>
<div class="industry-card reveal reveal-delay-3">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg></div>
<h4>Hospitality &amp; Hotels</h4>
<p>Elevating guest luxury with sleek, custom-designed room smart TVs and digital menu banners.
                        </p>
</div>
<div class="industry-card reveal reveal-delay-4">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
<h4>Healthcare &amp; Clinics</h4>
<p>Providing high-contrast digital directions posters and high-resolution clinical imaging
                            displays.</p>
</div>
<div class="industry-card reveal reveal-delay-5">
<div class="industry-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19.82 2H4.18A2.18 2.18 0 0 0 2 4.18v15.64A2.18 2.18 0 0 0 4.18 22h15.64A2.18 2.18 0 0 0 22 19.82V4.18A2.18 2.18 0 0 0 19.82 2z"/><path d="M7 2v20"/><path d="M17 2v20"/><path d="M2 12h20"/><path d="M2 7h5"/><path d="M2 17h5"/><path d="M17 17h5"/><path d="M17 7h5"/></svg></div>
<h4>Residential Theaters</h4>
<p>Bringing cinematic, self-lit OLED television mastering and surround setup to residential
                            living.</p>
</div>
</div>
</div>
</section>
<!-- ======================== CLIENT TRUST COUNT CARD ======================== -->
<section class="section light-section" id="client-trust" style="padding-top: 40px; padding-bottom: 60px;">
<div class="container">
<div class="about-stats-grid" style="margin-top: 0;">
<div class="stat-glass-card reveal">
<div class="stat-num">10K<span>+</span></div>
<div class="stat-label">Customers</div>
<div class="stat-glow glow-orange"></div>
</div>
<div class="stat-glass-card reveal reveal-delay-1">
<div class="stat-num">15<span>+</span></div>
<div class="stat-label">Years of Experience</div>
<div class="stat-glow glow-blue"></div>
</div>
<div class="stat-glass-card reveal reveal-delay-2">
<div class="stat-num">1000<span>+</span></div>
<div class="stat-label">Channel Partners</div>
<div class="stat-glow glow-orange"></div>
</div>
<div class="stat-glass-card reveal reveal-delay-3">
<div class="stat-num">500<span>+</span></div>
<div class="stat-label">Completed Projects</div>
<div class="stat-glow glow-blue"></div>
</div>
<div class="stat-glass-card reveal reveal-delay-4">
<div class="stat-num">25<span>+</span></div>
<div class="stat-label">Subsidiaries</div>
<div class="stat-glow glow-orange"></div>
</div>
</div>
</div>
</section>

<!-- ============================================================
     SECTION: CTA
     ============================================================ -->
<section aria-labelledby="cta-heading" class="section cta-section" id="contact" style="padding: 0;">
    <div style="background: transparent; padding: 100px 20px; position: relative; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center;">
        
        <!-- Left curved lines -->
        <svg width="300" height="100%" viewBox="0 0 300 400" preserveAspectRatio="none" style="position: absolute; left: 0; top: 0; opacity: 0.5; pointer-events: none;">
            <path d="M0,0 C120,80 150,250 0,400" fill="none" stroke="#ffffff" stroke-width="1.5"/>
            <path d="M0,0 C160,100 190,270 0,400" fill="none" stroke="#ffffff" stroke-width="1"/>
            <path d="M0,0 C200,120 230,290 0,400" fill="none" stroke="#ffffff" stroke-width="0.5"/>
        </svg>

        <!-- Right curved lines -->
        <svg width="300" height="100%" viewBox="0 0 300 400" preserveAspectRatio="none" style="position: absolute; right: 0; bottom: 0; opacity: 0.5; pointer-events: none;">
            <path d="M300,400 C180,320 150,150 300,0" fill="none" stroke="#ffffff" stroke-width="1.5"/>
            <path d="M300,400 C140,300 110,130 300,0" fill="none" stroke="#ffffff" stroke-width="1"/>
            <path d="M300,400 C100,280 70,110 300,0" fill="none" stroke="#ffffff" stroke-width="0.5"/>
        </svg>

        <div class="container" style="position: relative; z-index: 2; max-width: 1000px;">
            <div class="cta-label" style="color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem; font-weight: 700; margin-bottom: 15px;">UPGRADE TODAY </div>
            <h2 id="cta-heading" style="color: #ffffff; font-size: clamp(20px, 2.8vw, 30px); font-weight: 500; margin-bottom: 20px; font-family: 'Inter', sans-serif;">Ready To Upgrade Your Display Experience?</h2>
            <p style="color: rgba(255, 255, 255, 0.95); font-size: 1.1rem; line-height: 1.6; margin-bottom: 40px; font-weight: 400; max-width: 650px; margin-left: auto; margin-right: auto;">
                From precise LED module calibrations to massive commercial LED meshes, PIXON TECHNOLOGIES's engineering team is ready to design and calibrate your layout.
            </p>
            <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
                <a href="contact.php" class="cta-btn-solid">
                    Contact Our Team
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="contact.php" class="cta-btn-outline">
                    Schedule Consultation
                    <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
            </div>
        </div>
    </div>
</section>
</main>
<!-- ======================== FOOTER ======================== -->
<?php include 'footer.php'; ?>
</body>
</html>