# Restant à faire

## Général
- Finir les parties suivi elevage et vétos <br>
- Notation complète (avec les autres critères et page détail)<br>
- Finir la partie administrateur (fiches et commentaires)<br>
- Faire section modification des données perso<br>
- Uniformiser image de fond sur toutes les pages du site<br>
- Améliorations esthétiques recherche de fiches, page contact et profil<br>

## Relatif à l'inscription/page d'accueil
- Corriger tous les bugs de validation des champs à l'inscription
- Mdp oublié + confirmation d’inscription par mail
- Configurer serveur SMTP pour pouvoir soumettre les formulaires de contact (page d'accueil et page contact) // smtprelais.envt.fr, port 25
- Ajouter un message d'erreur en cas d'echec de connexion
- Checker si l’image de profil s’upload bien sur l’api à l’inscription sur le site (requête http PUT dans controllers/utilisateurs.php)
- L'administrateur doit valider l'inscription des utilisateurs

# Installation

## Serveur web, Mysql

Pour le développement en local, tiliser de préférence MAMP, XAMP, WAMP ou autre solution 'tout-en-un'. <br>

Cloner le project directement dans le dossier racine du serveur (c:\wamp\www sur WAMP et applications/MAMP/htdocs sur MAMP généralement).<br>

Pour reconsituer la bd en local, exportez la depuis l'envt sur phpmyadmin.<br>

## Config

Changer la valeur de base_url dans application/config/config.php en *http://localhost/oporctunite* <br>
Changez le username et pwd votre base de donnée dans application/config/database.php <br>

# ReCaptcha

Produit de Google permettant d’éviter le spam et toutes sortes d’abus à la soumission d’un formulaire. Il permet aussi d’analyser le traffic.<br>
Sur Oporctunite, il est utilisé pour éviter le spam de création de comptes à l’inscription.<br><br>

> Se connecter à Google en utilisant l'adresse email enregistrée dans le service (demander à Ilya pour ajouter une adresse : ilja.stepanov@envt.fr)
> Pour configurer, taper « recaptcha admin » dans google et aller sur le 1er résultat de la recherche.<br>
> Aller ensuite sur le rouage « paramètres » en haut à droite.<br>
> Ici il est possible d’ajouter des propriétaires, des noms de domaines à protéger et surtout avoir accès aux clés qui permettent au recaptcha de fonctionner. On retrouve également la doc qui explique comment implémenter le captcha coté serveur et client.
