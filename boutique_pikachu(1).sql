-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mai 2023 à 11:02
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique_pikachu`
--

-- --------------------------------------------------------

--
-- Structure de la table `action_commande`
--

CREATE TABLE `action_commande` (
  `id_commande` int(11) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `prix_article` bigint(2) NOT NULL,
  `nom_article` varchar(50) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `prix_article`, `nom_article`, `id_categorie`, `image`) VALUES
(1, 25, 'Pull', 1, 'pull_pikachu.jpg'),
(2, 10, 'Bonnet', 1, 'bonnet_pikachu.jpg'),
(3, 5, 'Auto-Collant ', 2, 'auto_collant_pikachu.jpg'),
(4, 10, 'Poster', 2, 'poster_pikachu.jpg'),
(5, 15, 'T-Shirt', 1, 't-shirt_pikachu.jpg'),
(6, 50, 'Chaussure', 1, 'chaussure_pikachu.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'Vêtement'),
(2, 'Déco');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `nombre_de_commande_passé` bigint(2) NOT NULL,
  `date_de_la_derniere` date NOT NULL,
  `prix_de_la_derniere_commande` bigint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `nombre_de_commande_passé`, `date_de_la_derniere`, `prix_de_la_derniere_commande`) VALUES
(1, 8, '2022-03-12', 120),
(2, 1, '2023-02-21', 55),
(3, 4, '2022-12-25', 120),
(4, 7, '2022-04-25', 130),
(5, 7, '2023-01-30', 140),
(6, 3, '2022-12-14', 10),
(7, 8, '2022-07-31', 45),
(8, 8, '2022-05-03', 85),
(9, 2, '2022-12-07', 75),
(10, 0, '2022-04-12', 90),
(11, 7, '2022-05-20', 85),
(12, 6, '2022-11-17', 25),
(13, 2, '2022-08-19', 350),
(14, 2, '2022-09-20', 250),
(15, 8, '2022-07-12', 120),
(16, 4, '2023-02-01', 65),
(17, 5, '2023-01-03', 750),
(18, 3, '2022-06-07', 840),
(19, 8, '2022-09-06', 650),
(20, 8, '2022-07-04', 450),
(21, 8, '2022-03-12', 65),
(22, 1, '2023-02-21', 90),
(23, 4, '2022-12-25', 15),
(24, 7, '2022-04-25', 720),
(25, 7, '2023-01-30', 35),
(26, 3, '2022-12-14', 0),
(27, 8, '2022-07-31', 0),
(28, 8, '2022-05-03', 0),
(29, 2, '2022-12-07', 0),
(30, 0, '2022-04-12', 0),
(31, 7, '2022-05-20', 0),
(32, 6, '2022-11-17', 0),
(33, 2, '2022-08-19', 0),
(34, 2, '2022-09-20', 0),
(35, 8, '2022-07-12', 0),
(36, 4, '2023-02-01', 0),
(37, 5, '2023-01-03', 0),
(38, 3, '2022-06-07', 0),
(39, 8, '2022-09-06', 0),
(40, 8, '2022-07-04', 0),
(41, 8, '2022-03-12', 323),
(42, 1, '2023-02-21', 0),
(43, 4, '2022-12-25', 0),
(44, 7, '2022-04-25', 0),
(45, 7, '2023-01-30', 0),
(46, 3, '2022-12-14', 0),
(47, 8, '2022-07-31', 0),
(48, 8, '2022-05-03', 0),
(49, 2, '2022-12-07', 0),
(50, 0, '2022-04-12', 0),
(51, 7, '2022-05-20', 0),
(52, 6, '2022-11-17', 0),
(53, 2, '2022-08-19', 0),
(54, 2, '2022-09-20', 0),
(55, 8, '2022-07-12', 0),
(56, 4, '2023-02-01', 0),
(57, 5, '2023-01-03', 0),
(58, 3, '2022-06-07', 0),
(59, 8, '2022-09-06', 0),
(60, 8, '2022-07-04', 0),
(61, 8, '2022-03-12', 300),
(62, 1, '2023-02-21', 150),
(63, 4, '2022-12-25', 50),
(64, 7, '2022-04-25', 67),
(65, 7, '2023-01-30', 91),
(66, 3, '2022-12-14', 48),
(67, 8, '2022-07-31', 76),
(68, 8, '2022-05-03', 58),
(69, 2, '2022-12-07', 54),
(70, 0, '2022-04-12', 69),
(71, 7, '2022-05-20', 65),
(72, 6, '2022-11-17', 52),
(73, 2, '2022-08-19', 765),
(74, 2, '2022-09-20', 44),
(75, 8, '2022-07-12', 59),
(76, 4, '2023-02-01', 732),
(77, 5, '2023-01-03', 105),
(78, 3, '2022-06-07', 844),
(79, 8, '2022-09-06', 532),
(80, 8, '2022-07-04', 83),
(81, 8, '2022-03-12', 300),
(82, 1, '2023-02-21', 150),
(83, 4, '2022-12-25', 50),
(84, 7, '2022-04-25', 67),
(85, 7, '2023-01-30', 91),
(86, 3, '2022-12-14', 48),
(87, 8, '2022-07-31', 76),
(88, 8, '2022-05-03', 58),
(89, 2, '2022-12-07', 54),
(90, 0, '2022-04-12', 69),
(91, 7, '2022-05-20', 65),
(92, 6, '2022-11-17', 52),
(93, 2, '2022-08-19', 765),
(94, 2, '2022-09-20', 44),
(95, 8, '2022-07-12', 59),
(96, 4, '2023-02-01', 732),
(97, 5, '2023-01-03', 105),
(98, 3, '2022-06-07', 844),
(99, 8, '2022-09-06', 532),
(100, 8, '2022-07-04', 83),
(101, 8, '2022-03-12', 300),
(102, 1, '2023-02-21', 150),
(103, 4, '2022-12-25', 50),
(104, 7, '2022-04-25', 67),
(105, 7, '2023-01-30', 91),
(106, 3, '2022-12-14', 48),
(107, 8, '2022-07-31', 76),
(108, 8, '2022-05-03', 58),
(109, 2, '2022-12-07', 54),
(110, 0, '2022-04-12', 69),
(111, 7, '2022-05-20', 65),
(112, 6, '2022-11-17', 52),
(113, 2, '2022-08-19', 765),
(114, 2, '2022-09-20', 44),
(115, 8, '2022-07-12', 59),
(116, 4, '2023-02-01', 732),
(117, 5, '2023-01-03', 105),
(118, 3, '2022-06-07', 844),
(119, 8, '2022-09-06', 532),
(120, 8, '2022-07-04', 83),
(121, 2022, '0000-00-00', 300),
(122, 2023, '0000-00-00', 150),
(123, 2022, '0000-00-00', 50),
(124, 2022, '0000-00-00', 67),
(125, 2023, '0000-00-00', 91),
(126, 2022, '0000-00-00', 48),
(127, 2022, '0000-00-00', 76),
(128, 2022, '0000-00-00', 58),
(129, 2022, '0000-00-00', 54),
(130, 2022, '0000-00-00', 69),
(131, 2022, '0000-00-00', 65),
(132, 2022, '0000-00-00', 52),
(133, 2022, '0000-00-00', 765),
(134, 2022, '0000-00-00', 44),
(135, 2022, '0000-00-00', 59),
(136, 2023, '0000-00-00', 732),
(137, 2023, '0000-00-00', 105),
(138, 2022, '0000-00-00', 844),
(139, 2022, '0000-00-00', 532),
(140, 2022, '0000-00-00', 83),
(141, 8, '2022-03-12', 300),
(142, 1, '2023-02-21', 150),
(143, 4, '2022-12-25', 50),
(144, 7, '2022-04-25', 67),
(145, 7, '2023-01-30', 91),
(146, 3, '2022-12-14', 48),
(147, 8, '2022-07-31', 76),
(148, 8, '2022-05-03', 58),
(149, 2, '2022-12-07', 54),
(150, 0, '2022-04-12', 69),
(151, 7, '2022-05-20', 65),
(152, 6, '2022-11-17', 52),
(153, 2, '2022-08-19', 765),
(154, 2, '2022-09-20', 44),
(155, 8, '2022-07-12', 59),
(156, 4, '2023-02-01', 732),
(157, 5, '2023-01-03', 105),
(158, 3, '2022-06-07', 844),
(159, 8, '2022-09-06', 534),
(160, 8, '2022-07-04', 83);

-- --------------------------------------------------------

--
-- Structure de la table `contenue`
--

CREATE TABLE `contenue` (
  `id_commande` int(11) DEFAULT NULL,
  `id_article` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_client`
--

CREATE TABLE `fiche_client` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `sexe` char(1) NOT NULL,
  `adresse_postal` bigint(5) NOT NULL,
  `adresse_mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fiche_client`
--

INSERT INTO `fiche_client` (`id_client`, `nom`, `prenom`, `date_de_naissance`, `sexe`, `adresse_postal`, `adresse_mail`) VALUES
(1, 'Chan', 'Gary', '1979-10-12', 'F', 170592, 'ac.tellus.suspendiss'),
(2, 'Clark', 'Destiny', '1975-03-09', 'M', 5253, 'phasellus.libero@pro'),
(3, 'Boyle', 'Athena', '1994-05-21', 'M', 23, 'dapibus.quam@outlook'),
(4, 'Barrera', 'Kiona', '1982-01-21', 'M', 5441, 'quam.elementum@proto'),
(5, 'Meyer', 'Margaret', '2005-07-29', 'F', 48873, 'bibendum.ullamcorper'),
(6, 'Howell', 'Haley', '2001-05-22', 'F', 743476, 'urna@yahoo.ca'),
(7, 'Rivera', 'Peter', '1990-03-04', 'M', 20124, 'lectus.convallis@icl'),
(8, 'Weaver', 'Joan', '1996-07-12', 'M', 7251, 'aptent.taciti@google'),
(9, 'Dean', 'Bo', '2005-06-30', 'M', 170151, 'tellus.sem.mollis@ho'),
(10, 'Mccarty', 'Camden', '1971-12-14', 'M', 46677, 'eu@icloud.couk'),
(11, 'Morris', 'Tashya', '1969-12-01', 'F', 70516, 'fusce.dolor@hotmail.'),
(12, 'Booker', 'Sybil', '1981-08-21', 'M', 523881, 'lectus.quis.massa@ic'),
(13, 'Nixon', 'Keane', '1994-12-18', 'M', 21362, 'sed.consequat@aol.or'),
(14, 'Cunningham', 'Shad', '2006-08-21', 'F', 76743, 'ultrices.duis.volutp'),
(15, 'Crosby', 'Melanie', '1970-10-26', 'F', 624652, 'velit.eu@hotmail.net'),
(16, 'Banks', 'Hayden', '1965-02-14', 'F', 769333, 'metus.vivamus.euismo'),
(17, 'Nixon', 'Rashad', '1980-10-20', 'M', 45553, 'leo.in@google.net'),
(18, 'Reed', 'Talon', '2002-04-24', 'M', 64423, 'lacus.vestibulum@aol'),
(19, 'Miles', 'Lareina', '1984-02-24', 'M', 342522, 'tristique.pharetra.q'),
(20, 'Navarro', 'Cheryl', '1971-03-22', 'M', 3865, 'in.faucibus@outlook.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_categorie` (`id_categorie`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
