-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 06 juin 2021 à 20:38
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bdd_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `DateNaissance` varchar(20) NOT NULL,
  `telephone` text NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `Nom`, `Prenom`, `Email`, `DateNaissance`, `telephone`, `motDePasse`) VALUES
(21, 'Nom', 'Prenom', 'nom.prenom@gmail.co', '12/12/2012', '0606060606', '$2y$10$029hOpmF1P7VuVLiUE396OG/eFTXVg.iaYgRqyONC0AbNBJ/aVdq6'),
(20, 'Nom', 'Prenom', 'nom.prenom@gmail.com', '12/12/2012', '0606060606', '$2y$10$y.EfAJPnQ4cej4m4hjVvwOtSV2HPtY8jk3ArhAn.UIBghj1AlbBPm'),
(44, 'Chouaoui', 'Ahmed', 'ahmad.chouaoui@gmail.com', '28/04/2000', '0768592929', '$2y$10$6r1V29P2jOPHs6/neZbYA.EfkHcs.PT6Ws4dY3P74FfuPhlaCJ47K');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
