-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 01 Juin 2015 à 11:49
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dbamblard`
--

-- --------------------------------------------------------

--
-- Structure de la table `academie`
--

CREATE TABLE IF NOT EXISTS `academie` (
`id_academie` int(11) NOT NULL,
  `login_academie` varchar(30) DEFAULT NULL,
  `password_academie` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
`id_admin` int(11) NOT NULL,
  `login_admin` varchar(15) DEFAULT NULL,
  `password_admin` varchar(15) DEFAULT NULL,
  `id_droit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`id_article` int(11) NOT NULL,
  `libelle_article` varchar(30) DEFAULT NULL,
  `date_article` date DEFAULT NULL,
  `contenu_article` text,
  `id_redacteur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE IF NOT EXISTS `droit` (
`id_droit` int(11) NOT NULL,
  `libelle_droit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offre_ministage`
--

CREATE TABLE IF NOT EXISTS `offre_ministage` (
`id_ministage` int(11) NOT NULL,
  `libelle_ministage` varchar(50) DEFAULT NULL,
  `secteur_ministage` varchar(50) DEFAULT NULL,
  `date_ministage` date NOT NULL,
  `description_ministage` text,
  `nb_place` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `offre_stage`
--

CREATE TABLE IF NOT EXISTS `offre_stage` (
`id_offre_stage` int(11) NOT NULL,
  `nom_entreprise` varchar(30) NOT NULL,
  `adresse_entreprise` text,
  `cp_entreprise` int(6) DEFAULT NULL,
  `ville_entreprise` text,
  `nom_representant` varchar(30) DEFAULT NULL,
  `mail_entreprise` varchar(50) DEFAULT NULL,
  `telephone_entreprise` varchar(12) DEFAULT NULL,
  `libelle_offre_stage` varchar(30) DEFAULT NULL,
  `contenu_offre_stage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `academie`
--
ALTER TABLE `academie`
 ADD PRIMARY KEY (`id_academie`);

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
 ADD PRIMARY KEY (`id_admin`), ADD KEY `id_droit` (`id_droit`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id_article`), ADD KEY `id_redacteur` (`id_redacteur`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
 ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `offre_ministage`
--
ALTER TABLE `offre_ministage`
 ADD PRIMARY KEY (`id_ministage`);

--
-- Index pour la table `offre_stage`
--
ALTER TABLE `offre_stage`
 ADD PRIMARY KEY (`id_offre_stage`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `academie`
--
ALTER TABLE `academie`
MODIFY `id_academie` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
MODIFY `id_droit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `offre_ministage`
--
ALTER TABLE `offre_ministage`
MODIFY `id_ministage` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `offre_stage`
--
ALTER TABLE `offre_stage`
MODIFY `id_offre_stage` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`id_droit`) REFERENCES `droit` (`id_droit`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_redacteur`) REFERENCES `administrateur` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
