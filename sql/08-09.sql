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
INSERT INTO `abilities` VALUES (1,'*','All abilities',NULL,'*',0,NULL,NULL,'2022-09-07 09:23:57','2022-09-07 09:23:57');
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
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assigned_roles`
--

LOCK TABLES `assigned_roles` WRITE;
/*!40000 ALTER TABLE `assigned_roles` DISABLE KEYS */;
INSERT INTO `assigned_roles` VALUES (1,1,1,'App\\Models\\User',NULL,NULL,NULL),(2,2,3,'App\\Models\\User',NULL,NULL,NULL),(3,2,4,'App\\Models\\User',NULL,NULL,NULL),(4,2,5,'App\\Models\\User',NULL,NULL,NULL),(5,2,6,'App\\Models\\User',NULL,NULL,NULL),(6,2,7,'App\\Models\\User',NULL,NULL,NULL),(7,2,8,'App\\Models\\User',NULL,NULL,NULL),(8,2,9,'App\\Models\\User',NULL,NULL,NULL),(9,2,10,'App\\Models\\User',NULL,NULL,NULL),(10,2,11,'App\\Models\\User',NULL,NULL,NULL),(11,2,12,'App\\Models\\User',NULL,NULL,NULL),(12,2,13,'App\\Models\\User',NULL,NULL,NULL),(13,2,14,'App\\Models\\User',NULL,NULL,NULL),(14,2,15,'App\\Models\\User',NULL,NULL,NULL),(15,2,16,'App\\Models\\User',NULL,NULL,NULL),(16,2,17,'App\\Models\\User',NULL,NULL,NULL),(17,2,18,'App\\Models\\User',NULL,NULL,NULL),(18,2,19,'App\\Models\\User',NULL,NULL,NULL),(19,2,20,'App\\Models\\User',NULL,NULL,NULL),(20,2,21,'App\\Models\\User',NULL,NULL,NULL),(21,2,22,'App\\Models\\User',NULL,NULL,NULL),(22,2,23,'App\\Models\\User',NULL,NULL,NULL),(23,2,24,'App\\Models\\User',NULL,NULL,NULL),(24,2,25,'App\\Models\\User',NULL,NULL,NULL),(25,2,26,'App\\Models\\User',NULL,NULL,NULL),(26,2,27,'App\\Models\\User',NULL,NULL,NULL),(27,2,28,'App\\Models\\User',NULL,NULL,NULL),(28,2,29,'App\\Models\\User',NULL,NULL,NULL),(29,2,30,'App\\Models\\User',NULL,NULL,NULL),(30,2,31,'App\\Models\\User',NULL,NULL,NULL),(31,2,32,'App\\Models\\User',NULL,NULL,NULL),(32,2,33,'App\\Models\\User',NULL,NULL,NULL),(33,2,34,'App\\Models\\User',NULL,NULL,NULL),(34,2,35,'App\\Models\\User',NULL,NULL,NULL),(35,2,36,'App\\Models\\User',NULL,NULL,NULL),(36,2,37,'App\\Models\\User',NULL,NULL,NULL),(37,2,38,'App\\Models\\User',NULL,NULL,NULL),(38,2,39,'App\\Models\\User',NULL,NULL,NULL),(39,2,40,'App\\Models\\User',NULL,NULL,NULL),(40,2,41,'App\\Models\\User',NULL,NULL,NULL),(41,2,42,'App\\Models\\User',NULL,NULL,NULL),(42,2,43,'App\\Models\\User',NULL,NULL,NULL),(43,2,44,'App\\Models\\User',NULL,NULL,NULL),(44,2,45,'App\\Models\\User',NULL,NULL,NULL),(45,2,46,'App\\Models\\User',NULL,NULL,NULL),(46,2,47,'App\\Models\\User',NULL,NULL,NULL),(47,2,48,'App\\Models\\User',NULL,NULL,NULL),(48,2,49,'App\\Models\\User',NULL,NULL,NULL),(49,2,50,'App\\Models\\User',NULL,NULL,NULL),(50,2,51,'App\\Models\\User',NULL,NULL,NULL),(51,2,52,'App\\Models\\User',NULL,NULL,NULL);
/*!40000 ALTER TABLE `assigned_roles` ENABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_to_package`
--

LOCK TABLES `location_to_package` WRITE;
/*!40000 ALTER TABLE `location_to_package` DISABLE KEYS */;
INSERT INTO `location_to_package` VALUES (1,1,1,12.00);
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
INSERT INTO `locations` VALUES (1,'Marquardt LLC',1,'2022-08-23 08:27:43','2022-09-08 09:56:19',1,1,NULL,NULL),(2,'Witting, Auer and D\'Amore',1,'2022-08-23 08:27:43','2022-09-08 09:41:38',1,1,NULL,NULL),(3,'Harris-Leannon',1,'2022-08-23 08:27:43','2022-09-08 09:41:29',1,1,NULL,NULL),(4,'Marks, Champlin and Ritchie',1,'2022-08-23 08:27:43','2022-09-08 09:41:40',1,1,NULL,NULL),(5,'Donnelly Group',1,'2022-08-23 08:27:43','2022-09-08 09:41:42',1,1,NULL,NULL),(6,'Treutel LLC',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(7,'Kling LLC',0,'2022-08-23 08:27:43','2022-09-08 09:43:09',1,1,NULL,NULL),(8,'Koch-Fisher',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(9,'Robel Inc',1,'2022-08-23 08:27:43','2022-09-08 09:41:54',1,1,NULL,NULL),(10,'Macejkovic, Lebsack and Kuphal',1,'2022-08-23 08:27:43','2022-09-08 09:41:45',1,1,NULL,NULL),(11,'Schmeler-Jacobi',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(12,'Herman LLC',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(13,'Hettinger-Blanda',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(14,'McClure-Boyer',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL),(15,'Connelly-Auer',1,'2022-08-23 08:27:43','2022-08-23 08:27:43',1,1,NULL,NULL);
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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used` datetime DEFAULT NULL,
  `first_used` datetime DEFAULT NULL,
  `total_earned` decimal(8,2) NOT NULL,
  `total_redeemed` decimal(8,2) NOT NULL,
  `package_id` bigint unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `members_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (2,'Jed Gibson','kihn.sonya@example.com','801-261-0173','United Arab Emirates','2001-06-21 12:04:59','1971-02-17 14:15:21',6047.00,2009.00,3,1,'2022-08-23 08:34:44','2022-09-01 10:11:54',NULL,1),(3,'Vincenzo Kreiger','alexis.pacocha@example.org','620.230.6878','Peru','1991-05-05 10:07:13','2010-01-08 18:35:35',7978.00,1117.00,2,1,'2022-08-23 08:34:44','2022-09-01 03:19:42',NULL,1),(4,'Prof. Madge Rippin II','moore.kadin@example.com','562.959.0238','Heard Island and McDonald Islands','2002-02-12 02:51:50','2016-02-05 18:46:04',2458.00,262.00,1,1,'2022-08-23 08:34:44','2022-09-01 03:19:42',NULL,1),(5,'Johnpaul Aufderhar','marisol.gottlieb@example.org','+1 (928) 981-6309','Latvia','2012-04-13 18:56:39','1985-08-26 03:10:31',5396.00,1731.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(6,'Allene Macejkovic II','rebecca28@example.com','+1-539-403-9772','Hong Kong','1987-10-28 06:11:32','1975-06-12 16:17:12',7140.00,350.00,2,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(7,'Oscar Boyer','mhane@example.com','432-323-1476','Uruguay','1975-10-02 05:44:40','1991-05-14 10:37:44',4138.00,192.00,3,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(8,'Libby Grimes','calista.stark@example.org','682.909.0585','Honduras','1997-12-05 18:03:50','1997-07-16 14:46:19',5259.00,1511.00,3,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(9,'Hermina Kulas PhD','udickinson@example.org','606-922-4460','Mayotte','1999-05-25 14:48:05','1979-02-21 07:15:12',3494.00,320.00,3,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(10,'Wallace Monahan','marlen.gutkowski@example.net','+1-475-596-9148','Suriname','1980-11-27 18:29:24','2013-05-25 02:47:23',7043.00,1709.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(11,'Gordon Runolfsson','cjerde@example.org','+18635710239','Falkland Islands (Malvinas)','1985-10-08 17:22:20','2005-12-20 09:38:41',7610.00,874.00,3,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(12,'Betsy King','shawn20@example.org','+1.938.460.2450','Ecuador','2003-09-22 05:10:16','1993-04-11 09:38:24',339.00,1915.00,2,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(13,'Vanessa Cartwright','audreanne.green@example.com','269-568-8751','United States Virgin Islands','1994-05-15 12:32:39','2009-04-06 19:03:40',1857.00,2236.00,2,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(14,'Prof. Jalen Lemke','armstrong.arturo@example.com','346.533.3885','Chad','1989-08-31 09:30:20','1979-02-05 04:02:37',1376.00,1337.00,3,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(15,'Georgiana Grady','mcarroll@example.net','864.695.6927','Cocos (Keeling) Islands','2019-05-11 20:55:46','2021-03-22 08:56:52',144.00,2309.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(16,'Candice Padberg','alison19@example.org','+1.785.495.6929','Zambia','2010-12-31 01:32:49','2014-02-01 02:52:27',3065.00,813.00,3,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(17,'Darius Rodriguez Jr.','kristina28@example.net','681.226.9839','Sri Lanka','1994-10-13 06:27:36','1992-05-22 13:05:02',6395.00,2475.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(18,'Ova Morar','zpacocha@example.org','+1 (479) 303-4053','Netherlands','2004-04-24 07:12:40','2004-10-09 01:06:45',354.00,2990.00,1,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(19,'Dr. Rex Kshlerin','cali25@example.org','518.816.0885','Saint Pierre and Miquelon','1998-05-11 21:08:00','1985-12-31 12:55:31',4783.00,444.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(20,'Lonie Hayes PhD','eschultz@example.org','1-203-419-7316','Ireland','2004-06-22 15:34:20','2000-01-14 05:50:30',6385.00,745.00,1,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(21,'Ms. Hope Vandervort III','ikassulke@example.com','838-955-7978','Russian Federation','2013-11-02 16:38:33','1976-09-18 20:41:13',5943.00,558.00,2,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(22,'Caleb Morar','jaren.rogahn@example.org','+1-302-878-1276','Dominican Republic','1990-12-05 01:13:14','2015-01-10 10:21:37',5311.00,1505.00,3,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(23,'Mona Smith','uberge@example.com','+1.231.739.6473','Portugal','1977-08-28 23:05:42','2013-12-29 11:20:22',3828.00,1614.00,1,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(24,'Clarissa Sporer','elfrieda.quitzon@example.com','+1 (267) 212-6639','Bouvet Island (Bouvetoya)','2000-01-26 23:05:03','1985-12-23 07:59:27',4456.00,1309.00,2,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(25,'Prof. Victor Conn','kenna43@example.com','+1-870-645-9600','Saint Pierre and Miquelon','2001-05-28 16:38:59','2017-07-17 05:46:30',5374.00,278.00,3,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(26,'Mr. Erik Corwin Jr.','mwolf@example.net','1-520-908-3053','Guernsey','2014-09-13 23:10:29','2014-02-19 15:51:04',4465.00,2135.00,1,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(27,'Emile Carroll PhD','volkman.keyshawn@example.org','571-595-7276','Bolivia','1998-04-03 01:37:49','2017-02-02 23:59:43',4361.00,2950.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(28,'Ava Koelpin IV','schiller.rey@example.org','678.849.6281','Madagascar','1984-04-11 17:59:54','1972-06-17 10:10:48',7434.00,2187.00,2,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(29,'Roxane Jacobs','mina.borer@example.com','320-381-8729','Guadeloupe','1997-03-12 10:02:07','2006-10-15 23:25:46',3038.00,1639.00,2,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(30,'Kiley Goodwin','klocko.neva@example.net','978-452-0285','Malta','2016-11-29 04:25:24','1994-08-31 13:45:37',419.00,1618.00,2,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(31,'Vallie Price','bradtke.dave@example.com','681-784-6685','Liechtenstein','1985-10-28 13:12:53','2013-12-31 15:38:51',1926.00,711.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(32,'Willie Smitham','damore.jamel@example.net','1-270-671-5210','Svalbard & Jan Mayen Islands','1992-07-22 01:24:03','2014-09-16 07:08:31',3850.00,228.00,1,0,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(33,'Timmothy Hackett','vivianne.lynch@example.net','1-240-230-7737','Slovakia (Slovak Republic)','2021-07-03 04:27:14','1982-04-04 04:33:46',2428.00,2595.00,2,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(34,'Autumn Welch PhD','lilla11@example.org','863-777-8349','French Southern Territories','1977-04-09 16:09:23','1987-05-28 16:06:35',5685.00,595.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(35,'Miss Rozella Kunde IV','myron25@example.net','+12169716318','Cote d\'Ivoire','2000-10-28 10:15:30','1994-09-26 08:39:08',592.00,2672.00,1,1,'2022-08-23 08:34:44','2022-08-23 08:34:44',NULL,NULL),(36,'Kelly Mooney','nobysovyxo@mailinator.com','505491096','Zambia',NULL,NULL,0.00,0.00,3,1,'2022-08-23 09:58:10','2022-09-07 09:08:32',NULL,1);
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_200000_add_two_factor_columns_to_users_table',2),(18,'2022_08_20_143459_create_bouncer_tables',3),(19,'2022_08_23_000308_create_packages_table',3),(20,'2022_08_23_071651_create_members_table',3),(21,'2022_08_23_081658_create_locations_table',3),(26,'2022_08_23_082022_create_transactions_table',6),(23,'2022_08_23_110155_create_location_package_table',4),(24,'2022_08_23_121906_add_userstamp_to_tables',5),(27,'2022_09_01_110557_create_countries_table',7),(28,'2022_09_07_125918_add_status_to_users_table',8),(33,'2022_09_08_103818_add_location_id_to_users_table',9),(34,'2022_09_08_111857_add_softdelete_to_users_table',10),(36,'2022_09_08_135132_add_softdeletes_to_locations_table',11);
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
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint unsigned DEFAULT NULL,
  `updated_by` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES (1,'Silver',1,'2022-08-23 12:33:25','2022-08-23 12:33:25',1,1),(2,'Gold',1,'2022-08-23 12:33:25','2022-08-23 12:33:25',1,1),(3,'Platinum',1,'2022-08-23 12:33:25','2022-08-23 12:33:25',1,1);
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'superadmin','Administrator',NULL,'2022-09-07 09:23:57','2022-09-07 09:23:57'),(2,'receptionist','Receptionist',NULL,'2022-09-07 09:33:07','2022-09-07 09:33:07');
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
  `member_id` bigint unsigned NOT NULL,
  `location_id` bigint unsigned NOT NULL,
  `receptionist_id` bigint unsigned NOT NULL,
  `points` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transactions_receptionist_id_foreign` (`receptionist_id`)
) ENGINE=MyISAM AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transactions`
--

LOCK TABLES `transactions` WRITE;
/*!40000 ALTER TABLE `transactions` DISABLE KEYS */;
INSERT INTO `transactions` VALUES (1,9,13,1,22.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(2,18,5,1,126.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(3,22,9,1,119.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(4,5,10,1,124.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(5,18,11,1,141.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(6,9,9,1,16.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(7,34,11,1,68.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(8,25,7,1,82.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(9,10,5,1,77.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(10,3,5,1,103.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(11,2,15,1,129.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(12,5,9,1,141.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(13,14,2,1,135.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(14,3,15,1,107.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(15,33,3,1,99.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(16,11,4,1,116.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(17,9,3,1,28.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(18,26,3,1,13.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(19,30,14,1,18.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(20,33,13,1,41.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(21,3,4,1,142.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(22,2,9,1,104.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(23,4,12,1,57.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(24,18,1,1,16.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(25,27,3,1,101.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(26,35,13,1,81.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(27,13,9,1,19.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(28,1,6,1,35.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(29,31,15,1,107.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(30,13,2,1,68.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(31,25,6,1,64.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(32,16,5,1,133.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(33,26,4,1,135.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(34,30,1,1,143.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(35,28,12,1,70.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(36,17,12,1,66.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(37,24,3,1,150.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(38,5,14,1,103.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(39,32,12,1,36.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(40,1,3,1,88.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(41,30,9,1,117.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(42,3,4,1,68.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(43,9,13,1,100.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(44,25,9,1,45.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(45,30,13,1,97.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(46,4,10,1,138.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(47,17,9,1,90.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(48,7,12,1,94.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(49,12,1,1,123.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(50,34,4,1,128.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(51,31,8,1,109.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(52,29,11,1,88.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(53,8,5,1,141.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(54,32,7,1,114.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(55,13,13,1,19.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(56,28,8,1,94.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(57,19,13,1,78.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(58,11,11,1,82.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(59,5,13,1,146.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(60,35,6,1,126.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(61,23,3,1,71.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(62,16,11,1,144.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(63,29,2,1,80.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(64,7,8,1,83.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(65,17,5,1,67.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(66,20,1,1,27.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(67,32,2,1,121.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(68,11,1,1,16.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(69,14,2,1,115.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(70,15,5,1,101.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(71,8,5,1,130.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(72,17,9,1,41.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(73,1,7,1,18.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(74,14,7,1,18.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(75,9,14,1,51.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(76,24,2,1,54.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(77,24,4,1,124.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(78,32,14,1,10.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(79,8,8,1,136.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(80,32,14,1,145.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(81,10,7,1,12.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(82,2,14,1,76.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(83,7,9,1,48.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(84,25,7,1,15.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(85,20,1,1,145.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(86,28,11,1,101.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(87,35,13,1,105.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(88,8,9,1,34.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(89,31,5,1,29.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(90,19,14,1,85.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(91,18,6,1,111.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(92,26,3,1,12.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(93,14,15,1,90.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(94,26,2,1,22.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(95,18,12,1,48.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(96,4,10,1,71.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(97,9,14,1,134.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(98,25,9,1,63.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(99,28,7,1,18.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(100,8,5,1,42.00,'2022-08-23 10:37:11','2022-08-23 10:37:11'),(101,30,5,1,51.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(102,25,4,1,53.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(103,32,1,1,33.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(104,20,4,1,37.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(105,17,14,1,69.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(106,1,11,1,66.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(107,15,14,1,139.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(108,29,6,1,123.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(109,6,9,1,86.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(110,7,13,1,41.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(111,11,5,1,128.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(112,18,3,1,38.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(113,31,11,1,90.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(114,9,12,1,14.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(115,33,14,1,14.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(116,24,2,1,132.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(117,23,8,1,100.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(118,6,9,1,127.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(119,24,2,1,121.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(120,22,7,1,127.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(121,20,12,1,58.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(122,3,1,1,131.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(123,9,10,1,107.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(124,2,7,1,70.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(125,1,3,1,74.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(126,30,15,1,82.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(127,28,4,1,136.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(128,1,7,1,63.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(129,19,7,1,118.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(130,30,6,1,112.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(131,19,2,1,144.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(132,23,9,1,108.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(133,7,12,1,107.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(134,34,7,1,150.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(135,8,6,1,30.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(136,32,5,1,106.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(137,21,11,1,59.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(138,25,8,1,52.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(139,18,5,1,89.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(140,3,9,1,83.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(141,4,5,1,121.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(142,30,8,1,58.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(143,3,7,1,12.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(144,4,14,1,56.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(145,13,12,1,78.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(146,10,6,1,68.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(147,30,6,1,45.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(148,23,11,1,150.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(149,9,15,1,21.00,'2022-08-23 10:37:32','2022-08-23 10:37:32'),(150,3,5,1,106.00,'2022-08-23 10:37:32','2022-08-23 10:37:32');
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'Miss Melyssa Walker a','adolphus08@example.org','2022-09-07 10:22:36','$2y$10$eAzuerOapn9uh4fxR657peYBoXJjdSjL/L70LPQ3/8wvHDVSqJqr2',NULL,NULL,NULL,'RIdZVm0YMf',1,1,'2022-09-07 10:22:36','2022-09-08 09:27:30',NULL),(1,'Admin','admin@epg.com',NULL,'$2y$10$XEeuv63SseAfjV7I8re0YO5cSLVGJTHHm4ZHGaT9m6qn4pOdjQ9Ou',NULL,NULL,NULL,NULL,1,0,'2022-09-07 09:15:22','2022-09-08 07:24:02',NULL),(4,'Mr. Donny Casper MD','tschaefer@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'X37I6ZPrbi',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(5,'Joelle Kuhn V','emory.sauer@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'TZsXEtxqxX',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(6,'Durward Hansen','lfarrell@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'2Ase8pQHvB',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(7,'Ms. Janae Boehm V','cosinski@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'s7MqXAPyvq',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(8,'Wilfred Christiansen','ebradtke@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'64WmtQTxWr',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(9,'Karelle Cormier','maxie27@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'JwwUm07BSp',1,7,'2022-09-07 10:22:36','2022-09-08 07:28:02',NULL),(10,'Verda Wintheiser','abbigail84@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'DkudAzan9Q',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(11,'Godfrey Kuhic','cartwright.brett@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Dlmwgslvbo',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(12,'Dorothea Bailey','metz.coy@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'K11pc1CYT4',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(13,'Eudora Watsica','crystal24@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'ugGCapTWuu',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(14,'Sigmund Howe MD','ansel10@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'oxOjLjfDUo',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(15,'Roel Parker','mya97@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'cX3gSlMbSK',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(16,'Tanya Schmeler','bhagenes@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'JzW1CiDoSa',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(17,'Ida Murray','xcorkery@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'o19bsmSxs0',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(18,'Miss Tia Hegmann','breana00@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'y2NBzv2z8j',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(19,'Gabrielle Hermann','lkutch@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Ezfnjx38mD',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(20,'Georgiana Hahn','wyman.effertz@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Fc0zrPZBI4',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(21,'Zion McClure','xkunze@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'fSTQUQLVsp',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(22,'Patricia Hand','brown.ladarius@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'59iXJw2R6T',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(23,'Dedrick Funk','darien.gulgowski@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'yCkxVdK8St',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(24,'Mrs. Providenci Stark Jr.','langworth.darrel@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Www78Al477',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(25,'Dayne Emard','justice07@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'0lAVrqbogn',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(26,'Prof. June Tremblay','kennedy71@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'hxr6BFtlP2',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(27,'Boris Prosacco','schamberger.stephany@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Gdnua2FRXh',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(28,'Annamae Metz','ramon25@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'QeZh6e6yKQ',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(29,'Miss Mozell Franecki','casimir.stroman@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'3v2W9BMWPD',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(30,'Demarcus Medhurst','bcasper@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'9LAESGVhq8',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(31,'Mr. Lon Hamill','mann.ramiro@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'Ds9h4pYHI9',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(32,'Danyka Reynolds PhD','mreichert@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'r6FdZbOgju',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(33,'Prof. Providenci Boyer','marian39@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'HAEBuoJxSR',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(34,'Hettie Bechtelar','mueller.lilian@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'tNCIAii6yo',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(35,'Jaycee McKenzie','rkuphal@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'t5qm0fE7hV',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(36,'Janick Cassin','qmorar@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'X22DO3ndYG',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(37,'Beryl Heller','johns.karina@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'TodBtWfW2p',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(38,'Prof. Johnathan Watsica PhD','jaleel88@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'SEgt0qU3oG',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(39,'Eveline Upton','beier.doug@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'B7EnesdrmL',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(40,'Rhett Crona','dokuneva@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'8LKfToVPmq',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(41,'Trent Howe','nicolas.juliana@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'dGM4KxJ7oV',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(42,'Mr. Presley Langosh I','jnienow@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'epj1MoXuSK',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(43,'Mathilde Bednar','zmorar@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'u1tta5LhTE',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(44,'Adelia Cole','verdie.bogisich@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'1kTIRKOMMK',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(45,'Prof. Delphine Haag','mertz.larue@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'zmTYnXuwVG',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(46,'Prof. Nettie Yost DVM','xbraun@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'tM7ce5UQwI',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(47,'Felipa Bailey III','susanna72@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'R3XwsYrxJh',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(48,'Mr. Axel Friesen','chessel@example.org','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'sjlI5I6uQ2',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(49,'Mona Lind','zemlak.marlon@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'ArTuVUJ5zs',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(50,'Scarlett Reichert','percy.stracke@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'mmAXiHuhQo',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(51,'Georgianna Baumbach','phyllis51@example.com','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'xU7fnPjYEA',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(52,'Shaun Marks','baylee07@example.net','2022-09-07 10:22:36','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',NULL,NULL,NULL,'rw5pV34F9r',1,0,'2022-09-07 10:22:36','2022-09-07 10:22:36',NULL),(54,'Perspiciatis aut qu','timycat@mailinator.com',NULL,'$2y$10$jP1HOlMNVJXFugUhaR0gyuPw5jw4niC3st8sj7Qxlp4e4DSaH7WNe',NULL,NULL,NULL,NULL,1,4,'2022-09-08 08:22:35','2022-09-08 08:22:35',NULL),(55,'asdasd','asdasd@asd.com',NULL,'$2y$10$lqDvNRWtmhyrmmxCHbRszu/Qs/f1jvhSZHiL6UOq498cA7rFewbWO',NULL,NULL,NULL,NULL,1,4,'2022-09-08 08:23:36','2022-09-08 08:23:36',NULL);
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

-- Dump completed on 2022-09-08 18:32:48
