-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 14 Mars 2015 à 10:56
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
-- Structure de la table `acces`
--

CREATE TABLE IF NOT EXISTS `acces` (
  `id_compte` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  PRIMARY KEY (`id_compte`,`id_page`,`id_post`,`id_comment`),
  KEY `FK_Acces_id_compte` (`id_compte`),
  KEY `FK_Acces_id_page` (`id_page`),
  KEY `FK_Acces_id_post` (`id_post`),
  KEY `FK_Acces_id_comment` (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commenter`
--

CREATE TABLE IF NOT EXISTS `commenter` (
  `id_post` int(11) NOT NULL,
  `id_comment` int(11) NOT NULL,
  `date_comment` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_post`,`id_comment`),
  KEY `FK_Commenter_id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `comment_text` varchar(1024) NOT NULL,
  PRIMARY KEY (`id_comment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `comptes`
--

CREATE TABLE IF NOT EXISTS `comptes` (
  `id_compte` int(11) NOT NULL AUTO_INCREMENT,
  `compte_name` varchar(20) NOT NULL,
  `droits_admin` varchar(20) NOT NULL,
  `droits_blog` varchar(20) NOT NULL,
  `droits_forum` varchar(20) NOT NULL,
  `droits_tuto` varchar(20) NOT NULL,
  `droits_exo` varchar(20) NOT NULL,
  `droits_cv` varchar(20) NOT NULL,
  `droits_annuaire` varchar(20) NOT NULL,
  PRIMARY KEY (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `liste_tags`
--

CREATE TABLE IF NOT EXISTS `liste_tags` (
  `id_post` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL,
  PRIMARY KEY (`id_post`,`id_tag`),
  UNIQUE KEY `FK_Liste_tags_id_post` (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `navigation`
--

CREATE TABLE IF NOT EXISTS `navigation` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_page`,`id_post`,`id_user`),
  KEY `FK_Navigation_id_post` (`id_post`),
  KEY `FK_Navigation_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `page_link` varchar(255) DEFAULT NULL,
  `page_cat` varchar(50) DEFAULT NULL,
  `page_section` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(50) DEFAULT NULL,
  `post_tittle` varchar(100) DEFAULT NULL,
  `post_visuel` varchar(255) DEFAULT NULL,
  `post_text` longtext,
  `tag_label` varchar(50) DEFAULT NULL,
  `tag_label_2` varchar(50) DEFAULT NULL,
  `tag_label_3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `publications`
--

CREATE TABLE IF NOT EXISTS `publications` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `publication_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id_post`,`id_user`),
  KEY `FK_Publications_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `relatedpost`
--

CREATE TABLE IF NOT EXISTS `relatedpost` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_post_RelatedPost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `souscriptions`
--

CREATE TABLE IF NOT EXISTS `souscriptions` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `id_compte` int(11) NOT NULL,
  `date_inscription` datetime NOT NULL,
  PRIMARY KEY (`id_user`,`id_compte`),
  KEY `FK_Souscription_id_compte` (`id_compte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id_tag` int(11) NOT NULL AUTO_INCREMENT,
  `tag_name` varchar(37) NOT NULL,
  `tag_qte` int(11) NOT NULL,
  PRIMARY KEY (`id_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users_infos`
--

CREATE TABLE IF NOT EXISTS `users_infos` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_last_name` varchar(50) DEFAULT NULL,
  `user_first_name` varchar(50) DEFAULT NULL,
  `user_log` varchar(50) DEFAULT NULL,
  `user_pwd` varchar(50) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_city` varchar(50) DEFAULT NULL,
  `user_country` varchar(50) DEFAULT NULL,
  `user_bday` date DEFAULT NULL,
  `user_avatar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `navigation`
--
ALTER TABLE `navigation`
  ADD CONSTRAINT `FK_Acces_id_page` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`),
  ADD CONSTRAINT `FK_Acces_id_post` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `FK_Acces_id_user` FOREIGN KEY (`id_user`) REFERENCES `users_infos` (`id_user`);

--
-- Contraintes pour la table `publications`
--
ALTER TABLE `publications`
  ADD CONSTRAINT `FK_Publications_id_post` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`),
  ADD CONSTRAINT `FK_Publications_id_user` FOREIGN KEY (`id_user`) REFERENCES `users_infos` (`id_user`);

--
-- Contraintes pour la table `relatedpost`
--
ALTER TABLE `relatedpost`
  ADD CONSTRAINT `FK_RelatedPost_id_post` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id_post`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
