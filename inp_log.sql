/*
Navicat MySQL Data Transfer

Source Server         : lbo
Source Server Version : 100108
Source Host           : localhost:3306
Source Database       : usersave

Target Server Type    : MYSQL
Target Server Version : 100108
File Encoding         : 65001

Date: 2017-06-21 18:53:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for inp_log
-- ----------------------------
DROP TABLE IF EXISTS `inp_log`;
CREATE TABLE `inp_log` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of inp_log
-- ----------------------------
INSERT INTO `inp_log` VALUES ('1', 'xiaobo', '123456');
SET FOREIGN_KEY_CHECKS=1;
