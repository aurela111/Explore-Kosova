<?php include 'readmoreNews.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news['title']); ?> - Explore Kosova</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="explorekosova.html">Explore Kosova</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><a href="news.html">News</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <article class="content">
            <h1><?php echo htmlspecialchars($news['title']); ?></h1>
            <img src="<?php echo htmlspecialchars($news['image_url']); ?>" alt="News Image" class="featured-image">
            <p><?php echo nl2br(htmlspecialchars($news['content'])); ?></p>
        </article>
    </main>

    <div class="back-to-news">
        <a href="news.html" class="back-link">← Back to News</a>
    </div>

    <footer>
        <div class="footer-content">
            <p>&copy; 2024 Explore Kosova. All Rights Reserved.</p>
            <p>Email: info@explorekosova.com | Phone: +383 44 123 456</p>
        </div>
    </footer>
</body>
</html>