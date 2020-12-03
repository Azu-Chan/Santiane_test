Santiane_test
#############

1/ Prérequis : 

- Wampserver 3.2.3
- PHP 7.4
- Apache 2.4
- MySQL 8
- Composer

2/ Procédure : 

- Cloner le repo git dans le dossier www de votre serveur web ou créer un alias
- installer les dépendances (composer install)
- copier le fichier .env.example en .env
- générer une app key (php artisan key:generate)
- créer une bdd (santiane_test nom par défaut dans le fichier .env)
- créer les tables (php artisan migrate)
- peupler la bdd (php artisan db:seed)

- pour lancer les tests (php vendor/phpunit/phpunit/phpunit)

3/ Notes

- Beaucoup de choses peuvent être améliorées telles que les différents tests, la vérification des champs, la précision du modèle, ...

4/ Sujet

https://raw.githubusercontent.com/Azu-Chan/Santiane_test/master/TestPHP.pdf
