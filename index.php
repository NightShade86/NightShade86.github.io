<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Glannon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Homepage Styles -->
    <link rel="icon" type="image/x-icon" href="images/index/logo-white.png">
    <link rel="stylesheet" href="css/home.css">
</head>
<body>


<!-- Header -->
<header>
    <h1>Glannon</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="plans-prices.php">Plans and pricing</a>
        <a href="about-us.php">About us</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">

</section>

<!-- Services Section -->
<section class="services">
    <h2>Our Services</h2>

    <div class="service-box">
        <div class="service">
            <img src="images/index/web-design.jpg">
            <h3>Web Design</h3>
            <p>Custom-coded and WordPress websites.</p>
        </div>

        <div class="service">
            <img src="images/index/hosting.jpg">
            <h3>Web Hosting</h3>
            <p>Secure, fast, and affordable hosting.</p>
        </div>

        <div class="service">
            <img src="images/index/it-support.webp">
            <h3>IT Support</h3>
            <p>Hardware, software, and consultation.</p>
        </div>
    </div>
</section>

<!-- Message Us Section -->
<section class="contact">
    <h2>Message Us</h2>

    <form method="post" action="send_message.php">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</section>

<!-- Footer -->
<footer>
    <p>&copy; <?php echo date("Y"); ?> Glannon. All rights reserved.</p>
</footer>

</body>
</html>
