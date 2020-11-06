-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 06 nov. 2020 à 15:54
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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id_Clients`, `Nom_Clients`, `Prenom_Clients`, `adresse_Clients`, `CP_Clients`, `Ville_Clients`) VALUES
(2, 'DECORCE', 'Yann', '7 rue des murailles', 39800, 'BONNEFONTAINE'),
(3, 'Merucci', 'Alain', '2 rue Montaigu', 39000, 'LONS LE SAUNIER'),
(4, 'Merucci', 'Alain', '2 rue Montaigu', 39000, 'LONS LE SAUNIER'),
(5, 'BARBONE', 'Camille', '1rue du Php', 39500, 'SAINT CLAUDE'),
(6, 'CORDIER', 'Fredéric', '15 rue du Php', 25100, 'JAVASCRIPT LAND'),
(7, 'DECORCE', 'Lola', '15 rue de la varicelle', 75000, 'Paris'),
(9, 'DECORCE', 'Yann', '7 rue des murailles', 39800, 'BONNEFONTAINE'),
(10, 'HAAS', 'Anais', 'rue des écoles', 39000, 'LONS LE SAUNIER'),
(11, 'HAAS', 'Anais', 'rue des écoles', 39000, 'LONS LE SAUNIER');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `louer`
--

INSERT INTO `louer` (`id_location`, `id_Clients`, `id_Vehicules`, `date_fin_Louer`, `retour_Louer`, `date_debut_Louer`) VALUES
(1, 2, 4, '2020-10-13', 1, '2020-10-12'),
(2, 5, 4, '2020-10-31', 1, '2020-10-31'),
(3, 6, 7, '2021-01-04', 1, '2020-10-30'),
(4, 6, 2, '2020-11-06', 1, '2020-10-31'),
(5, 2, 4, '2020-11-15', 1, '2020-10-30'),
(6, 2, 11, '2020-11-06', 1, '2020-10-30'),
(7, 2, 2, '2020-09-18', 1, '2020-09-07'),
(8, 2, 12, '2020-08-01', 1, '2020-04-29'),
(9, 2, 21, '2020-10-17', 1, '2020-10-12'),
(10, 6, 6, '2020-12-24', 0, '2020-12-07'),
(11, 2, 2, '2020-11-07', 1, '2020-11-04'),
(12, 5, 2, '2020-11-13', 0, '2020-11-03'),
(13, 3, 21, '2020-11-02', 1, '2020-10-26'),
(14, 2, 13, '2021-01-04', 0, '2020-11-30'),
(15, 6, 25, '2020-11-06', 1, '2020-11-04'),
(16, 2, 5, '2020-11-28', 0, '2020-11-04'),
(17, 2, 23, '2020-11-16', 0, '2020-11-13'),
(18, 2, 21, '2020-10-31', 1, '2020-10-26'),
(19, 7, 11, '2020-11-04', 1, '2020-11-02'),
(20, 3, 23, '2020-11-14', 0, '2020-11-09'),
(21, 11, 23, '2020-11-15', 1, '2020-11-06');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `passworde` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `confirmation_token` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `passworde`, `confirmation_token`, `confirmed_at`) VALUES
(1, 'yannd', 'y.decorce@codeur.online', '$2y$10$q/bLsPMQ3B..FiQTh4YGfOoHy5q27E.qlDCi3XX2.nEY5BUtE39XG', NULL, NULL),
(2, '', '', '$2y$10$FTeRScELsOPFe1flGmDcFeQzSffqS8qtYOh.B.RV8CYJwdxbW2h/a', NULL, NULL),
(3, 'lolad', 'lola.d@free.fr', '$2y$10$LGGQbtB3t1zFKZkSWzDP4epuLUkbq2VXHH72eYQk/xiA7S.dTx2be', NULL, NULL),
(4, 'dyann', 'yann.decorce@sfr.fr', '$2y$10$tappY6RLRW2ECOR8jujlbOyjI.ekj3UwHOzPPzkS/Q1z54749kudC', NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `vehicules`
--

INSERT INTO `vehicules` (`id_Vehicules`, `type_Vehicules`, `modele_Vehicules`, `immatriculation_Vehicules`) VALUES
(2, 'VL', 'Fiat 500', 'AA-725-AB'),
(4, 'VU', 'Peugeot expert 12m3', 'CC-258-CC'),
(5, 'VL', 'Peugeot 308', 'ZA-159-AZ'),
(6, 'VL', 'Peugeot 5008', 'AQ-753-QS'),
(7, 'VL', 'Peugeot 5008', 'AS-148-AQ'),
(8, 'VL', 'Peugeot 308', 'AA-111-AA'),
(9, 'VL', 'Peugeot 308', 'BB-222-BB'),
(10, 'VL', 'Peugeot 308', 'CC-357-CC'),
(11, 'VL', 'Peugeot 308', 'GH-987-FR'),
(21, 'VL', 'Fiat 500', 'QQ-666-QQ'),
(22, 'VU', 'Iveco daily 20m3', 'PO-987-YF'),
(23, 'VU', 'Iveco daily 20m3', 'RD-147-FD'),
(24, 'VL', 'Renault Clio', 'KJ-487-AZ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
