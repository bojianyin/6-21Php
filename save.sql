/*
Navicat MySQL Data Transfer

Source Server         : lbo
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : usersave

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2017-06-21 18:53:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for save
-- ----------------------------
DROP TABLE IF EXISTS `save`;
CREATE TABLE `save` (
  `intime` int(255) NOT NULL DEFAULT '0',
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of save
-- ----------------------------
INSERT INTO `save` VALUES ('1498035339', '烦烦烦烦烦烦烦烦烦方法', '小v波', '73');
INSERT INTO `save` VALUES ('1498041856', 'fcsds', 'asd', '77');
INSERT INTO `save` VALUES ('1498009554', 'asd', 'as', '70');
SET FOREIGN_KEY_CHECKS=1;
