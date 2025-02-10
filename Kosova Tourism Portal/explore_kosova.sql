-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2025 at 09:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `explore_kosova`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `opening_hours` varchar(100) DEFAULT NULL,
  `contact_info` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `description`, `image_url`, `location`, `opening_hours`, `contact_info`, `price`) VALUES
(1, 'Gjakova', 'Gjakova is known for its traditional houses, and the Old Bazaar, a rich historical site.', 'gjakova.jpg', 'Gjakova, Kosovo', '09:00 - 18:00', 'info@gjakova.com', 50.00),
(2, 'Prizren', 'Prizren is a city with many medieval monuments and an Ottoman heritage.', 'prizren.jpg', 'Prizren, Kosovo', '09:00 - 19:00', 'info@prizren.com', 60.00),
(3, 'Pristina', 'Pristina, the capital city, is a vibrant mix of modern culture and history.', 'pristina.jpg', 'Pristina, Kosovo', '08:00 - 22:00', 'info@pristina.com', 70.00),
(4, 'Peja', 'Peja is famous for its picturesque surroundings and the Patriarchate of Peć.', 'peja.jpg', 'Peja, Kosovo', '09:00 - 20:00', 'info@peja.com', 65.00),
(5, 'Mitrovica', 'Mitrovica is a historical city, rich in culture, with a divided history between North and South.', 'mitrovica.jpg', 'Mitrovica, Kosovo', '10:00 - 18:00', 'info@mitrovica.com', 55.00),
(6, 'Rugova Canyon', 'A scenic natural landmark, known for its breathtaking landscapes.', 'rugova.jpg', 'Rugova Canyon, Kosovo', 'All Day', 'info@rugova.com', 40.00),
(7, 'Kosovo Museum', 'A museum showcasing the history and culture of Kosovo.', 'kosovomuseum.jpg', 'Pristina, Kosovo', '09:00 - 18:00', 'info@kosovomuseum.com', 30.00),
(8, 'Brezovica Ski Resort', 'A popular ski resort for winter sports lovers.', 'brezovica.jpg', 'Brezovica, Kosovo', '08:00 - 17:00', 'info@brezovica.com', 80.00),
(9, 'Mirusha Waterfalls', 'A natural wonder, these waterfalls are one of Kosovo’s best-kept secrets.', 'mirusha.jpg', 'Mirusha, Kosovo', 'All Day', 'info@mirusha.com', 50.00),
(10, 'Germia Park', 'A large park with a pool, walking trails, and beautiful views of Pristina.', 'germia.jpg', 'Pristina, Kosovo', '06:00 - 20:00', 'info@germia.com', 25.00),
(11, 'Visoki Decani', 'A UNESCO World Heritage site, home to a Serbian Orthodox monastery.', 'decani.jpg', 'Deçan, Kosovo', '08:00 - 16:00', 'info@decani.com', 45.00),
(12, 'Kosovo Polje', 'A historic site, the battlefield of Kosovo, where the famous 1389 battle occurred.', 'kosovopolje.jpg', 'Kosovo Polje, Kosovo', '08:00 - 17:00', 'info@kosovopolje.com', 35.00),
(13, 'Sharr Mountains National Park', 'A UNESCO-listed park with amazing biodiversity.', 'sharr.jpg', 'Sharr Mountains, Kosovo', '09:00 - 20:00', 'info@sharr.com', 75.00),
(14, 'Leposavić', 'A beautiful town known for its ancient landmarks and natural beauty.', 'leposavic.jpg', 'Leposavić, Kosovo', '09:00 - 18:00', 'info@leposavic.com', 50.00),
(15, 'Kopiliq Springs', 'A hidden gem, famous for its natural springs.', 'kopiliq.jpg', 'Kopiliq, Kosovo', '08:00 - 18:00', 'info@kopiliq.com', 40.00),
(16, 'Bajgora', 'A picturesque village with stunning natural landscapes and traditions.', 'bajgora.jpg', 'Bajgora, Kosovo', '09:00 - 19:00', 'info@bajgora.com', 45.00),
(17, 'Gracanica Monastery', 'A Serbian Orthodox monastery with amazing frescoes, a UNESCO site.', 'gracanica.jpg', 'Gracanica, Kosovo', '08:00 - 17:00', 'info@gracanica.com', 35.00),
(18, 'Drenica Valley', 'A scenic valley filled with history, nature, and rural charm.', 'drenica.jpg', 'Drenica, Kosovo', '09:00 - 20:00', 'info@drenica.com', 50.00),
(19, 'Sinan Pasha Mosque', 'A historical mosque in Prizren with architectural significance.', 'sinanpasha.jpg', 'Prizren, Kosovo', '09:00 - 17:00', 'info@sinanpasha.com', 40.00),
(20, 'Vushtrri', 'A town with a rich Ottoman heritage, located near Pristina.', 'vushtrri.jpg', 'Vushtrri, Kosovo', '08:00 - 18:00', 'info@vushtrri.com', 30.00),
(21, 'Newborn Monument', 'A symbol of Kosovo’s independence, located in Pristina.', 'newborn.jpg', 'Pristina, Kosovo', 'All Day', 'info@newborn.com', 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `publication_date` datetime DEFAULT current_timestamp(),
  `image_url` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `content`, `publication_date`, `image_url`) VALUES
(1, 'Exciting Developments in Kosovo\'s Tourism', 'Kosovo\'s tourism sector is undergoing significant development, making it an increasingly attractive destination.', 'GuideKS is a popular platform designed to promote tourism in Kosovo by providing visitors with comprehensive information on various destinations, services, and experiences throughout the country. It serves as a comprehensive guide for both locals and tourists, offering valuable information on everything from tourist destinations to practical travel details.\n\nKosovo\'s tourism sector is growing with infrastructure investments, improved transportation, and international recognition. The expansion of Pristina International Airport, eco-tourism initiatives, and adventure tourism opportunities are drawing in more travelers. The country\'s rich cultural heritage, including UNESCO sites and vibrant festivals, is another key attraction.\n\nInfrastructure improvements, cultural festivals, adventure tourism, and sustainability efforts all contribute to Kosovo\'s rising profile as a travel destination.', '2025-02-02 02:53:49', 'images/tourism.jpg'),
(2, 'The Great Kosovo Cultural Festival', 'This year’s festival will celebrate Kosovo\'s rich heritage with music, dance, art, and cuisine.', 'The Great Kosovo Cultural Festival is one of the most anticipated events of the year. It brings together artists, musicians, and performers from across the country and beyond to showcase Kosovo\'s diverse cultural influences. Attendees can enjoy traditional dances, live music performances, art exhibitions, and a taste of authentic Kosovar cuisine.\n\nThe festival also aims to foster cultural exchange by featuring international artists, interactive workshops, and panel discussions on the importance of cultural preservation. Tourists and locals alike can immerse themselves in the festivities and experience Kosovo\'s vibrant artistic community.', '2025-02-02 02:53:49', 'images/festival.jpg'),
(3, 'New Hiking Trails Open in Kosovo', 'Kosovo introduces new hiking trails for adventure lovers, offering breathtaking views and diverse wildlife.', 'Kosovo\'s natural landscapes are becoming more accessible to adventure seekers with the launch of newly developed hiking trails. These trails cater to all levels of hikers, from beginners to experienced trekkers. The routes wind through stunning mountains, picturesque valleys, and protected nature reserves, offering opportunities for wildlife observation and outdoor exploration.\n\nThe government and local organizations have worked together to ensure these trails are well-marked and safe for visitors. Along the way, hikers can find scenic viewpoints, camping sites, and guided trekking tours that provide deeper insight into the region\'s ecology and cultural heritage.', '2025-02-02 02:53:49', 'images/hiking.jpg'),
(4, 'Kosovo: A Rising Destination for Eco-Tourism', 'Kosovo is positioning itself as a leader in sustainable tourism with eco-friendly initiatives and destinations.', 'As the world moves towards sustainable tourism, Kosovo is making strides in eco-tourism development. The country offers pristine natural environments, organic farms, and conservation-focused accommodations. Visitors can explore eco-lodges, partake in organic farming experiences, and discover Kosovo’s breathtaking green valleys and rivers.\n\nGovernment initiatives and community-driven projects have helped build eco-tourism infrastructure, promoting responsible travel that benefits both the environment and local populations. Efforts to protect national parks, wildlife habitats, and historical sites ensure that Kosovo remains an environmentally friendly travel destination.', '2025-02-02 02:53:49', 'images/ecoturism.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_email` varchar(255) DEFAULT NULL,
  `site_phone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tour_guides`
--

CREATE TABLE `tour_guides` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_guides`
--

INSERT INTO `tour_guides` (`id`, `name`, `email`, `phone`, `bio`) VALUES
(1, 'Driton Hoxha', 'driton@kosovo.com', '+383 44 111 111', 'Driton is an experienced guide with a deep passion for the culture and history of Kosovo.'),
(2, 'Elira Zuka', 'elira@kosovo.com', '+383 44 222 222', 'Elira specializes in cultural tours and enjoys teaching tourists about Kosovo’s rich traditions.'),
(3, 'Krenar Berisha', 'krenar@kosovo.com', '+383 44 333 333', 'Krenar is a professional guide with expertise in historical sites and natural wonders.'),
(4, 'Vjosa Deda', 'vjosa@kosovo.com', '+383 44 444 444', 'Vjosa is known for her in-depth knowledge of Kosovo’s medieval heritage and old towns.'),
(5, 'Arlinda Shala', 'arlinda@kosovo.com', '+383 44 555 555', 'Arlinda is passionate about eco-tourism and exploring Kosovo’s rural beauty.'),
(6, 'Valon Krasniqi', 'valon@kosovo.com', '+383 44 666 666', 'Valon offers personalized tours with a focus on local culture and food.'),
(7, 'Mirela Koliqi', 'mirela@kosovo.com', '+383 44 777 777', 'Mirela is a nature lover who leads groups on hiking and eco-tours around Kosovo’s mountains.'),
(8, 'Luan Selimi', 'luan@kosovo.com', '+383 44 888 888', 'Luan is a passionate history guide with a love for archaeological tours in Kosovo.'),
(9, 'Blerina Peci', 'blerina@kosovo.com', '+383 44 999 999', 'Blerina has over 10 years of experience guiding tourists through Kosovo’s most famous landmarks.'),
(10, 'Florent Bytyqi', 'florent@kosovo.com', '+383 44 101 010', 'Florent specializes in adventure tours and hiking expeditions through Kosovo’s rugged terrain.');

-- --------------------------------------------------------

--
-- Table structure for table `tour_packages`
--

CREATE TABLE `tour_packages` (
  `id` int(11) NOT NULL,
  `guide_id` int(11) DEFAULT NULL,
  `package_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `duration` varchar(50) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tour_packages`
--

INSERT INTO `tour_packages` (`id`, `guide_id`, `package_name`, `description`, `price`, `duration`, `image_url`) VALUES
(1, 1, 'Kosovo Heritage Tour', 'Explore Kosovo\'s rich heritage and cultural landmarks.', 100.00, '5 hours', 'images/1.jpg'),
(2, 1, 'Pristina City Tour', 'A walking tour through the heart of Pristina, Kosovo\'s capital.', 50.00, '3 hours', 'images/2.jpg'),
(3, 1, 'Nature and History Expedition', 'A combination of nature and historical sites in Kosovo.', 120.00, '7 hours', 'images/3.jpg'),
(4, 1, 'Kosovo Foodie Experience', 'A tour focused on Kosovo\'s traditional food and drinks.', 80.00, '4 hours', 'images/4.jpg'),
(5, 1, 'Cultural Immersion in Kosovo Villages', 'Experience the rural beauty and traditions of Kosovo villages.', 90.00, '6 hours', 'images/5.jpg'),
(6, 2, 'Cultural Insights Tour', 'Dive deep into Kosovo’s cultural history and monuments.', 95.00, '5 hours', 'images/cultural_insights.jpg'),
(7, 2, 'Old Town Walks', 'Guided walk through the charming old towns of Kosovo.', 55.00, '3 hours', 'images/old_town_walks.jpg'),
(8, 2, 'Nature and Adventure Tour', 'Enjoy Kosovo’s stunning natural beauty with a local guide.', 110.00, '6 hours', 'images/6.jpg'),
(9, 2, 'Folklore and Traditions Tour', 'Experience Kosovo’s folklore and traditional music.', 70.00, '4 hours', 'images/7.jpg'),
(10, 2, 'Kosovo History Tour', 'Learn about the fascinating history of Kosovo through its landmarks.', 100.00, '5 hours', 'images/8.jpg'),
(11, 3, 'Kosovo History and Nature Tour', 'A tour combining history and natural landscapes of Kosovo.', 120.00, '7 hours', 'images/9.jpg'),
(12, 3, 'Ancient Sites Tour', 'Visit Kosovo’s ancient archaeological sites with a local guide.', 95.00, '5 hours', 'images/10.jpg'),
(13, 3, 'Hiking and Trekking in Kosovo', 'Explore Kosovo’s rugged mountains with a professional guide.', 150.00, '8 hours', 'images/11.jpg'),
(14, 3, 'Nature and Culture Tour', 'Experience Kosovo’s cultural heritage and breathtaking nature.', 100.00, '6 hours', 'images/12.jpg'),
(15, 3, 'Monumental Kosovo', 'A guided tour to the monumental and cultural sites of Kosovo.', 110.00, '5 hours', 'images/13.jpg'),
(16, 4, 'Kosovo Medieval Tour', 'Travel back in time to the medieval period with this tour of Kosovo.', 115.00, '6 hours', 'images/14.jpg'),
(17, 4, 'Prizren City Tour', 'Visit the historical city of Prizren, Kosovo\'s cultural gem.', 60.00, '4 hours', 'images/prizren_city_tour.jpg'),
(18, 4, 'Kosovo\'s UNESCO Sites', 'Visit the UNESCO World Heritage Sites in Kosovo.', 130.00, '7 hours', 'images/15.jpg'),
(19, 4, 'Kosovo Religious Heritage Tour', 'Discover the religious heritage and monuments of Kosovo.', 90.00, '5 hours', '16.jpg'),
(20, 4, 'Fortress and Castle Tour', 'Explore Kosovo’s medieval fortresses and castles.', 105.00, '6 hours', 'images/17.jpg'),
(21, 5, 'Eco-Tourism in Kosovo', 'Explore Kosovo’s untouched nature on a hiking and eco-tourism tour.', 130.00, '7 hours', '18.jpg'),
(22, 5, 'Rural Kosovo Tour', 'Travel through Kosovo’s beautiful rural landscapes and villages.', 95.00, '5 hours', 'images/19.jpg'),
(23, 5, 'Kosovo Flora and Fauna Tour', 'A guided tour exploring the diverse flora and fauna of Kosovo.', 120.00, '6 hours', 'images/20.jpg'),
(24, 5, 'Kosovo Countryside Experience', 'Experience the charm of Kosovo’s countryside with a local guide.', 90.00, '4 hours', 'images/21.jpg'),
(25, 5, 'Kosovo Mountain Adventure', 'Hike Kosovo’s mountains for stunning views and natural beauty.', 140.00, '8 hours', 'images/22.jpg'),
(26, 6, 'Cultural Tour of Kosovo\'s Villages', 'Discover Kosovo’s villages and their unique culture and lifestyle.', 95.00, '5 hours', 'images/23.jpg'),
(27, 6, 'Kosovo Culinary Journey', 'A food-focused tour of Kosovo’s traditional dishes and cuisine.', 80.00, '4 hours', 'images/24.jpg'),
(28, 6, 'Kosovo City Highlights Tour', 'Visit the most important and interesting sites in Kosovo\'s capital city.', 60.00, '3 hours', 'images/25.jpg'),
(29, 6, 'Kosovo in a Day Tour', 'Explore the best of Kosovo in one day with a guided tour.', 120.00, '6 hours', 'images/1.jpg'),
(30, 6, 'Kosovo Heritage Tour', 'Visit the most important heritage sites in Kosovo with a professional guide.', 110.00, '5 hours', 'images/2.jpg'),
(31, 7, 'Mountain Adventure Trek', 'Experience a thrilling adventure in Kosovo’s rugged mountains.', 130.00, '8 hours', 'images/3.jpg'),
(32, 7, 'Historical Monuments Tour', 'Tour the most significant historical monuments of Kosovo.', 90.00, '5 hours', 'images/4.jpg'),
(33, 7, 'Kosovo City Tour', 'A complete tour of Pristina, the capital of Kosovo.', 55.00, '3 hours', 'images/kosovo_city_tour.jpg'),
(34, 7, 'Hiking Kosovo Peaks', 'Hike to the peaks of Kosovo’s mountains for breathtaking views.', 120.00, '7 hours', 'images/5.jpg'),
(35, 7, 'Kosovo Local Life Experience', 'Experience the authentic local life and culture of Kosovo.', 80.00, '4 hours', 'images/6.jpg'),
(36, 8, 'Archaeological Sites Tour', 'Visit Kosovo’s most famous archaeological sites.', 100.00, '5 hours', 'images/7.jpg'),
(37, 8, 'Pristina Old Town Tour', 'Walk through the old town of Pristina and explore its history.', 50.00, '3 hours', '8.jpg'),
(38, 8, 'Kosovo War Memorial Tour', 'Explore Kosovo’s war history through its memorials and museums.', 70.00, '4 hours', 'images/9.jpg'),
(39, 8, 'Nature Trail Hiking', 'Embark on a hiking trail through Kosovo’s natural wonders.', 110.00, '6 hours', 'images/10.jpg'),
(40, 8, 'Kosovo UNESCO Heritage', 'Visit the UNESCO World Heritage sites in Kosovo.', 125.00, '7 hours', 'images/11.jpg'),
(41, 9, 'Kosovo Culture and Heritage Tour', 'Dive into the rich culture and heritage of Kosovo with a local guide.', 100.00, '5 hours', 'images/12.jpg'),
(42, 9, 'Kosovo Religious Monuments Tour', 'Tour Kosovo’s most important religious monuments and churches.', 95.00, '5 hours', 'images/13.jpg'),
(43, 9, 'Explore Kosovo \'s Villages', 'Travel to rural villages to experience traditional Kosovar life.', 85.00, '4 hours', 'images/14.jpg'),
(44, 9, 'Kosovo Historic Sites Tour', 'Visit Kosovo’s historic sites and landmarks.', 110.00, '6 hours', 'images/15.jpg'),
(45, 9, 'Adventure Trekking Tour', 'Trek through the mountains of Kosovo and experience its beauty.', 140.00, '8 hours', 'images/16.jpg'),
(46, 10, 'Kosovo Adventure and Nature Tour', 'Explore Kosovo’s adventure activities and natural beauty.', 120.00, '7 hours', 'images/17.jpg'),
(47, 10, 'Cultural Insights and History', 'Learn about Kosovo’s culture, history, and traditions on this insightful tour.', 100.00, '6 hours', 'images/18.jpg'),
(48, 10, 'Kosovo’s Hidden Gems', 'Discover Kosovo’s hidden gems, off-the-beaten-path destinations.', 110.00, '5 hours', 'images/19.jpg'),
(49, 10, 'Kosovo City Exploration Tour', 'Explore the city of Pristina and its landmarks.', 60.00, '3 hours', 'images/20.jpg'),
(50, 10, 'Rural Kosovo Trekking', 'Trek through the rural areas of Kosovo and enjoy the serene landscapes.', 130.00, '7 hours', '21.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') DEFAULT 'user',
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_guides`
--
ALTER TABLE `tour_guides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `guide_id` (`guide_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tour_guides`
--
ALTER TABLE `tour_guides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tour_packages`
--
ALTER TABLE `tour_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tour_packages`
--
ALTER TABLE `tour_packages`
  ADD CONSTRAINT `tour_packages_ibfk_1` FOREIGN KEY (`guide_id`) REFERENCES `tour_guides` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
