-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 mai 2020 à 03:08
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminstrateur`
--

CREATE TABLE `adminstrateur` (
  `id_adm` varchar(20) NOT NULL,
  `nom_adm` text NOT NULL,
  `prenom_adm` text NOT NULL,
  `adresse_adm` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `condidateur`
--

CREATE TABLE `condidateur` (
  `matri_cond` varchar(25) NOT NULL,
  `nom_cond` text NOT NULL,
  `prenom_cond` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id_pharma` varchar(25) NOT NULL,
  `ref_medic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medcin`
--

CREATE TABLE `medcin` (
  `id_med` varchar(25) NOT NULL,
  `nom_med` text NOT NULL,
  `prenom_med` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `ref_medic` varchar(25) NOT NULL,
  `nom_medic` varchar(25) NOT NULL,
  `dosage` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `offre_travail`
--

CREATE TABLE  'offre_travail'   (
'email' VARCHAR (10)  NOT NULL,
'name' VARCHAR (30)  NOT NULL,
'birthday' DATE NOT NULL,
'phonenumber' NUMBER (10) NOT NULL,
'specialite' VARCHAR(30) NOT NULL,
'commentaire' VARCHAR(200)  NOT NULL
) ; ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `pharmacien`
--

CREATE TABLE `pharmacien` (
  `id_pharma` varchar(25) NOT NULL,
  `nom_pharma` text NOT NULL,
  `prenom_pharma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `matri_cond` varchar(25) NOT NULL,
  `id_de off` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` char(20) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `specialte` varchar(20) NOT NULL,
  `H_O` varchar(6) NOT NULL,
  `H_F` varchar(6) NOT NULL,
  `numAgre` varchar(20) NOT NULL,
  `numTel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`Nom`, `prenom`, `date`, `email`, `password`, `Sexe`, `specialte`, `H_O`, `H_F`, `numAgre`, `numTel`) VALUES
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('Mezouar', 'ahmed', '0000-00-00', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '0', '0'),
('Mezouar', 'ahmed', '0000-00-00', 'ahmed.mezouar26@gmai', '9ea7685ff42509f7d18c', '', '', '', '', '0', '0'),
('', '', '0000-00-00', '', '', '', '', '', '', '254781', '2147483647'),
('', '', '0000-00-00', '', '', '', '', '', '', '25252525', '2147483647'),
('mezouar', 'ah', '0000-00-00', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '2147483647'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '2147483647'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '+213671205465'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '+213671205465'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '+213671205465'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', '', '', '', '', '25252525', '+213671205465'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', 'femme', '', '', '', '25252525', '+213671205465'),
('mezouar', 'ah', '1998-09-26', 'ahmed.mezouar26@gmai', 'd41d8cd98f00b204e980', 'homme', '', '', '', '25252525', '+213671205465'),
('Mezouar', 'hmayda', '1998-09-26', 'ahmed.mezouar26@gmai', 'e930725f6b83796e34ee', 'homme', 'Medecin', '', '', '123456789', '+213671205465'),
('Mezouar', 'ahme', '1998-09-26', 'ahmed.mezouar26@gmai', '55d7f1d535f50d31cd71', 'homme', 'Pharmacie', '', '', '123456', '+213671205465'),
('mezouar', 'ahmed2', '1998-09-26', 'ahmed.mezouar26@gmai', 'e10adc3949ba59abbe56', 'homme', 'Pharmacie', '', '', '123456', '+213671205465'),
('', '', '0000-00-00', '', 'd41d8cd98f00b204e980', 'homme', 'Pharmacie', '', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminstrateur`
--
ALTER TABLE `adminstrateur`
  ADD PRIMARY KEY (`id_adm`);

--
-- Index pour la table `condidateur`
--
ALTER TABLE `condidateur`
  ADD PRIMARY KEY (`matri_cond`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id_pharma`,`ref_medic`);

--
-- Index pour la table `medcin`
--
ALTER TABLE `medcin`
  ADD PRIMARY KEY (`id_med`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`ref_medic`);

--
-- Index pour la table `offre_travail`
--
ALTER TABLE `offre_travail`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `pharmacien`
--
ALTER TABLE `pharmacien`
  ADD PRIMARY KEY (`id_pharma`);

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`matri_cond`,`id_de off`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
