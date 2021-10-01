# Projet Versionning Collab

## Installation

Cloner le repository git


Rendez-vous dans le dossier du projet et renseignez les variables vides du fichier .env.example

Renommez le .env.example en .env

Lancez maintenant la commande :

```
docker-compose up -d --build
```

Une fois les containers lancés, vous migrez la base de données avec cette commande :

```
docker-compose exec web php artisan migrate --seed
```

## Navigateur

Pour ouvrir l'application, ouvrez un navigateur et allez à l'adresse suivante :

```
localhost:8080
```

Vous pouvez accéder à PHPMyAdmin avec l'adresse suivante :

```
locahost:8888
```

