-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Juin 2015 à 12:27
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbamblard`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id_admin` int(11) NOT NULL,
  `login_admin` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `password_admin` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `id_droit` int(11) DEFAULT NULL,
  `nom_admin` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `prenom_admin` varchar(30) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id_admin`, `login_admin`, `password_admin`, `id_droit`, `nom_admin`, `prenom_admin`) VALUES
(1, 'JYViain', 'testtest', 1, 'Viain', 'Jean-Yves');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL,
  `libelle_article` varchar(35) DEFAULT NULL,
  `date_article` date DEFAULT NULL,
  `contenu_article` longtext,
  `id_redacteur` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `article`
--

INSERT INTO `article` (`id_article`, `libelle_article`, `date_article`, `contenu_article`, `id_redacteur`) VALUES
(3, 'article1', '2015-06-15', 'fezfezfezfezfez', 1),
(4, 'Article2', '2015-06-15', 'fezfzefezfezfezfezfezgvfezfezfez   vgvegve', 1),
(6, 'cookie', '2015-06-18', '<p>xscqscqs</p>\r\n', 1),
(8, 'odzqfdzqjd', '2015-06-19', '<p>kqs,cksq,klc,klqs,cks,qc,qs,cklqs,klc,qks,ckqsk,c</p>\r\n', 1),
(9, 'hiohioj', '2015-06-19', '<p>jiojp^p^ll&ugrave;m</p>\r\n', 1),
(10, 'GREG', '2015-06-19', '&lt;p&gt;GREGREGEG&lt;/p&gt;\r\n\r\n&lt;table border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; style=&quot;width:500px&quot;&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;GREG&lt;/td&gt;\r\n			&lt;td&gt;GREG&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;GREGRE&lt;/td&gt;\r\n			&lt;td&gt;REGRE&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;GREGEG&lt;/td&gt;\r\n			&lt;td&gt;GEG&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;hr /&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 1),
(11, 'zfezf', '2015-06-19', '<p>ezfezfzf</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px" summary="fezf">\r\n	<caption>ezfezf</caption>\r\n	<tbody>\r\n		<tr>\r\n			<td>fezfezfze</td>\r\n			<td>zefezf</td>\r\n		</tr>\r\n		<tr>\r\n			<td>ez</td>\r\n			<td>fezfze</td>\r\n		</tr>\r\n		<tr>\r\n			<td>fezf</td>\r\n			<td>ezfez</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(12, 'efzfze', '2015-06-19', '<p>fzfzefze</p>\r\n\r\n<table border="1" cellpadding="1" cellspacing="1" style="width:500px" summary="ffzefez">\r\n	<caption>ezfezfze</caption>\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>regreg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>grg</td>\r\n			<td>reg</td>\r\n		</tr>\r\n		<tr>\r\n			<td>hergr</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n', 1),
(13, 'efzfze', '2015-06-19', '', 1),
(14, 'gregre', '2015-06-19', '', 1),
(15, 'trhtrhrt', '2015-06-19', '', 1),
(16, 'gregre', '2015-06-19', '&lt;p&gt;gregregregreger&lt;/p&gt;\r\n\r\n&lt;table border=&quot;1&quot; cellpadding=&quot;1&quot; cellspacing=&quot;1&quot; style=&quot;width:500px&quot; summary=&quot;regreg&quot;&gt;\r\n	&lt;caption&gt;gregre&lt;/caption&gt;\r\n	&lt;tbody&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;regreg&lt;/td&gt;\r\n			&lt;td&gt;regre&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;greggre&lt;/td&gt;\r\n			&lt;td&gt;gregreg&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n		&lt;tr&gt;\r\n			&lt;td&gt;gre&lt;/td&gt;\r\n			&lt;td&gt;grehstrhr&lt;/td&gt;\r\n		&lt;/tr&gt;\r\n	&lt;/tbody&gt;\r\n&lt;/table&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', 1);

-- --------------------------------------------------------

--
-- Structure de la table `convention_ministage`
--

CREATE TABLE IF NOT EXISTS `convention_ministage` (
  `id_convention` int(11) NOT NULL,
  `nom_principale` varchar(30) DEFAULT NULL,
  `nom_etablissement` varchar(30) DEFAULT NULL,
  `nom_eleve` varchar(30) DEFAULT NULL,
  `prenom_eleve` varchar(30) DEFAULT NULL,
  `classe_eleve` varchar(30) DEFAULT NULL,
  `date_naissance_eleve` date DEFAULT NULL,
  `regime_eleve` tinyint(1) DEFAULT NULL,
  `nom_representant_legal` varchar(30) DEFAULT NULL,
  `prenom_representant_legal` varchar(30) DEFAULT NULL,
  `adresse_representant_legal` varchar(30) DEFAULT NULL,
  `tel_representant_legal` varchar(30) DEFAULT NULL,
  `classe_observation` text,
  `id_ministage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `droit`
--

CREATE TABLE IF NOT EXISTS `droit` (
  `id_droit` int(11) NOT NULL,
  `libelle_droit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `droit`
--

INSERT INTO `droit` (`id_droit`, `libelle_droit`) VALUES
(1, 'Administrateur'),
(2, 'Rédacteur'),
(3, 'Intendance'),
(4, 'GestionMiniStage'),
(5, 'EtablissementScolaire');

-- --------------------------------------------------------

--
-- Structure de la table `ecole`
--

CREATE TABLE IF NOT EXISTS `ecole` (
  `id_ecole` int(11) NOT NULL,
  `login_ecole` varchar(35) DEFAULT NULL,
  `mdp_ecole` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id_menu` int(11) NOT NULL,
  `nom_menu` varchar(30) NOT NULL,
  `id_menu_pere` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `nom_menu`, `id_menu_pere`) VALUES
(2, 'PrÃ©sentation', 0),
(3, 'mÃ©tiers de la bijouterie', 0),
(4, 'mÃ©tiers du bois', 0),
(5, 'mÃ©tiers du tertiaire', 0),
(6, 'vie scolaire', 0),
(7, 'secrÃ©tariat-intendance', 0);

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
  `nb_place` int(11) DEFAULT NULL,
  `heure_ministage` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `offre_stage`
--

CREATE TABLE IF NOT EXISTS `offre_stage` (
  `id_offre_stage` int(11) NOT NULL,
  `nom_entreprise` varchar(30) DEFAULT NULL,
  `adresse_entreprise` text,
  `cp_entreprise` int(6) DEFAULT NULL,
  `ville_entreprise` text,
  `nom_representant` varchar(30) DEFAULT NULL,
  `mail_entreprise` varchar(50) DEFAULT NULL,
  `telephone_entreprise` varchar(12) DEFAULT NULL,
  `libelle_offre_stage` varchar(30) DEFAULT NULL,
  `contenu_offre_stage` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_droit` (`id_droit`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_redacteur` (`id_redacteur`);

--
-- Index pour la table `convention_ministage`
--
ALTER TABLE `convention_ministage`
  ADD PRIMARY KEY (`id_convention`),
  ADD KEY `id_ministage` (`id_ministage`);

--
-- Index pour la table `droit`
--
ALTER TABLE `droit`
  ADD PRIMARY KEY (`id_droit`);

--
-- Index pour la table `ecole`
--
ALTER TABLE `ecole`
  ADD PRIMARY KEY (`id_ecole`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `fk_id_menu_pere` (`id_menu_pere`);

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
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `convention_ministage`
--
ALTER TABLE `convention_ministage`
  MODIFY `id_convention` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `droit`
--
ALTER TABLE `droit`
  MODIFY `id_droit` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `ecole`
--
ALTER TABLE `ecole`
  MODIFY `id_ecole` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
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

--
-- Contraintes pour la table `convention_ministage`
--
ALTER TABLE `convention_ministage`
  ADD CONSTRAINT `convention_ministage_ibfk_1` FOREIGN KEY (`id_ministage`) REFERENCES `offre_ministage` (`id_ministage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
