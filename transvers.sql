-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 27 avr. 2023 à 16:38
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
-- Base de données : `transvers`
--

-- --------------------------------------------------------

--
-- Structure de la table `competence`
--

CREATE TABLE `competence` (
  `id` int(11) NOT NULL,
  `identreprise` int(11) DEFAULT NULL,
  `idquestionnement` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `iditem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competence`
--

INSERT INTO `competence` (`id`, `identreprise`, `idquestionnement`, `score`, `iditem`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1),
(3, 1, 3, 1, 1),
(4, 1, 4, 1, 1),
(5, 1, 5, 1, 1),
(6, 1, 6, 1, 1),
(7, 1, 1, 1, 2),
(8, 1, 2, 1, 2),
(9, 1, 1, 1, 3),
(26, 1, 4, 2, 3),
(27, 1, 5, 1, 3),
(28, 1, 6, 1, 3),
(29, 1, 7, 0, 3);

-- --------------------------------------------------------

--
-- Structure de la table `competence_item`
--

CREATE TABLE `competence_item` (
  `id` int(8) NOT NULL,
  `libelle` text NOT NULL,
  `progresser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `competence_item`
--

INSERT INTO `competence_item` (`id`, `libelle`, `progresser`) VALUES
(1, 'Excellence Technique/Communauté de pratiques', 'Mise en place :\r\n- De formations / coachings techniques,\r\n- Du temps institutionnalisé pour la veille et/ou l\'apprentissage,\r\n- D\'incitations pour la tenue à jour des compétences des équipes internes ET externes,\r\n- De communautés de pratiques ou d\'intérêts, des guildes,\r\n- Mentorat interne,\r\n- De revues d\'amélioration continue,\r\n- D\'Hackathons ou évènements pour promouvoir l\'excellence technique et l\'esprit agile'),
(2, 'Faire agile', 'Pour un pilote : une équipe / un ilôt de projet\r\n\r\nPour le déploiement systématique, l\'entreprise a une démarche d\'analyse globale des pôles / projets / produits devant entrer dans un processus pour \"faire agile\". Si les conditions sont remplies, l\'équipe projets / produits utilise la ou les \"méthodes\" préconisées.\r\n\r\nVous devriez être à la promotion de quelques valeurs agiles en :\r\n- Construisant vos projets autour de personnes motivées\r\n- Développant les compétences pour la compréhension du client\r\n- Vous attachant davantage à la qualité qu\'au coût lors des recrutements (en particulier externe)\r\n- Accompagnant vos clients\r\n\r\nVous atteignez un état d\'esprit agile en :\r\n- Promouvant systématiquement le \"Fail Fast\"\r\n- Valorisant le métier de facilitateur plus que celui de pilote\r\n- Favorisant un management agile ou transformationnel\r\n- Acceptant que les équipes s\'auto-organisent\r\n- Rentrant dans une logique de gestion de produits / services plus que de projets.'),
(3, 'Gestion humaine des compétences', 'Le second niveau devrait impliquer une attention à :\r\n- Des filières d\'évolution distinctes (gestion de projet & expertise technique & expertise fonctionnelle & etc)\r\n- Des plans de formations en adéquation avec les filières\r\n- La recherche de profils avec des compétences \"Agiles\"\r\n- Un plan de développement structuré autour de l\'agile\r\n\r\nLa gestion humaine des compétences impliquerait :\r\n- Une organisation vers la pluri-compétence\r\n- Une GPEC orientée vers un développement systématique de la liquidité des compétences\r\n- Des entretiens pluri-annuels\r\n- Des entretiens 360°');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `nom` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`) VALUES
(1, 'Hypromat');

-- --------------------------------------------------------

--
-- Structure de la table `numerique`
--

CREATE TABLE `numerique` (
  `id` int(11) NOT NULL,
  `identreprise` int(11) DEFAULT NULL,
  `idquestionnement` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `iditem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `numerique`
--

INSERT INTO `numerique` (`id`, `identreprise`, `idquestionnement`, `score`, `iditem`) VALUES
(1, 1, 1, 1, 1),
(2, 1, 2, 1, 1),
(3, 1, 3, 1, 1),
(4, 1, 4, 1, 1),
(5, 1, 5, 1, 1),
(6, 1, 6, 1, 1),
(7, 1, 7, 1, 1),
(8, 1, 1, 1, 2),
(9, 1, 2, 1, 2),
(10, 1, 3, 2, 2),
(11, 1, 4, 2, 2),
(12, 1, 5, 0, 2),
(13, 1, 6, 0, 2),
(14, 1, 1, 0, 3),
(15, 1, 2, 2, 3),
(16, 1, 3, 0, 3),
(17, 1, 4, 2, 3),
(18, 1, 5, 1, 3),
(19, 1, 6, 1, 3),
(20, 1, 7, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `numerique_item`
--

CREATE TABLE `numerique_item` (
  `id` int(8) NOT NULL,
  `libelle` text NOT NULL,
  `progresser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `numerique_item`
--

INSERT INTO `numerique_item` (`id`, `libelle`, `progresser`) VALUES
(1, 'Business model', 'Pour augmenter le chiffre d\'affaire étant donnée qu\'on est une start up nous devons finir le produire pour permettre de le vendre et générer un CA. Les outils utilisé sont utile et permettent de résoudre des tâches plus rapidement et de bonne qualité.\r\n\r\nNos futurs clients devront utiliser une application pour pouvoir travailler avec nous du coup il n\'y a pas d\'axe d\'amélioration pour ce point. La démarche RSE est respecté mais cela n\'est pas compliqué au vu de la taille de l\'entreprise. On n\'a pas encore connu de frein financier.'),
(2, 'Relation client', 'L\'entreprise dispose de la plupart des reseau sociaux qui sont alimenter plusieurs fois par semaine. Nous n\'avons pas encore de client. La gestion des reseaux sociaux est assez correct nous avons des bons chiffres malgrès qu\'on soit une start up mais je pense qu\'engager une personne qui étudie dans ce domaine la serait meilleur étant donné que c\'est ma patronne qui gère les réseaux.\r\n\r\nLes personnes avec qui on travail réagissent souvent aux post de l\'entreprise, ils sont donc assez actifs mais on devrait peut être en inciter certains pour avoir plus de visibilité sur les post. Étant donné que le produit n\'est pas encore disponible nous avons pas encore de visite sur le site. Nous avons des concurrents mais ils ne travaillent pas sur les mêmes thèmes que nous et n\'ont pas la même approches technologique que nous.\r\n'),
(3, 'Management', 'Tout le monde est équipé d\'appareil numérique. Sur l\'évolution digital, l\'entreprise n\'étant pas vielle, nous avons été directement dans le mouvement numérique.\r\n\r\nNous travaillons actuellement à l\'ISU pour nous permettre d\'avoir les données satélites de nos espaces vert, ce qui n\'était pas le cas au debut de l\'entreprise. Nous sommes en recherches pour avoir les meilleurs données.');

-- --------------------------------------------------------

--
-- Structure de la table `questionnement_competence`
--

CREATE TABLE `questionnement_competence` (
  `id` int(8) NOT NULL,
  `question` text NOT NULL,
  `id_item` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionnement_competence`
--

INSERT INTO `questionnement_competence` (`id`, `question`, `id_item`) VALUES
(1, 'Formations pour Apprendre à apprendre, changement de paradigme, \"être à la page\" (au-delà des compétences \"justes\" nécessaires)', 1),
(2, 'Le co-développement (outil d\'intelligence collective) existe-t-il dans l\'entreprise ?', 1),
(3, 'Les collaborateurs sont-ils amenés à partager leurs compétences et sous quelles formes ?', 1),
(4, 'Le mentoring (fonctionnement en binôme) existe-t-il pour assurer le transfert de compétences ?', 1),
(5, 'Les managers sont-ils aussi formateurs sur certains sujet pour l\'entreprise entière ?', 1),
(6, 'L\'entreprise favorise-t-elle l\'excellence technique ? (Principe 9 du Manifeste Agile)', 1),
(7, 'Déployez vous les pratiques du \"Faire Agile\", c\'est-à-dire une ou plusieurs des \"méthodes\" agiles ?', 2),
(8, 'Votre entreprise promeut-elle un \"état d\'esprit agile\" ?', 2),
(9, 'Votre entreprise gère-t-elle humainement les compétences ?', 3);

-- --------------------------------------------------------

--
-- Structure de la table `questionnement_numerique`
--

CREATE TABLE `questionnement_numerique` (
  `id` int(8) NOT NULL,
  `id_item` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionnement_numerique`
--

INSERT INTO `questionnement_numerique` (`id`, `id_item`, `question`) VALUES
(1, 1, 'Votre entreprise dégage t-elle une part de CA  par des produits ou services en ligne'),
(2, 1, 'La mise en place d’outils numériques a-t-elle permis d\'optimiser les coûts, les délais et la qualité ?'),
(3, 1, 'Comment les outils sont-ils intégrés dans les process de l’entreprise ?'),
(4, 1, 'Comment partagez-vous les données numériques avec les parties prenantes (clients, fournisseurs,…) ?'),
(5, 1, 'Mesurez-vous les impacts du numérique sur votre entreprise ?'),
(6, 1, 'Quel est l’impact du numérique sur la démarche RSE de l’entreprise ?'),
(7, 1, 'Existe-t-il des freins (stratégiques, financiers,…) à l’ investissement dans les outils numériques ?'),
(8, 2, 'L’entreprise dispose-t-elle : d’un site internet, d’un compte LinkedIn, d’une page Facebook, d’un compte Twitter,... ?'),
(9, 2, 'Comment utilisez-vous le numérique dans la relation client ? (nouveau modèle de vente, nouveau modèle d’échanges avec les clients, communauté, story, chat,...)'),
(10, 2, 'L’entreprise dispose-t-elle d’un community manager ?'),
(11, 2, 'Certains de vos collaborateurs sont-ils actifs sur les réseaux sociaux au nom de l’entreprise ?'),
(12, 2, 'Comment mesurez-vous et exploitez-vous les données issues du site de votre entreprise ?'),
(13, 2, 'Avez-vous observé chez vos concurrents des pratiques innovantes ?'),
(14, 3, 'Vos collaborateurs sont-ils équipés de nouveaux équipements numériques de travail (PC portable, tablette, smartphone,…) ? '),
(15, 3, 'L’arrivée des outils digitaux a-t-elle eu un impact sur les pratiques et la culture de l’entreprise ?'),
(16, 3, 'Comment vous êtes-vous approprié et comment avez-vous accompagné ces évolutions?'),
(17, 3, 'Les nouvelles possibilités technologiques ont-elles fait évoluer le modèle d’organisation de l’entreprise et/ou votre management, vers plus de collaboration avec des acteurs internes ou externes ?'),
(18, 3, 'Mobilisez-vous des outils de veille et mettez-vous en œuvre des modalités de curation et de partage de l’ information ?'),
(19, 3, 'Les fonctionnalités des outils sont-elles augmentées par la pratique de vos collaborateurs ?'),
(20, 3, 'Comment accompagnez-vous vos collaborateurs dans la transition numérique ?');

-- --------------------------------------------------------

--
-- Structure de la table `questionnement_reactivite`
--

CREATE TABLE `questionnement_reactivite` (
  `id` int(8) NOT NULL,
  `id_item` int(11) NOT NULL,
  `question` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `questionnement_reactivite`
--

INSERT INTO `questionnement_reactivite` (`id`, `id_item`, `question`) VALUES
(1, 1, 'Valeur supérieure utilisable livrée plus tôt (Fonction principale utilisable dès les premières versions)'),
(2, 1, 'Réactivité face aux impératifs prépondérants'),
(3, 1, 'Mesure de la vélocité de l\'équipe (indicateur de suivi du travail d\'une équipe de conception)'),
(4, 2, 'Les installations techniques et de gestion sont modernes (TIC/ERP/CRM)'),
(5, 2, 'Les équipes sont en capacité d\'autonomiser une partie de leurs tâches'),
(6, 2, 'Les équipes s’inscrivent dans un cadre Agile Lean'),
(7, 2, 'Les mécanismes de livraison et de synchronisation sont matures'),
(8, 3, 'Les innovations produit tiennent compte de l\'urgence climatique'),
(9, 3, 'Les processus internes sont remis en cause pour diminuer leur impact environnemental'),
(10, 3, 'Les parties prenantes sont sélectionnées en fonction de leur éthique vis-à-vis du développement durable'),
(11, 4, 'Veille stratégique');

-- --------------------------------------------------------

--
-- Structure de la table `reactivite`
--

CREATE TABLE `reactivite` (
  `id` int(11) NOT NULL,
  `identreprise` int(11) DEFAULT NULL,
  `idquestionnement` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `iditem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reactivite`
--

INSERT INTO `reactivite` (`id`, `identreprise`, `idquestionnement`, `score`, `iditem`) VALUES
(1, 1, 1, 2, 1),
(2, 1, 2, 0, 1),
(3, 1, 3, 0, 1),
(4, 1, 1, 2, 2),
(5, 1, 2, 1, 2),
(6, 1, 3, 0, 2),
(7, 1, 4, 1, 2),
(8, 1, 1, 0, 3),
(9, 1, 2, 1, 3),
(10, 1, 3, 1, 3),
(11, 1, 1, 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `reactivite_item`
--

CREATE TABLE `reactivite_item` (
  `id` int(8) NOT NULL,
  `libelle` text NOT NULL,
  `progresser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reactivite_item`
--

INSERT INTO `reactivite_item` (`id`, `libelle`, `progresser`) VALUES
(1, 'Vélocité de réponse', 'Améliorer la vélocité des équipes en :\n- proposant aux clients internes comme externes, des MVP\n- traitant les aléas au fil de l\'eau (via un PDCA par exemple)\n- mesurant cette vélocité (par la mise en place de burn down chart par exemple)\n- en formant les équipes aux outils de gestion du temps et des priorités dans un monde VUCA (pomodoro, kanban board...)\nVUCA : '),
(2, 'Environnements souples', 'Au sein de l\'entreprise, nommer un Business Analyst qui sera alors le véritable chaînon manquant entre la DSI et les métiers.\r\n\r\nInvestir dans le Businness Object et le no-code\r\n\r\nFormer les équipes au Lean et/ou aux méthodes agiles\r\n\r\nDès que possible instaurer les concepts du juste à temps'),
(3, 'Défi environnemental', 'Faire de l\'ugence climatique une priorité sur l\'ensemble des activités de l\'entreprise par la mise en place de démarches :\r\n- d\'éco-conception des produits\r\n- d\'éco-industrialisation et d\'éco-production sur l\'ensemble des process\r\n- de développement durable (axes environnemental, social et sociétal)\r\n- performance énergétique des bâtiments et infrastructures des systèmes d\'informations\r\n- green supply chain management'),
(4, 'Veille et benchmark', 'Former les équipes à l\'intelligence économique, la veille et le benchmarking.\r\nDevenir proactif : Apprendre à prendre du recul dans l\'instantanéité pour avoir un coup d\'avance');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `competence`
--
ALTER TABLE `competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `competence_item`
--
ALTER TABLE `competence_item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `numerique`
--
ALTER TABLE `numerique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `numerique_item`
--
ALTER TABLE `numerique_item`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questionnement_competence`
--
ALTER TABLE `questionnement_competence`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questionnement_numerique`
--
ALTER TABLE `questionnement_numerique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `questionnement_reactivite`
--
ALTER TABLE `questionnement_reactivite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reactivite`
--
ALTER TABLE `reactivite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reactivite_item`
--
ALTER TABLE `reactivite_item`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `competence`
--
ALTER TABLE `competence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `competence_item`
--
ALTER TABLE `competence_item`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `numerique`
--
ALTER TABLE `numerique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `numerique_item`
--
ALTER TABLE `numerique_item`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `questionnement_competence`
--
ALTER TABLE `questionnement_competence`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `questionnement_numerique`
--
ALTER TABLE `questionnement_numerique`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `questionnement_reactivite`
--
ALTER TABLE `questionnement_reactivite`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reactivite`
--
ALTER TABLE `reactivite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `reactivite_item`
--
ALTER TABLE `reactivite_item`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
