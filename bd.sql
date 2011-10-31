-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Dim 23 Octobre 2011 à 11:10
-- Version du serveur: 5.1.36
-- Version de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `supersonkswi`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE IF NOT EXISTS `competence` (
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `competence`
--

INSERT INTO `competence` (`type`) VALUES
('java'),
('php'),
('mysql'),
('c'),
('.net');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id_entreprise` int(3) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `observations` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` int(10) NOT NULL,
  `ville` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `rue` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(10) NOT NULL,
  PRIMARY KEY (`id_entreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `nom`, `observations`, `mail`, `codepostal`, `ville`, `rue`, `telephone`) VALUES
(3, 'google', 'blablabla', 'kevin@yahoo.fr', 75236, 'groland', '29 rue de trux', 175263589),
(4, 'facebook', 'lorem ipsum', 'facebook@yahoo.fr', 75012, 'lyon', '32 rue de machin', 237314585);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etudiant` int(3) NOT NULL AUTO_INCREMENT,
  `statut` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `civilite` char(3) COLLATE utf8_unicode_ci NOT NULL,
  `nationalite` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `observations` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` int(10) NOT NULL,
  `rue` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codepostal` int(5) NOT NULL,
  `ville` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_entreprise` int(3) DEFAULT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `datedenaissance` date NOT NULL,
  `cv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_etudiant`),
  KEY `id_entreprise` (`id_entreprise`),
  KEY `ville` (`ville`),
  KEY `codepostal` (`codepostal`),
  KEY `rue` (`rue`),
  KEY `telephone` (`telephone`),
  KEY `mail` (`mail`),
  KEY `mail_2` (`mail`),
  KEY `telephone_2` (`telephone`),
  KEY `id_entreprise_2` (`id_entreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etudiant`, `statut`, `civilite`, `nationalite`, `observations`, `mail`, `telephone`, `rue`, `codepostal`, `ville`, `id_entreprise`, `nom`, `prenom`, `datedenaissance`, `cv`) VALUES
(4, 'pris', 'm', 'francaise', 'blablabla', 'kevin@yahoo.fr', 175263589, '29 rue de trux', 75236, 'groland', 4, 'jean', 'paul', '2011-10-19', ''),
(5, 'libre', 'Me', 'chinoise', 'lorem ipsum', 'facebook@yahoo.fr', 237314585, '32 rue de machin', 75012, 'lyon', NULL, 'patrick', 'bisce', '2011-10-03', '');

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `id_mission` int(3) NOT NULL AUTO_INCREMENT,
  `id_entreprise` int(3) NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `etat` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `observations` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_mission`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Contenu de la table `mission`
--

INSERT INTO `mission` (`id_mission`, `id_entreprise`, `description`, `etat`, `observations`) VALUES
(1, 4, 'creuser dans la mine', 'dispo', 'c''est de la merde'),
(2, 4, 'creuser dans la mine', 'dispo', 'blablabla');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilsateurs` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(41) COLLATE utf8_unicode_ci NOT NULL,
  `statut` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_utilsateurs`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilsateurs`, `login`, `mail`, `mdp`, `statut`) VALUES
(1, 'admin', 'admin@yahoo.fr', '86ff11bd7933c00a2aaa8efafa4e5266c45b26b0', 'admin');
