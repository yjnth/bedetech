-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 08 mars 2026 à 16:11
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bedetech`
--

-- --------------------------------------------------------

--
-- Structure de la table `bede`
--

CREATE TABLE `bede` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) DEFAULT NULL,
  `anneeParution` int(11) DEFAULT NULL,
  `nbPages` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `resume` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bede`
--

INSERT INTO `bede` (`id`, `titre`, `anneeParution`, `nbPages`, `description`, `resume`) VALUES
(1, 'Sanctuaire', 2001, 56, 'Un thriller fantastique et claustrophobique dans un sous-marin de l\'armée américaine.', 'Parti en mission de reconnaissance dans les eaux syriennes, le sous-marin américain USS Nebraska se retrouve pris au piège d\'une malédiction millénaire, dont nul ne semble devoir sortir vivant…'),
(2, 'Il faut flinguer Ramirez', 2018, 114, 'Et si derrière la légende du pire assassin mexicain... Se cachait le meilleur expert en aspirateurs de tous les temps ?', 'Falcon City, Arizona. Jacques Ramirez travaille à la Robotop, une entreprise d\'électroménager et l\'un des fleurons industriels du coin. Employé modèle, il bosse vite, bien, et sait surtout se faire discret. Pour cause : il est muet. Sa vie bascule le jour où deux membres d\'un dangereux cartel pensent reconnaître en lui l\'homme qui a trahi leur organisation par le passé : Ramirez, le pire assassin que le Mexique ait jamais connu. Aussi étonnant que cela puisse paraître, sous le chapeau du nettoyeur légendaire se cacherait désormais... un expert en aspirateurs hors-pair. Et maintenant que les hommes du cartel l\'ont démasqué, ils feront tout, absolument tout... pour flinguer ce fumier !'),
(3, 'Universal War One', 1998, 46, '', 'Entre Saturne et Jupiter, au coeur des jeunes Etats les plus prospères de la Fédération des Terres Unies, la troisième flotte de l\'United Earthes Force veillait inlassablement sur le périphérie du système solaire. elle assurait par son gigantisme un incroyable sentiment de sécurité à ses habitants. Mais le MUR est apparu. Si grand, si sombre. Insondable. Ici commence la Première Guerre Universelle.'),
(4, 'Le grand pouvoir du Chninkel', 1988, 134, '', 'Depuis la nuit des temps, les trois immortels s\'affrontent sans relâche. Leurs armées se combattent sans qu\'il n\'y ait jamais réellement ni vainqueur, ni survivant. Aujourd\'hui pourtant, J\'on, le petit Chninkel, esclave d\'un des immortels, a survécu. Quittant, miraculeusement indemne, le champ de bataille et, pour la première fois de sa vie, libre, le \"maître créateur du monde\" lui apparaît et lui donne le \"grand pouvoir\" pour rétablir la paix, faute de quoi le monde sera anéanti.'),
(5, 'Akira', 1990, 184, NULL, NULL),
(6, 'Corto Maltese', 1975, NULL, NULL, NULL),
(7, 'Les indes fourbes', 2019, 145, 'Une seconde partie de l\'histoire de la vie de l\'aventurier nommé don Pablos de Ségovie, vagabond exemplaire et miroir des filous ; inspirée de la première, telle qu\'en son temps la narra don Fransisco Gomez de Quevedo y Villegas, chevalier de l\'ordre de S', 'Fripouille peu recommandable mais hautement sympathique, don Pablos de Ségovie nous livre le récit de ses aventures picaresques dans l\'Espagne du Siècle d\'or, et dans cette Amérique qu\'on appelait encore les Indes. Tour à tour misérable et richissime, adoré et conspué, ses tribulations le mèneront des bas-fonds aux palais, des pics de la Cordillère aux méandres de l\'Amazone, jusqu\'à ce lieu mythique où se cristallisent tous les rêves du Nouveau Monde : l\'Eldorado !'),
(8, 'Blacksad', 2000, 46, 'L\'histoire d\'un privé qui veut venger son ex-fiancée assassinée, rappelle celle des grands maîtres du polar le plus noir.', 'Par un moche matin couleur sépia, Blacksad, détective privé de son état - ou \"fouille-merde\" selon certains - est appelé par le flic Smirnov pour reconnaître un cadavre. Il reconnaît : c\'est Natalia Wilford, une actrice avec qui il a vécu jadis la plus heureuse époque de sa vie. En bon flic, Smirnov lui conseille de garder le museau hors de cette affaire. En bon fouille-merde, Blacksad ne suit pas ce conseil avisé : un salaud a tué une femme et, par la même occasion, ses meilleurs souvenirs. Il va payer.'),
(9, 'Faces de rat', 1987, 46, 'Album hilarant et intemporel, où le mal de vivre devient le propre du rat et le propre de l\'homme.', 'Au cours de sa longue évolution, le rat a su s\'adapter à son environnement et s\'unir face au danger. Puis, constatant qu\'il avait acquis une certaine intelligence, il devint immédiatement maniaco-dépressif.'),
(10, 'Meutres Fatals Graves', 1997, 45, 'Du suspense ! De l\'amour ! De la sensualité ! De l\'action ! De la violence ! ...et plein de vraies stars faciles à reconnaitre !', 'Quand il y a un meurtre et une enquête difficiles à résoudre, c\'est l\'inspecteur Charolles qu\'on appelle ! Avec l\'aide de son fidèle adjoint Piggs – dont la testostérone semble parfois avoir remplacé les cellules grises – et de son gros flingue qui fait boum, ce petit teigneux à la gâchette facile n\'a pas son pareil pour démêler les intrigues les plus complexes et coffrer les suspects les plus loufoques.');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `libelle`) VALUES
(1, 'Polar'),
(2, 'Thriller'),
(3, 'Science-fiction'),
(4, 'Manga'),
(5, 'Humour'),
(6, 'Aventure');

-- --------------------------------------------------------

--
-- Structure de la table `illustration`
--

CREATE TABLE `illustration` (
  `id` int(11) NOT NULL,
  `chemin` varchar(255) DEFAULT NULL,
  `idRef` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `illustration`
--

INSERT INTO `illustration` (`id`, `chemin`, `idRef`) VALUES
(1, 'sanctuaire.jpg', 1),
(2, 'sanctuaire1.jpg', 1),
(3, 'sanctuaire2.jpg', 1),
(4, 'sanctuaire3.jpg', 1),
(5, 'ramirez_recto.jpg', 2),
(6, 'ramirez_verso.jpg', 2),
(7, 'UW1_t1.jpg', 3),
(8, 'uw1cof1.jpg', 3),
(9, 'uw1cof2.jpg', 3),
(10, 'uw1cof3.jpg', 3),
(11, 'uw1cof4.jpg', 3),
(12, 'uw1cof5.jpg', 3),
(13, 'uw1cof6.jpg', 3),
(14, 'chninkel.jpg', 4),
(15, 'chninkel2.jpg', 4),
(16, 'akira1.jpg', 5),
(17, 'akira2.jpg', 5),
(18, 'akira3.jpg', 5),
(19, 'akira4.jpg', 5),
(20, 'akira5.jpg', 5),
(21, 'laBalladeDeLaMerSalee.jpg', 6),
(22, 'lesEthiopiques.jpg', 6),
(23, 'sousLeSigneDuCapricorne.jpg', 6),
(24, 'enSiberie.jpg', 6),
(25, 'indes_recto.jpg', 7),
(26, 'indes_verso.jpg', 7),
(27, 'blacksad.jpg', 8),
(28, 'facesderat.jpg', 9),
(29, 'PlancheA.jpg', 9),
(30, 'PlancheB.jpg', 9),
(31, 'meurtresFatals01.jpg', 10),
(32, 'meurtresFatals02.jpg', 10);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `mail` varchar(150) NOT NULL,
  `mdp` varchar(50) DEFAULT NULL,
  `pseudo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`mail`, `mdp`, `pseudo`) VALUES
('lmct65@local.fr', 'lmct65', 'lmct65');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bede`
--
ALTER TABLE `bede`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `illustration`
--
ALTER TABLE `illustration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRef` (`idRef`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`mail`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `illustration`
--
ALTER TABLE `illustration`
  ADD CONSTRAINT `fk_illustration_bede` FOREIGN KEY (`idRef`) REFERENCES `bede` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
