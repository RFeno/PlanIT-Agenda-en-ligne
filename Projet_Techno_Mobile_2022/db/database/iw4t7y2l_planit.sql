-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 mars 2022 à 07:30
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iw4t7y2l_planit`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `idUser` decimal(3,0) UNSIGNED NOT NULL,
  `startTime` decimal(2,0) UNSIGNED NOT NULL,
  `day` char(10) NOT NULL,
  `idEmploye` decimal(3,0) UNSIGNED NOT NULL,
  `idCompany` decimal(3,0) UNSIGNED NOT NULL,
  `sent` varchar(255) NOT NULL,
  PRIMARY KEY (`idUser`,`idEmploye`,`startTime`,`day`),
  KEY `idEmploye` (`idEmploye`,`idCompany`,`sent`),
  KEY `idCompany` (`idCompany`,`sent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `idCompany` decimal(3,0) UNSIGNED NOT NULL,
  `name` varchar(60) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `idEmployeDefaut` decimal(3,0) UNSIGNED NOT NULL,
  PRIMARY KEY (`idCompany`),
  KEY `idEmployeDefaut` (`idEmployeDefaut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `own`
--

DROP TABLE IF EXISTS `own`;
CREATE TABLE IF NOT EXISTS `own` (
  `idCompany` decimal(3,0) UNSIGNED NOT NULL,
  `idEmploye` decimal(3,0) UNSIGNED NOT NULL,
  PRIMARY KEY (`idCompany`,`idEmploye`),
  KEY `idEmploye` (`idEmploye`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `reason`
--

DROP TABLE IF EXISTS `reason`;
CREATE TABLE IF NOT EXISTS `reason` (
  `idCompany` decimal(3,0) UNSIGNED NOT NULL,
  `duration` decimal(2,0) UNSIGNED NOT NULL,
  `sent` varchar(255) NOT NULL,
  PRIMARY KEY (`idCompany`,`sent`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `idUser` decimal(3,0) UNSIGNED NOT NULL,
  `passwd` varchar(60) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `idEmploye` decimal(3,0) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`idUser`),
  KEY `idEmploye` (`idEmploye`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `passwd`, `mail`, `name`, `firstname`, `idEmploye`) VALUES
('1', '$2y$10$YxQvlh09aszWRqraI9WZxuMslXONkrpBw.9ryF0Nu/TA/3DA3R73C', 'mail@mail.com', 'RFeno', 'Vico', NULL),
('2', '$2y$10$fpj5wp54jR1e/XY000zCo.s7xDjDZeoUkDBfojhtPkJcQvAn1LWqG', 'mail2@mail.com', 'Saviour', 'Adamaheto', NULL),
('3', '$2y$10$1XKfk0gdvrfCIg0as6BnkeaG5.wQkTHK12rF1j1QSadFCAVC3Iaxm', 'mail3@mail.com', 'Guillaume', 'Victor', NULL);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`idEmploye`) REFERENCES `user` (`idEmploye`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`idCompany`,`sent`) REFERENCES `reason` (`idCompany`, `sent`);

--
-- Contraintes pour la table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`idEmployeDefaut`) REFERENCES `user` (`idEmploye`);

--
-- Contraintes pour la table `own`
--
ALTER TABLE `own`
  ADD CONSTRAINT `own_ibfk_1` FOREIGN KEY (`idEmploye`) REFERENCES `user` (`idEmploye`),
  ADD CONSTRAINT `own_ibfk_2` FOREIGN KEY (`idCompany`) REFERENCES `company` (`idCompany`);

--
-- Contraintes pour la table `reason`
--
ALTER TABLE `reason`
  ADD CONSTRAINT `reason_ibfk_1` FOREIGN KEY (`idCompany`) REFERENCES `company` (`idCompany`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
