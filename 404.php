<?php http_response_code(404); ?>
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
        s2.src = 'https://www.googletagmanager.com/gtag/js?id=G-1DXF42V841';
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
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="robots" content="noindex, follow" />
  <meta content="404 - Page Not Found | PIXON TECHNOLOGIES" name="description" />
  <title>404 - Page Not Found | PIXON TECHNOLOGIES</title>

  <link href="assets/favicon.png" rel="icon" type="image/png" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet" />
  <link href="/style.css?v=3" rel="stylesheet" />
  <style>
    .error-page-wrapper {
      min-height: 75vh;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      padding: 120px 20px 80px;
      text-align: center;
      overflow: hidden;
    }
    .error-content {
      position: relative;
      z-index: 2;
      max-width: 650px;
      margin: 0 auto;
    }
    .error-code-glow {
      font-size: clamp(80px, 15vw, 150px);
      font-weight: 900;
      line-height: 1;
      margin-bottom: 15px;
      background: linear-gradient(135deg, #ffffff 20%, var(--accent-orange, #ff6b35) 70%, var(--accent-cyan, #00d2ff) 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      letter-spacing: -2px;
      text-shadow: 0 10px 40px rgba(255, 107, 53, 0.25);
    }
    .error-title {
      font-size: clamp(24px, 4vw, 36px);
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 16px;
    }
    .error-desc {
      font-size: clamp(15px, 2vw, 17px);
      color: rgba(255, 255, 255, 0.7);
      line-height: 1.6;
      margin-bottom: 35px;
    }
    .error-actions {
      display: flex;
      gap: 15px;
      justify-content: center;
      flex-wrap: wrap;
    }
  </style>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NPW8N7BC"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <?php include 'header.php'; ?>

  <main>
    <section class="error-page-wrapper" aria-label="404 Error Section">
      <div class="hero-bg" style="position: absolute; inset: 0; z-index: 1;">
        <div class="hero-mesh"></div>
        <div class="orb orb-1" style="background: radial-gradient(circle, var(--accent-orange) 0%, transparent 70%); top: 20%; left: 15%; opacity: 0.35;"></div>
        <div class="orb orb-2" style="background: radial-gradient(circle, var(--accent-cyan) 0%, transparent 70%); bottom: 15%; right: 15%; opacity: 0.35;"></div>
      </div>

      <div class="container error-content">
        <div class="section-label" style="display: inline-block; margin-bottom: 10px;">Error 404</div>
        <div class="error-code-glow">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-desc">
          The page you are looking for might have been moved, renamed, or is temporarily unavailable. Let's get you back on track.
        </p>
        <div class="error-actions">
          <a class="btn btn-primary" href="/" style="display: inline-flex; align-items: center; gap: 8px;">
            Return to Home Page
            <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="16">
              <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
              <polyline points="9 22 9 12 15 12 15 22"></polyline>
            </svg>
          </a>
          <a class="btn btn-secondary" href="/contact" style="display: inline-flex; align-items: center; gap: 8px;">
            Contact Support
            <svg aria-hidden="true" fill="none" height="16" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="16">
              <line x1="5" x2="19" y1="12" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

  <script src="/script.js"></script>
</body>
</html>
