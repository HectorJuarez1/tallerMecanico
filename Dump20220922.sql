-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: tallerbd
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `cotizacion`
--

DROP TABLE IF EXISTS `cotizacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cotizacion` (
  `cotizacion_id` int NOT NULL AUTO_INCREMENT,
  `cotizacion_nombre_cliente` varchar(45) NOT NULL,
  `cotizacion_descripcion_coche` varchar(45) NOT NULL,
  `cotizacion_fecha` varchar(45) NOT NULL,
  `cotizacion_costo_total` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`cotizacion_id`),
  UNIQUE KEY `cotizacion_id_UNIQUE` (`cotizacion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotizacion`
--

LOCK TABLES `cotizacion` WRITE;
/*!40000 ALTER TABLE `cotizacion` DISABLE KEYS */;
INSERT INTO `cotizacion` VALUES (1,'Marco ','Coche color negro','03/08/2021',1254.00),(3,'FERNANDO','COCHE COLOR NEGRO','2000-05-12',232.00),(4,'Fernando','Coche color negro','2000-05-12',232.00),(5,'Fernando','Coche color negro','2000-05-12',232.00),(29,'trdtr','ewq','2092-12-21',123.00);
/*!40000 ALTER TABLE `cotizacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotizacion_detalle`
--

DROP TABLE IF EXISTS `cotizacion_detalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cotizacion_detalle` (
  `cotizacion_detalle_id` int NOT NULL AUTO_INCREMENT,
  `cotizacion_id` int NOT NULL,
  `refaccion_proveedor_id` int NOT NULL,
  `cotizacion_detalle_incremento` decimal(8,2) NOT NULL,
  `cotizacion_detalle_numero_piezas` int NOT NULL,
  `cotizacion_detalle_mano_obra` decimal(8,2) NOT NULL,
  `cotizacion_detalle_costo_parcial` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`cotizacion_detalle_id`),
  UNIQUE KEY `cotizacion_detalle_id_UNIQUE` (`cotizacion_detalle_id`),
  KEY `fk_cotizacion_id_idx` (`cotizacion_id`),
  KEY `fk_refaccion_proveedor_id_idx` (`refaccion_proveedor_id`),
  CONSTRAINT `fk_cotizacion_id` FOREIGN KEY (`cotizacion_id`) REFERENCES `cotizacion` (`cotizacion_id`),
  CONSTRAINT `fk_refaccion_proveedor_id` FOREIGN KEY (`refaccion_proveedor_id`) REFERENCES `refaccion_proveedor` (`refaccion_proveedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotizacion_detalle`
--

LOCK TABLES `cotizacion_detalle` WRITE;
/*!40000 ALTER TABLE `cotizacion_detalle` DISABLE KEYS */;
/*!40000 ALTER TABLE `cotizacion_detalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cotizacion_detalle_temporal`
--

DROP TABLE IF EXISTS `cotizacion_detalle_temporal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cotizacion_detalle_temporal` (
  `cotizacion_detalle_temporal_id` int NOT NULL AUTO_INCREMENT,
  `cotizacion_id_temporal` int NOT NULL,
  `refaccion_proveedor_id_temporal` int NOT NULL,
  `cotizacion_detalle_incremento_temporal` decimal(8,2) NOT NULL,
  `cotizacion_detalle_numero_piezas_temporal` int NOT NULL,
  `cotizacion_detalle_mano_obra` decimal(8,2) NOT NULL,
  PRIMARY KEY (`cotizacion_detalle_temporal_id`),
  UNIQUE KEY `cotizacion_detalle_temporal_id_UNIQUE` (`cotizacion_detalle_temporal_id`),
  KEY `pk_refaccion_proveedor_id_temporal_idx` (`refaccion_proveedor_id_temporal`),
  CONSTRAINT `pk_refaccion_proveedor_id_temporal` FOREIGN KEY (`refaccion_proveedor_id_temporal`) REFERENCES `refaccion_proveedor` (`refaccion_proveedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cotizacion_detalle_temporal`
--

LOCK TABLES `cotizacion_detalle_temporal` WRITE;
/*!40000 ALTER TABLE `cotizacion_detalle_temporal` DISABLE KEYS */;
/*!40000 ALTER TABLE `cotizacion_detalle_temporal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `marca`
--

DROP TABLE IF EXISTS `marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `marca` (
  `marca_id` int NOT NULL AUTO_INCREMENT,
  `marca_nombre` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`marca_id`),
  UNIQUE KEY `marca_id_UNIQUE` (`marca_id`),
  UNIQUE KEY `marca_nombre_UNIQUE` (`marca_nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marca`
--

LOCK TABLES `marca` WRITE;
/*!40000 ALTER TABLE `marca` DISABLE KEYS */;
INSERT INTO `marca` VALUES (1,'AUDI'),(3,'BMW'),(6,'DODGE'),(7,'FERRARI'),(8,'FORD'),(13,'MASERATI'),(14,'MCLAREN'),(16,'NISSAN'),(17,'PORSCHE'),(18,'SEAT'),(19,'SUZUKI'),(20,'TESLA'),(21,'TOYOTA'),(22,'VOLKSWAGEN VW');
/*!40000 ALTER TABLE `marca` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_10_12_200000_add_two_factor_columns_to_users_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2022_09_10_233831_create_sessions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor` (
  `proveedor_id` int NOT NULL AUTO_INCREMENT,
  `proveedor_nombre` varchar(100) NOT NULL DEFAULT 'nombre sin asignar',
  `proveedor_direccion` varchar(255) DEFAULT 'direccion sin asignar',
  `proveedor_telefono` varchar(45) DEFAULT 'telefono sin asignar',
  `proveedor_telefono2` varchar(45) DEFAULT 'telefono sin asignar',
  `proveedor_correo_e` varchar(45) DEFAULT 'email sin asignar',
  PRIMARY KEY (`proveedor_id`),
  UNIQUE KEY `proveedor_id_UNIQUE` (`proveedor_id`),
  UNIQUE KEY `proveedor_nombre_UNIQUE` (`proveedor_nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=605 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'APYMSA','Blvd. Carmen Serdán 54, Sta María la Rivera, 72010 Puebla, Pue.','2222203603','2222203604','contacto@apymsa.com.mx'),(2,'SAGAJI','C. 25 Nte. 3642, Cleotilde Torres, Las Cuartillas, 72490 Puebla, Pue.','2222232500','2228800100','Alejandra.yerena@sagaji.com.mx'),(3,'NAPA','AVE 11 SUR 11525, LOMAS DE CASTILLOTLA , PUEBLA , PUE , C.P.72490','2222235000','2222235001','NAPA@HOTMAIL.COM'),(6,'CALDERON AUTOPARTES','Norte 74 6103 Gertrudis Sanchez, 1ra. Sección, Alcaldía, 07830 Ciudad de México, CDMX','5557718400','5557718401','stultitlan@calderon.com.mx'),(601,'REFACCIONARIA-ARBOLEDAS','Altos Hornos 2755, Alamo Industrial, 45593 San Pedro Tlaquepaque, Jal.','3338371280','3338371281','RArboledas@hotmail.com'),(602,'LUKAS','5 de mayo','2211764532','2211764532','id19191@dasc.edu.mx');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refaccion`
--

DROP TABLE IF EXISTS `refaccion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `refaccion` (
  `refaccion_id` int NOT NULL AUTO_INCREMENT,
  `marca_id` int NOT NULL,
  `refaccion_nombre` varchar(255) NOT NULL,
  `refaccion_descripcion` varchar(255) DEFAULT NULL,
  `refaccion_imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`refaccion_id`),
  UNIQUE KEY `refaccion_id_UNIQUE` (`refaccion_id`),
  KEY `fk_marca_id_idx` (`marca_id`),
  CONSTRAINT `fk_marca_id` FOREIGN KEY (`marca_id`) REFERENCES `marca` (`marca_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refaccion`
--

LOCK TABLES `refaccion` WRITE;
/*!40000 ALTER TABLE `refaccion` DISABLE KEYS */;
INSERT INTO `refaccion` VALUES (1,1,'BUJIA','BUJIA ESPECIAL YR7LPP332W AUDI TT 04-10 AUDI A3 03-07 BOSCH 0 242 135 510','1000.jpg'),(2,8,'Balero','BALERO AIRE ACONDICIONADO KENWORTH NTN DF0716LL','1001.jpg'),(3,18,'Bomba gasolina','BOMBA GASOLINA ENSAMBLE 60PSI 170 L/H FORD RANGER 4CIL 2.3L V6 3.0L 07-08 E-2503M','1002.jpg'),(4,6,'Arbol de levas','ARBOL DE LEVAS MOTOCICLETA CARGO 150 IMPORTADO NRS-10','1003.jpg'),(5,16,'Amortiguador','AMORTIGUADOR TRASERO FT 125, FT 150, DT 125, DT 150 IMPORTADO MN0040','1004.jpg'),(6,22,'Balata','Balata ACURA CL, 1998-1999, 2.2L Trasera Cerámica Largo: 88.90','1005.jpg'),(14,18,'Faro','Faro Eléctrico Con Motor Para Foco Xenón Con Leds Lado Conductor','1006.jpg'),(15,6,'Amortiguadores','Par De Amortiguadores Gas Delanteros OESpectrum','1007.jpg'),(24,18,'CORONA TRANSMISION','CORONA TRANSMISION ZANELLA PATAGONIAN ST ORIGINAL','1008.jpg');
/*!40000 ALTER TABLE `refaccion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `refaccion_proveedor`
--

DROP TABLE IF EXISTS `refaccion_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `refaccion_proveedor` (
  `refaccion_proveedor_id` int NOT NULL AUTO_INCREMENT,
  `id_refaccion` int NOT NULL,
  `id_proveedor` int NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `precio` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`refaccion_proveedor_id`),
  UNIQUE KEY `refaccion_proveedor_id_UNIQUE` (`refaccion_proveedor_id`),
  KEY `fk_id_refaccion_idx` (`id_refaccion`),
  KEY `fk_id_proveedor_idx` (`id_proveedor`),
  CONSTRAINT `fk_id_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`proveedor_id`),
  CONSTRAINT `fk_id_refaccion` FOREIGN KEY (`id_refaccion`) REFERENCES `refaccion` (`refaccion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `refaccion_proveedor`
--

LOCK TABLES `refaccion_proveedor` WRITE;
/*!40000 ALTER TABLE `refaccion_proveedor` DISABLE KEYS */;
INSERT INTO `refaccion_proveedor` VALUES (3,1,1,'2000-09-12',1234.00),(4,6,6,'2000-10-11',123.00);
/*!40000 ALTER TABLE `refaccion_proveedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('302TEX2TQZqIlmlvDaxyasniVVsQEY2Nuc36G7mJ',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.102 Safari/537.36 OPR/90.0.4480.84','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWVET2tIMDdEdWlUS0Ywd1N0SThMSUczZ3kyM2pSMkphTFlTdEpkYSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=',1662854868),('H1mzrlYPbEV5i8qyOd9GftK4xb82z4gIDGsr68kB',NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36 Edg/105.0.1343.33','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTDI1UWo3MTFmZ2NFdHliTU13Nk1rMDhGSGN0V284MDJiakVzTkxQSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1662854881);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sucursal_prov`
--

DROP TABLE IF EXISTS `sucursal_prov`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sucursal_prov` (
  `sucursal_id` int NOT NULL AUTO_INCREMENT,
  `proveedor_id` int NOT NULL,
  `sucursal_nombre` varchar(100) NOT NULL DEFAULT 'Sin asignar',
  `sucursal_direccion` varchar(255) DEFAULT 'Sin asignar',
  `sucursal_telefono` varchar(45) DEFAULT 'Sin asignar',
  `sucursal_telefono_2` varchar(45) DEFAULT 'Sin asignar',
  `sucursal_correo` varchar(45) DEFAULT 'Sin asignar',
  PRIMARY KEY (`sucursal_id`),
  UNIQUE KEY `sucursal_id_UNIQUE` (`sucursal_id`),
  KEY `proveedor_id_idx` (`proveedor_id`),
  CONSTRAINT `fk_proveedor_id` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedor` (`proveedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sucursal_prov`
--

LOCK TABLES `sucursal_prov` WRITE;
/*!40000 ALTER TABLE `sucursal_prov` DISABLE KEYS */;
INSERT INTO `sucursal_prov` VALUES (1,1,'Sucursal Reforma','Prol. Reforma No. 3302, Amor PUEBLA, Puebla, 72140','2229189176','2229189172','Apymsa@hotmail.com'),(2,2,'Sucursal Puebla','Av. 25 Norte #3542-A. colonia Cuartillas, San Felipe Hueyotlipan, Puebla, C.P. 72050.','2222232500','0188062780','ventas@sagaji.com.mx'),(3,6,'Sucursal la paz','Prol. paz No. 3402, Amor PUEBLA, Puebla, 5640','2211756234','2211756232','clautopartes@hotmail.com.mx'),(4,3,'Sucursal Oronoz','Calle 5 de mayo','2222235012','2222235032','napa@hotmail.com.mx'),(5,601,'Las Americas','Av. Nicolás Copérnico 4209, Arboledas, 45070 Zapopan, Jal.','3338371223','3338371255','hola@refaccionariaarboledas.com.mx');
/*!40000 ALTER TABLE `sucursal_prov` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'hector','hector@hotmail.com',NULL,'$2y$10$gnAv8KqspqknnnX1OA9AcuXWu77229d9uJJBZ2qZZds86AI0cHria',NULL,NULL,NULL,NULL,NULL,NULL,'2022-09-11 05:06:58','2022-09-11 05:06:58');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `usuarios_id` int NOT NULL AUTO_INCREMENT,
  `usuarios_nombre` varchar(50) NOT NULL,
  `usuarios_pass` varchar(50) NOT NULL,
  `usuarios_tipo` varchar(50) NOT NULL,
  PRIMARY KEY (`usuarios_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-22 20:10:35
