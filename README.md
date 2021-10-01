#Installation

Cloner le repository git

Rendez-vous dans le projet et lancer la commande :

```
docker-compose up -d --build
```

Une fois les containers lancés, vous migrer la base de données avec cette commande :

```
docker-compose exec web php artisan migrate --seed
```

