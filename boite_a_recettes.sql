-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 24 fév. 2020 à 12:39
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boite_a_recettes`
--

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `etapes` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id`, `pseudo`, `titre`, `ingredients`, `etapes`, `image`) VALUES
(1, 'Appoline', 'US Cookies', '220 g de farine, 185 g de sucre roux, 15 g de sucre blanc, 1 oeuf, 115 g de beurre mou, 1/2 cuillère à café de levure chimique, 1/2 cuillère à café de bicarbonate de sodium, 1 cuillère à café de vanille, 1 pincée de sel\r\n100 g de chocolat pâtissier blanc\r\n100 g de chocolat pâtissier au lait\r\n100 g de noix du brésil', 'Préchauffez votre four à 140°c et sortez la grille.\r\nMélangez le beurre mou avec les sucres, et l’oeuf, jusqu’à une pâte souple et homogène.\r\nÀ part, mélangez la farine, la levure, le bicarbonate, la pincée de sel et la vanille.\r\nAjoutez ce dernier mélange au premier et bien mélanger pour avoir une pâte épaisse qui sera malléable à la main.\r\nAjoutez 1/3 des pépites.\r\nSur la grille du four déjà sortie, mettez du papier cuisson.\r\nFormez des boules de pâte juste légèrement aplaties et disposez-les bien espacées les unes des autres.\r\nRépartissez sur chaque boule les pépites restantes.\r\nEnfournez pour 15 minutes, 17 max. IMPORTANT : En fin de cuisson, les cookies n’ont pas l’air cuit, c’est normal ! Ne tombez pas dans la piège de les remettre, le bord doit être à peine doré et le centre tout mou.\r\nIl faut les laisser refroidir une demi-heure au moins et ils vont durcir, ils seront parfaits.', 'src/img/us_cookies.jpeg'),
(2, 'Appoline', 'Breizh Crêpes', '250g de farine, 1/2 litre de lait, 20g de sucre, 4 oeufs, 50g de beurre fondu, 1 pincée de sel', 'Mettez la farine dans un saladier avec le sel et le sucre.\r\nFaites un puits au milieu et versez-y les œufs.\r\nCommencez à mélanger doucement, quand le mélange devient épais, ajoutez le lait froid petit à petit.\r\nQuand tout le lait est mélangé, la pâte doit être assez fluide, si elle vous paraît trop épaisse, rajoutez un peu de lait. \r\nAjoutez ensuite le beurre fondu refroidi et mélangez bien.\r\nFaites cuire les crêpes dans une poêle chaude (par précaution légèrement huilée si votre poêle à crêpes n\'est pas anti-adhésive. \r\nVersez une petite louche de pâte dans la poêle, faites un mouvement de rotation pour répartir la pâte sur toute la surface ; posez sur le feu et quand le tour de la crêpe se colore en roux clair, il est temps de la retourner.\r\nLaissez cuire environ une minute de ce côté et la crêpe est prête.\r\nRépétez jusqu\'à épuisement de la pâte', 'src/img/crepes.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
