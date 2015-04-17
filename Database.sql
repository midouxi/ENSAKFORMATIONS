-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Ven 17 Avril 2015 à 20:57
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `db_fc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
`id_c` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mdp_admin` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_c`, `email`, `mdp_admin`, `type`, `filiere`) VALUES
(1, 'ensak.formations@gmail.com', 'admin', 'admin', 'admin'),
(2, 'ensak@gmail.com', 'admin', 'editeur', 'lil');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `menu_titre` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `niveau` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_logo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nbr_semestre` int(10) NOT NULL,
  `domaine` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type_formations` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `duree` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fax` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Debouche_formations` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `condition_admission` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `organisation_formations` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_depot` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_entretien` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frais_formations` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frais_entretien` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo_sponsor` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `vue` int(10) NOT NULL,
  `contacte` int(10) NOT NULL,
  `inscrit` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formations`, `menu_titre`, `niveau`, `id_logo`, `titre`, `nbr_semestre`, `domaine`, `type_formations`, `duree`, `email`, `telephone`, `fax`, `Debouche_formations`, `condition_admission`, `organisation_formations`, `date_depot`, `date_entretien`, `frais_formations`, `frais_entretien`, `logo_sponsor`, `vue`, `contacte`, `inscrit`) VALUES
('lar', 'Administration rÃ©seaux', 'Licence', '../images/lar-logo.jpg', 'Licence universitaire en sciences appliquÃ©es Administration RÃ©seaux', 2, 'Informatique et rÃ©seaux', 'Formation professionnelle', '12 mois', 'ensak.formations@gmail.com', '06 61 15 07 21 / 05 23 49 23 35', '05 23 49 23 39', '../images/lar.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2014', 'Du 22 au 30/09/2014', '30 000 Dhs', '600 Dhs', '../images/sponsor-lar.jpg', 0, 0, 0),
('lil', 'IngÃ©nierie du logiciel', 'Licence', '../images/lil-logo.jpg', 'Licence universitaire en sciences appliquÃ©es IngÃ©nierie du logiciel', 2, 'Informatique', 'Formation professionnelle', '12 mois', 'ensak.formations@gmail.com', '06 61 15 07 21 / 05 23 49 23 35', '05 23 49 23 39', '../images/lil.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 31/08/2014', '15/09/2014', '30 000 Dhs', '600 Dhs', '../images/sponsor-lil.jpg', 0, 0, 0),
('lsi', 'SystÃ©me d''information', 'Licence', '../images/lsi_test-logo.jpg', 'Licence universitaire en sciences appliquÃ©es IngÃ©nierie des SystÃ¨mes dâ€™information', 2, 'Informatique', 'Formation professionnelle', '12 mois', 'ensak.formations@gmail.com', '06 61 15 07 21 / 05 23 49 23 35', '05 23 49 23 39', '../images/lsi.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2014', 'Du 22 au 30/09/2014', '30 000 Dhs', '600 Dhs', '../images/sponsor-lsi_test.jpg', 0, 0, 0),
('mi', 'Informatique', 'Mastère', '../images/mi-logo.jpg', 'Master universitaire en sciences appliquÃ©es : Informatique', 4, 'Informatique', 'Formation professionnelle', '2 ans', 'ensak.formations@gmail.com', '06 62 05 77 69 / 05 23 49 23 35', '05 23 49 23 39', '../images/mi.jpg', 'Etre titulaire dâ€™un Bac +3 (et +) scientifique ou technique ( License , License Pro â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2014', 'Du 22 au 30/09/2014 ', '60 000 Dhs', '600 Dhs', '../images/sponsor-mi.jpg', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `cin` varchar(20) NOT NULL,
  `tel` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diplome` varchar(20) NOT NULL,
  `etablissment` varchar(20) NOT NULL,
  `formation` varchar(30) NOT NULL,
  `lettre_motivation` varchar(255) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `viewed` int(10) NOT NULL DEFAULT '0',
  `contacte` int(10) NOT NULL DEFAULT '0',
  `inscrit` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `date_naissance`, `cin`, `tel`, `email`, `diplome`, `etablissment`, `formation`, `lettre_motivation`, `etat`, `viewed`, `contacte`, `inscrit`) VALUES
('inane', 'amine', '2014-01-01', 'QA157210', 5, 'inaneamine@gmail.com', 'bac+4', 'ENSAKH', 'License Ingenierie du logiciel', 'az', 'Traiter', 1, 0, 0),
('', '', '0000-00-00', '', 0, '', '', '', '', '', 'Traiter', 0, 0, 0),
('az', 'az', '2014-01-01', 'azaa', 1, 'azert@gmail.com', 'bac+2', 'azaz', 'License Ingenierie du logiciel', 'azazaz', 'Traiter', 0, 0, 0),
('x', 'x', '2014-01-01', 'x', 3, 'azert@gmail.com', 'bac+3', 'x', 'License systemes information', 'xx', 'Traiter', 0, 0, 0),
('ad', 'ad', '2014-01-01', 'ad', 1, 'azert@gmail.com', 'autre', 'ad', 'License Ingenierie du logiciel', 'ad', 'non Traiter', 1, 0, 1),
('f', 'f', '2014-01-01', 'f', 1, 'ensak.formations@gmail.com', 'bac+2', 'f', 'License Ingenierie du logiciel', 'f', 'non Traiter', 0, 0, 0),
('sadsa', 'dasda', '2015-03-19', 'asdas', 87, 'chouaf.yasser@gmail.com', 'bac+2', 'sadasasdasd', 'License Ingenierie du logiciel', 'sadasd', 'Traiter', 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `inscription_final`
--

CREATE TABLE `inscription_final` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `cne` int(20) NOT NULL,
  `cin` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `nationalite` varchar(20) NOT NULL,
  `situation` varchar(20) NOT NULL,
  `handicap` varchar(20) NOT NULL,
  `bac_annee` int(20) NOT NULL,
  `bac_serie` varchar(20) NOT NULL,
  `mention` varchar(20) NOT NULL,
  `etablissment` varchar(20) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` int(20) NOT NULL,
  `tel_parents` int(20) NOT NULL,
  `prof_ben` varchar(20) NOT NULL,
  `prof_pere` varchar(20) NOT NULL,
  `prof_mere` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription_final`
--

INSERT INTO `inscription_final` (`nom`, `prenom`, `cne`, `cin`, `date_naissance`, `lieu_naissance`, `province`, `sexe`, `nationalite`, `situation`, `handicap`, `bac_annee`, `bac_serie`, `mention`, `etablissment`, `adresse`, `email`, `tel`, `tel_parents`, `prof_ben`, `prof_pere`, `prof_mere`) VALUES
('a', 'a', 1, 'a', '2014-01-01', 'a', 'a', 'm', 'a', 'marie', 'oui', 1, 'a', 'exelent', 'public', 'a', 'azert@gmail.com', 1, 1, 'a', 'a', 'a'),
('inane', 'amine', 6, 'amine', '1999-08-28', 'ouedzem', 'khouribga', 'masculin', 'marocaine', 'a savoire', 'non', 2010, '765453467', 'BIEN', 'PUBLIC', 'ERTVYGBUHN', 'inaneamine@gmail.com', 5, 4, 'az', 'az', 'az');

-- --------------------------------------------------------

--
-- Structure de la table `lier`
--

CREATE TABLE `lier` (
  `id_formations` varchar(50) NOT NULL,
  `id_prof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lier`
--

INSERT INTO `lier` (`id_formations`, `id_prof`) VALUES
('lar', '1'),
('lsi', '1'),
('lar', '19'),
('lil', '19'),
('lsi', '19');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id_module` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_module` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_semestre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `id_semestre`, `id_formations`) VALUES
('lar-S1-M4', 'Bases de donnÃ©es', 'Semestre 1', 'lar'),
('lar-S1-M5', 'UML & POO JAVA', 'Semestre 1', 'lar'),
('lil-S1-M1', 'Programmation procÃ©durale & Algorithmique', 'Semestre 1', 'lil'),
('lil-S1-M2', 'Informatique appliquÃ©e', 'Semestre 1', 'lil'),
('lil-S1-M3', 'Programmation systÃ¨me & rÃ©seaux', 'Semestre 1', 'lil'),
('lil-S1-M4', 'Bases de donnÃ©es', 'Semestre 1', 'lil'),
('lil-S1-M5', 'UML & POO JAVA', 'Semestre 1', 'lil'),
('lil-S2-M1', 'IHM JEE & .NET', 'Semestre 2', 'lil'),
('lil-S2-M2', 'Technologie web :PHP XML', 'Semestre 2', 'lil'),
('lil-S2-M3', 'Gestion du projet', 'Semestre 2', 'lil'),
('lil-S2-M4', 'Stage et projet de fin dâ€™Ã©tudes (PFE)', 'Semestre 2', 'lil'),
('lar-S2-M1', 'Administration des rÃ©seaux', 'Semestre 2', 'lar'),
('lar-S1-M3', 'Programmation systÃ¨me & rÃ©seaux', 'Semestre 1', 'lar'),
('lar-S1-M2', 'Informatique appliquÃ©e', 'Semestre 1', 'lar'),
('lar-S1-M1', 'Programmation procÃ©durale & Algorithmique', 'Semestre 1', 'lar'),
('lar-S2-M2', 'Technologie web :PHP XML', 'Semestre 2', 'lar'),
('lar-S2-M3', 'Gestion du projet', 'Semestre 2', 'lar'),
('lar-S2-M4', 'Stage et projet de fin dâ€™Ã©tudes (PFE)', 'Semestre 2', 'lar'),
('lsi-S1-M1', 'Techniques de programmation et conception logiciels : Java et UML', 'Semestre 1', 'lsi'),
('lsi-S1-M2', 'Bases de donnÃ©es', 'Semestre 1', 'lsi'),
('lsi-S1-M3', 'SystÃ¨me dâ€™exploitation et rÃ©seau', 'Semestre 1', 'lsi'),
('lsi-S1-M4', 'Langue et Technique de Communication', 'Semestre 1', 'lsi'),
('lsi-S1-M5', 'SÃ©curitÃ© des rÃ©seaux et SystÃ¨mes dâ€™Information', 'Semestre 1', 'lsi'),
('lsi-S2-M1', 'Java avancÃ© J2EE et dÃ©veloppement Web', 'Semestre 2', 'lsi'),
('lsi-S2-M2', 'Interface Home Machine en Java et DotNet', 'Semestre 2', 'lsi'),
('lsi-S2-M3', 'Le management des projets de lâ€™Entreprise', 'Semestre 2', 'lsi'),
('lsi-S2-M4', 'Stage et projet de fin dâ€™Ã©tudes (PFE)', 'Semestre 2', 'lsi'),
('mi-S3-M2', 'Framework JEE', 'Semestre 3', 'mi'),
('mi-S3-M1', 'GÃ©nie logiciel', 'Semestre 3', 'mi'),
('mi-S2-M4', 'Management des entreprises', 'Semestre 2', 'mi'),
('mi-S2-M3', 'Programmation des applications mobiles', 'Semestre 2', 'mi'),
('mi-S2-M2', 'Analyse & conception orientÃ© objet', 'Semestre 2', 'mi'),
('mi-S2-M1', 'Administration BD Oracle', 'Semestre 2', 'mi'),
('mi-S1-M4', 'communication orale', 'Semestre 1', 'mi'),
('mi-S1-M3', 'Programmation systÃ¨me & rÃ©seaux', 'Semestre 1', 'mi'),
('mi-S1-M2', 'Programmation mathÃ©matiques', 'Semestre 1', 'mi'),
('mi-S1-M1', 'Programmation orientÃ© objet', 'Semestre 1', 'mi'),
('mi-S4-M1', 'Projet fin d''etude', 'Semestre 4', 'mi'),
('mi-S3-M3', 'ERPs', 'Semestre 3', 'mi'),
('mi-S3-M4', 'Informatique dÃ©cisionelle', 'Semestre 3', 'mi');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE `prof` (
`id_prof` int(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `descriptif` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `nom`, `prenom`, `resume`, `descriptif`, `photo`) VALUES
(1, 'agouzal', 'mehdi', '3ilm l9o9', 'm9aaawed', '/images/prof/1.jpg'),
(2, 'sfsdf', 'dsfsd', 'dsfsd', 'sdfsd', 'fdsfsdfds'),
(17, '', '', '', '', ''),
(18, '', '', '', '', ''),
(19, 'aaaaa', 'bbbbb', 'cccccc', 'dddddd', '../images/prof/aaaaa.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE `semestre` (
  `id_semestre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nbr_module` int(10) NOT NULL,
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nbr_module`, `id_formations`) VALUES
('lil-S2', 4, 'lil'),
('lil-S1', 5, 'lil'),
('lsi-S2', 4, 'lsi'),
('lsi-S1', 5, 'lsi'),
('lar-S2', 4, 'lar'),
('lar-S1', 5, 'lar'),
('cca-S1', 1, 'cca'),
('cca-S2', 2, 'cca'),
('-S1', 1, ''),
('-S2', 1, '');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_c`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
 ADD PRIMARY KEY (`id_formations`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
 ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `inscription_final`
--
ALTER TABLE `inscription_final`
 ADD PRIMARY KEY (`cin`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
 ADD PRIMARY KEY (`id_module`);

--
-- Index pour la table `prof`
--
ALTER TABLE `prof`
 ADD PRIMARY KEY (`id_prof`);

--
-- Index pour la table `semestre`
--
ALTER TABLE `semestre`
 ADD PRIMARY KEY (`id_semestre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
MODIFY `id_c` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT pour la table `prof`
--
ALTER TABLE `prof`
MODIFY `id_prof` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;