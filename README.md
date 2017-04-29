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

### Déploiement Cloud SQL

* Créer une instance cloud sql
* Installer cloud sql proxy en local https://cloud.google.com/sql/docs/mysql/connect-external-app
* `cloud_sql_proxy -instances=awakin-162908:europe-west1:awakin1=tcp:3306`
* `mysql -h 127.0.0.1 -u root -p -e "CREATE DATABASE laravel;"`

