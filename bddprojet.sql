-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Mars 2015 à 20:43
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `emweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(10) NOT NULL AUTO_INCREMENT,
  `article_picture` varchar(150) NOT NULL,
  `article_video` varchar(150) NOT NULL,
  `article_citation` varchar(250) NOT NULL,
  `page_id` int(10) NOT NULL,
  PRIMARY KEY (`article_id`),
  UNIQUE KEY `FK_articles_page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `autorisations`
--

CREATE TABLE IF NOT EXISTS `autorisations` (
  `auto_id` int(2) NOT NULL AUTO_INCREMENT,
  `auto_name` varchar(10) NOT NULL,
  `auto_create` tinyint(1) NOT NULL,
  `auto_read` tinyint(1) NOT NULL,
  `auto_update` tinyint(1) NOT NULL,
  `auto_delete` tinyint(1) NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `autorisations`
--

INSERT INTO `autorisations` (`auto_id`, `auto_name`, `auto_create`, `auto_read`, `auto_update`, `auto_delete`) VALUES
(1, 'r', 0, 1, 0, 0),
(2, 'cr', 1, 1, 0, 0),
(3, 'cru', 1, 1, 1, 0),
(4, 'crud', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `commentaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire_level` varchar(200) NOT NULL,
  `page_id` int(10) NOT NULL,
  PRIMARY KEY (`commentaire_id`),
  UNIQUE KEY `FK_commentaires_page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(10) NOT NULL AUTO_INCREMENT,
  `page_title` varchar(50) NOT NULL,
  `page_pub_date` datetime NOT NULL,
  `page_text` varchar(1024) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`page_id`),
  UNIQUE KEY `FK_pages_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `pages_tags`
--

CREATE TABLE IF NOT EXISTS `pages_tags` (
  `page_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`page_id`,`tag_id`),
  KEY `FK_pages_tags_page_id` (`page_id`),
  KEY `FK_pages_tags_tag_id` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_picture` varchar(150) NOT NULL,
  `post_video` varchar(150) NOT NULL,
  `post_sound` varchar(150) NOT NULL,
  `post_flux_rss` varchar(150) NOT NULL,
  `page_id` int(10) NOT NULL,
  PRIMARY KEY (`post_id`),
  UNIQUE KEY `FK_posts_page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(30) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'user_public'),
(2, 'user_abo'),
(3, 'emweb_student'),
(4, 'emweb_abo'),
(5, 'user_admin');

-- --------------------------------------------------------

--
-- Structure de la table `roles_autorisations`
--

CREATE TABLE IF NOT EXISTS `roles_autorisations` (
  `role_id` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL,
  PRIMARY KEY (`role_id`,`auto_id`),
  KEY `FK_role_auto_role_id` (`role_id`),
  KEY `FK_role_auto_auto_id` (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(10) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(30) NOT NULL,
  `tag_count` int(10) NOT NULL,
  PRIMARY KEY (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_log` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `user_email` varchar(80) NOT NULL,
  `user_adr` varchar(100) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_bday` date NOT NULL,
  `user_date_abo` date NOT NULL,
  `user_avatar` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Structure de la table `users_roles`
--

CREATE TABLE IF NOT EXISTS `users_roles` (
  `user_id` int(10) NOT NULL,
  `role_id` int(10) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `FK_users_roles_role_id` (`role_id`),
  KEY `FK_users_roles_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
