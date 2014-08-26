TP/CREATION D'UN CARNET D'ADRESSE (qui manipulera 3 type Entitées)
========================

sf2AddressBook
Carnet d'adresse sous symfony 2 (Cédric,Kévin,Morgane)


- Projet Symfony 2 de gestion d'un carnet d'adresse
- On peut manipuler 3 types d'entitées
    * des contacts
    * des sociétés
    * des groupes(ex:amis, collaborateurs...)

- un contact :
    * prenom
    * nom
    * email
    * telephone
    * ...(optionnel)

- une societe :
    * un nom
    * une adresse
    * un CP
    * une ville

- un groupe :
    * nom
    * description

Indication :
    Un contact ne peut aoir qu'une seule societe, mais plusieurs groupes.

1) Partie 1: Maquetter l'application
----------------------------------

Dessiner les écrans + html/css ou html/bootstrap

2) Partie 2 : Modéliser la BDD
-------------------------------------

- Créer un diagrame Entité/Association (si Merise = MCD )
- Créer le diagrame physique (WorkBench ou soit Merise avec MLD ou MPD)

3) Partie 3 : Développer l'application en répartissant les tâches
--------------------------------

- Créer le projet symfony2 une seule fois puis le déposer sur GitHub, les entités idem (pour éviter les conflits si 2 personnes créent les mêmes    fichiers
    - Créer un bundle
    - Créer un controler
    - Editer les routes
    - Générer les entités
    - Créer les types de formulaires
    - Remplir les controleurs et vues

[1]:  http://symfony.com/doc/2.4/book/installation.html
[2]:  http://getcomposer.org/
[3]:  http://symfony.com/download
[4]:  http://symfony.com/doc/2.4/quick_tour/the_big_picture.html
[5]:  http://symfony.com/doc/2.4/index.html
[6]:  http://symfony.com/doc/2.4/bundles/SensioFrameworkExtraBundle/index.html
[7]:  http://symfony.com/doc/2.4/book/doctrine.html
[8]:  http://symfony.com/doc/2.4/book/templating.html
[9]:  http://symfony.com/doc/2.4/book/security.html
[10]: http://symfony.com/doc/2.4/cookbook/email.html
[11]: http://symfony.com/doc/2.4/cookbook/logging/monolog.html
[12]: http://symfony.com/doc/2.4/cookbook/assetic/asset_management.html
[13]: http://symfony.com/doc/2.4/bundles/SensioGeneratorBundle/index.html
