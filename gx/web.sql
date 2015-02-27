/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : web

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-27 13:56:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for discuss
-- ----------------------------
DROP TABLE IF EXISTS `discuss`;
CREATE TABLE `discuss` (
  `moviename` varchar(255) DEFAULT NULL,
  `discuss` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of discuss
-- ----------------------------
INSERT INTO `discuss` VALUES ('2.mp4', '1234');
INSERT INTO `discuss` VALUES ('1.mp4', '1');
INSERT INTO `discuss` VALUES ('1.mp4', '2');
INSERT INTO `discuss` VALUES ('1.mp4', '3');

-- ----------------------------
-- Table structure for upload
-- ----------------------------
DROP TABLE IF EXISTS `upload`;
CREATE TABLE `upload` (
  `photoname` varchar(255) DEFAULT NULL,
  `moviename` varchar(255) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `list` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of upload
-- ----------------------------
INSERT INTO `upload` VALUES ('1.jpg', '1.mp4', '13', '123', '3', null, '音乐', '5');
INSERT INTO `upload` VALUES ('2.jpg', '2.mp4', '123', ' 1', '23', null, '番剧', '4444');
INSERT INTO `upload` VALUES ('4.png', '2.mp4', '5', '1', '2', null, '动画', '4');

-- ----------------------------
-- Table structure for userid
-- ----------------------------
DROP TABLE IF EXISTS `userid`;
CREATE TABLE `userid` (
  `id` varchar(255) DEFAULT NULL,
  `passward` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userid
-- ----------------------------
INSERT INTO `userid` VALUES ('123', '123');
