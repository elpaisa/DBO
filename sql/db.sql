-- Host: localhost
-- Generation Time: Jul 30, 2013 at 01:51 PM
-- Server version: 5.5.43

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `local`
--

-- --------------------------------------------------------

--
-- Table structure for table `test_users`
--

CREATE TABLE IF NOT EXISTS `test_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(130) COLLATE latin1_spanish_ci NOT NULL,
  `roles` text COLLATE latin1_spanish_ci,
  `teamId` int(11) NOT NULL,
  `api_key` varchar(230) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `api_key` (`api_key`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci AUTO_INCREMENT=12 ;
