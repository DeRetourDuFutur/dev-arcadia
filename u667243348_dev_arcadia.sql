-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 22 juil. 2024 à 20:32
-- Version du serveur : 10.11.8-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u667243348_dev_arcadia`
--

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `animal_id` int(11) NOT NULL,
  `animal_prenom` varchar(255) NOT NULL,
  `animal_race_id` int(11) NOT NULL,
  `animal_age` varchar(255) NOT NULL,
  `animal_poids` varchar(255) NOT NULL,
  `animal_domaine_id` int(11) NOT NULL,
  `animal_visuel` varchar(255) NOT NULL,
  `animal_pays` varchar(255) NOT NULL,
  `animal_histoire` longtext NOT NULL,
  `animal_statut` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`animal_id`, `animal_prenom`, `animal_race_id`, `animal_age`, `animal_poids`, `animal_domaine_id`, `animal_visuel`, `animal_pays`, `animal_histoire`, `animal_statut`) VALUES
(1, 'Eurus', 1, '16', '190', 1, '/public/assets/img/domaines/savane/d1-an01-pc01.webp', 'Afrique', 'est un jeune éléphant originaire d\'Afrique, il a été recueilli par l\'association \"Sauvons les animaux\" en 2018. Il a été transféré à Arcadia en 2019. Il est arrivé avec une patte cassée, il a été soigné et a pu se remettre sur pied. Il est très attaché à son soigneur, il le suit partout et ne le quitte jamais. Il est très joueur et adore se baigner dans la rivière. Il est très sociable et s\'entend bien avec les autres éléphants du parc. ', 1),
(2, 'Ember', 1, '18', '156', 1, '/public/assets/img/domaines/savane/d1-an01-pc02.webp', 'Afrique', 'est une éléphante d\'Asie, elle est née en captivité en 2000. Elle a été transférée à Arcadia en 2015. Elle est très douce et calme, elle aime se promener dans le parc et manger des fruits. Elle est très proche de sa soigneuse, elle la suit partout et lui fait des câlins. Elle est très sociable et s\'entend bien avec les autres éléphants du parc.', 1),
(3, 'Grace', 2, '7', '95', 1, '/public/assets/img/domaines/savane/d1-an02-pc01.webp', 'Afrique', 'est une girafe originaire d\'Afrique, elle est née en captivité en 2010. Elle a été transférée à Arcadia en 2013. Elle est très joueuse et aime courir dans le parc. Elle est très proche de sa soigneuse, elle la suit partout et lui fait des câlins. Elle est très sociable et s\'entend bien avec les autres girafes du parc.', 1),
(4, 'Gaya', 2, '7', '101', 1, '/public/assets/img/domaines/savane/d1-an02-pc02.webp', 'Afrique', 'est une girafe originaire d\'Afrique, elle est née en captivité en 2015. Elle a été transférée à Arcadia en 2017. Elle est très joueuse et aime courir dans le parc. Elle est très proche de sa soigneuse, elle la suit partout et lui fait des câlins. Elle est très sociable et s\'entend bien avec les autres girafes du parc.', 1),
(5, 'Luna', 3, '6', '74', 1, '/public/assets/img/domaines/savane/d1-an03-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(6, 'Loki', 3, '9', '84', 1, '/public/assets/img/domaines/savane/d1-an03-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(7, 'Levan', 4, '12', '112', 1, '/public/assets/img/domaines/savane/d1-an04-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(8, 'Lyra', 4, '17', '91', 1, '/public/assets/img/domaines/savane/d1-an04-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(9, 'Rocky', 5, '9', '145', 1, '/public/assets/img/domaines/savane/d1-an05-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(10, 'Ruby', 5, '14', '123', 1, '/public/assets/img/domaines/savane/d1-an05-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(11, 'Zaphyr', 6, '14', '127', 1, '/public/assets/img/domaines/savane/d1-an06-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(12, 'Zara', 6, '9', '84', 1, '/public/assets/img/domaines/savane/d1-an06-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(13, 'Ganesha', 7, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an01-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(14, 'Gaia', 7, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an01-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(15, 'Jade', 8, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an02-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(16, 'Jax', 8, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an02-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(17, 'Penelope', 9, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an03-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(18, 'Baghera', 9, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an03-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(19, 'Pablo', 10, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an04-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(20, 'Pixie', 10, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an04-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(21, 'Tara', 11, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an05-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(22, 'Tusk', 11, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an05-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(23, 'Swala', 12, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an06-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(24, 'Sintra', 12, '9', '84', 2, '/public/assets/img/domaines/jungle/d2-an06-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(25, 'Crunch', 13, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an01-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(26, 'Crook', 13, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an01-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(27, 'Hipster', 14, '8', '96', 3, '/public/assets/img/domaines/marais/d3-an02-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(28, 'Hoppy', 14, '10', '114', 3, '/public/assets/img/domaines/marais/d3-an02-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(29, 'Grenya', 15, '2', '0.5', 3, '/public/assets/img/domaines/marais/d3-an03-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(30, 'Gribbie', 15, '3', '0.7', 3, '/public/assets/img/domaines/marais/d3-an03-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(31, 'Rocket', 16, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an04-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(32, 'Rakky', 16, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an04-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(33, 'Danaé', 17, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an05-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(34, 'Salamya', 17, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an05-pc02.webp', 'Afrique', 'histoire animal ici', 1),
(35, 'Nagini', 18, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an06-pc01.webp', 'Afrique', 'histoire animal ici', 1),
(36, 'Kaliya', 18, '9', '84', 3, '/public/assets/img/domaines/marais/d3-an06-pc02.webp', 'Afrique', 'histoire animal ici', 1);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `commentaire_id` int(11) NOT NULL,
  `commentaire_pseudo` varchar(255) NOT NULL,
  `commentaire_avis` varchar(255) NOT NULL,
  `commentaire_note` int(11) NOT NULL,
  `commentaire_date` datetime NOT NULL,
  `commentaire_statut` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`commentaire_id`, `commentaire_pseudo`, `commentaire_avis`, `commentaire_note`, `commentaire_date`, `commentaire_statut`) VALUES
(1, 'Antony M.', 'J\'y suis allé avec mes amis pour une journée de détente et de découverte. Nous avons été agréablement surpris par la qualité des installations et la diversité des animaux. Nous avons passé un excellent moment !', 4, '2024-04-24 13:41:07', 1),
(2, 'Céline D.', 'Une expérience inoubliable ! Arcadia nous offre une atmosphère magique, situation géographique oblige, et le temps d\'une journée, nous fait voyager dans un monde extraordinaire. A faire en famille, sans modération !', 4, '2024-05-12 09:07:48', 1),
(3, 'José M.', 'Je connais cet endroit depuis des années et je n\'ai jamais été déçu. Les animaux sont bien traités et les installations sont toujours propres. Je recommande la visite guidée pour une expérience encore plus immersive.', 5, '2024-05-20 21:45:34', 1),
(4, 'Tyson N.', 'Une journée très agréable placée sous le signe de la découverte et du partage. Ma fille a adoré la Savane, elle veut déjà y retourner ! Nous reviendrons, c\'est sûr. Cet endroit est simplement magique. Merci à Arcadia', 5, '2024-06-04 04:45:18', 1),
(10, 'Poppins', 'Le séjour était fantastique, Simba, Marty, Julian .. ils sont tous trop adorables ! J\'ai hâte de revenir !', 5, '2024-06-24 09:28:14', 1),
(15, 'Johnny H.', 'Quelle journée fabuleuse ! Les enfants étaient ravis et nous avons profité de ce beau temps !', 4, '2024-06-24 20:53:41', 1),
(19, 'Michael J.', 'Très bonne expérience à Arcadia ! Vraiment agréable et très bien entretenu.\r\nNous reviendrons avec plaisir', 4, '2024-07-02 19:27:01', 1),
(20, 'Natasha', 'Excellent moment en famille dans un Zoo qui se démarque par son originalité et ses valeurs !', 5, '2024-07-02 19:28:28', 1),
(23, 'Jonathan', 'Très belle expérience immersive et une richesse de la Faune et la Flore absolument captivante !', 4, '2024-07-02 19:49:10', 1);

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `contact_prenom` varchar(255) NOT NULL,
  `contact_nom` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_message` varchar(255) NOT NULL,
  `contact_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `contact_prenom`, `contact_nom`, `contact_email`, `contact_message`, `contact_date`) VALUES
(1, 'Antony', 'Masson', 'antonymasson.dev@gmail.com', 'Ce site avance bien, bravo !', '2024-04-18 12:57:15'),
(2, 'Lucas', 'Muller', 'l.muller@free.fr', 'Pas mal, tu progresses Jeune Padawan ! :p', '2024-05-14 15:43:05'),
(15, 'Antony', 'Masson', 'antonymasson.dev@gmail.com', 'Test Contact', '2024-07-22 16:47:03');

-- --------------------------------------------------------

--
-- Structure de la table `domaines`
--

CREATE TABLE `domaines` (
  `domaine_id` int(11) NOT NULL,
  `domaine_name` varchar(255) NOT NULL,
  `domaine_slogan` varchar(255) NOT NULL,
  `domaine_cover` varchar(255) NOT NULL,
  `domaine_thumbnail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `domaines`
--

INSERT INTO `domaines` (`domaine_id`, `domaine_name`, `domaine_slogan`, `domaine_cover`, `domaine_thumbnail`) VALUES
(1, 'SAVANE', 'Observez les espèces dans leur habitat naturel', '/public/assets/img/domaines/d1-cover.webp', '/public/assets/img/domaines/d1-thumbnail.webp'),
(2, 'JUNGLE', 'Observez les espèces dans leur habitat naturel', '/public/assets/uploads/domaines/d2-cover.webp', '/public/assets/uploads/domaines/d2-thumbnail.webp'),
(3, 'MARAIS', 'Observez les espèces dans leur habitat naturel', '/public/assets/img/domaines/d3-cover.webp', '/public/assets/img/domaines/d3-thumbnail.webp');

-- --------------------------------------------------------

--
-- Structure de la table `etats`
--

CREATE TABLE `etats` (
  `etat_id` int(11) NOT NULL,
  `etat_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etats`
--

INSERT INTO `etats` (`etat_id`, `etat_type`) VALUES
(1, 'Sain'),
(2, 'Fatigue'),
(3, 'Maladie'),
(4, 'Isolement');

-- --------------------------------------------------------

--
-- Structure de la table `foods`
--

CREATE TABLE `foods` (
  `food_id` int(11) NOT NULL,
  `food_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `foods`
--

INSERT INTO `foods` (`food_id`, `food_type`) VALUES
(1, 'Viande'),
(2, 'Avoine'),
(3, 'Blé'),
(4, 'Orge'),
(5, 'Fruits');

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

CREATE TABLE `horaires` (
  `horaire_id` int(11) NOT NULL,
  `horaire_jour` varchar(255) NOT NULL,
  `horaire_ouverture` varchar(255) NOT NULL,
  `horaire_fermeture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `horaires`
--

INSERT INTO `horaires` (`horaire_id`, `horaire_jour`, `horaire_ouverture`, `horaire_fermeture`) VALUES
(1, 'Lundi', '09:00', '20:30'),
(2, 'Mardi', '09:00', '20:30'),
(3, 'Mercredi', '09:00', '19:30'),
(4, 'Jeudi', '09:00', '19:30'),
(5, 'Vendredi', '09:00', '20:30'),
(6, 'Samedi', '09:00', '20:30'),
(7, 'Dimanche', '10:00', '19:00');

-- --------------------------------------------------------

--
-- Structure de la table `logos`
--

CREATE TABLE `logos` (
  `logo_id` int(11) NOT NULL,
  `logo_txtg` varchar(255) NOT NULL,
  `logo_txtd` varchar(255) NOT NULL,
  `logo_ico` varchar(255) NOT NULL,
  `logo_img` varchar(255) NOT NULL,
  `logo_lien` varchar(255) NOT NULL,
  `logo_title` varchar(255) NOT NULL,
  `logo_attribut` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `logos`
--

INSERT INTO `logos` (`logo_id`, `logo_txtg`, `logo_txtd`, `logo_ico`, `logo_img`, `logo_lien`, `logo_title`, `logo_attribut`) VALUES
(1, 'ARCADIA', 'ZOO', 'fa-solid fa-paw fa-flip-horizontal text-danger fa-lg pe-2', '/public/assets/uploads/logos/logo-arcadia.webp', '/', 'Retourner à l&amp;#039;accueil du site Arcadia', 'FRONT'),
(3, 'ARCADIA', 'ADMIN', 'fa-solid fa-paw fa-flip-horizontal text-danger fa-lg pe-2', '/public/assets/uploads/logos/logo_admin.jpg', '/', 'Retourner à l&amp;#039;accueil administration du site Arcadia', 'BACK');

-- --------------------------------------------------------

--
-- Structure de la table `navlinks`
--

CREATE TABLE `navlinks` (
  `navlink_id` int(11) NOT NULL,
  `navlink_nom` varchar(255) NOT NULL,
  `navlink_ico` varchar(255) NOT NULL,
  `navlink_lien` varchar(255) NOT NULL,
  `navlink_class` varchar(255) NOT NULL,
  `navlink_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `navlinks`
--

INSERT INTO `navlinks` (`navlink_id`, `navlink_nom`, `navlink_ico`, `navlink_lien`, `navlink_class`, `navlink_title`) VALUES
(1, 'Accueil', 'fa-solid fa-archway fa-xl ms-1 text-primary', '', 'nav-link', 'Retourner sur l\'accueil du site Arcadia'),
(2, 'Nos Animaux', 'fa-solid fa-paw fa-rotate-by fa-lg ms-1 text-secondary', 'animaux', 'btn btn-outline-success', 'Découvrir tous les animaux d\'Arcadia à travers nos 3 domaines (Savane, Jungle et Marais)'),
(3, 'Nos Services', 'fa-solid fa-wand-sparkles fa-xl ms-1 text-primary', 'services', 'nav-link', 'Découvrir tous les services que nous vous proposons à Arcadia'),
(4, 'Informations', 'fa-brands fa-elementor fa-xl ms-1 text-primary', 'informations', 'nav-link', 'Retrouvez ici toutes les informations utiles pour préparer votre prochaine visite à Arcadia'),
(5, 'Eco Label', 'fa-brands fa-pagelines fa-xl ms-1 text-primary', 'label', 'nav-link', 'Nous vous expliquons tout sur notre engagement écologique'),
(6, 'Contact', 'fa-solid fa-envelope fa-xl ms-1 text-primary', 'contact', 'nav-link', 'Vous pouvez nous contacter via ce formulaire pour nous faire part de vos suggestions et remarques');

-- --------------------------------------------------------

--
-- Structure de la table `navlinks_admin`
--

CREATE TABLE `navlinks_admin` (
  `navlink_admin_id` int(11) NOT NULL,
  `navlink_admin_nom` varchar(255) NOT NULL,
  `navlink_admin_ico` varchar(255) NOT NULL,
  `navlink_admin_lien` varchar(255) NOT NULL,
  `navlink_admin_class` varchar(255) NOT NULL,
  `navlink_admin_title` varchar(255) NOT NULL,
  `navlink_admin_a` int(11) NOT NULL,
  `navlink_admin_e` int(11) NOT NULL,
  `navlink_admin_v` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `navlinks_admin`
--

INSERT INTO `navlinks_admin` (`navlink_admin_id`, `navlink_admin_nom`, `navlink_admin_ico`, `navlink_admin_lien`, `navlink_admin_class`, `navlink_admin_title`, `navlink_admin_a`, `navlink_admin_e`, `navlink_admin_v`) VALUES
(1, 'USERS', 'fa-solid fa-users ms-1 fa-xl text-primary', 'gestion-users', 'nav-link', 'Gérer les utilisateurs', 1, 0, 0),
(2, 'SVS', 'fa-solid fa-wand-sparkles fa-xl ms-1 text-primary', 'gestion-services', 'nav-link', 'Gérer les services', 1, 1, 0),
(3, 'COMS', 'fa-solid fa-comments fa-xl ms-1 text-primary', 'gestion-avis', 'nav-link', 'Gérer les avis', 1, 1, 0),
(4, 'TIME', 'fa-solid fa-clock fa-xl ms-1 text-primary', 'gestion-horaires', 'nav-link', 'Gérer les horaires', 1, 1, 0),
(5, 'ANIM', 'fa-solid fa-paw fa-xl ms-1 text-primary', 'gestion-animaux', 'nav-link', 'Gérer les animaux', 1, 0, 0),
(7, 'NAV', 'fa-solid fa-bars-staggered fa-xl ms-1 text-primary', 'gestion-navlink', 'nav-link', 'Gérer les menus', 1, 0, 0),
(8, 'NAVAD', 'fa-solid fa-bars-progress fa-xl ms-1 text-primary', 'gestion-navlink-admin', 'nav-link', 'Gérer les menus admin', 1, 0, 0),
(10, 'LOGO', 'fa-brands fa-algolia fa-xl ms-1 text-primary', 'gestion-logos', 'nav-link', 'Gérer les logos', 1, 0, 0),
(11, 'RAPPORTS', 'fa-solid fa-notes-medical fa-xl text-primary ms-1', 'gestion-rapports', 'nav-link', 'Gérer les rapports vétérinaires', 1, 0, 1),
(12, 'DOM', 'fa-solid fa-house-crack fa-xl ms-1 text-primary', 'gestion-domaines', 'nav-link', 'Gérer les domaines', 1, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

CREATE TABLE `races` (
  `race_id` int(11) NOT NULL,
  `race_nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `races`
--

INSERT INTO `races` (`race_id`, `race_nom`) VALUES
(1, 'eléphant'),
(2, 'girafe'),
(3, 'léopard'),
(4, 'lion'),
(5, 'rhinocéros'),
(6, 'zèbre'),
(7, 'gorille'),
(8, 'jaguar'),
(9, 'panthère'),
(10, 'paresseux'),
(11, 'tigre'),
(12, 'singe'),
(13, 'crocodile'),
(14, 'hippopotame'),
(15, 'grenouille'),
(16, 'raton laveur'),
(17, 'salamandre'),
(18, 'serpent');

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

CREATE TABLE `rapports` (
  `rapport_id` int(11) NOT NULL,
  `rapport_animal_id` int(11) NOT NULL,
  `rapport_date` datetime NOT NULL,
  `rapport_etat_animal` int(11) NOT NULL,
  `rapport_food_type_id` int(11) NOT NULL,
  `rapport_food_unite_type_id` int(11) NOT NULL,
  `rapport_food_quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rapports`
--

INSERT INTO `rapports` (`rapport_id`, `rapport_animal_id`, `rapport_date`, `rapport_etat_animal`, `rapport_food_type_id`, `rapport_food_unite_type_id`, `rapport_food_quantite`) VALUES
(1, 1, '2024-07-04 12:24:56', 2, 5, 2, 19),
(2, 2, '2024-07-20 00:00:00', 1, 4, 2, 50),
(3, 4, '2024-07-19 00:00:00', 2, 1, 2, 28),
(4, 4, '2024-07-12 00:00:00', 1, 1, 2, 35),
(5, 8, '2024-07-02 00:00:00', 1, 1, 2, 29),
(6, 5, '2024-07-21 00:00:00', 2, 1, 2, 16),
(7, 9, '2024-07-21 00:00:00', 2, 3, 2, 28),
(8, 35, '2024-07-21 21:36:49', 1, 1, 2, 23),
(9, 12, '2024-07-22 16:36:40', 2, 3, 2, 8),
(10, 19, '2024-07-22 17:17:51', 1, 3, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_nom` varchar(255) NOT NULL,
  `service_contenu` varchar(255) NOT NULL,
  `service_visuel` text NOT NULL,
  `service_statut` int(11) NOT NULL,
  `service_main` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`service_id`, `service_nom`, `service_contenu`, `service_visuel`, `service_statut`, `service_main`) VALUES
(1, 'Parking gratuit', 'Vous pourrez stationner \r\nvotre véhicule dans \r\nnotre \r\nparking privé, à l\'abri \r\ndes \r\nregards indiscrets et \r\ntotalement sécurisé, \r\n24h/24.', '/public/assets/img/services/parking.webp', 1, 0),
(2, 'Photos avec nos animaux', 'Vous souhaitez immortaliser \r\nvos instants magiques avec \r\nnos animaux ? Dès votre \r\narrivée, réservez une séance \r\nphoto \r\navec l\'un(e) de nos \r\nphotographes.', '/public/assets/img/services/photos.webp', 1, 0),
(3, 'Visite guidée', 'Réservez gratuitement\r\nune \r\nvisite guidée avec \r\nl\'un(e) de \r\nnos guides. Vous \r\npourrez \r\nalors découvrir notre \r\nZoo \r\ncomme vous ne l\'avez \r\njamais vu !', '/public/assets/img/services/guide.webp', 1, 1),
(4, 'Visite en petit train', 'Venez profiter de la nature et \r\nde la compagnie des \r\nanimaux, tranquillement \r\ninstallé(e) sur nos sièges \r\ntout confort. Embarquez \r\ndans un de nos 3 petits \r\ntrains, destination Arcadia !', '/public/assets/img/services/train.webp', 1, 1),
(5, 'Boutiques & Souvenirs', 'Vous souhaitez repartir avec \r\nun souvenir de notre Zoo ? \r\nNos deux boutiques dédiées \r\nvous attendent avec \r\nchacune leurs lots de \r\nsurprises, pour petits et \r\ngrands !', '/public/assets/img/services/boutiques.webp', 1, 0),
(6, 'Restauration', 'Chez nous, il n\'y a pas que \r\nles animaux qui ont besoin \r\nde se nourrir ! Profitez de \r\nnos nombreux spots pour \r\nvous rafraîchir, grignoter un \r\nmorceau ou même déjeuner \r\nen famille. Il y \r\nen a pour tous les goûts !', '/public/assets/img/services/boissons.webp', 1, 1),
(7, 'Aires de Jeux & Repos', 'De nombreuses aires de \r\njeux sont à votre disposition \r\ndans nos 3 domaines. Vous \r\nsouhaitez faire une pause \r\nfraîcheur, \r\nà l\'ombre ? Nos aires de \r\nrepos sont également à \r\nvotre \r\ndisposition.', '/public/assets/img/services/aires.webp', 1, 0),
(8, 'Wifi Gratuit', 'Profitez d\'une connexion Wi-\r\nFi gratuite et haut débit. \r\nRestez connecté(e) et \r\npartagez vos \r\nmoments inoubliables avec \r\nvos proches.', '/public/assets/img/services/wifi.webp', 1, 0);

-- --------------------------------------------------------

--
-- Structure de la table `unites`
--

CREATE TABLE `unites` (
  `unite_id` int(11) NOT NULL,
  `unite_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `unites`
--

INSERT INTO `unites` (`unite_id`, `unite_type`) VALUES
(1, 'g'),
(2, 'kg'),
(3, 'l');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_prenom` varchar(50) NOT NULL,
  `user_nom` varchar(50) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_date` datetime NOT NULL,
  `user_statut` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `user_prenom`, `user_nom`, `user_email`, `user_pwd`, `user_role`, `user_date`, `user_statut`) VALUES
(2, 'Tyson', 'NOMANSA', 'employe1@arcadia.fr', '4ug6.CsP*]Y8', 'employee', '2024-06-25 21:44:25', '1'),
(3, 'Michael', 'JACKSON', 'veto1@arcadia.fr', '#XnL%85$a8rJ', 'veto', '2024-07-05 20:44:25', '1'),
(5, 'Antony', 'MASSON', 'admin@arcadia.fr', 'AbZ84[5@uL)c', 'admin', '2024-07-06 17:11:45', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`animal_id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`commentaire_id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Index pour la table `domaines`
--
ALTER TABLE `domaines`
  ADD PRIMARY KEY (`domaine_id`);

--
-- Index pour la table `etats`
--
ALTER TABLE `etats`
  ADD PRIMARY KEY (`etat_id`);

--
-- Index pour la table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`food_id`);

--
-- Index pour la table `horaires`
--
ALTER TABLE `horaires`
  ADD PRIMARY KEY (`horaire_id`);

--
-- Index pour la table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`logo_id`);

--
-- Index pour la table `navlinks`
--
ALTER TABLE `navlinks`
  ADD PRIMARY KEY (`navlink_id`);

--
-- Index pour la table `navlinks_admin`
--
ALTER TABLE `navlinks_admin`
  ADD PRIMARY KEY (`navlink_admin_id`);

--
-- Index pour la table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`race_id`);

--
-- Index pour la table `rapports`
--
ALTER TABLE `rapports`
  ADD PRIMARY KEY (`rapport_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Index pour la table `unites`
--
ALTER TABLE `unites`
  ADD PRIMARY KEY (`unite_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `animal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `commentaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `domaines`
--
ALTER TABLE `domaines`
  MODIFY `domaine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etats`
--
ALTER TABLE `etats`
  MODIFY `etat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `foods`
--
ALTER TABLE `foods`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `horaires`
--
ALTER TABLE `horaires`
  MODIFY `horaire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `logos`
--
ALTER TABLE `logos`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `navlinks`
--
ALTER TABLE `navlinks`
  MODIFY `navlink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `navlinks_admin`
--
ALTER TABLE `navlinks_admin`
  MODIFY `navlink_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `races`
--
ALTER TABLE `races`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `rapports`
--
ALTER TABLE `rapports`
  MODIFY `rapport_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `unites`
--
ALTER TABLE `unites`
  MODIFY `unite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
