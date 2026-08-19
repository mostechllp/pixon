<?php
session_start();
require_once 'config/database.php';

// Redirect to dashboard if already logged in
if (isset($_SESSION['user_id'])) {
    header('Location: dashboard.php');
    exit;
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } else {
        $stmt = $conn->prepare("SELECT id, email, password, role FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            // Verify hashed password
            if (password_verify($password, $user['password'])) {
                // Password is correct, start session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['success_msg'] = 'Logged in successfully.';
                
                header('Location: dashboard.php');
                exit;
            } else {
                $error = 'Invalid email or password.';
            }
        } else {
            $error = 'Invalid email or password.';
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - PIXON TECHNOLOGIES</title>
    <link rel="icon" href="../assets/fav-logo.jpg-removebg-preview.webp" type="image/png">
    <!-- Toastify JS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0b162c 0%, #18315B 50%, #1a2fbf 100%);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            position: relative;
            overflow: hidden;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Ambient glowing orbs in background to make it look premium */
        .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.6;
            z-index: 0;
            pointer-events: none;
        }

        .orb-1 {
            width: 500px;
            height: 500px;
            background: rgba(56, 198, 244, 0.4);
            top: -150px;
            left: -150px;
            animation: float 8s ease-in-out infinite alternate;
        }

        .orb-2 {
            width: 400px;
            height: 400px;
            background: rgba(26, 47, 191, 0.5);
            bottom: -100px;
            right: -100px;
            animation: float 10s ease-in-out infinite alternate-reverse;
        }

        @keyframes float {
            0% { transform: translateY(0px) scale(1); }
            100% { transform: translateY(50px) scale(1.05); }
        }

        .login-container {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 440px;
            padding: 48px 40px;
            background: #ffffff;
            border-radius: 24px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin: 20px;
        }

        .login-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
        }

        .login-logo img {
            max-height: 60px;
            width: auto;
            transform: scale(3);
            object-fit: contain;
            /* Added a colored drop shadow to make the white text visible with a premium brand glow */
            filter: drop-shadow(0px 2px 4px rgba(24, 49, 91, 0.8)) drop-shadow(0px 0px 12px rgba(56, 198, 244, 0.6));
        }

        h2 {
            color: #111827;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 12px;
            letter-spacing: -0.5px;
        }

        p.subtitle {
            color: #6b7280;
            font-size: 15px;
            margin-bottom: 36px;
            line-height: 1.5;
        }

        .input-group {
            position: relative;
            margin-bottom: 16px;
            text-align: left;
        }

        .input-group svg.input-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            width: 20px;
            height: 20px;
            z-index: 2;
            transition: color 0.3s ease;
        }

        input {
            width: 100%;
            padding: 16px 16px 16px 52px;
            background: #f9fafb;
            border: 1.5px solid #f3f4f6;
            border-radius: 14px;
            font-size: 15px;
            font-weight: 500;
            color: #111827;
            outline: none;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: #9ca3af;
            font-weight: 400;
        }

        input:focus {
            background: #ffffff;
            border-color: #38c6f4;
            box-shadow: 0 0 0 4px rgba(56, 198, 244, 0.15);
        }

        input:focus ~ svg.input-icon,
        .input-group:focus-within svg.input-icon {
            color: #38c6f4;
        }

        .btn-login {
            width: 100%;
            padding: 16px;
            background: #18315B;
            color: #ffffff;
            border: none;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 12px;
            box-shadow: 0 4px 6px -1px rgba(24, 49, 91, 0.1), 0 2px 4px -1px rgba(24, 49, 91, 0.06);
        }

        .btn-login:hover {
            background: #1a2fbf;
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(26, 47, 191, 0.2), 0 4px 6px -2px rgba(26, 47, 191, 0.1);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .toggle-password {
            position: absolute;
            right: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            cursor: pointer;
            width: 20px;
            height: 20px;
            z-index: 2;
            transition: color 0.3s ease;
        }

        .toggle-password:hover {
            color: #4b5563;
}

        .error-message {
            color: #ef4444;
            background: #fef2f2;
            padding: 12px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 24px;
            border: 1px solid #fee2e2;
            display: none;
        }

        <?php if($error): ?>
        .error-message {
            display: block;
        }
        <?php endif; ?>
        
        /* Responsive Media Queries */
        @media (max-width: 480px) {
            .login-container {
                padding: 32px 24px;
                margin: 16px;
            }
            h2 {
                font-size: 24px;
            }
            .orb {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Background Elements -->
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>

    <div class="login-container">
        <!-- Logo / Icon -->
        <div class="login-logo">
            <img src="../assets/pixon-bg.webp" alt="PIXON TECHNOLOGIES Logo">
        </div>
        
        <h2>Sign in with email</h2>
        <p class="subtitle">Access the PIXON TECHNOLOGIES administrative dashboard to manage your content.</p>

        <?php if(!empty($error)): ?>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                Toastify({
                    text: "<?php echo addslashes(htmlspecialchars($error)); ?>",
                    duration: 4000,
                    close: true,
                    gravity: "top", 
                    position: "right",
                    style: {
                        background: "rgba(254, 226, 226, 0.95)",
                        color: "#dc2626",
                        border: "1px solid #fecaca",
                        borderRadius: "8px",
                        boxShadow: "0 10px 15px -3px rgba(0, 0, 0, 0.1)",
                        backdropFilter: "blur(8px)",
                        fontSize: "14px",
                        fontWeight: "500",
                        padding: "12px 20px",
                        fontFamily: "'Inter', sans-serif"
                    }
                }).showToast();
            });
        </script>
        <?php endif; ?>

        <form method="POST" action="">
            <div class="input-group">
                <input type="email" name="email" id="email" placeholder="Email" required autocomplete="email">
                <svg class="input-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                </svg>
            </div>

            <div class="input-group">
                <input type="password" name="password" id="password" placeholder="Password" required autocomplete="current-password">
                <svg class="input-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
                <!-- Eye icon for show/hide password -->
                <svg class="toggle-password" id="eye-icon" onclick="togglePassword()" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <!-- Eye Open Path -->
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                </svg>
            </div>

            <button type="submit" class="btn-login">Get Started</button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Switch to eye-off icon
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                `;
            } else {
                passwordInput.type = 'password';
                // Switch to eye icon
                eyeIcon.innerHTML = `
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                `;
            }
        }
    </script>
</body>
</html>
