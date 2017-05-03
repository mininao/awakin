# Awakin 🤖☕🍕
PHP Course Project / Real-time food ordering service

## Installation

Après avoir cloné ce repo  
* Copiez `.env.example` en `.env`, et ajustez les paramètres de BDD à votre système
* Lancez `php artisan key:generate` pour générer une clé unique à votre Installation

✅ Pour être sur d'avoir les bons paramètres d'indentation automatique, pensez à installer l'extension *editorconfig* pour votre éditeur de texte

## Exécution

Lancez la commande `php artisan serve` pour lancer le serveur

## Données de test

Un générateur de données de test est prévu pour pouvoir rapidement tester  l'app.  
Pour générer les données de test, lancez `php artisan migrate:refresh --seed`  
Vous pourrez ensuite vous connecter avec les identifiants :
* User `max@max.max`
* Password `maxmax`

## Déploiement Google Cloud

### Déploiement App Engine

TODO

### Déploiement Cloud SQL 📡

* Créer une instance cloud sql
* Installer cloud sql proxy en local https://cloud.google.com/sql/docs/mysql/connect-external-app
* `cloud_sql_proxy -instances=awakin-162908:europe-west1:awakin1=tcp:3306`
* `mysql -h 127.0.0.1 -u root -p -e "CREATE DATABASE laravel;"`
* `DB_CONNECTION=mysql DB_DATABASE=laravel DB_USERNAME=root DB_PASSWORD=lereveildesetudiants php artisan migrate --force`

## Guide des fichiers 
Ne figurent dans cette liste que les fichiers que nous avons créé ou modifiés nous-mêmes.
```
├── app # Dossier contenant les classes principales de l'application
│   ├── Console # Dossier par défaut laravel, gérant les commandes dans la console 
│   ├── Exceptions # Dossier par défaut laravel, gérant les exceptions
│   ├── Http # Gestion des requêtes HTTP
│   │   ├── Controllers
│   │   │   ├── Admin
│   │   │   │   ├── CommandsController.php # Gère les requêtes liés au dashboard de préparation des commandes
│   │   │   │   └── ProductCrudController.php # Gère le panneau d'administration des produits
│   │   │   ├── Auth
│   │   │   │   └── LoginController.php # Gère le login via google
│   │   │   ├── HomeController.php # Affiche la page d'acceuil
│   │   │   └── student
│   │   │       ├── OrderController.php # Gère le listing, la création et l'affichage des commandes
│   │   │       └── StudentController.php # Affiche le tableau de bord étudiant
│   │   ├── Middleware # Middleware par défaut laravel pour les requêtes
│   │   └── Requests
│   │       └── ProductCrudRequest.php # Gère les reqûtes CRUD provenant du panneau d'administration des produits
│   ├── OrderedProduct.php # Classe faisant le lien Commande-Produit
│   ├── OrderMessage.php # Classe inutilisée, en prévision d'une fonctionnalité de messagerie
│   ├── Order.php # Classe représentant une Commande
│   ├── Product.php # Classe représentant un produit
│   ├── Providers # Providers par défaut laravel
│   └── User.php # Classe représentant un Utilisateur
├── app.yaml # Configuration pour déploiement Google Cloud
├── artisan
├── bootstrap # Fichiers par défaut laravel lancant l'appli
├── composer.json # Dépendances backend du projet
├── composer.lock # Versions des dépendances backend du projet
├── config # Fichiers chargeant la configuration de l'app, en majorité auto-générés
├── database
│   ├── factories
│   │   └── ModelFactory.php # Indique comment créer des entitées examples pour remplir la base de donées
│   ├── migrations # Très important : Indique la structure de base de données et le contenu des entitées
│   │   ├── 2014_10_12_000000_create_users_table.php # Utilisateurs
│   │   ├── 2017_03_24_022718_create_orders_table.php # Commandes
│   │   ├── 2017_03_24_030252_create_ordered_products_table.php # Produits de chaque Commande
│   │   ├── 2017_03_24_030257_create_products_table.php # Produits
│   │   ├── 2017_03_24_030304_create_order_messages_table.php # Inutilisé
│   └── seeds
│       └── DefaultTestData.php # Script de génération des données de test factices
├── documents # Anciens modèles de données, plus utilisés
├── package.json # Dépendances frontend de l'application
├── public # Frontend compilé, pas intéressant, et généré automatiquement par npm run dev
├── README.md # Ce fichier
├── resources # Frontend non-compilé
│   ├── assets
│   │   ├── js # Toute la partie JS de l'application
│   │   │   ├── app.js # Javascript chargeant les différents composants et gérant la sidebar sur mobile
│   │   │   ├── components
│   │   │   │   ├── AdminOrderList.vue # Panneau de gestion des commandes
│   │   │   │   ├── CreateOrder.vue # Page de prise de commande
│   │   │   │   └── GetStatus.vue # Affichage en temps réel de la progression d'une commande
│   │   │   ├── firebaseModule.js # Connexion à Firebase
│   │   │   └── init.js # Initialisation des différents modules avec webpack
│   │   └── sass # Ensemble des styles de l'appication
│   │       ├── app.scss # Charge tous les autres fichiers
│   │       ├── _bootstrap.scss
│   │       ├── components
│   │       │   ├── _brand.scss
│   │       │   ├── _button.scss
│   │       │   ├── _sideNav.scss
│   │       │   └── _titleBar.scss
│   │       ├── layouts
│   │       │   └── _nav.scss
│   │       ├── pages
│   │       │   ├── admin
│   │       │   │   └── _orderList.scss
│   │       │   ├── _auth.scss
│   │       │   ├── student
│   │       │   │   ├── _createOrder.scss
│   │       │   │   ├── _index.scss
│   │       │   │   ├── _show.scss
│   │       │   │   └── _student.scss
│   │       │   └── _welcome.scss
│   │       ├── util
│   │       │   └── _card.scss
│   │       └── _variables.scss # Variables communes à toute l'app : couleurs, etc...
│   └── views # Tous les templates dont le rendu est fait côté backend
│       ├── administrateur
│       │   ├── commands
│       │   │   └── index.blade.php
│       │   └── products
│       │       ├── create.blade.php
│       │       ├── edit.blade.php
│       │       └── index.blade.php
│       ├── auth
│       │   └── login.blade.php
│       ├── errors # Templates en cas d'erreur
│       ├── home.blade.php
│       ├── layouts
│       │   ├── app.blade.php
│       │   ├── nav.blade.php # Utilisé seulement sur l'acceuil
│       │   ├── sideNav.blade.php
│       │   └── student.blade.php
│       ├── student
│       │   ├── dashboard.blade.php
│       │   └── orders
│       │       ├── create.blade.php
│       │       ├── index.blade.php
│       │       └── show.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   └── web.php # Fichier de routage principal
├── webpack.mix.js # Configuration du gestionnaire de build frontend webpack
```
