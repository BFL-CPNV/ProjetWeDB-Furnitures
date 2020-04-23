-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.14 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for snows
CREATE DATABASE IF NOT EXISTS `snows` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `snows`;

-- Dumping structure for table snows.snows
CREATE TABLE IF NOT EXISTS `snows` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `productCode` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `boots` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qtyAvailable` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `productCode` (`productCode`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table snows.snows: ~0 rows (approximately)
/*!40000 ALTER TABLE `snows` DISABLE KEYS */;
INSERT INTO `snows` (`id`, `productCode`, `brand`, `boots`, `model`, `qtyAvailable`) VALUES
	(1, 'B105', 'Nidecker', 'Goffy', 'Amastz', 12);
/*!40000 ALTER TABLE `snows` ENABLE KEYS */;

-- Dumping structure for table snows.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userEmailAddress` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `userHashPsw` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pseudo` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userEmailAddress` (`userEmailAddress`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table snows.users: ~1 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `userEmailAddress`, `userHashPsw`, `pseudo`) VALUES
	(1, 'testUser@cpnv.ch', '$2y$10$XZoEAXQTYB.a1ZvxOUfl8eELGlQTvXudXQQR8.80khz2q/b/kO39a', 'testPseudo');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
