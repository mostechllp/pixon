<?php
require_once 'admin/config/database.php';
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
    <base href="/" />
    <link rel="canonical" href="https://www.pixonglobal.com/projects" />
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
        "name": "Projects",
        "item": "https://www.pixonglobal.com/projects"
      }]
    }
    </script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
        content="Discover proven strategies for project success, from effective planning and team management to communication, execution and performance tracking for every manager."
        name="description" />
    <meta
        content="PIXON TECHNOLOGIES projects, display installation Dubai, video wall Riyadh, smart screens Middle East & Africa, commercial displays Middle East & Africa"
        name="keywords" />
    <meta content="PIXON TECHNOLOGIES" name="author" />
    <title>Unlocking Project Success: Strategies for Every Manager</title>
    <link href="assets/fav-logo.jpg-removebg-preview.png" rel="icon" type="image/png" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="style.css?v=2" rel="stylesheet" />

    <style>
        /* ============================================================
           PIXON — Projects Page Redesign
           Palette:  --pxn-bg #060B2A · --pxn-surface #0D1444
                     --pxn-accent #00D9FF · --pxn-accent-2 #3D5AFE
                     --pxn-text #EEF1FF · --pxn-muted #97A0D1
           Display face: Space Grotesk · Body face: Inter
           Signature: pixel-grid hero with a scanning refresh line,
           echoing an LED panel calibrating before it lights up.
           ============================================================ */

        :root {
            --pxn-bg: #060B2A;
            --pxn-surface: #0D1444;
            --pxn-surface-2: #101A56;
            --pxn-accent: #00D9FF;
            --pxn-accent-2: #3D5AFE;
            --pxn-text: #EEF1FF;
            --pxn-muted: #97A0D1;
            --pxn-border: rgba(255, 255, 255, 0.09);
        }

        .pxn-projects * {
            box-sizing: border-box;
        }

        .pxn-projects {
            background: var(--pxn-bg);
            color: var(--pxn-text);
            font-family: 'Inter', sans-serif;
        }

        .pxn-projects h1,
        .pxn-projects h2,
        .pxn-projects h3 {
            font-family: 'Poppins', sans-serif;
        }

        /* ---------- HERO ---------- */
        .pxn-hero {
            position: relative;
            min-height: 40vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: radial-gradient(circle at center 20%, #0a1142, var(--pxn-bg));
            border-bottom: 1px solid var(--pxn-border);
            padding-top: 100px;
            padding-bottom: 50px;
        }

        @media (max-width: 640px) {
            .pxn-hero {
                padding-top: 100px;
                min-height: 35vh;
            }
        }

        .pxn-hero-pixels {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
            -webkit-mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 20%, transparent 80%);
            mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black 20%, transparent 80%);
        }

        .pxn-hero-glow {
            position: absolute;
            width: 800px;
            height: 800px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 217, 255, 0.08), transparent 60%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            filter: blur(40px);
            pointer-events: none;
        }
        
        .pxn-hero-glow-2 {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(61, 90, 254, 0.12), transparent 60%);
            top: 0;
            right: 0;
            transform: translate(30%, -30%);
            filter: blur(50px);
            pointer-events: none;
        }

        .pxn-hero-inner {
            position: relative;
            z-index: 2;
            max-width: 900px;
            padding: 0 24px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .pxn-eyebrow {
            position: relative;
            z-index: 3;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 13px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--pxn-accent);
            font-weight: 700;
            margin-bottom: 24px;
            padding: 8px 20px;
            border-radius: 999px;
            background: rgba(13, 20, 68, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .pxn-eyebrow::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--pxn-accent);
            box-shadow: 0 0 12px 3px rgba(0, 217, 255, 0.6);
            animation: pxn-pulse 2s infinite;
        }

        @keyframes pxn-pulse {
            0% { box-shadow: 0 0 0 0 rgba(0, 217, 255, 0.7); }
            70% { box-shadow: 0 0 0 8px rgba(0, 217, 255, 0); }
            100% { box-shadow: 0 0 0 0 rgba(0, 217, 255, 0); }
        }

        .pxn-hero-title {
            font-size: clamp(32px, 4.5vw, 48px);
            font-weight: 800;
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin: 0 0 20px;
            color: #ffffff;
            text-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .pxn-hero-title span {
            background: linear-gradient(to right, #00D9FF, #3D5AFE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            display: inline-block;
        }

        .pxn-hero-sub {
            font-size: 18px;
            line-height: 1.7;
            color: #b4bce0;
            max-width: 650px;
            margin: 0 auto 30px;
            font-weight: 400;
        }
        
        .pxn-hero-stats {
            display: flex;
            gap: 40px;
            margin-top: 20px;
            justify-content: center;
            border-top: 1px solid rgba(255,255,255,0.05);
            padding-top: 30px;
            width: 100%;
            max-width: 600px;
            flex-wrap: wrap;
        }
        
        .pxn-hero-stat {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .pxn-hero-stat-val {
            font-size: 28px;
            font-weight: 800;
            color: #ffffff;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 4px;
        }
        
        .pxn-hero-stat-val span {
            color: var(--pxn-accent);
        }
        
        .pxn-hero-stat-label {
            font-size: 11px;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 600;
        }

        /* ---------- FILTER BAR ---------- */
        .pxn-filterbar {
            position: sticky;
            top: 0;
            z-index: 20;
            display: flex;
            justify-content: center;
            gap: 12px;
            padding: 20px 20px;
            background: #030712;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            flex-wrap: wrap;
        }

        .pxn-filter-btn {
            font-family: 'Inter', sans-serif;
            font-size: 13px;
            font-weight: 600;
            color: #9ca3af;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 999px;
            padding: 8px 20px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .pxn-filter-btn:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.08);
        }

        .pxn-filter-btn.is-active {
            color: #030712;
            background: #00D9FF;
            border-color: #00D9FF;
            box-shadow: 0 0 15px rgba(0, 217, 255, 0.3);
        }

        /* ---------- GRID SECTION ---------- */
        .pxn-section {
            padding: 60px 20px 30px;
            background-color: #fff;
        }

        .pxn-container {
            max-width: 1360px;
            margin: 0 auto;
        }

        .pxn-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        .pxn-card {
            position: relative;
            border-radius: 14px;
            overflow: hidden;
            cursor: pointer;
            background: var(--pxn-surface);
            border: 1px solid var(--pxn-border);
            aspect-ratio: 4 / 3;
            transition: transform 0.35s cubic-bezier(0.2, 0.8, 0.2, 1), border-color 0.35s ease, box-shadow 0.35s ease;
        }

        .pxn-card:hover {
            transform: translateY(-6px);
            border-color: rgba(0, 217, 255, 0.35);
            box-shadow: 0 20px 40px rgba(0, 6, 40, 0.55), 0 0 0 1px rgba(0, 217, 255, 0.12);
        }

        .pxn-card img,
        .pxn-card video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.6s ease;
        }

        .pxn-card:hover img,
        .pxn-card:hover video {
            transform: scale(1.06);
        }

        .pxn-card-badge {
            position: absolute;
            top: 12px;
            left: 12px;
            z-index: 3;
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            padding: 5px 10px;
            border-radius: 999px;
            background: rgba(6, 11, 42, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(6px);
            color: var(--pxn-text);
        }

        .pxn-card-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(to top, rgba(4, 9, 40, 0.92) 0%, rgba(4, 9, 40, 0) 55%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .pxn-card:hover .pxn-card-overlay {
            opacity: 1;
        }

        .pxn-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.75);
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: rgba(0, 217, 255, 0.85);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            z-index: 3;
        }

        .pxn-card:hover .pxn-play {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .pxn-play svg {
            width: 20px;
            height: 20px;
            fill: #04101f;
            margin-left: 3px;
        }

        .pxn-card[data-hidden="true"] {
            display: none;
        }

        /* ---------- LIGHTBOX ---------- */
        .pxn-lightbox {
            position: fixed;
            inset: 0;
            z-index: 999;
            background: rgba(4, 8, 30, 0.92);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        .pxn-lightbox.is-active {
            opacity: 1;
            pointer-events: auto;
        }

        .pxn-lightbox-stage {
            position: relative;
            max-width: 90vw;
            max-height: 86vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pxn-lightbox-stage img,
        .pxn-lightbox-stage video {
            max-width: 90vw;
            max-height: 86vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.6);
        }

        .pxn-lightbox-close,
        .pxn-lightbox-nav {
            position: fixed;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--pxn-border);
            color: var(--pxn-text);
            border-radius: 50%;
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
            transition: all 0.2s ease;
        }

        .pxn-lightbox-close:hover,
        .pxn-lightbox-nav:hover {
            background: var(--pxn-accent);
            color: #04101f;
            border-color: var(--pxn-accent);
        }

        .pxn-lightbox-close {
            top: 24px;
            right: 24px;
        }

        .pxn-lightbox-nav.prev {
            left: 24px;
            top: 50%;
            transform: translateY(-50%);
        }

        .pxn-lightbox-nav.next {
            right: 24px;
            top: 50%;
            transform: translateY(-50%);
        }

        .pxn-lightbox-count {
            position: fixed;
            bottom: 26px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 12.5px;
            letter-spacing: 0.08em;
            color: var(--pxn-muted);
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--pxn-border);
            padding: 7px 16px;
            border-radius: 999px;
        }

        @media (max-width: 640px) {
            .pxn-lightbox-nav {
                width: 38px;
                height: 38px;
            }

            .pxn-lightbox-nav.prev {
                left: 10px;
            }

            .pxn-lightbox-nav.next {
                right: 10px;
            }

            .pxn-lightbox-close {
                top: 14px;
                right: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .pxn-card,
            .pxn-card img,
            .pxn-card video {
                animation: none !important;
                transition: none !important;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
<main class="pxn-projects">
        <!-- ======================== GALLERY HERO ======================== -->
        <header class="pxn-hero">
            <div class="pxn-hero-pixels"></div>
            <div class="pxn-hero-top-line"></div>
            <div class="pxn-hero-glow-1"></div>
            <div class="pxn-hero-glow-2"></div>
            
            <div class="pxn-hero-inner">
                <div class="pxn-eyebrow">PROJECT PORTFOLIO</div>
                <h1 class="pxn-hero-title">Every screen here <span>was built to be seen.</span></h1>
                <p class="pxn-hero-sub">A working record of PIXON's indoor and outdoor LED and AV installations across the Middle East &amp; Africa &mdash; boardrooms, retail fa&ccedil;ades, transit corridors, and kinetic displays.</p>
            </div>
        </header>

        <!-- ======================== FILTER BAR ======================== -->
        <div class="pxn-filterbar">
            <button class="pxn-filter-btn is-active" data-filter="all">All Projects</button>
            <button class="pxn-filter-btn" data-filter="indoor">Indoor LED</button>
            <button class="pxn-filter-btn" data-filter="outdoor">Outdoor LED</button>
        </div>

        <!-- ======================== GRID SECTION ======================== -->
        <section class="pxn-section">
            <div class="pxn-container">
                <div class="pxn-grid" id="pxnGrid">
                    <?php
                    $query = "SELECT * FROM projects ORDER BY created_at DESC";
                    $res = $conn->query($query);
                    if ($res && $res->num_rows > 0) {
                        while($row = $res->fetch_assoc()) {
                            $video_url = htmlspecialchars($row['video_path']);
                            $category = htmlspecialchars($row['category']);
                            $title = htmlspecialchars($row['title']);
                            
                            $ext = strtolower(pathinfo($video_url, PATHINFO_EXTENSION));
                            $is_image = in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']);
                            $data_type = $is_image ? 'image' : 'video';
                            
                            echo '<div class="pxn-card" data-src="' . $video_url . '" data-type="' . $data_type . '" data-category="' . $category . '">';
                            
                            if ($is_image) {
                                echo '<img src="' . $video_url . '" alt="' . $title . '">';
                            } else {
                                echo '<video autoplay loop muted playsinline src="' . $video_url . '"></video>';
                            }
                            
                            echo '<div class="pxn-card-overlay">
                                        <h3 style="color: white; font-size: 1.2rem; margin: 0; text-align: center; position: absolute; bottom: 20px; left: 0; right: 0; z-index: 20; text-shadow: 0 2px 4px rgba(0,0,0,0.8);">' . $title . '</h3>
                                    </div>
                                    <div class="pxn-card-badge">' . ucfirst($category) . '</div>';
                                    
                            if (!$is_image) {
                                echo '<div class="pxn-play">
                                        <svg viewBox="0 0 24 24"><polygon points="5 3 19 12 5 21 5 3"></polygon></svg>
                                    </div>';
                            }
                            
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

        <!-- ======================== LIGHTBOX ======================== -->
        <div class="pxn-lightbox" id="pxnLightbox">
            <button class="pxn-lightbox-close" id="pxnClose" aria-label="Close">&times;</button>
            <button class="pxn-lightbox-nav prev" id="pxnPrev" aria-label="Previous">&#8249;</button>
            <button class="pxn-lightbox-nav next" id="pxnNext" aria-label="Next">&#8250;</button>
            <div class="pxn-lightbox-stage" id="pxnStage"></div>
            <div class="pxn-lightbox-count" id="pxnCount"></div>
        </div>

    </main>

    <?php include 'footer.php'; ?>

    <script>
        (() => {
            const grid = document.getElementById('pxnGrid');
            const cards = Array.from(grid.querySelectorAll('.pxn-card'));
            const filterBtns = document.querySelectorAll('.pxn-filter-btn');

            /* ---- Filtering ---- */
            filterBtns.forEach((btn) => {
                btn.addEventListener('click', () => {
                    filterBtns.forEach((b) => b.classList.remove('is-active'));
                    btn.classList.add('is-active');
                    const filter = btn.getAttribute('data-filter');

                    cards.forEach((card) => {
                        const match = filter === 'all' || card.getAttribute('data-category') === filter;
                        card.setAttribute('data-hidden', match ? 'false' : 'true');
                    });
                });
            });

            /* ---- Lightbox ---- */
            const lightbox = document.getElementById('pxnLightbox');
            const stage = document.getElementById('pxnStage');
            const countEl = document.getElementById('pxnCount');
            let visibleCards = [];
            let activeIndex = 0;

            function getVisibleCards() {
                return cards.filter((c) => c.getAttribute('data-hidden') !== 'true');
            }

            function renderMedia(card) {
                stage.innerHTML = '';
                const src = card.getAttribute('data-src');
                const type = card.getAttribute('data-type');

                if (type === 'video') {
                    const v = document.createElement('video');
                    v.src = src;
                    v.autoplay = true;
                    v.loop = true;
                    v.controls = true;
                    v.muted = true;
                    v.setAttribute('playsinline', '');
                    stage.appendChild(v);
                } else {
                    const img = document.createElement('img');
                    img.src = src;
                    img.alt = 'Project view';
                    stage.appendChild(img);
                }
            }

            function openLightbox(card) {
                visibleCards = getVisibleCards();
                activeIndex = visibleCards.indexOf(card);
                if (activeIndex === -1) activeIndex = 0;
                renderMedia(visibleCards[activeIndex]);
                countEl.textContent = (activeIndex + 1) + ' / ' + visibleCards.length;
                lightbox.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }

            function closeLightbox() {
                lightbox.classList.remove('is-active');
                document.body.style.overflow = '';
                const video = stage.querySelector('video');
                if (video) video.pause();
                setTimeout(() => { stage.innerHTML = ''; }, 250);
            }

            function step(delta) {
                if (!visibleCards.length) return;
                activeIndex = (activeIndex + delta + visibleCards.length) % visibleCards.length;
                renderMedia(visibleCards[activeIndex]);
                countEl.textContent = (activeIndex + 1) + ' / ' + visibleCards.length;
            }

            cards.forEach((card) => {
                card.addEventListener('click', () => openLightbox(card));
            });

            document.getElementById('pxnClose').addEventListener('click', closeLightbox);
            document.getElementById('pxnPrev').addEventListener('click', () => step(-1));
            document.getElementById('pxnNext').addEventListener('click', () => step(1));

            lightbox.addEventListener('click', (e) => {
                if (e.target === lightbox) closeLightbox();
            });

            document.addEventListener('keydown', (e) => {
                if (!lightbox.classList.contains('is-active')) return;
                if (e.key === 'Escape') closeLightbox();
                if (e.key === 'ArrowLeft') step(-1);
                if (e.key === 'ArrowRight') step(1);
            });

            /* ---- Play videos only when their card is visible in viewport ---- */
            const io = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    const video = entry.target.querySelector('video');
                    if (!video) return;
                    if (entry.isIntersecting) {
                        video.play().catch(() => { });
                    } else {
                        video.pause();
                    }
                });
            }, { threshold: 0.25 });

            cards.forEach((card) => io.observe(card));
        })();
    </script>

</body>

</html>