<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti Phisher</title>
    <style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.product-section {
  background: #0c0c0c;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  align-items: center;
  justify-content: center;
  padding: 0 0 181px;
}

.product-container {
  display: flex;
  width: 100%;
  max-width: 1067px;
  flex-direction: column;
}

.section-title {
  color: #fff;
  align-self: center;
  font: 700 64px Arial, sans-serif;
  margin-top: 50px;
}

.feature-container {
  display: flex;
  margin-top: 80px;
  gap: 40px 72px;
  font: 400 32px Arial, sans-serif;
  text-align: center;
  flex-wrap: wrap;
}

.feature-icon {
  aspect-ratio: 0.51;
  object-fit: contain;
  object-position: center;
  width: 132px;
}

.feature-content {
  border-radius: 37px;
  background: #222226;
  display: flex;
  flex-direction: column;
  flex: 1;
  width: fit-content;
  margin: auto 0;
  padding: 28px 46px;
}

.feature-heading {
  color: #fff;
  font-size: 40px;
  align-self: center;
}

.feature-description {
  color: #a3a3a3;
  margin-top: 13px;
}

.trust-container {
  display: flex;
  margin-top: 79px;
  align-items: start;
  gap: 40px 65px;
  color: #fff;
  text-align: center;
  flex-wrap: wrap;
  font: 400 38px Arial, sans-serif;
}

.trust-icon {
  aspect-ratio: 0.63;
  object-fit: contain;
  object-position: center;
  width: 145px;
  margin-top: 6px;
}

.trust-message {
  border-radius: 37px;
  background: #222226;
  flex: 1;
  width: fit-content;
  padding: 69px 47px;
}

.why-us-container {
  border-radius: 37px;
  background: #222226;
  display: flex;
  flex-direction: column;
  align-items: center;
  color: #fff;
  margin: 84px 0 0 10px;
  padding: 83px 80px 33px;
}

.why-us-title {
  font: 700 64px Arial, sans-serif;
}

.why-us-description {
  text-align: center;
  align-self: stretch;
  margin-top: 22px;
  font: 400 36px Inter, sans-serif;
}

.partner-logo {
  aspect-ratio: 2.19;
  object-fit: contain;
  object-position: center;
  width: 355px;
}

@media (max-width: 991px) {
  .product-section {
    padding: 100px 20px;
  }
  
  .product-container {
    max-width: 100%;
  }
  
  .section-title {
    max-width: 100%;
    font-size: 40px;
  }
  
  .feature-container {
    max-width: 100%;
    margin-top: 40px;
  }
  
  .feature-content {
    max-width: 100%;
    padding: 0 20px;
  }
  
  .feature-heading {
    max-width: 100%;
  }
  
  .feature-description {
    max-width: 100%;
  }
  
  .trust-container {
    max-width: 100%;
    margin-top: 40px;
  }
  
  .trust-message {
    max-width: 100%;
    padding: 0 20px;
  }
  
  .why-us-container {
    max-width: 100%;
    margin-top: 40px;
    padding: 0 20px;
  }
  
  .why-us-title {
    font-size: 40px;
  }
  
  .why-us-description {
    max-width: 100%;
  }
  
  .partner-logo {
    max-width: 100%;
  }
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

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

        a{
            text-decoration: none;
            color: white;
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
</style>
</head>
<body>
    <div class="product-section">
    <header class="header">
                <img
                    loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/e50db3390c7a06e9c965add59617369888165d2b7142928fb42d096b267073c6?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb"
                    class="logo"
                    alt="Anti Phisher Logo"
                />
                <nav class="nav-menu">
                    <a href="./home.php">HOME</a>
                    <a href="./product.php">PRODUCT</a>
                    <a href="./scan.php">SCAN</a>
                    <a href="./contact.php">CONTACT</a>
                </nav>
            </header>
    <div class="product-container">
        <h1 class="section-title">About Our Product</h1>
        <div class="feature-container">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/41f00e226e3f0af57bb7259e2e880b82180bb4b2858dd842d5f9c48f1c54ee2d?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="Security Shield Icon" class="feature-icon" />
        <div class="feature-content">
            <h2 class="feature-heading">We protect you from phishing attacks</h2>
            <p class="feature-description">
            "Fraudulent attempts to steal sensitive information like passwords,
            credit card numbers, and other personal data."
            </p>
        </div>
        </div>
        <div class="trust-container">
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/f8cc8e6b90fffff7f3c38052d84fcf116a8afd19c6c2557f485e83a68ecb6ef7?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="Trust Badge" class="trust-icon" />
        <div class="trust-message">
            Trusted by Many, Securing Your Devices with One Scan!
        </div>
        </div>
        <div class="why-us-container">
        <h2 class="why-us-title">Why Us?</h2>
        <p class="why-us-description">
            We work with TotalVirus, a brand well known in the industry to quickly
            scan and protect devices from all types of malware, ensuring top-notch
            security and peace of mind.
        </p>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/d5053a2d1aab2884239fe5d571a88ab61fde5612e6ff2b6b007395066d9c3c50?placeholderIfAbsent=true&apiKey=6761f5ed1cdc4106a0a7af179d6a3bbb" alt="TotalVirus Partner Logo" class="partner-logo" />
        </div>
    </div>
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
                    <a href="#" class="extension-link">Browser Extension</a>
                    <a href="#" class="scanner-link">URL Scanner</a>
                </div>

                <!-- Learn Column -->
                <div class="learn-column">
                    <div class="learn-title">Learn</div>
                    <a href="#" class="virus-link">VirusTotal</a>
                    <a href="#" class="phishing-link">Phishing</a>
                    <a href="#" class="engineering-link">Social Engineering</a>
                </div>

                <!-- Connect Column -->
                <div class="connect-column">
                    <div class="connect-title">Connect</div>
                    <a href="#" class="contact-link">Contact Us</a>
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
