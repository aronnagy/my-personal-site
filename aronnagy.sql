-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2020 at 05:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aronnagy`
--

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` bigint(20) NOT NULL,
  `module_id` bigint(20) NOT NULL,
  `text` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `module_id`, `text`) VALUES
(1, 1, 'I\'m Aron Nagy. Web/software developer.\r\n<br>I\'m in business since 2016 and since then I\'ve learned a lot, got experienced and felt in love with my job.\r\n<br>If you\'re interested in my jobs and projects works:'),
(2, 5, 'If you\'ve further questions or just wanna have a coffee with me:'),
(3, 4, 'Since my childhood I\'m a huge fan of languages (I\'ve created one back on time).\r\n<br>This means that I\'m constanlty using one foreign language.\r\n<br>My current knowledge on languages:\r\n<br>\r\n<br>-English 🇬🇧 (Medium/B2 - with language exam)\r\n<br>-Czech 🇨🇿 (Basic)\r\n<br>-Slovak 🇸🇰 (Basic)\r\n<br>\r\n<br>I also know some basic sentences in french and polish. :)\r\n<br>\r\n<br>If you\'re interested on my articles written in foreign language:'),
(4, 2, 'I was born in 1997 at Miskolc, the city what close to me even today.\r\n<br>Since then, I lived, worked and studied in many places.\r\n<br>\r\n<br>If you\'re interested about the places what I\'ve been visited:'),
(5, 3, '\"No pain, no gain\" - specially true for webdevelopment\r\n<br>That\'s this profession about.\r\n<br>Self-impromevent and persistent studying.\r\n<br>Those are the secret ingredients what makes you go further.\r\n<br>If you\'re interested about my journey:');

-- --------------------------------------------------------

--
-- Table structure for table `hungarian`
--

CREATE TABLE `hungarian` (
  `id` bigint(20) NOT NULL,
  `module_id` bigint(20) NOT NULL,
  `text` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hungarian`
--

INSERT INTO `hungarian` (`id`, `module_id`, `text`) VALUES
(1, 1, 'Nagy Áron vagyok, web- és szoftverfejlesztő.\r\n<br>2016 óta dolgozom a szakmában és azóta rengeteg érdekes és sokoldalú tapasztalatot szereztem.\r\n<br>Amennyiben érdekelnek az általam készült munkák:'),
(2, 2, '1997-ben születtem Miskolcon, a városban ami a mai napig közel áll hozzám.\r\n<br>Azóta számos helyen éltem, dolgoztam, tanultam.\r\n<br>\r\n<br>Az általam meglátogatott helyekért:'),
(3, 3, '\"A jó pap holtig tanul\" - a webfejlesztő mégtovább! Igen, ez egy ilyen szakma.\r\n<br>Önfejlesztés, kitartás és szorgalom. Ezen titkos összetevőkkel TI is eltudjátok érni az álmaitokat!\r\n<br>\r\n<br>Ha kiváncsiak vagytok, hogy én hogy tettem meg az utat idáig:'),
(4, 4, 'Egészen gyerekkorom óta foglalkoztattak a különböző nyelvek (még egy saját nyelvet is kitaláltam).\r\n<br>Ez mára azt jelenti, hogy folyamatosan használok legalább egy idegen nyelvet (mostly english).\r\n<br>Jelenlegi nyelvtudásom:\r\n<br>\r\n<br>-Angol 🇬🇧 (középfok - nyelvvizsgával)\r\n<br>-Cseh 🇨🇿 (alapfok)\r\n<br>-Szlovák 🇸🇰 (alapfok)\r\n<br>\r\n<br>És ezenkívül tudok még pár alapmondatot franciául és lengyelül. :)\r\n<br>\r\n<br>Ha érdekelnek az idegen nyelven írott cikkeim:'),
(5, 5, 'További kérdéseid lennének, vagy csak összeakarsz futni egy kávéra?');

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `site_id` bigint(20) NOT NULL,
  `module_id` bigint(20) NOT NULL,
  `module_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`site_id`, `module_id`, `module_name`) VALUES
(2, 1, 'intro'),
(2, 2, 'places'),
(2, 3, 'studies'),
(2, 4, 'languages'),
(2, 5, 'contact');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` bigint(20) NOT NULL,
  `site_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site_name`) VALUES
(1, 'main'),
(2, 'about');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `module_id` (`module_id`);

--
-- Indexes for table `hungarian`
--
ALTER TABLE `hungarian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`module_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hungarian`
--
ALTER TABLE `hungarian`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `module_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `english`
--
ALTER TABLE `english`
  ADD CONSTRAINT `english_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `hungarian`
--
ALTER TABLE `hungarian`
  ADD CONSTRAINT `hungarian_ibfk_1` FOREIGN KEY (`module_id`) REFERENCES `modules` (`module_id`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`site_id`) REFERENCES `sites` (`site_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
