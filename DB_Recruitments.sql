-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 54.219.4.93    Database: project1
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `language_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`language_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES ('en','English'),('vi','VietNam');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2023_05_10_125504_users',1),(3,'2023_05_10_150935_recruitments',1),(4,'2023_05_17_131104_languages',1),(5,'2023_05_17_131642_recruitment_translate',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruitment_translates`
--

DROP TABLE IF EXISTS `recruitment_translates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recruitment_translates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `recruitment_id` int unsigned NOT NULL,
  `language_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recruitment_translates_recruitment_id_foreign` (`recruitment_id`),
  KEY `recruitment_translates_language_code_foreign` (`language_code`),
  CONSTRAINT `recruitment_translates_language_code_foreign` FOREIGN KEY (`language_code`) REFERENCES `languages` (`language_code`) ON DELETE CASCADE,
  CONSTRAINT `recruitment_translates_recruitment_id_foreign` FOREIGN KEY (`recruitment_id`) REFERENCES `recruitments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment_translates`
--

LOCK TABLES `recruitment_translates` WRITE;
/*!40000 ALTER TABLE `recruitment_translates` DISABLE KEYS */;
INSERT INTO `recruitment_translates` VALUES (1,28,'en','Developer PHP (Laravel, CakePHP, EC Cube)','<p>Developer&nbsp; PHP (Laravel, CakePHP, EC Cube)</p>','Developer  PHP (Laravel, CakePHP, EC Cube)'),(2,28,'vi','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)','<p>Nhà phát triển PHP (Laravel, CakePHP, EC Cube)</p>','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)'),(3,29,'en','Dev Web Frontend','<p>Dev Web Frontend</p>','Dev Web Frontend'),(4,29,'vi','Lập Trình Viên Web Frontend Fresher','<p>Lập Trình Viên Web Frontend</p>','Lập Trình Viên Web Frontend'),(5,30,'en','Fresher Data Engineer','<p>Fresher Data Engineer&nbsp;</p>','Fresher Data Engineer'),(6,30,'vi','Chuyên Viên Data Engineer','<p>Chuyên Viên Data Engineer&nbsp;</p>','Chuyên Viên Data Engineer'),(7,31,'en','Data Engineer','<p>Data Engineer&nbsp;</p>','Data Engineer'),(8,31,'vi','Kỹ thuật viên Data Engineer','<p>Kỹ thuật viên Data Engineer&nbsp;</p>','Kỹ thuật viên Data Engineer'),(9,32,'en','Developer PHP (Laravel, CakePHP, EC Cube)','<p>Developer PHP (Laravel, CakePHP, EC Cube)</p>','Developer PHP (Laravel, CakePHP, EC Cube)'),(10,32,'vi','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)','<p>Nhà phát triển PHP (Laravel, CakePHP, EC Cube)</p>','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)'),(11,33,'en','qưeqw','<p>qưe</p>','qưe'),(12,33,'vi','qưe','<p>qưe</p>','qưe'),(13,34,'en','qưe','<p>qưe</p>','qưe'),(14,34,'vi','qưe','<p>qưe</p>','qưe'),(15,35,'en','Dev FE ReactJs','<p>Dev FE ReactJs</p>','Dev FE ReactJs'),(16,35,'vi','Lập trình viên FE ReactJs','<p>Lập trình viên FE ReactJs</p>','Lập trình viên FE ReactJs'),(17,37,'en','BUI PHUOC en','<p>BUI PHUOC en</p>','BUI PHUOC en'),(18,37,'en','BUI PHUOC en','<p>BUI PHUOC en</p>','BUI PHUOC en'),(19,37,'vi','BUI PHUOC vi','<p>BUI PHUOC vi</p>','BUI PHUOC vi'),(20,38,'en','Title en','<p>Title en</p>','Title en'),(21,38,'en','Title en','<p>Title en</p>','Title en'),(22,38,'vi','Title vi','<p>Title vi</p>','Title vi'),(23,39,'en','BUI PHUOC vi','<p><span style=\"color: rgba(44, 56, 74, 0.95); font-size: medium;\">BUI PHUOC vi</span></p>','BUI PHUOC vi'),(24,39,'vi','BUI PHUOC vi','<p><span style=\"color: rgba(44, 56, 74, 0.95); font-size: medium;\">BUI PHUOC vi</span></p>','BUI PHUOC vi'),(25,41,'en','Title en','<p>Title en</p>','Title en'),(26,41,'vi','Title en','<p>Title en</p>','Title en'),(27,42,'en','Developt Mobile','<p>Developt Mobile</p>','Developt Mobile'),(28,42,'vi','Lập Trình Viên Mobile','<p>Lập Trình Viên Mobile</p>','Lập Trình Viên Mobile');
/*!40000 ALTER TABLE `recruitment_translates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recruitments`
--

DROP TABLE IF EXISTS `recruitments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recruitments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','UnActive','Expired','Closed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitments`
--

LOCK TABLES `recruitments` WRITE;
/*!40000 ALTER TABLE `recruitments` DISABLE KEYS */;
INSERT INTO `recruitments` VALUES (27,'1684341766-img.jpg','Active','2023-05-17 23:42:46',NULL),(28,'1684345055-img.jpg','Active','2023-05-17 23:43:25','2023-05-18 08:33:26'),(29,'1684373331-img.jpg','Active','2023-05-18 08:28:51',NULL),(30,'1684373457-img.png','Active','2023-05-18 08:30:57','2023-05-18 08:34:14'),(31,'1684373717-img.png','Active','2023-05-18 08:35:17',NULL),(32,'1684373763-img.jpg','Active','2023-05-18 08:36:03',NULL),(33,'1684373791-img.jpg','UnActive','2023-05-18 08:36:31','2023-05-18 08:38:39'),(34,'1684373814-img.webp','Active','2023-05-18 08:36:54','2023-05-18 08:38:40'),(35,'1684379524-img.png','Active','2023-05-18 10:12:04',NULL),(36,'1684380132-img.jpg','Active','2023-05-18 10:22:12',NULL),(37,'1684380213-img.jpg','Active','2023-05-18 10:23:33','2023-05-18 15:07:10'),(38,'1684380247-img.jpg','Active','2023-05-18 10:24:07','2023-05-18 15:05:50'),(39,'1684380304-img.jpg','Active','2023-05-18 10:25:04',NULL),(40,'1684391092-img.png','Active','2023-05-18 13:24:52',NULL),(41,'1684397128-img.jpg','Active','2023-05-18 15:05:28','2023-05-18 15:05:51'),(42,'1684403619-img.jpg','UnActive','2023-05-18 16:53:39',NULL);
/*!40000 ALTER TABLE `recruitments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mienphi221@gmail.com','$2y$10$uiGAQ7MrlUy2dzbnMOBIFu3RbS/DNeegRxaYhdsoDbTwSXIY7/rci','52384b43653675584e30637a7236434865495253');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-18 19:07:01
