# MyAgenda - Application de Gestion de Contacts

## Description

**MyAgenda** est une application développée avec Symfony qui permet de gérer une liste de contacts. L'application offre une gestion complète des contacts, avec une fonctionnalité d'authentification pour chaque utilisateur, garantissant ainsi un accès personnalisé et sécurisé.

## Fonctionnalités

- Inscription et connexion des utilisateurs
- Ajout, modification et suppression de contacts
- Visualisation de la liste de contacts

## Installation

Suivez les étapes ci-dessous pour installer et configurer l'application :

1. Clonez le projet :
   git clone <url_du_projet>
Installez les dépendances via Composer :


composer install
Configurez votre base de données en modifiant le fichier .env :

Modifiez la variable DATABASE_URL pour correspondre à vos informations de connexion.
Créez la base de données :



php bin/console doctrine:database:create
Appliquez les migrations pour créer les tables nécessaires :

php bin/console doctrine:migrations:migrate

Technologies
Symfony 6 : Framework PHP pour le développement rapide d'applications web
MySQL : Base de données relationnelle
Bootstrap : Framework CSS pour une interface utilisateur responsive

Auteur
Luca Delarue

### Améliorations :
1. **Structure** : J'ai ajouté des sections claires pour rendre le fichier plus lisible et mieux organisé.
2. **Détails d'installation** : La procédure d'installation est plus détaillée, y compris la configuration de la base de données et l'ajout d'étapes spécifiques comme l'installation des dépendances.
3. **Lisibilité** : J'ai apporté des ajustements pour rendre les instructions plus claires et le texte plus fluide.
