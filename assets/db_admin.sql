-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 11 mai 2022 à 19:13
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `clothes`
--

CREATE TABLE `clothes` (
  `id` int(30) NOT NULL,
  `types` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clothes`
--

INSERT INTO `clothes` (`id`, `types`) VALUES
(1, 'nouveauté'),
(2, 'top ventes'),
(3, 'hauts'),
(4, 'Robes'),
(5, 'Vestes_manteaux'),
(6, 'pantalons'),
(7, 'Chaussure\n'),
(8, 'accesoires'),
(9, 'aucun');

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(60) NOT NULL,
  `pr_prix2` text NOT NULL,
  `pr_contenu` varchar(250) NOT NULL,
  `pr_prix1` text NOT NULL,
  `pr_img` varchar(200) NOT NULL,
  `types` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `pr_prix2`, `pr_contenu`, `pr_prix1`, `pr_img`, `types`) VALUES
(74, '34,12 €', 'd', '10', 'img/collection copie/collection1.png', 6),
(75, '34,12 €', 'd', '10', 'img/collection copie/collection1.png', 6),
(76, '22$', 'ccc', '10', 'img/collection copie/collection1.png', 8),
(77, '99', 'fhfhfhf', '99', 'img/collection copie/collection2.png', 2),
(78, '22$', 'sggdgdgd', '49,99 €', 'img/collection copie/collection2.png', 5);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `us_nom` varchar(30) NOT NULL,
  `us_mdp` varchar(64) NOT NULL,
  `us_mail` varchar(60) NOT NULL,
  `us_statut` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `us_nom`, `us_mdp`, `us_mail`, `us_statut`) VALUES
(44, 'admin', '531e84c9f35cc59a803dd39566ed15d486dd3f6f', 'lucas@gmail.com', ''),
(45, 'lucas', 'jj', 'galdddddax@gmail.com', 'admin'),
(46, 'admin', 'ss', 'lucas@gmail.com', 'admin'),
(47, 'bastien', 'dd', 'ptn@gmail.com', NULL),
(49, 'ptn', 'ddd', 'lucas@gmail.com', NULL),
(51, 'bastien', 'ss', 'va@gmail.com', NULL),
(52, 'admin', 'ddd', 'galax@gmail.com', NULL),
(53, 'testHash', '2346ad27d7568ba9896f1b7da6b5991251debdf2', 'ptn@gmail.com', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_types` (`types`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clothes`
--
ALTER TABLE `clothes`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `fk_types` FOREIGN KEY (`types`) REFERENCES `clothes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
