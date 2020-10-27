-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  mar. 27 oct. 2020 à 10:02
-- Version du serveur :  8.0.18
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hertz`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id_Clients` bigint(20) NOT NULL AUTO_INCREMENT,
  `Nom_Clients` varchar(255) DEFAULT NULL,
  `Prenom_Clients` varchar(255) DEFAULT NULL,
  `adresse_Clients` varchar(255) DEFAULT NULL,
  `CP_Clients` int(11) DEFAULT NULL,
  `Ville_Clients` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Clients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `id_Clients` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Véhicules` bigint(20) NOT NULL,
  `date_fin_Louer` date DEFAULT NULL,
  `retour_Louer` tinyint(1) DEFAULT NULL,
  `date_debut_Louer` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_Clients`,`id_Véhicules`),
  KEY `FK_Louer_id_Véhicules` (`id_Véhicules`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `véhicules`
--

DROP TABLE IF EXISTS `véhicules`;
CREATE TABLE IF NOT EXISTS `véhicules` (
  `id_Véhicules` bigint(20) NOT NULL AUTO_INCREMENT,
  `type_Véhicules` varchar(255) DEFAULT NULL,
  `modele_Véhicules` varchar(255) DEFAULT NULL,
  `immatriculation_Véhicules` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_Véhicules`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `louer`
--
ALTER TABLE `louer`
  ADD CONSTRAINT `FK_Louer_id_Clients` FOREIGN KEY (`id_Clients`) REFERENCES `clients` (`id_Clients`),
  ADD CONSTRAINT `FK_Louer_id_Véhicules` FOREIGN KEY (`id_Véhicules`) REFERENCES `véhicules` (`id_Véhicules`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
