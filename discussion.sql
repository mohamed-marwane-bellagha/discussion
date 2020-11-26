-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 nov. 2020 à 10:57
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `discussion`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `message` varchar(140) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `message`, `id_utilisateur`, `date`) VALUES
(1, 'Caca TEST', 8, '2020-11-24'),
(19, 'Pipi Test', 10, '2020-11-24'),
(23, 'toto', 10, '2020-11-24'),
(24, 'toto', 10, '2020-11-24'),
(25, 'pinpon', 10, '2020-11-24'),
(26, 'tutu', 8, '2020-11-24'),
(27, 'zizi', 8, '2020-11-24'),
(28, 'Ruben', 8, '2020-11-24'),
(29, 'Ruben le plus fort', 10, '2020-11-24'),
(30, 'Ruben vraiment le plus fort', 10, '2020-11-24'),
(31, 'Ruben', 11, '2020-11-24'),
(32, 'Salut', 11, '2020-11-25'),
(33, 'paapap', 11, '2020-11-25');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`) VALUES
(8, 'popo', '$2y$10$qyMzpSbrl2hLhKkjcoVZo.fCeZ.5cwcxnCpGXiLYwZEBtqpAHyNj6'),
(10, 'pipi', '$2y$10$s5n3xIUSyIHJtYXlEnQbuehBmeQqmRlYHO1H85alYDib3yn07OwCC'),
(11, 'ruben', '$2y$10$Gu1743DIJnurdkr/lRRst.D9R.h5pCIMDttJsYGGHpSD1dUiRiECC'),
(12, 'zizi', '$2y$10$gWiwX7QTcViG64NfumG0aOW7C3gJyQVrmmQpSaoGof6ApmuwBIL/G');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
