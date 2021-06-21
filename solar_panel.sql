/*
 Navicat Premium Data Transfer

 Source Server         : Docker Root Local
 Source Server Type    : MySQL
 Source Server Version : 50734
 Source Host           : localhost:3306
 Source Schema         : solar_panel

 Target Server Type    : MySQL
 Target Server Version : 50734
 File Encoding         : 65001

 Date: 21/06/2021 11:09:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for log_monitor
-- ----------------------------
DROP TABLE IF EXISTS `log_monitor`;
CREATE TABLE `log_monitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `intensitas_cahaya` varchar(255) DEFAULT NULL,
  `voltage` float DEFAULT NULL,
  `machine_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'charging',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of log_monitor
-- ----------------------------
BEGIN;
INSERT INTO `log_monitor` VALUES (1, '2021-06-21 04:02:26', '-6.917464', '107.619125', '90', 4.2, '923b39d065929edf6dc600ec811e0f302f23f13d', 'charging');
INSERT INTO `log_monitor` VALUES (2, '2021-06-21 04:04:01', '-6.917464', '107.619125', '90', 4.2, '923b39d065929edf6dc600ec811e0f302f23f13d', 'charging');
INSERT INTO `log_monitor` VALUES (3, '2021-06-21 04:04:06', '-6.917464', '107.619125', '90', 4.2, '923b39d065929edf6dc600ec811e0f302f23f13d', 'charging');
INSERT INTO `log_monitor` VALUES (4, '2021-06-21 04:04:07', '-6.917464', '107.619125', '90', 4.2, '923b39d065929edf6dc600ec811e0f302f23f13d', 'charging');
COMMIT;

-- ----------------------------
-- Table structure for machine_data
-- ----------------------------
DROP TABLE IF EXISTS `machine_data`;
CREATE TABLE `machine_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `capacity_level` varchar(255) DEFAULT NULL,
  `capacity` int(11) DEFAULT NULL,
  `estimated_time` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `voltage` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `machine_id` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of machine_data
-- ----------------------------
BEGIN;
INSERT INTO `machine_data` VALUES (1, '23', 1000, '2021-06-21 12:13:00', 'Charging', '5V', '-6.917464', '107.619125', '2021-06-21 10:12:54', 0x39323362333964303635393239656466366463363030656338313165306633303266323366313364);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
