-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 21 déc. 2017 à 08:40
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ipssi-php-oop`
--

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

DROP TABLE IF EXISTS `meeting`;
CREATE TABLE IF NOT EXISTS `meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nameMeeting` varchar(255) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `descriptionMeeting` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `meeting`
--

INSERT INTO `meeting` (`id`, `nameMeeting`, `date_debut`, `date_fin`, `descriptionMeeting`) VALUES
(1, 'Meeting PHP', '2017-05-12', '2017-06-25', 'Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire.\r\nDepuis PHP 5.5, il est possible de faire reference a un tableau litteral. Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Depuis PHP 5.5, il est possible de faire reference a un tableau litteral.'),
(2, 'Meeting Wordpress', '2018-06-15', '2018-09-29', 'Description du meeting Wordpress. Il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Il est possible de faire reference a un tableau litteral. Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Depuis PHP 5.5, il est possible de faire reference a un tableau litteral.'),
(3, 'Meeting Html-CSS', '2016-09-16', '2017-11-22', 'Description du meeting Html/ CSS. Cependant, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire.\r\nPuis il est possible de faire reference a un tableau litteral. Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Html/CSSl est possible de faire reference a un tableau litteral.'),
(4, 'Meeting Java', '2018-05-23', '2018-10-28', 'Description du meeting JAVA. Cependant, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Puis il est possible de faire reference a un tableau litteral. Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Html/CSSl est possible de faire reference a un tableau litteral.'),
(5, 'Meeting Boostrap', '2017-10-01', '2017-12-30', 'Description du meeting Boostrap. Cependant, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Puis il est possible de faire reference a un tableau litteral. Description du meeting PHP. Depuis PHP 5.4, il est possible de faire reference a un tableau resultant d\'une fonction ou d\'une methode directement. Avant, cela n\'etait possible qu\'en utilisant une variable temporaire. Html/CSSl est possible de faire reference a un tableau litteral.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
