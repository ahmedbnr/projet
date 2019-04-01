-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 01 avr. 2019 à 22:46
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pidev`
--

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(255) NOT NULL,
  `salaire` double NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id`, `description`, `salaire`, `nom`) VALUES
(17, 'client qui a seulement la permission de visiter le FO, Consulter son compte, Modifier ses informations et dÃ©sactiver son compte', 1200, 'client'),
(16, 'Gerer les employes (Livreurs & techniciens) et consulter les comptes clients.', 0, 'admin'),
(15, 'creation des admins, modifier leurs informaions et les desactiver', 0, 'super_admin'),
(14, 'consulter compte et modifier leur informations', 600, 'livreur'),
(13, 'consulter compte et modifier leur informations', 1000, 'technicien');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `date_nais` varchar(255) DEFAULT NULL,
  `region` varchar(255) DEFAULT NULL,
  `ville` varchar(255) DEFAULT NULL,
  `codePostal` int(8) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `enabled` varchar(1) DEFAULT '0',
  `sexe` varchar(255) DEFAULT NULL,
  `dateDebutContrat` varchar(255) DEFAULT NULL,
  `dateFinContrat` varchar(255) DEFAULT NULL,
  `disponibilite` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Role` (`role`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `cin`, `username`, `password`, `role`, `email`, `numero`, `nom`, `prenom`, `date_nais`, `region`, `ville`, `codePostal`, `degree`, `photo`, `token`, `enabled`, `sexe`, `dateDebutContrat`, `dateFinContrat`, `disponibilite`) VALUES
(4, '11381459', 'myukua', 'azerty123', 15, 'kafanasyev25@gmail.com', 'num', 'Greenwood', 'bannour', '1996-03-01', 'Pennsylvania', 'Philadelphia', 19112, NULL, NULL, '', '1', 'Homme', NULL, NULL, NULL),
(19, '11111111', 'admin@Admin.com', '11111111', 16, 'admin@Admin.com', NULL, 'admin', 'admin', '1997-06-01', 'mahdia', 'mahdia', 5111, NULL, NULL, '', '1', 'Homme', NULL, NULL, NULL),
(7, '12345678', 'myukua4', 'azerty123', 17, 'kafanasyev255@gmail.com', '24496044', 'ok', 'bb', '1995-02-01', 'Pennsylvania', 'Philadelphia', 1911, NULL, 'timthumb.jpg', '', '0', 'Homme', NULL, NULL, NULL),
(45, '11808989', 'DAAAARK', 'AZERTY', 17, 'ahmed.bannour@esprit.tn', '50515253', 'BEN', 'JAAFOUR', '1997-06-01', 'mahdia', 'sousse', 5100, NULL, 'tableUser1.png', '', '1', 'Homme', NULL, NULL, NULL),
(11, '11301459', 'ahmed', 'azqswx', 17, 'j626821@nwytg.net', '52639852', 'Smith', 'Steve', '2019-03-19', 'Pennsylvania', 'Philadelphia', 1911, NULL, NULL, '', '1', 'Homme', NULL, NULL, NULL),
(18, '11806545', 'souhail', 'souhail123', 17, 'souhailtouzi95@gmail.com', '54979194', 'touzi', 'souhail', '1995-04-08', 'mahdia', 'mahdia', 5111, NULL, NULL, NULL, '1', 'Homme', NULL, NULL, NULL),
(41, '16124565', 'sami', 'sami123++', 17, 'souhail.touzi@esprit.tn', '54979197', 'sami', 'touzi', '1995-04-08', 'mahdia', 'Mahdia', 5111, NULL, NULL, 'n45gFG3C2WGXxUkA4y5Z', '0', 'Homme', NULL, NULL, NULL),
(22, '11223344', 'ahmed.bannour1997@esprit.tn', '123456789', 14, 'ahmed.bannour1997@esprit.tn', NULL, 'jannet bent jannet', '3arrafa', '1997-01-02', 'sahel', 'sousse', 5111, 'Student', NULL, NULL, '1', 'Homme', '2009-01-02', '2022-01-02', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
