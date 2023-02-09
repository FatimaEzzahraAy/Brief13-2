-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 fév. 2023 à 12:19
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_immobilier`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `IdAnnonce` int(11) NOT NULL,
  `TitreAnnonce` varchar(40) NOT NULL,
  `ImageAnnonce` varchar(100) NOT NULL,
  `DescriptionAnnonce` text NOT NULL,
  `SuperficieAnnonce` int(11) NOT NULL,
  `AdresseAnnonce` text NOT NULL,
  `MontantAnnonce` double NOT NULL,
  `DateAnnonce` date NOT NULL,
  `TypeAnnonce` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`IdAnnonce`, `TitreAnnonce`, `ImageAnnonce`, `DescriptionAnnonce`, `SuperficieAnnonce`, `AdresseAnnonce`, `MontantAnnonce`, `DateAnnonce`, `TypeAnnonce`) VALUES
(1, 'Très joli app', 'ap1.jfif', 'Appartement se compose deux chambres dont une suite parentale, deux salle de bain, et une cuisine équipée place de parking.', 80, 'premier étage d\'une copropriété de bon standing sur Racine Casablanca', 8000, '2023-02-02', 'Location'),
(2, 'Appt meublé', 'Ap2.jfif', 'Appt meublé ensoleillé et aéré se compose d\'une chambre, salle de bain et un sallon . Tranche proche des commodités : café, mosquée, supérette, accès à plage, aire de jeux', 61, 'Ola Blanca 1. Sis au 2e étage Casablanca', 790000, '2022-02-22', 'Vente'),
(3, 'Un app de haut standing', 'Ap3.jfif', 'Un appartement de haut standing avec l\'ascenseur dans un immeuble calme et ensoleille, amenagement soigne et beau materiaux.\r\nCompose de : deux chambre à coucher dont une suite parentale – Dressing - un grand salon - salle à manger – Cuisine équipe – climatisation centrale - 2 salle de bain - salle d\'eau.', 94, 'Prestigia au Rez de chaussée, Hay Riad, Rabat', 8500, '2023-02-02', 'Location'),
(4, 'Joli appartement', 'Ap4.jfif', 'Joli appartement à louer vide chambre salon cuisine équipée salle de bain place de parking', 100, 'Val fleuri 2 Casablanca', 6000, '2023-02-02', 'Location'),
(5, 'Joli appartement', 'Ap5.jpg', 'Joli appartement à louer vide chambre salon cuisine équipée salle de bain place de parking', 100, 'Val fleuri 2 Casablanca', 6000, '2023-02-02', 'Location'),
(6, 'App à  Oulfa', '63e4d624f35db4.48938821.jfif', 'Appartement uniquement pour famille ou célibataire femme. Appartement très bien ensoleillé, très grand et spacieux composé de 3 chambres (1chambre fermée et 2 chambres ouvertes sans porte), un grand hall, 1SDB, 1grande cuisine et 1balcon + sta7.\r\nQuartier sécurisé, proche de toutes commodités (écoles, marchés, grandes surfaces marjane & BIM, épiceries, Hamam, transports..), voisinage très calme et endroit familial.', 100, 'Boulevard Melouia, rue 123 n°99, 1er étage, Casablanca', 2500, '2023-02-02', 'Location'),
(7, 'App Tilila', 'Ap7.jfif', 'L\'appartement se compose de deux chambres, salon avec balcon, cuisine et deux salles de bains.\r\nPour plus de renseignements et d’opportunités merci de visiter l’agence charki service Agadir à Avenue ghaza Hay Tilila (en face de Attijari wafa bank )', 65, 'premier étage dans une résidence familial à TILILA Agadir', 660000, '2023-02-02', 'Vente'),
(8, 'Extraordinaire App', 'Ap8.jfif', 'appartements de luxe bien fini dans un quartier très calme, se  compose de 2 chambres 2 salles de bain salon cuisine  bien équipé', 86, 'A oulad zian avant centre technique de voiture OULAD ZIAN CASABLANCA', 780000, '2023-02-02', 'Vente'),
(9, 'App Hay farah', 'Ap9.jfif', 'Appartementse compose de 2 chambres, salon, cuisine et une salle de bain', 64, 'Premier étage, résidence Al Farah, le quartier Al Farah, Casablanca', 440000, '2023-02-02', 'Vente'),
(10, 'Bel App Agdal', 'Ap10.jfif', 'Agence Between met en vente un joli appartement en vente,\r\nCe appartement est composé de 5 pièces dont :\r\n( 3 chambres/ 2 salons/2 salles de bain).\r\n', 140, 'Rez de chaussée, Agdal Rabat', 2200000, '2023-02-02', 'Vente');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`IdAnnonce`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `IdAnnonce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
