-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2024 at 05:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `our_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonces_generales`
--

CREATE TABLE `annonces_generales` (
  `id_annonce` int(11) NOT NULL,
  `text_annonce` text DEFAULT NULL,
  `date_annonce` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annonces_generales`
--

INSERT INTO `annonces_generales` (`id_annonce`, `text_annonce`, `date_annonce`) VALUES
(1, 'DÉMARRAGE DES ENSEIGNEMENTS DU SEMESTRE DU PRINTEMPS 2023-2024\r\njanvier 21', '0000-00-00'),
(2, 'CALENDRIER ET LISTES DES EXAMENS DE LA SESSION DE RATTRAPAGE – SEMESTRE D’AUTOMNE 2023-2024\r\njanvier 13', '0000-00-00'),
(3, '10ÈME ÉDITION DU CONCOURS FRANCOPHONE INTERNATIONAL « MA THÈSE EN 180 SECONDES » \r\njanvier 10', '0000-00-00'),
(4, 'COMPÉTITION « HULT PRIZE »\r\njanvier 8', '0000-00-00'),
(5, '5ÈME CONCLAVE DE SÉCURITÉ AU MAROC\r\njanvier 7', '0000-00-00'),
(555, 'premiere annonce', '0000-00-00'),
(556, 'Arrêt de cours pour la préparation des examens de la filière IDAI. Les cours seront suspendus à partir du 01/01/2024. Les examens auront lieu le 20/01/2024.', '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `annonces_specifiques`
--

CREATE TABLE `annonces_specifiques` (
  `id_annonce` int(11) NOT NULL,
  `annonce_text` text DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL,
  `date_annonce` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `annonces_specifiques`
--

INSERT INTO `annonces_specifiques` (`id_annonce`, `annonce_text`, `id_prof`, `nom_filiere`, `date_annonce`) VALUES
(1, 'FDHIOHF', 10, 'IDAI', '2024-01-12'),
(2, 'Le CC  de module de développement est prévu le samedi 16/12/2023 à 11h, amphi 6.', 10, 'IDAI', '2023-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `chefs_departemet`
--

CREATE TABLE `chefs_departemet` (
  `id_chef` int(11) NOT NULL,
  `nom_departement` char(30) DEFAULT NULL,
  `email_chef` char(50) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `nom_chef` varchar(255) DEFAULT NULL,
  `prenom_chef` varchar(255) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `DateEmbauche` date DEFAULT NULL,
  `Tele` varchar(20) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chefs_departemet`
--

INSERT INTO `chefs_departemet` (`id_chef`, `nom_departement`, `email_chef`, `password`, `nom_chef`, `prenom_chef`, `DateNaissance`, `DateEmbauche`, `Tele`, `Adresse`) VALUES
(120, 'Departement math', 'fatima.mohamed@gmail.com', 'fatima456', NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'Departement math', 'mohamedalhamed10@gmail.com', 'ALHAMED123', 'AL Hamed', 'Mohamed', '1991-02-11', '2021-01-01', '83943', 'Tanger, main street rue 32'),
(140, 'Departement phisique', 'layla.ahmad@gmail.com', 'layla321', NULL, NULL, NULL, NULL, NULL, NULL),
(180, 'Departement informatique', 'mohammed.sofia@gmail.com', 'mohammed789', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chefs_filiere`
--

CREATE TABLE `chefs_filiere` (
  `id_chef` int(11) NOT NULL,
  `email_chef` char(50) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `nom_chef` char(50) DEFAULT NULL,
  `prenom_chef` char(50) DEFAULT NULL,
  `DateNaissance` date DEFAULT NULL,
  `DateEmbauche` date DEFAULT NULL,
  `Adresse` varchar(70) DEFAULT NULL,
  `Tele` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chefs_filiere`
--

INSERT INTO `chefs_filiere` (`id_chef`, `email_chef`, `nom_filiere`, `password`, `nom_chef`, `prenom_chef`, `DateNaissance`, `DateEmbauche`, `Adresse`, `Tele`) VALUES
(10, 'mohamedznita@gmail.com', 'IDAI', 'MOHAMED.FST.TANGER', 'Znita', 'Mohamed', '1980-01-01', '2019-04-12', NULL, 834738),
(110, 'ahmed.khalil@gmail.com', 'IDAI', 'ahmed123', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'fatima.mohamed@gmail.com', 'DIP', 'fatima456', NULL, NULL, NULL, NULL, NULL, NULL),
(150, 'nour.abdullah@gmail.com', 'new_fil', 'nour567', NULL, NULL, NULL, NULL, NULL, NULL),
(200, 'abdul.karim@gmail.com', 'AD', 'abdul321', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `demandes`
--

CREATE TABLE `demandes` (
  `object` char(50) DEFAULT NULL,
  `demande_text` text DEFAULT NULL,
  `id_demande` int(11) NOT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL,
  `email_insti` varchar(255) DEFAULT NULL,
  `dest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demandes`
--

INSERT INTO `demandes` (`object`, `demande_text`, `id_demande`, `id_prof`, `nom_filiere`, `email_insti`, `dest`) VALUES
('Demande de Justification d\'Absence', 'Je sollicite l\'approbation pour justifier mon absence du 10 février au 15 février 2024 en raison d\'une situation familiale urgente. Je suis prêt à rattraper tout travail manqué. Merci de considérer ma demande.\r\nmohamed alhamed\r\n\r\n', 1111, 10, 'IDAI', 'mohamed.alhamed@gmail.com', 'professeur'),
('Demande de rendez vous', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 1112, 10, 'IDAI', 'sara.khan@example.com', 'cheff'),
('kkkk', 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 1117, 10, 'IDAI', 'robert.ward@example.com', 'professeur');

-- --------------------------------------------------------

--
-- Table structure for table `departements`
--

CREATE TABLE `departements` (
  `nom_departement` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departements`
--

INSERT INTO `departements` (`nom_departement`) VALUES
('Departement informatique'),
('Departement math'),
('Departement phisique');

-- --------------------------------------------------------

--
-- Table structure for table `emploi_temps`
--

CREATE TABLE `emploi_temps` (
  `id_seance` int(11) NOT NULL,
  `nom_module` char(30) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL,
  `date_seance` date DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  `type_seance` varchar(10) DEFAULT NULL,
  `nom_salle_lie` char(10) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `nom_departement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emploi_temps`
--

INSERT INTO `emploi_temps` (`id_seance`, `nom_module`, `nom_filiere`, `date_seance`, `heure_debut`, `heure_fin`, `type_seance`, `nom_salle_lie`, `id_prof`, `nom_departement`) VALUES
(1, 'JAVA', 'IDAI', '2024-01-01', '09:00:00', '11:00:00', 'COURS', 'E15', 10, 'Departement informatique'),
(2, 'JAVA', 'IDAI', '2024-01-07', '09:00:00', '11:30:00', 'TD', 'E15', 10, 'Departement informatique'),
(3, ' Intégration et Probabilités', 'MID', '2024-01-09', '09:00:00', '11:00:00', 'Cours', 'M1', 122, 'Departement math'),
(4, 'Topologie et Calcul différenti', 'MID', '2024-02-06', '10:00:00', '12:30:00', 'TD', 'M4', 122, 'Departement math');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

CREATE TABLE `etudiants` (
  `email_insti` char(50) NOT NULL,
  `CNE` char(10) DEFAULT NULL,
  `nom_etudiant` char(20) DEFAULT NULL,
  `prenom_etudiant` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL,
  `annee_universitaire` date DEFAULT NULL,
  `annee_naissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`email_insti`, `CNE`, `nom_etudiant`, `prenom_etudiant`, `password`, `nom_filiere`, `annee_universitaire`, `annee_naissance`) VALUES
('adam.brown@example.com', 'FST135989', 'Adam', 'Brown', 'adam123', 'IDAI', NULL, NULL),
('alice.jones@example.com', 'FST135984', 'Alice', 'Jones', 'alice123', 'AD', NULL, NULL),
('bob.miller@example.com', 'FST135985', 'Bob', 'Miller', 'bob123', 'DIP', NULL, NULL),
('emily.white@example.com', 'FST135986', 'Emily', 'White', 'emily123', 'DIP', NULL, NULL),
('jane.smith@example.com', 'FST135983', 'Jane', 'Smith', 'jane123', 'IDAI', NULL, NULL),
('john.doe@example.com', 'FST135982', 'John', 'Doe', 'john123', 'IDAI', NULL, NULL),
('laura.jenkins@example.com', 'FST135990', 'Laura', 'Jenkins', 'laura123', 'AD', NULL, NULL),
('mohamed.alhamed@gmail.com', 'FST135981', 'mohamed', 'alhamed', 'mohamed123', 'IDAI', NULL, NULL),
('peter.wilson@example.com', 'FST135987', 'Peter', 'Wilson', 'peter123', 'IDAI', NULL, NULL),
('robert.ward@example.com', 'FST135991', 'Robert', 'Ward', 'robert123', 'AD', NULL, NULL),
('sara.khan@example.com', 'FST135988', 'Sara', 'Khan', 'sara123', 'AD', NULL, NULL),
('yousra@gmail.com', 'e1345667', 'yousra', 'yousra', '2003', 'ssd', '2024-01-20', '2003-01-20'),
('yousrabenmokhtar@gmail.com', 'e14677367', 'ben Mokhtar', 'yousra', '1234', 'IDAI', '2024-01-20', '2005-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants_delegues`
--

CREATE TABLE `etudiants_delegues` (
  `id_delegue` int(11) NOT NULL,
  `email_insti` varchar(255) NOT NULL,
  `CNE` char(30) DEFAULT NULL,
  `nom_etudiant` varchar(255) DEFAULT NULL,
  `prenom_etudiant` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nom_filiere` varchar(255) DEFAULT NULL,
  `annee_universitaire` date DEFAULT NULL,
  `annee_naissance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiants_delegues`
--

INSERT INTO `etudiants_delegues` (`id_delegue`, `email_insti`, `CNE`, `nom_etudiant`, `prenom_etudiant`, `password`, `nom_filiere`, `annee_universitaire`, `annee_naissance`) VALUES
(70, 'mohamed.alhamed@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'john.doe@example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'jane.smith@example.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'yousrabenmokhtar@gmail.com', 'e14677367', 'ben Mokhtar', 'yousra', '1234', 'IDAI', '2024-01-20', '2005-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants_en_attende`
--

CREATE TABLE `etudiants_en_attende` (
  `email_insti` char(50) NOT NULL,
  `CNE` char(10) DEFAULT NULL,
  `nom_etudiant` char(20) DEFAULT NULL,
  `prenom_etudiant` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filieres`
--

CREATE TABLE `filieres` (
  `nom_filiere` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `filieres`
--

INSERT INTO `filieres` (`nom_filiere`) VALUES
('AD'),
('DIP'),
('IDAI'),
('MAT'),
('MID'),
('new_fil'),
('ssd');

-- --------------------------------------------------------

--
-- Table structure for table `materieles`
--

CREATE TABLE `materieles` (
  `id_materiel` int(11) NOT NULL,
  `nom_materiel` char(30) DEFAULT NULL,
  `nom_salle` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `nom_module` char(30) NOT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `nom_filiere` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`nom_module`, `id_prof`, `nom_filiere`) VALUES
(' Intégration et Probabilités', 122, 'MID'),
('Developement web', 130, 'IDAI'),
('JAVA', 10, 'IDAI'),
('OOP', 140, 'IDAI'),
('Reseau', 150, 'IDAI'),
('Soft skills', 160, 'IDAI'),
('Topologie et Calcul différenti', 122, 'MID');

-- --------------------------------------------------------

--
-- Table structure for table `modules_etudiant`
--

CREATE TABLE `modules_etudiant` (
  `nom_module` char(30) NOT NULL,
  `email_insti` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modules_etudiant`
--

INSERT INTO `modules_etudiant` (`nom_module`, `email_insti`) VALUES
('Developement web', 'adam.brown@example.com'),
('OOP', 'adam.brown@example.com'),
('Reseau', 'adam.brown@example.com'),
('Reseau', 'bob.miller@example.com'),
('Reseau', 'peter.wilson@example.com'),
('Soft skills', 'bob.miller@example.com'),
('Soft skills', 'john.doe@example.com');

-- --------------------------------------------------------

--
-- Table structure for table `periodes_soutenance`
--

CREATE TABLE `periodes_soutenance` (
  `nom_filiere` char(70) NOT NULL,
  `periode` varchar(255) DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `periodes_soutenance`
--

INSERT INTO `periodes_soutenance` (`nom_filiere`, `periode`, `date_debut`, `date_fin`, `description`) VALUES
('IDAI', 'Session de Printemps 2024', '2024-02-01', '2024-02-15', 'Période de soutenance pour la filière IDAI en informatique');

-- --------------------------------------------------------

--
-- Table structure for table `professeurs`
--

CREATE TABLE `professeurs` (
  `email_insti_prof` char(50) DEFAULT NULL,
  `nom_prof` char(20) DEFAULT NULL,
  `prenom_prof` char(20) DEFAULT NULL,
  `password` char(20) DEFAULT NULL,
  `id_prof` int(11) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `date_embauche` date DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `tele` varchar(20) DEFAULT NULL,
  `nom_departement` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `professeurs`
--

INSERT INTO `professeurs` (`email_insti_prof`, `nom_prof`, `prenom_prof`, `password`, `id_prof`, `date_naissance`, `date_embauche`, `adresse`, `tele`, `nom_departement`) VALUES
('mohamedznita@gmail.com', 'Znita', 'Mohamed', 'MOHAMED.FST.TANGER', 10, '1980-01-01', '2010-05-15', '123 Rue de l\'Éducation', '834738', 'Departement informatique'),
('ahmed.khalil@gmail.com', 'khalil', 'ahmed', 'ahmed123', 110, NULL, NULL, NULL, NULL, NULL),
('fatima.mohamed@gmail.com', 'mohamed', 'fatima', 'fatima456', 120, NULL, NULL, NULL, NULL, NULL),
('mohamedalhamed10@gmail.com', 'Mohamed', 'AL Hamed', 'ALHAMED123', 122, '1991-02-11', '2019-01-09', 'Tanger, main street rue 32', '83943', 'Departement math'),
('ali.hassan@gmail.com', 'hassan', 'ali', 'ali789', 130, NULL, NULL, NULL, NULL, NULL),
('layla.ahmad@gmail.com', 'ahmad', 'layla', 'layla321', 140, NULL, NULL, NULL, NULL, NULL),
('nour.abdullah@gmail.com', 'abdullah', 'nour', 'nour567', 150, NULL, NULL, NULL, NULL, NULL),
('omar.fatima@gmail.com', 'fatima', 'omar', 'omar654', 160, NULL, NULL, NULL, NULL, NULL),
('sara.yousef@gmail.com', 'yousef', 'sara', 'sara987', 170, NULL, NULL, NULL, NULL, NULL),
('mohammed.sofia@gmail.com', 'sofia', 'mohammed', 'mohammed789', 180, NULL, NULL, NULL, NULL, NULL),
('zainab.amir@gmail.com', 'amir', 'zainab', 'zainab456', 190, NULL, NULL, NULL, NULL, NULL),
('abdul.karim@gmail.com', 'karim', 'abdul', 'abdul321', 200, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reponse_demande`
--

CREATE TABLE `reponse_demande` (
  `id_reponse` int(11) NOT NULL,
  `id_demande` int(11) DEFAULT NULL,
  `objet_demande` varchar(255) DEFAULT NULL,
  `reponse_text` text DEFAULT NULL,
  `email_insti` varchar(255) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `auteur` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reponse_demande`
--

INSERT INTO `reponse_demande` (`id_reponse`, `id_demande`, `objet_demande`, `reponse_text`, `email_insti`, `id_prof`, `auteur`) VALUES
(2, 1111, 'Demande de Justification d\'Absence', 'Votre demande de justification d absence est approuvee.\r\nZnita Muhammed', 'mohamed.alhamed@gmail.com', 10, 'professeur'),
(4, 1112, 'Demande de rendez vous', 'Je serai dans mon bureau demain à 14h, disponible pour vos questions.', 'sara.khan@example.com', 10, 'cheff'),
(5, 1117, 'kkkk', '??', 'robert.ward@example.com', 10, 'professeur'),
(6, 1111, 'Demande de Justification d\'Absence', 'TEST JS ', 'mohamed.alhamed@gmail.com', 10, 'professeur'),
(7, 1111, 'Demande de Justification d\'Absence', 'test 2', 'mohamed.alhamed@gmail.com', 10, 'professeur'),
(8, 1111, 'Demande de Justification d\'Absence', 'test 3', 'mohamed.alhamed@gmail.com', 10, 'professeur'),
(9, 1111, 'Demande de Justification d\'Absence', 'test 4', 'mohamed.alhamed@gmail.com', 10, 'professeur'),
(10, 1117, 'kkkk', 'Test test ', 'robert.ward@example.com', 10, 'professeur'),
(11, 1111, 'Demande de Justification d\'Absence', 'kdnjadn', 'mohamed.alhamed@gmail.com', 10, 'professeur');

-- --------------------------------------------------------

--
-- Table structure for table `responsable_pedagogique`
--

CREATE TABLE `responsable_pedagogique` (
  `id_resp` int(11) NOT NULL,
  `email_resp` char(50) DEFAULT NULL,
  `password` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `salle_lies`
--

CREATE TABLE `salle_lies` (
  `nom_salle_lie` char(10) NOT NULL,
  `nom_departement` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salle_lies`
--

INSERT INTO `salle_lies` (`nom_salle_lie`, `nom_departement`) VALUES
('E1', 'Departement informatique'),
('E15', 'Departement informatique'),
('F18', 'Departement informatique'),
('M1', 'Departement math'),
('M11', 'Departement math'),
('M12', 'Departement math'),
('M2', 'Departement math'),
('M4', 'Departement math');

-- --------------------------------------------------------

--
-- Table structure for table `salle_non_lies`
--

CREATE TABLE `salle_non_lies` (
  `nom_salle_non_lie` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salle_non_lies`
--

INSERT INTO `salle_non_lies` (`nom_salle_non_lie`) VALUES
('F13'),
('F17'),
('F18');

-- --------------------------------------------------------

--
-- Table structure for table `signalement_pannes`
--

CREATE TABLE `signalement_pannes` (
  `id_signalement` int(11) NOT NULL,
  `id_chef` int(11) DEFAULT NULL,
  `id_delegue` int(11) DEFAULT NULL,
  `nom_salle_lie` varchar(70) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `date_signalement` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signalement_pannes`
--

INSERT INTO `signalement_pannes` (`id_signalement`, `id_chef`, `id_delegue`, `nom_salle_lie`, `description`, `date_signalement`) VALUES
(1, 10, 70, 'E15', 'Je souhaite porter à votre attention un dysfonctionnement où le datashow présente actuellement un problème d\'affichage.', '2024-01-24 01:12:22'),
(2, 10, 71, 'E1', 'Je me permets de vous informer qu\'un problème de connectivité. Les étudiants signalent des difficultés d\'accès au réseau Wi-Fi, ce qui impacte directement leur participation aux cours en ligne et leurs travaux de recherche..', '2024-01-24 01:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `soutenance_planning`
--

CREATE TABLE `soutenance_planning` (
  `ID` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Resumee` text DEFAULT NULL,
  `nom_filiere` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `soutenance_planning`
--

INSERT INTO `soutenance_planning` (`ID`, `Titre`, `Resumee`, `nom_filiere`) VALUES
(51, 'Analyse et conception d\'un système de gestion de bibliothèque en ligne', 'Ce projet vise à développer une application web moderne pour la gestion d\'une bibliothèque en ligne. L\'application permettra aux utilisateurs de rechercher des livres, de consulter des informations détaillées sur chaque livre, de vérifier la disponibilité des livres, et de gérer leurs emprunts. Le système inclura également une interface d\'administration permettant aux bibliothécaires de gérer le catalogue des livres, d\'ajouter de nouveaux livres, et de gérer les emprunts et les retours.', 'IDAI'),
(52, 'Titre 3', 'Resumee 3', 'AD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonces_generales`
--
ALTER TABLE `annonces_generales`
  ADD PRIMARY KEY (`id_annonce`);

--
-- Indexes for table `annonces_specifiques`
--
ALTER TABLE `annonces_specifiques`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `nom_filiere` (`nom_filiere`);

--
-- Indexes for table `chefs_departemet`
--
ALTER TABLE `chefs_departemet`
  ADD PRIMARY KEY (`id_chef`),
  ADD UNIQUE KEY `email_chef` (`email_chef`),
  ADD KEY `nom_departement` (`nom_departement`),
  ADD KEY `fk_chefs_dep` (`password`);

--
-- Indexes for table `chefs_filiere`
--
ALTER TABLE `chefs_filiere`
  ADD PRIMARY KEY (`id_chef`),
  ADD UNIQUE KEY `email_chef` (`email_chef`),
  ADD KEY `nom_filiere` (`nom_filiere`),
  ADD KEY `fk_chefs_fil` (`password`);

--
-- Indexes for table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `nom_filiere` (`nom_filiere`),
  ADD KEY `email_insti` (`email_insti`);

--
-- Indexes for table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`nom_departement`);

--
-- Indexes for table `emploi_temps`
--
ALTER TABLE `emploi_temps`
  ADD PRIMARY KEY (`id_seance`),
  ADD KEY `nom_module` (`nom_module`),
  ADD KEY `nom_filiere` (`nom_filiere`),
  ADD KEY `nom_salle_lie` (`nom_salle_lie`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `fk_nom_departement` (`nom_departement`);

--
-- Indexes for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`email_insti`),
  ADD UNIQUE KEY `CNE` (`CNE`),
  ADD KEY `nom_filiere` (`nom_filiere`);

--
-- Indexes for table `etudiants_delegues`
--
ALTER TABLE `etudiants_delegues`
  ADD PRIMARY KEY (`id_delegue`),
  ADD KEY `email_insti` (`email_insti`),
  ADD KEY `fk_nom_filiere` (`nom_filiere`);

--
-- Indexes for table `etudiants_en_attende`
--
ALTER TABLE `etudiants_en_attende`
  ADD PRIMARY KEY (`email_insti`),
  ADD UNIQUE KEY `CNE` (`CNE`);

--
-- Indexes for table `filieres`
--
ALTER TABLE `filieres`
  ADD PRIMARY KEY (`nom_filiere`);

--
-- Indexes for table `materieles`
--
ALTER TABLE `materieles`
  ADD PRIMARY KEY (`id_materiel`),
  ADD KEY `nom_salle` (`nom_salle`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`nom_module`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `nom_filiere` (`nom_filiere`);

--
-- Indexes for table `modules_etudiant`
--
ALTER TABLE `modules_etudiant`
  ADD PRIMARY KEY (`nom_module`,`email_insti`),
  ADD KEY `email_insti` (`email_insti`);

--
-- Indexes for table `periodes_soutenance`
--
ALTER TABLE `periodes_soutenance`
  ADD PRIMARY KEY (`nom_filiere`);

--
-- Indexes for table `professeurs`
--
ALTER TABLE `professeurs`
  ADD PRIMARY KEY (`id_prof`),
  ADD UNIQUE KEY `email_insti_prof` (`email_insti_prof`),
  ADD UNIQUE KEY `password` (`password`),
  ADD KEY `nom_departement` (`nom_departement`);

--
-- Indexes for table `reponse_demande`
--
ALTER TABLE `reponse_demande`
  ADD PRIMARY KEY (`id_reponse`),
  ADD KEY `id_demande` (`id_demande`),
  ADD KEY `email_insti` (`email_insti`),
  ADD KEY `id_prof` (`id_prof`);

--
-- Indexes for table `responsable_pedagogique`
--
ALTER TABLE `responsable_pedagogique`
  ADD PRIMARY KEY (`id_resp`),
  ADD UNIQUE KEY `email_resp` (`email_resp`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `salle_lies`
--
ALTER TABLE `salle_lies`
  ADD PRIMARY KEY (`nom_salle_lie`),
  ADD KEY `nom_departement` (`nom_departement`);

--
-- Indexes for table `salle_non_lies`
--
ALTER TABLE `salle_non_lies`
  ADD PRIMARY KEY (`nom_salle_non_lie`);

--
-- Indexes for table `signalement_pannes`
--
ALTER TABLE `signalement_pannes`
  ADD PRIMARY KEY (`id_signalement`),
  ADD KEY `id_delegue` (`id_delegue`),
  ADD KEY `nom_salle_lie` (`nom_salle_lie`),
  ADD KEY `id_chef` (`id_chef`);

--
-- Indexes for table `soutenance_planning`
--
ALTER TABLE `soutenance_planning`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `nom_filiere` (`nom_filiere`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonces_generales`
--
ALTER TABLE `annonces_generales`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=557;

--
-- AUTO_INCREMENT for table `annonces_specifiques`
--
ALTER TABLE `annonces_specifiques`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id_demande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1125;

--
-- AUTO_INCREMENT for table `emploi_temps`
--
ALTER TABLE `emploi_temps`
  MODIFY `id_seance` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `etudiants_delegues`
--
ALTER TABLE `etudiants_delegues`
  MODIFY `id_delegue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `materieles`
--
ALTER TABLE `materieles`
  MODIFY `id_materiel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=556;

--
-- AUTO_INCREMENT for table `professeurs`
--
ALTER TABLE `professeurs`
  MODIFY `id_prof` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `reponse_demande`
--
ALTER TABLE `reponse_demande`
  MODIFY `id_reponse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `signalement_pannes`
--
ALTER TABLE `signalement_pannes`
  MODIFY `id_signalement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `soutenance_planning`
--
ALTER TABLE `soutenance_planning`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonces_specifiques`
--
ALTER TABLE `annonces_specifiques`
  ADD CONSTRAINT `annonces_specifiques_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `annonces_specifiques_ibfk_2` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`);

--
-- Constraints for table `chefs_departemet`
--
ALTER TABLE `chefs_departemet`
  ADD CONSTRAINT `chefs_departemet_ibfk_1` FOREIGN KEY (`id_chef`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `chefs_departemet_ibfk_2` FOREIGN KEY (`email_chef`) REFERENCES `professeurs` (`email_insti_prof`),
  ADD CONSTRAINT `chefs_departemet_ibfk_3` FOREIGN KEY (`nom_departement`) REFERENCES `departements` (`nom_departement`),
  ADD CONSTRAINT `fk_chefs_dep` FOREIGN KEY (`password`) REFERENCES `professeurs` (`password`);

--
-- Constraints for table `chefs_filiere`
--
ALTER TABLE `chefs_filiere`
  ADD CONSTRAINT `chefs_filiere_ibfk_1` FOREIGN KEY (`id_chef`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `chefs_filiere_ibfk_2` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`),
  ADD CONSTRAINT `fk_chefs_fil` FOREIGN KEY (`password`) REFERENCES `professeurs` (`password`);

--
-- Constraints for table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `demandes_ibfk_2` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`),
  ADD CONSTRAINT `demandes_ibfk_3` FOREIGN KEY (`email_insti`) REFERENCES `etudiants` (`email_insti`);

--
-- Constraints for table `emploi_temps`
--
ALTER TABLE `emploi_temps`
  ADD CONSTRAINT `emploi_temps_ibfk_1` FOREIGN KEY (`nom_module`) REFERENCES `modules` (`nom_module`),
  ADD CONSTRAINT `emploi_temps_ibfk_2` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`),
  ADD CONSTRAINT `emploi_temps_ibfk_3` FOREIGN KEY (`nom_salle_lie`) REFERENCES `salle_lies` (`nom_salle_lie`),
  ADD CONSTRAINT `emploi_temps_ibfk_4` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `fk_nom_departement` FOREIGN KEY (`nom_departement`) REFERENCES `departements` (`nom_departement`);

--
-- Constraints for table `etudiants`
--
ALTER TABLE `etudiants`
  ADD CONSTRAINT `etudiants_ibfk_1` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`);

--
-- Constraints for table `etudiants_delegues`
--
ALTER TABLE `etudiants_delegues`
  ADD CONSTRAINT `etudiants_delegues_ibfk_1` FOREIGN KEY (`email_insti`) REFERENCES `etudiants` (`email_insti`),
  ADD CONSTRAINT `fk_nom_filiere` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`);

--
-- Constraints for table `materieles`
--
ALTER TABLE `materieles`
  ADD CONSTRAINT `materieles_ibfk_1` FOREIGN KEY (`nom_salle`) REFERENCES `salle_non_lies` (`nom_salle_non_lie`),
  ADD CONSTRAINT `materieles_ibfk_2` FOREIGN KEY (`nom_salle`) REFERENCES `salle_lies` (`nom_salle_lie`);

--
-- Constraints for table `modules`
--
ALTER TABLE `modules`
  ADD CONSTRAINT `modules_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id_prof`),
  ADD CONSTRAINT `modules_ibfk_2` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`);

--
-- Constraints for table `modules_etudiant`
--
ALTER TABLE `modules_etudiant`
  ADD CONSTRAINT `modules_etudiant_ibfk_1` FOREIGN KEY (`nom_module`) REFERENCES `modules` (`nom_module`) ON DELETE CASCADE,
  ADD CONSTRAINT `modules_etudiant_ibfk_2` FOREIGN KEY (`email_insti`) REFERENCES `etudiants` (`email_insti`) ON DELETE CASCADE;

--
-- Constraints for table `professeurs`
--
ALTER TABLE `professeurs`
  ADD CONSTRAINT `professeurs_ibfk_1` FOREIGN KEY (`nom_departement`) REFERENCES `departements` (`nom_departement`);

--
-- Constraints for table `reponse_demande`
--
ALTER TABLE `reponse_demande`
  ADD CONSTRAINT `reponse_demande_ibfk_1` FOREIGN KEY (`id_demande`) REFERENCES `demandes` (`id_demande`),
  ADD CONSTRAINT `reponse_demande_ibfk_2` FOREIGN KEY (`email_insti`) REFERENCES `etudiants` (`email_insti`),
  ADD CONSTRAINT `reponse_demande_ibfk_3` FOREIGN KEY (`id_prof`) REFERENCES `professeurs` (`id_prof`);

--
-- Constraints for table `salle_lies`
--
ALTER TABLE `salle_lies`
  ADD CONSTRAINT `salle_lies_ibfk_1` FOREIGN KEY (`nom_departement`) REFERENCES `departements` (`nom_departement`);

--
-- Constraints for table `signalement_pannes`
--
ALTER TABLE `signalement_pannes`
  ADD CONSTRAINT `signalement_pannes_ibfk_1` FOREIGN KEY (`id_delegue`) REFERENCES `etudiants_delegues` (`id_delegue`),
  ADD CONSTRAINT `signalement_pannes_ibfk_2` FOREIGN KEY (`nom_salle_lie`) REFERENCES `salle_lies` (`nom_salle_lie`),
  ADD CONSTRAINT `signalement_pannes_ibfk_3` FOREIGN KEY (`id_chef`) REFERENCES `chefs_filiere` (`id_chef`);

--
-- Constraints for table `soutenance_planning`
--
ALTER TABLE `soutenance_planning`
  ADD CONSTRAINT `soutenance_planning_ibfk_1` FOREIGN KEY (`nom_filiere`) REFERENCES `filieres` (`nom_filiere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
