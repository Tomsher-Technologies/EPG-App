-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: epgapp
-- ------------------------------------------------------
-- Server version	8.0.27

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `abilities`
--

DROP TABLE IF EXISTS `abilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `abilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entity_id` bigint unsigned DEFAULT NULL,
  `entity_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `only_owned` tinyint(1) NOT NULL DEFAULT '0',
  `options` json DEFAULT NULL,
  `scope` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `abilities_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `abilities`
--

LOCK TABLES `abilities` WRITE;
/*!40000 ALTER TABLE `abilities` DISABLE KEYS */;
INSERT INTO `abilities` VALUES (1,'*','All abilities',NULL,'*',0,NULL,NULL,'2022-09-10 02:24:01','2022-09-10 02:24:01');
/*!40000 ALTER TABLE `abilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assigned_roles`
--

DROP TABLE IF EXISTS `assigned_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assigned_roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned NOT NULL,
  `entity_id` bigint unsigned NOT NULL,
  `entity_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `restricted_to_id` bigint unsigned DEFAULT NULL,
  `restricted_to_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scope` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `assigned_roles_entity_index` (`entity_id`,`entity_type`,`scope`),
  KEY `assigned_roles_role_id_index` (`role_id`),
  KEY `assigned_roles_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigned_roles`
--

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` VALUES (1,1,1,'App\\Models\\User',NULL,NULL,NULL),(13,3,19,'App\\Models\\User',NULL,NULL,NULL),(12,3,18,'App\\Models\\User',NULL,NULL,NULL),(11,2,17,'App\\Models\\User',NULL,NULL,NULL),(10,3,16,'App\\Models\\User',NULL,NULL,NULL),(14,3,20,'App\\Models\\User',NULL,NULL,NULL),(15,3,21,'App\\Models\\User',NULL,NULL,NULL);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `authentication_log`
--

DROP TABLE IF EXISTS `authentication_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authentication_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `authenticatable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authenticatable_id` bigint unsigned NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `login_at` timestamp NULL DEFAULT NULL,
  `login_successful` tinyint(1) NOT NULL DEFAULT '0',
  `logout_at` timestamp NULL DEFAULT NULL,
  `cleared_by_user` tinyint(1) NOT NULL DEFAULT '0',
  `location` json DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `authentication_log_authenticatable_type_authenticatable_id_index` (`authenticatable_type`,`authenticatable_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authentication_log`
--

LOCK TABLES `authentication_log` WRITE;
/*!40000 ALTER TABLE `authentication_log` DISABLE KEYS */;
INSERT INTO `authentication_log` VALUES (2,'App\\Models\\User',21,'::1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36','2022-09-14 01:46:37',1,'2022-09-14 02:30:50',0,NULL);
/*!40000 ALTER TABLE `authentication_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benefit_categories`
--

DROP TABLE IF EXISTS `benefit_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `benefit_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefit_categories`
--

LOCK TABLES `benefit_categories` WRITE;
/*!40000 ALTER TABLE `benefit_categories` DISABLE KEYS */;
INSERT INTO `benefit_categories` VALUES (1,'Test',1,'2022-09-13 13:07:09','2022-09-13 10:33:11'),(2,'asdasd',1,'2022-09-13 14:35:05','2022-09-13 14:35:05'),(3,'asdads',1,'2022-09-13 10:37:56','2022-09-13 10:37:56'),(4,'aaaa',1,'2022-09-13 10:38:02','2022-09-13 10:38:02'),(5,'asdas111',1,'2022-09-14 02:36:52','2022-09-14 03:03:40');
/*!40000 ALTER TABLE `benefit_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benefits`
--

DROP TABLE IF EXISTS `benefits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `benefits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `benefit_category_id` bigint unsigned NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` int DEFAULT NULL,
  `discount_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '% off, Free',
  `discount` int DEFAULT NULL,
  `validity_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Per year, per month, unlimited, limit',
  `validity` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefits`
--

LOCK TABLES `benefits` WRITE;
/*!40000 ALTER TABLE `benefits` DISABLE KEYS */;
INSERT INTO `benefits` VALUES (1,2,'Full access to diamond members benefits',6,'free',0,'unlimited',1,1,'2022-09-14 07:15:44',1,'2022-09-14 06:05:20',1,NULL,NULL),(2,3,'Consequatur quam vo',7,'%',2,'day',50,1,'2022-09-14 04:50:30',1,'2022-09-14 06:04:32',1,NULL,NULL),(3,5,'Fuga Vitae nemo sit',1,'%',90,'week',7,0,'2022-09-14 04:51:14',1,'2022-09-14 06:02:47',1,NULL,NULL),(4,5,'Sed fuga Ut in dolo',11,'%',78,'limited',32,1,'2022-09-14 08:59:32',1,'2022-09-14 08:59:32',1,NULL,NULL);
/*!40000 ALTER TABLE `benefits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `benefits_packages`
--

DROP TABLE IF EXISTS `benefits_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `benefits_packages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `benefit_id` int unsigned NOT NULL,
  `package_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `benefits_packages`
--

LOCK TABLES `benefits_packages` WRITE;
/*!40000 ALTER TABLE `benefits_packages` DISABLE KEYS */;
INSERT INTO `benefits_packages` VALUES (15,2,2),(14,1,2),(12,1,1);
/*!40000 ALTER TABLE `benefits_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'Afghanistan','+93','AF','AFG','4',NULL,NULL),(2,'Albania','+355','AL','ALB','8',NULL,NULL),(3,'Algeria','+213','DZ','DZA','12',NULL,NULL),(4,'American Samoa','+1684','AS','ASM','16',NULL,NULL),(5,'Andorra','+376','AD','AND','20',NULL,NULL),(6,'Angola','+244','AO','AGO','24',NULL,NULL),(7,'Anguilla','+1264','AI','AIA','660',NULL,NULL),(8,'Antarctica','+0','AQ','','0',NULL,NULL),(9,'Antigua And Barbuda','+1268','AG','ATG','28',NULL,NULL),(10,'Argentina','+54','AR','ARG','32',NULL,NULL),(11,'Armenia','+374','AM','ARM','51',NULL,NULL),(12,'Aruba','+297','AW','ABW','533',NULL,NULL),(13,'Australia','+61','AU','AUS','36',NULL,NULL),(14,'Austria','+43','AT','AUT','40',NULL,NULL),(15,'Azerbaijan','+994','AZ','AZE','31',NULL,NULL),(16,'Bahamas','+1242','BS','BHS','44',NULL,NULL),(17,'Bahrain','+973','BH','BHR','48',NULL,NULL),(18,'Bangladesh','+880','BD','BGD','50',NULL,NULL),(19,'Barbados','+1246','BB','BRB','52',NULL,NULL),(20,'Belarus','+375','BY','BLR','112',NULL,NULL),(21,'Belgium','+32','BE','BEL','56',NULL,NULL),(22,'Belize','+501','BZ','BLZ','84',NULL,NULL),(23,'Benin','+229','BJ','BEN','204',NULL,NULL),(24,'Bermuda','+1441','BM','BMU','60',NULL,NULL),(25,'Bhutan','+975','BT','BTN','64',NULL,NULL),(26,'Bolivia','+591','BO','BOL','68',NULL,NULL),(27,'Bosnia And Herzegovina','+387','BA','BIH','70',NULL,NULL),(28,'Botswana','+267','BW','BWA','72',NULL,NULL),(29,'Bouvet Island','+0','BV','','0',NULL,NULL),(30,'Brazil','+55','BR','BRA','76',NULL,NULL),(31,'British Indian Ocean Territory','+246','IO','','0',NULL,NULL),(32,'Brunei Darussalam','+673','BN','BRN','96',NULL,NULL),(33,'Bulgaria','+359','BG','BGR','100',NULL,NULL),(34,'Burkina Faso','+226','BF','BFA','854',NULL,NULL),(35,'Burundi','+257','BI','BDI','108',NULL,NULL),(36,'Cambodia','+855','KH','KHM','116',NULL,NULL),(37,'Cameroon','+237','CM','CMR','120',NULL,NULL),(38,'Canada','+1','CA','CAN','124',NULL,NULL),(39,'Cape Verde','+238','CV','CPV','132',NULL,NULL),(40,'Cayman Islands','+1345','KY','CYM','136',NULL,NULL),(41,'Central African Republic','+236','CF','CAF','140',NULL,NULL),(42,'Chad','+235','TD','TCD','148',NULL,NULL),(43,'Chile','+56','CL','CHL','152',NULL,NULL),(44,'China','+86','CN','CHN','156',NULL,NULL),(45,'Christmas Island','+61','CX','','0',NULL,NULL),(46,'Cocos (Keeling) Islands','+672','CC','','0',NULL,NULL),(47,'Colombia','+57','CO','COL','170',NULL,NULL),(48,'Comoros','+269','KM','COM','174',NULL,NULL),(49,'Congo','+242','CG','COG','178',NULL,NULL),(50,'Congo, The Democratic Republic','+242','CD','COD','180',NULL,NULL),(51,'Cook Islands','+682','CK','COK','184',NULL,NULL),(52,'Costa Rica','+506','CR','CRI','188',NULL,NULL),(53,'Cote D\'ivoire','+225','CI','CIV','384',NULL,NULL),(54,'Croatia','+385','HR','HRV','191',NULL,NULL),(55,'Cuba','+53','CU','CUB','192',NULL,NULL),(56,'Cyprus','+357','CY','CYP','196',NULL,NULL),(57,'Czech Republic','+420','CZ','CZE','203',NULL,NULL),(58,'Denmark','+45','DK','DNK','208',NULL,NULL),(59,'Djibouti','+253','DJ','DJI','262',NULL,NULL),(60,'Dominica','+1767','DM','DMA','212',NULL,NULL),(61,'Dominican Republic','+1809','DO','DOM','214',NULL,NULL),(62,'Ecuador','+593','EC','ECU','218',NULL,NULL),(63,'Egypt','+20','EG','EGY','818',NULL,NULL),(64,'El Salvador','+503','SV','SLV','222',NULL,NULL),(65,'Equatorial Guinea','+240','GQ','GNQ','226',NULL,NULL),(66,'Eritrea','+291','ER','ERI','232',NULL,NULL),(67,'Estonia','+372','EE','EST','233',NULL,NULL),(68,'Ethiopia','+251','ET','ETH','231',NULL,NULL),(69,'Falkland Islands (Malvinas)','+500','FK','FLK','238',NULL,NULL),(70,'Faroe Islands','+298','FO','FRO','234',NULL,NULL),(71,'Fiji','+679','FJ','FJI','242',NULL,NULL),(72,'Finland','+358','FI','FIN','246',NULL,NULL),(73,'France','+33','FR','FRA','250',NULL,NULL),(74,'French Guiana','+594','GF','GUF','254',NULL,NULL),(75,'French Polynesia','+689','PF','PYF','258',NULL,NULL),(76,'French Southern Territories','+0','TF','','0',NULL,NULL),(77,'Gabon','+241','GA','GAB','266',NULL,NULL),(78,'Gambia','+220','GM','GMB','270',NULL,NULL),(79,'Georgia','+995','GE','GEO','268',NULL,NULL),(80,'Germany','+49','DE','DEU','276',NULL,NULL),(81,'Ghana','+233','GH','GHA','288',NULL,NULL),(82,'Gibraltar','+350','GI','GIB','292',NULL,NULL),(83,'Greece','+30','GR','GRC','300',NULL,NULL),(84,'Greenland','+299','GL','GRL','304',NULL,NULL),(85,'Grenada','+1473','GD','GRD','308',NULL,NULL),(86,'Guadeloupe','+590','GP','GLP','312',NULL,NULL),(87,'Guam','+1671','GU','GUM','316',NULL,NULL),(88,'Guatemala','+502','GT','GTM','320',NULL,NULL),(89,'Guinea','+224','GN','GIN','324',NULL,NULL),(90,'Guinea-Bissau','+245','GW','GNB','624',NULL,NULL),(91,'Guyana','+592','GY','GUY','328',NULL,NULL),(92,'Haiti','+509','HT','HTI','332',NULL,NULL),(93,'Heard Island And Mcdonald Islands','+0','HM','','0',NULL,NULL),(94,'Holy See (Vatican City State)','+39','VA','VAT','336',NULL,NULL),(95,'Honduras','+504','HN','HND','340',NULL,NULL),(96,'Hong Kong','+852','HK','HKG','344',NULL,NULL),(97,'Hungary','+36','HU','HUN','348',NULL,NULL),(98,'Iceland','+354','IS','ISL','352',NULL,NULL),(99,'India','+91','IN','IND','356',NULL,NULL),(100,'Indonesia','+62','ID','IDN','360',NULL,NULL),(101,'Iran, Islamic Republic Of','+98','IR','IRN','364',NULL,NULL),(102,'Iraq','+964','IQ','IRQ','368',NULL,NULL),(103,'Ireland','+353','IE','IRL','372',NULL,NULL),(104,'Israel','+972','IL','ISR','376',NULL,NULL),(105,'Italy','+39','IT','ITA','380',NULL,NULL),(106,'Jamaica','+1876','JM','JAM','388',NULL,NULL),(107,'Japan','+81','JP','JPN','392',NULL,NULL),(108,'Jordan','+962','JO','JOR','400',NULL,NULL),(109,'Kazakhstan','+7','KZ','KAZ','398',NULL,NULL),(110,'Kenya','+254','KE','KEN','404',NULL,NULL),(111,'Kiribati','+686','KI','KIR','296',NULL,NULL),(112,'Korea, Democratic People\'s Republic Of','+850','KP','PRK','408',NULL,NULL),(113,'Korea, Republic Of','+82','KR','KOR','410',NULL,NULL),(114,'Kuwait','+965','KW','KWT','414',NULL,NULL),(115,'Kyrgyzstan','+996','KG','KGZ','417',NULL,NULL),(116,'Lao People\'s Democratic Republic','+856','LA','LAO','418',NULL,NULL),(117,'Latvia','+371','LV','LVA','428',NULL,NULL),(118,'Lebanon','+961','LB','LBN','422',NULL,NULL),(119,'Lesotho','+266','LS','LSO','426',NULL,NULL),(120,'Liberia','+231','LR','LBR','430',NULL,NULL),(121,'Libyan Arab Jamahiriya','+218','LY','LBY','434',NULL,NULL),(122,'Liechtenstein','+423','LI','LIE','438',NULL,NULL),(123,'Lithuania','+370','LT','LTU','440',NULL,NULL),(124,'Luxembourg','+352','LU','LUX','442',NULL,NULL),(125,'Macao','+853','MO','MAC','446',NULL,NULL),(126,'Macedonia, The Former Yugoslav Republic Of','+389','MK','MKD','807',NULL,NULL),(127,'Madagascar','+261','MG','MDG','450',NULL,NULL),(128,'Malawi','+265','MW','MWI','454',NULL,NULL),(129,'Malaysia','+60','MY','MYS','458',NULL,NULL),(130,'Maldives','+960','MV','MDV','462',NULL,NULL),(131,'Mali','+223','ML','MLI','466',NULL,NULL),(132,'Malta','+356','MT','MLT','470',NULL,NULL),(133,'Marshall Islands','+692','MH','MHL','584',NULL,NULL),(134,'Martinique','+596','MQ','MTQ','474',NULL,NULL),(135,'Mauritania','+222','MR','MRT','478',NULL,NULL),(136,'Mauritius','+230','MU','MUS','480',NULL,NULL),(137,'Mayotte','+269','YT','','0',NULL,NULL),(138,'Mexico','+52','MX','MEX','484',NULL,NULL),(139,'Micronesia, Federated States Of','+691','FM','FSM','583',NULL,NULL),(140,'Moldova, Republic Of','+373','MD','MDA','498',NULL,NULL),(141,'Monaco','+377','MC','MCO','492',NULL,NULL),(142,'Mongolia','+976','MN','MNG','496',NULL,NULL),(143,'Montserrat','+1664','MS','MSR','500',NULL,NULL),(144,'Morocco','+212','MA','MAR','504',NULL,NULL),(145,'Mozambique','+258','MZ','MOZ','508',NULL,NULL),(146,'Myanmar','+95','MM','MMR','104',NULL,NULL),(147,'Namibia','+264','NA','NAM','516',NULL,NULL),(148,'Nauru','+674','NR','NRU','520',NULL,NULL),(149,'Nepal','+977','NP','NPL','524',NULL,NULL),(150,'Netherlands','+31','NL','NLD','528',NULL,NULL),(151,'Netherlands Antilles','+599','AN','ANT','530',NULL,NULL),(152,'New Caledonia','+687','NC','NCL','540',NULL,NULL),(153,'New Zealand','+64','NZ','NZL','554',NULL,NULL),(154,'Nicaragua','+505','NI','NIC','558',NULL,NULL),(155,'Niger','+227','NE','NER','562',NULL,NULL),(156,'Nigeria','+234','NG','NGA','566',NULL,NULL),(157,'Niue','+683','NU','NIU','570',NULL,NULL),(158,'Norfolk Island','+672','NF','NFK','574',NULL,NULL),(159,'Northern Mariana Islands','+1670','MP','MNP','580',NULL,NULL),(160,'Norway','+47','NO','NOR','578',NULL,NULL),(161,'Oman','+968','OM','OMN','512',NULL,NULL),(162,'Pakistan','+92','PK','PAK','586',NULL,NULL),(163,'Palau','+680','PW','PLW','585',NULL,NULL),(164,'Palestinian Territory, Occupied','+970','PS','','0',NULL,NULL),(165,'Panama','+507','PA','PAN','591',NULL,NULL),(166,'Papua New Guinea','+675','PG','PNG','598',NULL,NULL),(167,'Paraguay','+595','PY','PRY','600',NULL,NULL),(168,'Peru','+51','PE','PER','604',NULL,NULL),(169,'Philippines','+63','PH','PHL','608',NULL,NULL),(170,'Pitcairn','+0','PN','PCN','612',NULL,NULL),(171,'Poland','+48','PL','POL','616',NULL,NULL),(172,'Portugal','+351','PT','PRT','620',NULL,NULL),(173,'Puerto Rico','+1787','PR','PRI','630',NULL,NULL),(174,'Qatar','+974','QA','QAT','634',NULL,NULL),(175,'Reunion','+262','RE','REU','638',NULL,NULL),(176,'Romania','+40','RO','ROM','642',NULL,NULL),(177,'Russian Federation','+70','RU','RUS','643',NULL,NULL),(178,'Rwanda','+250','RW','RWA','646',NULL,NULL),(179,'Saint Helena','+290','SH','SHN','654',NULL,NULL),(180,'Saint Kitts And Nevis','+1869','KN','KNA','659',NULL,NULL),(181,'Saint Lucia','+1758','LC','LCA','662',NULL,NULL),(182,'Saint Pierre And Miquelon','+508','PM','SPM','666',NULL,NULL),(183,'Saint Vincent And The Grenadines','+1784','VC','VCT','670',NULL,NULL),(184,'Samoa','+684','WS','WSM','882',NULL,NULL),(185,'San Marino','+378','SM','SMR','674',NULL,NULL),(186,'Sao Tome And Principe','+239','ST','STP','678',NULL,NULL),(187,'Saudi Arabia','+966','SA','SAU','682',NULL,NULL),(188,'Senegal','+221','SN','SEN','686',NULL,NULL),(189,'Serbia And Montenegro','+381','CS','','0',NULL,NULL),(190,'Seychelles','+248','SC','SYC','690',NULL,NULL),(191,'Sierra Leone','+232','SL','SLE','694',NULL,NULL),(192,'Singapore','+65','SG','SGP','702',NULL,NULL),(193,'Slovakia','+421','SK','SVK','703',NULL,NULL),(194,'Slovenia','+386','SI','SVN','705',NULL,NULL),(195,'Solomon Islands','+677','SB','SLB','90',NULL,NULL),(196,'Somalia','+252','SO','SOM','706',NULL,NULL),(197,'South Africa','+27','ZA','ZAF','710',NULL,NULL),(198,'South Georgia And The South Sandwich Islands','+0','GS','','0',NULL,NULL),(199,'Spain','+34','ES','ESP','724',NULL,NULL),(200,'Sri Lanka','+94','LK','LKA','144',NULL,NULL),(201,'Sudan','+249','SD','SDN','736',NULL,NULL),(202,'Suriname','+597','SR','SUR','740',NULL,NULL),(203,'Svalbard And Jan Mayen','+47','SJ','SJM','744',NULL,NULL),(204,'Swaziland','+268','SZ','SWZ','748',NULL,NULL),(205,'Sweden','+46','SE','SWE','752',NULL,NULL),(206,'Switzerland','+41','CH','CHE','756',NULL,NULL),(207,'Syrian Arab Republic','+963','SY','SYR','760',NULL,NULL),(208,'Taiwan, Province Of China','+886','TW','TWN','158',NULL,NULL),(209,'Tajikistan','+992','TJ','TJK','762',NULL,NULL),(210,'Tanzania, United Republic Of','+255','TZ','TZA','834',NULL,NULL),(211,'Thailand','+66','TH','THA','764',NULL,NULL),(212,'Timor-Leste','+670','TL','','0',NULL,NULL),(213,'Togo','+228','TG','TGO','768',NULL,NULL),(214,'Tokelau','+690','TK','TKL','772',NULL,NULL),(215,'Tonga','+676','TO','TON','776',NULL,NULL),(216,'Trinidad And Tobago','+1868','TT','TTO','780',NULL,NULL),(217,'Tunisia','+216','TN','TUN','788',NULL,NULL),(218,'Turkey','+90','TR','TUR','792',NULL,NULL),(219,'Turkmenistan','+7370','TM','TKM','795',NULL,NULL),(220,'Turks And Caicos Islands','+1649','TC','TCA','796',NULL,NULL),(221,'Tuvalu','+688','TV','TUV','798',NULL,NULL),(222,'Uganda','+256','UG','UGA','800',NULL,NULL),(223,'Ukraine','+380','UA','UKR','804',NULL,NULL),(224,'United Arab Emirates','+971','AE','ARE','784',NULL,NULL),(225,'United Kingdom','+44','GB','GBR','826',NULL,NULL),(226,'United States','+1','US','USA','840',NULL,NULL),(227,'United States Minor Outlying Islands','+1','UM','','0',NULL,NULL),(228,'Uruguay','+598','UY','URY','858',NULL,NULL),(229,'Uzbekistan','+998','UZ','UZB','860',NULL,NULL),(230,'Vanuatu','+678','VU','VUT','548',NULL,NULL),(231,'Venezuela','+58','VE','VEN','862',NULL,NULL),(232,'Viet Nam','+84','VN','VNM','704',NULL,NULL),(233,'Virgin Islands, British','+1284','VG','VGB','92',NULL,NULL),(234,'Virgin Islands, U.S.','+1340','VI','VIR','850',NULL,NULL),(235,'Wallis And Futuna','+681','WF','WLF','876',NULL,NULL),(236,'Western Sahara','+212','EH','ESH','732',NULL,NULL),(237,'Yemen','+967','YE','YEM','887',NULL,NULL),(238,'Zambia','+260','ZM','ZMB','894',NULL,NULL),(239,'Zimbabwe','+263','ZW','ZWE','716',NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_to_package`
--

DROP TABLE IF EXISTS `location_to_package`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `location_to_package` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `location_id` bigint unsigned NOT NULL,
  `package_id` bigint unsigned NOT NULL,
  `points` decimal(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_to_package`
--

LOCK TABLES `location_to_package` WRITE;
/*!40000 ALTER TABLE `location_to_package` DISABLE KEYS */;
/*!40000 ALTER TABLE `location_to_package` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `locations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'Emard LLC',0,'2022-09-10 02:25:21','2022-09-14 01:07:00',1,1,NULL,NULL),(2,'Donnelly, Glover and Little',1,'2022-09-10 02:25:21','2022-09-14 01:07:02',1,1,NULL,NULL),(3,'Maggio, Schuppe and Grady',0,'2022-09-10 02:25:21','2022-09-14 01:07:03',1,1,NULL,NULL),(4,'Stiedemann, Lehner and Prohaska',1,'2022-09-10 02:25:21','2022-09-14 01:07:04',1,1,NULL,NULL),(5,'Bauch PLC',0,'2022-09-10 02:25:21','2022-09-14 01:07:06',1,1,NULL,NULL),(6,'Gutmann, Halvorson and Schmidt',1,'2022-09-10 02:25:21','2022-09-14 01:07:07',1,1,NULL,NULL),(7,'Cassin, Hills and Schuppe',1,'2022-09-10 02:25:21','2022-09-14 01:07:08',1,1,NULL,NULL),(8,'Windler Inc',0,'2022-09-10 02:25:21','2022-09-14 01:07:10',1,1,NULL,NULL),(9,'Runolfsson-Bruen',0,'2022-09-10 02:25:21','2022-09-14 01:07:11',1,1,NULL,NULL),(10,'Koepp Group',0,'2022-09-10 02:25:21','2022-09-14 01:07:16',1,1,NULL,NULL),(11,'Harvey-Lang',1,'2022-09-10 02:25:21','2022-09-14 01:07:23',1,1,NULL,NULL),(12,'Denesik PLC',1,'2022-09-10 02:25:21','2022-09-14 01:07:25',1,1,NULL,NULL),(13,'Balistreri, Goodwin and Nikolaus',0,'2022-09-10 02:25:21','2022-09-14 01:07:27',1,1,NULL,NULL),(14,'Becker, Green and Cronin',1,'2022-09-10 02:25:21','2022-09-10 02:25:21',1,1,NULL,NULL),(15,'Dickinson, Ankunding and Schuster',0,'2022-09-10 02:25:21','2022-09-10 02:25:21',1,1,NULL,NULL);
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `members` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used` datetime DEFAULT NULL,
  `first_used` datetime DEFAULT NULL,
  `purchase_date` datetime DEFAULT NULL,
  `expiry_date` datetime DEFAULT NULL,
  `package_id` bigint unsigned NOT NULL,
  `slug` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (2,16,'Proident ex corpori','Portugal',NULL,NULL,'2022-09-12 07:14:19','2023-09-12 07:14:20',1,'','2022-09-12 03:14:19','2022-09-12 03:14:19',1,1),(3,18,'Ad sint nisi sunt ve','Slovakia',NULL,NULL,'2022-09-12 07:18:22','2023-09-12 07:18:23',1,'','2022-09-12 03:18:22','2022-09-12 03:18:22',17,17),(4,19,'Est suscipit omnis e','Antigua And Barbuda',NULL,NULL,'2022-09-12 10:32:37','2023-09-11 10:32:38',2,'8c3834e6-dd8d-44a5-b149-4a13bb6d0c11','2022-09-12 06:32:37','2022-09-12 06:32:37',1,1),(5,20,'Nemo et earum ut cum','Nicaragua',NULL,NULL,'2022-09-14 05:16:35','2023-09-14 05:16:35',2,'3489c9b0-3f41-4146-b949-14b3301da6a5','2022-09-14 01:16:35','2022-09-14 01:16:35',1,1),(6,21,'Neque animi beatae ','Indonesia',NULL,NULL,'2022-09-14 05:17:37','2023-09-14 00:00:00',2,'f61262cd-9b9c-48c9-9fcf-f704efb7d555','2022-09-14 01:17:37','2022-09-14 01:17:37',1,1);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_200000_add_two_factor_columns_to_users_table',2),(18,'2022_08_20_143459_create_bouncer_tables',3),(19,'2022_08_23_000308_create_packages_table',3),(40,'2022_08_23_071651_create_members_table',12),(21,'2022_08_23_081658_create_locations_table',3),(41,'2022_08_23_082022_create_transactions_table',13),(23,'2022_08_23_110155_create_location_package_table',4),(24,'2022_08_23_121906_add_userstamp_to_tables',5),(27,'2022_09_01_110557_create_countries_table',7),(28,'2022_09_07_125918_add_status_to_users_table',8),(33,'2022_09_08_103818_add_location_id_to_users_table',9),(34,'2022_09_08_111857_add_softdelete_to_users_table',10),(36,'2022_09_08_135132_add_softdeletes_to_locations_table',11),(53,'2022_09_10_105823_add_slug_to_members_table',14),(54,'2022_09_12_071632_add_userstamps_to_users_table',14),(61,'2022_09_12_111955_add_softdeletes_to_packages_table',15),(64,'2022_09_12_135337_add_expiry_dates_to_members_table',16),(67,'2022_09_13_111150_add_expiry_date_to_packages_table',17),(70,'2022_09_13_124106_create_benefit_categories_table',18),(71,'2022_09_13_124107_create_benefits_table',18),(72,'2022_09_14_052301_create_authentication_log_table',19),(73,'2022_09_14_072244_add_userstamsp_to_benefits_table',20),(74,'2022_09_14_102849_create_benefits_packages_table',21);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `packages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `validity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `deleted_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'Single',50000,1,2,'2022-09-12 11:18:03','2022-09-13 07:42:52',1,1,NULL,NULL),(2,'Couple',70000,1,1,'2022-09-12 11:26:33','2022-09-13 07:33:04',1,1,NULL,NULL);
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ability_id` bigint unsigned NOT NULL,
  `entity_id` bigint unsigned DEFAULT NULL,
  `entity_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forbidden` tinyint(1) NOT NULL DEFAULT '0',
  `scope` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_entity_index` (`entity_id`,`entity_type`,`scope`),
  KEY `permissions_ability_id_index` (`ability_id`),
  KEY `permissions_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,1,1,'roles',0,NULL);
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scope` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`,`scope`),
  KEY `roles_scope_index` (`scope`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'superadmin','Administrator',NULL,'2022-09-10 02:24:01','2022-09-10 02:24:01'),(2,'receptionist','Receptionist',NULL,'2022-09-10 02:24:01','2022-09-10 02:24:01'),(3,'member','Member',NULL,'2022-09-10 02:24:01','2022-09-10 02:24:01');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `transactions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `location_id` bigint unsigned NOT NULL,
  `receptionist_id` bigint unsigned NOT NULL,
  `points` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_receptionist_id_foreign` (`receptionist_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
/*!40000 ALTER TABLE `transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `location_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  `deleted_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@raffles.com',NULL,'$2y$10$ggPHxsacE/zafi27OP3SveYTOTtUKbpFF3BADXhAKEoWMktQP2zKG',NULL,NULL,NULL,NULL,1,0,'2022-09-10 02:22:21','2022-09-10 02:22:21',NULL,NULL,NULL,NULL),(17,'Eaque dolores nostru','reception@mailinator.com',NULL,'$2y$10$5Y11I2dq2btsKhu6sA1dIevcjkpmYinVDZp.WYfI5rG6ZfJKCuMjS',NULL,NULL,NULL,NULL,1,4,'2022-09-12 03:14:41','2022-09-12 03:14:41',NULL,NULL,NULL,NULL),(16,'In qui sit occaecat ','toheq@mailinator.com',NULL,'$2y$10$PFqm7sepaf8K6KUBv4lUU.DLCMBXUgEkv9zMwFuyMHTbBTUVgifyy',NULL,NULL,NULL,NULL,1,0,'2022-09-12 03:14:18','2022-09-12 07:14:48',NULL,NULL,NULL,NULL),(18,'Et hic sint sed omni','nylokyx@mailinator.com',NULL,'$2y$10$PtG6GxyzR5VLsHkd7cndHuFlKIT7vk354N0D8MQBE/KYbrZM6qsle',NULL,NULL,NULL,NULL,1,0,'2022-09-12 03:18:22','2022-09-12 03:18:22',NULL,NULL,NULL,NULL),(19,'Excepteur et volupta','wezuk@mailinator.com',NULL,'$2y$10$oaExCpCY2oBJ4ZPcmG7SUuy/Ea/DHjkbJOdttvjwfofehOmYe0che',NULL,NULL,NULL,NULL,1,0,'2022-09-12 06:32:37','2022-09-12 06:32:37',NULL,1,1,NULL),(20,'Voluptas cumque ad a','fopyhob@mailinator.com',NULL,'$2y$10$RlErlYD3xC6AiCvbPB6k2Os5Z8PWhYoZ/qLwGMuneVOVNFlUeoevu',NULL,NULL,NULL,NULL,1,0,'2022-09-14 01:16:35','2022-09-14 01:16:35',NULL,1,1,NULL),(21,'Labore consectetur ','hubokej@mailinator.com',NULL,'$2y$10$XbnaBftKVgoWi9GS3zErNelb6c.mzPfUFJaZHyALpaR2HreZdQbFC',NULL,NULL,NULL,NULL,1,0,'2022-09-14 01:17:37','2022-09-14 01:17:37',NULL,1,1,NULL);
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

-- Dump completed on 2022-09-14 18:46:02
