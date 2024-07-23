<h1 align="center">Welcome to Arcadia 👋</h1>
<p>
  <img alt="Version" src="https://img.shields.io/badge/version-1-blue.svg?cacheSeconds=2592000" />
</p>
Ce projet a été réalisé pour l'Evaluation en Cours de Formation (ECF) du diplôme Graduate Developper Web & Web Mobile via l'organisme de formation Studi.

## Install

Comment déployer l'application en local sur votre machine :

> [!IMPORTANT]
> ## Pré Requis
* Télécharger Xampp et configurer un serveur localhost
* Relier son server Xampp à un hébergeur de bases de données en local tel que phpMyAdmin (http://localhost/phpmyadmin/).
* Télécharger VisualStudioCode (VSCode)
* Télécharger GIT pour vous permettre de cloner ce repository : https://github.com/DeRetourDuFutur/dev-arcadia.git


### Author
👤 **Antony MASSON**
* Github: [@DeRetourDuFutur](https://github.com/DeRetourDuFutur)

## Description du projet :

```
Ce projet a été réalisé pour l'Evaluation en Cours de Formation (ECF)
du diplôme Graduate Developper Web & Web Mobile via l'organisme de formation Studi.
Réaliser une appli web et web mobile pour le compte d'un client propriétaire d'un Zoo.
L'objectif était de développer une Application Web & Web Mobile pour un Zoo (fictif) : ARCADIA.
Le Front-End devant offrir une expérience utilisateur fluide, dynamique et totalement responsive,
tandis que le Back-End donnant la possibilité aux différents acteurs d'Arcadia (Administrateur, Employés et Vétérinaires)
de se connecter pour gérer les rubriques d'administration.
```

## Structure du site Front-End
* HTML / CSS
* JavaScript pour dynamiser l’expérience UI
* Bootstrap pour l’aspect Responsive

## Structure du site Back-End
* PHP
* MySQL
* Javascript

> ## Installation
Comment déployer l'application en local sur votre machine :

Télécharger GIT pour vous permettre de cloner ce repository : 
```
https://github.com/DeRetourDuFutur/dev-arcadia.git
```

* Télécharger VisualStudioCode (VSCode)
* Télécharger Xampp et configurer un serveur localhost
* Relier son server Xampp à un hébergeur de bases de données en local tel que phpMyAdmin (http://localhost/phpmyadmin/).
* Créez un dossier "arcadia_dev" dans "C:\xampp\htdocs"
*Clonez ce dépôt GitHub dans votre répertoire "C:\xampp\htdocs\aracadia_dev" en rentrant cette commmande dans GIT : "git clone https://github.com/DeRetourDuFutur/dev-arcadia.git main"
* Création d'un site en local :
* Dans le fichier C:\xampp\apache\conf\httpd.conf que vous aurez ouvert avec bloc-notes par ex, chercher la ligne suivante et modifier la comme suit :
* DocumentRoot "C:/xampp/htdocs/arcadia_dev"
* <Directory "C:/xampp/htdocs/arcadia_dev">

```Création/Importation de la base de données SQL :
Cf. Base SQL liée au repository
u667243348_dev_arcadia.sql

Dans le répêrtoire C:\xampp\htdocs\arcadia_dev\config,
ajouter un ficher db_config.php comprenant ce code : 
<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'votre nom de connexion');
define('DB_PASSWORD', 'votre mot de passe de connexion');
define('DB_NAME', 'le nom de votre base'); *
define('DB_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME);

* l'idéal est de conserver le nom existant pour la base : u667243348_dev_arcadia
```
Une fois votre serveur web local configuré et opérationnel, vous pourrez alors accéder au site Arcadia en local.

