-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 21 fév. 2018 à 22:15
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rwf_trombi`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

DROP TABLE IF EXISTS `apprenants`;
CREATE TABLE IF NOT EXISTS `apprenants` (
  `id_appr` int(11) NOT NULL AUTO_INCREMENT,
  `nom_appr` varchar(50) NOT NULL,
  `photo_appr` varchar(150) NOT NULL,
  PRIMARY KEY (`id_appr`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`id_appr`, `nom_appr`, `photo_appr`) VALUES
(1, 'LAMBERT JASON', './images/IMG_1079.jpg'),
(2, 'MONROUX ERIC', './images/IMG_1066.jpg'),
(3, 'CHAMPALOUX BENJAMIN', './images/IMG_1094.jpg'),
(4, 'DELAPRE VALENTIN', './images/IMG_1098.jpg'),
(5, 'FAUCHER ALEXIS', './images/IMG_1069.jpg'),
(6, 'NDOUA SERGE', './images/IMG_1087.jpg'),
(7, 'RIVET CHLOEE', './images/IMG_1085.jpg'),
(9, 'GAUDUCHEAU JULIEN', './images/IMG_1091.jpg'),
(10, 'HORYSA KARINE', './images/IMG_1101.jpg'),
(11, 'LADONSKI GUILLAUME', './images/IMG_1076.jpg'),
(12, 'LECOUSTRE ANTHONY', './images/IMG_1099.jpg'),
(13, 'LEFEVRE JOHANN', './images/IMG_1075.jpg'),
(14, 'MAROIS CEDRIC', './images/IMG_1097.jpg'),
(15, 'MESNIER ERIC', './images/IMG_1083.jpg'),
(16, 'MICHEL MARIE', './images/IMG_1068.jpg'),
(17, 'MONFEROUX WILLIAM', './images/IMG_1071.jpg'),
(18, 'MONTHAUDIE PIERRE', './images/IMG_1093.jpg'),
(19, 'OLIVIER MARYLENE', '.\\images\\Olivier.jpg'),
(20, 'POYAU YOANN', './images/IMG_1100.jpg'),
(21, 'PRESTAT ROXANE', './images/IMG_1089.jpg'),
(22, 'THUILIER MICHAEL', './images/IMG_1074.jpg'),
(23, 'ALANDETTE VANESSA', './images/IMG_1077.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `formateurs`
--

DROP TABLE IF EXISTS `formateurs`;
CREATE TABLE IF NOT EXISTS `formateurs` (
  `id_formateur` int(3) NOT NULL AUTO_INCREMENT,
  `nom_formateur` varchar(50) NOT NULL,
  `photo_formateur` varchar(50) NOT NULL,
  PRIMARY KEY (`id_formateur`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formateurs`
--

INSERT INTO `formateurs` (`id_formateur`, `nom_formateur`, `photo_formateur`) VALUES
(1, 'BRIOUDE REGIS', './images/brioude.jpg'),
(2, 'DEREIX DELAPLANE CATHERINE', './images/Dereix.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
