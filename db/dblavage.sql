-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 24 oct. 2019 à 13:12
-- Version du serveur :  5.7.21
-- Version de PHP :  7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dblavage`
--

-- --------------------------------------------------------

--
-- Structure de la table `lavage_prestation`
--

DROP TABLE IF EXISTS `lavage_prestation`;
CREATE TABLE IF NOT EXISTS `lavage_prestation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `lavage_prestation`
--

INSERT INTO `lavage_prestation` (`id`, `libelle`, `prix`, `date`) VALUES
(1, 'lavage simple', '2000', '2019-10-18 00:00:00'),
(2, 'vidange', '3400', '2019-10-19 10:06:12'),
(3, 'lavage complet', '9000', '2019-10-19 10:10:33');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `roles` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_active`, `roles`) VALUES
(1, 'user@gmail.com', '$2y$13$Horz2zg0ECjoJ0l.3AXsa.4xtwBneYCTTIbJ0oMObyjImvStnV9O6', 1, 'a:1:{i:0;s:9:\"ROLE_USER\";}'),
(2, 'admin@gmail.com', '$2y$13$tG41JA/Ob/fnwKLX6aZT.uj4cG2vdB7acfFBbZvFnme/N6Pyuqsy.', 1, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}'),
(3, 'admin1@gmail.com', '$2y$13$DsDHnllngS8JDkbi/u.I1OaI7/lZqhqRb9mWMAY86qP81q6nfdvti', 1, 'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
