-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 20 déc. 2024 à 13:04
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maplus`
--

-- --------------------------------------------------------

--
-- Structure de la table `devis`
--

CREATE TABLE `devis` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom_entreprise` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` bigint(20) DEFAULT NULL,
  `detail_demande` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `devis`
--

INSERT INTO `devis` (`id`, `nom`, `prenom`, `nom_entreprise`, `email`, `telephone`, `detail_demande`, `created_at`, `is_read`) VALUES
(1, 'SEDOUH', 'SAMIR OLIVIER', '', 'samirolivier@gmail.com', 773615537, 'SAGE COMPTA 100 V8', '2024-12-20 10:17:49', 0),
(2, 'BLIMPO', 'BAZILE', '', 'infos@mapluscorporate.com', 97148679, 'MA+ PAIE RH', '2024-12-20 10:33:23', 0),
(3, 'BLIMPO', 'BAZILE', 'BAZILE BLIMPO', 'infos@mapluscorporate.com', 97148979, 'solution de call center', '2024-12-20 10:55:11', 0),
(4, ' BRAYAN', 'BOCS', '', 'boschenny@hotmail.com', 92940654, 'Application mobile Agropole', '2024-12-20 10:58:53', 0);

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `visitor_name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `is_validated` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `visitor_name`, `review`, `is_validated`, `created_at`) VALUES
(1, 'Olivier S.G.', 'MA+ Corporate a transformé notre manière de travailler grâce à leurs solutions numériques. L\'application qu\'ils ont créée pour notre gestion interne est fluide, moderne et extrêmement efficace. Une équipe de confiance qui sait vraiment ce qu\'elle fait !', 1, '2024-12-19 12:21:35'),
(2, 'Bernadette', 'Je travaille avec MA+ Corporate depuis plusieurs mois maintenant et je suis très satisfait des résultats. Leur expertise en développement web et mobile est impressionnante. Ils ont su nous guider à chaque étape et livrer un produit final de haute qualité. Un partenaire fiable et professionnel.', 1, '2024-12-19 12:32:17'),
(3, 'Brayan', 'J\'ai eu une expérience fantastique avec MA+ Corporate ! Leur équipe a su comprendre mes besoins et a développé une application mobile intuitive et performante pour notre entreprise. Ils sont très réactifs et à l\'écoute de leurs clients. Je recommande vivement!', 1, '2024-12-19 12:39:56'),
(4, 'arielle', 'des pro....', 0, '2024-12-20 11:33:27');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `devis`
--
ALTER TABLE `devis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `devis`
--
ALTER TABLE `devis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
