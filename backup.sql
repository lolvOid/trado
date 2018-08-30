-- MySQL dump 10.16  Distrib 10.1.34-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: trado_db
-- ------------------------------------------------------
-- Server version	10.1.34-MariaDB

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
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) unsigned DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_parent_id_foreign` (`parent_id`),
  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,NULL,1,'Category 1','category-1','2018-08-14 09:36:26','2018-08-14 09:36:26'),(2,NULL,1,'Category 2','category-2','2018-08-14 09:36:26','2018-08-14 09:36:26');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_name_unique` (`name`),
  UNIQUE KEY `category_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Laptops','laptops','2018-08-14 07:21:37','2018-08-14 07:21:37'),(2,'Desktop','desktop','2018-08-14 07:21:37','2018-08-14 07:21:37'),(3,'Mobile Phones','mobile-phones','2018-08-14 07:21:37','2018-08-14 07:21:37'),(4,'TVs','tvs','2018-08-14 07:21:37','2018-08-14 07:21:37'),(5,'Tablets','tablets','2018-08-14 07:21:37','2018-08-14 07:21:37'),(6,'Digital Camera','digital-cameras','2018-08-14 07:21:37','2018-08-14 07:21:37'),(7,'Appliance','appliances','2018-08-14 07:21:37','2018-08-14 07:21:37'),(8,'Gadgets','gadgets','2018-08-14 07:21:37','2018-08-14 07:21:37'),(17,'SmartWatch','smartwatches','2018-08-14 10:39:32','2018-08-14 10:39:32');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_product`
--

DROP TABLE IF EXISTS `category_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category_product_product_id_foreign` (`product_id`),
  KEY `category_product_category_id_foreign` (`category_id`),
  CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_product`
--

LOCK TABLES `category_product` WRITE;
/*!40000 ALTER TABLE `category_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_rows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int(10) unsigned NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,'',1),(2,1,'name','text','Name',1,1,1,1,1,1,'',2),(3,1,'email','text','Email',1,1,1,1,1,1,'',3),(4,1,'password','password','Password',1,0,0,1,1,0,'',4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,'',5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,'',6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,'',8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'locale','text','Locale',0,1,1,1,1,0,'',12),(12,1,'settings','hidden','Settings',0,0,0,0,0,0,'',12),(13,2,'id','number','ID',1,0,0,0,0,0,'',1),(14,2,'name','text','Name',1,1,1,1,1,1,'',2),(15,2,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(16,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(17,3,'id','number','ID',1,0,0,0,0,0,'',1),(18,3,'name','text','Name',1,1,1,1,1,1,'',2),(19,3,'created_at','timestamp','Created At',0,0,0,0,0,0,'',3),(20,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',4),(21,3,'display_name','text','Display Name',1,1,1,1,1,1,'',5),(22,1,'role_id','text','Role',1,1,1,1,1,1,'',9),(23,4,'id','number','ID',1,0,0,0,0,0,'',1),(24,4,'parent_id','select_dropdown','Parent',0,0,1,1,1,1,'{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}',2),(25,4,'order','text','Order',1,1,1,1,1,1,'{\"default\":1}',3),(26,4,'name','text','Name',1,1,1,1,1,1,'',4),(27,4,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"name\"}}',5),(28,4,'created_at','timestamp','Created At',0,0,1,0,0,0,'',6),(29,4,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',7),(30,5,'id','number','ID',1,0,0,0,0,0,'',1),(31,5,'author_id','text','Author',1,0,1,1,0,1,'',2),(32,5,'category_id','text','Category',1,0,1,1,1,0,'',3),(33,5,'title','text','Title',1,1,1,1,1,1,'',4),(34,5,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',5),(35,5,'body','rich_text_box','Body',1,0,1,1,1,1,'',6),(36,5,'image','image','Post Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}',7),(37,5,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}',8),(38,5,'meta_description','text_area','Meta Description',1,0,1,1,1,1,'',9),(39,5,'meta_keywords','text_area','Meta Keywords',1,0,1,1,1,1,'',10),(40,5,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}',11),(41,5,'created_at','timestamp','Created At',0,1,1,0,0,0,'',12),(42,5,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'',13),(43,5,'seo_title','text','SEO Title',0,1,1,1,1,1,'',14),(44,5,'featured','checkbox','Featured',1,1,1,1,1,1,'',15),(45,6,'id','number','ID',1,0,0,0,0,0,'',1),(46,6,'author_id','text','Author',1,0,0,0,0,0,'',2),(47,6,'title','text','Title',1,1,1,1,1,1,'',3),(48,6,'excerpt','text_area','Excerpt',1,0,1,1,1,1,'',4),(49,6,'body','rich_text_box','Body',1,0,1,1,1,1,'',5),(50,6,'slug','text','Slug',1,0,1,1,1,1,'{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}',6),(51,6,'meta_description','text','Meta Description',1,0,1,1,1,1,'',7),(52,6,'meta_keywords','text','Meta Keywords',1,0,1,1,1,1,'',8),(53,6,'status','select_dropdown','Status',1,1,1,1,1,1,'{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}',9),(54,6,'created_at','timestamp','Created At',1,1,1,0,0,0,'',10),(55,6,'updated_at','timestamp','Updated At',1,0,0,0,0,0,'',11),(56,6,'image','image','Page Image',0,1,1,1,1,1,'',12),(57,7,'id','hidden','Id',1,1,1,1,1,0,NULL,1),(58,7,'name','text','Name',1,1,1,1,1,1,'{\"validation\":{\"rule\":\"required|max:20\"}}',2),(59,7,'slug','text','Slug',1,1,1,1,1,1,NULL,3),(60,7,'details','text','Details',0,1,1,1,1,1,'{\"default\":\"Enter Your Products Details\"}',4),(61,7,'price','number','Price',1,1,1,1,1,1,NULL,5),(62,7,'description','markdown_editor','Description',1,1,1,1,1,1,'{\"default\":\"Enter Your Products Description\"}',6),(63,7,'featured','checkbox','Featured',1,1,1,1,1,1,'{\"on\":\"YES\",\"off\":\"NO\"}',7),(64,7,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,10),(65,7,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,11),(66,8,'id','hidden','Id',1,1,1,1,1,0,NULL,1),(67,8,'name','text','Name',1,1,1,1,1,1,NULL,2),(68,8,'slug','text','Slug',1,1,1,1,1,1,NULL,3),(69,8,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,4),(70,8,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,5),(71,9,'id','hidden','Id',1,1,1,1,1,0,NULL,1),(72,9,'product_id','number','Product Id',1,1,1,1,1,1,NULL,2),(73,9,'category_id','number','Category Id',1,1,1,1,1,1,NULL,3),(74,9,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,4),(75,9,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,5),(76,7,'image','image','Image',0,1,1,1,1,1,'{\"resize\":{\"width\":\"500\",\"height\":\"400\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"400\",\"height\":\"300\"}}]}',8),(77,7,'images','multiple_images','Images',0,1,1,1,1,1,NULL,9);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','','',1,0,NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'','',1,0,NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(4,'categories','categories','Category','Categories','voyager-categories','TCG\\Voyager\\Models\\Category',NULL,'','',1,0,NULL,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(5,'posts','posts','Post','Posts','voyager-news','TCG\\Voyager\\Models\\Post','TCG\\Voyager\\Policies\\PostPolicy','','',1,0,NULL,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(6,'pages','pages','Page','Pages','voyager-file-text','TCG\\Voyager\\Models\\Page',NULL,'','',1,0,NULL,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(7,'products','products','Product','Products','voyager-bag','App\\Product',NULL,'\\App\\Http\\Controllers\\Voyager\\ProductsController',NULL,1,1,'{\"order_column\":null,\"order_display_column\":\"id\"}','2018-08-14 09:49:00','2018-08-19 01:05:19'),(8,'category','category','Category','Categories','voyager-categories','App\\Category',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-08-14 10:37:51','2018-08-14 10:37:51'),(9,'category_product','category-product','Category Product','Category Products','voyager-tag','App\\CategoryProduct',NULL,'\\App\\Http\\Controllers\\Voyager\\ProductsController',NULL,1,0,'{\"order_column\":null,\"order_display_column\":null}','2018-08-14 10:45:04','2018-08-19 02:16:05');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','voyager-boat',NULL,NULL,1,'2018-08-14 09:36:25','2018-08-14 09:36:25','voyager.dashboard',NULL),(2,1,'Media','','_self','voyager-images',NULL,NULL,7,'2018-08-14 09:36:25','2018-08-14 10:45:45','voyager.media.index',NULL),(3,1,'Users','','_self','voyager-person',NULL,NULL,6,'2018-08-14 09:36:25','2018-08-14 10:45:45','voyager.users.index',NULL),(4,1,'Roles','','_self','voyager-lock',NULL,NULL,5,'2018-08-14 09:36:25','2018-08-14 10:45:45','voyager.roles.index',NULL),(5,1,'Tools','','_self','voyager-tools',NULL,NULL,11,'2018-08-14 09:36:25','2018-08-14 10:45:45',NULL,NULL),(6,1,'Menu Builder','','_self','voyager-list',NULL,5,1,'2018-08-14 09:36:25','2018-08-14 10:11:00','voyager.menus.index',NULL),(7,1,'Database','','_self','voyager-data',NULL,5,2,'2018-08-14 09:36:25','2018-08-14 10:11:00','voyager.database.index',NULL),(8,1,'Compass','','_self','voyager-compass',NULL,5,3,'2018-08-14 09:36:25','2018-08-14 10:11:00','voyager.compass.index',NULL),(9,1,'BREAD','','_self','voyager-bread',NULL,5,4,'2018-08-14 09:36:25','2018-08-14 10:11:00','voyager.bread.index',NULL),(10,1,'Settings','','_self','voyager-settings',NULL,NULL,12,'2018-08-14 09:36:25','2018-08-14 10:45:45','voyager.settings.index',NULL),(11,1,'Categories','','_self','voyager-categories',NULL,NULL,10,'2018-08-14 09:36:26','2018-08-14 10:45:45','voyager.categories.index',NULL),(12,1,'Posts','','_self','voyager-news',NULL,NULL,8,'2018-08-14 09:36:26','2018-08-14 10:45:45','voyager.posts.index',NULL),(13,1,'Pages','','_self','voyager-file-text',NULL,NULL,9,'2018-08-14 09:36:26','2018-08-14 10:45:45','voyager.pages.index',NULL),(14,1,'Hooks','','_self','voyager-hook',NULL,5,5,'2018-08-14 09:36:27','2018-08-14 10:11:00','voyager.hooks',NULL),(15,1,'Products','','_blank','voyager-bag','#80ffff',NULL,2,'2018-08-14 09:49:00','2018-08-14 10:13:41','voyager.products.index','null'),(16,1,'Categories','','_self','voyager-categories','#ff8040',NULL,3,'2018-08-14 10:37:52','2018-08-14 10:38:37','voyager.category.index','null'),(17,1,'Category Products','','_self','voyager-tag',NULL,NULL,4,'2018-08-14 10:45:05','2018-08-14 10:45:45','voyager.category-product.index',NULL),(18,2,'Shop','','_self','voyager-shop','#000000',NULL,13,'2018-08-14 11:15:45','2018-08-14 11:15:45','shop.index',NULL),(19,2,'Blog','#','_self',NULL,'#000000',NULL,14,'2018-08-14 11:16:17','2018-08-14 11:16:17',NULL,''),(21,2,'Contact','#','_self',NULL,'#000000',NULL,15,'2018-08-14 11:16:46','2018-08-14 11:16:46',NULL,''),(23,2,'Cart','','_self',NULL,'#ffff00',NULL,16,'2018-08-14 11:17:32','2018-08-14 11:17:32','cart.index',NULL),(24,7,'fa-facebook-f','www.facebook.com/onetech','_self',NULL,'#0080ff',NULL,17,'2018-08-14 11:40:24','2018-08-14 11:45:20',NULL,''),(25,7,'fa-twitter','www.twitter.com/onetech','_self',NULL,'#000000',NULL,18,'2018-08-14 11:40:42','2018-08-14 11:40:42',NULL,''),(26,7,'fa-youtube','www.youtube.com/onetech','_self',NULL,'#000000',NULL,19,'2018-08-14 11:41:01','2018-08-14 11:41:01',NULL,''),(27,7,'fa-vimeo v','www.vimeo.com/onetech','_self',NULL,'#000000',NULL,20,'2018-08-14 11:41:19','2018-08-14 11:44:58',NULL,'');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2018-08-14 09:36:25','2018-08-14 09:36:25'),(2,'main','2018-08-14 11:14:21','2018-08-14 11:14:21'),(7,'footer','2018-08-14 11:30:30','2018-08-14 11:30:30');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (39,'2014_10_12_000000_create_users_table',1),(40,'2014_10_12_100000_create_password_resets_table',1),(41,'2018_08_04_142834_create_products_table',1),(42,'2018_08_11_045446_create_categories_table',1),(43,'2018_08_14_135111_create_category_product_table',2),(44,'2016_01_01_000000_add_voyager_user_fields',3),(45,'2016_01_01_000000_create_data_types_table',3),(46,'2016_05_19_173453_create_menu_table',3),(47,'2016_10_21_190000_create_roles_table',3),(48,'2016_10_21_190000_create_settings_table',3),(49,'2016_11_30_135954_create_permission_table',3),(50,'2016_11_30_141208_create_permission_role_table',3),(51,'2016_12_26_201236_data_types__add__server_side',3),(52,'2017_01_13_000000_add_route_to_menu_items_table',3),(53,'2017_01_14_005015_create_translations_table',3),(54,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',3),(55,'2017_03_06_000000_add_controller_to_data_types_table',3),(56,'2017_04_21_000000_add_order_to_data_rows_table',3),(57,'2017_07_05_210000_add_policyname_to_data_types_table',3),(58,'2017_08_05_000000_add_group_to_settings_table',3),(59,'2017_11_26_013050_add_user_role_relationship',3),(60,'2017_11_26_015000_create_user_roles_table',3),(61,'2018_03_11_000000_add_user_settings',3),(62,'2018_03_14_000000_add_details_to_data_types_table',3),(63,'2018_03_16_000000_make_settings_value_nullable',3),(64,'2016_01_01_000000_create_pages_table',4),(65,'2016_01_01_000000_create_posts_table',4),(66,'2016_02_15_204651_create_categories_table',4),(67,'2017_04_11_000000_alter_post_nullable_fields_table',4),(68,'2018_08_14_182831_add_image_to_products_table',5),(69,'2018_08_14_190546_add_images_to_products_table',6),(70,'2018_08_30_021003_create_shoppingcart_table',7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,0,'Hello World','Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.','<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','pages/page1.jpg','hello-world','Yar Meta Description','Keyword1, Keyword2','ACTIVE','2018-08-14 09:36:26','2018-08-14 09:36:26');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permission_role` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(2,'browse_bread',NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(3,'browse_database',NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(4,'browse_media',NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(5,'browse_compass',NULL,'2018-08-14 09:36:25','2018-08-14 09:36:25'),(6,'browse_menus','menus','2018-08-14 09:36:25','2018-08-14 09:36:25'),(7,'read_menus','menus','2018-08-14 09:36:25','2018-08-14 09:36:25'),(8,'edit_menus','menus','2018-08-14 09:36:25','2018-08-14 09:36:25'),(9,'add_menus','menus','2018-08-14 09:36:25','2018-08-14 09:36:25'),(10,'delete_menus','menus','2018-08-14 09:36:25','2018-08-14 09:36:25'),(11,'browse_roles','roles','2018-08-14 09:36:25','2018-08-14 09:36:25'),(12,'read_roles','roles','2018-08-14 09:36:25','2018-08-14 09:36:25'),(13,'edit_roles','roles','2018-08-14 09:36:25','2018-08-14 09:36:25'),(14,'add_roles','roles','2018-08-14 09:36:25','2018-08-14 09:36:25'),(15,'delete_roles','roles','2018-08-14 09:36:25','2018-08-14 09:36:25'),(16,'browse_users','users','2018-08-14 09:36:25','2018-08-14 09:36:25'),(17,'read_users','users','2018-08-14 09:36:25','2018-08-14 09:36:25'),(18,'edit_users','users','2018-08-14 09:36:25','2018-08-14 09:36:25'),(19,'add_users','users','2018-08-14 09:36:25','2018-08-14 09:36:25'),(20,'delete_users','users','2018-08-14 09:36:25','2018-08-14 09:36:25'),(21,'browse_settings','settings','2018-08-14 09:36:25','2018-08-14 09:36:25'),(22,'read_settings','settings','2018-08-14 09:36:25','2018-08-14 09:36:25'),(23,'edit_settings','settings','2018-08-14 09:36:25','2018-08-14 09:36:25'),(24,'add_settings','settings','2018-08-14 09:36:25','2018-08-14 09:36:25'),(25,'delete_settings','settings','2018-08-14 09:36:25','2018-08-14 09:36:25'),(26,'browse_categories','categories','2018-08-14 09:36:26','2018-08-14 09:36:26'),(27,'read_categories','categories','2018-08-14 09:36:26','2018-08-14 09:36:26'),(28,'edit_categories','categories','2018-08-14 09:36:26','2018-08-14 09:36:26'),(29,'add_categories','categories','2018-08-14 09:36:26','2018-08-14 09:36:26'),(30,'delete_categories','categories','2018-08-14 09:36:26','2018-08-14 09:36:26'),(31,'browse_posts','posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(32,'read_posts','posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(33,'edit_posts','posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(34,'add_posts','posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(35,'delete_posts','posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(36,'browse_pages','pages','2018-08-14 09:36:26','2018-08-14 09:36:26'),(37,'read_pages','pages','2018-08-14 09:36:26','2018-08-14 09:36:26'),(38,'edit_pages','pages','2018-08-14 09:36:26','2018-08-14 09:36:26'),(39,'add_pages','pages','2018-08-14 09:36:26','2018-08-14 09:36:26'),(40,'delete_pages','pages','2018-08-14 09:36:26','2018-08-14 09:36:26'),(41,'browse_hooks',NULL,'2018-08-14 09:36:27','2018-08-14 09:36:27'),(42,'browse_products','products','2018-08-14 09:49:00','2018-08-14 09:49:00'),(43,'read_products','products','2018-08-14 09:49:00','2018-08-14 09:49:00'),(44,'edit_products','products','2018-08-14 09:49:00','2018-08-14 09:49:00'),(45,'add_products','products','2018-08-14 09:49:00','2018-08-14 09:49:00'),(46,'delete_products','products','2018-08-14 09:49:00','2018-08-14 09:49:00'),(47,'browse_category','category','2018-08-14 10:37:52','2018-08-14 10:37:52'),(48,'read_category','category','2018-08-14 10:37:52','2018-08-14 10:37:52'),(49,'edit_category','category','2018-08-14 10:37:52','2018-08-14 10:37:52'),(50,'add_category','category','2018-08-14 10:37:52','2018-08-14 10:37:52'),(51,'delete_category','category','2018-08-14 10:37:52','2018-08-14 10:37:52'),(52,'browse_category_product','category_product','2018-08-14 10:45:05','2018-08-14 10:45:05'),(53,'read_category_product','category_product','2018-08-14 10:45:05','2018-08-14 10:45:05'),(54,'edit_category_product','category_product','2018-08-14 10:45:05','2018-08-14 10:45:05'),(55,'add_category_product','category_product','2018-08-14 10:45:05','2018-08-14 10:45:05'),(56,'delete_category_product','category_product','2018-08-14 10:45:05','2018-08-14 10:45:05');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,0,NULL,'Lorem Ipsum Post',NULL,'This is the excerpt for the Lorem Ipsum Post','<p>This is the body of the lorem ipsum post</p>','posts/post1.jpg','lorem-ipsum-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(2,0,NULL,'My Sample Post',NULL,'This is the excerpt for the sample Post','<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>','posts/post2.jpg','my-sample-post','Meta Description for sample post','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(3,0,NULL,'Latest Post',NULL,'This is the excerpt for the latest post','<p>This is the body for the latest post</p>','posts/post3.jpg','latest-post','This is the meta description','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-08-14 09:36:26','2018-08-14 09:36:26'),(4,0,NULL,'Yarr Post',NULL,'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.','<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>','posts/post4.jpg','yarr-post','this be a meta descript','keyword1, keyword2, keyword3','PUBLISHED',0,'2018-08-14 09:36:26','2018-08-14 09:36:26');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` float(8,2) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (114,'test4','qwe','23',500000.00,'345',0,NULL,'/img/1535563293png','2018-08-29 04:18:19','2018-08-29 10:51:34',12,1),(116,'test412345','haha1234','238',90.00,'284581',0,NULL,'/img/1535554242png','2018-08-29 08:20:43','2018-08-29 08:20:43',15,1),(117,'aaa','aaa','bbb',235.00,'asbc\r\nasdf\r\nasc\r\nfd\r\nba',0,NULL,'/img/1535560809jpg','2018-08-29 10:10:09','2018-08-29 10:10:09',15,1),(118,'test4','qwe','I am test',333.00,'lol',0,NULL,'/img/1535572627jpg','2018-08-29 13:27:08','2018-08-29 13:27:08',16,1),(119,'ipad kwa','jjjjkkk','8902',33333.00,'222222',0,NULL,'/img/1535578502png','2018-08-29 15:05:03','2018-08-29 15:05:03',15,3);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2018-08-14 09:36:25','2018-08-14 09:36:25'),(2,'user','Normal User','2018-08-14 09:36:25','2018-08-14 09:36:25');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Trado','','text',1,'Site'),(2,'site.description','Site Description','Welcome to Trado','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',4,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','Trado','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to Trado','','text',2,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings\\August2018\\4NpnjvW3c8b9MYgdjh1Y.png','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(11,'admin.loader','Admin Loader','','','image',3,'Admin');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shoppingcart`
--

DROP TABLE IF EXISTS `shoppingcart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shoppingcart` (
  `identifier` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identifier`,`instance`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shoppingcart`
--

LOCK TABLES `shoppingcart` WRITE;
/*!40000 ALTER TABLE `shoppingcart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shoppingcart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `translations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) unsigned NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
INSERT INTO `translations` VALUES (1,'data_types','display_name_singular',5,'pt','Post','2018-08-14 09:36:26','2018-08-14 09:36:26'),(2,'data_types','display_name_singular',6,'pt','Página','2018-08-14 09:36:26','2018-08-14 09:36:26'),(3,'data_types','display_name_singular',1,'pt','Utilizador','2018-08-14 09:36:26','2018-08-14 09:36:26'),(4,'data_types','display_name_singular',4,'pt','Categoria','2018-08-14 09:36:26','2018-08-14 09:36:26'),(5,'data_types','display_name_singular',2,'pt','Menu','2018-08-14 09:36:26','2018-08-14 09:36:26'),(6,'data_types','display_name_singular',3,'pt','Função','2018-08-14 09:36:26','2018-08-14 09:36:26'),(7,'data_types','display_name_plural',5,'pt','Posts','2018-08-14 09:36:26','2018-08-14 09:36:26'),(8,'data_types','display_name_plural',6,'pt','Páginas','2018-08-14 09:36:26','2018-08-14 09:36:26'),(9,'data_types','display_name_plural',1,'pt','Utilizadores','2018-08-14 09:36:26','2018-08-14 09:36:26'),(10,'data_types','display_name_plural',4,'pt','Categorias','2018-08-14 09:36:26','2018-08-14 09:36:26'),(11,'data_types','display_name_plural',2,'pt','Menus','2018-08-14 09:36:26','2018-08-14 09:36:26'),(12,'data_types','display_name_plural',3,'pt','Funções','2018-08-14 09:36:26','2018-08-14 09:36:26'),(13,'categories','slug',1,'pt','categoria-1','2018-08-14 09:36:26','2018-08-14 09:36:26'),(14,'categories','name',1,'pt','Categoria 1','2018-08-14 09:36:26','2018-08-14 09:36:26'),(15,'categories','slug',2,'pt','categoria-2','2018-08-14 09:36:26','2018-08-14 09:36:26'),(16,'categories','name',2,'pt','Categoria 2','2018-08-14 09:36:26','2018-08-14 09:36:26'),(17,'pages','title',1,'pt','Olá Mundo','2018-08-14 09:36:26','2018-08-14 09:36:26'),(18,'pages','slug',1,'pt','ola-mundo','2018-08-14 09:36:26','2018-08-14 09:36:26'),(19,'pages','body',1,'pt','<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>','2018-08-14 09:36:26','2018-08-14 09:36:26'),(20,'menu_items','title',1,'pt','Painel de Controle','2018-08-14 09:36:26','2018-08-14 09:36:26'),(21,'menu_items','title',2,'pt','Media','2018-08-14 09:36:26','2018-08-14 09:36:26'),(22,'menu_items','title',12,'pt','Publicações','2018-08-14 09:36:26','2018-08-14 09:36:26'),(23,'menu_items','title',3,'pt','Utilizadores','2018-08-14 09:36:26','2018-08-14 09:36:26'),(24,'menu_items','title',11,'pt','Categorias','2018-08-14 09:36:26','2018-08-14 09:36:26'),(25,'menu_items','title',13,'pt','Páginas','2018-08-14 09:36:26','2018-08-14 09:36:26'),(26,'menu_items','title',4,'pt','Funções','2018-08-14 09:36:26','2018-08-14 09:36:26'),(27,'menu_items','title',5,'pt','Ferramentas','2018-08-14 09:36:26','2018-08-14 09:36:26'),(28,'menu_items','title',6,'pt','Menus','2018-08-14 09:36:26','2018-08-14 09:36:26'),(29,'menu_items','title',7,'pt','Base de dados','2018-08-14 09:36:26','2018-08-14 09:36:26'),(30,'menu_items','title',10,'pt','Configurações','2018-08-14 09:36:27','2018-08-14 09:36:27');
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','Admin','admin@admin.com','1234567','/users/1535580677.jpg','$2y$10$FSJx.elbqj2ZAOZRc2Buiuv31ICyES9AuXKLWlVdnsyLEHzKfP6XC','zp7IfugdLBuFZZj8jvHXU4JC8DbZGuopLarGpReVd5JyWjZEf3r9TFWwGEQo','{\"locale\":\"en\"}','2018-08-14 03:06:26','2018-08-29 15:48:18',NULL),(12,2,'hahahah123478','lol123456799999','lolololololol2345678@mail.com','88882345','/users/1535491758.jpg','$2y$10$k5vbYEkzxIeaF/yNFQ/C/ec/uXGIj5XAohv2U/j0JVs2APmOgy/6S','1j9cO57o5qEVeb6r6EB1a6s0NmMffSt0n2rTYSOyY6mcVheEenRU0JcGrvlg',NULL,'2018-08-28 08:31:40','2018-08-28 14:59:19',NULL),(13,2,'test2','test2','test2@mail.com',NULL,'users/default.png','$2y$10$JGHajOXtc4yOzib17D7sC.LKXwwj3ofKMSklJ5K4J6aYP3NkrvhcK','4UwaLRE1RyVdQFUVqqCiKR8tYuDEVG8poqaqQ7dxVc4ocltH2U6gxGVaGD0V',NULL,'2018-08-28 08:33:09','2018-08-28 08:33:09',NULL),(14,2,'test3','test3','test3@mail.com',NULL,'users/default.png','$2y$10$GFoFyKoYM3jd.1bT5C6iC.ZG7YnnyHcpGjwrOGOxL5ZdCLE9M1Hc2','qIr6YIvaWQ2K1t9Ar0uTbYDTwFlPep4kYc6zMatG9skE8MYU61xiTvUsLqrt',NULL,'2018-08-28 08:34:32','2018-08-28 08:34:32',NULL),(15,2,'test4','test4','test4@mail.com','t12345677','users/default.png','$2y$10$Szu02NZqLFB/XtyBjYKcheid5yKnEQlAs1pcg6wW.rmu1SUVftDIa','d8Z94e5sVZGtgDvMrBOB4pTzFyjlt5tPKxYNijfhAwR18pnoRR5YbuWCHgY1',NULL,'2018-08-28 08:46:46','2018-08-28 08:46:46',NULL),(16,2,'test5','test5','test5@mail.com','124345678','users/default.png','$2y$10$u0yALglHQhAja49YK/uYduVSMuBbIswioY3wVLVMYZFQqD.8nyyr.','FesasKATTZ5OK48Zxl92coEhNP5QoFL2lmJBcK1do1Q81iyKHve2RZGwwhYm',NULL,'2018-08-28 20:57:56','2018-08-28 20:57:57',NULL);
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

-- Dump completed on 2018-08-30 12:19:32
