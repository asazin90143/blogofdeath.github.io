<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Death List</title>
    <style>
        /* style.css content with background image added to the body */
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0;
            background-color: #1a1a1a; /* Dark background fallback */
            color: #f0f0f0; /* Light text */
            /* Add your Death Note background image here */
            background-image: url('postbackground.jpg');
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
                <h1>About Death List</h1>
                <p>Exploring the world of Death Note</p>
            </div>
        </div>
    </header>

    <main class="container">
        <section class="content-section">
            <h1>About Us</h1>
            <p>Welcome to Death List, a blog dedicated to the intricate and thought-provoking world of the anime and manga series, Death Note. Here, we delve into the complex characters, the gripping philosophical debates on justice, and the ever-twisting plot that has captivated fans worldwide.</p>
            <p>Our aim is to provide insightful analysis, engaging discussions, and a space for fans to connect over their shared passion for this iconic series. Whether you're a long-time follower or a newcomer drawn into the battle of wits between Light Yagami and L, we hope you'll find something here to deepen your appreciation for Death Note.</p>
            <p>We are a team of dedicated anime enthusiasts who are fascinated by the moral ambiguities, the psychological depth, and the sheer brilliance of Death Note's narrative. Through our articles, we aim to explore the various facets of the story, from the motivations of its key players to the broader themes it presents.</p>
            <p>Thank you for joining us on this journey into the world of Shinigami, Death Notes, and the eternal quest for justice in a morally gray universe.</p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Death List</p>
    </footer>
</body>
</html>