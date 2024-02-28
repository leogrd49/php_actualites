-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 13:58
-- Version du serveur : 8.2.0
-- Version de PHP : 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `actualite`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `auteur` text NOT NULL,
  `date_pub` date NOT NULL,
  `date_rev` date NOT NULL,
  `tags` text NOT NULL,
  `source` text NOT NULL,
  `image` text NOT NULL,
  `corp` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`ID`, `titre`, `auteur`, `date_pub`, `date_rev`, `tags`, `source`, `image`, `corp`) VALUES
(1, 'C\'est quoi l\'audace ?', 'Moi', '2024-02-01', '2024-02-27', 'audace, vie, philosophie', 'moi', 'https://iris-creativite.com/wp-content/uploads/2019/10/IJ-audace.jpg', 'c\'est ça.'),
(2, 'Comment faire Top 1', 'Talmo', '2024-02-01', '2024-02-27', 'fortnite, Top1, Neuille', 'Twitch', 'https://i0.wp.com/www.seroths.com/wp-content/uploads/2019/01/maxresdefault-79.jpg?resize=1280%2C500&ssl=1', 'Il faut simplement tué tout le monde.'),
(3, 'Testfrrr', 'Testfrr', '2014-02-10', '2022-02-17', 'oui, baguette, test', 'Testfr', 'https://i.notretemps.com/1800x0/smart/2020/11/13/covid-19-les-tests-antigeniques-quel-interet.jpeg', 'testttttttttttttttttttttfr'),
(4, 'Test', 'Test', '2014-02-28', '2027-02-10', 'oui, baguette, test', 'Test', 'https://www.cloudnetcare.fr/wp-content/uploads/2022/06/les-differents-types-de-test-d-un-logiciel.webp', 'testtttttttttttttttttttt');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
