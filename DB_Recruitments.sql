-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 54.219.4.93    Database: project1
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.1

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2019_12_14_000001_create_personal_access_tokens_table',1),(2,'2023_05_10_125504_users',1),(3,'2023_05_10_130704_recruitments',1),(4,'2023_05_10_133015_recruitment_translates',1),(5,'2023_05_10_140432_recruitments',2),(6,'2023_05_10_140505_recruitment_translates',2),(7,'2023_05_10_150935_recruitments',3),(8,'2023_05_10_151109_recruitment_translates',4);
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
  `language_code` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recruitment_id` int unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `recruitment_translates_recruitment_id_foreign` (`recruitment_id`),
  CONSTRAINT `recruitment_translates_recruitment_id_foreign` FOREIGN KEY (`recruitment_id`) REFERENCES `recruitments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitment_translates`
--

LOCK TABLES `recruitment_translates` WRITE;
/*!40000 ALTER TABLE `recruitment_translates` DISABLE KEYS */;
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
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Active','UnActive','Expired','Closed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recruitments`
--

LOCK TABLES `recruitments` WRITE;
/*!40000 ALTER TABLE `recruitments` DISABLE KEYS */;
INSERT INTO `recruitments` VALUES (1,'zxc','zxc','zxc','1683731601-img.png','Expired','2023-05-10 00:00:00','2023-05-11 02:06:18'),(2,'ReactJs','ReactJs','ReactJs','1683731629-img.jpg','Active','2023-05-06 00:00:00',NULL),(3,'[Urgent] Ruby On Rails Engineer (Senior/Principal)','[Urgent] Ruby On Rails Engineer (Senior/Principal)','[Urgent] Ruby On Rails Engineer (Senior/Principal)','1683769230-img.webp','Active','2023-05-11 00:00:00','2023-05-11 02:59:17'),(4,'Professional Mobile Engineer (Javascript, HTML5)','Professional Mobile Engineer (Javascript, HTML5)','Professional Mobile Engineer (Javascript, HTML5)','1683769272-img.jpg','Expired','2023-05-11 00:00:00','2023-05-11 02:59:29'),(5,'Senior/Associate Business Product Management','Senior/Associate Business Product Management','Senior/Associate Business Product Management','1683769325-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:49:30'),(6,'Backend Java Engineer (Senior and above)','Backend Java Engineer (Senior and above)','Backend Java Engineer (Senior and above)','1683769398-img.jpg','Expired','2023-05-11 00:00:00','2023-05-11 03:36:39'),(7,'zxc','zxc','zxc','1683779287-img.png','UnActive','2023-05-11 00:00:00','2023-05-11 06:48:41'),(8,'zxc','zxc','zxc','1683779371-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:48:41'),(9,'zxc','zxc','zxc','1683779440-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:48:41'),(10,'czx','zxc','zxc','1683779696-img.jpg','Active','2023-05-11 00:00:00','2023-05-11 06:48:41'),(11,'zxc','zxc','zxc','1683779774-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:49:30'),(12,'zxc','zxc','zxc','1683779911-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:49:30'),(13,'zxc','zxc','zxc','1683780044-img.jpg','Active','2023-05-11 00:00:00','2023-05-11 06:49:30'),(14,'vava','avav','avav','1683780278-img.jpg','Active','2023-05-11 00:00:00','2023-05-11 07:16:06'),(15,'qrqr','qrqr','qrqr','1683780423-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:52:44'),(16,'qtqt','qt','qt','1683787865-img.png','Active','2023-05-11 00:00:00','2023-05-11 07:16:06'),(17,'rqrq','qrqr','qrqr','1683787984-img.webp','Expired','2023-05-11 00:00:00','2023-05-11 07:16:06'),(18,'fqw','eq','fqfw','1683788071-img.jpg','Active','2023-05-11 00:00:00','2023-05-11 06:55:34'),(19,'gaga','gaag','gaga','1683788120-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:59:13'),(20,'zxc','zxc','zxc','1683788297-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:59:13'),(21,'eq','qe','qe','1683788328-img.png','Active','2023-05-11 00:00:00','2023-05-11 06:59:25'),(22,'fqwe','fqwe','fqwe','1683788418-img.jpg','Active','2023-05-11 00:00:00','2023-05-11 07:16:06'),(23,'fqwe','qưe','eqwe','1683788438-img.png','Active','2023-05-11 00:00:00','2023-05-11 07:16:06'),(24,'qưe','qưe','qưe','1683788456-img.png','Expired','2023-05-11 00:00:00',NULL),(25,'qr','qr','qr','1683789102-img.png','Active','2023-05-11 00:00:00',NULL),(26,'zxc','zxc','zxc','1683789292-img.png','Active','2023-05-11 07:14:52',NULL),(27,'Java','Java','Java','1683789392-img.png','Expired','2023-05-11 14:16:32',NULL);
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
INSERT INTO `users` VALUES (1,'mienphi221@gmail.com','$2y$10$3/7pKwCky4xuYZs8dy3I5.KCXpF5KJ.clNC2n0cr/HR/0/cNWZWw.','49694e5a507a4c3142756e306945313350544c67');
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

-- Dump completed on 2023-05-11 22:09:34
