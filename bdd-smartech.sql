-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 oct. 2022 à 21:18
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `smartech`
--

-- --------------------------------------------------------

--
-- Structure de la table `telephones`
--

CREATE TABLE `telephones` (
  `id` int(11) NOT NULL,
  `img` varchar(20) DEFAULT NULL,
  `marque` varchar(20) DEFAULT NULL,
  `modele` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `telephones`
--

INSERT INTO `telephones` (`id`, `img`, `marque`, `modele`, `price`) VALUES
(1, 'appleimg1', 'apple', 'iPhone SE', 349),
(2, 'appleimg2', 'apple', 'iPhone 11', 499),
(3, 'appleimg3', 'apple', 'iPhone 12', 556),
(4, 'appleimg4', 'apple', 'iPhone 13', 809),
(5, 'appleimg5', 'apple', 'iPhone 14', 1019),
(6, 'appleimg6', 'apple', 'iPhone 14 Pro', 1719),
(7, 'gpixelimg1', 'gpixel', 'Google Pixel 6a', 459),
(8, 'gpixelimg2', 'gpixel', 'Google Pixel 6', 510),
(9, 'gpixelimg3', 'gpixel', 'Google Pixel 6 Pro', 719),
(10, 'gpixelimg4', 'gpixel', 'Google Pixel 7 Pro', 805),
(11, 'huaweiimg1', 'huawei', 'Huawei i8', 419),
(12, 'huaweiimg2', 'huawei', 'Huawei Y6p', 546),
(13, 'huaweiimg3', 'huawei', 'Huawei Mate Xs 2', 624),
(14, 'huaweiimg4', 'huawei', 'Huawei Nova9', 689),
(15, 'huaweiimg5', 'huawei', 'Huawei P50', 719),
(16, 'huaweiimg6', 'huawei', 'Huawei Nova10', 910),
(17, 'oppoimg1', 'oppo', 'Oppo Reno 8 Pro', 524),
(18, 'oppoimg2', 'oppo', 'Oppo Find X5', 620),
(19, 'oppoimg3', 'oppo', 'Oppo Find X3 Neo', 687),
(20, 'oppoimg4', 'oppo', 'Oppo Find X2 Neo', 719),
(21, 'oppoimg5', 'oppo', 'Oppo A57', 763),
(22, 'oppoimg6', 'oppo', 'Oppo Reno 6', 529),
(23, 'samsungimg1', 'samsung', 'Galaxy e1270', 109),
(24, 'samsungimg2', 'samsung', 'Galaxy S20', 202),
(25, 'samsungimg3', 'samsung', 'Note20', 256),
(26, 'samsungimg4', 'samsung', 'Galaxy S21', 315),
(27, 'samsungimg5', 'samsung', 'Z Fold 4', 487),
(28, 'samsungimg6', 'samsung', 'Z Flip 5', 512),
(29, 'xiaomiimg1', 'xiaomi', 'Redmi 9A', 130),
(30, 'xiaomiimg2', 'xiaomi', 'Redmi 9', 150),
(31, 'xiaomiimg3', 'xiaomi', 'Redmi 11', 183),
(32, 'xiaomiimg4', 'xiaomi', 'Xiaomi 12 Pro', 840),
(33, 'xiaomiimg5', 'xiaomi', 'Poco X4 GT', 400),
(34, 'xiaomiimg6', 'xiaomi', 'Poco X4 Pro', 512);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `telephones`
--
ALTER TABLE `telephones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `telephones`
--
ALTER TABLE `telephones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
