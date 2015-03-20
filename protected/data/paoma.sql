/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50532
Source Host           : 127.0.0.1:3306
Source Database       : paoma

Target Server Type    : MYSQL
Target Server Version : 50532
File Encoding         : 65001

Date: 2015-03-20 17:53:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '用户名',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `gender` tinyint(1) unsigned DEFAULT NULL COMMENT '性别',
  `birthday` datetime DEFAULT NULL COMMENT '生日',
  `province` varchar(255) DEFAULT NULL COMMENT '省',
  `city` varchar(255) DEFAULT NULL COMMENT '市',
  `county` varchar(255) DEFAULT NULL COMMENT '县',
  `updateTime` int(10) unsigned NOT NULL COMMENT '修改时间',
  `createTime` int(10) unsigned NOT NULL COMMENT '注册时间',
  `status` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
