<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming</title>
    <link rel="stylesheet" href="css/home.css?<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include('nav.php');
    ?>

    <div class="banner">
        <div class="content">
            <h4>Be smart shopper! Discover Your Perfect Match</h4>
            <h1>Unlock Your Gaming Potential</h1>
            <h3>Your Ultimate Destination for Unbiased Gaming Product Comparisons!</h3>
        </div>
    </div>

    <div class="main-mouse" id="main-mouse">
        <div class="title-p">
            <h2>Our Mouse categories</h2>
        </div>
        <a href="low-mouse.php">
            <div class="card1"><img class="caicon" src="images/low-mouse.jpg">
                <input type="button" value="Budget Mouse">
            </div>
        </a>

        <a href="high-mouse.php">
            <div class="card2"><img class="caicon" src="images/high-mouse.jpg">
                <input type="button" style="padding: 10px 107px;" value="Flagship Mouse">
        </a>
    </div>

    </div>

    <div class="main-keyboard">
        <div class="title-p">
            <h2>Our Keyboard categories</h2>
        </div>
        <a href="low-keyboard.php">
            <div class="card1"><img class="caicon" src="images/keyboardBack.jpg">
                <input type="button" value="Budget Keyboard">
            </div>
        </a>

        <a href="high-keyboard.php">
            <div class="card2"><img class="caicon" src="images/hkey.jfif">
                <input type="button" value="Flagship Keyboard">
            </div>
        </a>
    </div>

    <div class="main-headphone">
        <div class="title-p">
            <h2>Our Headphone categories</h2>
        </div>
        <a href="low-headphone.php">
            <div class="card1"><img class="caicon" src="images/frank-septillion-Qrspubmx6kE-unsplash.jpg">
                <input type="button" value="Budget Headphone">
            </div>
        </a>

        <a href="high-headphone.php">
            <div class="card2"><img class="caicon" src="images/fausto-sandoval-w5m3PIGvkqI-unsplash.jpg">
                <input type="button" value="Flagship Headphone">
            </div>
        </a>
    </div>

    <section class="about" id="about">
        <div class="main">
            <img src="images/port1.jpg" alt="pl">
            <div class="text">
                <h2>
                    Empower Your Shopping Experience
                </h2>
                <h5>Discover Your <span>Perfect Match</span> </h5>
                <p>
                    Our mission is to simplify your shopping experience by providing you with unbiased, in-depth product
                    comparisons across a wide range of categories.
                    Join us at and unlock the power of choice. Let us help you make informed decisions and discover the
                    products that truly meet your needs. Your satisfaction is our top priority, and we're committed to
                    providing you with a seamless, enjoyable shopping experience.
                </p>

            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content" id="contact">
            <h3>Face<span>Off</span></h3>
            <p>
                We believe in empowering our users with all the information they need to find the perfect product that
                aligns with their requirements and budget.</p>
            <ul class="socials">
                <li><a href="https://www.facebook.com/andy.mat.7923?mibextid=D4KYlr"><i class="fa-brands fa-facebook"></a></i></li>
                <li><a href="https://twitter.com/VedantC78502629?t=ff8BC-lzqv54hNkJFxhppg&s=09"><i class="fa-brands fa-x-twitter"></i></a></li>
                <li><a href="https://discord.gg/GqU9We45"><i class="fa-brands fa-discord"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>Copyright &copy;2023 FaceOff. All rights reserved.</p>
        </div>

    </footer>
</body>

</html>
