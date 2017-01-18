-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Mer 26 Octobre 2016 à 00:19
-- Version du serveur :  5.6.28
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `bappost`
--

-- --------------------------------------------------------

--
-- Structure de la table `musics`
--

CREATE TABLE `musics` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'refers to id in users table',
  `title` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `musics`
--

INSERT INTO `musics` (`id`, `user_id`, `title`, `file`, `created_at`) VALUES
(1, 1, 'UN*DEUX - Shopping Dayk', 'musics/d0dbde0148d66ddf8ae815e014e2a668.1.mp3', '2015-10-01 11:35:05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'encrypted passwords are better',
  `picture` varchar(255) DEFAULT '' COMMENT 'name of profile picture',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `picture`, `created_at`) VALUES
(1, 'Git', 'git@initiation.com', 'password', 'view/profil_pic/f26c44906efcbfb8e80baaf4dafd0134.1.png', '2015-10-01 09:13:46'),
(2, 'Neo', 'jean@yahoo.fr', 'lol', '', '2016-10-24 18:26:20'),
(3, 'Neo2', 'jean2@yahoo.fr', 'lol2', '', '2016-10-24 19:45:43'),
(4, 'mdr', 'mdr@yahoo.fr', 'mdr', '', '2016-10-25 21:35:52'),
(5, 'mdr2', 'mdr2@yahoo.fr', 'mdr2', '', '2016-10-25 22:17:21');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;