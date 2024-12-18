<?php
session_set_cookie_params([
    'lifetime' => 0, // Expires on browser close
    'path' => '/',
    'domain' => '', // Set your domain if necessary
    'secure' => false, // Use true if using HTTPS
    'httponly' => true, // Protect against JavaScript access
]);
session_start(); // Start the session to retrieve history

// Get scan history from session
$history = $_SESSION['scan_history'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan History</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #1E1E1E;
            color: white;
        }
        main {
            flex: 1; /* Allows the main content to expand and push the footer to the bottom */
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            color: black;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
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
        .nav-link.active {
            text-decoration: underline;
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
                <a href="./history.php" class="nav-link active">HISTORY</a>
                <a href="./contact.php" class="nav-link">CONTACT</a>
        </nav>
    </header>
    <main>
        <h1>Scan History</h1>
        <?php if (!empty($history)): ?>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>URL</th>
                        <th>Status</th>
                        <th>Message</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($history as $index => $entry): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($entry['url']) ?></td>
                            <td><?= htmlspecialchars($entry['status']) ?></td>
                            <td><?= htmlspecialchars($entry['message']) ?></td>
                            <td><?= htmlspecialchars($entry['time']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p style= "font-size: 30px";>No scan history found.</p>
        <?php endif; ?>
    </main>
    <footer class="footer-container">
        <div class="footer-wrapper">
            <div class="footer-columns">
                <div class="brand-column">
                    <div class="brand-name">Anti Phisher</div>
                </div>
                <div class="product-column">
                    <div class="product-title">Product</div>
                    <a href="#" class="extension-link">Browser Extension</a>
                    <a href="#" class="scanner-link">URL Scanner</a>
                </div>
                <div class="learn-column">
                    <div class="learn-title">Learn</div>
                    <a href="#" class="virus-link">VirusTotal</a>
                    <a href="#" class="phishing-link">Phishing</a>
                    <a href="#" class="engineering-link">Social Engineering</a>
                </div>
                <div class="connect-column">
                    <div class="connect-title">Connect</div>
                    <a href="#" class="contact-link">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
