-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 11 juin 2020 à 00:32
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aéroport`
--

-- --------------------------------------------------------

--
-- Structure de la table `avion`
--

CREATE TABLE `avion` (
  `IdAvion` varchar(10) NOT NULL,
  `Marque` varchar(20) NOT NULL,
  `NbrPlace` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `avion`
--

INSERT INTO `avion` (`IdAvion`, `Marque`, `NbrPlace`) VALUES
('ab12345', 'abc', 120);

-- --------------------------------------------------------

--
-- Structure de la table `compagnie`
--

CREATE TABLE `compagnie` (
  `IdCo` varchar(10) NOT NULL,
  `NomCo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `hotesse`
--

CREATE TABLE `hotesse` (
  `CodeHo` varchar(10) NOT NULL,
  `NomHo` varchar(20) NOT NULL,
  `PrenomHo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `steward`
--

CREATE TABLE `steward` (
  `CodeSt` varchar(10) NOT NULL,
  `NomSt` varchar(20) NOT NULL,
  `PrenomSt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

CREATE TABLE `vol` (
  `IdAvion` varchar(10) NOT NULL,
  `CodeHo` varchar(10) NOT NULL,
  `CodeSt` varchar(10) NOT NULL,
  `NumPasseport` varchar(10) NOT NULL,
  `DateDep` date NOT NULL,
  `Destination` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `voyageur`
--

CREATE TABLE `voyageur` (
  `NumPasseport` varchar(10) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `Prenom` varchar(20) NOT NULL,
  `NumTel` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avion`
--
ALTER TABLE `avion`
  ADD PRIMARY KEY (`IdAvion`);

--
-- Index pour la table `compagnie`
--
ALTER TABLE `compagnie`
  ADD PRIMARY KEY (`IdCo`);

--
-- Index pour la table `hotesse`
--
ALTER TABLE `hotesse`
  ADD PRIMARY KEY (`CodeHo`);

--
-- Index pour la table `steward`
--
ALTER TABLE `steward`
  ADD PRIMARY KEY (`CodeSt`);

--
-- Index pour la table `vol`
--
ALTER TABLE `vol`
  ADD PRIMARY KEY (`IdAvion`,`CodeHo`,`CodeSt`,`NumPasseport`,`DateDep`);

--
-- Index pour la table `voyageur`
--
ALTER TABLE `voyageur`
  ADD PRIMARY KEY (`NumPasseport`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
