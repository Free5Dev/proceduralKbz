-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Juin 2018 à 14:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kbz`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `idMembre` int(11) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `dateBlog` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `blog`
--

INSERT INTO `blog` (`id`, `titre`, `commentaire`, `idMembre`, `url`, `dateBlog`) VALUES
(1, 'Cette femme a subi plus de 50 opérations pour ressembler à Angelina Jolie', 'Une jeune femme iranienne fan d’Angelina Jolie était prête à tout pour ressembler à son idole. Elle a fait plus de 50 opérations de chirurgie esthétique pour atteindre son objectif. On vous laisse juger du résultat.', 1, 'https://www.youtube.com/embed/67kxEZXjI1U', '2018-03-13 00:00:00'),
(2, 'Incroyable Elle a dépensé 17 000$ pour devenir un dragon', 'Elle s’appelait à la naissance Richard Hernandez et a décidé de modifier complètement son apparence pour devenir une femme dragon. En plus des opérations de changement de sexe, elle s’est fait greffer des cornes, s’est faite enlever ses oreille et couper la langue en deux en plus des nombreux tatouages.', 1, 'https://www.youtube.com/embed/6YB4xpw57eU', '2018-03-13 00:00:00'),
(3, 'New York : un hélicoptère s\'écrase dans l\'East River, cinq morts', 'L\'hélicoptère de tourisme transportait le pilote et cinq passagers. Deux sont morts sur les lieux, les trois autres lundi après avoir été hospitalisés "dans un état critique".\r\nUn hélicoptère de tourisme s\'est écrasé dimanche soir dans l\'East River à New York, faisant cinq morts.\r\n\r\nLes passagers n\'ont pas pu s\'extraire de l\'appareil. Selon les chefs de la police et des pompiers new-yorkais, l\'hélicoptère, qui transportait six personnes dont le pilote, s\'est écrasé dans l\'East River, au niveau de la 90ème rue, peu après 19 heures locales (minuit en France), à l\'issue d\'une journée ensoleillée. "Le pilote a réussi à se dégager, mais les cinq autres personnes n\'ont pas pu", a expliqué le chef des pompiers, Daniel Nigro, lors d\'une brève conférence de presse.\r\n\r\nDes plongeurs ont immédiatement été dépêchés sur les lieux, qui ont dégagé les cinq passagers, dans des conditions difficiles en raison du courant fort à cet endroit, a-t-il expliqué. Deux d\'entre eux ont été prononcés morts sur les lieux, et les trois autres ont été "hospitalisés dans un état critique". Ces trois derniers passagers sont décédés lundi matin des suites de leurs blessures. Le chef des pompiers avait indiqué que les cinq passagers étaient attachés à leur siège, expliquant peut-être pourquoi ils n\'avaient pu se dégager.', 1, 'https://www.youtube.com/embed/g1lzftECPqQ', '2018-03-13 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `blogcategorie`
--

DROP TABLE IF EXISTS `blogcategorie`;
CREATE TABLE `blogcategorie` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `dateBlogPhoto` datetime NOT NULL,
  `photo` varchar(255) NOT NULL,
  `idMembre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nomPrenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Sujet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `dateContact` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nomPrenom`, `email`, `Sujet`, `message`, `dateContact`) VALUES
(1, 'Thierno Saïdou Soumah', 'saidsoumah@gmail.com', 'Achat T-shirt ', 'Bonjour je veux achetez u t kbz', '2018-03-07 12:04:03'),
(2, 'Thierno Saïdou Soumah', 'saidsoumah@gmail.com', 'Achat T-shirt ', 'Bonjour je veux achetez u t kbz', '2018-03-07 12:35:05');

-- --------------------------------------------------------

--
-- Structure de la table `kbztv`
--

DROP TABLE IF EXISTS `kbztv`;
CREATE TABLE `kbztv` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `invite` varchar(255) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `dateTv` datetime NOT NULL,
  `idMembre` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `kbztv`
--

INSERT INTO `kbztv` (`id`, `titre`, `invite`, `url`, `realisateur`, `description`, `dateTv`, `idMembre`) VALUES
(1, 'La prémire Emission au tour du thé', 'kaaris Diari', 'https://www.youtube.com/embed/I36APdrPZY4?rel=0', 'KJP Prod', 'La toute prémière emission de booba au tourLa toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr.... du thé avec un bon thiep krkr....', '2018-03-07 09:34:40', 2),
(2, 'La Deuxième Emission au tour du thé', 'kaaris Diari', 'https://www.youtube.com/embed/I36APdrPZY4?rel=0', 'KJP Prod', 'La toute prémière emission de booba au tourLa toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr.... du thé avec un bon thiep krkr....', '2018-03-07 09:34:40', 2),
(3, 'La Troisième Emission au tour du thé', 'kaaris Diari', 'https://www.youtube.com/embed/I36APdrPZY4?rel=0', 'KJP Prod', 'La toute prémière emission de booba au tourLa toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr....La toute prémière emission de booba au tour du thé avec un bon thiep krkr.... du thé avec un bon thiep krkr....', '2018-03-09 00:00:00', 2);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fonction` varchar(50) NOT NULL DEFAULT 'Membre KBZ',
  `photo` varchar(255) NOT NULL,
  `dateMembre` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `email`, `fonction`, `photo`, `dateMembre`) VALUES
(1, 'Said Soumah', 'saidsoumah@gmail.com', 'Fondateur', '', '2018-03-24'),
(2, 'Nita Shanty', 'nita@gmail.com', 'Co-fondateur', '', '2018-03-24'),
(3, 'Fouley Touré', 'fouley@gmail.com', 'Chargé des communication réseaux sociaux', '', '2018-03-24'),
(4, 'Alpha Diallo', 'alpha@gmail.com', 'Conseillé ', '', '2018-03-24'),
(5, 'Bah Ivan', 'bahivan@gmail.com', 'Chargé de show bizz', '', '2018-03-24'),
(6, 'Diallo Thierno', 'diallo@gmail.com', '', '', '2018-03-24');

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE `musique` (
  `id` int(11) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `nomArtiste` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `idMusiqueCategorie` int(11) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `description` text NOT NULL,
  `origine` varchar(255) NOT NULL,
  `datePub` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `musique`
--

INSERT INTO `musique` (`id`, `idMembre`, `nomArtiste`, `titre`, `idMusiqueCategorie`, `url`, `description`, `origine`, `datePub`) VALUES
(1, 1, 'Drake', 'God\'s plan', 1, 'https://www.youtube.com/embed/xpVfcZ0ZcFM', 'God’s Plan (Official Video)\r\n\r\nSong Available Here: https://Drake.lnk.to/ScaryHoursYD\r\n\r\n \r\n\r\nDirected by Karena Evans\r\n\r\nExecutive Producers Director X & Taj Critchlow\r\n\r\nProduced by Fuliane Petikyan\r\n\r\nFor Popp Rok\r\n\r\n \r\n\r\nMusic video by Drake performing God’s Plan.  © 2018 Young Money Entertainment/Cash Money Records\r\n\r\nhttp://vevo.ly/Z6Unb9', 'Rap Usa', '2018-03-07 13:19:48'),
(2, 1, 'Tyga', 'King of the Jungle', 1, 'https://www.youtube.com/embed/PLPEZ0HQ-3I', 'Official music video by Tyga performing King of the Jungle. © 2018 Last Kings Music / EMPIRE', 'Rap Usa', '2018-03-07 13:25:56'),
(3, 1, 'Chris Brown', ' Break Her Off', 1, 'https://www.youtube.com/embed/siF7yNYhVJE', 'If you need a song removed on my channel, please contact me (xchristopher0@gmail.com).\r\n???If you are the owner of the song and you want to remove it from my channel, please e-mail me. I will remove it really quickly!\r\n\r\nTAGS: chris brown, chris, brown, demo, cb, breezy, wasting time, shadows, yo, 2016, chris brown says \'heartbreak on a full moon\' album is coming soon 2016, chris brown chris brown snippet', '', '2018-03-07 13:25:56'),
(4, 1, 'Chris Brown ', 'Tempo', 1, 'https://www.youtube.com/embed/QdnvoWyoiY0', 'Chris Brown Tempo', 'Rap Usa', '2018-03-07 13:30:45'),
(5, 1, 'DJ Khaled -Trailer ft. JAY Z,Future, Beyoncé', 'DJ Khaled - Top Off Trailer ft. JAY Z, Future, Beyoncé', 1, 'https://www.youtube.com/embed/OHap45tpS38', 'DJ Khaled online: \r\nhttps://twitter.com/djkhaled \r\nhttps://www.instagram.com/djkhaled \r\nhttps://www.facebook.com/officialdjkh...\r\n\r\n(C) 2018 Epic Records, a division of Sony Music Entertainment\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\n', 'Rap USA', '2018-03-17 16:55:44'),
(6, 1, 'Kaaris', 'Diarabi', 2, 'https://www.youtube.com/embed/qmUs-uiaRvw', 'Kaaris Clip Video Diarabi', 'Rap Fr', '2018-03-07 13:37:51'),
(7, 1, 'Booba', 'A la folie', 2, 'https://www.youtube.com/embed/8QCqvp7oWhs', 'Extrait de l\'album "Trône" de Booba, disponible ici : https://Booba.lnk.to/TroneYD \r\nAbonne-toi : http://bit.ly/2aIsz16 \r\n\r\nBooba - A la folie (Clip officiel)\r\n\r\n--\r\n\r\nRetrouve Booba sur : \r\nFacebook: http://www.facebook.com/booba\r\nTwitter: http://twitter.com/booba\r\nInstagram: http://instagram.com/boobaofficial \r\nGoogle + : http://google.com/+Booba\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard', 'Rap Fr', '2018-03-07 13:37:51'),
(8, 1, 'Sofiane', 'Lundi', 2, 'https://www.youtube.com/embed/K-Ehg6xT6fc', 'Sofiane', 'France', '2018-03-07 13:43:50'),
(9, 1, 'Gradur', 'Sheguey 12', 2, 'https://www.youtube.com/embed/283rflCSu0g', 'Gradur - Sheguey 12\r\nDisponible sur iTunes et sur toutes les plateformes de streaming : https://Gradur.lnk.to/Sheguey12\r\n\r\nCompositeur : Rim\'s \r\nReal vidéo : William Thomas \r\n\r\n', 'France', '2018-03-07 13:43:50'),
(10, 1, 'MHD ', 'AFRO TRAP Part.10 (Moula Gang)', 2, 'https://www.youtube.com/embed/_o5zbvGyxW4', 'Le nouveau single de MHD - AFRO TRAP Part.10 (Moula Gang)\r\ndisponible sur toutes les plateformes : https://mhd.lnk.to/AfroTrapPart10\r\n\r\nProd : DSK ON THE BEAT\r\nLabel : ARTSIDE\r\n\r\nRéalisé par Frédéric de Pontcharra\r\n\r\nMerci aux Flash de la Courneuve, les Dolls cheerleaders Paris, NWE, l\'association NXC, Quai 54, les basketteurs, Doudou à la batterie, Jamel Debbouze, Omar Sy, Audrey Tcheuméo, Wass Freestyle, Lisa Freestyle, Héctor Bellerín, Allan Saint-Maximin, Mario Balotelli, the Puma Family, la Moula Gang & la Cité Rouge\r\n\r\nDOP : Florent Astolfi\r\nSteadycamer : Benjamin Groussain\r\n1er assistant caméra : Adrien Touche\r\nGaffer : Baptiste Imbert\r\nDirecteur de production : Guilhem Donnasson\r\nRégisseur général : Alexandre Judas\r\nRégisseur : Clément Pérot\r\nDécorateur : Pierre Osawa & Paul Charensol\r\nElectricien : Adrien Ricol & Charles Lagorce\r\nColorist : Ghislain Rio \r\nMontage : Alexandre Tissot\r\nEtalonnage : Ghislain Rio\r\nGraphisme : Corpus & Webmyart & Biscuit Studio\r\nStylisme : Glen Mban\r\nHyperlaps : Maxime Gaudet', 'France', '2018-03-07 14:02:12'),
(12, 1, 'Konshens', 'Turn me on', 4, 'https://www.youtube.com/embed/EfVdMsZCEUg?rel=0', 'Jamaican reggae and dancehall artiste Konshens presents the official music video for his 2017 single, "turn me on", produced by TJ records/Subkonshus music.\r\nSubscribe to hear new Konshens music first: http://bit.ly/1MjKHXn\r\n\r\nVideo Credits:\r\nProduced & Directed by:jwill\r\nLocation: Jamaica\r\nKonshens Bio:\r\nKonshens has emerged as one of the hottest names in dancehall/reggae music. Labeled by the Jamaican media as one of Reggae and Dancehall music’s brightest rising stars, Konshens has received numerous awards and accolades, and has topped charts in Jamaica and overseas on multiple occasions. Konshens most recent success has been the 2015 collaboration “POLICEMAN” with Dutch singer Eva Simons. Fresh from a recently completed 23 city tour of Europe in the fall of 2015, Konshens is now focused on heading back into the studio to work on material for an early 2016 releases. With such diversity in his musical landscape, Konshens in his own words explains: “We can’t just try and FORCE ourselves onto di people dem...We have to space it out......and take time and MOVE IN!”', 'Jamaïque', '2018-03-07 14:22:23'),
(13, 1, 'Takana Zion', 'Gbin Gbin', 3, 'https://www.youtube.com/embed/YsuYAnS_h1c?rel=0', 'Premier extrait video de l\'album black Mafia 7 bientot disponible', 'Guinea', '2018-03-07 14:21:41'),
(14, 1, 'Davido', 'Fia', 3, 'https://www.youtube.com/embed/8ORvJcpe2Oc?rel=0', 'Music video by Davido performing FIA (Official Video). (C) 2017 Sony Music Entertainment International Limited', 'Nigeria', '2018-03-07 14:32:17'),
(15, 1, 'Dj Spinall ft Wizkid', 'Nowo', 3, 'https://www.youtube.com/embed/ES8XuZBafz0?rel=0', 'The CAP music presents the official video for "NOWO" by DJ Spinall and Wizkid.\r\n\r\nDirected by Director Q.', 'Nigeria', '2018-03-07 14:32:17'),
(16, 1, 'Yemi Alade', 'heart Robber', 3, 'https://www.youtube.com/embed/DOW3uSR0GQo?rel=0" frameborder="0', 'Download here - http://smarturl.it/BlackMagicDeluxe\r\n\r\nEffyzzie Music Group presents the official video for "Heart Robber" by Yemi Alade.\r\n\r\nDirected by Clarence Peters.\r\n\r\n(C) 2018 Effyzzie Music Group', 'Nigeria', '2018-03-07 14:39:37'),
(17, 1, ' YEMI ALADE', ' Marry Me', 3, 'https://www.youtube.com/embed/u8HlKw24208?rel=0', '"Marry Me" the official video by Yemi Alade starring Alexx Ekubo off the Mama Africa (The Diary Of An African Woman) Album.\r\n\r\nProduced by Selebobo and video directed by Paul Gambit.\r\n\r\n(C) 2017 Effyzzie Music Group.', 'Nigeria', '2018-03-07 14:39:37'),
(18, 1, 'Degg J Force 3 ', 'Falé', 3, 'https://www.youtube.com/embed/7vebkDz7-Tg?rel=0', 'FALÉ extrait de l\'album DYNASTIE \r\n\r\nL\'eldorado, ce paradis terrestre que certains jeunes africains estiment rejoindre en traversant la mer, est aussi un raccourci qui mène à la mort. C\'est ce message venant du cœur des parents et de l\'Afrique, que le groupe Degg J Force 3 a voulu adressé à la jeunesse africaine via le clip "Falé".\r\n\r\nRéalisée entre un village de Coyah, Conakry et le désert de Lompoul (Sénégal), cette superbe vidéo aux contours alarmants et tristes, retrace le parcours du jeune africain guidé par la boussole du bonheur. Un rêve qui le conduira malheureusement à sa mort et qui noie ses parents dans les larmes et des inquiétudes.\r\n\r\nEncore une nouvelle fois, les frères M\'baye Moussa et Ablaye, prouvent leur maturité artistique en liant un message conscient à des images édifiantes sur la situation de la migration clandestine. \r\n\r\nPlus qu\'une musique, " Falé" est un cri de cœur d\'une jeunesse africaine adressé aux dirigeants africains.\r\n\r\n"Falé" est aussi l\'expression des chaudes larmes qui coulent sur le triste visage des mères qui impuissantes, regardent leurs fils / filles bravés la mer dans le souci de mettre la famille à l\'abri du besoin.\r\nFALÉ extrait de l’Album à succès Dynastie, est aussi un projet de tournée et de sensibilisation sur les dangers de la migration irrégulière et de la promotion de l’entrepreunariat jeune, ayant pour slogan Entreprendre, Réussir Chez nous!\r\n\r\nAvec le soutien de l’OIM et la participation financière de l’Union Européenne.\r\n\r\nProduction: Meurs Libre Prod\r\nRéalisation Clip: Nette Royale\r\nEnregistré et mixé au Studio Sankara (Senegal)\r\nMastering: SODA SOUND (Paris)\r\nArrangement: Akatché\r\nAuteurs compositeurs: Degg J Force 3', 'Guinée', '2018-03-07 14:43:13'),
(19, 1, 'Admow TV', 'DESPACITO SENEGALESE VERSION: Yow La Tipo', 3, 'https://www.youtube.com/embed/M1mA2p4XoF0?rel=0', 'Check Out the last Despacito Remix by Admow.\r\nRecorded at Class\'chic Music\r\nVideo directed by Fefsy Felix & Papa Niang\r\nDirected by Fefsy Felix (Felix Productions)', 'Sénégal', '2018-03-07 14:48:52'),
(20, 1, 'X-press ', 'Vitamine Girl', 3, 'https://www.youtube.com/embed/jSw8ej6FI6A?rel=0', 'X-Press - Vitamine Girl "officielle Vidéo CLIP"\r\nNouvelle vidéo', 'Sénégal', '2018-03-07 14:48:52'),
(21, 1, 'Youssou N\'dour', 'Yite', 3, 'https://www.youtube.com/embed/MyHla6chMik?rel=0', 'En exclusivité le nouveau clip de Youssou N\'dour YITEL. New album', 'Sénégal', '2018-03-07 14:55:36'),
(22, 1, 'Wally Seck', 'Mirna', 3, 'https://www.youtube.com/embed/-I5EbQEUIRs?rel=0', '', 'Sénégal', '2018-03-07 14:55:36'),
(23, 1, 'Spice', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-13 11:02:39'),
(24, 1, 'Spice', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-13 11:05:42'),
(25, 1, 'Spice', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-13 11:05:55'),
(26, 1, 'Spice11', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-22 16:13:28'),
(27, 1, 'Spice', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-13 11:07:23'),
(28, 1, 'Spice', 'So Mi Like It', 4, 'https://www.youtube.com/embed/OeowI8_J7ck', 'Music video by Spice performing So Mi Like It. 2014 NotNice Production\r\n\r\nCreative Director: Spice\r\nCatégorie\r\nMusique\r\nLicence\r\nLicence YouTube standard\r\nMusique\r\n"So Mi Like It" de Spice ( • )', 'Jamaïque', '2018-03-13 11:09:39');

-- --------------------------------------------------------

--
-- Structure de la table `musiquecategorie`
--

DROP TABLE IF EXISTS `musiquecategorie`;
CREATE TABLE `musiquecategorie` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `musiquecategorie`
--

INSERT INTO `musiquecategorie` (`id`, `categorie`) VALUES
(1, 'USA'),
(2, 'FR'),
(3, 'AFRO'),
(4, 'REGGUEA - DANCEHALL');

-- --------------------------------------------------------

--
-- Structure de la table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `id` int(11) NOT NULL,
  `nomPrenom` varchar(100) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `taille` varchar(20) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `dateShop` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `talent`
--

DROP TABLE IF EXISTS `talent`;
CREATE TABLE `talent` (
  `id` int(11) NOT NULL,
  `tire` varchar(255) NOT NULL,
  `nomTalent` varchar(50) NOT NULL,
  `biographie` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `idMembre` int(11) NOT NULL,
  `url` varchar(2083) NOT NULL,
  `url2` varchar(2023) NOT NULL,
  `dateTalent` timestamp NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `talent`
--

INSERT INTO `talent` (`id`, `tire`, `nomTalent`, `biographie`, `photo`, `idMembre`, `url`, `url2`, `dateTalent`) VALUES
(1, 'Biographie de Nita Shanty Présentatrice de l\'émission KBZ TV au tour du thé', 'Nita Shanty', 'Salut moi  c\'est Nita Shanty \r\nMusicalement la pour vous servir. \r\nJe vie la musique depuis toute petite mais tout à commencer en 2005 avec Squateman un artiste auteur compositeur très ambitieux de Nantes.\r\nIl a d\'ailleurs créer le premier groupe ou j\'ai partie du nom de Verbal team en collaboration avec d\'autres artistes compositeurs aussi tel que Tech (971), chris (44) , la relève (971).\r\nChangement de groupe en 2013 avec des artistes de Vendée (85) le Gandjahsound système ; nous étions 3 chanteurs et 2 ingénieurs du son ,dj et compositeurs. \r\nL\'année aussi ou j\'ai découvert et apprécier l\'univers Rasta vocalement reggae et acoustique en la présence d\'un guitariste en or du nom de Kobé.il m\'a donner la force pour me présenter sur scène avec le groupe pour faire l\'avant première de Taïro,Dragon Davy et Kenyon(super souvenir )\r\nEnsuite j\'ai fais quelques solo ,que vous pouvez retrouver sur Sound cloud et 2 clips réalisés par mon gars sur KJP Prod ( etre une femme et un feat avec chris :bienvenue dans ce monde )\r\n2016 changement de groupe encore et de ville avec le Zion street (paris 94)\r\nAu commandes Seth aka Coolman et D-night Alpha ,avec aussi une scène à notre actif. \r\nFin 2016 un dernier son solo sortira sur les réseaux sociaux\r\nFin de la discussion\r\nÉcrivez un message...', 'nita2.jpg', 2, 'https://www.youtube.com/embed/5Ky46ZSockY', 'https://www.youtube.com/embed/I36APdrPZY4', '2018-03-19 13:16:06'),
(2, 'Biographie de Nita Shanty Présentatrice de l\'émission KBZ TV au tour du thé', 'Nita Shanty', 'Salut moi  c\'est Nita Shanty \r\nMusicalement la pour vous servir. \r\nJe vie la musique depuis toute petite mais tout à commencer en 2005 avec Squateman un artiste auteur compositeur très ambitieux de Nantes.\r\nIl a d\'ailleurs créer le premier groupe ou j\'ai partie du nom de Verbal team en collaboration avec d\'autres artistes compositeurs aussi tel que Tech (971), chris (44) , la relève (971).\r\nChangement de groupe en 2013 avec des artistes de Vendée (85) le Gandjahsound système ; nous étions 3 chanteurs et 2 ingénieurs du son ,dj et compositeurs. \r\nL\'année aussi ou j\'ai découvert et apprécier l\'univers Rasta vocalement reggae et acoustique en la présence d\'un guitariste en or du nom de Kobé.il m\'a donner la force pour me présenter sur scène avec le groupe pour faire l\'avant première de Taïro,Dragon Davy et Kenyon(super souvenir )\r\nEnsuite j\'ai fais quelques solo ,que vous pouvez retrouver sur Sound cloud et 2 clips réalisés par mon gars sur KJP Prod ( etre une femme et un feat avec chris :bienvenue dans ce monde )\r\n2016 changement de groupe encore et de ville avec le Zion street (paris 94)\r\nAu commandes Seth aka Coolman et D-night Alpha ,avec aussi une scène à notre actif. \r\nFin 2016 un dernier son solo sortira sur les réseaux sociaux\r\nFin de la discussion\r\nÉcrivez un message...', 'nita2.jpg', 1, 'https://www.youtube.com/embed/I36APdrPZY4', 'https://www.youtube.com/embed/5Ky46ZSockY', '2018-03-19 13:16:45'),
(3, 'Biographie de Nita Shanty Présentatrice de l\'émission KBZ TV au tour du thé', 'Nita Shanty', 'Salut moi  c\'est Nita Shanty \r\nMusicalement la pour vous servir. \r\nJe vie la musique depuis toute petite mais tout à commencer en 2005 avec Squateman un artiste auteur compositeur très ambitieux de Nantes.\r\nIl a d\'ailleurs créer le premier groupe ou j\'ai partie du nom de Verbal team en collaboration avec d\'autres artistes compositeurs aussi tel que Tech (971), chris (44) , la relève (971).\r\nChangement de groupe en 2013 avec des artistes de Vendée (85) le Gandjahsound système ; nous étions 3 chanteurs et 2 ingénieurs du son ,dj et compositeurs. \r\nL\'année aussi ou j\'ai découvert et apprécier l\'univers Rasta vocalement reggae et acoustique en la présence d\'un guitariste en or du nom de Kobé.il m\'a donner la force pour me présenter sur scène avec le groupe pour faire l\'avant première de Taïro,Dragon Davy et Kenyon(super souvenir )\r\nEnsuite j\'ai fais quelques solo ,que vous pouvez retrouver sur Sound cloud et 2 clips réalisés par mon gars sur KJP Prod ( etre une femme et un feat avec chris :bienvenue dans ce monde )\r\n2016 changement de groupe encore et de ville avec le Zion street (paris 94)\r\nAu commandes Seth aka Coolman et D-night Alpha ,avec aussi une scène à notre actif. \r\nFin 2016 un dernier son solo sortira sur les réseaux sociaux\r\nFin de la discussion\r\nÉcrivez un message...', 'nita2.jpg', 3, 'https://www.youtube.com/embed/5Ky46ZSockY', 'https://www.youtube.com/embed/I36APdrPZY4', '2018-03-19 13:17:33');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blogcategorie`
--
ALTER TABLE `blogcategorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `kbztv`
--
ALTER TABLE `kbztv`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `musique`
--
ALTER TABLE `musique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `musiquecategorie`
--
ALTER TABLE `musiquecategorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `talent`
--
ALTER TABLE `talent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `blogcategorie`
--
ALTER TABLE `blogcategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `kbztv`
--
ALTER TABLE `kbztv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `musique`
--
ALTER TABLE `musique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT pour la table `musiquecategorie`
--
ALTER TABLE `musiquecategorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `shop`
--
ALTER TABLE `shop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `talent`
--
ALTER TABLE `talent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
