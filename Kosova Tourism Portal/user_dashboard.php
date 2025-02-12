<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header and Navigation -->
    <header>
        <nav class="navbar">
            <div class="logo">Explore Kosova</div>
            <ul class="nav-links">
                <li><a href="Homepage.html">Home</a></li>
                <li><a href="logout.php" class="logout-btn">Logout</a></li>
            </ul>
        </nav>
    </header>

    <!-- User Dashboard Section -->
    <section class="dashboard">
        <div class="container">
        <h1>Welcome, <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>!</h1>
            <p>Choose an action to get started:</p>

            <div class="user-actions">
            <a href="./explore_destinations.php"><button class="btn">Explore Destinations</button></a>
            <a href="./news.html"><button class="btn">View News</button></a> 
            <a href="./contactus.html"><button class="btn">Contact Support</button></a>

            </div>

            <form action="search.php" method="GET" class="search-bar">
            <input type="text" name="query" id="searchInput" placeholder="Search for destinations, tours, or guides...">
            <button type="submit" class="search-btn">Search</button>
            </form>


        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Explore Kosova. All Rights Reserved.</p>
    </footer>
</body>
</html>
