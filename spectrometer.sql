-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: spectrometer
-- ------------------------------------------------------
-- Server version	5.7.17

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_password_resets`
--

DROP TABLE IF EXISTS `admin_password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `admin_password_resets_email_index` (`email`),
  KEY `admin_password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_password_resets`
--

LOCK TABLES `admin_password_resets` WRITE;
/*!40000 ALTER TABLE `admin_password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_user_notifications`
--

DROP TABLE IF EXISTS `admin_user_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `category_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_admin_index` (`category_type`,`user_id`,`locale`,`sent_at`),
  KEY `admin_user_notifications_type_user_id_locale_sent_at_index` (`type`,`user_id`,`locale`,`sent_at`),
  KEY `admin_user_notifications_user_id_locale_sent_at_index` (`user_id`,`locale`,`sent_at`),
  KEY `admin_user_notifications_read_user_id_locale_sent_at_index` (`read`,`user_id`,`locale`,`sent_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user_notifications`
--

LOCK TABLES `admin_user_notifications` WRITE;
/*!40000 ALTER TABLE `admin_user_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_user_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_user_roles`
--

DROP TABLE IF EXISTS `admin_user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_user_roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `admin_user_id` bigint(20) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `admin_user_roles_admin_user_id_index` (`admin_user_id`),
  KEY `admin_user_roles_role_admin_user_id_index` (`role`,`admin_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_user_roles`
--

LOCK TABLES `admin_user_roles` WRITE;
/*!40000 ALTER TABLE `admin_user_roles` DISABLE KEYS */;
INSERT INTO `admin_user_roles` VALUES (1,1,'super_user','2017-11-10 12:46:21','2017-11-10 12:46:21'),(2,2,'super_user','2017-11-12 07:10:43','2017-11-12 07:10:43');
/*!40000 ALTER TABLE `admin_user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_notification_id` bigint(20) NOT NULL DEFAULT '0',
  `api_access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `profile_image_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'TestUser','test@example.com','$2y$10$dTqDFxHwoZ/kPDKzvYjmWO9l1zIhqxVHca5yIsFtbuvrq/QoBij16','',0,'',0,NULL,NULL,'2017-11-10 12:46:21','2017-11-10 12:46:21'),(2,'TestUser','test@example.com','$2y$10$oCsBov.MWzOSC.4fMaHF2OF9ohzIRzdCMBq9hCGo8sla7Dqm7.7Za','',0,'',0,NULL,NULL,'2017-11-12 07:10:43','2017-11-12 07:10:43');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8_unicode_ci,
  `keywords` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `content` mediumtext COLLATE utf8_unicode_ci,
  `cover_image_id` bigint(20) NOT NULL DEFAULT '0',
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ja',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `publish_started_at` timestamp NOT NULL DEFAULT '1999-12-31 11:00:00',
  `publish_ended_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `articles_slug_index` (`slug`),
  KEY `articles_is_enabled_publish_started_at_publish_ended_at_id_index` (`is_enabled`,`publish_started_at`,`publish_ended_at`,`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8_unicode_ci,
  `entity_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `entity_id` bigint(20) NOT NULL DEFAULT '0',
  `is_local` tinyint(1) NOT NULL DEFAULT '0',
  `file_category_type` int(10) unsigned NOT NULL DEFAULT '0',
  `s3_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_bucket` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_region` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `media_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `format` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `files_file_category_type_id_deleted_at_index` (`file_category_type`,`id`,`deleted_at`),
  KEY `files_id_deleted_at_index` (`id`,`deleted_at`),
  KEY `files_url_deleted_at_index` (`url`,`deleted_at`),
  KEY `files_entity_type_entity_id_deleted_at_index` (`entity_type`,`entity_id`,`deleted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `files`
--

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;
/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` text COLLATE utf8_unicode_ci,
  `entity_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `entity_id` bigint(20) NOT NULL DEFAULT '0',
  `is_local` tinyint(1) NOT NULL DEFAULT '0',
  `file_category_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_bucket` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_region` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `s3_extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `media_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `format` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_size` bigint(20) unsigned NOT NULL DEFAULT '0',
  `width` int(10) unsigned NOT NULL DEFAULT '0',
  `height` int(10) unsigned NOT NULL DEFAULT '0',
  `is_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `images_file_category_type_id_deleted_at_index` (`file_category_type`,`id`,`deleted_at`),
  KEY `images_id_deleted_at_index` (`id`,`deleted_at`),
  KEY `images_url_deleted_at_index` (`url`,`deleted_at`),
  KEY `images_entity_type_entity_id_deleted_at_index` (`entity_type`,`entity_id`,`deleted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiwifruit_images`
--

DROP TABLE IF EXISTS `kiwifruit_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiwifruit_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kiwifruit_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kiwifruit_images_kiwifruit_id_foreign` (`kiwifruit_id`),
  CONSTRAINT `kiwifruit_images_kiwifruit_id_foreign` FOREIGN KEY (`kiwifruit_id`) REFERENCES `kiwifruits` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiwifruit_images`
--

LOCK TABLES `kiwifruit_images` WRITE;
/*!40000 ALTER TABLE `kiwifruit_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `kiwifruit_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiwifruit_scanned`
--

DROP TABLE IF EXISTS `kiwifruit_scanned`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiwifruit_scanned` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kiwifruit_id` int(10) unsigned NOT NULL,
  `sample` int(11) NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scan` int(11) NOT NULL,
  `calories` double(8,2) NOT NULL,
  `carbs` double(8,2) NOT NULL,
  `water` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kiwifruit_scanned_kiwifruit_id_foreign` (`kiwifruit_id`),
  CONSTRAINT `kiwifruit_scanned_kiwifruit_id_foreign` FOREIGN KEY (`kiwifruit_id`) REFERENCES `kiwifruits` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiwifruit_scanned`
--

LOCK TABLES `kiwifruit_scanned` WRITE;
/*!40000 ALTER TABLE `kiwifruit_scanned` DISABLE KEYS */;
INSERT INTO `kiwifruit_scanned` VALUES (1,2,1,'skin',1,50.00,11.00,87.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(2,2,1,'skin',2,50.00,11.00,87.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(3,2,1,'skin',3,55.00,11.00,86.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(4,2,1,'sidecut',1,50.00,10.00,87.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(5,2,1,'sidecut',2,60.00,13.00,85.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(6,2,1,'sidecut',3,55.00,12.00,85.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(7,2,1,'midcut',1,70.00,15.00,83.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(8,2,1,'midcut',2,60.00,13.00,84.00,'2017-11-12 07:11:34','2017-11-12 07:11:34'),(9,2,1,'midcut',3,75.00,16.00,82.00,'2017-11-12 07:11:34','2017-11-12 07:11:34');
/*!40000 ALTER TABLE `kiwifruit_scanned` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiwifruit_scanned_images`
--

DROP TABLE IF EXISTS `kiwifruit_scanned_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiwifruit_scanned_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kiwifruit_scanned_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kiwifruit_scanned_images_kiwifruit_scanned_id_foreign` (`kiwifruit_scanned_id`),
  CONSTRAINT `kiwifruit_scanned_images_kiwifruit_scanned_id_foreign` FOREIGN KEY (`kiwifruit_scanned_id`) REFERENCES `kiwifruit_scanned` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiwifruit_scanned_images`
--

LOCK TABLES `kiwifruit_scanned_images` WRITE;
/*!40000 ALTER TABLE `kiwifruit_scanned_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `kiwifruit_scanned_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kiwifruits`
--

DROP TABLE IF EXISTS `kiwifruits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kiwifruits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `purchased_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produced_in` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spectrometer_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kiwifruits_spectrometer_id_foreign` (`spectrometer_id`),
  CONSTRAINT `kiwifruits_spectrometer_id_foreign` FOREIGN KEY (`spectrometer_id`) REFERENCES `spectrometers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kiwifruits`
--

LOCK TABLES `kiwifruits` WRITE;
/*!40000 ALTER TABLE `kiwifruits` DISABLE KEYS */;
INSERT INTO `kiwifruits` VALUES (2,'oscarGreen','','','',2,'2017-11-12 07:11:34','2017-11-12 07:11:34');
/*!40000 ALTER TABLE `kiwifruits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2015_05_23_212438_create_admin_users_table',1),(4,'2015_05_23_212449_create_admin_user_roles_table',1),(5,'2015_05_23_212727_create_files_table',1),(6,'2015_07_03_231520_create_images_table',1),(7,'2015_07_25_003409_create_site_configurations_table',1),(8,'2015_12_20_054119_create_admin_password_resets_table',1),(9,'2016_01_28_064800_create_user_service_authentications_table',1),(10,'2016_07_23_223802_create_articles_table',1),(11,'2016_09_05_112310_create_user_notifications_table',1),(12,'2016_09_07_050300_create_admin_user_notifications_table',1),(13,'2017_11_05_030619_create_spectrometer_table',2),(15,'2017_11_05_030933_create_kiwifruits_table',3),(16,'2017_11_05_031335_create_kiwifruit_scanned_table',4),(17,'2017_11_05_031821_create_kiwifruit_images_table',5),(18,'2017_11_05_031929_create_kiwifruit_scanned_images_table',5),(19,'2017_11_19_214355_create_temp_lamb_table',6),(20,'2017_11_26_213404_add_view_on_temp_lamb_table',7),(21,'2017_11_27_030457_create_milk_biscuit_table',8),(22,'2017_11_27_030624_create_milk_powder_table',8),(24,'2017_12_03_082700_create_scanned_item_table',9);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `scanned_items`
--

DROP TABLE IF EXISTS `scanned_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scanned_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spectrometer_id` int(10) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `scanned_items_spectrometer_id_foreign` (`spectrometer_id`),
  CONSTRAINT `scanned_items_spectrometer_id_foreign` FOREIGN KEY (`spectrometer_id`) REFERENCES `spectrometers` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scanned_items`
--

LOCK TABLES `scanned_items` WRITE;
/*!40000 ALTER TABLE `scanned_items` DISABLE KEYS */;
INSERT INTO `scanned_items` VALUES (1,'Temp Lamb',5,'static/temp_lamb/scan_locations.jpg','2017-12-03 20:39:52','2017-12-03 20:39:52'),(2,'Temp Milk Biscuit',5,'','2017-12-03 20:39:52','2017-12-03 20:39:52'),(3,'Temp Milk Powder',5,'','2017-12-03 20:39:52','2017-12-03 20:39:52');
/*!40000 ALTER TABLE `scanned_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_configurations`
--

DROP TABLE IF EXISTS `site_configurations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_configurations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `keywords` text COLLATE utf8_unicode_ci,
  `description` text COLLATE utf8_unicode_ci,
  `ogp_image_id` bigint(20) NOT NULL DEFAULT '0',
  `twitter_card_image_id` bigint(20) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `site_configurations_locale_index` (`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_configurations`
--

LOCK TABLES `site_configurations` WRITE;
/*!40000 ALTER TABLE `site_configurations` DISABLE KEYS */;
/*!40000 ALTER TABLE `site_configurations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `spectrometers`
--

DROP TABLE IF EXISTS `spectrometers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `spectrometers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `spectrometers`
--

LOCK TABLES `spectrometers` WRITE;
/*!40000 ALTER TABLE `spectrometers` DISABLE KEYS */;
INSERT INTO `spectrometers` VALUES (1,'SCio','2017-11-12 07:10:54','2017-11-12 07:10:54'),(2,'SCio','2017-11-12 07:11:34','2017-11-12 07:11:34'),(3,'NIRScan','2017-12-03 20:35:12','2017-12-03 20:35:12'),(4,'NIRScan','2017-12-03 20:35:33','2017-12-03 20:35:33'),(5,'NIRScan','2017-12-03 20:39:52','2017-12-03 20:39:52');
/*!40000 ALTER TABLE `spectrometers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_lambs`
--

DROP TABLE IF EXISTS `temp_lambs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_lambs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excel_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view_online` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scanned_item_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_lambs`
--

LOCK TABLES `temp_lambs` WRITE;
/*!40000 ALTER TABLE `temp_lambs` DISABLE KEYS */;
INSERT INTO `temp_lambs` VALUES (1,'lamb_1','https://drive.google.com/uc?authuser=0&id=1lhmlFP3STEIyvAtx3flExoIQJgFFtPvB&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012004_20170921_154654.csv',1),(2,'lamb_2','https://drive.google.com/uc?id=1iGjspgtNtgm85ombsOOzNxIfiEUtGOM2&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012005_20170921_154712.csv',1),(3,'lamb_3','https://drive.google.com/uc?authuser=0&id=1gVytCh6ONipgT180glQwju1eeCbEvUpg&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012006_20170921_154735.csv',1),(4,'lamb_4','https://drive.google.com/uc?id=17rIB-X7O4co_Wsvf_umzte1afd5sSigr&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012007_20170921_154756.csv',1),(5,'lamb_5','https://drive.google.com/uc?id=1azYvjIFMQG90p4K2u4tkU6VSkzybyOlK&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012008_20170921_154818.csv',1),(6,'lamb_6','https://drive.google.com/uc?authuser=0&id=1wg501zGDF_vAc64DOfb_Deq765qykirm&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012009_20170921_154832.csv',1),(7,'lamb_7','https://drive.google.com/uc?id=1BNgPblIFnZvgHItWplkUVdAJwzXXUW8O&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012010_20170921_154851.csv',1),(8,'lamb_8','https://drive.google.com/uc?id=1scIy-QEyxZBL5u64wmmCsRf36q0HVJ7c&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012011_20170921_160317.csv',1),(9,'lamb_9','https://drive.google.com/uc?id=19aHP2GVKSpkbPVJO7xED0OVbWgnV-uYR&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012012_20170921_160403.csv',1),(10,'lamb_10','https://drive.google.com/uc?id=18UH-85DSWQjMvY8Bh1isDwuMDG6ebgon&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_lamb/Hadamard 1_012013_20170921_160641.csv',1),(11,'milk_biscuit_1','https://drive.google.com/uc?authuser=0&id=1kViKXKeCHVONTbBpckvHs8JHj2f72f_w&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_biscuits/milk_biscuit_absorbance_sample1.xlsx',2),(12,'milk_biscuit_2','https://drive.google.com/uc?id=1J5SUmTJ65dJWzS68cHE4CbolPxhbubYq&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_biscuits/milk_biscuit_absorbance_sample2.xlsx',2),(13,'milk_biscuit_3','https://drive.google.com/uc?id=1SPepoTlE1Bz2Levh8CdGEx6Ta_h8nfV9&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_biscuits/milk_biscuit_absorbance_sample3.xlsx',2),(14,'milk_biscuit_4','https://drive.google.com/uc?authuser=0&id=1HyWTEg7nlq3HQ-W0i64HY0LvPb1ABs6l&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_biscuits/milk_biscuit_absorbance_sample4.xlsx',2),(15,'milk_biscuit_5','https://drive.google.com/uc?id=1gsLshE8jWjf17PIzagPp_y5HRHcvTlMf&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_biscuits/milk_biscuit_absorbance_sample5.xlsx',2),(16,'milk_powder_1','https://drive.google.com/uc?authuser=0&id=14Yk441dMAbZsAB3Oup7qRSae4dzhGfhh&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_powder/milk_powder_absorbance_sample1.xlsx',3),(17,'milk_powder_2','https://drive.google.com/uc?authuser=0&id=1q2DURYYogNAf6BdFCopYwNSqOinBaIKv&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_powder/milk_powder_absorbance_sample2.xlsx',3),(18,'milk_powder_3','https://drive.google.com/uc?authuser=0&id=1TK3DmzwOeCE1L6dCddUzRLsscMNjCmyi&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_powder/milk_powder_absorbance_sample3.xlsx',3),(19,'milk_powder_4','https://drive.google.com/uc?authuser=0&id=1QxE2FjyxEt5GkGt5zE8DB7_LnKfRxsLS&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_powder/milk_powder_absorbance_sample4.xlsx',3),(20,'milk_powder_5','https://drive.google.com/uc?authuser=0&id=1dYxydDB9RpUC1ELGQ037Sg_6xc4GvH6L&export=download','2017-12-03 20:39:52','2017-12-03 20:39:52','static/temp_milk_powder/milk_powder_absorbance_sample5.xlsx',3);
/*!40000 ALTER TABLE `temp_lambs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_milk_biscuits`
--

DROP TABLE IF EXISTS `temp_milk_biscuits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_milk_biscuits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excel_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_online` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_milk_biscuits`
--

LOCK TABLES `temp_milk_biscuits` WRITE;
/*!40000 ALTER TABLE `temp_milk_biscuits` DISABLE KEYS */;
INSERT INTO `temp_milk_biscuits` VALUES (1,'milk_biscuit_1','https://drive.google.com/uc?authuser=0&id=1kViKXKeCHVONTbBpckvHs8JHj2f72f_w&export=download','static/temp_milk_biscuits/milk_biscuit_absorbance_sample1.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(2,'milk_biscuit_2','https://drive.google.com/uc?id=1J5SUmTJ65dJWzS68cHE4CbolPxhbubYq&export=download','static/temp_milk_biscuits/milk_biscuit_absorbance_sample2.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(3,'milk_biscuit_3','https://drive.google.com/uc?id=1SPepoTlE1Bz2Levh8CdGEx6Ta_h8nfV9&export=download','static/temp_milk_biscuits/milk_biscuit_absorbance_sample3.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(4,'milk_biscuit_4','https://drive.google.com/uc?authuser=0&id=1HyWTEg7nlq3HQ-W0i64HY0LvPb1ABs6l&export=download','static/temp_milk_biscuits/milk_biscuit_absorbance_sample4.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(5,'milk_biscuit_5','https://drive.google.com/uc?id=1gsLshE8jWjf17PIzagPp_y5HRHcvTlMf&export=download','static/temp_milk_biscuits/milk_biscuit_absorbance_sample5.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55');
/*!40000 ALTER TABLE `temp_milk_biscuits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `temp_milk_powders`
--

DROP TABLE IF EXISTS `temp_milk_powders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `temp_milk_powders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `excel_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view_online` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `temp_milk_powders`
--

LOCK TABLES `temp_milk_powders` WRITE;
/*!40000 ALTER TABLE `temp_milk_powders` DISABLE KEYS */;
INSERT INTO `temp_milk_powders` VALUES (1,'milk_powder_1','https://drive.google.com/uc?authuser=0&id=14Yk441dMAbZsAB3Oup7qRSae4dzhGfhh&export=download','static/temp_milk_powder/milk_powder_absorbance_sample1.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(2,'milk_powder_2','https://drive.google.com/uc?authuser=0&id=1q2DURYYogNAf6BdFCopYwNSqOinBaIKv&export=download','static/temp_milk_powder/milk_powder_absorbance_sample2.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(3,'milk_powder_3','https://drive.google.com/uc?authuser=0&id=1TK3DmzwOeCE1L6dCddUzRLsscMNjCmyi&export=download','static/temp_milk_powder/milk_powder_absorbance_sample3.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(4,'milk_powder_4','https://drive.google.com/uc?authuser=0&id=1QxE2FjyxEt5GkGt5zE8DB7_LnKfRxsLS&export=download','static/temp_milk_powder/milk_powder_absorbance_sample4.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55'),(5,'milk_powder_5','https://drive.google.com/uc?authuser=0&id=1dYxydDB9RpUC1ELGQ037Sg_6xc4GvH6L&export=download','static/temp_milk_powder/milk_powder_absorbance_sample5.xlsx','2017-11-26 14:21:55','2017-11-26 14:21:55');
/*!40000 ALTER TABLE `temp_milk_powders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_notifications`
--

DROP TABLE IF EXISTS `user_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_notifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `category_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `data` text COLLATE utf8_unicode_ci,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `sent_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `category_user_index` (`category_type`,`user_id`,`locale`,`sent_at`),
  KEY `user_notifications_type_user_id_locale_sent_at_index` (`type`,`user_id`,`locale`,`sent_at`),
  KEY `user_notifications_user_id_locale_sent_at_index` (`user_id`,`locale`,`sent_at`),
  KEY `user_notifications_read_user_id_locale_sent_at_index` (`read`,`user_id`,`locale`,`sent_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_notifications`
--

LOCK TABLES `user_notifications` WRITE;
/*!40000 ALTER TABLE `user_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_service_authentications`
--

DROP TABLE IF EXISTS `user_service_authentications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_service_authentications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_service_authentications`
--

LOCK TABLES `user_service_authentications` WRITE;
/*!40000 ALTER TABLE `user_service_authentications` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_service_authentications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `last_notification_id` bigint(20) NOT NULL DEFAULT '0',
  `api_access_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `profile_image_id` bigint(20) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2017-12-26 22:04:15
