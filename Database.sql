-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 31 Mai 2015 à 14:42
-- Version du serveur: 5.5.41-cll-lve
-- Version de PHP: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ensakfor_fc`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_c` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `mdp_admin` varchar(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `filiere` varchar(50) NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id_c`, `email`, `mdp_admin`, `type`, `filiere`) VALUES
(1, 'ensak.formations@gmail.com', 'admin', 'admin', 'All'),
(2, 'ensak@gmail.com', 'admin', 'editeur', 'All'),
(15, 'khadijachoukairy@yahoo.fr', 'choukairy', 'editeur', 'GP'),
(16, 'm.moughit@gmail.com', 'moughit', 'editeur', 'LRT'),
(17, 'imad.hafidi@gmail.com', 'admin', 'editeur', 'lil'),
(18, 'imad@gmail.com', 'admin', 'editeur', 'mi'),
(19, 'ab.metrane@gmail.com', 'admin', 'editeur', 'LPL'),
(20, 'khamlichi@gmail.com', 'admin', 'editeur', 'lsi'),
(21, 'kadirims@yahoo.fr', 'admin', 'editeur', 'MGP');

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE IF NOT EXISTS `formations` (
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `menu_titre` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `niveau` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_logo` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nbr_semestre` int(10) NOT NULL,
  `domaine` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type_formations` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `duree` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `telephone` varchar(60) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `fax` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `Debouche_formations` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `condition_admission` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `organisation_formations` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_depot` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_entretien` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frais_formations` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `frais_entretien` varchar(10) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logo_sponsor` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_formations`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `formations`
--

INSERT INTO `formations` (`id_formations`, `menu_titre`, `niveau`, `id_logo`, `titre`, `nbr_semestre`, `domaine`, `type_formations`, `duree`, `email`, `telephone`, `fax`, `Debouche_formations`, `condition_admission`, `organisation_formations`, `date_depot`, `date_entretien`, `frais_formations`, `frais_entretien`, `logo_sponsor`) VALUES
('lar', 'Administration rÃ©seaux', 'Licence', '../images/lar-logo.jpg', 'Licence universitaire en sciences appliquÃ©es Administration RÃ©seaux', 2, 'Informatique et RÃ©seaux', 'Formation professionnelle', '12 Mois', 'ensak.formations@gmail.com', '06 62 05 77 69 ', '', '../images/lar.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '30 000 Dhs', '600 Dhs', '../images/sponsor-lar.jpg'),
('LRT', 'RÃ©seaux et tÃ©lÃ©communications', 'Licence', '../images/LRT-logo.', 'Licence universitaire professionnelle RÃ©seaux et TÃ©lÃ©communications', 2, 'RÃ©seaux & TÃ©lÃ©communications', 'Formation professionnelle', '12 Mois', 'm.moughit@gmail.com', '06 57 50 65 75', '', '../images/LRT.', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2015 au 14/07/16', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '30 000 Dhs', '600 Dhs', '../images/sponsor-LRT.'),
('lil', 'Ingenierie du Logiciel', 'Licence', '../images/lil-logo.jpg', 'Licence universitaire en sciences appliquÃ©es IngÃ©nierie du logiciel', 2, 'Informatique', 'Formation professionnelle', '12 Mois', 'ensak.formations@gmail.com', '06 62 05 77 69 ', '', '../images/lil.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 22/09/2015', '15/09/2015', '30 000 Dhs', '600 Dhs', '../images/sponsor-lil.jpg'),
('lsi', 'SystÃ¨me d''Information', 'Licence', '../images/lsi_test-logo.jpg', 'Licence universitaire en sciences appliquÃ©es IngÃ©nierie des SystÃ¨mes dâ€™information', 2, 'Informatique', 'Formation professionnelle', '12 Mois', 'ensak.formations@gmail.com', '06 62 05 77 69 ', '', '../images/lsi.jpg', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '30 000 Dhs', '600 Dhs', '../images/sponsor-lsi_test.jpg'),
('mi', 'SystÃ¨me Informatique', 'Master', '../images/mi-logo.jpg', 'Master universitaire en sciences appliquÃ©es : Analyse Conception des systÃ¨mes informatiques', 4, 'Informatique, GÃ©nie logiciel', 'Formation professionnelle', '24 Mois', 'ensak.formations@gmail.com', '06 62 05 77 69 ', '', '../images/mi.jpg', 'Etre titulaire dâ€™un Bac +3 (et +) scientifique ou technique ( License , License Pro â€¦ )', 'Samedi et dimanche : Du 20/10/2014 au 14/07/15', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '50 000 Dhs', '600 Dhs', '../images/sponsor-mi.jpg'),
('GE', 'GÃ©nie Ã©nergÃ©tique', 'Licence', '../images/GE-logo.', 'Licence universitaire GÃ©nie Ã©nergÃ©tique', 2, 'GÃ©nie Ã©nergÃ©tique', 'Formation professionnelle', '12 Mois', 'khadijachoukairy@yahoo.fr', '06 76397344 ', '', '../images/GE.paint', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2015 au 14/07/16', 'avant le 15/09/2015', '22 au 30/09/2015 ', '30000', '600', '../images/sponsor-GE.'),
('GP', 'GÃ©nie des ProcÃ©dÃ©s', 'Licence', '../images/GP-logo.', 'Licence universitaire en GÃ©nie des procÃ©dÃ©s', 2, 'GÃ©nie des ProcÃ©dÃ©s', 'Formation professionnelle', '12 Mois', 'licencegpensa@gmail.com', '06 00 62 62 10', '', '../images/GP.', 'Bac +2 (et plus) Scientifique ou Technique  (DEUG, BTS, DUT, ...)', 'Samedi et dimanche : Du 20/10/2015 au 14/07/16', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '30 000 Dhs', '600 Dhs', '../images/sponsor-GP.'),
('LPL', 'Production Indutrielle et Logistique', 'Licence', '../images/LPL-logo.', 'Licence universitaire Production  Industrielle et Logistique', 2, 'Logistique, Production industrielle', 'Formation professionnelle', '12 Mois', 'ab.metrane@gmail.com', '06 61 36 26 01', '', '../images/LPL.', 'Etre titulaire dâ€™un Bac +2 (et +) scientifique ou technique ( DEUG , BTS , DUT â€¦ )', 'Samedi et dimanche : Du 20/10/2015 au 14/07/16', 'avant le 15/09/2015', 'Du 22 au 30/09/2015 ', '30000 Dhs', '600 Dhs', '../images/sponsor-LPL.'),
('MGP', 'Production Industrielle et Management QualitÃ©', 'Master', '../images/MGP-logo.', 'Master  Professionnel en IngÃ©nierie de Production Industrielle et Management QualitÃ©', 4, 'IngÃ©nierie de Production Industrielle et Management QualitÃ©', 'Formation professionnelle', '24 mois', 'licencegpensa@gmail.com', '06 00 79 09 30', '', '../images/MGP.', '-   AccÃ¨s Ã  la formation en 1Ã¨re annÃ©e (M1) :\r\nBac + 3  scientifique ou technique                 \r\n-   AccÃ¨s Ã  la formation en 2Ã¨me annÃ©e (M2) :        \r\nBac + 4 scientifique ou technique                         \r\nBac +3 scientifique ou technique', 'Samedi et dimanche : Du 20/10/2015 au 14/07/16\r\nSamedi et dimanche : Du 20/10/2016 au 14/07/17', 'avant le 15/09/2015 ', 'Du 22 au 30/09/2015', '50000 Dhs', '600 Dhs', '../images/sponsor-MGP.');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `date_naissance` date NOT NULL,
  `cin` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `diplome` varchar(20) NOT NULL,
  `etablissment` varchar(100) NOT NULL,
  `formation` varchar(30) NOT NULL,
  `lettre_motivation` varchar(2000) NOT NULL,
  `etat` varchar(20) NOT NULL,
  `viewed` int(10) NOT NULL DEFAULT '0',
  `contacte` int(10) NOT NULL DEFAULT '0',
  `inscrit` int(10) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  PRIMARY KEY (`cin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`nom`, `prenom`, `date_naissance`, `cin`, `tel`, `email`, `diplome`, `etablissment`, `formation`, `lettre_motivation`, `etat`, `viewed`, `contacte`, `inscrit`, `created`) VALUES
('ER-RAKI', 'MERYEM', '1994-07-21', 'G664463', '0672619167', 'meryem.er-raki@outlook.fr', 'bac+3', 'UNIVERSITE IBN TOFAI', 'mi', 'A Monsieur le directeur de lâ€™Ã‰cole National Des Sciences AppliquÃ©es Khouribga\n\nObjet : Demande de condidature.\n\nMonsieur,\n\nJ''ai l''honneur de vous prÃ©senter ma candidature Ã  la prÃ©sÃ©lection du concours d''accÃ¨s Ã  votre honorable Ã©tablisseme', '0', 1, 0, 0, '2015-05-20 21:11:59'),
('Lihyaoui', 'Amine', '0000-00-00', 'DA70851', '0634432230', 'amustube@gmail.com', 'bac+2', 'ISTA IFRANE', 'lar', 'Lihyaoui Amine\r\n244 Bloc Elmassira \r\n25000/khouribga\r\n0634432230\r\namustube@gmail.com\r\n\r\nENSA KHOURIBA\r\n\r\n25000 / khouribga\r\n\r\nObjet : Demande dâ€™admission en licence professionnelle de Licence Administration et rÃ©seaux.\r\nMonsieur,\r\n\r\nJâ€™ai lâ€™honneur ', '0', 1, 0, 0, '2015-05-22 17:52:26'),
('MEDIOUNE', 'Badr', '1991-04-03', 'BB 80536', '0622431159', 'badr.medioune@gmail.com', 'bac+2', 'ISTA Sidi Moumen', 'lar', ' \n\n\n\n\n\n\n\n\nMonsieur,\nTitulaire du diplÃ´me technicien spÃ©cialisÃ© en rÃ©seau informatique, jâ€™ai achevÃ© ma formation au sein de l''institut spÃ©cialisÃ© de la technologie appliquÃ© Sidi Moumen, Fort de ce cursus et des connaissances techniques ', '0', 1, 0, 0, '2015-05-23 15:00:16'),
('ELGZOULI', 'AMAl', '1992-05-25', 'G634563', '0619957741', 'amale.elgzouli@gmail.com', 'bac+3', 'FST', 'mi', '', '0', 1, 0, 0, '2015-05-06 00:46:07'),
('belkotaine', 'manal', '1995-07-03', 'ID64786', '635531363', 'witch_girl16@hotmail.com', 'bac+2', 'ISTA NTIC Beni-Mella', 'lar', '', '0', 1, 0, 0, '2015-05-07 15:40:07'),
('toto', 'GL', '0000-00-00', 'BE456789', '0662134567', 'toto@gmail.com', 'bac+2', 'incita', 'lil', 'hello', '0', 1, 0, 0, '2015-05-07 22:09:31'),
('Test', 'test', '2015-05-21', '2131565', '2147483647', 'test@test.com', 'bac+3', '123456', 'LRT', '12123', '0', 1, 0, 0, '2015-05-11 22:16:15');

-- --------------------------------------------------------

--
-- Structure de la table `inscription_final`
--

CREATE TABLE IF NOT EXISTS `inscription_final` (
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
  `prof_mere` varchar(20) NOT NULL,
  PRIMARY KEY (`cin`)
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

CREATE TABLE IF NOT EXISTS `lier` (
  `id_formations` varchar(50) NOT NULL,
  `id_prof` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `lier`
--

INSERT INTO `lier` (`id_formations`, `id_prof`) VALUES
('mi', '20');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE IF NOT EXISTS `module` (
  `id_module` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nom_module` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_semestre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_module`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `module`
--

INSERT INTO `module` (`id_module`, `nom_module`, `id_semestre`, `id_formations`) VALUES
('lar-S1-M4', 'Bases de donnÃ©es', 'Semestre 1', 'lar'),
('lar-S1-M5', 'UML & POO JAVA', 'Semestre 1', 'lar'),
('LRT-S2-M2', 'Convergence voix- data sur IP', 'Semestre 2', 'LRT'),
('LRT-S2-M1', 'RÃ©seaux Mobiles 2G-3G-4G', 'Semestre 2', 'LRT'),
('LRT-S1-M5', 'RÃ©seaux et protocoles avancÃ©s', 'Semestre 1', 'LRT'),
('LRT-S1-M4', 'Java ', 'Semestre 1', 'LRT'),
('LRT-S1-M3', 'TÃ©lÃ©phonie privÃ© et public', 'Semestre 1', 'LRT'),
('LRT-S1-M2', 'RÃ©seaux et protocoles - Certifications Cisco', 'Semestre 1', 'LRT'),
('LRT-S1-M1', 'Ã©lectronique de Transmission', 'Semestre 1', 'LRT'),
('lar-S2-M1', 'Administration des rÃ©seaux', 'Semestre 2', 'lar'),
('lar-S1-M3', 'Programmation systÃ¨me & rÃ©seaux : Certifications Cisco', 'Semestre 1', 'lar'),
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
('mi-S1-M4', 'Communication orale', 'Semestre 1', 'mi'),
('mi-S1-M3', 'Programmation systÃ¨me & rÃ©seaux', 'Semestre 1', 'mi'),
('mi-S1-M2', 'Programmation mathÃ©matiques', 'Semestre 1', 'mi'),
('mi-S1-M1', 'Programmation orientÃ© objet', 'Semestre 1', 'mi'),
('dsad-S1-M1', 'sdasdsd', 'Semestre 1', 'dsad'),
('LRT-S2-M3', 'SÃ©curitÃ© des rÃ©seaux et systÃ¨mes', 'Semestre 2', 'LRT'),
('mi-S4-M1', 'Projet fin d''Ã©tude', 'Semestre 4', 'mi'),
('mi-S3-M3', 'ERP', 'Semestre 3', 'mi'),
('mi-S3-M4', 'Informatique dÃ©cisionelle', 'Semestre 3', 'mi'),
('LRT-S2-M4', 'Stage et Projet de fin dâ€™Ã©tudes (PFE)', 'Semestre 2', 'LRT'),
('lil-S1-M1', 'Programmation procÃ©durale & Algorithmique', 'Semestre 1', 'lil'),
('lil-S1-M2', 'Informatique appliquÃ©e', 'Semestre 1', 'lil'),
('lil-S1-M3', 'Programmation systÃ¨me & rÃ©seaux : Certifications Cisco', 'Semestre 1', 'lil'),
('lil-S1-M4', 'Bases de donnÃ©es', 'Semestre 1', 'lil'),
('lil-S1-M5', 'UML & POO JAVA', 'Semestre 1', 'lil'),
('lil-S2-M1', 'IHM JEE & .NET', 'Semestre 2', 'lil'),
('lil-S2-M2', 'Technologie web :PHP XML', 'Semestre 2', 'lil'),
('lil-S2-M3', 'Gestion du projet', 'Semestre 2', 'lil'),
('lil-S2-M4', 'Stage et projet de fin d Ã©tudes-PFE', 'Semestre 2', 'lil'),
('GP-S1-M1', 'MÃ©canique des fluides Initiation Ã  la simulation', 'Semestre 1', 'GP'),
('GP-S1-M2', 'Transfert de chaleur et  Thermodynamique', 'Semestre 1', 'GP'),
('GP-S1-M3', 'OpÃ©rations unitaires', 'Semestre 1', 'GP'),
('GP-S1-M4', 'Communication et  anglais de Gestion', 'Semestre 1', 'GP'),
('GP-S2-M1', 'IngÃ©nierie des procÃ©dÃ©s RÃ©acteurs', 'Semestre 2', 'GP'),
('GP-S2-M2', 'Simulation des procÃ©dÃ©s', 'Semestre 2', 'GP'),
('GP-S2-M3', 'QualitÃ©, HygiÃ¨ne et SÃ©curitÃ©', 'Semestre 2', 'GP'),
('GP-S2-M4', 'Informatique', 'Semestre 2', 'GP'),
('GP-S2-M5', 'Stage et projet de fin d''Ã©tude', 'Semestre 2', 'GP'),
('LPL-S1-M1', 'Algorithmique & programmation', 'Semestre 1', 'LPL'),
('LPL-S1-M2', 'Management des SystÃ¨mes d''information', 'Semestre 1', 'LPL'),
('LPL-S1-M3', 'Gestion des projet industriels', 'Semestre 1', 'LPL'),
('LPL-S1-M4', 'Gestion de production industrielle', 'Semestre 1', 'LPL'),
('LPL-S2-M1', 'Communication et Management', 'Semestre 2', 'LPL'),
('LPL-S2-M2', 'Recherche operationnelle', 'Semestre 2', 'LPL'),
('LPL-S2-M3', 'Logistique', 'Semestre 2', 'LPL'),
('LPL-S2-M4', 'Informatique appliquÃ©es', 'Semestre 2', 'LPL'),
('LPL-S2-M5', 'PFE', 'Semestre 2', 'LPL'),
('GE-S1-M1', 'MÃ©canique des fluides', 'Semestre 1', 'GE'),
('GE-S1-M2', 'Communication, Anglais et Gestion', 'Semestre 1', 'GE'),
('GE-S1-M3', ' Informatique ', 'Semestre 1', 'GE'),
('GE-S1-M4', 'Transfert de chaleur et Thermodynamique', 'Semestre 1', 'GE'),
('GE-S2-M1', 'Combustion et machines fluidiques', 'Semestre 2', 'GE'),
('GE-S2-M2', 'Echangeur, air humide et climatisation', 'Semestre 2', 'GE'),
('GE-S2-M3', 'Energie renouvelable, QualitÃ© HygiÃ¨ne , sÃ©curitÃ©', 'Semestre 2', 'GE'),
('GE-S2-M4', 'Simulation et logiciels industriels', 'Semestre 2', 'GE'),
('GE-S2-M5', 'PFE', 'Semestre 2', 'GE'),
('MGP-S1-M1', 'Gestion de production industrielle', 'Semestre 1', 'MGP'),
('MGP-S1-M2', 'MaÃ®trise statistique des processus', 'Semestre 1', 'MGP'),
('MGP-S1-M3', 'Informatique', 'Semestre 1', 'MGP'),
('MGP-S1-M4', 'Outils et mÃ©thodes 1', 'Semestre 1', 'MGP'),
('MGP-S2-M1', 'Gestion de projets', 'Semestre 2', 'MGP'),
('MGP-S2-M2', 'QualitÃ©, HygiÃ¨ne et SÃ©curitÃ©', 'Semestre 2', 'MGP'),
('MGP-S2-M3', 'Gestion dâ€™entreprise', 'Semestre 2', 'MGP'),
('MGP-S2-M4', 'Outils et mÃ©thodes 2', 'Semestre 2', 'MGP'),
('MGP-S3-M1', 'Maintenance industrielle', 'Semestre 3', 'MGP'),
('MGP-S3-M2', 'GPAO ERP : paramÃ©trage et mise en Å“uvre', 'Semestre 3', 'MGP'),
('MGP-S3-M3', 'Marketing et gestion des ressources humaines', 'Semestre 3', 'MGP'),
('MGP-S3-M4', 'MÃ©thodologie de lâ€™audit interne', 'Semestre 3', 'MGP'),
('MGP-S4-M1', 'PFE', 'Semestre 4', 'MGP');

-- --------------------------------------------------------

--
-- Structure de la table `prof`
--

CREATE TABLE IF NOT EXISTS `prof` (
  `id_prof` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `resume` varchar(300) NOT NULL,
  `descriptif` varchar(1000) NOT NULL,
  `photo` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `prof`
--

INSERT INTO `prof` (`id_prof`, `nom`, `prenom`, `resume`, `descriptif`, `photo`) VALUES
(20, 'Metrane ', 'abdlmotalib', 'Enseignent chercheur : RO, Programmation mathÃ©matique, Logistique', 'Enseignent chercheur : RO, Programmation mathÃ©matique, Logistique', '../images/prof/Metrane .png'),
(25, 'ftdrtd', 'tedtt', 'rdtd', 'trtfr', '../images/prof/ftdrtd.png');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

CREATE TABLE IF NOT EXISTS `semestre` (
  `id_semestre` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nbr_module` int(10) NOT NULL,
  `id_formations` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `nbr_module`, `id_formations`) VALUES
('LRT-S2', 4, 'LRT'),
('LRT-S1', 5, 'LRT'),
('lsi-S2', 4, 'lsi'),
('lsi-S1', 5, 'lsi'),
('lar-S2', 4, 'lar'),
('lar-S1', 5, 'lar'),
('dsad-S1', 1, 'dsad'),
('lil-S2', 4, 'lil'),
('cca-S1', 1, 'cca'),
('cca-S2', 2, 'cca'),
('-S1', 1, ''),
('-S2', 1, ''),
('lil-S1', 5, 'lil'),
('GP-S1', 4, 'GP'),
('GP-S2', 5, 'GP'),
('LPL-S1', 4, 'LPL'),
('LPL-S2', 5, 'LPL'),
('GE-S1', 4, 'GE'),
('GE-S2', 5, 'GE'),
('MGP-S1', 4, 'MGP'),
('MGP-S2', 4, 'MGP'),
('MGP-S3', 4, 'MGP'),
('MGP-S4', 1, 'MGP');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
