-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 17 Janvier 2017 à 13:49
-- Version du serveur :  10.1.16-MariaDB
-- Version de PHP :  7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `hopjob`
--

-- --------------------------------------------------------

--
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id_activite` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `taux_horaire` int(11) DEFAULT NULL,
  `sous_domaine_id_sous_domaine` int(11) NOT NULL,
  `domaine_id_domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id_activite`, `libelle`, `taux_horaire`, `sous_domaine_id_sous_domaine`, `domaine_id_domaine`) VALUES
(1, 'déboucher toilettes', 12, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `titre` varchar(45) DEFAULT NULL,
  `nb_personnes` int(11) DEFAULT NULL,
  `vehicule` tinyint(1) DEFAULT NULL,
  `date_fixe` tinyint(1) DEFAULT NULL,
  `date_limite` datetime DEFAULT NULL,
  `prix_total` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `description` text,
  `type_vehicule_id_type_vehicule` int(11) NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL,
  `ville_id_ville` int(11) NOT NULL,
  `horaire_id_horaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `nb_personnes`, `vehicule`, `date_fixe`, `date_limite`, `prix_total`, `telephone`, `description`, `type_vehicule_id_type_vehicule`, `utilisateur_id_utilisateur`, `ville_id_ville`, `horaire_id_horaire`) VALUES
(1, 'Cherche une personne pour déboucher toilettes', 1, 1, 1, '2017-01-13 00:00:00', 32, 97878698, 'Ici la description', 1, 1, 36661, 2);

-- --------------------------------------------------------

--
-- Structure de la table `civilite`
--

CREATE TABLE `civilite` (
  `id_civilite` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `civilite`
--

INSERT INTO `civilite` (`id_civilite`, `libelle`) VALUES
(1, 'Monsieur'),
(2, 'Madame');

-- --------------------------------------------------------

--
-- Structure de la table `demande_service`
--

CREATE TABLE `demande_service` (
  `id_demande_service` int(11) NOT NULL,
  `duree` int(11) DEFAULT NULL,
  `taux_horaire` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `activite_id_activite` int(11) NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL,
  `annonce_id_annonce` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `demande_service`
--

INSERT INTO `demande_service` (`id_demande_service`, `duree`, `taux_horaire`, `total`, `date_debut`, `date_fin`, `activite_id_activite`, `utilisateur_id_utilisateur`, `annonce_id_annonce`) VALUES
(1, 24, 12, 35, '2017-01-09', '2017-01-13', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `document`
--

CREATE TABLE `document` (
  `id_documents` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `repertoire` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `type_document_id_type_document` int(11) NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `document`
--

INSERT INTO `document` (`id_documents`, `libelle`, `repertoire`, `date`, `type_document_id_type_document`, `utilisateur_id_utilisateur`) VALUES
(3, 'ggjjgh', 'jghgjhghj', '2017-01-18', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `domaine`
--

CREATE TABLE `domaine` (
  `id_domaine` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `domaine`
--

INSERT INTO `domaine` (`id_domaine`, `libelle`) VALUES
(1, 'Jardinage'),
(2, 'Electricité');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

CREATE TABLE `horaire` (
  `id_horaire` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `horaire`
--

INSERT INTO `horaire` (`id_horaire`, `libelle`) VALUES
(1, 'Matin'),
(2, 'Apres midi');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `id_message` int(11) NOT NULL,
  `contenu` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL,
  `utilisateur_id_utilisateur1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id_message`, `contenu`, `date`, `utilisateur_id_utilisateur`, `utilisateur_id_utilisateur1`) VALUES
(1, 'jllhilhjlhlh', '2017-01-12', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `metier`
--

CREATE TABLE `metier` (
  `id_metier` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `metier`
--

INSERT INTO `metier` (`id_metier`, `libelle`) VALUES
(1, 'Charpentier'),
(2, 'Plombier');

-- --------------------------------------------------------

--
-- Structure de la table `notation`
--

CREATE TABLE `notation` (
  `id_notation` int(11) NOT NULL,
  `commentaire` text,
  `note` int(11) DEFAULT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `notation`
--

INSERT INTO `notation` (`id_notation`, `commentaire`, `note`, `utilisateur_id_utilisateur`) VALUES
(1, 'il était cool', 4, 2);

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `id_paiement` int(11) NOT NULL,
  `effectue` tinyint(1) DEFAULT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `paiement`
--

INSERT INTO `paiement` (`id_paiement`, `effectue`, `utilisateur_id_utilisateur`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reponse_annonce`
--

CREATE TABLE `reponse_annonce` (
  `id_reponse_annonce` int(11) NOT NULL,
  `code` varchar(45) DEFAULT NULL,
  `commentaire` varchar(45) DEFAULT NULL,
  `statut_paiement` tinyint(1) DEFAULT NULL,
  `validation` tinyint(1) DEFAULT NULL,
  `annonce_id_annonce` int(11) NOT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL,
  `utilisateur_id_utilisateur1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `reponse_annonce`
--

INSERT INTO `reponse_annonce` (`id_reponse_annonce`, `code`, `commentaire`, `statut_paiement`, `validation`, `annonce_id_annonce`, `utilisateur_id_utilisateur`, `utilisateur_id_utilisateur1`) VALUES
(1, NULL, 'Je peux vous proposer mes services ', 0, 0, 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sous_domaine`
--

CREATE TABLE `sous_domaine` (
  `id_sous_domaine` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL,
  `domaine_id_domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sous_domaine`
--

INSERT INTO `sous_domaine` (`id_sous_domaine`, `libelle`, `domaine_id_domaine`) VALUES
(1, 'Couper haie', 1),
(2, 'Changer compteur electrique', 2);

-- --------------------------------------------------------

--
-- Structure de la table `stat_user`
--

CREATE TABLE `stat_user` (
  `id_stat_user` int(11) NOT NULL,
  `nb_job` int(11) DEFAULT NULL,
  `revenu` double DEFAULT NULL,
  `utilisateur_id_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stat_user`
--

INSERT INTO `stat_user` (`id_stat_user`, `nb_job`, `revenu`, `utilisateur_id_utilisateur`) VALUES
(1, 2, 1200, 1);

-- --------------------------------------------------------

--
-- Structure de la table `type_document`
--

CREATE TABLE `type_document` (
  `id_type_document` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_document`
--

INSERT INTO `type_document` (`id_type_document`, `libelle`) VALUES
(1, 'Facture'),
(2, 'Attestation');

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateur`
--

CREATE TABLE `type_utilisateur` (
  `id_type_utilisateur` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_utilisateur`
--

INSERT INTO `type_utilisateur` (`id_type_utilisateur`, `libelle`) VALUES
(1, 'Admin'),
(2, 'Travailleur'),
(3, 'Demandeur');

-- --------------------------------------------------------

--
-- Structure de la table `type_vehicule`
--

CREATE TABLE `type_vehicule` (
  `id_type_vehicule` int(11) NOT NULL,
  `libelle` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `type_vehicule`
--

INSERT INTO `type_vehicule` (`id_type_vehicule`, `libelle`) VALUES
(1, 'Voiture'),
(2, 'Camionnette');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `description` text,
  `moyenne_notation` double DEFAULT NULL,
  `civilite_id_civilite` int(11) NOT NULL,
  `type_utilisateur_id_type_utilisateur` int(11) NOT NULL,
  `ville_id_ville` int(11) NOT NULL,
  `metier_id_metier` int(11) NOT NULL,
  `domaine_id_domaine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `date_naissance`, `adresse`, `login`, `password`, `description`, `moyenne_notation`, `civilite_id_civilite`, `type_utilisateur_id_type_utilisateur`, `ville_id_ville`, `metier_id_metier`, `domaine_id_domaine`) VALUES
(1, 'test', 'test', 'test', '2017-01-09', '44 rue du maréchal Foch', 'test', 'test', 'test', 4, 1, 1, 36659, 1, 2),
(2, 'test2', 'test2', 'test2', '2017-01-11', 'mon adresse', 'test2', 'test2', 'c''est une description ', 3, 2, 2, 36664, 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `ville_departement` varchar(3) DEFAULT NULL,
  `ville_slug` varchar(255) DEFAULT NULL,
  `ville_nom` varchar(45) DEFAULT NULL,
  `ville_nom_simple` varchar(45) DEFAULT NULL,
  `ville_nom_reel` varchar(45) DEFAULT NULL,
  `ville_nom_soundex` varchar(45) DEFAULT NULL,
  `ville_nom_metaphone` varchar(45) DEFAULT NULL,
  `ville_code_postal` varchar(45) DEFAULT NULL,
  `ville_commune` varchar(45) DEFAULT NULL,
  `ville_code_commune` varchar(45) DEFAULT NULL,
  `ville_arrondissement` varchar(45) DEFAULT NULL,
  `ville_canton` varchar(45) DEFAULT NULL,
  `ville_amdi` smallint(5) DEFAULT NULL,
  `ville_population_2010` mediumint(11) DEFAULT NULL,
  `ville_population_1999` mediumint(11) DEFAULT NULL,
  `ville_population_2012` mediumint(10) DEFAULT NULL,
  `ville_densite_2010` int(11) DEFAULT NULL,
  `ville_surface` float DEFAULT NULL,
  `ville_longitude_deg` float DEFAULT NULL,
  `ville_latitude_deg` float DEFAULT NULL,
  `ville_longitude_grd` varchar(45) DEFAULT NULL,
  `ville_latitude_grd` varchar(45) DEFAULT NULL,
  `ville_longitude_dms` varchar(45) DEFAULT NULL,
  `ville_latitude_dms` varchar(45) DEFAULT NULL,
  `ville_zmin` mediumint(4) DEFAULT NULL,
  `ville_zmax` mediumint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `ville_departement`, `ville_slug`, `ville_nom`, `ville_nom_simple`, `ville_nom_reel`, `ville_nom_soundex`, `ville_nom_metaphone`, `ville_code_postal`, `ville_commune`, `ville_code_commune`, `ville_arrondissement`, `ville_canton`, `ville_amdi`, `ville_population_2010`, `ville_population_1999`, `ville_population_2012`, `ville_densite_2010`, `ville_surface`, `ville_longitude_deg`, `ville_latitude_deg`, `ville_longitude_grd`, `ville_latitude_grd`, `ville_longitude_dms`, `ville_latitude_dms`, `ville_zmin`, `ville_zmax`) VALUES
(36657, '974', 'les-avirons', 'AVIRONS', 'les avirons', 'Avirons', 'L21652', 'AFRNSLS', '97425', '401', '97401', '2', '01', NULL, 10580, 7163, 10580, 406, 26, -21.2432, 55.334, NULL, NULL, NULL, NULL, NULL, NULL),
(36658, '974', 'bras-panon', 'BRAS-PANON', 'bras panon', 'Bras-Panon', 'B6215', 'PRSPNN', '97412', '402', '97402', '3', '02', NULL, 11725, 9671, 11725, 133, 88, -20.9992, 55.6849, NULL, NULL, NULL, NULL, NULL, NULL),
(36659, '974', 'entre-deux', 'ENTRE-DEUX', 'entre deux', 'Entre-Deux', 'E53632', 'ANTRTKS', '97414', '403', '97403', '2', '03', NULL, 6133, 5167, 6133, 92, 66, -21.2494, 55.4707, NULL, NULL, NULL, NULL, NULL, NULL),
(36660, '974', 'l etang-sale', 'ETANG-SALE', 'l etang sale', 'Étang-Salé', 'L3524', 'ATNKSLL', '97427', '404', '97404', '2', '04', NULL, 13467, 11755, 13467, 354, 38, -21.2652, 55.3663, NULL, NULL, NULL, NULL, NULL, NULL),
(36661, '974', 'petite-ile', 'PETITE-ILE', 'petite ile', 'Petite-Île', 'P340', 'PTTL', '97429', '405', '97405', '2', '05', NULL, 11566, 10157, 11566, 350, 33, -21.3534, 55.5651, NULL, NULL, NULL, NULL, NULL, NULL),
(36662, '974', 'la-plaine-des-palmistes', 'PLAINE-DES-PALMISTES', 'la plaine des palmistes', 'Plaine-des-Palmistes', 'L14532145232', 'PLNTSPLMSTSL', '97431', '406', '97406', '3', '06', NULL, 5213, 3433, 5213, 62, 83, -21.134, 55.6296, NULL, NULL, NULL, NULL, NULL, NULL),
(36663, '974', 'le-port', 'PORT', 'le port', 'Port', 'L163', 'PRTL', '97420', '407', '97407', '4', '91', NULL, 38418, 38367, 38418, 2401, 16, -20.9348, 55.2987, NULL, NULL, NULL, NULL, NULL, NULL),
(36664, '974', 'la-possession', 'POSSESSION', 'la possession', 'Possession', 'L125', 'PSSNL', '97419', '408', '97408', '4', '08', NULL, 30373, 21883, 30373, 257, 118, -20.9316, 55.3354, NULL, NULL, NULL, NULL, NULL, NULL),
(36665, '974', 'saint-andre', 'SAINT-ANDRE', 'st andre', 'Saint-André', 'S53536', 'SNTNTR', '97440', '409', '97409', '3', '92', NULL, 53955, 43150, 53955, 1018, 53, -20.9599, 55.6539, NULL, NULL, NULL, NULL, NULL, NULL),
(36666, '974', 'saint-benoit', 'SAINT-BENOIT', 'st benoit', 'Saint-Benoît', 'S53153', 'SNTPNT', '97470', '410', '97410', '3', '90', NULL, 35063, 31531, 35063, 153, 229, -21.0396, 55.6972, NULL, NULL, NULL, NULL, NULL, NULL),
(36667, '974', 'saint-denis', 'SAINT-DENIS', 'ste clotilde', 'Saint-Denis', 'S5352', 'SNTTNS', '97490', '411', '97411', '1', '93', NULL, 145022, 131649, 145022, 1021, 142, 46.7107, 1.71819, NULL, NULL, NULL, NULL, NULL, NULL),
(36668, '974', 'saint-joseph', 'SAINT-JOSEPH', 'st joseph', 'Saint-Joseph', 'S5321', 'SNTJSF', '97480', '412', '97412', '2', '94', NULL, 35976, 30276, 35976, 202, 178, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36669, '974', 'saint-leu', 'SAINT-LEU', 'st leu', 'Saint-Leu', 'S534', 'SNTL', '97436', '413', '97413', '4', '95', NULL, 30966, 25310, 30966, 262, 118, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36670, '974', 'saint-louis', 'SAINT-LOUIS', 'st louis', 'Saint-Louis', 'S5342', 'SNTLS', '97450', '414', '97414', '2', '96', NULL, 52038, 43491, 52038, 531, 98, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36671, '974', 'saint-paul', 'SAINT-PAUL', 'st paul', 'Saint-Paul', 'S5314', 'SNTPL', '97460', '415', '97415', '4', '97', NULL, 103346, 87629, 103346, 428, 241, -21.0033, 55.2833, NULL, NULL, NULL, NULL, NULL, NULL),
(36672, '974', 'saint-pierre', 'SAINT-PIERRE', 'ravine des cabris', 'Saint-Pierre', 'S5316', 'SNTPR', '97432', '416', '97416', '2', '98', NULL, 79228, 69009, 79228, 833, 95, 43.6566, 6.87387, NULL, NULL, NULL, NULL, NULL, NULL),
(36673, '974', 'saint-philippe', 'SAINT-PHILIPPE', 'st philippe', 'Saint-Philippe', 'S53141', 'SNTFLP', '97442', '417', '97417', '2', '26', NULL, 5086, 4858, 5086, 33, 153, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36674, '974', 'sainte-marie', 'SAINTE-MARIE', 'ste marie', 'Sainte-Marie', 'S5356', 'SNTMR', '97438', '418', '97418', '1', '30', NULL, 29951, 26576, 29951, 344, 87, -20.8971, 55.5499, NULL, NULL, NULL, NULL, NULL, NULL),
(36675, '974', 'sainte-rose', 'SAINTE-ROSE', 'ste rose', 'Sainte-Rose', 'S5362', 'SNTRS', '97439', '419', '97419', '3', '31', NULL, 6806, 6545, 6806, 38, 177, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36676, '974', 'sainte-suzanne', 'SAINTE-SUZANNE', 'ste suzanne', 'Sainte-Suzanne', 'S5325', 'SNTSSN', '97441', '420', '97420', '1', '32', NULL, 22421, 18137, 22421, 393, 57, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36677, '974', 'salazie', 'SALAZIE', 'salazie', 'Salazie', 'S420', 'SLS', '97433', '421', '97421', '3', '33', NULL, 7510, 7400, 7510, 72, 103, -21.0269, 55.5391, NULL, NULL, NULL, NULL, NULL, NULL),
(36678, '974', 'le-tampon', 'TAMPON', 'le tampon', 'Tampon', 'L3515', 'TMPNL', '97430', '422', '97422', '2', '99', NULL, 73365, 60311, 73365, 444, 165, -21.2815, 55.518, NULL, NULL, NULL, NULL, NULL, NULL),
(36679, '974', 'les-trois-bassins', 'TROIS-BASSINS', 'les trois bassins', 'Trois-Bassins', 'L23621252', 'TRSPSNSLS', '97434', '423', '97423', '4', '36', NULL, 7121, 6597, 7121, 169, 42, -21.1059, 55.2952, NULL, NULL, NULL, NULL, NULL, NULL),
(36680, '974', 'cilaos', 'CILAOS', 'cilaos', 'Cilaos', 'C420', 'SLS', '97413', '424', '97424', '2', '22', NULL, 5807, 6115, 5807, 69, 84, -21.1367, 55.4697, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id_activite`),
  ADD KEY `fk_activite_sous_domaine1_idx` (`sous_domaine_id_sous_domaine`),
  ADD KEY `domaine_id_domaine` (`domaine_id_domaine`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `fk_annonce_type_vehicule1_idx` (`type_vehicule_id_type_vehicule`),
  ADD KEY `fk_annonce_utilisateur1_idx` (`utilisateur_id_utilisateur`),
  ADD KEY `fk_annonce_ville1_idx` (`ville_id_ville`),
  ADD KEY `fk_annonce_horaire1_idx` (`horaire_id_horaire`);

--
-- Index pour la table `civilite`
--
ALTER TABLE `civilite`
  ADD PRIMARY KEY (`id_civilite`);

--
-- Index pour la table `demande_service`
--
ALTER TABLE `demande_service`
  ADD PRIMARY KEY (`id_demande_service`),
  ADD KEY `fk_demande_service_activite1_idx` (`activite_id_activite`),
  ADD KEY `fk_demande_service_utilisateur1_idx` (`utilisateur_id_utilisateur`),
  ADD KEY `fk_demande_service_annonce1_idx` (`annonce_id_annonce`);

--
-- Index pour la table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`id_documents`),
  ADD KEY `fk_document_type_document1_idx` (`type_document_id_type_document`),
  ADD KEY `fk_document_utilisateur1_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `domaine`
--
ALTER TABLE `domaine`
  ADD PRIMARY KEY (`id_domaine`);

--
-- Index pour la table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`id_horaire`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id_message`),
  ADD KEY `fk_message_utilisateur1_idx` (`utilisateur_id_utilisateur`),
  ADD KEY `fk_message_utilisateur2_idx` (`utilisateur_id_utilisateur1`);

--
-- Index pour la table `metier`
--
ALTER TABLE `metier`
  ADD PRIMARY KEY (`id_metier`);

--
-- Index pour la table `notation`
--
ALTER TABLE `notation`
  ADD PRIMARY KEY (`id_notation`),
  ADD KEY `fk_notation_utilisateur1_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`id_paiement`),
  ADD KEY `fk_paiement_utilisateur1_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `reponse_annonce`
--
ALTER TABLE `reponse_annonce`
  ADD PRIMARY KEY (`id_reponse_annonce`),
  ADD KEY `fk_reponse_annonce_annonce1_idx` (`annonce_id_annonce`),
  ADD KEY `fk_reponse_annonce_utilisateur1_idx` (`utilisateur_id_utilisateur`),
  ADD KEY `fk_reponse_annonce_utilisateur2_idx` (`utilisateur_id_utilisateur1`);

--
-- Index pour la table `sous_domaine`
--
ALTER TABLE `sous_domaine`
  ADD PRIMARY KEY (`id_sous_domaine`),
  ADD KEY `fk_sous_domaine_domaine1_idx` (`domaine_id_domaine`);

--
-- Index pour la table `stat_user`
--
ALTER TABLE `stat_user`
  ADD PRIMARY KEY (`id_stat_user`),
  ADD KEY `fk_stat_user_utilisateur1_idx` (`utilisateur_id_utilisateur`);

--
-- Index pour la table `type_document`
--
ALTER TABLE `type_document`
  ADD PRIMARY KEY (`id_type_document`);

--
-- Index pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  ADD PRIMARY KEY (`id_type_utilisateur`);

--
-- Index pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  ADD PRIMARY KEY (`id_type_vehicule`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD KEY `fk_utilisateur_civilite_idx` (`civilite_id_civilite`),
  ADD KEY `fk_utilisateur_type_utilisateur1_idx` (`type_utilisateur_id_type_utilisateur`),
  ADD KEY `fk_utilisateur_ville1_idx` (`ville_id_ville`),
  ADD KEY `fk_utilisateur_metier1_idx` (`metier_id_metier`),
  ADD KEY `fk_utilisateur_domaine1_idx` (`domaine_id_domaine`),
  ADD KEY `ville_id_ville` (`ville_id_ville`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id_activite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `civilite`
--
ALTER TABLE `civilite`
  MODIFY `id_civilite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `demande_service`
--
ALTER TABLE `demande_service`
  MODIFY `id_demande_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `document`
--
ALTER TABLE `document`
  MODIFY `id_documents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `domaine`
--
ALTER TABLE `domaine`
  MODIFY `id_domaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `id_horaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `id_message` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `metier`
--
ALTER TABLE `metier`
  MODIFY `id_metier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `notation`
--
ALTER TABLE `notation`
  MODIFY `id_notation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `id_paiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `reponse_annonce`
--
ALTER TABLE `reponse_annonce`
  MODIFY `id_reponse_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `sous_domaine`
--
ALTER TABLE `sous_domaine`
  MODIFY `id_sous_domaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `stat_user`
--
ALTER TABLE `stat_user`
  MODIFY `id_stat_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `type_document`
--
ALTER TABLE `type_document`
  MODIFY `id_type_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `type_utilisateur`
--
ALTER TABLE `type_utilisateur`
  MODIFY `id_type_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_vehicule`
--
ALTER TABLE `type_vehicule`
  MODIFY `id_type_vehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id_ville` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36681;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `fk_activite_sous_domaine1` FOREIGN KEY (`sous_domaine_id_sous_domaine`) REFERENCES `sous_domaine` (`id_sous_domaine`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_annonce_horaire1` FOREIGN KEY (`horaire_id_horaire`) REFERENCES `horaire` (`id_horaire`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_annonce_type_vehicule1` FOREIGN KEY (`type_vehicule_id_type_vehicule`) REFERENCES `type_vehicule` (`id_type_vehicule`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_annonce_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_annonce_ville1` FOREIGN KEY (`ville_id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `demande_service`
--
ALTER TABLE `demande_service`
  ADD CONSTRAINT `fk_demande_service_activite1` FOREIGN KEY (`activite_id_activite`) REFERENCES `activite` (`id_activite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_demande_service_annonce1` FOREIGN KEY (`annonce_id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_demande_service_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `fk_document_type_document1` FOREIGN KEY (`type_document_id_type_document`) REFERENCES `type_document` (`id_type_document`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `fk_message_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_message_utilisateur2` FOREIGN KEY (`utilisateur_id_utilisateur1`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `notation`
--
ALTER TABLE `notation`
  ADD CONSTRAINT `fk_notation_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_paiement_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `reponse_annonce`
--
ALTER TABLE `reponse_annonce`
  ADD CONSTRAINT `fk_reponse_annonce_annonce1` FOREIGN KEY (`annonce_id_annonce`) REFERENCES `annonce` (`id_annonce`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reponse_annonce_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_reponse_annonce_utilisateur2` FOREIGN KEY (`utilisateur_id_utilisateur1`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `sous_domaine`
--
ALTER TABLE `sous_domaine`
  ADD CONSTRAINT `fk_sous_domaine_domaine1` FOREIGN KEY (`domaine_id_domaine`) REFERENCES `domaine` (`id_domaine`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `stat_user`
--
ALTER TABLE `stat_user`
  ADD CONSTRAINT `fk_stat_user_utilisateur1` FOREIGN KEY (`utilisateur_id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_utilisateur_civilite` FOREIGN KEY (`civilite_id_civilite`) REFERENCES `civilite` (`id_civilite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateur_domaine1` FOREIGN KEY (`domaine_id_domaine`) REFERENCES `domaine` (`id_domaine`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateur_metier1` FOREIGN KEY (`metier_id_metier`) REFERENCES `metier` (`id_metier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateur_type_utilisateur1` FOREIGN KEY (`type_utilisateur_id_type_utilisateur`) REFERENCES `type_utilisateur` (`id_type_utilisateur`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_utilisateur_ville1` FOREIGN KEY (`ville_id_ville`) REFERENCES `ville` (`id_ville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
