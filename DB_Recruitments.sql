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
-- Table structure for table `blog_translates`
--

DROP TABLE IF EXISTS `blog_translates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blog_translates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int unsigned NOT NULL,
  `language_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blog_translates_blog_id_foreign` (`blog_id`),
  KEY `blog_translates_language_code_foreign` (`language_code`),
  CONSTRAINT `blog_translates_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `blog_translates_language_code_foreign` FOREIGN KEY (`language_code`) REFERENCES `languages` (`language_code`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_translates`
--

LOCK TABLES `blog_translates` WRITE;
/*!40000 ALTER TABLE `blog_translates` DISABLE KEYS */;
INSERT INTO `blog_translates` VALUES (1,1,'en','Launching Sonat Academy - Dinosaur Academy 4.0','<p>Launching Sonat Academy - Dinosaur Academy 4.0</p>','Launching Sonat Academy - Dinosaur Academy 4.0'),(2,1,'vi','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5','<p>Ra mắt Sonat Academy - Học Viện Khủng Long 4.5</p>','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5'),(3,2,'en','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5','<p>&nbsp;Ra mắt Sonat Academy - Học Viện Khủng Long 4.5</p>','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5'),(4,2,'vi','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5','<p>&nbsp;Ra mắt Sonat Academy - Học Viện Khủng Long 4.5</p>','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5'),(5,3,'en','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5','<p>&nbsp;Ra mắt Sonat Academy - Học Viện Khủng Long 4.5</p>','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5'),(6,3,'vi','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5','<p>&nbsp;Ra mắt Sonat Academy - Học Viện Khủng Long 4.5</p>','Ra mắt Sonat Academy - Học Viện Khủng Long 4.5');
/*!40000 ALTER TABLE `blog_translates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `blogs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','InActive') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blogs`
--

LOCK TABLES `blogs` WRITE;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` VALUES (1,'1684833816-img.jpg','Active','2023-05-23 16:23:36',NULL,NULL),(2,'1685082697-img.jpg','Active','2023-05-26 13:31:37',NULL,'2023-05-26 13:31:52'),(3,'1685082736-img.jpg','Active','2023-05-26 13:32:16',NULL,NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;
UNLOCK TABLES;

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
INSERT INTO `languages` VALUES ('en','EngLish'),('vi','VietNamese');
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2023_05_10_125504_users',1),(3,'2023_05_10_135505_languages',1),(4,'2023_05_10_150935_recruitments',1),(5,'2023_05_17_131642_recruitment_translate',1),(6,'2023_05_21_223711_blogs',1),(7,'2023_05_21_223826_blog_translates',1),(8,'2023_05_23_113329_post',1),(9,'2023_05_23_113903_post_translates',1),(10,'2023_05_23_162042_updatetable',2),(11,'2023_05_23_162221_updatetable',3);
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
-- Table structure for table `post_translates`
--

DROP TABLE IF EXISTS `post_translates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_translates` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `post_id` int unsigned NOT NULL,
  `language_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `post_translates_post_id_foreign` (`post_id`),
  KEY `post_translates_language_code_foreign` (`language_code`),
  CONSTRAINT `post_translates_language_code_foreign` FOREIGN KEY (`language_code`) REFERENCES `languages` (`language_code`) ON DELETE CASCADE,
  CONSTRAINT `post_translates_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_translates`
--

LOCK TABLES `post_translates` WRITE;
/*!40000 ALTER TABLE `post_translates` DISABLE KEYS */;
INSERT INTO `post_translates` VALUES (1,1,'en','Information Member','<h4 class=\"mb-4\" style=\"color: rgba(44, 56, 74, 0.95); background-color: rgb(235, 238, 240);\">Information Member</h4>','Information Member'),(2,1,'vi','Post của anh phước','nha phat trien full stack','Post của anh phước'),(3,2,'en','description_en','content_en','description_en'),(4,2,'vi','description_vi','nha phat trien full stack','description_vi');
/*!40000 ALTER TABLE `post_translates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('Member','Office') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'[\"1685003516-7a3248-img.jpg\",\"1685004828-795738-img.jpeg\",\"1685004828-34677a-img.jpg\",\"1685004828-436a41-img.jpg\",\"1685006433-656a50-img.jpg\"]','Member','2023-05-24 06:35:07',NULL),(2,'[\"1685006540-703430-img.jpeg\",\"1685083893-434e31-img.jpg\"]','Office','2023-05-24 06:35:22',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment_translates`
--

LOCK TABLES `recruitment_translates` WRITE;
/*!40000 ALTER TABLE `recruitment_translates` DISABLE KEYS */;
INSERT INTO `recruitment_translates` VALUES (3,2,'en','title_en','content_en','description_en'),(4,2,'vi','nha phat trien full stack','nha phat trien full stack','description_vi'),(5,3,'en','Developer PHP (Laravel, CakePHP, EC Cube)','<p>Developer PHP (Laravel, CakePHP, EC Cube)</p>','Developer PHP (Laravel, CakePHP, EC Cube)'),(6,3,'vi','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)qqq','<p>Nhà phát triển PHP (Laravel, CakePHP, EC Cube)</p>','Nhà phát triển PHP (Laravel, CakePHP, EC Cube)');
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitments`
--

LOCK TABLES `recruitments` WRITE;
/*!40000 ALTER TABLE `recruitments` DISABLE KEYS */;
INSERT INTO `recruitments` VALUES (1,'2.jpg','Active','2023-05-23 06:51:15','0000-00-00 00:00:00',NULL),(2,'2.jpg','Active','2023-05-23 06:51:41','0000-00-00 00:00:00','2023-05-23 16:22:56'),(3,'1684833708-img.jpg','Active','2023-05-23 16:21:48',NULL,NULL);
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
INSERT INTO `users` VALUES (1,'mienphi221@gmail.com','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'project1'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-26 15:53:51
