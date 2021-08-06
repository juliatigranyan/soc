/*
 Navicat MySQL Data Transfer

 Source Server         : MYSQL
 Source Server Type    : MySQL
 Source Server Version : 100419
 Source Host           : localhost:3306
 Source Schema         : julia_soc

 Target Server Type    : MySQL
 Target Server Version : 100419
 File Encoding         : 65001

 Date: 05/08/2021 12:56:52
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (9, 1, 'aaaaaa');
INSERT INTO `status` VALUES (11, 1, 'aaaaaa');
INSERT INTO `status` VALUES (12, 1, 'aaaaaaaaaaaaa');
INSERT INTO `status` VALUES (13, 1, 'sfs dgz');
INSERT INTO `status` VALUES (14, 1, 'ass	?	?	?	?aerdafaf???\r\n???');
INSERT INTO `status` VALUES (15, 1, '	?	?	?');
INSERT INTO `status` VALUES (16, 1, '	?	?	?');
INSERT INTO `status` VALUES (17, 1, '???');
INSERT INTO `status` VALUES (18, 1, 'Hello World	😍');

-- ----------------------------
-- Table structure for status_like
-- ----------------------------
DROP TABLE IF EXISTS `status_like`;
CREATE TABLE `status_like`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NULL DEFAULT NULL,
  `status_id` int NULL DEFAULT NULL,
  `like` int NULL DEFAULT NULL,
  `dislike` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `status_id`(`status_id`) USING BTREE,
  CONSTRAINT `status_like_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `status_like_ibfk_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of status_like
-- ----------------------------
INSERT INTO `status_like` VALUES (1, 1, 9, 0, 0);
INSERT INTO `status_like` VALUES (2, 1, 12, 0, 1);
INSERT INTO `status_like` VALUES (19, 1, 11, 0, 1);
INSERT INTO `status_like` VALUES (20, 1, 13, 1, 0);
INSERT INTO `status_like` VALUES (21, 1, 17, 1, 0);
INSERT INTO `status_like` VALUES (22, 1, 16, 0, 0);
INSERT INTO `status_like` VALUES (23, 1, 15, 0, 0);
INSERT INTO `status_like` VALUES (24, 1, 14, 0, 1);
INSERT INTO `status_like` VALUES (25, 1, 18, 1, 0);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '1.jpg',
  `bg_img` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '2.jpg',
  `online` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (1, 'Julia', 'julia@gmail.com', '$2y$10$yiza35pOBFkphd4pHvaaiOZAhrnUfb.dI.TqVAHUiH/pHkeIYs82S', '1.jpg', '2.jpg', '1');

SET FOREIGN_KEY_CHECKS = 1;
