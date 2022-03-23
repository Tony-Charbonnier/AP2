-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 17 déc. 2019 à 10:57
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dbs5636967`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`Nom`, `Prenom`, `age`, `sexe`) VALUES
('Tran', 'Thierry', '19', 'Homme');

-- --------------------------------------------------------

--
-- Structure de la table `cote`
--

DROP TABLE IF EXISTS `cote`;
CREATE TABLE IF NOT EXISTS `cote` (
  `ID_cote` int(11) NOT NULL AUTO_INCREMENT,
  `E1` varchar(255) NOT NULL,
  `nul` varchar(255) NOT NULL,
  `E2` varchar(255) NOT NULL,
  `ID_match` int(11) NOT NULL,
  PRIMARY KEY (`ID_cote`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cote`
--

INSERT INTO `cote` (`ID_cote`, `E1`, `nul`, `E2`, `ID_match`) VALUES
(1, '1.20', '7.24', '9.50', 1),
(2, '6.89', '4.25', '1.25', 2),
(3, '1.79', '3.29', '9.27', 3),
(4, '2.35', '3.56', '5.25', 4),
(5, '1.90', '3.57', '4.10', 5),
(6, '1.28', '2.45', '2.0', 6),
(7, '3.20', '4.25', '2.35', 7),
(8, '2.45', '3', '1.56', 8),
(9, '2.89', '3.49', '2.88', 9),
(10, '1.56', '5', '3.90', 10);

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

DROP TABLE IF EXISTS `equipe`;
CREATE TABLE IF NOT EXISTS `equipe` (
  `Nom` varchar(255) NOT NULL,
  PRIMARY KEY (`Nom`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`Nom`) VALUES
('PSG');

-- --------------------------------------------------------

--
-- Structure de la table `match2`
--

DROP TABLE IF EXISTS `match2`;
CREATE TABLE IF NOT EXISTS `match2` (
  `ID_match` int(11) NOT NULL AUTO_INCREMENT,
  `resultat` varchar(255) NOT NULL,
  `nom_equipe1` varchar(255) NOT NULL,
  `nom_equipe2` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `ligue` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_match`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `match2`
--

INSERT INTO `match2` (`ID_match`, `resultat`, `nom_equipe1`, `nom_equipe2`, `Date`, `commentaire`, `ligue`) VALUES
(1, 'tbt', 'PSG', 'GALATASARAY', '11/12/19', 'L’équipe parisienne est critiqué par les médias du aux comportement de certains joueurs. Ils vont donc se donner à fond pour prouver que  la cohésion du groupe est indestructible  et devant un parc des princes rempli les parisiens ont obligation de mettre un score digne d’un match de tennis.', 'CHAMPIONS LEAGUE'),
(2, 'tbt', 'Rennes', 'Lazio ', '12/12/19', 'Les Rennais n’ont plus à rien perdre tandis que La Lazio joue sa qualification. Le Roazhon PARK sera en ébullition pour ce match de prestige.', 'EUROPA LEAGUE'),
(3, 'tbt', 'Manchester United', 'AZ', '12/12/19', 'A Old Trafford l’équipe mancunienne est solide et avec son 12ème homme les hollandais n’ont aucune chance face à l’armada anglaise. Même si les hollandais peuvent créer la sensation comme au match aller.', 'EUROPA LEAGUE'),
(4, 'tbt', 'Bordeaux', 'Strasbourg', '15/12/19', 'Les Bordelais restent sur 4 victoires de rang à domicile toutes compétitions confondues mais n avaient pas réussi à battre le Racing Club de Strasbourg la saison dernière. \r\nUne Revanche est à Prendre.', 'Ligue 1'),
(5, 'tbt', 'OL', 'Rennes ', '15/12/19 ', 'Les Lyonnais doivent absolument remonter au classement. Revenus à la 7e place à trois longueurs du podium à la faveur de leur succès à Nîmes (0-4), et ne sont que 16èmes à domicile avec 3 victoires en 8 matchs. Les lyonnais sont donc dans l’obligation de gagner.', 'Ligue 1'),
(6, 'tbt', 'Manchester United', 'Everton ', '15/12/19 ', 'Les Red Devils affichent un réel regain de forme depuis quelques semaines mais n ont plus de temps à perdre car ils pointent toujours à cinq longueurs du Big Four.', 'Premier league'),
(7, 'tbt', 'Arsenal', 'Manchester city', '15/12/19', 'Après deux mois où ils ont été sevrés de victoire en championnat, Gunners ont enfin renoué avec le succès sur la pelouse de West Ham Arsenal doit confirmer ses bons résultats à domicile.', 'Premier league'),
(8, 'tbt', 'Valence', 'Real de Madrid', '15/12/19', 'Pas toujours séduisants dans le jeu, parfois inconstants, les protégés de Zinedine Zidane n en comptent pas moins 34 points, autant que le Barça, qui ne les devancent qu à la différence de buts. La victoire des madrilènes serait un plus pour gagner la course au titre.', 'La Liga'),
(9, 'tbt', 'Seville FC', 'Villareal', '15/12/19 ', 'FC Séville a vu sa série de victoires en Liga stoppée à trois dimanche soir à Pampelune (1-1). Les Andalous restent bien installés à la troisième place du classement. Les andalous vont faire le travail au stade mythique de  Sanchez PizJuan.', 'La Liga'),
(10, 'tbt', 'Milan Ac', 'Sassoulo ', '15/12/19', 'Désormais 10èmes, les Milanais doivent maintenant enchainer à domicile pour équilibrer leur bilan à San Siro et remonter progressivement au classement. On espère avoir un Milan AC des grands soirs.', 'Serie A');

-- --------------------------------------------------------

--
-- Structure de la table `pari`
--

DROP TABLE IF EXISTS `pari`;
CREATE TABLE IF NOT EXISTS `pari` (
  `ID_pari` int(11) NOT NULL AUTO_INCREMENT,
  `ID_cote` int(11) NOT NULL,
  `cote` varchar(255) NOT NULL,
  `mise` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_pari`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pari`
--

INSERT INTO `pari` (`ID_pari`, `ID_cote`, `cote`, `mise`) VALUES
(1, 1, 'l\'équipe 2', '50'),
(2, 3, 'match null', '100'),
(3, 6, 'l\'équipe 2', '2'),
(4, 9, 'l\'équipe 2', '30'),
(5, 4, 'l\'équipe 2', '20'),
(6, 1, 'match null', '40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
