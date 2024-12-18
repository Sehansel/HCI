<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
          margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            
            height: auto;
            min-height: 100%;
            overflow: auto;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        .how-to-use-container {
            background: rgba(12, 12, 12, 1);
            display: flex;
            flex-direction: column;
            align-items: center;
            color: rgba(255, 255, 255, 1);
            justify-content: center;
            font: 400 36px Arial, sans-serif;
        }

        .content-wrapper {
            display: flex;
            width: 100%;
            max-width: 1003px;
            flex-direction: column;
        }

        .section-title {
            font: 700 64px Arial, sans-serif;
            text-align: center;
            margin-top:100px;
        }

        .instruction-box {
            border-radius: 37px;
            background: rgba(34, 34, 38, 1);
            margin-top: 77px;
            padding: 38px;
        }

        .instruction-box-first {
            margin-top: 98px;
        }

        .link-text {
            text-decoration: underline;
            color: rgba(154, 154, 154, 1);
        }

        .link-text:hover {
          color: red;

        }

        .highlight-text {
            color: rgba(255, 255, 255, 1);
        }

        .instruction-text-wrapper {
            display: flex;
            flex-direction: column;
            padding: 37px 80px 37px 37px;
            margin-bottom: 50px;
        }

        .instruction-text-secondary {
            align-self: center;
            margin-top: 17px;
        }

        @media (max-width: 991px) {
            .how-to-use-container {
                padding: 100px 20px;
            }

            .content-wrapper {
                max-width: 100%;
            }

            .section-title {
                font-size: 40px;
            }

            .instruction-box {
                max-width: 100%;
                margin-top: 40px;
                padding: 20px;
            }

            .instruction-box-first {
                margin-top: 40px;
            }

            .instruction-text-wrapper {
                max-width: 100%;
                padding: 20px;
            }

            .instruction-text-secondary {
                max-width: 100%;
            }
        }

        .footer-container {
            background-color: #f5f5f5;
            padding: 40px 70px;
            color: black;
        }

        .footer-wrapper {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 40px;
            flex-wrap: wrap;
        }

        .brand-column,
        .product-column,
        .learn-column,
        .connect-column {
            flex: 1;
            min-width: 200px;
            text-align: left;
        }

        .brand-name,
        .product-title,
        .learn-title,
        .connect-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .extension-link,
        .scanner-link,
        .virus-link,
        .phishing-link,
        .engineering-link,
        .contact-link {
            font-size: 14px;
            text-decoration: none;
            color: black;
            display: block;
            margin: 5px 0;
        }

        .social-links {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .social-icon {
            width: 24px;
            height: 24px;
            object-fit: contain;
        }

        .page-subtitle {
            font-size: 24px; 
            margin: 20px 0; 
            line-height: 1.5; 
            text-align: center;
        }

        .header {
            background: #19191f;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 64px;
            color: #fff;
            position: relative;
        }

        .nav-menu {
            display: flex;
            gap: 45px;
            font-size: 25px;
            align-items: center;
        }

        .nav-link.active {
            text-decoration: underline;
        }

        .logo {
            aspect-ratio: 1.46;
            object-fit: contain;
            object-position: center;
            width: 124px;
            align-self: start;
            position: absolute;
            left: 64px;
            max-width: 100%;
            top: 4px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        .bottom-text {
          text-align: center;
          margin-bottom: 30px;
        }

        .submit-button {
        background-color: #5A9FE4;
        border: 5px solid #fff8f8;
        border-radius: 20px;
        padding: 15px 66px;
        color: white;
        font-size: 48px;
        cursor: pointer;
        margin-bottom: 220px;
        }

        .nav-link:hover {
        color: #1CEFFF
      }
      .submit-button:hover {
        background-color: #0056b3;  /* Darker blue on hover */
        transform: scale(1.05);  /* Slight zoom effect */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);  /* Soft shadow */
        }
    </style>
</head>
<body>
    <header class="header">
        <img
            loading="lazy"
            src="https://cdn.builder.io/api/v1/image/assets/TEMP/e50db3390c7a06e9c965add59617369888165d2b7142928fb42d096b267073c6?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb"
            class="logo"
            alt="Anti Phisher Logo"
            style="cursor: pointer"
            onclick="location.href='home.php'"
        />
        <nav class="nav-menu">
            <a href="./home.php" class="nav-link">HOME</a>
            <a href="./product.php" class="nav-link">PRODUCT</a>
            <a href="./scan.php" class="nav-link">SCAN</a>
            <a href="./history.php" class="nav-link">HISTORY</a>
            <a href="./contact.php" class="nav-link">CONTACT</a>
        </nav>
    </header>
    <div class="how-to-use-container">
        <div class="content-wrapper">
            <h1 class="section-title">How to Use?</h1>
            <div class="instruction-box instruction-box-first">
                <div>
                    1. Download the extension from
                    <span class="highlight-text">this</span>
                    <a href="https://github.com/vyn88/Software-Engineering" class="link-text" tabindex="0">link</a> 
                </div>
            </div>
            <div class="instruction-box">
                2. Install the extension to your web browser
            </div>
            <div class="instruction-box instruction-text-wrapper">
                <div>3. Enter the URL you want to check into the</div>
                <div class="instruction-text-secondary">
                    extension and wait for the result
                </div>
            </div>
            <p class="bottom-text">Or</p>
            <p class="bottom-text">Click To</p>
            <button class="submit-button" onclick="location.href='scan.php'">Scan Now</button>
        </div>
    </div>
    <div class="footer-container">
        <div class="footer-wrapper">
            <div class="footer-columns">
                <div class="brand-column">
                        <div class="brand-name">Anti Phisher</div>
                    </div>

                    <!-- Product Column -->
                    <div class="product-column">
                        <div class="product-title">Product</div>
                        <a href="https://github.com/vyn88/Software-Engineering" class="extension-link">Browser Extension</a>
                        <a href="scan.php" class="scanner-link">URL Scanner</a>
                    </div>

                    <!-- Learn Column -->
                    <div class="learn-column">
                        <div class="learn-title">Learn</div>
                        <a href="https://www.virustotal.com/gui/home/upload" class="virus-link">VirusTotal</a>
                        <a href="https://www.cloudflare.com/learning/access-management/phishing-attack/" class="phishing-link">Phishing</a>
                        <a href="https://www.cloudflare.com/learning/security/threats/social-engineering-attack/" class="engineering-link">Social Engineering</a>
                    </div>

                    <!-- Connect Column -->
                    <div class="connect-column">
                        <div class="connect-title">Connect</div>
                        <a href="contact.php" class="contact-link">Contact Us</a>
                        <div class="social-links">
                            <a href="#" aria-label="X">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/b742f3f6e1cba31a89a8e6720d9b537141ad17b582c67349ffda3d14027d6bb4?apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="X" class="social-icon" />
                            </a>
                            <a href="#" aria-label="Instagram">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/983c58f6475d86a83c2efd1e747bd0ac81ba4a592bc368247089f95b74dd2f1b?apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="Instagram" class="social-icon" />
                            </a>
                            <a href="#" aria-label="YouTube">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/1619f3bacd75e6e34899ad2a9fb402f91d761adbee8299e2b9d218d70bc660b5?apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="YouTube" class="social-icon" />
                            </a>
                            <a href="#" aria-label="LinkedIn">
                                <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/33f22b71db486614b0a602caeda236db3cac418c5937b4bd8dfcf8262145cd2a?apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="LinkedIn" class="social-icon" />
                            </a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</body>
</html>
