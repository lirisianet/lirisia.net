<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>りりあ | Lilia</title>
    <link rel="icon" type="image/png" href="https://avatars.githubusercontent.com/u/205428759?&v=4">
    <link rel="shortcut icon" type="image/png" href="https://avatars.githubusercontent.com/u/205428759?&v=4">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Helvetica', 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
            overflow-x: hidden;
        }
        
        .container {
            max-width: 600px;
            padding: 20px;
        }
        
        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            animation: fadeIn 1.5s ease, float 6s ease-in-out infinite;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
        }
        
        h1 {
            margin: 10px 0;
            font-size: 2.5rem;
            animation: slideUp 0.8s ease forwards;
            animation-delay: 0.5s;
            opacity: 0;
        }
        
        .subtitle {
            font-size: 1.5rem;
            margin-bottom: 30px;
            opacity: 0;
            animation: slideUp 0.8s ease forwards;
            animation-delay: 0.7s;
        }
        
        .contact-info {
            margin-top: 30px;
            font-size: 1.2rem;
            opacity: 0;
            animation: slideUp 0.8s ease forwards;
            animation-delay: 0.9s;
        }
        
        a {
            color: #fff;
            text-decoration: none;
            border-bottom: 1px solid #fff;
            padding-bottom: 2px;
            transition: all 0.3s;
            position: relative;
        }
        
        a:hover {
            opacity: 1;
            color: #20B2AA;
            border-color: #20B2AA;
            padding-bottom: 4px;
        }
        
        .social-links {
            margin-top: 30px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            width: 100%;
            max-width: 400px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .social-card {
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 12px 20px;
            transition: all 0.3s;
            opacity: 0;
            transform: translateX(50px);
            animation: slideInCard 0.8s ease forwards;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            text-align: left;
            width: 100%;
        }
        
        .social-card:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }
        
        .social-icon {
            font-size: 1.5rem;
            margin-right: 15px;
            width: 30px;
            text-align: center;
        }
        
        .social-name {
            font-weight: bold;
            margin-right: 10px;
            min-width: 70px;
        }
        
        .social-username {
            color: #20B2AA;
        }
        
        .email-container {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        
        .social-card:nth-child(1) {
            animation-delay: 1.1s;
        }
        
        .social-card:nth-child(2) {
            animation-delay: 1.3s;
        }
        
        .social-card:nth-child(3) {
            animation-delay: 1.5s;
        }
        
        .social-card:nth-child(4) {
            animation-delay: 1.7s;
        }
        
        .social-card:nth-child(5) {
            animation-delay: 1.9s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
        
        @keyframes slideInCard {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @media (max-width: 480px) {
            .profile-img {
                width: 120px;
                height: 120px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://avatars.githubusercontent.com/u/205428759?&v=4" alt="りりあのアイコン" class="profile-img">
        <h1>りりあ</h1>
        <div class="subtitle">Lilia</div>
        
        <div class="contact-info">
            <div class="social-links">
                <div class="social-card">
                    <div class="social-icon"><i class="fas fa-envelope"></i></div>
                    <div class="social-name">Email</div>
                    <div class="social-username email-container">
                        <a href="mailto:lilia@lirisia.com">lilia@lirisia.com</a>
                        <a href="mailto:lilia@lirisia.net">lilia@lirisia.net</a>
                    </div>
                </div>
                <div class="social-card">
                    <div class="social-icon"><i class="fab fa-github"></i></div>
                    <div class="social-name">GitHub</div>
                    <div class="social-username">
                        <a href="https://github.com/lirisia" target="_blank">@lirisia</a>
                    </div>
                </div>
                <div class="social-card">
                    <div class="social-icon"><i class="fab fa-twitter"></i></div>
                    <div class="social-name">Twitter</div>
                    <div class="social-username">
                        <a href="https://twitter.com/lirisianet" target="_blank">@lirisianet</a>
                    </div>
                </div>
                <div class="social-card">
                    <div class="social-icon"><i class="fab fa-discord"></i></div>
                    <div class="social-name">Discord</div>
                    <div class="social-username">
                        <a href="#" onclick="return false;">@lirisianet</a>
                    </div>
                </div>
                <div class="social-card">
                    <div class="social-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M10.91 4.442L0 10.74v2.52l8.727-5.04v10.077l2.182 1.26zM6.545 12l-4.364 2.52l4.364 2.518zm6.545-2.52L17.455 12l-4.364 2.52zm0-5.038L24 10.74v2.52l-10.91 6.298v-2.52L21.819 12l-8.728-5.04z"/>
                        </svg>
                    </div>
                    <div class="social-name">ActivityPub</div>
                    <div class="social-username">
                        <a href="https://misskey.systems/@lirisia" target="_blank">@lirisia@misskey.systems</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
