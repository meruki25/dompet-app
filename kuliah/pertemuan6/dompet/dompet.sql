/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80033
 Source Host           : localhost:3306
 Source Schema         : dompet

 Target Server Type    : MySQL
 Target Server Version : 80033
 File Encoding         : 65001

 Date: 20/12/2023 17:59:34
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori
-- ----------------------------
DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of kategori
-- ----------------------------
BEGIN;
INSERT INTO `kategori` VALUES (1, 'Gaji Rutin');
INSERT INTO `kategori` VALUES (2, 'Bonus');
INSERT INTO `kategori` VALUES (3, 'Usaha Sampingan');
INSERT INTO `kategori` VALUES (4, 'Warisan');
INSERT INTO `kategori` VALUES (5, 'Uang Kaget');
INSERT INTO `kategori` VALUES (6, 'Lainnya');
COMMIT;

-- ----------------------------
-- Table structure for transaksi
-- ----------------------------
DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE `transaksi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `nominal` bigint DEFAULT NULL,
  `keterangan` longtext,
  `lampiran` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_input` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- ----------------------------
-- Records of transaksi
-- ----------------------------
BEGIN;
INSERT INTO `transaksi` VALUES (14, '2023-12-02', 'Bonus', 10000, 'Isi keterangan', '', '2023-12-20 07:52:04');
INSERT INTO `transaksi` VALUES (15, '2023-12-20', 'Gaji Rutin', 8000000, 'ISI KET', 'uploads/Booths function.jpg', '2023-12-20 10:45:52');
INSERT INTO `transaksi` VALUES (16, '2023-12-20', 'Gaji Rutin', 8000000, 'ISI KET', 'uploads/Booths function.jpg', '2023-12-20 10:46:45');
INSERT INTO `transaksi` VALUES (17, '2023-12-20', 'Gaji Rutin', 8000000, 'ISI KET', 'uploads/Booths function.jpg', '2023-12-20 10:47:14');
INSERT INTO `transaksi` VALUES (18, '2023-12-20', 'Gaji Rutin', 8000000, 'ISI KET', 'uploads/Booths function.jpg', '2023-12-20 10:47:54');
INSERT INTO `transaksi` VALUES (19, '2023-12-20', 'Bonus', 9000000, 'ISI KET', '', '2023-12-20 10:51:28');
INSERT INTO `transaksi` VALUES (20, '2023-12-20', 'Uang Kaget', 90000000, 'Isi Kaget', '', '2023-12-20 10:58:11');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
