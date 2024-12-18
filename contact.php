<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        margin: 0;
        font-family: Arial, sans-serif;
        background-color: #0c0c0c;
        color: #fff;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        }

        /* Wrapper */
        .contact-wrapper {
        display: flex;
        flex-direction: column;
        flex: 1;
        }

        /* Navigation Bar */
        .header {
            background: #19191f;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 64px;
            color: #fff;
            position: relative
        }

        .nav-menu {
            display: flex;
            gap: 45px;
            font-size: 25px;
            align-items: center;
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

        a{
            text-decoration: none;
            color: white;
        }

        /* Main Content */
        .main-content {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
        }

        .content-grid {
        display: flex;
        gap: 20px;
        max-width: 1309px;
        width: 100%;
        }

        .form-column {
        flex: 1;
        }

        .contact-form {
        display: flex;
        flex-direction: column;
        }

        .page-title {
        font-size: 96px;
        }

        .form-input {
        background-color: #aeaaff;
        border: 5px solid #fff8f8;
        border-radius: 20px;
        margin-bottom: 20px;
        padding: 18px 32px;
        margin-top: 20px;
        }

        .message-input {
        padding: 18px 32px 86px;
        }

        .submit-button {
        background-color: #5A9FE4;
        border: 5px solid #fff8f8;
        border-radius: 20px;
        padding: 15px 66px;
        color: white;
        font-size: 48px;
        margin-top: 20px;
        cursor: pointer;
        }

        .image-column {
        flex: 1;
        display: flex;
        justify-content: center;
        }

        .contact-image {
        max-width: 100%;
        border-radius: 10px;
        margin-left: 30rem;
        }

        /* Footer Styles */
        .footer-container {
        background-color: #f5f5f5;
        padding: 40px 70px;
        color: black;
        margin-top: 100px;
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

        .nav-link.active {
            text-decoration: underline;
        }

        .nav-link:hover {
        color: #1CEFFF
        }

        .submit-button:hover {
        background-color: #0056b3;  /* Darker blue on hover */
        transform: scale(1.05);  /* Slight zoom effect */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);  /* Soft shadow */
        }

        /* Responsive Design */
        @media (max-width: 991px) {
        .footer-columns {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .brand-column,
        .product-column,
        .learn-column,
        .connect-column {
            margin-bottom: 20px;
        }

        .social-links {
            justify-content: center;
        }
        }

        /* Responsive Design */
        @media (max-width: 991px) {
        .header-nav {
            padding: 20px;
        }

        .main-content {
            padding: 20px;
            flex-direction: column;
            align-items: stretch;
        }

        .footer-container {
            padding: 20px;
        }

        .footer-columns {
            flex-direction: column;
        }
        }
    </style>
</head>
<body>
<div class="contact-wrapper">
        <!-- Navigation Bar -->
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
                <a href="./contact.php" class="nav-link active">CONTACT</a>
            </nav>
        </header>

        <!-- Main Content -->
        <main class="main-content">
            <div class="content-grid">
                <div class="form-column">
                    <form class="contact-form">
                        <h1 class="page-title">Contact Us</h1>
                        <label for="name" class="visually-hidden">Name</label>
                        <input type="text" id="name" class="form-input" placeholder="Name" aria-label="Name" required>
                        <label for="email" class="visually-hidden">Email</label>
                        <input type="email" id="email" class="form-input" placeholder="Email" aria-label="Email" required>
                        <label for="message" class="visually-hidden">Message</label>
                        <textarea id="message" class="form-input message-input" placeholder="Message" aria-label="Message" required></textarea>
                        <button type="submit" class="submit-button">Send</button>
                    </form>
                </div>

                <div class="image-column">
                    <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/925835a77b7bc42ce7d368899335015d7b6733ab2eba13d79d675fdcb42ab45b?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" 
                         alt="Contact Us Image" 
                         class="contact-image" 
                         loading="lazy">
                </div>
            </div>
        </main>

        <!-- Footer -->
        <div class="footer-container">
            <div class="footer-wrapper">
                <div class="footer-columns">
                <!-- Brand Column -->
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
    </div>
</body>
</html>