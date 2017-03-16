# Awakin 🤖☕🍕
PHP Course Project / Real-time food ordering service

## Installation

Ce projet utilise [Laravel Homestead](https://laravel.com/docs/5.4/homestead) pour vous permettre de développer/foutre le bordel dans une VM sans casser votre PC.

Pour l'utiliser :

1. Installer Virtualbox (Inutile de créer une VM, juste l'installer)
2. Installer Vagrant (Gestionnaire automatique 🤖 de VMs) https://www.vagrantup.com/downloads.html
3. Ajoutez la ligne `192.168.10.10  homestead.app` à votre fichier *hosts* (Tuto : https://support.rackspace.com/how-to/modify-your-hosts-file/ )  
  (Pour pouvoir accéder  notre serveur de dev en tapant http://homestead.app ;) )

## Utilisation

### Démarrage

Pour commencer à travailler, lancez la commande `vagrant up` dans le dossier awakin. Celle-ci lance la vm qui contient php, nginx, mysql (et tout le nécessaire pour faire tourner le serveur).  
Au premier lancement, cette commande téléchargera l'image de la VM (879 MB), cela pourra donc être un peu long, voire prendre tout un TD à l'ESIEE

Une fois la vm lancée, rendez-vous sur http://homestead.app dans votre navigateur pour voir l'app.

Si besoin, la commande `vagrant ssh` permet de se connecter en ssh à la vm.

### Extinction

Lancez la commande `vagrant stop` dans le dossier awakin pour arrêter la vm. Ainsi, les serveurs php, mysql, et nginx seront arrêtés, et votre machine ne sera pas encombrée.


