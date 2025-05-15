<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Death List</title>
    <style>
        /* style.css content with background image added to the body */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a; /* Dark background fallback */
            color: #f0f0f0; /* Light text */
            /* Add your Death Note background image here */
            background-image: url('contactbackground.jpg');
            background-size: cover; /* Cover the entire viewport */
            background-position: center; /* Center the image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
        }

        header {
            background-color: #222;
            padding: 1rem 0;
            /* To make the header stand out against the background */
            background-color: rgba(34, 34, 34, 0.8); /* Add some transparency */
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #f0f0f0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #e62424; /* Red hover color, Death Note-ish */
        }

        .hero-image {
            background-color: #333; /* Dark hero background */
            color: #f0f0f0;
            text-align: center;
            padding: 4rem 0;
            background-color: rgba(51, 51, 51, 0.7); /* Add some transparency */
        }

        .hero-text {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-text h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }

        .container {
            max-width: 960px;
            margin: 2rem auto;
            padding: 0 20px;
            /* To make the content stand out against the background */
            background-color: rgba(34, 34, 34, 0.7); /* Add some transparency */
            border-radius: 5px;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .content-section {
            padding: 20px;
        }

        .content-section h1 {
            color: #e62424;
            margin-bottom: 1rem;
        }

        .content-section p {
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .content-section form div {
            margin-bottom: 15px;
        }

        .content-section label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .content-section input[type="text"],
        .content-section input[type="email"],
        .content-section textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #555;
            background-color: #333;
            color: #f0f0f0;
            border-radius: 3px;
            box-sizing: border-box;
        }

        .content-section textarea {
            resize: vertical;
        }

        .content-section button[type="submit"] {
            background-color: #e62424;
            color: #f0f0f0;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .content-section button[type="submit"]:hover {
            background-color: #b31b1b;
        }

        footer {
            background-color: #222;
            color: #999;
            text-align: center;
            padding: 1rem 0;
            position: sticky; /* Or fixed, depending on your preference */
            bottom: 0;
            width: 100%;
            background-color: rgba(34, 34, 34, 0.8); /* Add some transparency */
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Death List</div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </nav>
        <div class="hero-image">
            <div class="hero-text">
                <h1>Contact Death List</h1>
                <p>Reach out with your thoughts and inquiries</p>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="content-section">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! If you have any questions, suggestions, or just want to share your thoughts on Death Note, feel free to use the contact form below.</p>

            <form action="process_contact.php" method="post">
                <div>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Death List</p>
    </footer>
</body>
</html>