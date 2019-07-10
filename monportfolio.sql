-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mer. 10 juil. 2019 à 10:58
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monportfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id_competence` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `niveau` varchar(20) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id_competence`, `nom`, `niveau`, `description`) VALUES
(1, 'HTML 5', 'Confirm&eacute;', ''),
(2, 'CSS 3', 'Confirm&eacute;', ''),
(3, 'Bootstrap', 'Confirm&eacute;', ''),
(4, 'Wordpress', 'Confirm&eacute;', ''),
(5, 'SQL', 'D&eacute;butant', ''),
(6, 'Javascript', 'D&eacute;butant', ''),
(7, 'PHP', 'D&eacute;butant', ''),
(8, 'Ajax ', 'D&eacute;butant', ''),
(9, 'PHP POO', 'D&eacute;butant', ''),
(10, 'Symfony', 'D&eacute;butant', ''),
(11, 'GitHub', 'D&eacute;butant', ''),
(12, 'jQuery', 'D&eacute;butant', ''),
(13, 'PHPMyAdmin', 'D&eacute;butant', ''),
(14, 'Font Awesome', 'Confirm&eacute;', '');

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE `experience` (
  `id_experience` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experience`
--

INSERT INTO `experience` (`id_experience`, `nom`, `date`, `lieu`, `description`, `photo`) VALUES
(1, 'D&eacute;veloppeuse   Int&eacute;gratrice Web', '2018 - 2019', 'Au PoleS', 'Fortement et naturellement attir&eacute;e par les m&eacute;tiers du web, j&rsquo;ai entam&eacute; une reconversion professionnelle r&eacute;ussie en tant qu&rsquo;int&eacute;gratrice d&eacute;veloppeuse web au sein de la soci&eacute;t&eacute; Le PoleS.   J&rsquo;y ai r&eacute;alis&eacute; de nombreuses int&eacute;grations &agrave; partir de maquettes, ainsi que la r&eacute;alisation de sites dynamiques front-end et back-end.  Le code devenu une passion, les langages s&rsquo;encha&icirc;nent les uns apr&egrave;s les autres, HTML5, CSS3, JavaScript, Symfony, PHP 5 et 7, Ajax.', ''),
(2, 'Journaliste web', '2016 &agrave; ce jour', 'A Red\'Action M&eacute;dia', 'En collaboration avec Red&rsquo;Action m&eacute;dia  depuis quatre ans en tant que community manager et journaliste web, je r&eacute;alise un travail m&eacute;thodique et rigoureux d&rsquo;enqu&ecirc;tes, d&rsquo;interviews et de r&eacute;daction des articles. J&rsquo;effectue un travail d&rsquo;enqu&ecirc;te minutieux afin de r&eacute;aliser des analyses sur des sujets comme la politique et l&rsquo;environnement. J&rsquo;&eacute;cris des articles d&rsquo;opinions concernant des faits de l&rsquo;actualit&eacute;. Certains visent &agrave; d&eacute;montrer par le r&eacute;sultat de recherches pouss&eacute;es que la Turquie est un pays accueillant et agr&eacute;able. Afin d\'amener nos lecteurs au voyage et &agrave; l\'enchantement, j\'&eacute;cris des articles sur le tourisme qui r&eacute;v&egrave;lent les incroyables sites naturels et historiques dont la plupart sont class&eacute;s au patrimoine mondial de l&rsquo;UNESCO. ', ''),
(3, 'Community Manager', '2016 &agrave; ce jour', 'A Red\'Action M&eacute;dia', 'Rassembler une communaut&eacute; autour de Red&rsquo;Action M&eacute;dia a &eacute;t&eacute; notre premier objectif atteint avec + de 24400 membres sur facebook.  Notre style d&rsquo;&eacute;criture parfois audacieux a permis la fid&eacute;lisation de nos lecteurs et d&rsquo;atteindre notre 2&egrave;me objectif.   Posts pertinents, sondages, vid&eacute;os et photos  insolites nous permettent d&rsquo;augmenter notre communaut&eacute; toujours davantage et d&rsquo;augmenter le trafic de notre site internet.', ''),
(4, 'Enseignante de soutien &agrave; l&rsquo;apprentissage', '2012 - 2015', 'A l\'agence scolarit&eacute; d\'Istanbul', 'J&rsquo;ai eu l&rsquo;opportunit&eacute; de partir travailler en Turquie et ce fut une exp&eacute;rience d&rsquo;une grande richesse qui m&rsquo;a permise de d&eacute;velopper davantage d&rsquo;autonomie, de sociabilit&eacute; et de capacit&eacute; d&rsquo;adaptation &agrave; un nouvel environnement. J&rsquo;ai appris le turc et je suis devenue parfaitement autonome en quelques mois. Enseignante de soutien scolaire pour des enfants turcs &acirc;g&eacute;s de 4 &agrave; 10 ans, scolaris&eacute;s dans les &eacute;coles fran&ccedil;aises d&rsquo;Istanbul, mes fonctions principales ont &eacute;t&eacute; d&rsquo;enseigner : La langue fran&ccedil;aise :  &agrave; l&rsquo;oral, par le biais de dialogues adapt&eacute;s &agrave; l&rsquo;&acirc;ge des enfants,  &agrave; l&rsquo;&eacute;crit par le biais des devoirs apr&egrave;s les cours. La culture fran&ccedil;aise :  par des sorties ludiques dans divers endroits de la ville sp&eacute;cialement d&eacute;di&eacute;s &agrave; la culture francaise', ''),
(5, 'Gestionnaire immobilier', '2010 - 2012', 'Chez Patrimoine languedocienne', 'Gestion d\'un portefeuille locatif de 20 r&eacute;sidences regroupant 900 logements.  Etablissement des contrats de location et des avenants. R&eacute;alisation des proc&egrave;dures de cong&egrave;s lors du d&eacute;part du locataire. Etablissement des contrats de sous-traitance du second oeuvre et relations avec ces soci&eacute;t&eacute;s.  R&eacute;alisation des plans d\'apurement et proc&eacute;dures juridiques li&eacute;es aux impay&eacute;s de loyer.', '');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(5) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `nom`, `date`, `lieu`, `description`) VALUES
(1, 'Certification en droit des baux', '2010', 'A l&rsquo;Universit&eacute; de Toulouse 1 - Capitol', 'Etudes juridiques des baux commerciaux. Elaboration des baux en adaptant le droit aux diff&eacute;rentes clauses.'),
(2, 'Master 2 - Droit de l\'urbanisme, de la construction et de l&rsquo;immobilier', '2009', 'A l&rsquo;Universit&eacute; de Toulouse 1 - Capitol', 'Dipl&ocirc;me obtenu en droit de l\'urbanisme, de la construction et de l\'immobilier. Etudes juridiques du droit public, du droit priv&eacute;, du droit p&eacute;nal et de la proc&eacute;dure p&eacute;nale.'),
(3, 'Certification d\'assistante BTP', '2007', 'A l\'AFPA', 'Form&eacute;e au m&eacute;tier d\'assistante de conducteurs de travaux, j\'ai appris les termes techniques du domaine du batiment et des travaux publiques, la r&eacute;alisation de plan sur autocad, le suivi de l\'avancement des travaux r&eacute;alis&eacute; sous forme de tableau dans excel, &agrave; effectuer le compte-rendu des r&eacute;unions de chantier et &agrave; r&eacute;aliser les diff&eacute;rents contrats de sous-traitance.'),
(4, 'Certification d\'assistante administrative', '1990', 'A l\'AFPA', 'Form&eacute;e pour l\'assistanat administratif et notamment sur les diff&eacute;rents logiciels qui composent le pack-office de microsoft : Word, Excel, Power-point, Publisher, Outlook, Access.');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `civilite` varchar(4) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `roles` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `civilite`, `prenom`, `nom`, `email`, `roles`) VALUES
(8, 'valerie', '$2y$10$KTcNl/Ws.5PPjnb1jKlRuOqSV0VdZhlgvLPKGH4prmWp1E33ThjXm', '', 'valerie', 'lemaitre', 'lemaitre.valerie34@g', '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id_competence`);

--
-- Index pour la table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id_experience`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id_competence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `experience`
--
ALTER TABLE `experience`
  MODIFY `id_experience` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
