-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 29 oct. 2020 à 15:26
-- Version du serveur :  10.4.10-MariaDB
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
  `Nom_Clients` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `Prenom_Clients` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `adresse_Clients` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `CP_Clients` int(11) DEFAULT NULL,
  `Ville_Clients` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_Clients`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_Clients`, `Nom_Clients`, `Prenom_Clients`, `adresse_Clients`, `CP_Clients`, `Ville_Clients`) VALUES
(2, 'DECORCE', 'Yann', '7 rue des murailles', 39800, 'BONNEFONTAINE'),
(3, 'Merucci', 'Alain', '2 rue Montaigu', 39000, 'LONS LE SAUNIER'),
(4, 'Merucci', 'Alain', '2 rue Montaigu', 39000, 'LONS LE SAUNIER'),
(5, 'BARBONE', 'Camille', '1rue du Php', 39500, 'SAINT CLAUDE');

-- --------------------------------------------------------

--
-- Structure de la table `louer`
--

DROP TABLE IF EXISTS `louer`;
CREATE TABLE IF NOT EXISTS `louer` (
  `id_location` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Clients` bigint(20) NOT NULL,
  `id_Vehicules` bigint(20) NOT NULL,
  `date_fin_Louer` date NOT NULL,
  `retour_Louer` tinyint(4) NOT NULL,
  `date_debut_Louer` date NOT NULL,
  PRIMARY KEY (`id_location`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `louer`
--

INSERT INTO `louer` (`id_location`, `id_Clients`, `id_Vehicules`, `date_fin_Louer`, `retour_Louer`, `date_debut_Louer`) VALUES
(1, 2, 4, '2020-10-13', 1, '2020-10-12'),
(2, 5, 4, '2020-10-31', 0, '2020-10-31');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `id_Vehicules` bigint(20) NOT NULL AUTO_INCREMENT,
  `type_Vehicules` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `modele_Vehicules` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `immatriculation_Vehicules` varchar(9) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id_Vehicules`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id_Vehicules`, `type_Vehicules`, `modele_Vehicules`, `immatriculation_Vehicules`) VALUES
(2, 'VL', 'fiat 500', 'AA-725-AA'),
(4, 'VU', 'Peugeot expert 12m3', 'CC-258-CC'),
(5, 'VL', 'Peugeot 308', 'ZA-159-AZ'),
(6, 'VL', 'Peugeot 5008', 'AQ-753-QS'),
(7, 'VL', 'Peugeot 5008', 'AS-148-AQ'),
(8, 'VL', 'Peugeot 308', 'AA-111-AA'),
(9, 'VL', 'Peugeot 308', 'BB-222-BB'),
(10, 'VL', 'Peugeot 308', 'CC-357-CC'),
(11, 'VL', 'Peugeot 308', 'GH-987-FR'),
(12, 'VL', 'Peugeot 308', 'SD-254-FC'),
(13, 'VL', 'Peugeot 308', 'SD-254-FC'),
(14, 'VL', 'Peugeot 308', 'SD-254-FC'),
(15, 'VL', 'Peugeot 308', 'SD-254-FC'),
(16, 'VL', 'Peugeot 308', 'SD-254-FC'),
(17, 'VL', 'Peugeot 308', 'SD-254-FC'),
(21, 'VL', 'Fiat 500', 'QQ-666-QQ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
