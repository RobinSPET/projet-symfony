## Projet Symfony - Site d'E-Commerce

## Installer le projet
avoir symfony d'installé, php 8, composer et npm

prévoir un logiciel de serveur en local pour pouvoir lancer le projet

lancer les commandes suivantes :

```npm i``` et ```composer i```

compiler tailwindcss avec :
```npx tailwindcss -o ./src/output.css --watch```

j'utilise personnellement le serveur de base de symfony (lancé avec ```symfony server:start```)
si vous avez un serveur tel que wamp ou mamp, mettre les fichiers dans le dossier www et faire pointer le virtual host sur "/public"

## Tâches réalisées
- création des entités avec les relations 1to1, *to1, 1to* et *to*
- création des fixtures (3 au moins)
- authentification des utilisateurs avec security bundle
- enregistrement des nouveaux utilisateurs dans la bdd via un formulaire
- affichage des produits
- affichage des produits dans le panier de l'utilisateur
- controlleurs + templates
- hash des mots de passes
- mise en place d'un système de traductions
- panneau de modification de l'utilisateur connecté
- redirection de l'utilisateur sur la page de login pour certaines pages

## lien Youtube de la vidéo
Pour regarder la vidéo de présentation, merci d'utiliser le lien suivant :
https://youtu.be/dtmuIUavlyA