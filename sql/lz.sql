/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : lz

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2013-03-04 20:28:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `lz_adminer`
-- ----------------------------
DROP TABLE IF EXISTS `lz_adminer`;
CREATE TABLE `lz_adminer` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `power` text NOT NULL,
  `status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ctime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_adminer
-- ----------------------------
INSERT INTO `lz_adminer` VALUES ('1', 'admin', '4297f44b13955235245b2497399d7a93', '', '0', '0');

-- ----------------------------
-- Table structure for `lz_content`
-- ----------------------------
DROP TABLE IF EXISTS `lz_content`;
CREATE TABLE `lz_content` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `tid` smallint(5) NOT NULL,
  `islink` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `ctime` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `sort` int(10) unsigned NOT NULL,
  `hits` int(10) unsigned NOT NULL COMMENT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_content
-- ----------------------------
INSERT INTO `lz_content` VALUES ('23', 'fsd fas发大水发生的发生的', '0', '0', '', '1362399898', '发生的发撒旦富士达范德萨', '', '发生的发撒旦富士达范德萨', '0', '0');

-- ----------------------------
-- Table structure for `lz_pics`
-- ----------------------------
DROP TABLE IF EXISTS `lz_pics`;
CREATE TABLE `lz_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `place` smallint(4) NOT NULL,
  `sort` int(10) NOT NULL,
  `ctime` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_pics
-- ----------------------------

-- ----------------------------
-- Table structure for `lz_settings`
-- ----------------------------
DROP TABLE IF EXISTS `lz_settings`;
CREATE TABLE `lz_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(64) NOT NULL DEFAULT '',
  `value` mediumtext NOT NULL,
  `group` varchar(55) NOT NULL DEFAULT 'site',
  `autoload` enum('no','yes') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`,`key`),
  KEY `key` (`key`),
  KEY `autoload` (`autoload`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lz_settings
-- ----------------------------
