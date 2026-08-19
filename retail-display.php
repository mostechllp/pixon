<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<base href="/"/>
<link rel="canonical" href="https://pixonglobal.com/services/retail-display-solutions" />
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
    "name": "Services",
    "item": "https://www.pixonglobal.com/services"
  },{
    "@type": "ListItem",
    "position": 3,
    "name": "Retail Display Solutions",
    "item": "https://pixonglobal.com/services/retail-display-solutions"
  }]
}
</script>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="Pixon retail display solutions deliver engaging customer experiences with vibrant visuals, smart technology and impactful digital displays for modern retail spaces." name="description"/>
<meta content="retail display solutions, digital signage for retail, shop window LED, interactive kiosks, in-store video walls, PIXON TECHNOLOGIES" name="keywords"/>
<meta content="PIXON TECHNOLOGIES" name="author"/>
<title>Retail Display Solutions for Engaging Customer Experiences</title>
<link href="assets/fav-logo.jpg-removebg-preview.png" rel="icon" type="image/png"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="style.css?v=2" rel="stylesheet"/>
<style>
        /* ============================================================
           RETAIL DISPLAY CUSTOM STYLES
        ============================================================ */
        .retail-hero-section {
            padding-top: 140px;
            padding-bottom: 60px;
            min-height: 85vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .retail-hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        .retail-hero-content {
            z-index: 2;
        }

        .retail-hero-tag {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(0, 217, 255, 0.1);
            border: 1px solid rgba(0, 217, 255, 0.2);
            padding: 8px 16px;
            border-radius: 99px;
            color: var(--accent-cyan);
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 24px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .retail-hero-title {
            font-size: clamp(36px, 5vw, 52px);
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 24px;
            background: linear-gradient(to right, #FFFFFF, #C7D2FE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .retail-hero-desc {
            font-size: 18px;
            color: var(--text-secondary);
            line-height: 1.7;
            margin-bottom: 40px;
            max-width: 90%;
        }

        .retail-hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding-top: 30px;
            border-top: 1px solid var(--glass-border);
            margin-top: 40px;
        }

        .retail-stat-item h4 {
            font-size: 28px;
            color: var(--accent-cyan);
            font-weight: 700;
            margin-bottom: 4px;
        }

        .retail-stat-item p {
            font-size: 13px;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .retail-video-wrapper {
            position: relative;
            border-radius: 24px;
            padding: 12px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--glass-border);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255,255,255,0.1);
            transform: perspective(1000px) rotateY(-5deg);
            transition: transform 0.5s ease;
        }
        
        .retail-video-wrapper:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .retail-video-wrapper video {
            width: 100%;
            border-radius: 16px;
            display: block;
            object-fit: cover;
        }

        .retail-video-glow {
            position: absolute;
            inset: -20px;
            background: radial-gradient(circle at center, rgba(0, 217, 255, 0.2) 0%, transparent 70%);
            filter: blur(40px);
            z-index: -1;
            border-radius: inherit;
        }

        /* Architecture Section */
        .arch-section {
            padding: 100px 0;
            position: relative;
        }

        .arch-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 16px;
            margin-top: 60px;
            position: relative;
            width: 104%;
            margin-left: -2%;
        }

        .arch-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 0px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            z-index: 2;
            backdrop-filter: blur(10px);
        }

        .arch-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(0, 217, 255, 0.3);
            box-shadow: 0 20px 40px rgba(0, 217, 255, 0.1);
        }

        .arch-icon {
            width: 70px;
            height: 70px;
            background: rgba(0, 217, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            color: var(--accent-cyan);
        }

        .arch-title {
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
        }

        .arch-desc {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        .arch-step-badge {
            position: absolute;
            top: -15px;
            right: -15px;
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #0A3DFF, #00D9FF);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 16px;
            color: #fff;
            box-shadow: 0 10px 20px rgba(0, 217, 255, 0.3);
            border: 2px solid #05082D;
        }


        /* Product Showcase */
        .showcase-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-top: 50px;
        }

        .product-card {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        .product-card:hover {
            border-color: rgba(0, 217, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
        }

        .product-visual {
            height: 350px;
            position: relative;
            background: rgba(0,0,0,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px;
        }

        .product-visual img {
            max-height: 100%;
            object-fit: contain;
            transition: transform 0.5s ease;
            filter: drop-shadow(0 20px 30px rgba(0,0,0,0.5));
        }

        .product-card:hover .product-visual img {
            transform: scale(1.05);
        }

        .product-content {
            padding: 40px;
        }

        .product-type {
            color: var(--accent-cyan);
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .product-name {
            font-size: 28px;
            font-weight: 800;
            color: #fff;
            margin-bottom: 16px;
        }

        .product-desc {
            color: var(--text-secondary);
            font-size: 15px;
            line-height: 1.7;
            margin-bottom: 24px;
        }

        .spec-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            color: #fff;
        }

        .spec-item svg {
            color: #00D9FF;
            flex-shrink: 0;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 50px;
        }

        .feature-card {
            background: linear-gradient(180deg, rgba(255,255,255,0.03) 0%, rgba(255,255,255,0.01) 100%);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 40px 30px;
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%);
            transform: translateY(-5px);
            border-color: rgba(0, 217, 255, 0.4);
            box-shadow: 0 10px 30px rgba(0, 217, 255, 0.1);
        }

        .feature-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, rgba(10, 61, 255, 0.2), rgba(0, 217, 255, 0.2));
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 24px;
            color: #00D9FF;
        }

        .feature-title {
            font-size: 18px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
        }

        .feature-desc {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        /* Advantages Section */
        .adv-split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            margin-top: 50px;
        }

        .adv-image-stack {
            position: relative;
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 60px rgba(0,0,0,0.5);
            border: 1px solid var(--glass-border);
        }

        .adv-image-stack img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }

        .adv-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .adv-item {
            display: flex;
            gap: 20px;
            padding: 24px;
            background: var(--glass-bg);
            border-radius: 16px;
            border: 1px solid var(--glass-border);
            transition: all 0.3s ease;
        }

        .adv-item:hover {
            border-color: rgba(0, 217, 255, 0.3);
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(10px);
        }

        .adv-icon {
            width: 48px;
            height: 48px;
            background: rgba(0, 217, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #00D9FF;
            flex-shrink: 0;
        }

        .adv-text h4 {
            font-size: 18px;
            color: #fff;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .adv-text p {
            font-size: 14px;
            color: var(--text-secondary);
            line-height: 1.6;
        }

        @media (max-width: 1024px) {
            .retail-hero-grid, .showcase-grid, .adv-split {
                grid-template-columns: 1fr;
            }
            .arch-grid, .features-grid {
                grid-template-columns: repeat(2, 1fr);

        }

        @media (max-width: 768px) {
            .arch-grid, .features-grid, .retail-hero-stats, .spec-list {
                grid-template-columns: 1fr;
            }
            .retail-hero-title {
                font-size: 32px;
            }
            .adv-image-stack img {
                height: 400px;
            }
        }

        /* Light Section Overrides */
        .light-section .product-name,
        .light-section .adv-text h4,
        .light-section .spec-item,
        .light-section .arch-title,
        .light-section .feature-title {
            color: #0F172A !important;
        }
        
        .light-section .product-card,
        .light-section .adv-item,
        .light-section .arch-card,
        .light-section .feature-card {
            background: #ffffff !important;
            border-color: rgba(0,0,0,0.08) !important;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03) !important;
        }
        
        .light-section .product-card:hover,
        .light-section .adv-item:hover {
            border-color: rgba(0, 217, 255, 0.4) !important;
            box-shadow: 0 20px 40px rgba(0, 217, 255, 0.1) !important;
        }

        .light-section .product-visual {
            background: transparent !important;
        }

        .light-section .retail-video-wrapper {
            background: transparent !important;
            border: none !important;
            box-shadow: none !important;
            padding: 0 !important;
            transform: none !important;
        }
        
        .light-section .retail-video-glow {
            display: none !important;
        }
    </style>


</head>
<body>
<?php include 'header.php'; ?>
<main>
<!-- Hero Section -->
<section aria-label="Retail Display Solutions hero section" id="hero" style="display: flex; flex-direction: column; justify-content: center; height: auto !important; min-height: 55vh !important; padding-top: 120px; padding-bottom: 40px;">
<div class="hero-bg" style="background: url('assets/product-bg.jpg') center/cover no-repeat;">
<div style="position: absolute; inset: 0; background: linear-gradient(180deg, rgba(10,10,20,0.75) 0%, rgba(10,10,20,0.85) 100%);"></div>
</div>
<div class="hero-content">
<div class="container">
<div class="animate-fade-in-up" style="max-width: 850px; margin: 0 auto; text-align: center;">
<h1 class="hero-title" style="font-size: clamp(32px, 4.5vw, 52px); margin-bottom: 16px;">
                            Retail Display Solutions
                        </h1>
<p class="hero-sub" style="margin-bottom: 36px; max-width: 720px; margin-left: auto; margin-right: auto;">
                            Transform traditional brick-and-mortar stores into connected, data-driven smart retail environments. Eliminate manual labeling, execute promotions instantly, and synchronize global chain pricing with our centralized IoT platform.
                        </p>
</div>
</div>
</div>
</section>
<!-- Video Showcase Section -->
<section class="section light-section" style="padding-top: 80px; padding-bottom: 40px;">
<div class="container">
<div class="text-center reveal" style="position: relative; max-width: 1100px; margin: 0 auto; padding: 40px 80px;">
<!-- Left Quote -->
<div style="position: absolute; left: 0; top: 40%; transform: translateY(-50%); font-size: 180px; color: #f0f2f5; font-family: Arial, sans-serif; line-height: 1; user-select: none;">
                        “
                    </div>
<h2 style="font-size: clamp(28px, 3.5vw, 42px); font-weight: 900; color: #0a1128; margin-bottom: 25px; font-family: 'Montserrat', 'Inter', sans-serif; position: relative; z-index: 2; line-height: 1.2; letter-spacing: -0.02em;">
                        Smart Digital <span style="background: linear-gradient(90deg, #00d2ff 0%, #1a56ff 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Signage for Modern Retail</span>
</h2>
<p style="margin: 0 auto; text-align: justify; text-align-last: center; max-width: 850px; color: #64748b; font-size: 16px; line-height: 1.8; font-family: 'Inter', sans-serif; position: relative; z-index: 2;">
                        Pixon Digital Display Solutions help businesses modernize in-store communication with vibrant, high-resolution digital displays that simplify promotions, pricing, and customer engagement. Designed for retail stores, supermarkets, showrooms, and commercial spaces, Pixon displays integrate seamlessly with your existing systems, enabling centralized content management, real-time updates, and dynamic advertising. Transform traditional retail spaces into interactive digital environments that enhance the customer experience while improving operational efficiency.
                    </p>
<!-- Right Quote -->
<div style="position: absolute; right: 0; top: 40%; transform: translateY(-50%); font-size: 180px; color: #f0f2f5; font-family: Arial, sans-serif; line-height: 1; user-select: none;">
                        ”
                    </div>
</div>
<video autoplay="" loop="" muted="" playsinline="" style="width: 100%; max-width: 1100px; margin: 40px auto 0; display: block; border-radius: 16px;">
<source src="assetss/Retails/66eccf7193406.mp4" type="video/mp4"/>
                        Your browser does not support the video tag.
                    </video>
</div>
</section>
<!-- System Architecture Interactive Flow -->
<section class="arch-section" id="architecture">
<div class="container">
<div class="text-center reveal">
<div class="section-label" style="justify-content: center;">System Architecture</div>
<h2 class="section-title" style="text-align: center; font-size: clamp(28px, 3.5vw, 42px);">The Connected <span class="hero-title-accent">Retail Display Solution</span></h2>
<p class="section-sub text-center" style="margin: 0 auto; text-align: center;">A comprehensive 4-layer architecture ensuring rapid data sync, security, and unified global store management.</p>
</div>
<div class="arch-grid reveal reveal-delay-2">
<!-- Step 1 -->
<div class="arch-card">
<div class="arch-step-badge">1</div>
<div class="arch-icon">
<svg fill="none" height="32" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="32"><path d="M17.5 19H9a7 7 0 1 1 6.71-9h1.79a4.5 4.5 0 1 1 0 9Z"></path></svg>
</div>
<h3 class="arch-title">DOMORE Cloud</h3>
<p class="arch-desc">Centralized cloud platform. Manage templates, multi-store pricing, and API docking with your existing ERP/POS.</p>
</div>
<!-- Step 2 -->
<div class="arch-card">
<div class="arch-step-badge">2</div>
<div class="arch-icon">
<svg fill="none" height="32" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="32"><path d="M12 2v20"></path><path d="m4.93 10.93 14.14 14.14"></path><path d="m2 18 20-20"></path><path d="m14.14 4.93-14.14 14.14"></path></svg>
</div>
<h3 class="arch-title">IoT Gateway</h3>
<p class="arch-desc">BLE 5.0 base stations delivering military-grade anti-interference, long-range secure wireless transmission to all store labels.</p>
</div>
<!-- Step 3 -->
<div class="arch-card">
<div class="arch-step-badge">3</div>
<div class="arch-icon">
<svg fill="none" height="32" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="32"><rect height="14" rx="2" width="20" x="2" y="3"></rect><line x1="8" x2="16" y1="21" y2="21"></line><line x1="12" x2="12" y1="17" y2="21"></line></svg>
</div>
<h3 class="arch-title">Smart Displays</h3>
<p class="arch-desc">Ultra-thin E-Ink Electronic Shelf Labels and full-color LCD edge screens displaying real-time prices &amp; promos.</p>
</div>
<!-- Step 4 -->
<div class="arch-card">
<div class="arch-step-badge">4</div>
<div class="arch-icon">
<svg fill="none" height="32" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewbox="0 0 24 24" width="32"><path d="M21 12a9 9 0 0 0-9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"></path><path d="M3 3v5h5"></path><path d="M3 12a9 9 0 0 0 9 9 9.75 9.75 0 0 0 6.74-2.74L21 16"></path><path d="M16 21v-5h5"></path></svg>
</div>
<h3 class="arch-title">Analytics &amp; Sensors</h3>
<p class="arch-desc">Millimeter-wave radar and environmental sensors capturing daily footfall traffic to empower collaborative decision-making.</p>
</div>
</div>
</div>
</section>
<!-- Core Display Showcase -->
<section class="section light-section">
<div class="container">
<div class="text-center reveal">
<div class="section-label" style="justify-content: center;">Hardware Showcase</div>
<h2 class="section-title" style="text-align: center; font-size: clamp(28px, 3.5vw, 42px);">Digital Retail <span class="hero-title-accent">Display Terminals</span></h2>
<p class="section-sub text-center" style="margin: 0 auto; text-align: center;">High-visibility, low-power pricing displays for every retail corner.</p>
</div>
<div class="showcase-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px;">
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 1" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.01%20PM%20(1).jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 2" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.01%20PM.jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 3" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.02%20PM.jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 4" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.03%20PM%20(1).jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 5" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.03%20PM.jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 6" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.04%20PM.jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 7" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.05%20PM%20(1).jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
<div class="product-card reveal">
<div class="product-visual" style="height: 250px; background: transparent; padding: 20px;">
<img alt="Retail Display Model 8" src="assetss/Retails/WhatsApp%20Image%202026-07-20%20at%205.49.05%20PM.jpeg" style="max-height: 100%; max-width: 100%; object-fit: contain; border-radius: 8px;"/>
</div>
<div class="product-content" style="padding: 20px;">
<div class="product-type" style="font-size: 12px; color: #00D9FF; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">Display Series</div>
<h3 class="product-name" style="font-size: 18px; margin-bottom: 10px;">Smart Retail Terminal</h3>
</div>
</div>
</div>
</div>
</section>
<!-- Functions & Capabilities -->
<section class="section" style="padding-top: 100px;">
<div class="container">
<div class="text-center reveal">
<div class="section-label" style="justify-content: center;">Smart Functions</div>
<h2 class="section-title" style="text-align: center; font-size: clamp(28px, 3.5vw, 42px);">Elevating <span class="hero-title-accent">In-Store Operations</span></h2>
</div>
<div class="features-grid reveal reveal-delay-2">
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
<h4 class="feature-title">Product Info Management</h4>
<p class="feature-desc">Quick price updates with electronic labels and unified design templates to boost merchandising efficiency.</p>
</div>
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
<h4 class="feature-title">Dynamic Central Pricing</h4>
<p class="feature-desc">Connect every commodity into one unified Internet system through ESLs, realizing instant centralized pricing.</p>
</div>
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg></div>
<h4 class="feature-title">Chain Store Sync</h4>
<p class="feature-desc">Real-time unified pricing across multiple branches with centralized remote management by headquarters.</p>
</div>
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
<h4 class="feature-title">Accurate Positioning</h4>
<p class="feature-desc">Locate specific items on store shelves in a second using embedded BLE positioning technology.</p>
</div>
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M3 3v18h18"></path><path d="m19 9-5 5-4-4-3 3"></path></svg></div>
<h4 class="feature-title">Traffic Analytics</h4>
<p class="feature-desc">Utilize millimeter-wave radars to count daily visitors and generate footfall heatmaps for collaborative decision-making.</p>
</div>
<div class="feature-card">
<div class="feature-icon"><svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><rect height="14" rx="2" width="20" x="2" y="3"></rect><path d="M8 21h8"></path><path d="M12 17v4"></path></svg></div>
<h4 class="feature-title">Automated Workflows</h4>
<p class="feature-desc">Trigger automatic promotions, sales alerts, and low-stock indicators right on the shelf label.</p>
</div>
</div>
</div>
</section>
<!-- Solution Advantages Section -->
<section class="section light-section" style="padding-bottom: 100px;">
<div class="container">
<div class="adv-split">
<div class="adv-image-stack reveal">
<img alt="Smart Retail Environment In Action" src="assetss/Retails/imgi_22_6840f982781e5.jpg"/>
</div>
<div class="adv-content reveal reveal-delay-2">
<div class="section-label">Key Advantages</div>
<h2 class="section-title" style="margin-bottom: 30px; font-size: clamp(28px, 3.5vw, 42px);">Why Brands <span class="hero-title-accent">Choose Us</span></h2>
<div class="adv-list">
<div class="adv-item">
<div class="adv-icon">
<svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M22 12h-4l-3 9L9 3l-3 9H2"></path></svg>
</div>
<div class="adv-text">
<h4>Integration of Multiple Systems</h4>
<p>Seamlessly connect with your existing retail ERP or POS systems for frictionless store management and automated data sync.</p>
</div>
</div>
<div class="adv-item">
<div class="adv-icon">
<svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
</div>
<div class="adv-text">
<h4>Smart Pricing, One-Click Updates</h4>
<p>Execute one-click price changes updating labels in seconds. Supports bulk pricing changes, drastically reducing human errors.</p>
</div>
</div>
<div class="adv-item">
<div class="adv-icon">
<svg fill="none" height="24" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" width="24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
</div>
<div class="adv-text">
<h4>Uniform Pricing Control</h4>
<p>Headquarters can centrally control pricing logic, assign store-specific permissions, and manage global promotions effortlessly.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- CTA Section -->
<section class="section" id="get-started" style="padding-top: 80px; padding-bottom: 80px; background: rgba(0, 217, 255, 0.02); text-align: center; position: relative; overflow: hidden; border-top: 1px solid var(--glass-border);">
<div style="position: absolute; top: 0; left: 50%; transform: translateX(-50%); width: 60%; height: 300px; background: radial-gradient(ellipse at top, rgba(0, 217, 255, 0.1) 0%, transparent 70%); pointer-events: none;"></div>
<div class="container" style="position: relative; z-index: 2; max-width: 900px; margin: 0 auto; background: var(--glass-bg); border: 1px solid var(--glass-border); border-radius: 32px; padding: 80px 40px; box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3); backdrop-filter: blur(10px);">
<div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-bottom: 24px;">
<div style="height: 1px; width: 40px; background: linear-gradient(90deg, transparent, #00D9FF);"></div>
<span style="color: #00D9FF; font-weight: 700; letter-spacing: 3px; font-size: 13px; text-transform: uppercase;">Transform Your Store</span>
<div style="height: 1px; width: 40px; background: linear-gradient(270deg, transparent, #00D9FF);"></div>
</div>
<h2 style="font-size: clamp(32px, 4vw, 48px); font-weight: 800; line-height: 1.2; margin-bottom: 24px;">
                    Ready to Build a<br/>Smart Retail Environment?
                </h2>
<p style="font-size: 18px; color: var(--text-secondary); line-height: 1.6; margin-bottom: 40px; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Partner with our IoT display experts to design, deploy, and manage digital shelf systems that increase merchandising efficiency and drive retail sales.
                </p>
<div style="display: flex; align-items: center; justify-content: center; gap: 20px; flex-wrap: wrap;">
<a class="btn btn-primary" href="contact.php" style="padding: 16px 36px; font-size: 16px;">
                        Contact Our Team
                        <svg fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewbox="0 0 24 24" width="18">
<line x1="5" x2="19" y1="12" y2="12"></line>
<polyline points="12 5 19 12 12 19"></polyline>
</svg>
</a>
</div>
</div>
</section>
</main>
<!-- ======================== FOOTER ======================== -->
<?php include 'footer.php'; ?>
</body>
</html>