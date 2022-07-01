-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 01 juil. 2022 à 14:48
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `clothesshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` mediumtext NOT NULL,
  `price` float NOT NULL,
  `size` varchar(25) NOT NULL,
  `category` varchar(25) NOT NULL,
  `color` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `size`, `category`, `color`) VALUES
(1, 'T-shirt blanc', 'Voici un magnifique t-shirt blanc uni .', 35, 'M', 't-shirt', 'white'),
(2, 'pantalon noir ', 'Ceci est la revolution , un pantalon noir , aussi noir que mon café', 51, 'L', 'pants', 'black'),
(3, 'manteau rouge ', 'avec ce manteau vous n\'attraperez jamais froid', 75, 'XL', 'jacket', 'red'),
(4, 'pull moche de noel', 'pull vert mais tsais vert caca d\'oie', 4, 'S', 'pull', 'green'),
(5, 'pantalon jaune moutarde', 'le parfait compagnon pour vos sortie mettez le feu sur la ahah piste de danse ahah , arthur- t\'enflamme pas trop ', 15.99, 'L', 'pants', 'yellow'),
(6, 'pull bleu recette', 'pour faire un gateau au chocolat il vous faut 2oeufs , du beurre , du sucre , de la farine et de la levure', 99.99, 'L', 't-shirt', 'blue'),
(7, 't-shirt rouge ', 'LA COULEUR DU SANG OUI', 66.6, 'XL', 't-shirt', 'red'),
(8, 'pull militaire a manche c', 'Combien tu mesures deuxième pompe ?\r\n- Chef, 1m75, chef !\r\n- 1m75, jamais vu un tas de merde aussi haut que ça !', 9.99, 'M', 'pull', 'green');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `role` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `role`, `password`) VALUES
(1, 'admin', 'admin', '1234'),
(2, '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
