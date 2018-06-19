-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 05:55 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `image_id`, `nom`) VALUES
(3, 9, 'Légumes'),
(4, 10, 'fruits');

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `valider` tinyint(1) NOT NULL,
  `date` datetime DEFAULT NULL,
  `reference` int(11) NOT NULL,
  `commande` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `utilisateur_id`, `valider`, `date`, `reference`, `commande`) VALUES
(92, 9, 1, '2017-09-14 08:33:33', 73, 'a:7:{s:3:\"tva\";a:1:{s:5:\"%1.75\";d:0.089999999999999997;}s:7:\"produit\";a:1:{i:18;a:4:{s:9:\"reference\";s:9:\"aubergine\";s:8:\"quantite\";i:1;s:6:\"prixHT\";d:5;s:7:\"prixTTC\";d:5.0899999999999999;}}s:9:\"livraison\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:11:\"facturation\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:6:\"prixHT\";d:5;s:7:\"prixTTC\";d:5.0899999999999999;s:5:\"token\";s:40:\"ed13f222c76c51bba0e1bf0f91611794b283c214\";}'),
(93, 9, 1, '2017-09-24 20:56:58', 74, 'a:7:{s:3:\"tva\";a:1:{s:5:\"%1.75\";d:0.46000000000000002;}s:7:\"produit\";a:1:{i:18;a:4:{s:9:\"reference\";s:9:\"aubergine\";s:8:\"quantite\";s:1:\"5\";s:6:\"prixHT\";d:5;s:7:\"prixTTC\";d:5.0899999999999999;}}s:9:\"livraison\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:11:\"facturation\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:6:\"prixHT\";d:25;s:7:\"prixTTC\";d:25.460000000000001;s:5:\"token\";s:40:\"ebc41f67fae7a49402b042ebc870c879de76e4fe\";}'),
(94, 9, 1, '2017-10-04 08:15:56', 75, 'a:7:{s:3:\"tva\";a:1:{s:3:\"%20\";d:4.21;}s:7:\"produit\";a:1:{i:21;a:4:{s:9:\"reference\";s:13:\"Noix d\'acajou\";s:8:\"quantite\";s:1:\"3\";s:6:\"prixHT\";d:7;s:7:\"prixTTC\";d:8.4000000000000004;}}s:9:\"livraison\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:11:\"facturation\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:6:\"prixHT\";d:21;s:7:\"prixTTC\";d:25.210000000000001;s:5:\"token\";s:40:\"c43233d30305294bf2f1c646570503fbae7c5786\";}'),
(95, 9, 1, '2017-10-05 10:08:26', 76, 'a:7:{s:3:\"tva\";a:1:{s:5:\"%1.75\";d:0.089999999999999997;}s:7:\"produit\";a:1:{i:18;a:4:{s:9:\"reference\";s:9:\"aubergine\";s:8:\"quantite\";i:1;s:6:\"prixHT\";d:5;s:7:\"prixTTC\";d:5.0899999999999999;}}s:9:\"livraison\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:11:\"facturation\";a:8:{s:6:\"prenom\";s:8:\"Mouhamed\";s:3:\"nom\";s:7:\"Gandega\";s:9:\"telephone\";s:10:\"0762656718\";s:7:\"adresse\";s:21:\"6, allee d\'ARZ Antony\";s:2:\"cp\";s:5:\"92160\";s:5:\"ville\";s:6:\"Antony\";s:4:\"pays\";s:6:\"France\";s:10:\"complement\";N;}s:6:\"prixHT\";d:5;s:7:\"prixTTC\";d:5.0899999999999999;s:5:\"token\";s:40:\"be71e0429a3a13f1cabefbe8ec45b51ee0b3aa83\";}');

-- --------------------------------------------------------

--
-- Table structure for table `ext_log_entries`
--

CREATE TABLE `ext_log_entries` (
  `id` int(11) NOT NULL,
  `action` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `logged_at` datetime NOT NULL,
  `object_id` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `version` int(11) NOT NULL,
  `data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ext_translations`
--

CREATE TABLE `ext_translations` (
  `id` int(11) NOT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `object_class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `field` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `path`, `updated_at`, `name`) VALUES
(9, 'http://cp.lakanal.free.fr/exercices/jeux/memory/legumes/legumes.png', NULL, ''),
(10, 'http://img0.mxstatic.com/wallpapers/238cdfc903a19ad39ea901619dd55d47_large.jpeg', NULL, ''),
(11, 'http://www.lorand-nature.fr/images/Image/poivron_rouge_001_1403099063.jpg', NULL, ''),
(12, 'https://img2.topsante.com/var/topsante/storage/images/medecine/cancers/cancer-de-la-prostate/prevenir/le-piment-bienfaiteur-de-la-prostate-365/86918-2-fre-FR/Le-piment-bienfaiteur-de-la-prostate_width1024.jpg', NULL, ''),
(13, 'http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg', NULL, ''),
(14, 'http://www.leshallesdelodie.fr/medias/images/poivrons-verts.jpg', NULL, ''),
(15, 'http://www.boitearecettes.com/fruits_legumes/raisins-6.gif', NULL, ''),
(16, 'http://www.orangeclaire.com/images/oce_orange_01.jpg', NULL, ''),
(17, 'http://www.cigalife.com/ori-e-liquide-cerise-403.jpg', NULL, ''),
(18, '384cd523ef378fdbd5bfd07449f242259b7124c8.jpeg', '2017-09-11 10:26:49', 'goyave'),
(20, 'de730085c0b5174cfd1aa7f6fdabf1ae2c6f45ed.jpeg', '2017-09-11 12:32:05', 'wdwd'),
(21, 'be5f23dd4f9194fecd214bcae84c6334290d9851.jpeg', '2017-09-11 11:00:00', 'wdwd'),
(22, 'bdd7e336abb697c97f4f18026a1d78fabbb53ce0.jpeg', '2017-09-14 08:28:57', 'carotte'),
(23, 'c910e15f65ed131ccf1ca9ac47b042f501ce32c7.jpeg', '2017-09-14 08:32:17', 'aubergine'),
(24, '510732eec711f5ae2e4ef3ce36be8cf8034a58f2.jpeg', '2017-09-14 07:55:36', 'orange'),
(25, 'f6faf4491aa1ea853cecd3a590f4ec98be38801a.jpeg', '2017-09-14 08:01:32', 'mangue'),
(26, '818cc0d9985ec67e754d713ba9553143a90c58c6.jpeg', '2017-09-14 08:18:41', 'noix d\'acajou'),
(27, '73c4d42f0901b1287c9ee1918553546533bd81b4.jpeg', '2017-09-18 19:56:54', 'mandarine');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `titre`, `contenu`, `slug`) VALUES
(8, 'CGV1/étal', '<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L&#39;avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme &#39;Du texte. Du texte. Du texte.&#39; est qu&#39;il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour &#39;Lorem Ipsum&#39; vous conduira vers de nombreux sites qui n&#39;en sont encore qu&#39;&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d&#39;y rajouter de petits clins d&#39;oeil, voire des phrases embarassantes).</p>', 'cgv1-etal'),
(9, 'CGV2', '<p>On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp&ecirc;che de se concentrer sur la mise en page elle-m&ecirc;me. L&#39;avantage du Lorem Ipsum sur un texte g&eacute;n&eacute;rique comme &#39;Du texte. Du texte. Du texte.&#39; est qu&#39;il poss&egrave;de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran&ccedil;ais standard. De nombreuses suites logicielles de mise en page ou &eacute;diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d&eacute;faut, et une recherche pour &#39;Lorem Ipsum&#39; vous conduira vers de nombreux sites qui n&#39;en sont encore qu&#39;&agrave; leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire d&#39;y rajouter de petits clins d&#39;oeil, voire des phrases embarassantes).</p>', 'cgv2');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `tva_id` int(11) NOT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `prix` double NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id`, `image_id`, `categorie_id`, `tva_id`, `nom`, `description`, `prix`, `disponible`, `created`, `updated`) VALUES
(17, 22, 3, 4, 'carotte', 'carottes Bio de saison', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 23, 3, 3, 'aubergine', 'Aubergine de saison, bio et de très bonne qualite', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 24, 4, 4, 'Orange', 'Orange de saison , sans angrais  et sans pesticides.', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 25, 4, 3, 'mangue', 'Mangue du senegal, naturelles  sans pesticide très agréable en bouche', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 26, 4, 4, 'Noix d\'acajou', 'Noix d\'acajou, de qualité superieure', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 27, 4, 3, 'mandarine', 'Mandarine bien entretenu d\'Afrique', 9, 1, '2017-09-18 19:52:10', '2017-09-18 19:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `recherche`
--

CREATE TABLE `recherche` (
  `id` int(11) NOT NULL,
  `recherche` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tva`
--

CREATE TABLE `tva` (
  `id` int(11) NOT NULL,
  `multiplicate` double NOT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tva`
--

INSERT INTO `tva` (`id`, `multiplicate`, `nom`, `valeur`) VALUES
(3, 0.982, 'TVA 1.75%', 1.75),
(4, 0.833, 'TVA 20%', 20);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(7, 'benjamin', 'benjamin', 'benjamin@gmail.com', 'benjamin@gmail.com', 1, NULL, '$2y$13$HvyxQ270HzVggp8YrP.cb.JNXMdohZ8wjyw7DZBBaHUE8YT/dXSAa', NULL, NULL, NULL, 'a:0:{}'),
(8, 'mathilde', 'mathilde', 'mathilde@gmail.com', 'mathilde@gmail.com', 1, NULL, '$2y$13$.cpRR5KFN6hwfRVXeR5mR.L6L9lNu8wKQ6NcPYpN2Sffy.uQsH/qK', NULL, NULL, NULL, 'a:0:{}'),
(9, 'pauline', 'pauline', 'mgandega@gmail.com', 'mgandega@gmail.com', 1, NULL, '$2y$13$RRrITfCQMBIR0bu47Ag2vu4w7S14Yt08/z1mb396IhS1jLINRNYDC', '2017-10-05 10:08:08', '2T9E6vnLh0MSDWR9P-dSKrY1qkfY1Pq6psC4irIFDgU', '2017-09-29 16:34:38', 'a:2:{i:0;s:5:\"ADMIN\";i:1;s:10:\"ROLE_ADMIN\";}'),
(10, 'tiffany', 'tiffany', 'tiffany@gmail.com', 'tiffany@gmail.com', 1, NULL, '$2y$13$C6wzcCpvAlEf/o9CAj7n/.cy828XJ4nG9X7jOtvwX0RcdFtt5F7KK', NULL, NULL, NULL, 'a:0:{}'),
(11, 'dominique', 'dominique', 'dominique@gmail.com', 'dominique@gmail.com', 1, NULL, '$2y$13$u5q7vZvyHAyl01zrNZCgyOOpQtQU8aGE3nUrGWrLV8E4nkF9CjV0G', '2017-08-16 21:04:31', NULL, NULL, 'a:0:{}');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateursadresses`
--

CREATE TABLE `utilisateursadresses` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) DEFAULT NULL,
  `nom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cp` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `complement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `utilisateursadresses`
--

INSERT INTO `utilisateursadresses` (`id`, `utilisateur_id`, `nom`, `prenom`, `telephone`, `adresse`, `cp`, `pays`, `ville`, `complement`) VALUES
(24, 7, 'Catelain', 'Benjamin', '0600000000', '3 rue alberta rubosca', '76600', 'France', 'Le Havre', 'face à l\'église'),
(47, 9, 'Gandega', 'Mouhamed', '0762656718', '6, allee d\'ARZ Antony', '92160', 'France', 'Antony', NULL),
(48, 9, 'Gandega', 'Sadibou', '5156149496', '6, allee d\'ARZ Antony', '92160', 'France', 'Antony', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_3AF346683DA5256D` (`image_id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_35D4282CFB88E14F` (`utilisateur_id`);

--
-- Indexes for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log_class_lookup_idx` (`object_class`),
  ADD KEY `log_date_lookup_idx` (`logged_at`),
  ADD KEY `log_user_lookup_idx` (`username`),
  ADD KEY `log_version_lookup_idx` (`object_id`,`object_class`,`version`);

--
-- Indexes for table `ext_translations`
--
ALTER TABLE `ext_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lookup_unique_idx` (`locale`,`object_class`,`field`,`foreign_key`),
  ADD KEY `translations_lookup_idx` (`locale`,`object_class`,`foreign_key`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_BE2DDF8C3DA5256D` (`image_id`),
  ADD KEY `IDX_BE2DDF8CBCF5E72D` (`categorie_id`),
  ADD KEY `IDX_BE2DDF8C4D79775F` (`tva_id`);

--
-- Indexes for table `recherche`
--
ALTER TABLE `recherche`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tva`
--
ALTER TABLE `tva`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1D1C63B392FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_1D1C63B3C05FB297` (`confirmation_token`);

--
-- Indexes for table `utilisateursadresses`
--
ALTER TABLE `utilisateursadresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_95A7AD7AFB88E14F` (`utilisateur_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- AUTO_INCREMENT for table `ext_log_entries`
--
ALTER TABLE `ext_log_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ext_translations`
--
ALTER TABLE `ext_translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `recherche`
--
ALTER TABLE `recherche`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tva`
--
ALTER TABLE `tva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `utilisateursadresses`
--
ALTER TABLE `utilisateursadresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_3AF346683DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`);

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `FK_35D4282CFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);

--
-- Constraints for table `produits`
--
ALTER TABLE `produits`
  ADD CONSTRAINT `FK_BE2DDF8C3DA5256D` FOREIGN KEY (`image_id`) REFERENCES `media` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8C4D79775F` FOREIGN KEY (`tva_id`) REFERENCES `tva` (`id`),
  ADD CONSTRAINT `FK_BE2DDF8CBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `utilisateursadresses`
--
ALTER TABLE `utilisateursadresses`
  ADD CONSTRAINT `FK_95A7AD7AFB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
