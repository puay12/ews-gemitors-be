-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table ews_gemitors.ews_score
CREATE TABLE IF NOT EXISTS `ews_score` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `record_id` int unsigned NOT NULL,
  `heart_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sys_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dias_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `respiratory_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `temp_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `spo2_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ews_score` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_record_id` (`record_id`),
  CONSTRAINT `fk_record_id` FOREIGN KEY (`record_id`) REFERENCES `health_records` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.ews_score: ~16 rows (approximately)
REPLACE INTO `ews_score` (`id`, `record_id`, `heart_score`, `sys_score`, `dias_score`, `respiratory_score`, `temp_score`, `spo2_score`, `ews_score`, `created_at`, `updated_at`) VALUES
	(1, 1, '0', '0', '0', '0', '0', '0', '0', '2024-03-16 08:34:43', NULL),
	(2, 2, '1', '0', '0', '0', '0', '0', '1', '2024-03-16 08:37:15', NULL),
	(3, 3, '0', '0', '0', '3', '0', '0', '3', '2024-03-16 08:37:27', NULL),
	(4, 4, '0', '1', '0', '1', '0', '1', '3', '2024-03-16 08:37:42', NULL),
	(5, 5, '0', '1', '0', '0', '0', '0', '1', '2024-03-16 08:37:55', NULL),
	(6, 6, '0', '1', '1', '3', '0', '0', '5', '2024-03-16 08:38:08', NULL),
	(7, 7, '0', '0', '1', '0', '0', '0', '1', '2024-03-16 08:38:21', NULL),
	(8, 8, '0', '0', '1', '1', '1', '1', '4', '2024-03-16 08:38:37', NULL),
	(9, 9, '0', '0', '1', '3', '0', '0', '4', '2024-03-16 08:38:52', NULL),
	(10, 10, '0', '0', '0', '0', '1', '0', '1', '2024-03-16 08:39:08', NULL),
	(14, 37, '0', '1', '1', '0', '1', '0', '3', '2024-04-15 22:12:59', '2024-04-15 22:12:59'),
	(15, 38, '2', '1', '1', '0', '1', '0', '5', '2024-04-16 00:27:52', '2024-04-16 00:27:52'),
	(16, 39, '0', '0', '1', '1', '0', '1', '3', '2024-04-16 19:54:26', '2024-04-16 19:54:26'),
	(32, 55, '0', '1', '0', '1', '0', '0', '2', '2024-06-08 01:33:37', '2024-06-08 01:33:37'),
	(34, 56, '0', '0', '0', '0', '1', '0', '1', '2024-06-08 01:52:48', '2024-06-08 01:52:48');

-- Dumping structure for table ews_gemitors.ews_table
CREATE TABLE IF NOT EXISTS `ews_table` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `vital_sign` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `3L` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `2L` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `1L` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `0` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `1R` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `2R` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `3R` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.ews_table: ~0 rows (approximately)

-- Dumping structure for table ews_gemitors.health_records
CREATE TABLE IF NOT EXISTS `health_records` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int unsigned NOT NULL,
  `heart_rate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `systolic_blood_pressure` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `diastolic_blood_pressure` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `respiratory_rate` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `temperature` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `spo2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_patient_id` (`patient_id`),
  CONSTRAINT `fk_patient_id` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.health_records: ~14 rows (approximately)
REPLACE INTO `health_records` (`id`, `patient_id`, `heart_rate`, `systolic_blood_pressure`, `diastolic_blood_pressure`, `respiratory_rate`, `temperature`, `spo2`, `created_at`, `updated_at`) VALUES
	(1, 1, '80', '120', '60', '16', '37', '95', '2024-03-16 07:24:17', NULL),
	(2, 8, '101', '140', '65', '20.85', '36.68', '96', '2024-03-16 07:32:31', NULL),
	(3, 4, '72', '135', '61', '23.64', '36.45', '95', '2024-03-16 07:35:31', NULL),
	(4, 7, '83', '157', '58', '15.65', '36.92', '99', '2024-03-16 07:36:21', NULL),
	(5, 10, '93', '105', '64', '20', '36.85', '96', '2024-03-16 07:36:59', NULL),
	(6, 2, '90', '106', '40', '24', '36.28', '96', '2024-03-16 07:37:38', NULL),
	(7, 3, '83', '114', '34', '20', '36.7', '96', '2024-03-16 07:38:16', NULL),
	(8, 5, '69', '130', '42', '16', '36', '99', '2024-03-16 07:38:51', NULL),
	(9, 6, '78', '133', '76', '28', '36.63', '98', '2024-03-16 07:39:25', NULL),
	(10, 9, '75', '135', '72', '18', '36', '95', '2024-03-16 07:39:59', NULL),
	(37, 32, '70', '145', '60', '16.5', '37', '94', '2024-04-15 22:12:39', '2024-04-15 22:12:39'),
	(38, 32, '100', '145', '60', '16.5', '37', '94', '2024-04-16 00:22:14', '2024-04-16 00:22:14'),
	(39, 33, '70', '127', '60', '15', '36.5', '95', '2024-04-16 19:53:29', '2024-04-16 19:53:29'),
	(55, 43, '80', '120', '50', '12.5', '36', '90', '2024-06-05 08:45:46', '2024-06-08 01:25:45'),
	(56, 44, '80', '80', '50', '18', '37', '90', '2024-06-08 01:51:32', '2024-06-08 01:52:42');

-- Dumping structure for table ews_gemitors.monitoring_frequency
CREATE TABLE IF NOT EXISTS `monitoring_frequency` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `frequency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.monitoring_frequency: ~4 rows (approximately)
REPLACE INTO `monitoring_frequency` (`id`, `frequency`) VALUES
	(1, 'Minimal setiap 12 jam'),
	(2, 'Minimal setiap 4-6 jam'),
	(3, 'Minimal setiap 1 jam'),
	(4, 'Continuous');

-- Dumping structure for table ews_gemitors.patient
CREATE TABLE IF NOT EXISTS `patient` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `age` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `height` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `weight` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.patient: ~14 rows (approximately)
REPLACE INTO `patient` (`id`, `name`, `gender`, `age`, `height`, `weight`, `phone`, `created_at`, `updated_at`) VALUES
	(1, 'Sukinem', 'P', '50', '150', '46', '084354656778', '2024-03-16 07:17:11', '2024-03-16 07:17:12'),
	(2, 'Paijo', 'L', '70', '171', '50', '087656453445', '2024-03-16 07:18:03', NULL),
	(3, 'Sukijat', 'L', '60', '145', '55', '085645344556', '2024-03-16 07:18:39', NULL),
	(4, 'Painem', 'P', '45', '160', '57', '087665543423', '2024-03-16 07:19:52', NULL),
	(5, 'Naila', 'P', '27', '163', '50', '085645455656', '2024-03-16 07:20:22', NULL),
	(6, 'Fajri', 'L', '20', '175', '53', '087867564534', '2024-03-16 07:21:16', NULL),
	(7, 'Husein', 'L', '22', '173', '53', '085645342312', '2024-03-16 07:21:41', NULL),
	(8, 'Noah', 'L', '25', '178', '58', '084556675645', '2024-03-16 07:22:06', NULL),
	(9, 'Ginah', 'P', '78', '160', '60', '086756454556', '2024-03-16 07:22:39', NULL),
	(10, 'Jihan', 'P', '30', '145', '45', '087656564556', '2024-03-16 07:23:24', NULL),
	(11, 'Aminah', 'P', '28', '146', '67', '089887766554', '2024-03-18 20:31:14', '2024-03-18 20:31:14'),
	(14, 'Sukinamu', 'P', '28', '146', '67', '089887766554', '2024-03-21 23:48:55', '2024-03-21 23:48:55'),
	(32, 'Juminten', 'P', '50', '158', '47', '087867675656', '2024-04-13 09:49:15', '2024-04-13 09:49:15'),
	(33, 'Medeia', 'P', '34', '160', '50', '087867675656', '2024-04-16 08:47:20', '2024-04-16 08:47:20'),
	(43, 'Alvi Syahrina Alwi', 'P', '42', '156', '52', '085645453434', '2024-05-24 02:10:30', '2024-06-05 00:37:25'),
	(44, 'Wahyudi', 'L', '61', '160', '58', '089878786767', '2024-06-08 01:51:03', '2024-06-08 01:52:17'),
	(45, 'Farish', 'L', '41', '168', '50', '089988776666', '2024-06-10 23:43:15', '2024-06-10 23:44:40'),
	(46, 'Harish Dermawan', 'L', '42', '159', '46', '087678786767', '2024-06-11 20:19:46', '2024-06-11 20:24:17');

-- Dumping structure for table ews_gemitors.protocols
CREATE TABLE IF NOT EXISTS `protocols` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `score_thres_id` int unsigned NOT NULL,
  `risk_level_id` int unsigned NOT NULL,
  `category_id` int unsigned NOT NULL,
  `monitor_freq_id` int unsigned NOT NULL,
  `protocol_list` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_score_thres_id` (`score_thres_id`),
  KEY `fk_risk_level_id` (`risk_level_id`),
  KEY `fk_category_id` (`category_id`),
  KEY `fk_monitor_freq_id` (`monitor_freq_id`),
  CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `protocol_categories` (`id`),
  CONSTRAINT `fk_monitor_freq_id` FOREIGN KEY (`monitor_freq_id`) REFERENCES `monitoring_frequency` (`id`),
  CONSTRAINT `fk_risk_level_id` FOREIGN KEY (`risk_level_id`) REFERENCES `risk_levels` (`id`),
  CONSTRAINT `fk_score_thres_id` FOREIGN KEY (`score_thres_id`) REFERENCES `score_threshold` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.protocols: ~4 rows (approximately)
REPLACE INTO `protocols` (`id`, `score_thres_id`, `risk_level_id`, `category_id`, `monitor_freq_id`, `protocol_list`) VALUES
	(1, 1, 1, 1, 1, 'Monitor skor EWS secara berkala sesuai perkembangan tanda vital pasien'),
	(2, 2, 1, 1, 2, 'Panggil perawat yang sedang berjaga\\nPerawat tersebut menentukan apakah frekuensi monitoring pasien atau perawatan pasien perlu ditingkatkan'),
	(4, 4, 3, 3, 3, 'Perawat sesegera mungkin memanggil dokter yang bertanggung jawab\\nPerawat meminta dokter untuk menangani pasien darurat dengan tambahan tim medis lain untuk membantu\\nMenyediakan alat-alat monitoring untuk menangani pasien darurat'),
	(5, 5, 4, 4, 4, 'Perawat dengan segera memanggil dokter spesialis yang bertanggung jawab\\nPerawat memanggil tim medis penanganan darurat yang juga ahli dalam mengatur jalan pernapasan pasien\\nPertimbangkan untuk memindahkan ke unit yang lebih lengkap seperti ICU\\nPerawatan medis dengan fasilitas alat-alat monitoring');

-- Dumping structure for table ews_gemitors.protocol_categories
CREATE TABLE IF NOT EXISTS `protocol_categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.protocol_categories: ~4 rows (approximately)
REPLACE INTO `protocol_categories` (`id`, `category`) VALUES
	(1, 'Normal'),
	(2, 'Normal-Urgent'),
	(3, 'Urgent'),
	(4, 'Emergency');

-- Dumping structure for table ews_gemitors.risk_levels
CREATE TABLE IF NOT EXISTS `risk_levels` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.risk_levels: ~4 rows (approximately)
REPLACE INTO `risk_levels` (`id`, `level`) VALUES
	(1, 'Low'),
	(2, 'Low-Medium'),
	(3, 'Medium'),
	(4, 'High');

-- Dumping structure for table ews_gemitors.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.roles: ~2 rows (approximately)
REPLACE INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', '2024-03-16 08:00:19', NULL),
	(2, 'nakes', '2024-03-16 08:00:29', NULL);

-- Dumping structure for table ews_gemitors.score_threshold
CREATE TABLE IF NOT EXISTS `score_threshold` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `threshold` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.score_threshold: ~4 rows (approximately)
REPLACE INTO `score_threshold` (`id`, `threshold`) VALUES
	(1, '0'),
	(2, 'Total skor 1-4'),
	(4, 'Total skor 5-6'),
	(5, 'Total skor >= 7');

-- Dumping structure for table ews_gemitors.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int unsigned NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logged_in` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table ews_gemitors.user: ~0 rows (approximately)
REPLACE INTO `user` (`id`, `role_id`, `email`, `password`, `logged_in`, `created_at`, `updated_at`) VALUES
	(1, 2, 'sakinah', '$2y$10$9c3lDjjtPa1MB2e.8s6X8.Hw8SK6Np5c/734MtpK0DNYkHVOPxspu', 0, '2024-03-16 08:02:37', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
