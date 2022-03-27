-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 27 mars 2022 à 12:53
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nac_balfoo`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

DROP TABLE IF EXISTS `animaux`;
CREATE TABLE IF NOT EXISTS `animaux` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Catégorie` varchar(999) NOT NULL,
  `Image` varchar(9999) NOT NULL,
  `Description` varchar(9999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id`, `Nom`, `Catégorie`, `Image`, `Description`) VALUES
(1, 'Furet', 'Animal', 'https://www.filalapat.fr/sites/default/files/2021-07/08.07.21%20Cohabitation%20furets.jpg', 'Le furet (Mustela putorius furo) est une espèce de mustélidé exclusivement domestique du genre Mustela,\r\n                    genre qui comprend également la belette, l\'hermine et le vison. \r\n                    C\'est une sous-espèce de Mustela putorius domestiquée au cours du Ier millénaire av. J.-C.1 et qui n\'existe pas naturellement à l\'état sauvage.'),
(2, 'Hamster', 'Rongeur', 'https://static.wamiz.com/images/contrib/content/shutterstock_1338546149-content-5fd777f509adc.jpg', 'Les hamsters (Cricetinae) sont de petits rongeurs de la famille des Cricetidae qui forment la sous-famille des Cricetinae.'),
(3, 'Octodon', 'Rongeur', 'http://animoetc.com/upimg/blog/Octodon.jpg?t=1&c=1&w=600&h=360', 'Les Octodons (Octodon) sont un genre qui comprend plusieurs espèces de petits rongeurs de la famille des Octodontidae que l\'on rencontre dans la cordillère des Andes,\r\n                    principalement dans les montagnes du Chili. Seule l\'espèce Octodon degus, nommée couramment « octodon » ou dègue du Chili dans les animaleries, est élevée comme animal de compagnie ou de laboratoire.'),
(5, 'Chat', 'Sauvage', 'https://media-exp1.licdn.com/dms/image/C4E03AQF4_r7XJor0vQ/profile-displayphoto-shrink_800_800/0/1631441258353?e=1653523200&v=beta&t=apr8MDaoPEOG2PS1PfQGUeaf4rTGaeR7PS8-hAYpgRE', 'C lui quoi');

-- --------------------------------------------------------

--
-- Structure de la table `client_newsletter`
--

DROP TABLE IF EXISTS `client_newsletter`;
CREATE TABLE IF NOT EXISTS `client_newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `client_newsletter`
--

INSERT INTO `client_newsletter` (`id`, `email`) VALUES
(1, 'louisbal70@gmail.com'),
(2, 'florent.hode@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `identifiant` (`identifiant`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiant`, `password`) VALUES
(1, 'florent', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

-- --------------------------------------------------------

--
-- Structure de la table `villes`
--

DROP TABLE IF EXISTS `villes`;
CREATE TABLE IF NOT EXISTS `villes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Nom` varchar(999) NOT NULL,
  `lat` varchar(999) NOT NULL,
  `lon` varchar(999) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `villes`
--

INSERT INTO `villes` (`id`, `Nom`, `lat`, `lon`) VALUES
(1, 'Furet', '-40.96994316626823', '174.6819245690202'),
(2, 'Hamster', '26.471230769211388', '16.700922616969617'),
(3, 'Octodon', '-19.860537653775733', '-66.68060167327705'),
(7, 'Chat', '48.856614', '2.3522219');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
