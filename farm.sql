-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 03 déc. 2022 à 19:39
-- Version du serveur : 10.1.36-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `farm`
--

-- --------------------------------------------------------

--
-- Structure de la table `calff`
--

CREATE TABLE `calff` (
  `id` int(11) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `insNumber` int(11) NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `bullNumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `vet` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `calff`
--

INSERT INTO `calff` (`id`, `gender`, `insNumber`, `cowNumber`, `bullNumber`, `date`, `vet`, `image`) VALUES
(1, 'MALE', 1, 1, 34, '2022-07-05', 'dr koko', '62c6196e77e09'),
(3, 'FEMALE', 2, 2, 346, '2022-07-12', 'DR jojo', '62d8613820fae'),
(5, 'MALE', 3, 2, 45, '2022-07-06', 'dr moo', '62d86a71a0f5b');

-- --------------------------------------------------------

--
-- Structure de la table `cow`
--

CREATE TABLE `cow` (
  `id` int(10) NOT NULL,
  `cowType` varchar(30) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cow`
--

INSERT INTO `cow` (`id`, `cowType`, `dateOfBirth`, `status`, `image`) VALUES
(1, 'Holstein', '2022-07-14', 'Healthy', '62c61ca24f901'),
(2, 'guernsey', '2022-07-11', 'Sold', '62c603fcbbbea'),
(3, 'American Cow', '2022-07-04', 'Sick', '62c5f8921c6a3'),
(4, 'holstein', '2022-07-14', 'Dead', '62c7536d05c20'),
(5, 'holstein', '2022-07-13', 'Healthy', '62d9569595501');

-- --------------------------------------------------------

--
-- Structure de la table `dead`
--

CREATE TABLE `dead` (
  `id` int(11) NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `causes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dead`
--

INSERT INTO `dead` (`id`, `cowNumber`, `date`, `causes`) VALUES
(1, 4, '2022-07-04', 'normal death');

-- --------------------------------------------------------

--
-- Structure de la table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `foodItem` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feed`
--

INSERT INTO `feed` (`id`, `foodItem`, `remarks`, `quantity`, `date`, `time`) VALUES
(1, 1, 'none', 20, '2022-07-19', '05:14:06'),
(2, 2, 'none', 14, '2022-07-10', '05:06:09'),
(3, 2, 'rien', 11, '2022-07-05', '02:34:00');

-- --------------------------------------------------------

--
-- Structure de la table `foodstock`
--

CREATE TABLE `foodstock` (
  `id` int(11) NOT NULL,
  `foodItem` varchar(30) NOT NULL,
  `quantity` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `foodstock`
--

INSERT INTO `foodstock` (`id`, `foodItem`, `quantity`) VALUES
(1, 'corn', 2012),
(2, 'weed', 986);

-- --------------------------------------------------------

--
-- Structure de la table `hoof`
--

CREATE TABLE `hoof` (
  `id` int(11) NOT NULL,
  `doneBy` int(11) NOT NULL,
  `cowGroup` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hoof`
--

INSERT INTO `hoof` (`id`, `doneBy`, `cowGroup`, `date`) VALUES
(1, 2, '1-23', '2022-07-10'),
(2, 2, '24-45', '2022-06-14');

-- --------------------------------------------------------

--
-- Structure de la table `insamination`
--

CREATE TABLE `insamination` (
  `id` int(11) NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `bullNumber` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `vet` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `insamination`
--

INSERT INTO `insamination` (`id`, `cowNumber`, `bullNumber`, `date`, `vet`) VALUES
(1, 1, '34', '2022-07-04', 'DR loo'),
(2, 2, '346', '2022-07-03', 'DR sook'),
(3, 2, '45', '2022-07-06', 'fofo'),
(4, 1, '43', '2022-07-05', 'dr toto');

-- --------------------------------------------------------

--
-- Structure de la table `milking`
--

CREATE TABLE `milking` (
  `id` int(11) NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `date` date NOT NULL,
  `liters` float NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `milking`
--

INSERT INTO `milking` (`id`, `cowNumber`, `date`, `liters`, `time`) VALUES
(1, 1, '2022-07-18', 10, '45:21:40'),
(2, 2, '2022-07-11', 20, '10:05:40');

-- --------------------------------------------------------

--
-- Structure de la table `milkstock`
--

CREATE TABLE `milkstock` (
  `id` int(11) NOT NULL,
  `liters` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `milkstock`
--

INSERT INTO `milkstock` (`id`, `liters`) VALUES
(1, 13);

-- --------------------------------------------------------

--
-- Structure de la table `salecow`
--

CREATE TABLE `salecow` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `amount` float NOT NULL,
  `customer` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `remarks` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salecow`
--

INSERT INTO `salecow` (`id`, `date`, `cowNumber`, `amount`, `customer`, `contact`, `email`, `remarks`) VALUES
(1, '2022-07-13', 2, 25000, 'Marouane SAKI', '096785764', 'sakki@gmail.com', 'none');

-- --------------------------------------------------------

--
-- Structure de la table `salemilk`
--

CREATE TABLE `salemilk` (
  `id` int(11) NOT NULL,
  `customer` varchar(50) NOT NULL,
  `liters` float NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salemilk`
--

INSERT INTO `salemilk` (`id`, `customer`, `liters`, `price`, `total`, `date`) VALUES
(1, 'toto', 3, 1, 3, '2022-07-13'),
(2, 'bekkar', 2, 25, 50, '2022-07-06');

-- --------------------------------------------------------

--
-- Structure de la table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(100) NOT NULL,
  `designation` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `droit` enum('AD','ST') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `staff`
--

INSERT INTO `staff` (`id`, `name`, `email`, `number`, `designation`, `image`, `username`, `password`, `droit`) VALUES
(1, 'Ali AZZI', 'ali.azzi@um6p.ma', '+22232253646', 'owner of the farm', '62c5c0a8636ec', 'ali', '153e6f39983bee2b524a67b93ce0b1f1', 'AD'),
(2, 'ayoub daoudia', 'daoudia@gmail.com', '2432225434', 'employe', '62c5ea979a574', 'ayo', '19351f0df296e6e73c827a2fff8dbed1', 'ST');

-- --------------------------------------------------------

--
-- Structure de la table `treatment`
--

CREATE TABLE `treatment` (
  `id` int(11) NOT NULL,
  `cowNumber` int(11) NOT NULL,
  `description` text NOT NULL,
  `vet` varchar(30) NOT NULL,
  `datestart` date NOT NULL,
  `dateend` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `treatment`
--

INSERT INTO `treatment` (`id`, `cowNumber`, `description`, `vet`, `datestart`, `dateend`) VALUES
(1, 1, 'flu', 'Dr fjk', '2022-07-01', '2022-07-04'),
(2, 2, 'cut', 'DR soo', '2022-07-06', '2022-07-14'),
(3, 1, 'tfkk', 'iytui', '2022-07-20', '2022-07-22');

-- --------------------------------------------------------

--
-- Structure de la table `vaccine`
--

CREATE TABLE `vaccine` (
  `id` int(11) NOT NULL,
  `cowGroup` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Vet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vaccine`
--

INSERT INTO `vaccine` (`id`, `cowGroup`, `date`, `Vet`) VALUES
(1, '1-22', '2022-07-05', 'Dr stone'),
(2, '23-45', '2022-07-19', 'dr jm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `calff`
--
ALTER TABLE `calff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cavins` (`insNumber`);

--
-- Index pour la table `cow`
--
ALTER TABLE `cow`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dead`
--
ALTER TABLE `dead`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_d` (`cowNumber`);

--
-- Index pour la table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fe` (`foodItem`);

--
-- Index pour la table `foodstock`
--
ALTER TABLE `foodstock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hoof`
--
ALTER TABLE `hoof`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_h` (`doneBy`);

--
-- Index pour la table `insamination`
--
ALTER TABLE `insamination`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_ins` (`cowNumber`);

--
-- Index pour la table `milking`
--
ALTER TABLE `milking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_m` (`cowNumber`);

--
-- Index pour la table `milkstock`
--
ALTER TABLE `milkstock`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `salecow`
--
ALTER TABLE `salecow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_salecow` (`cowNumber`);

--
-- Index pour la table `salemilk`
--
ALTER TABLE `salemilk`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_t` (`cowNumber`);

--
-- Index pour la table `vaccine`
--
ALTER TABLE `vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `calff`
--
ALTER TABLE `calff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cow`
--
ALTER TABLE `cow`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `dead`
--
ALTER TABLE `dead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `foodstock`
--
ALTER TABLE `foodstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `hoof`
--
ALTER TABLE `hoof`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `insamination`
--
ALTER TABLE `insamination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `milking`
--
ALTER TABLE `milking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `milkstock`
--
ALTER TABLE `milkstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `salecow`
--
ALTER TABLE `salecow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `salemilk`
--
ALTER TABLE `salemilk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `vaccine`
--
ALTER TABLE `vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `calff`
--
ALTER TABLE `calff`
  ADD CONSTRAINT `fk_cavins` FOREIGN KEY (`insNumber`) REFERENCES `insamination` (`id`);

--
-- Contraintes pour la table `dead`
--
ALTER TABLE `dead`
  ADD CONSTRAINT `fk_d` FOREIGN KEY (`cowNumber`) REFERENCES `cow` (`id`);

--
-- Contraintes pour la table `feed`
--
ALTER TABLE `feed`
  ADD CONSTRAINT `fk_fe` FOREIGN KEY (`foodItem`) REFERENCES `foodstock` (`id`);

--
-- Contraintes pour la table `hoof`
--
ALTER TABLE `hoof`
  ADD CONSTRAINT `fk_h` FOREIGN KEY (`doneBy`) REFERENCES `staff` (`id`);

--
-- Contraintes pour la table `insamination`
--
ALTER TABLE `insamination`
  ADD CONSTRAINT `fk_ins` FOREIGN KEY (`cowNumber`) REFERENCES `cow` (`id`);

--
-- Contraintes pour la table `milking`
--
ALTER TABLE `milking`
  ADD CONSTRAINT `fk_m` FOREIGN KEY (`cowNumber`) REFERENCES `cow` (`id`);

--
-- Contraintes pour la table `salecow`
--
ALTER TABLE `salecow`
  ADD CONSTRAINT `fk_salecow` FOREIGN KEY (`cowNumber`) REFERENCES `cow` (`id`);

--
-- Contraintes pour la table `treatment`
--
ALTER TABLE `treatment`
  ADD CONSTRAINT `fk_t` FOREIGN KEY (`cowNumber`) REFERENCES `cow` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
