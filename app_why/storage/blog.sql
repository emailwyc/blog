/*
Navicat MySQL Data Transfer

Source Server         : my
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : blog

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-03-10 18:50:21
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
-- Table structure for `album`
-- ----------------------------
DROP TABLE IF EXISTS `album`;
CREATE TABLE `album` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL COMMENT '相册id',
  `img` varchar(50) NOT NULL DEFAULT '' COMMENT '图片地址',
  `img_icon` varchar(50) NOT NULL COMMENT 'icon地址',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '图片名称',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album
-- ----------------------------

-- ----------------------------
-- Table structure for `album_class`
-- ----------------------------
DROP TABLE IF EXISTS `album_class`;
CREATE TABLE `album_class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '名称',
  `photo_num` int(11) NOT NULL DEFAULT '0' COMMENT '图片数量',
  `icon` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1:显示0：不显示',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '当前时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album_class
-- ----------------------------

-- ----------------------------
-- Table structure for `album_msg`
-- ----------------------------
DROP TABLE IF EXISTS `album_msg`;
CREATE TABLE `album_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL COMMENT '相册id',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `avatar` varchar(50) NOT NULL DEFAULT '' COMMENT '头像',
  `emai` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `website` varchar(50) NOT NULL DEFAULT '' COMMENT '网站',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `address` varchar(50) NOT NULL COMMENT '发表地',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of album_msg
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article_class
-- ----------------------------
INSERT INTO `article_class` VALUES ('1', '杂乱无章', '0');
INSERT INTO `article_class` VALUES ('2', '系统架构', '0');
INSERT INTO `article_class` VALUES ('3', '前端设计', '0');
INSERT INTO `article_class` VALUES ('4', 'php语言', '0');
INSERT INTO `article_class` VALUES ('5', '数据库', '0');
INSERT INTO `article_class` VALUES ('6', '游戏开发', '0');
INSERT INTO `article_class` VALUES ('7', '网页设计', '0');
INSERT INTO `article_class` VALUES ('8', '搜索引擎', '0');

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
-- Table structure for `download`
-- ----------------------------
DROP TABLE IF EXISTS `download`;
CREATE TABLE `download` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '内容',
  `icon` varchar(100) NOT NULL DEFAULT '' COMMENT 'icon',
  `dnum` int(11) NOT NULL DEFAULT '0' COMMENT '下载次数',
  `durl` varchar(100) NOT NULL COMMENT '下载url',
  `pv` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `uptime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ctime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of download
-- ----------------------------

-- ----------------------------
-- Table structure for `download_msg`
-- ----------------------------
DROP TABLE IF EXISTS `download_msg`;
CREATE TABLE `download_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `did` int(11) NOT NULL COMMENT 'download_id',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `avatar` varchar(50) NOT NULL DEFAULT '' COMMENT '头像',
  `emai` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `website` varchar(50) NOT NULL DEFAULT '' COMMENT '网站',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `address` varchar(50) NOT NULL COMMENT '发表地',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of download_msg
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
-- Table structure for `leaving_msg`
-- ----------------------------
DROP TABLE IF EXISTS `leaving_msg`;
CREATE TABLE `leaving_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `lid` int(11) NOT NULL COMMENT '留言id',
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `avatar` varchar(50) NOT NULL DEFAULT '' COMMENT '头像',
  `emai` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `website` varchar(50) NOT NULL DEFAULT '' COMMENT '网站',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `address` varchar(50) NOT NULL COMMENT '发表地',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of leaving_msg
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of message_rolling
-- ----------------------------
INSERT INTO `message_rolling` VALUES ('1', '欢迎来到SooneBaby博客家园，如有需求请留言！', '0', '1999999999', '2017-03-10 12:07:12');
INSERT INTO `message_rolling` VALUES ('2', '内容如有侵犯，请立即联系管理员删除', '0', '1999999999', '2017-03-10 12:48:20');
INSERT INTO `message_rolling` VALUES ('3', '本站内容仅供学习和参阅，不做任何商业用途。', '0', '1999999999', '2017-03-10 13:08:42');

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
-- Table structure for `saying`
-- ----------------------------
DROP TABLE IF EXISTS `saying`;
CREATE TABLE `saying` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '说说内容',
  `comnum` int(11) NOT NULL DEFAULT '0' COMMENT '评论数量',
  `ip` varchar(20) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `pv` int(11) NOT NULL DEFAULT '0' COMMENT '浏览量',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saying
-- ----------------------------

-- ----------------------------
-- Table structure for `saying_comment`
-- ----------------------------
DROP TABLE IF EXISTS `saying_comment`;
CREATE TABLE `saying_comment` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `avatar` varchar(50) NOT NULL DEFAULT '' COMMENT '头像',
  `emai` varchar(50) NOT NULL DEFAULT '' COMMENT '邮箱',
  `website` varchar(50) NOT NULL DEFAULT '' COMMENT '网站',
  `content` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `address` varchar(50) NOT NULL COMMENT '发表地',
  `ip` varchar(30) NOT NULL DEFAULT '' COMMENT 'ip地址',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of saying_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `subscribe`
-- ----------------------------
DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subscribe
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
-- Table structure for `system_base`
-- ----------------------------
DROP TABLE IF EXISTS `system_base`;
CREATE TABLE `system_base` (
  `mark` varchar(50) NOT NULL COMMENT '标记',
  `value` varchar(50) NOT NULL DEFAULT '' COMMENT '值',
  `init` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否初始化的时候显示',
  UNIQUE KEY `mark` (`mark`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_base
-- ----------------------------
INSERT INTO `system_base` VALUES ('author', 'SooneBaby', '1');
INSERT INTO `system_base` VALUES ('avatar', '/ui/system/image/soonebaby.jpg', '1');
INSERT INTO `system_base` VALUES ('desc', '爱笑的女孩运气都不会太差！', '1');
INSERT INTO `system_base` VALUES ('stime', '1485878400', '1');

-- ----------------------------
-- Table structure for `system_variable`
-- ----------------------------
DROP TABLE IF EXISTS `system_variable`;
CREATE TABLE `system_variable` (
  `mark` varchar(50) NOT NULL COMMENT 'key',
  `value` varchar(100) NOT NULL COMMENT '值',
  `init` tinyint(4) NOT NULL DEFAULT '1' COMMENT '系统是否自动调取',
  PRIMARY KEY (`mark`),
  KEY `init` (`init`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of system_variable
-- ----------------------------
INSERT INTO `system_variable` VALUES ('artnum', '0', '1');
INSERT INTO `system_variable` VALUES ('comnum', '0', '1');
INSERT INTO `system_variable` VALUES ('leavenum', '0', '1');
INSERT INTO `system_variable` VALUES ('photonum', '0', '1');
INSERT INTO `system_variable` VALUES ('resnum', '0', '1');
INSERT INTO `system_variable` VALUES ('saynum', '0', '1');
INSERT INTO `system_variable` VALUES ('visitnum', '0', '1');

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

-- ----------------------------
-- Table structure for `visit_logs`
-- ----------------------------
DROP TABLE IF EXISTS `visit_logs`;
CREATE TABLE `visit_logs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT '访问id',
  `ip` varchar(20) NOT NULL COMMENT 'ip',
  `addr` varchar(50) NOT NULL COMMENT '地址',
  `ct` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `ct` (`ct`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of visit_logs
-- ----------------------------
