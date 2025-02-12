<?php
include 'databaseconnection.php'; 

if (isset($_GET['query'])) {
    $search = trim($_GET['query']);
    $searchWildcard = "%" . $search . "%";

    
    if (strtolower($search) === "tour guides") {
        $sql = "SELECT 'tour_guide' AS type, name AS title, bio AS description, NULL AS image_url FROM tour_guides";
    } elseif (strtolower($search) === "tour packages") {
        $sql = "SELECT 'tour_package' AS type, package_name AS title, description, image_url FROM tour_packages";
    } else {
        
        $sql = "
            SELECT 'destination' AS type, name AS title, description, image_url FROM destinations WHERE name LIKE ? 
            UNION 
            SELECT 'tour_package' AS type, package_name AS title, description, image_url FROM tour_packages WHERE package_name LIKE ? 
            UNION 
            SELECT 'tour_guide' AS type, name AS title, bio AS description, NULL AS image_url FROM tour_guides WHERE name LIKE ?
            UNION 
            SELECT 'news' AS type, title, summary AS description, image_url FROM news WHERE title LIKE ? 
        ";
    }

    $stmt = $conn->prepare($sql);

    if (strtolower($search) === "tour guides" || strtolower($search) === "tour packages") {
        
        $stmt->execute();
    } else {
        
        $stmt->bind_param("ssss", $searchWildcard, $searchWildcard, $searchWildcard, $searchWildcard);
        $stmt->execute();
    }

    $result = $stmt->get_result();

    echo "<h2>Search Results</h2>";
    echo "<div class='search-results'>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='search-item'>";
            echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
            echo "<p>" . htmlspecialchars($row['description']) . "</p>";

            
            if (!empty($row['image_url'])) {
                echo "<img src='" . htmlspecialchars($row['image_url']) . "' alt='Image'>";
            }

            echo "</div>";
        }
    } else {
        echo "<p>No results found.</p>";
    }

    echo "</div>";

    $stmt->close();
    $conn->close();
}
?>
