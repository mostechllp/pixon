<?php
// thankyou.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Thank You - PIXON TECHNOLOGIES</title>
    <link href="assets/fav-logo.jpg-removebg-preview.png" rel="icon" type="image/png" />
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" />
    <style>
        .thankyou-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 70vh;
            padding: 120px 20px;
            text-align: center;
            background-image: url('assets/product-bg.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        .thankyou-bg-overlay {
            position: absolute;
            inset: 0;
            background: rgba(3, 7, 18, 0.85);
            z-index: 0;
        }
        .thankyou-card {
            position: relative;
            z-index: 2;
            background: rgba(10, 61, 255, 0.05);
            border: 1px solid rgba(10, 61, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 60px 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
            animation: fadeIn 0.8s ease-out forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .thankyou-icon {
            color: #10b981;
            width: 80px;
            height: 80px;
            margin-bottom: 24px;
        }
        .thankyou-title {
            font-family: 'Poppins', sans-serif;
            font-size: 40px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
        }
        .thankyou-desc {
            color: rgba(255,255,255,0.8);
            font-size: 18px;
            margin-bottom: 30px;
            line-height: 1.6;
        }
        .thankyou-redirect-text {
            color: rgba(255,255,255,0.6);
            font-size: 15px;
            margin-bottom: 30px;
        }
        .btn-return {
            display: inline-block;
            padding: 14px 32px;
            background: #0A3DFF;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 1px solid transparent;
        }
        .btn-return:hover {
            background: transparent;
            border-color: #0A3DFF;
            color: #fff;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="thankyou-container">
            <div class="thankyou-bg-overlay"></div>
            <div class="thankyou-card">
                <svg class="thankyou-icon" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <h1 class="thankyou-title">Thank You!</h1>
                <p class="thankyou-desc">Your request has been successfully received. Our team of engineers will review your details and contact you shortly.</p>
                
                <p class="thankyou-redirect-text">You will be redirected back in <span id="countdown" style="font-weight:bold;color:#0A3DFF;">5</span> seconds...</p>
                
                <a href="index.php" id="return-btn" class="btn-return">Return Now</a>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Extract redirect URL from query string
            const urlParams = new URLSearchParams(window.location.search);
            let redirectUrl = urlParams.get('redirect');
            
            // If no redirect URL, default to index.php
            if (!redirectUrl) {
                redirectUrl = 'index.php';
            }

            // Update the return button link just in case user clicks it manually
            const returnBtn = document.getElementById('return-btn');
            if (returnBtn) {
                returnBtn.href = redirectUrl;
            }

            let seconds = 5;
            const countdownEl = document.getElementById('countdown');
            
            const interval = setInterval(() => {
                seconds--;
                if (countdownEl) {
                    countdownEl.innerText = seconds;
                }
                if (seconds <= 0) {
                    clearInterval(interval);
                    window.location.href = redirectUrl;
                }
            }, 1000);
        });
    </script>
</body>
</html>
