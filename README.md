# Jeu de Lotterie en Ligne

Ce projet est un jeu de lotterie en ligne développé avec Laravel 9. Il permet aux utilisateurs de participer à un jeu concours en soumettant leur adresse e-mail pour avoir une chance de gagner différents lots.

## Fonctionnalités

- Formulaire de participation : Les utilisateurs peuvent remplir un formulaire en indiquant leur adresse e-mail pour participer au jeu.
- Validation de l'e-mail : L'application vérifie que l'adresse e-mail est valide avant d'enregistrer la participation.
- Vérification de l'unicité de l'e-mail : L'application vérifie si l'adresse e-mail a déjà été utilisée pour une participation précédente.
- Attribution des lots : Chaque participation enregistrée se voit attribuer un lot en fonction des probabilités définies.
- Affichage des messages d'erreur : L'application affiche des messages d'erreur appropriés si l'adresse e-mail est invalide ou déjà utilisée.

## Installation

1. Clonez ce dépôt sur votre machine locale `git clone git@github.com:B45T13N/Lottery.git`.
2. Assurez-vous que vous avez les prérequis installés (PHP, Composer, etc.).
3. Configurez votre environnement en créant un fichier `.env` et en configurant la base de données.
4. Installez les dépendances en exécutant la commande `composer install`.
5. Exécutez les migrations pour créer la table de participations en exécutant la commande `php artisan migrate`.
6. Lancez le serveur de développement en exécutant la commande `php artisan serve`.

## Tests

Ce projet comprend des tests unitaires pour vérifier les fonctionnalités du jeu et les probabilités des lots. Pour exécuter les tests, utilisez la commande `php artisan test`.

## Contribution

Les contributions à ce projet sont les bienvenues ! Si vous souhaitez contribuer, veuillez suivre les étapes suivantes :

1. Fork ce dépôt et clonez-le sur votre machine locale.
2. Créez une branche pour votre fonctionnalité ou correction.
3. Effectuez vos modifications et testez-les.
4. Soumettez une pull request en expliquant en détail les modifications apportées.

## Auteur

- Bastien DA SILVA

N'hésitez pas à me contacter si vous avez des questions ou des suggestions pour améliorer ce projet !
