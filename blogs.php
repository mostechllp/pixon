<?php
// Local array of blog posts - Only the single required blog post
$blogPosts = [
    [
        'id' => 'outdoor-led-screen-brand-visibility',
        'title' => 'HOW OUTDOOR LED SCREENS CAN BUILD UP BRAND VISIBILITY',
        'date' => '07-09-2026',
        'category' => 'Outdoor LED Screens',
        'image' => 'assets/outdoor-led-screens-brand-visibility.webp',
        'image_alt' => 'How Outdoor LED Screens Can Build up Brand Visibility',
        'excerpt' => 'Discover how outdoor LED screens boost brand visibility, attract customers, promote offers, and create engaging advertising experiences for businesses.',
        'url' => '/blogs/outdoor-led-screen-brand-visibility/'
    ],
    [
        'id' => 'led-screen-company-dubai-tradeshow-display',
        'title' => 'HOW TO FIND THE RIGHT LED SIGN DISPLAY FOR TRADESHOWS IN DUBAI',
        'date' => '02-09-2026',
        'category' => 'Tradeshows & Expos',
        'image' => 'assets/led-sign-display-tradeshows-dubai.webp',
        'image_alt' => 'How to Find the Right LED Sign Display For Tradeshows in Dubai',
        'excerpt' => 'Discover the main parameters for choosing an LED signage for an exhibition in Dubai, from booth size and pixel pitch to content optimization and installation support.',
        'url' => '/blogs/led-screen-company-dubai-tradeshow-display/'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager & Analytics (Optimized Deferred Loading) -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-1DXF42V841');
    dataLayer.push({'gtm.start': new Date().getTime(), event: 'gtm.js'});

    (function() {
      var loaded = false;
      function initAnalytics() {
        if (loaded) return;
        loaded = true;
        ['scroll', 'mousemove', 'touchstart', 'click', 'keydown'].forEach(function(evt) {
          window.removeEventListener(evt, initAnalytics, { passive: true });
        });
        var s1 = document.createElement('script');
        s1.async = true;
        s1.src = 'https://www.googletagmanager.com/gtm.js?id=GTM-NPW8N7BC';
        document.head.appendChild(s1);

        var s2 = document.createElement('script');
        s2.async = true;
        s2.src = 'https://www.googletagmanager.com/gtm.js?id=G-1DXF42V841';
        document.head.appendChild(s2);
      }
      ['scroll', 'mousemove', 'touchstart', 'click', 'keydown'].forEach(function(evt) {
        window.addEventListener(evt, initAnalytics, { passive: true, once: true });
      });
      if ('requestIdleCallback' in window) {
        window.addEventListener('load', function() {
          requestIdleCallback(function() {
            setTimeout(initAnalytics, 1500);
          }, { timeout: 3500 });
        });
      } else {
        window.addEventListener('load', function() {
          setTimeout(initAnalytics, 2500);
        });
      }
    })();
  </script>
  <meta charset="utf-8" />
  <base href="/" />
  <link rel="canonical" href="https://www.pixonglobal.com/blogs" />
  
  <!-- Structured Data: BreadcrumbList -->
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
      "name": "Blogs",
      "item": "https://www.pixonglobal.com/blogs"
    }]
  }
  </script>

  <!-- Structured Data: CollectionPage / Blog -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Blog",
    "name": "PIXON TECHNOLOGIES Blog & Industry Insights",
    "description": "Expert blogs, technical guides, and tradeshow LED display insights from PIXON TECHNOLOGIES.",
    "url": "https://www.pixonglobal.com/blogs",
    "publisher": {
      "@type": "Organization",
      "name": "PIXON TECHNOLOGIES",
      "logo": {
        "@type": "ImageObject",
        "url": "https://www.pixonglobal.com/assets/pixon-logo.webp"
      }
    }
  }
  </script>

  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Explore the latest blogs, guides, and technical insights on commercial LED screens, exhibition signage, and AV solutions in Dubai &amp; Middle East." name="description" />
  <meta content="LED Screen Blog Dubai, exhibition LED display tips, tradeshow LED screen guide, commercial AV insights Dubai, PIXON blogs" name="keywords" />
  <meta content="PIXON TECHNOLOGIES" name="author" />
  
  <!-- Open Graph -->
  <meta content="Blogs &amp; Insights | PIXON TECHNOLOGIES" property="og:title" />
  <meta content="Explore the latest blogs, guides, and technical insights on commercial LED screens, exhibition signage, and AV solutions in Dubai &amp; Middle East." property="og:description" />
  <meta content="website" property="og:type" />
  <meta content="https://www.pixonglobal.com/blogs" property="og:url" />
  <meta content="https://www.pixonglobal.com/assets/led-sign-display-tradeshows-dubai.webp" property="og:image" />
  
  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="Blogs &amp; Insights | PIXON TECHNOLOGIES" />
  <meta name="twitter:description" content="Explore the latest blogs, guides, and technical insights on commercial LED screens, exhibition signage, and AV solutions." />
  <meta name="twitter:image" content="https://www.pixonglobal.com/assets/led-sign-display-tradeshows-dubai.webp" />

  <title>Blogs &amp; Industry Insights | PIXON TECHNOLOGIES</title>
  <link href="assets/favicon.png" rel="icon" type="image/png" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
  <link href="style.css?v=3" rel="stylesheet" />

  <!-- Scoped Styles for Blog Listing Page -->
  <style>
    .blog-listing-page {
      background: #F8FAFC;
      color: #1E293B;
      font-family: 'Inter', 'Poppins', sans-serif;
    }

    /* Hero Banner */
    .blog-hero-section {
      position: relative;
      background: #05082D;
      padding-top: 130px;
      padding-bottom: 60px;
      text-align: center;
      color: #FFFFFF;
      overflow: hidden;
    }
    .blog-hero-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(circle at 20% 30%, rgba(0, 217, 255, 0.15), transparent 40%),
                  radial-gradient(circle at 80% 20%, rgba(10, 61, 255, 0.25), transparent 45%);
      pointer-events: none;
    }
    .blog-hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(0, 217, 255, 0.1);
      border: 1px solid rgba(0, 217, 255, 0.25);
      color: #00D9FF;
      font-size: 0.85rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 1.5px;
      padding: 6px 18px;
      border-radius: 50px;
      margin-bottom: 20px;
    }
    .blog-hero-badge .dot {
      width: 7px;
      height: 7px;
      border-radius: 50%;
      background: #00D9FF;
      box-shadow: 0 0 8px #00D9FF;
    }
    .blog-hero-title {
      font-family: 'Poppins', sans-serif;
      font-size: clamp(32px, 4.5vw, 54px);
      font-weight: 700;
      color: #FFFFFF;
      margin-bottom: 16px;
      line-height: 1.2;
    }
    .blog-hero-title span {
      background: linear-gradient(135deg, #00D9FF 0%, #0A3DFF 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .blog-hero-sub {
      font-size: 1.1rem;
      color: #C7D2FE;
      max-width: 680px;
      margin: 0 auto;
      line-height: 1.6;
    }

    /* Responsive Blog Grid */
    .blog-posts-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(340px, 560px));
      justify-content: center;
      gap: 36px;
      max-width: 1200px;
      margin: 50px auto 80px auto;
    }

    /* Reference Card Styling */
    .blog-card {
      background: #FFFFFF;
      border: 1px solid #E2E8F0;
      border-radius: 24px;
      overflow: hidden;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
      display: flex;
      flex-direction: column;
      transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.35s ease;
    }
    .blog-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.1);
      border-color: #CBD5E1;
    }

    /* Card Image Container */
    .blog-card-media {
      position: relative;
      width: 100%;
      aspect-ratio: 16/9;
      overflow: hidden;
      background: #0F172A;
      display: block;
    }
    .blog-card-media img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .blog-card:hover .blog-card-media img {
      transform: scale(1.05);
    }

    /* Card Body */
    .blog-card-body {
      padding: 30px 28px;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    /* Date Badge (Exact Screenshot Pill) */
    .blog-card-date {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: #EEF2FF !important;
      color: #3B82F6 !important;
      font-size: 0.9rem;
      font-weight: 700;
      padding: 7px 18px;
      border-radius: 50px;
      align-self: flex-start;
      margin-bottom: 20px;
    }
    .blog-card-date svg {
      color: #3B82F6;
    }

    /* Title */
    .blog-card-title,
    .blog-card-title a {
      font-family: 'Poppins', 'Inter', sans-serif !important;
      font-size: 1.15rem !important;
      font-weight: 800 !important;
      line-height: 1.45 !important;
      color: #0F172A !important;
      text-transform: uppercase !important;
      margin: 0 0 16px 0;
      letter-spacing: -0.01em;
      transition: color 0.2s ease;
      text-decoration: none !important;
    }
    .blog-card:hover .blog-card-title,
    .blog-card:hover .blog-card-title a {
      color: #0A3DFF !important;
    }

    /* Excerpt */
    .blog-card-excerpt {
      font-size: 0.95rem !important;
      color: #64748B !important;
      line-height: 1.6 !important;
      margin-bottom: 26px !important;
      flex-grow: 1;
    }

    /* Read More Pill Button (Exact Screenshot Style) */
    .blog-card-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 9px 24px;
      border-radius: 50px;
      border: 1.5px solid #0F172A !important;
      color: #0F172A !important;
      font-size: 0.95rem;
      font-weight: 600;
      text-decoration: none;
      align-self: flex-start;
      transition: all 0.25s ease;
      background: transparent;
    }
    .blog-card-btn:hover {
      background: #0F172A !important;
      color: #FFFFFF !important;
      transform: translateX(4px);
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <main class="blog-listing-page">
    
    <!-- ======================== BLOG HERO ======================== -->
    <section class="blog-hero-section">
      <div class="container" style="position: relative; z-index: 2;">
        <div class="blog-hero-badge">
          <span class="dot"></span>
          PIXON BLOGS
        </div>
        <h1 class="blog-hero-title">
          Our Latest <span>Blogs</span>
        </h1>
        <p class="blog-hero-sub">
          Read our latest articles, expert guides, and updates on LED screen displays, exhibition signage, and AV solutions.
        </p>
      </div>
    </section>

    <!-- ======================== BLOG POSTS GRID ======================== -->
    <section class="section" style="padding-top: 40px; padding-bottom: 70px;">
      <div class="container">
        
        <div class="blog-posts-grid">
          <?php foreach ($blogPosts as $post): ?>
            <article class="blog-card">
              <a href="<?= htmlspecialchars($post['url']) ?>" class="blog-card-media" aria-label="<?= htmlspecialchars($post['title']) ?>">
                <img 
                  src="<?= htmlspecialchars($post['image']) ?>" 
                  alt="<?= htmlspecialchars($post['image_alt']) ?>" 
                  loading="lazy"
                  width="600"
                  height="338"
                />
              </a>
              <div class="blog-card-body">
                <div class="blog-card-date">
                  <svg fill="none" height="14" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="14">
                    <rect height="18" rx="2" ry="2" width="18" x="3" y="4"></rect>
                    <line x1="16" x2="16" y1="2" y2="6"></line>
                    <line x1="8" x2="8" y1="2" y2="6"></line>
                    <line x1="3" x2="21" y1="10" y2="10"></line>
                  </svg>
                  <?= htmlspecialchars($post['date']) ?>
                </div>
                <h2 class="blog-card-title">
                  <a href="<?= htmlspecialchars($post['url']) ?>" style="color: inherit; text-decoration: none;">
                    <?= htmlspecialchars($post['title']) ?>
                  </a>
                </h2>
                <p class="blog-card-excerpt">
                  <?= htmlspecialchars($post['excerpt']) ?>
                </p>
                <a href="<?= htmlspecialchars($post['url']) ?>" class="blog-card-btn" aria-label="Read more about <?= htmlspecialchars($post['title']) ?>">
                  Read More &rarr;
                </a>
              </div>
            </article>
          <?php endforeach; ?>
        </div>

      </div>
    </section>

    <!-- ======================== CTA SECTION (HIDDEN) ======================== -->
    <?php /*
    <section aria-labelledby="cta-heading" class="section cta-section" id="contact" style="padding: 0; background: #05082D;">
      <div style="background: transparent; padding: 90px 20px; position: relative; overflow: hidden; display: flex; justify-content: center; align-items: center; text-align: center;">
        
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
          <div class="cta-label" style="color: rgba(255,255,255,0.8); text-transform: uppercase; letter-spacing: 2px; font-size: 0.85rem; font-weight: 700; margin-bottom: 15px;">EXHIBITION EXCELLENCE</div>
          <h2 id="cta-heading" style="color: #ffffff; font-size: clamp(22px, 3vw, 32px); font-weight: 600; margin-bottom: 20px; font-family: 'Poppins', sans-serif;">Ready To Upgrade Your Display Experience?</h2>
          <p style="color: rgba(255, 255, 255, 0.9); font-size: 1.05rem; line-height: 1.6; margin-bottom: 36px; font-weight: 400; max-width: 650px; margin-left: auto; margin-right: auto;">
            From precise LED module calibrations to massive commercial LED meshes, PIXON TECHNOLOGIES's engineering team is ready to design and calibrate your layout.
          </p>
          <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="/contact" class="cta-btn-solid">
              Contact Our Team
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
            <a href="/contact" class="cta-btn-outline">
              Schedule Consultation
              <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" width="18" height="18"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    */ ?>

  </main>

  <?php include 'footer.php'; ?>
</body>

</html>
