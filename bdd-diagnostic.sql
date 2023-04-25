CREATE TABLE `entreprise` (
  `id` integer,
  `nom` text
);

CREATE TABLE `competence` (
  `id` integer,
  `identreprise` integer,
  `idquestionnement` integer,
  `score` integer
);

CREATE TABLE `numerique` (
  `id` integer,
  `identreprise` integer,
  `idquestionnement` integer,
  `score` integer
);

CREATE TABLE `reactivite` (
  `id` integer,
  `identreprise` integer,
  `idquestionnement` integer,
  `score` integer
);

CREATE TABLE `questionnement` (
  `id` integer,
  `questionnement` text
);

CREATE TABLE `progression_reactivite` (
  `id` integer,
  `score` integer,
  `demarche` text
);

CREATE TABLE `progression_numerique` (
  `id` integer,
  `score` integer,
  `demarche` text
);

CREATE TABLE `progression_competence` (
  `id` integer,
  `score` integer,
  `demarche` text
);

ALTER TABLE `competence` ADD FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`);

ALTER TABLE `numerique` ADD FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`);

ALTER TABLE `reactivite` ADD FOREIGN KEY (`identreprise`) REFERENCES `entreprise` (`id`);

ALTER TABLE `reactivite` ADD FOREIGN KEY (`idquestionnement`) REFERENCES `questionnement` (`id`);

ALTER TABLE `numerique` ADD FOREIGN KEY (`idquestionnement`) REFERENCES `questionnement` (`id`);

ALTER TABLE `competence` ADD FOREIGN KEY (`idquestionnement`) REFERENCES `questionnement` (`id`);

ALTER TABLE `progression_reactivite` ADD FOREIGN KEY (`score`) REFERENCES `reactivite` (`score`);

ALTER TABLE `progression_numerique` ADD FOREIGN KEY (`score`) REFERENCES `numerique` (`score`);

ALTER TABLE `progression_competence` ADD FOREIGN KEY (`score`) REFERENCES `competence` (`score`);
