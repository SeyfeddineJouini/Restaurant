-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 mai 2021 à 16:33
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'root@root', 'root'),
(4, 'seyf@seyf', 'root'),
(5, 'melek@melek', 'root');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(4) NOT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `prix_unit` double DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `designation`, `prix_unit`, `type`, `photo`) VALUES
(52, 'coca-cola', 4.5, 'boissons', 'Coca-Cola-va-proposer-des-bouteilles-en-plastique-100-recycle.jpg'),
(53, 'mosli', 26.85, 'plat principal', 'kafteji-plat-tunisien.jpg'),
(57, 'jus de fraise', 7.8, 'boissons', '94250_w1024h1024c1cx2736cy1824.jpg'),
(58, 'Eau 1.5L', 3, 'boissons', 'Clinique-Synergek-articles_boire-de-leau.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(4) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `num_tel` int(11) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `email`, `nom`, `prenom`, `num_tel`, `password`, `adresse`) VALUES
(21, 'nozha@bh', 'benhariz', 'nozha', 985899, '1234', 'bardo');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(4) NOT NULL,
  `id_art` int(11) DEFAULT NULL,
  `id_cli` int(4) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `id_art`, `id_cli`, `quantity`, `etat`) VALUES
(78, 53, 21, 80, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reservation_table`
--

CREATE TABLE `reservation_table` (
  `id_reservation` int(4) NOT NULL,
  `id_cli` int(11) DEFAULT NULL,
  `id_tab` int(11) DEFAULT NULL,
  `heure_arrive` time DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `nb_personne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `tables`
--

CREATE TABLE `tables` (
  `num` int(4) NOT NULL,
  `capacity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tables`
--

INSERT INTO `tables` (`num`, `capacity`) VALUES
(2, 2),
(3, 2),
(4, 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `c1` (`id_art`),
  ADD KEY `c2` (`id_cli`);

--
-- Index pour la table `reservation_table`
--
ALTER TABLE `reservation_table`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `c3` (`id_cli`),
  ADD KEY `c4` (`id_tab`);

--
-- Index pour la table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `reservation_table`
--
ALTER TABLE `reservation_table`
  MODIFY `id_reservation` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `c1` FOREIGN KEY (`id_art`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `c2` FOREIGN KEY (`id_cli`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `reservation_table`
--
ALTER TABLE `reservation_table`
  ADD CONSTRAINT `c3` FOREIGN KEY (`id_cli`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `c4` FOREIGN KEY (`id_tab`) REFERENCES `tables` (`num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
