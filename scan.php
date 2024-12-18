<?php
session_set_cookie_params([
    'lifetime' => 0, // Expires on browser close
    'path' => '/',
    'domain' => '', // Set your domain if necessary
    'secure' => false, // Use true if using HTTPS
    'httponly' => true, // Protect against JavaScript access
]);
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = $_POST['url'];

    require_once('vendor/autoload.php');
    $client = new \GuzzleHttp\Client();

    // Submit the URL to VirusTotal
    $response = $client->request('POST', 'https://www.virustotal.com/api/v3/urls', [
        'form_params' => ['url' => $url],
        'headers' => [
            'accept' => 'application/json',
            'content-type' => 'application/x-www-form-urlencoded',
            'x-apikey' => '9e2ad479cdd012b76979805520f687b3046ea1eb5beb41b3a1a8ca08c9f3f629',
        ],
    ]);

    // Get the analysis ID
    $responseBody = json_decode($response->getBody(), true);
    $id = $responseBody['data']['id'] ?? null;

    if ($id) {
        // Wait for scan results
        sleep(15); // Or implement polling as shown earlier

        $response2 = $client->request('GET', 'https://www.virustotal.com/api/v3/analyses/' . $id, [
            'headers' => [
                'accept' => 'application/json',
                'x-apikey' => '9e2ad479cdd012b76979805520f687b3046ea1eb5beb41b3a1a8ca08c9f3f629',
            ],
        ]);

        $response2Body = json_decode($response2->getBody(), true);
        $malicious = $response2Body['data']['attributes']['stats']['malicious'] ?? 0;
        $suspicious = $response2Body['data']['attributes']['stats']['suspicious'] ?? 0;
        
        if (!isset($_SESSION['scan_history'])) {
            $_SESSION['scan_history'] = [];
        }

        // Prepare result
        header('Content-Type: application/json');
        if ($malicious == 0 && $suspicious == 0) {
        echo json_encode(['status' => 'safe', 'message' => 'The website is safe to visit.']);
        $_SESSION['scan_history'][] = [
            'url' => $url,
            'status' => 'safe',
            'message' => 'The website is safe to visit.',
            'time' => date('Y-m-d H:i:s'), // Add timestamp
        ];
        } else {
        echo json_encode(['status' => 'malicious', 'message' => 'Warning! The website may be malicious or suspicious.']);
        $_SESSION['scan_history'][] = [
            'url' => $url,
            'status' => 'malicious',
            'message' => 'Warning! The website may be malicious or suspicious.',
            'time' => date('Y-m-d H:i:s'), // Add timestamp
        ];
        }
        exit;

    echo $resultMessage;
    exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Safety Scanner</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1E1E1E;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            padding-top: 90px; /* Add space for the fixed header */
        }

        .container {
            max-width: 800px;
            width: 100%;
            height: 530px;
            padding: 40px;
            border: 1px solid #ddd;
            background-color: white;
            border-radius: 8px;
            text-align: center;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto; /* Center the container */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
            font-size: 40px;
            margin-bottom: 60px;
            margin-top: -100px;
        }

        .header {
            background: #19191f;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px 64px;
            color: #fff;
            position: fixed; /* Fix the header at the top of the page */
            top: 0;
            z-index: 1000;
        }

        .nav-menu {
            display: flex;
            gap: 45px;
            font-size: 25px;
            align-items: center;
            margin-right: 150px;
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

        #loadingIndicator {
            display: none;
            text-align: center;
            margin-top: 20px;
            color: #6c757d;
            font-size: 1.2em;
        }

        #loadingIndicator::after {
            content: '...';
            animation: dots 1.5s steps(3, end) infinite;
        }

        @keyframes dots {
            0% {
                content: '';
            }
            33% {
                content: '.';
            }
            66% {
                content: '..';
            }
            100% {
                content: '...';
            }
        }

        #resultContainer {
            margin-top:10px;
            display: none;
            padding: 20px;
            border-radius: 4px;
            padding-top: 35px;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
            width: 100%;
            height: 100px;
            box-sizing: border-box;
        }

        .safe {
            background-color: green;
            color: white;
        }

        .malicious {
            background-color: red;
            color: white;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            box-sizing: border-box;
            margin-bottom: 15px;
        }

        input {
            width: 100%;
            padding: 10px;
            color: black;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 25px;
            box-sizing: border-box;
            margin-bottom: 15px; 
        }

        .nav-link.active {
            text-decoration: underline;
        }

        button:hover {
            background-color: #0056b3;
        }

        .footer-container {
        background-color: #f5f5f5;
        padding: 40px 70px;
        color: black;
        margin-top: 149px;
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

        .nav-link:hover {
        color: #1CEFFF
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
                <a href="./scan.php" class="nav-link active">SCAN</a>
                <a href="./history.php" class="nav-link">HISTORY</a>
                <a href="./contact.php" class="nav-link">CONTACT</a>
            </nav>
        </header>

    <div class="container">
        <h2>Anti Phisher URL Scanner</h2>
        <form id="urlScanForm">
            <label for="urlInput" style="font-size: 30px;">Enter URL to Scan:</label>
            <input 
                type="text" 
                id="urlInput" 
                name="url" 
                required 
                style="width: 100%; padding: 10px; height: 60px; margin-top: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; cursor: text;"
                placeholder="https://example.com"
            >
            <button type="submit" style="font-size: 30px;">Scan URL</button>
        </form>

        <div id="loadingIndicator" style="font-size: 30px;">Scanning URL... Please wait.</div>

        <div id="resultContainer"></div>
    </div>
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
        <script>
    const form = document.getElementById("urlScanForm");
    const loadingIndicator = document.getElementById("loadingIndicator");
    const resultContainer = document.getElementById("resultContainer");

    // Function to validate URL
    function isValidUrl(string) {
    const domainRegex = /^[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)+$/; // Matches valid domain formats like example.com
    try {
        // Add scheme if missing
        if (!string.startsWith('http://') && !string.startsWith('https://')) {
            string = 'http://' + string; // Default to http
        }

        // Check if the URL format is valid
        const url = new URL(string);

        // Validate domain format
        if (!domainRegex.test(url.hostname)) {
            return false;
        }

        return true; // Valid URL
    } catch (_) {
        return false; // Invalid URL
    }
    }

    form.addEventListener("submit", async (event) => {
        event.preventDefault();

        // Get URL from the form
        const formData = new FormData(form);
        const url = formData.get("url");

        // Validate URL
        if (!isValidUrl(url)) {
            alert("The URL you entered is invalid. Please enter a valid URL.");
            window.location.reload(); // Refresh the page
            return;
        }

        // Show loading indicator
        loadingIndicator.style.display = "block";
        resultContainer.style.display = "none";
        resultContainer.className = ""; // Reset background color

        try {
            const response = await fetch("", { method: "POST", body: formData });
            if (response.ok) {
                const result = await response.json();

                // Hide loading indicator
                loadingIndicator.style.display = "none";

                // Update result container
                resultContainer.style.display = "block";
                if (result.status === "safe") {
                    resultContainer.classList.add("safe");
                    resultContainer.innerText = result.message;
                } else if (result.status === "malicious") {
                    resultContainer.classList.add("malicious");
                    resultContainer.innerText = result.message;
                } else {
                    resultContainer.innerText = "An error occurred.";
                }
            } else {
                throw new Error("Failed to get scan result.");
            }
        } catch (error) {
            loadingIndicator.style.display = "none";
            resultContainer.style.display = "block";
            resultContainer.innerText = error.message;
        }
    });
</script>
</body>
</html>