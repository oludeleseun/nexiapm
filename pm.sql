/*
MySQL Data Transfer
Source Host: localhost
Source Database: pm
Target Host: localhost
Target Database: pm
Date: 23/12/2011 12:10:05 AM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for chat
-- ----------------------------
CREATE TABLE `chat` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL DEFAULT '',
  `ufrom` varchar(255) NOT NULL DEFAULT '',
  `ufrom_id` int(10) NOT NULL DEFAULT '0',
  `userto` varchar(255) NOT NULL DEFAULT '',
  `userto_id` int(10) NOT NULL DEFAULT '0',
  `text` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for company
-- ----------------------------
CREATE TABLE `company` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `phone2` varchar(255) DEFAULT NULL,
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `website` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for company_assigned
-- ----------------------------
CREATE TABLE `company_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `company` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `company` (`company`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for files
-- ----------------------------
CREATE TABLE `files` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` varchar(255) NOT NULL DEFAULT '',
  `project` int(10) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  `user` int(10) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `added` varchar(255) NOT NULL DEFAULT '',
  `datei` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `folder` int(10) NOT NULL,
  `visible` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `name` (`name`),
  KEY `datei` (`datei`),
  KEY `added` (`added`),
  KEY `project` (`project`),
  KEY `tags` (`tags`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for files_attached
-- ----------------------------
CREATE TABLE `files_attached` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file` int(10) unsigned NOT NULL DEFAULT '0',
  `message` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `file` (`file`,`message`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for log
-- ----------------------------
CREATE TABLE `log` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `action` int(1) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  `datum` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `datum` (`datum`),
  KEY `type` (`type`),
  KEY `action` (`action`),
  FULLTEXT KEY `username` (`username`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for messages
-- ----------------------------
CREATE TABLE `messages` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL DEFAULT '',
  `user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `replyto` int(11) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `project` (`project`),
  KEY `user` (`user`),
  KEY `replyto` (`replyto`),
  KEY `tags` (`tags`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for milestones
-- ----------------------------
CREATE TABLE `milestones` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `name` (`name`),
  KEY `end` (`end`),
  KEY `project` (`project`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for milestones_assigned
-- ----------------------------
CREATE TABLE `milestones_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `milestone` (`milestone`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for projectfolders
-- ----------------------------
CREATE TABLE `projectfolders` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(10) unsigned NOT NULL DEFAULT '0',
  `project` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `visible` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `project` (`project`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for projekte
-- ----------------------------
CREATE TABLE `projekte` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `budget` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for projekte_assigned
-- ----------------------------
CREATE TABLE `projekte_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `projekt` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `projekt` (`projekt`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
CREATE TABLE `roles` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `projects` text NOT NULL,
  `tasks` text NOT NULL,
  `milestones` text NOT NULL,
  `messages` text NOT NULL,
  `files` text NOT NULL,
  `chat` text NOT NULL,
  `timetracker` text NOT NULL,
  `admin` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for roles_assigned
-- ----------------------------
CREATE TABLE `roles_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL,
  `role` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for settings
-- ----------------------------
CREATE TABLE `settings` (
  `ID` tinyint(1) DEFAULT '0',
  `name` varchar(255) DEFAULT '',
  `subtitle` varchar(255) DEFAULT '',
  `locale` varchar(6) DEFAULT '',
  `timezone` varchar(60) DEFAULT NULL,
  `dateformat` varchar(50) DEFAULT NULL,
  `template` varchar(255) DEFAULT '',
  `mailnotify` tinyint(1) DEFAULT '1',
  `mailfrom` varchar(255) DEFAULT NULL,
  `mailfromname` varchar(255) DEFAULT NULL,
  `mailmethod` varchar(5) DEFAULT NULL,
  `mailhost` varchar(255) DEFAULT NULL,
  `mailuser` varchar(255) DEFAULT NULL,
  `mailpass` varchar(255) DEFAULT NULL,
  `rssuser` varchar(255) DEFAULT NULL,
  `rsspass` varchar(255) DEFAULT NULL,
  KEY `ID` (`ID`),
  KEY `name` (`name`),
  KEY `subtitle` (`subtitle`),
  KEY `locale` (`locale`),
  KEY `template` (`template`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tasklist
-- ----------------------------
CREATE TABLE `tasklist` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `access` tinyint(4) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `status` (`status`),
  KEY `milestone` (`milestone`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tasks
-- ----------------------------
CREATE TABLE `tasks` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `liste` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `liste` (`liste`),
  KEY `status` (`status`),
  KEY `end` (`end`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for tasks_assigned
-- ----------------------------
CREATE TABLE `tasks_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `task` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `task` (`task`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for timetracker
-- ----------------------------
CREATE TABLE `timetracker` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  `task` int(10) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `started` varchar(255) NOT NULL DEFAULT '',
  `ended` varchar(255) NOT NULL DEFAULT '',
  `hours` float NOT NULL DEFAULT '0',
  `estimatedHours` int(11) DEFAULT NULL,
  `pstatus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`,`project`,`task`),
  KEY `started` (`started`),
  KEY `ended` (`ended`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for user
-- ----------------------------
CREATE TABLE `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `designation` varchar(255) DEFAULT NULL,
  `gradelevel` varchar(255) DEFAULT NULL,
  `tel1` varchar(255) DEFAULT NULL,
  `tel2` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT '',
  `company` int(11) DEFAULT NULL,
  `lastlogin` varchar(255) DEFAULT '',
  `zip` varchar(10) DEFAULT NULL,
  `gender` char(1) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `adress` varchar(255) DEFAULT '',
  `adress2` varchar(255) DEFAULT '',
  `state` varchar(255) DEFAULT '',
  `country` varchar(255) DEFAULT '',
  `tags` varchar(255) DEFAULT '',
  `locale` varchar(6) DEFAULT '',
  `avatar` varchar(255) DEFAULT '',
  `rate` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `name` (`name`),
  KEY `pass` (`pass`),
  KEY `locale` (`locale`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
INSERT INTO `company` VALUES ('1', '3Click Concepts Limited', 'info@3clickconcepts.com', '01-0394482', '01-2948585', '70, Oduntan street', 'Ketu, Lagos', 'Lagos', 'Nigeria', 'www.3clickconcepts.com', '3click.png');
INSERT INTO `company` VALUES ('2', 'Nexia Nigeria', 'info@nexia-ng.com', '09-0393930', '09-0393940', '12, Lusaka Street', 'Wuse Zone 6', 'Abuja', 'Nigeria', 'www.nexia-ng.com', '');
INSERT INTO `company` VALUES ('3', 'Janker Nigeria Limited', 'info@janker.com', '01-3939393', '01-0949494', '12, Hope street Adegbite Lane', 'Victoria Island, Lagos', '', 'Nigeria', 'www.janker.com', '');
INSERT INTO `company` VALUES ('4', 'Dana Air Limited', 'info@dana.com', '09-2039393', '01-2993939', '12, allen avenue', 'Ikeja', 'Lagos', 'Nigeria', 'www.dana.com', 'dana_air.png');
INSERT INTO `company` VALUES ('5', 'Dana Limited', 'info@dana.com', '09-2039393', '01-2993939', '12, allen avenue', 'Ikeja', 'Lagos', 'Nigeria', 'www.dana.com', 'dana.png');
INSERT INTO `company` VALUES ('6', 'Dana Limited', 'info@dana.com', '09-2039393', '01-2993939', '12, allen avenue', 'Ikeja', 'Lagos', 'Nigeria', 'www.dana.com', 'Picture1_776336.jpg');
INSERT INTO `log` VALUES ('1', '0', '', 'admin', 'user', '1', '0', '1311266595');
INSERT INTO `log` VALUES ('2', '1', 'admin', 'Software Development For Obaika', 'projekt', '1', '1', '1311267152');
INSERT INTO `log` VALUES ('3', '1', 'admin', 'admin', 'user', '6', '1', '1311267152');
INSERT INTO `log` VALUES ('4', '1', 'admin', 'admin', 'user', '2', '0', '1311267266');
INSERT INTO `log` VALUES ('5', '1', 'admin', 'Analysis', 'milestone', '1', '1', '1311267707');
INSERT INTO `log` VALUES ('6', '1', 'admin', 'Design', 'milestone', '1', '1', '1311267726');
INSERT INTO `log` VALUES ('7', '1', 'admin', 'Collect Information', 'tasklist', '1', '1', '1311267803');
INSERT INTO `log` VALUES ('8', '1', 'admin', 'Meet with application users', 'tasklist', '1', '1', '1311267883');
INSERT INTO `log` VALUES ('9', '1', 'admin', 'Design UML', 'tasklist', '1', '1', '1311267934');
INSERT INTO `log` VALUES ('10', '1', 'admin', 'Design Interface', 'tasklist', '1', '1', '1311267952');
INSERT INTO `log` VALUES ('11', '1', 'admin', 'Biola Martins', 'user', '1', '0', '1311268596');
INSERT INTO `log` VALUES ('12', '1', 'admin', 'Biola Martins', 'user', '6', '1', '1311268596');
INSERT INTO `log` VALUES ('13', '1', 'admin', 'Test', 'user', '1', '0', '1311268709');
INSERT INTO `log` VALUES ('14', '1', 'admin', 'Test', 'user', '6', '1', '1311268709');
INSERT INTO `log` VALUES ('15', '1', 'admin', 'Test', 'user', '2', '0', '1312823077');
INSERT INTO `log` VALUES ('16', '1', 'admin', 'Biola Martins', 'user', '2', '0', '1312823077');
INSERT INTO `log` VALUES ('17', '1', 'admin', 'admin', 'user', '2', '0', '1312823077');
INSERT INTO `log` VALUES ('18', '1', 'admin', 'Test', 'user', '2', '0', '1312823119');
INSERT INTO `log` VALUES ('19', '1', 'admin', 'Biola Martins', 'user', '2', '0', '1312823119');
INSERT INTO `log` VALUES ('20', '1', 'admin', 'admin', 'user', '2', '0', '1312823119');
INSERT INTO `log` VALUES ('21', '1', 'admin', 'Collect Information', 'tasklist', '5', '1', '1312840092');
INSERT INTO `log` VALUES ('22', '1', 'admin', 'Hello', 'message', '1', '1', '1316243140');
INSERT INTO `log` VALUES ('23', '1', 'admin', 'Ok', 'message', '1', '1', '1316243198');
INSERT INTO `log` VALUES ('24', '1', 'admin', 'Ok', 'message', '2', '1', '1316243263');
INSERT INTO `log` VALUES ('25', '1', 'admin', 'Safe', 'message', '1', '1', '1316243451');
INSERT INTO `log` VALUES ('26', '1', 'admin', 'Analysis', 'milestone', '2', '1', '1324231678');
INSERT INTO `log` VALUES ('27', '1', 'admin', 'Design UML', 'tasklist', '5', '1', '1324231772');
INSERT INTO `log` VALUES ('28', '1', 'admin', 'Analysis', 'milestone', '5', '1', '1324231779');
INSERT INTO `log` VALUES ('29', '1', 'admin', 'Meet with application users', 'tasklist', '5', '1', '1324231779');
INSERT INTO `log` VALUES ('30', '1', 'admin', 'Design', 'milestone', '5', '1', '1324231783');
INSERT INTO `log` VALUES ('31', '1', 'admin', 'Design Interface', 'tasklist', '5', '1', '1324231783');
INSERT INTO `log` VALUES ('32', '1', 'admin', 'Software Development For Obaika', 'projekt', '5', '1', '1324231910');
INSERT INTO `log` VALUES ('60', '1', 'admin', 'company', '2', '0', '0', '1324592826');
INSERT INTO `log` VALUES ('59', '1', 'admin', 'company', '2', '0', '0', '1324592644');
INSERT INTO `log` VALUES ('58', '1', 'admin', 'company', '2', '0', '0', '1324589786');
INSERT INTO `log` VALUES ('57', '1', 'admin', 'company', '2', '0', '0', '1324589692');
INSERT INTO `log` VALUES ('56', '1', 'admin', 'company', '1', '0', '0', '1324589616');
INSERT INTO `log` VALUES ('55', '1', 'admin', 'Software Development For Obaika', 'projekt', '4', '1', '1324555864');
INSERT INTO `log` VALUES ('54', '1', 'admin', '1', 'projekt', '3', '2', '1324555854');
INSERT INTO `log` VALUES ('53', '1', 'admin', 'company', '1', '0', '0', '1324555049');
INSERT INTO `messages` VALUES ('1', '1', 'Hello', 'Just saying hi', '', '1316243140', '1', 'admin', '0', '1');
INSERT INTO `messages` VALUES ('2', '1', 'Ok', 'it is ok to say ok', '', '1316243198', '1', 'admin', '1', '0');
INSERT INTO `messages` VALUES ('3', '1', 'Safe', 'Safely i go', '', '1316243451', '1', 'admin', '0', '2');
INSERT INTO `milestones` VALUES ('1', '1', 'Analysis', '', '1311267707', '1311375600', '0');
INSERT INTO `milestones` VALUES ('2', '1', 'Design', '', '1311267726', '1311548400', '0');
INSERT INTO `projekte` VALUES ('1', 'Software Development For Obaika', 'Project management Software', '1311267152', '1312095600', '1', '0');
INSERT INTO `projekte_assigned` VALUES ('1', '1', '1');
INSERT INTO `projekte_assigned` VALUES ('2', '2', '1');
INSERT INTO `projekte_assigned` VALUES ('3', '3', '1');
INSERT INTO `roles` VALUES ('1', 'Admin', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:3:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;}', 'a:1:{s:3:\"add\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:4:\"read\";i:1;}', 'a:1:{s:3:\"add\";i:1;}');
INSERT INTO `roles` VALUES ('2', 'User', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:0;s:5:\"close\";i:0;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:0;s:5:\"close\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:5:\"close\";i:1;}', 'a:3:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;}', 'a:1:{s:3:\"add\";i:1;}', 'a:4:{s:3:\"add\";i:1;s:4:\"edit\";i:1;s:3:\"del\";i:1;s:4:\"read\";i:0;}', 'a:1:{s:3:\"add\";i:0;}');
INSERT INTO `roles` VALUES ('3', 'Client', 'a:4:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;s:5:\"close\";i:0;}', 'a:4:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;s:5:\"close\";i:0;}', 'a:4:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;s:5:\"close\";i:0;}', 'a:4:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;s:5:\"close\";i:0;}', 'a:3:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;}', 'a:1:{s:3:\"add\";i:0;}', 'a:4:{s:3:\"add\";i:0;s:4:\"edit\";i:0;s:3:\"del\";i:0;s:4:\"read\";i:0;}', 'a:1:{s:3:\"add\";i:0;}');
INSERT INTO `roles_assigned` VALUES ('1', '1', '1');
INSERT INTO `roles_assigned` VALUES ('2', '2', '2');
INSERT INTO `roles_assigned` VALUES ('3', '3', '3');
INSERT INTO `settings` VALUES ('0', '3Click', 'Project Management', 'en', 'Africa/Lagos', 'd.m.Y', 'standard', '1', '3Click@localhost', 'Administrator', 'mail', '', '', '', '', '');
INSERT INTO `tasklist` VALUES ('1', '1', 'Collect Information', '', '1311267803', '0', '0', '1');
INSERT INTO `tasklist` VALUES ('2', '1', 'Meet with application users', '', '1311267883', '0', '0', '1');
INSERT INTO `tasklist` VALUES ('3', '1', 'Design UML', '', '1311267934', '0', '0', '2');
INSERT INTO `tasklist` VALUES ('4', '1', 'Design Interface', '', '1311267952', '0', '0', '2');
INSERT INTO `tasks_assigned` VALUES ('3', '2', '1');
INSERT INTO `user` VALUES ('1', 'admin', '', null, null, '', '', 'd033e22ae348aeb5660fc2140aec35850c4da997', '0', '1324595396', '', '', '', '', '', '', '', '', 'en', '', '2500');
INSERT INTO `user` VALUES ('2', 'Biola Martins', 'biolamartins@gmail.com', null, null, '', '', '6482e88cf393c0667faa74bb2a109ab9531102b0', '3', '', '', '', '', '', '', '', '', '', 'en', '', '2000');
INSERT INTO `user` VALUES ('3', 'Test', 'okaphy@yahoo.com', null, null, '', '', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '0', '1313598433', '', '', '', '', '', '', '', '', 'en', '', '4000');
