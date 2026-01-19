<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Company</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f4f4;
            color: #333;
        }

        /* Header */
        header {
            background: #111;
            color: #fff;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            font-size: 22px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin-left: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        /* Hero Section */
        .hero {
            height: 70vh;
            background: url("hero.jpg") center/cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .hero-content {
            background: rgba(0,0,0,0.6);
            padding: 30px;
            border-radius: 8px;
        }

        .hero h2 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .hero a {
            display: inline-block;
            margin-top: 15px;
            padding: 12px 25px;
            background: #ff6600;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .hero a:hover {
            background: #e55b00;
        }

        /* Services */
        .services {
            padding: 60px 40px;
            background: #fff;
        }

        .services h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .service-box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .service {
            background: #f9f9f9;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
        }

        .service h3 {
            margin-bottom: 10px;
        }

        /* Message Us */
        .contact {
            padding: 60px 40px;
            background: #eee;
        }

        .contact h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
        }

        input, textarea, button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
        }

        button {
            background: #111;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background: #333;
        }

        /* Footer */
        footer {
            background: #111;
            color: #fff;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>

<!-- Header -->
<header>
    <h1>My Company</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="contact.php">Contact</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h2>Professional Web & IT Solutions</h2>
        <p>Affordable. Reliable. Custom-built.</p>
        <a href="contact.php">Contact Us</a>
    </div>
</section>

<!-- Services Section -->
<section class="services">
    <h2>Our Services</h2>
    <div class="service-box">
        <div class="service">
            <h3>Web Design</h3>
            <p>Custom-coded and WordPress websites.</p>
        </div>
        <div class="service">
            <h3>Web Hosting</h3>
            <p>Secure, fast, and affordable hosting.</p>
        </div>
        <div class="service">
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
    <p>&copy; <?php echo date("Y"); ?> My Company. All rights reserved.</p>
</footer>

</body>
</html>
