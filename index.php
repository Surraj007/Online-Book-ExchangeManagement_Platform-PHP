<?php include('config/db.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Book Exchange Platform</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <header>
        <nav>
            <div class="logo">
                <img src="images/logo.png" alt="Book Exchange Logo">
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Browse Books</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to the Online Book Exchange Platform</h1>
            <p>Exchange your books and discover new ones. Connect with book lovers in your community.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="feature">
            <img src="images/exchange.png" alt="Exchange Books">
            <h3>Easy Book Exchange</h3>
            <p>List your books for exchange and browse available books in your area.</p>
        </div>
        <div class="feature">
            <img src="images/community.png" alt="Community">
            <h3>Join a Community</h3>
            <p>Become a part of a community of book lovers and share your reading experiences.</p>
        </div>
        <div class="feature">
            <img src="images/recommendation.png" alt="Recommendations">
            <h3>Personalized Recommendations</h3>
            <p>Get book recommendations based on your interests and past exchanges.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Online Book Exchange Platform. All Rights Reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
