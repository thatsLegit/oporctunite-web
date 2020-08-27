## Installation

# Serveur web, Mysql

Pour le développement en local, tiliser de préférence MAMP, XAMP, WAMP ou autre solution 'tout-en-un'. <br>

Cloner le project directement dans le dossier racine du serveur (c:\wamp\www sur WAMP et applications/MAMP/htdocs sur MAMP généralement).<br>

Pour reconsituer la bd en local, exportez la depuis l'envt sur phpmyadmin.<br>

# Config

Changer la valeur de base_url dans application/config/config.php en *http://localhost/oporctunite* <br>
Changez le username et pwd votre base de donnée dans application/config/database.php <br>

# A faire

*Général*

- Finir les parties suivi elevage et vétos <br>
- Notation complète (avec les autres critères et page détail)<br>
- Finir la partie administrateur (fiches et commentaires)<br>
- Faire section modification des données perso<br>
- Uniformiser image de fond sur toutes les pages du site<br>
- Améliorations esthétiques recherche de fiches, page contact et profil<br>

*Relatif à l'inscription/page d'accueil*

- Corriger tous les bugs de validation des champs à l'inscription
- Mdp oublié + confirmation d’inscription par mail
- Configurer serveur SMTP pour pouvoir soumettre les formulaires de contact (page d'accueil et page contact) // smtprelais.envt.fr, port 25
- Ajouter un message d'erreur en cas d'echec de connexion
- Checker si l’image de profil s’upload bien sur l’api à l’inscription sur le site (requête http PUT dans controllers/utilisateurs.php)