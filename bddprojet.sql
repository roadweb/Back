-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 11 Mars 2015 à 11:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `emweb_projet_co`
--

-- --------------------------------------------------------

--
-- Structure de la table `acces`
--

CREATE TABLE IF NOT EXISTS `acces` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_page`,`id_post`,`id_user`),
  KEY `FK_Acces_id_post` (`id_post`),
  KEY `FK_Acces_id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int(11) NOT NULL AUTO_INCREMENT,
  `page_link` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `cat_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `page_section` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `page_cat` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `post_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `post_tittle` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `post_visuel` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `post_text` longtext CHARACTER SET utf8 COLLATE utf8_bin,
  `tag_label` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tag_label_2` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tag_label_3` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `relatedpost`
--

CREATE TABLE IF NOT EXISTS `relatedpost` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `id_post_RelatedPost` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `users_infos`
--

CREATE TABLE IF NOT EXISTS `users_infos` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_log` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_pwd` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_email` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_city` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_country` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_bday` date DEFAULT NULL,
  `user_avatar` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `user_compte` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `date_subscribe` date DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `acces`
--
ALTER TABLE `acces`
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
