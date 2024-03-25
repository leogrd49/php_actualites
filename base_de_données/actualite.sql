-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 mars 2024 à 16:58
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

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

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `corps_texte` varchar(600) NOT NULL,
  `image` varchar(90) NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `tags` varchar(150) NOT NULL,
  `sources` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `corps_texte`, `image`, `date_publication`, `date_revision`, `auteur`, `tags`, `sources`) VALUES
(1, 'Lorem Ipsum dolor amet', 'Lorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem LoremLorem Lorem', 'images\\ponton.jpg', '2022-02-04', '2024-02-15', 'Jean Luc Melenchon', 'nature, montagne', 'Lorem Ipsum Incorporation'),
(3, 'Les bienfaits méconnus de la méditation pour la sa', 'La méditation, longtemps reléguée au domaine de la spiritualité, gagne aujourd\'hui une reconnaissance grandissante pour ses nombreux bienfaits sur la santé mentale. Des études récentes ont démontré que la pratique régulière de la méditation peut réduire le stress, l\'anxiété et même atténuer les symptômes de la dépression. En plus de favoriser la relaxation, elle stimule également la concentration et la clarté mentale. En adoptant la méditation comme une habitude quotidienne, on peut améliorer son bien-être psychologique de manière significative.', 'images\\montagne.jpg', '2023-11-15', '2023-06-14', 'Sophie Martin', '#Méditation #SantéMentale #Bien-être #Stress #Anxiété', 'Santé et Bien-être'),
(4, 'L\'importance cruciale de la biodiversité pour la s', ' La biodiversité, ou la variété des êtres vivants sur Terre, est essentielle à la santé de notre planète. Non seulement elle assure l\'équilibre des écosystèmes, mais elle fournit également des services indispensables tels que la pollinisation des cultures, la purification de l\'air et de l\'eau, ainsi que la régulation du climat. Cependant, la perte rapide de biodiversité due à des activités humaines telles que la déforestation, l\'urbanisation et la pollution menace la stabilité de notre environnement. Il est impératif d\'agir maintenant pour protéger et restaurer la biodiversité afin de garantir', 'images\\travail.jpg', '2024-01-01', '2024-02-11', 'Pierre Leclerc', '#Biodiversité #Environnement #Écologie #Conservation #DéveloppementDurable', 'Nature et Environnement'),
(5, 'Rayan il est jamais la', 'C\'est quand meme une dinguerie que Rayan il soit quasi jamais la nan mais sérieux un coup il a mal a la tête, un coup il se réveille pas et la il a le cul en feu ?! Comme si c\'était une excuse de dire qu\'on a le cul en feu pour pas aller en cours nan mais allo quoi !', 'images\\famille.jpg', '2024-02-28', '2024-02-28', 'Theo Foucher énervé', 'énervé, coup-de-gueule, tête-de-neuille', 'Theo Foucher qui pète un câble'),
(6, 'Leo et les blondes', 'Pourquoi Leo aime les blondes ?\r\n\r\nJe me demande pourquoi il aime les blondes ce garçon. Pour lui toutes les blondes sont des bombes haha ça rime je suis un poète ou quoi ? QUOICOUBEH ! Pardon je me suis laissé emporter je vais arrêter d\'écrire peut être mais la je dois faire un texte assez long parce que c\'est le contenu de l\'article donc ce serait dommage qu\'il soit tout petit nan vous trouvez pas ? Moi je trouve que si sérieux si yavait que 2 lignes ça aurait aucune gueule Lol ! Oh lala je suis cringe aller c\'est ciao !', 'images\\espace.jpg', '2022-02-04', '2023-06-14', 'Theo Foucher (Le confus)', 'discussion, blabla, cringe', 'Le cerveau de Theo'),
(7, 'Les défis et opportunités de la transition vers le', 'La transition vers les énergies renouvelables est un impératif mondial pour lutter contre le changement climatique et réduire notre dépendance aux combustibles fossiles. Bien que cela présente des défis considérables, tels que la nécessité de moderniser les infrastructures énergétiques et de surmonter les intérêts économiques en jeu, cela offre également d\'énormes opportunités. En investissant dans les énergies renouvelables, nous pouvons créer de nouveaux emplois, stimuler l\'innovation technologique et améliorer la santé publique en réduisant la pollution atmosphérique. Il est temps de saisir', 'images\\rayan.jpg', '2024-02-29', '2024-02-27', 'Laura Dubois', '#ÉnergiesRenouvelables #TransitionÉnergétique #ChangementClimatique #DéveloppementDurable #Innovation', '\"Énergie et Environnement\"');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`, `categorie_id`) VALUES
(1, 'Administration', NULL),
(2, 'sport', NULL),
(4, 'foot', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `prenom`, `mail`) VALUES
(13, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(14, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(15, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(16, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(17, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(18, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(19, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com'),
(20, 'Foucher', 'Theo', 'theonicolas.foucher@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categorie_id` (`categorie_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD CONSTRAINT `fk_categorie_id` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
