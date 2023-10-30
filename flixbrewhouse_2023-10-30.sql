# ************************************************************
# Sequel Ace SQL dump
# Version 20035
#
# https://sequel-ace.com/
# https://github.com/Sequel-Ace/Sequel-Ace
#
# Host: 127.0.0.1 (MySQL 8.0.33)
# Database: flixbrewhouse
# Generation Time: 2023-10-30 18:08:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE='NO_AUTO_VALUE_ON_ZERO', SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table movies
# ------------------------------------------------------------

DROP TABLE IF EXISTS `movies`;

CREATE TABLE `movies` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `director` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;

INSERT INTO `movies` (`id`, `title`, `rating`, `length`, `director`, `stars`, `synopsis`, `poster`, `banner`, `trailer`, `created_at`, `updated_at`)
VALUES
	(1,'FIVE NIGHTS AT FREDDY\'S','PG13','1h 49m','Emma Tammi','Josh Hutcherson, Elizabeth Lail, Piper Rubio, Kat Conner Sterling','Can you survive five nights? The terrifying horror game phenomenon becomes a blood-chilling cinematic event, as Blumhouse brings Five Nights at Freddy\'s to the big screen. The film follows a troubled security guard as he begins working at Freddy Fazbear\'s Pizza. While spending his first night on the job, he realizes the night shift at Freddy\'s won\'t be so easy to make it through.','poster/otcNcy5inBw671MxEl6KiE07ugctk5K5DdTJvFla.jpg','banner/XQqgRWEQlE7zgDbSz0qQECfxgehlPxYZmMkdg33b.jpg',NULL,'2023-10-30 18:01:15','2023-10-30 18:01:15'),
	(2,'THE MARVELS','PG13','1h 45m','Nia DaCosta','Teyonah Parris, Brie Larson, Zawe Ashton, Iman Vellani','Carol Danvers AKA Captain Marvel has reclaimed her identity from the tyrannical Kree and taken revenge on the Supreme Intelligence. But unintended consequences see Carol shouldering the burden of a destabilized universe. When her duties send her to an anomalous wormhole linked to a Kree revolutionary, her powers become entangled with that of Jersey City super-fan Kamala Khan, aka Ms. Marvel, and Carol\'s estranged niece, now S.A.B.E.R. astronaut Captain Monica Rambeau.','poster/GhsljHDJ5ovCwY2hXHvDtS6rvesoiZsJJFU7GiNE.jpg','banner/ptNZ4rASTtjPY8pJ41oFXeayONQd5BkPr6Urql0z.jpg',NULL,'2023-10-30 18:03:25','2023-10-30 18:03:25'),
	(3,'Scooby-Doo','PG','1h 26m','Raja Gosnell','Freddie Prinze, Jr., Sarah Michelle Gellar, Matthew Lillard, Linda Cardellini','After an acrimonious break up, the Mystery Inc. gang are individually brought to an island resort to investigate strange goings on.','poster/e8qSogynUO2F4TGmsaF9EdNjRFp89H4mrYcUll70.jpg','banner/WjFkzyllES0xNx9LtYJgxoQ27q4iQA0hj87AUflV.jpg',NULL,'2023-10-30 18:06:38','2023-10-30 18:06:38');

/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
