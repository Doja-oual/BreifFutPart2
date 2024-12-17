FUT Champions Ultimate Team - Backend

Description du Projet

Ce projet consiste à développer la partie backend de la plateforme FUT Champions Ultimate Team en utilisant PHP procédural et MySQLi. L'objectif est de permettre une gestion efficace des joueurs, des équipes et des nationalités tout en intégrant des fonctionnalités interactives et sécurisées.

Fonctionnalités Principales

Gestion des Entités

Ajouter, modifier, supprimer et afficher les joueurs, équipes et nationalités.

Relations dynamiques entre les entités (ex : joueurs associés à des équipes et nationalités).

Tableau de Bord Dynamique

Visualisation des statistiques clés via des graphiques interactifs (utilisation de Chart.js).

Suivi des performances des équipes et répartition des joueurs.

Internationalisation (i18n)

Support multilingue grâce à des fichiers de langue (ex : fr.php, en.php).

Possibilité de changer la langue de l'interface utilisateur.

Sécurité Backend

Protection contre les injections SQL via des requêtes préparées.

Validation et assainissement des données pour éviter les attaques XSS.

Gestion des erreurs et optimisation des performances SQL.

Expérience Utilisateur (Bonus)

Chargement asynchrone des données grâce à AJAX.

Utilisation de modals pour améliorer la navigation et l'expérience utilisateur.

Technologies Utilisées

PHP procédural (Backend)

MySQLi (Base de données)

Chart.js (Graphiques et statistiques)

HTML/CSS/JS (Frontend)

AJAX (Interactivité)

Prérequis d'Installation

Serveur Apache avec PHP et MySQL (ex : XAMPP, WAMP).

Git pour le versionnement.

Navigateur moderne.

Instructions d'Installation

Cloner le projet

git clone https://github.com/dojaoualla/fut-champions-backend.git
cd fut-champions-backend

Configurer la base de données

Importez le fichier database.sql dans votre serveur MySQL.

Mettez à jour les informations de connexion dans config.php.

Lancer le serveur localPlacez le projet dans le répertoire htdocs (XAMPP) et accédez à :

http://localhost/fut-champions-backend/

Structure du Projet

fut-champions-backend/
│
├── assets/           # Fichiers CSS, JS, ressources
├── includes/         # Configurations et fonctions PHP
├── lang/             # Fichiers de langue (i18n)
├── public/           # Pages principales
│   ├── players.php   # Gestion des joueurs
│   ├── teams.php     # Gestion des équipes
│   ├── dashboard.php # Statistiques interactives
│   └── index.php     # Page d'accueil
├── database.sql      # Script SQL
├── README.md         # Documentation
└── .gitignore        # Fichiers ignorés

Livrables

Repository GitHub contenant :

Scripts PHP et SQL.

Diagrammes ERD et UML.

Documentation claire (README).

Lien de Planification (ex : Jira).

Compte Rendu Final.

(Facultatif) Hébergement en ligne du projet.

Auteur

KhadijaProfil GitHub