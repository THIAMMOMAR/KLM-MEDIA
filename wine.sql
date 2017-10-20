-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  ven. 20 oct. 2017 à 16:57
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `kflvine`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `nom_produit` varchar(150) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `contenu` text NOT NULL,
  `origine` varchar(110) NOT NULL,
  `createur` varchar(150) NOT NULL,
  `teneur_sucre` varchar(20) NOT NULL,
  `cut` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `img`, `nom_produit`, `prix`, `contenu`, `origine`, `createur`, `teneur_sucre`, `cut`) VALUES
(3, 'assets/img/produit/5cfeaca898024ac4901bbe36702b63e3.png', 'Red wine', '55,00', 'The preservative sulfur dioxide is commonly added when grapes arrive at the winery. The addition rate varies from zero, for perfectly healthy grapes, to up to 70 mg/litre, for grapes with a high percentage of rot. The purpose is to prevent oxidation and sometimes to delay the onset of fermentation.', 'Montreal, Canada', 'Momar THIAM', '7 g/L', '750 mL'),
(4, 'assets/img/produit/5cfeaca898024ac4901bbe36702b63e3.png', 'Red wine', '100,00', 'The preservative sulfur dioxide is commonly added when grapes arrive at the winery. The addition rate varies from zero, for perfectly healthy grapes, to up to 70 mg/litre, for grapes with a high percentage of rot. The purpose is to prevent oxidation and sometimes to delay the onset of fermentation.', 'Montreal, Canada', 'Fred Duvin', '7 g/L', '750 mL'),
(5, 'assets/img/produit/5cfeaca898024ac4901bbe36702b63e3.png', 'Red wine', '100,00', 'The preservative sulfur dioxide is commonly added when grapes arrive at the winery. The addition rate varies from zero, for perfectly healthy grapes, to up to 70 mg/litre, for grapes with a high percentage of rot. The purpose is to prevent oxidation and sometimes to delay the onset of fermentation.', 'Montreal, Canada', 'Fred Duvin', '7 g/L', '750 mL'),
(6, 'assets/img/produit/5cfeaca898024ac4901bbe36702b63e3.png', 'Red wine', '100,00', 'The preservative sulfur dioxide is commonly added when grapes arrive at the winery. The addition rate varies from zero, for perfectly healthy grapes, to up to 70 mg/litre, for grapes with a high percentage of rot. The purpose is to prevent oxidation and sometimes to delay the onset of fermentation.', 'Montreal, Canada', 'Fred Duvin', '7 g/L', '750 mL'),
(7, 'assets/img/produit/8a8d8c0e71805fc553f6c2284dfee122.jpg', 'Red bordeaux', '300,00', 'Bordeaux is divided by a large river estuary called the Gironde. This is where we get the terms “Left Bank” and “Right Bank,” which refer to winemaker’s use of different dominant grapes in their red Bordeaux wines. There is also a third Bordeaux blend, rarely mentioned, made of white grapes.', 'Toronto, Canada', 'Delavine', '4 g/L', '750 mL');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;