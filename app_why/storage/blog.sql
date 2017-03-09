/*
Navicat MySQL Data Transfer

Source Server         : my
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-03-09 19:50:00
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin_user`
-- ----------------------------
DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE `admin_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '管理员id',
  `username` varchar(50) NOT NULL DEFAULT '' COMMENT '用户名称',
  `password` varchar(64) NOT NULL DEFAULT '' COMMENT '用户密码',
  `errornum` int(11) NOT NULL DEFAULT '10' COMMENT '错误次数',
  `ip` varchar(20) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `ct` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_user
-- ----------------------------

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章id',
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '文章标题',
  `content` text NOT NULL COMMENT '文章内容',
  `author` varchar(50) NOT NULL DEFAULT '' COMMENT '作者',
  `author_link` varchar(255) NOT NULL DEFAULT '' COMMENT '作者链接',
  `is_reward` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否打赏',
  `is_hot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否热门',
  `pv` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示',
  `comnum` int(11) NOT NULL DEFAULT '0' COMMENT '评论数量',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------

-- ----------------------------
-- Table structure for `article_class`
-- ----------------------------
DROP TABLE IF EXISTS `article_class`;
CREATE TABLE `article_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文章分类id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '分类名称',
  `number` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文章数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_class
-- ----------------------------

-- ----------------------------
-- Table structure for `article_comment`
-- ----------------------------
DROP TABLE IF EXISTS `article_comment`;
CREATE TABLE `article_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `aid` int(11) NOT NULL COMMENT '文章id',
  `avatar` varchar(50) NOT NULL DEFAULT '' COMMENT '头像',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  `ip` varchar(20) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `address` varchar(50) NOT NULL DEFAULT '' COMMENT '地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `article_tags`
-- ----------------------------
DROP TABLE IF EXISTS `article_tags`;
CREATE TABLE `article_tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL COMMENT '标签id',
  `aid` int(11) NOT NULL COMMENT '文章id',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_tags
-- ----------------------------

-- ----------------------------
-- Table structure for `friend_links`
-- ----------------------------
DROP TABLE IF EXISTS `friend_links`;
CREATE TABLE `friend_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '友情链接id',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `website` varchar(50) NOT NULL DEFAULT '' COMMENT '网站',
  `desc` varchar(500) NOT NULL DEFAULT '' COMMENT '介绍',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0:未审核，1审核通过',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '申请时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of friend_links
-- ----------------------------

-- ----------------------------
-- Table structure for `message_rolling`
-- ----------------------------
DROP TABLE IF EXISTS `message_rolling`;
CREATE TABLE `message_rolling` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(255) NOT NULL DEFAULT '' COMMENT '消息内容',
  `starttime` int(11) NOT NULL DEFAULT '0' COMMENT '开始时间',
  `endtime` int(11) NOT NULL DEFAULT '1999999999' COMMENT '结束时间',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `starttime` (`starttime`),
  KEY `endtime` (`endtime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message_rolling
-- ----------------------------

-- ----------------------------
-- Table structure for `publish_logs`
-- ----------------------------
DROP TABLE IF EXISTS `publish_logs`;
CREATE TABLE `publish_logs` (
  `id` bigint(20) NOT NULL,
  `class` tinyint(4) NOT NULL COMMENT '类别：1文章2说说3图片',
  `content` varchar(50) NOT NULL DEFAULT '' COMMENT '内容',
  `author` varchar(30) NOT NULL DEFAULT '' COMMENT '作者',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of publish_logs
-- ----------------------------

-- ----------------------------
-- Table structure for `swiper_slide`
-- ----------------------------
DROP TABLE IF EXISTS `swiper_slide`;
CREATE TABLE `swiper_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT '' COMMENT '标题',
  `img` varchar(255) DEFAULT '' COMMENT '图片地址',
  `link` varchar(255) DEFAULT '' COMMENT '链接地址',
  `position` varchar(50) NOT NULL COMMENT '位置',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `position` (`position`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of swiper_slide
-- ----------------------------

-- ----------------------------
-- Table structure for `system_variable`
-- ----------------------------
DROP TABLE IF EXISTS `system_variable`;
CREATE TABLE `system_variable` (
  `mark` varchar(50) NOT NULL COMMENT '标记',
  `value` varchar(50) NOT NULL DEFAULT '' COMMENT '值',
  `init` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否初始化的时候显示',
  UNIQUE KEY `mark` (`mark`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_variable
-- ----------------------------

-- ----------------------------
-- Table structure for `tags_cloud`
-- ----------------------------
DROP TABLE IF EXISTS `tags_cloud`;
CREATE TABLE `tags_cloud` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '标签云',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '标签云名称',
  `number` int(11) NOT NULL DEFAULT '0' COMMENT '数量',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tags_cloud
-- ----------------------------
