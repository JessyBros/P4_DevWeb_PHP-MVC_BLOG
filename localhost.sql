-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 31 août 2018 à 20:46
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `id6283130_unbilletsimplepourlalaska`
--
CREATE DATABASE IF NOT EXISTS `db752856553` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `db752856553`;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `autheur` varchar(100) NOT NULL,
  `commentaire` text NOT NULL,
  `dateDuCommentaire` datetime NOT NULL,
  `commentaireSignaler` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `post_id`, `autheur`, `commentaire`, `dateDuCommentaire`, `commentaireSignaler`) VALUES
(184, 9, 'bvcb', 'bvcb', '2018-06-27 18:32:46', 'nonSignaler');

-- --------------------------------------------------------

--
-- Structure de la table `moderateur`
--

CREATE TABLE `moderateur` (
  `pseudo` varchar(15) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `moderateur`
--

INSERT INTO `moderateur` (`pseudo`, `motDePasse`, `id`) VALUES
('test', '$2y$10$CFgXfLfTwZrPqYmDtWptreZ72ApUAb7GgxAJ5tEOoJFO.Gm4DuNz2', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tableepisode`
--

CREATE TABLE `tableepisode` (
  `id` int(11) NOT NULL,
  `numeroEpisode` int(3) NOT NULL,
  `titre` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `texte` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `datePublication` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `imageApercu` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tableepisode`
--

INSERT INTO `tableepisode` (`id`, `numeroEpisode`, `titre`, `description`, `texte`, `datePublication`, `imageApercu`) VALUES
(309, 2, 'Cette rencontre !', 'Une rencontre fastidieuse ! Mais qui est-il ? D\'où vient-il ?', 'Il fonça sur moi à toute vitesse ! Dans son regarde, son expression, tout portait indiqué que j\'étais sa proie !<div><img src=\"https://www.toutoupourlechien.com/wp-content/uploads/2016/12/Race-chien-Malamute-de-l-alaska-300x201.jpg\">Il s’appelait <b>Hercule</b>. Ce chien aussi joueur qu\'arrogant.</div><div><br></div><div>Ce chien était pour moi une énorme découverte. Je me sentais depuis sa rencontre enfin en Alaska à Juneau.</div><div><br></div><div><br></div><div>Sans même m\'en rendre compte, une fusion était née, et je&nbsp; me suis mis à le suivre sans même savoir où j\'allais.</div><div><br></div><div><i>Mon aventure que chacun rêve de parcourir, était pour moi une réalité que tout le monde souhaiterait connaître !</i></div>', 'http://static.skynetblogs.be/media/171161/662046556.jpg'),
(310, 3, 'Le donjon magique', 'Jean Forteroche et la grotte perdu', '\r\n\r\n            <article>\r\n                \r\n\r\n            <article>\r\n                \r\n\r\n            <article><i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Hercule ! Hercule !</i> En suivant Hercule, je&nbsp; parcourus innombrable paysage.&nbsp;<div><br>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Malheureusement, en admirant ce vaste champs, je le perdis de vue et me retrouva face à face avec une grotte <u>mystérieuse</u> !</div><div><br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Cette grotte ne prononça évidemment aucun mot, mais j\'avais l\'impression qu\'une âme y habitait et m\'appela.</div><div><br></div><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Sans même m\'en être aperçu, je plongea dans cette énorme fossé qu\'était cette grotte et mon aventure me semblait juste un rêve utopique .</div><div><br></div><div><i>deux heures plus tard.. </i>la nuit tombait. J\'aperçu une lumière. Et à une vue incroyable, je vis le soleil se coucher et je m\'endormis devant la vue la plus incroyable que personne n\'aurait pu voir !&nbsp;</div><div><i><br></i></div><div><i><br></i></div><div><br><div>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img src=\"http://images.china.cn/attachement/jpg/site1002/20141022/0019b91ed62e15b1aff621.jpg\"></div></div>            </article>\r\n                    </article>\r\n                    </article>\r\n        ', 'http://images.china.cn/attachement/jpg/site1002/20141022/0019b91ed62e15b1aff621.jpg'),
(301, 1, 'Le début d\'une aventure', 'Le commencement d\'une nouvelle aventure de Jean Forteroche à la découverte de l\'Alaska', '\r\n\r\n            <article>\r\n                \r\n\r\n            <article>\r\n                \r\n\r\n            <article>\r\n                \r\n\r\n            <article>\r\n                \r\n\r\n            <article><article>Il y a deux semaines jour pour jour. J\'ai décidé de parcourir l\'Alaska ! Je n\'ai aucune raison particulier. Tout s\'est fait si vite. En l\'espace d\'une seconde, pleins d\'émotions m\'ont traversé l\'esprit. Je le savais, j\'en étais certains. C\'est là-bas que je devais me rendre.</article><article><br></article><article>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Je suis donc partis deux semaines plus tard, commencé une nouvelle aventure. Mon histoire !</article><article><br></article><article>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<img src=\"http://www.flyrelax.com/airlines/AS/B737.jpg\">&nbsp; &nbsp; &nbsp;</article><article><br></article><article>Une fois arrivé, une seule chose me travaillé l\'esprit. Qu\'est ce que je pourrai découvrir, tant de chose, des animaux vu seulement à travers des livres, de nouveau mode de vie.</article><article>Mon aventure avais commencé avant même que je m\'en rende compte.</article><article><br></article><article>Cependant 1 journée plus tard. Le début du cauchemars avait commencé&nbsp;</article><article>Tout ceci aurai pu être parfait. Si seulement je ne l\'avais pas rencontré. Si seulement il ne m\'avait pas trouvé... <b>tout aurait pu être parfait !</b></article></article>\r\n                    </article>\r\n                    </article>\r\n                    </article>\r\n                    </article>\r\n        ', '2018-08-31 15:51:38', 'http://www.flyrelax.com/airlines/AS/B737.jpg'),
(311, 4, 'Mon premier jour', 'Le stress était présent en son premier jour à la découverte de l\'Alaska', '<b><i>Mon premier jour en Alaska était la journée la plus incroyable que j\'ai pu vivre au cours de mon existence !</i></b><div><b><i><br></i></b></div><div>Je me mis donc à découvrir la capitale et ces différents festivals organisé au mois de mars.</div><div>La capital semblait être en animation constante, comportant environ 40% de la population d\'Alaska.</div><div><br></div><div><br></div><div>Les habitants sont tous joyeux et pleine de joies. Très différent de là d\'ou je viens.<br>Je fis des connaissance avec des gens extraordinaires et prise part au festival <b>KETCHIKAN</b>&nbsp;et m\'intégra non comme un simple tourist, mais comme un deuxième habitat.<br>Je me sentais chez moi et vie le plus beau voyage que j\'ai jamais parcourus.</div><div><br></div><div><i>Tout ceci n\'était que le début d\'une grande aventure !</i>&nbsp;</div><div><br></div><div><br></div><div>Je me mis donc à parcourir ce grand et vaste territoire.</div>', 'https://www.blm.gov/sites/blm.gov/files/Planning_Alaska_PlansInDevelopment_Home_1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `moderateur`
--
ALTER TABLE `moderateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tableepisode`
--
ALTER TABLE `tableepisode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT pour la table `moderateur`
--
ALTER TABLE `moderateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `tableepisode`
--
ALTER TABLE `tableepisode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
