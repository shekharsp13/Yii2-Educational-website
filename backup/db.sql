SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talentsheart`
--

-- --------------------------------------------------------
--
-- Table structure for table `tbl_user`
--
DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(125) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `image_file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `login` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `login_source` int(11) NOT NULL,    
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_user_profile`
--
DROP TABLE IF EXISTS `tbl_user_profile`;
CREATE TABLE IF NOT EXISTS `tbl_user_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hs` varchar(256) DEFAULT NULL,
  `clg` varchar(256) DEFAULT NULL,
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_user_profile_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_address`
--
DROP TABLE IF EXISTS `tbl_address`;
CREATE TABLE IF NOT EXISTS `tbl_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) DEFAULT NULL,
  `state` varchar(256) DEFAULT NULL,
  `lat` varchar(125) DEFAULT NULL,
  `lng` varchar(125) DEFAULT NULL,	    
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_address_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_blog`
--
DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT FK_blog_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_user_plan`
--
DROP TABLE IF EXISTS `tbl_user_plan`;
CREATE TABLE IF NOT EXISTS `tbl_user_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coupen` varchar(256) DEFAULT NULL,
  `coupen_state` smallint(6) DEFAULT '0',
  `state_id` smallint(6) DEFAULT '0',
  `type_id` int(11) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_user_plan_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_media`
--
DROP TABLE IF EXISTS `tbl_media`;
CREATE TABLE IF NOT EXISTS `tbl_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_type` varchar(256) NOT NULL,
  `model_id` int(11) NOT NULL,
  `size` varchar(256) DEFAULT NULL,
  `ext` varchar(125) DEFAULT NULL,	    
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_media_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_subject`
--
DROP TABLE IF EXISTS `tbl_subject`;
CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text DEFAULT NULL, 
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_subject_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_topic`
--
DROP TABLE IF EXISTS `tbl_topic`;
CREATE TABLE IF NOT EXISTS `tbl_topic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text DEFAULT NULL, 
  `sub_id` int(11) NOT NULL,
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_topic_sub_id FOREIGN KEY (sub_id) REFERENCES tbl_subject(id),
  CONSTRAINT FK_topic_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_subject_test`
--
DROP TABLE IF EXISTS `tbl_subject_test`;
CREATE TABLE IF NOT EXISTS `tbl_subject_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text DEFAULT NULL,
  `sub_id` int(11) NOT NULL,
  `opt_no` int(11) NOT NULL, 
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_subject_test_sub_id FOREIGN KEY (sub_id) REFERENCES tbl_subject(id),
  CONSTRAINT FK_subject_test_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_topic_test`
--
DROP TABLE IF EXISTS `tbl_topic_test`;
CREATE TABLE IF NOT EXISTS `tbl_topic_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` text DEFAULT NULL,
  `sub_id` int(11) NOT NULL,
  `opt_no` int(11) NOT NULL, 
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_topic_test_sub_id FOREIGN KEY (sub_id) REFERENCES tbl_subject(id),
  CONSTRAINT FK_topic_test_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_question`
--
DROP TABLE IF EXISTS `tbl_question`;
CREATE TABLE IF NOT EXISTS `tbl_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model_type` varchar(256) NOT NULL,
  `model_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_question_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `tbl_answer`
--
DROP TABLE IF EXISTS `tbl_answer`;
CREATE TABLE IF NOT EXISTS `tbl_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `que_id` int(11) NOT NULL,
  `option1` text NOT NULL,
  `option2` text NOT NULL,
  `option3` text NOT NULL,
  `option4` text NOT NULL,
  `option5` text DEFAULT NULL,
  `ans` text NOT NULL,
  `ans_opt` int(11) NOT NULL,
  `state_id` smallint(6) DEFAULT '0',
  `type_id` smallint(6) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY(`id`),
  CONSTRAINT FK_answer_created_user FOREIGN KEY (created_by) REFERENCES tbl_user(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;




