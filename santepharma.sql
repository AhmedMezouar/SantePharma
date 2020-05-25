-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 mai 2020 à 14:56
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
-- Base de données : `santepharma`
--

-- --------------------------------------------------------

--
-- Structure de la table `postuler`
--

CREATE TABLE `postuler` (
  `id` int(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dateN` date NOT NULL,
  `specialiste` varchar(20) NOT NULL,
  `dateCreation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `postuler`
--

INSERT INTO `postuler` (`id`, `nom`, `email`, `phone`, `dateN`, `specialiste`, `dateCreation`) VALUES
(8, 'Mezouar', 'ahmed.mezouar26@gmail.com', '+213671205465', '1998-09-26', 'veneur_Pharmacie', '2020-05-16 00:12:37'),
(9, 'Mezouar22', 'ahmed.mezouar26@gmail.com', '+213671205465', '2020-05-08', 'deux', '2020-05-19 18:33:49');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_U` int(3) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(20) NOT NULL,
  `Sexe` varchar(20) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `region` varchar(50) NOT NULL,
  `wilaya` varchar(50) NOT NULL,
  `choix` varchar(20) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `HOV` varchar(6) NOT NULL,
  `HOF` varchar(6) NOT NULL,
  `numAgre` varchar(20) NOT NULL,
  `numTel` varchar(20) NOT NULL,
  `dateInsec` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_U`, `Nom`, `prenom`, `date`, `email`, `password`, `Sexe`, `addres`, `region`, `wilaya`, `choix`, `specialite`, `HOV`, `HOF`, `numAgre`, `numTel`, `dateInsec`) VALUES
(1, 'Mezouar', 'ahmed', '2019-05-07', 'ahmed.mezouar26@gmail.com', '123456', 'homme', 'cité azzouni rue 33 num 09', 'maghnia', 'tlemcen', 'Medecin', 'Generaliste', '07:00', '15:00', '25252525', '+213671205465', '2020-05-25 12:55:56');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `postuler`
--
ALTER TABLE `postuler`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_U`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `postuler`
--
ALTER TABLE `postuler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_U` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
