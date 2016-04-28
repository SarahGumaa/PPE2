-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 27 Avril 2016 à 15:39
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `base v1`
--
CREATE DATABASE IF NOT EXISTS `base v1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `base v1`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--
-- Création :  Jeu 14 Avril 2016 à 11:49
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadmin` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--
-- Création :  Ven 15 Avril 2016 à 07:21
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(100) NOT NULL,
  `supCat` tinyint(4) NOT NULL,
  `img` varchar(100) NOT NULL,
  `imge` longblob,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCat`, `nomCat`, `supCat`, `img`, `imge`) VALUES
(1, 'produit', 0, '', ''),
(2, 'informatique', 1, '', ''),
(3, 'meuble', 1, '', ''),
(4, 'ecran', 2, '', NULL),
(5, 'bureau', 3, '', NULL),
(6, 'ecran', 2, '', NULL),
(7, 'bureau', 3, '', NULL),
(8, 'ecran', 2, '', NULL),
(9, 'ecran', 2, '', NULL),
(10, 'ecran', 2, '', NULL),
(11, 'ecran', 2, '', NULL),
(12, 'ecran', 2, '', NULL),
(13, 'ecran', 2, '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--
-- Création :  Jeu 14 Avril 2016 à 11:49
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_Com` int(11) NOT NULL,
  `Date_Com` datetime NOT NULL,
  `id_Emp` int(11) NOT NULL,
  PRIMARY KEY (`id_Com`),
  KEY `FK_commande_id_Emp` (`id_Emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--
-- Création :  Ven 15 Avril 2016 à 07:27
--

DROP TABLE IF EXISTS `contient`;
CREATE TABLE IF NOT EXISTS `contient` (
  `Quantite` int(11) NOT NULL,
  `id_Com` int(11) NOT NULL,
  `Reference` int(11) NOT NULL,
  PRIMARY KEY (`id_Com`,`Reference`),
  KEY `FK_contient_Reference` (`Reference`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `couleur`
--
-- Création :  Ven 15 Avril 2016 à 07:09
--

DROP TABLE IF EXISTS `couleur`;
CREATE TABLE IF NOT EXISTS `couleur` (
  `codeCouleur` varchar(9) NOT NULL,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`codeCouleur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--
-- Création :  Jeu 14 Avril 2016 à 11:49
--

DROP TABLE IF EXISTS `employer`;
CREATE TABLE IF NOT EXISTS `employer` (
  `id_Emp` int(11) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `prenom_emp` varchar(20) NOT NULL,
  `mail_emp` varchar(50) NOT NULL,
  `telephone_mobile_emp` char(10) NOT NULL,
  `Telephone_fix_emp` char(10) DEFAULT NULL,
  `pseudo` varchar(25) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Emp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--
-- Création :  Ven 15 Avril 2016 à 07:51
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int(11) NOT NULL,
  `Designation` varchar(20) NOT NULL,
  `Prix_unitaire` decimal(4,0) NOT NULL,
  `Categorie` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `idCat` tinyint(4) NOT NULL,
  `codeCouleur` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`idProd`),
  KEY `FK_produit_code` (`codeCouleur`),
  KEY `FK_categorie_idCat` (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`idProd`, `Designation`, `Prix_unitaire`, `Categorie`, `Image`, `idCat`, `codeCouleur`) VALUES
(1, 'lg lcd', '11', 'informatique', 'moniteur.jpg', 4, NULL),
(2, 'saracroche', '10', 'silence', '', 4, NULL),
(3, 'saram', '10', 'slence', '', 4, NULL);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_commande_id_Emp` FOREIGN KEY (`id_Emp`) REFERENCES `employer` (`id_Emp`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_contient_id_Com` FOREIGN KEY (`id_Com`) REFERENCES `commande` (`id_Com`),
  ADD CONSTRAINT `FK_contient_Reference` FOREIGN KEY (`Reference`) REFERENCES `produit` (`idProd`) ON UPDATE NO ACTION;

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_categorie_idCat` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`),
  ADD CONSTRAINT `FK_produit_code` FOREIGN KEY (`codeCouleur`) REFERENCES `couleur` (`codeCouleur`);
