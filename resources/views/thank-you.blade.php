<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-40NQPE0KK2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-40NQPE0KK2');
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - ArmaCadabra</title>

    <!-- CSS Linked -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/remixicon.min.css')}}">

    <!-- Standard Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/img/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/img/favicon-16x16.png")}}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/img/apple-touch-icon.png")}}">

    <!-- Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset("assets/img/android-chrome-192x192.png")}}">
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset("assets/img/android-chrome-512x512.png")}}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            background: #0a0a1f;
            color: #fff;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Gradient background matching website */
        .gradient-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1a0033 0%, #330066 25%, #660099 50%, #cc0099 75%, #ff0066 100%);
            opacity: 0.8;
            z-index: -2;
        }

        /* Dark overlay */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(ellipse at center, transparent 0%, rgba(10, 10, 31, 0.7) 50%, rgba(10, 10, 31, 0.9) 100%);
            z-index: -1;
        }

        /* Main container */
        .thank-you-container {
            position: relative;
            z-index: 10;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        /* Content wrapper */
        .content-wrapper {
            text-align: center;
            max-width: 800px;
            width: 100%;
            animation: fadeInUp 1s ease-out;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(40px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Success animation container */
        .success-animation {
            width: 150px;
            height: 150px;
            margin: 0 auto 50px;
            position: relative;
        }

        /* Pulsing circle */
        .pulse-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: rgba(255, 0, 255, 0.1);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: translate(-50%, -50%) scale(0.8);
                opacity: 1;
            }
            100% {
                transform: translate(-50%, -50%) scale(1.5);
                opacity: 0;
            }
        }

        /* Success icon */
        .success-icon {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 25px auto;
            background: linear-gradient(135deg, #ff0066, #ff00ff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 0 50px rgba(255, 0, 255, 0.5);
            animation: iconZoom 0.5s ease-out 0.3s backwards;
        }

        @keyframes iconZoom {
            0% {
                transform: scale(0);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        .checkmark {
            width: 50px;
            height: 50px;
            stroke: white;
            stroke-width: 4;
            fill: none;
            stroke-dasharray: 100;
            stroke-dashoffset: 100;
            animation: drawCheck 0.8s ease-out 0.8s forwards;
        }

        @keyframes drawCheck {
            to {
                stroke-dashoffset: 0;
            }
        }

        /* Typography */
        h1 {
            font-size: 72px;
            font-weight: 700;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 2px;
            background: linear-gradient(135deg, #ff0066 0%, #ff00ff 50%, #00ffff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: slideIn 0.8s ease-out 0.5s backwards;
        }

        @keyframes slideIn {
            0% {
                opacity: 0;
                transform: translateY(30px);
            }
        }

        .subtitle {
            font-size: 24px;
            color: #ff00ff;
            margin-bottom: 20px;
            font-weight: 300;
            animation: slideIn 0.8s ease-out 0.7s backwards;
        }

        .message {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 50px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            animation: slideIn 0.8s ease-out 0.9s backwards;
        }

        /* Button styling matching website */
        .home-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 18px 40px;
            background: #E100FF;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            animation: slideIn 0.8s ease-out 1.1s backwards;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .home-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s ease;
        }

        .home-btn:hover::before {
            left: 100%;
        }

        .home-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(225, 0, 255, 0.5);
            background: #ff00ff;
            color: white;
            text-decoration: none;
        }

        .home-btn i {
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .home-btn:hover i {
            transform: translateX(-5px);
        }

        /* Grid pattern overlay */
        .grid-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 1;
            pointer-events: none;
        }

        /* Floating particles */
        .particle {
            position: absolute;
            border-radius: 50%;
            pointer-events: none;
        }

        .particle-1 {
            width: 4px;
            height: 4px;
            background: #ff00ff;
            top: 10%;
            left: 10%;
            animation: float1 20s infinite;
        }

        .particle-2 {
            width: 6px;
            height: 6px;
            background: #00ffff;
            top: 20%;
            right: 10%;
            animation: float2 25s infinite;
        }

        .particle-3 {
            width: 3px;
            height: 3px;
            background: #ff0066;
            bottom: 20%;
            left: 20%;
            animation: float3 30s infinite;
        }

        @keyframes float1 {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(100px, -100px); }
            50% { transform: translate(-100px, -200px); }
            75% { transform: translate(-200px, 100px); }
        }

        @keyframes float2 {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(-150px, 100px); }
            50% { transform: translate(150px, 200px); }
            75% { transform: translate(100px, -100px); }
        }

        @keyframes float3 {
            0%, 100% { transform: translate(0, 0); }
            25% { transform: translate(200px, -150px); }
            50% { transform: translate(-100px, -100px); }
            75% { transform: translate(-150px, 150px); }
        }

        /* Responsive */
        @media (max-width: 768px) {
            h1 {
                font-size: 48px;
            }

            .subtitle {
                font-size: 20px;
            }

            .message {
                font-size: 16px;
            }

            .success-animation {
                width: 120px;
                height: 120px;
            }

            .success-icon {
                width: 80px;
                height: 80px;
                margin: 20px auto;
            }

            .checkmark {
                width: 40px;
                height: 40px;
            }

            .home-btn {
                padding: 15px 30px;
                font-size: 14px;
            }
        }

        /* Logo style */
        .logo {
            position: absolute;
            top: 40px;
            left: 40px;
            text-decoration: none;
            display: flex;
            align-items: center;
            animation: fadeIn 1s ease-out;
        }

        .logo img {
            width: 150px;
            height: auto;
            transition: all 0.3s ease;
        }

        .logo:hover img {
            filter: brightness(1.2);
            transform: scale(1.05);
        }

        @media (max-width: 768px) {
            .logo {
                top: 20px;
                left: 20px;
            }

            .logo img {
                width: 120px;
            }
        }
    </style>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSSHHG5Q"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<a href="{{route('home')}}" class="logo">
    <img src="{{asset("assets/img/ArmacadabraLogo.png")}}" alt="Armacadabra Logo">
</a>


<div class="gradient-bg"></div>
<div class="overlay"></div>
<div class="grid-pattern"></div>


<div class="particle particle-1"></div>
<div class="particle particle-2"></div>
<div class="particle particle-3"></div>


<div class="thank-you-container">
    <div class="content-wrapper">

        <div class="success-animation">
            <div class="pulse-circle"></div>
            <div class="pulse-circle" style="animation-delay: 0.5s;"></div>
            <div class="pulse-circle" style="animation-delay: 1s;"></div>
            <div class="success-icon">
                <svg class="checkmark" viewBox="0 0 52 52">
                    <path d="M14 27 L22 35 L38 16"/>
                </svg>
            </div>
        </div>


        <h1>Thank You!</h1>
        <p class="subtitle">Your message has been received</p>
        <p class="message">
            We appreciate you reaching out to ArmaCadabra. Your message has been received and we will get back to your inquiries as soon as possible.
        </p>


        <a href="{{route('home')}}" class="home-btn">
            <i class="ri-arrow-left-line"></i>
            Return Home
        </a>
    </div>
</div>

<script>
    // Add some interactive elements
    document.addEventListener('DOMContentLoaded', function() {
        // Create more floating particles dynamically
        const container = document.querySelector('.thank-you-container');

        for (let i = 0; i < 10; i++) {
            const particle = document.createElement('div');
            particle.className = 'particle';
            particle.style.width = Math.random() * 4 + 2 + 'px';
            particle.style.height = particle.style.width;
            particle.style.background = ['#ff00ff', '#00ffff', '#ff0066'][Math.floor(Math.random() * 3)];
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 5 + 's';
            particle.style.animationDuration = (20 + Math.random() * 10) + 's';
            particle.style.animation = `float${(i % 3) + 1} ${particle.style.animationDuration} infinite`;
            container.appendChild(particle);
        }
    });
</script>
</body>
</html>
