-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Mai 2016 à 09:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `base v12`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mail` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCat` tinyint(4) NOT NULL AUTO_INCREMENT,
  `nomCat` varchar(20) NOT NULL,
  `supCat` tinyint(4) NOT NULL,
  `img` varchar(20) NOT NULL,
  `imgb` blob NOT NULL,
  PRIMARY KEY (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `idCmd` int(11) NOT NULL AUTO_INCREMENT,
  `dateCmd` date NOT NULL,
  `idEmp` int(11) NOT NULL,
  PRIMARY KEY (`idCmd`),
  KEY `idEmp` (`idEmp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `employer`
--

CREATE TABLE IF NOT EXISTS `employer` (
  `idEmp` int(11) NOT NULL AUTO_INCREMENT,
  `nomEmp` varchar(20) NOT NULL,
  `prenomEmp` varchar(20) NOT NULL,
  `mailEmp` varchar(40) NOT NULL,
  `telFixEmp` varchar(20) NOT NULL,
  `telMobEmp` varchar(20) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `photoimg` blob NOT NULL,
  PRIMARY KEY (`idEmp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `idProd` int(11) NOT NULL AUTO_INCREMENT,
  `idCat` tinyint(4) NOT NULL,
  `design` varchar(20) NOT NULL,
  `descripRap` tinytext NOT NULL,
  `descripDet` text NOT NULL,
  `QStock` int(11) NOT NULL,
  `img` varchar(20) NOT NULL,
  `imgb` blob NOT NULL,
  PRIMARY KEY (`idProd`),
  KEY `idCat` (`idCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idEmp`) REFERENCES `employer` (`idEmp`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `produit_ibfk_1` FOREIGN KEY (`idCat`) REFERENCES `categorie` (`idCat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
