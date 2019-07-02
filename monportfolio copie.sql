-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 27 mai 2019 à 18:44
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `nom`, `niveau`, `logo`) VALUES
(7, 'HTML+%2Bet', '70', ''),
(10, 'JAVASCRIPT+et', '30', ''),
(11, 'LEMAITRE et ', '90', ''),
(12, 'AJAX', '60', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `nom`, `date`, `lieu`, `description`) VALUES
(6, 'SecrÃ©taire', '2019-05-02', 'EPINAY SUR SEINE', ' compte-rendu');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(5) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `lieu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom`, `date`, `lieu`) VALUES
(1, 'LEMAITRE', '2019-05-09', 'EPINAY SUR SEINE'),
(3, 'diplom1', '2019-05-08', 'EPINAY SUR SEINE'),
(4, 'DIPLOM2', '2019-05-01', 'MONTGERON');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `civilite` varchar(4) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `roles` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `civilite`, `prenom`, `nom`, `email`, `roles`) VALUES
(8, 'valerie', '$2y$10$KTcNl/Ws.5PPjnb1jKlRuOqSV0VdZhlgvLPKGH4prmWp1E33ThjXm', '', 'valerie', 'lemaitre', 'lemaitre.valerie34@g', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
