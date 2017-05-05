# Initiation Symfony2 (Ensi)

Démo d'initiation au développement avec Symfony 2.

## Prérequis
PHP >= 5.3,
Mysql Server >= 5.5

Il faut d'abord installer le composer pour pouvoir installer la démo
[https://getcomposer.org/](https://getcomposer.org/)

## Installation
Step1 : cloner le projet
```sh
$ git clone https://github.com/ats-digital/ensi.git
```
Step2 : Installer les dépendences
```sh
$ composer.phar install
```
```Mettre les identifiants correctes de votre serveur de base de données MySql```

Step3 : Setup database et installation les data fixtures
```sh
$ app/console doctrine:database:create
$ app/console doctrine:schema:create
$ app/console doctrine:fixture:load
```

## Lancer la démo
```sh
$ app/console server:start
```
Maintenant rendez-vous sur le lien [http://127.0.0.1:8000](http://127.0.0.1:8000)

## Doc (présentation & cours)
La présentation et le cours sont sous le dossier [doc](https://github.com/ats-digital/ensi/tree/master/doc)
- [Présentation](https://github.com/ats-digital/ensi/blob/master/doc/ATS%20-%20ENIT%20-%20Initiation%20au%20d%C3%A9veloppement%20avec%20Symfony%202.pdf)
- [Cours](https://github.com/ats-digital/ensi/blob/master/doc/ATS%20-%20ENSI%20Cours%20Initiation%20au%20d%C3%A9veloppement%20avec%20Symfony%202.docx)

## Contact
Pour toutes vos questions n'hésitez pas à contacter Wajih WERIEMI sur son adresse email `wweriemi@ats-digital.com`

### Enjoy!