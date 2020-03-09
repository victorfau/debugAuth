# AREP-CMS

## Configuration

Pour configurer le projet, il faut se dupliquer le fichier ```.env.dist``` en ```.env``` et modifier
 ce nouveau fichier avec les valeurs souhaitées.

Pour le moment, la seul ligne à modifier est la ligne ```DATABASE_URL```

Voilà la suite de commande à réaliser pour lancer le projet

```bash
git clone https://gitlab.com/arepexigences/arep-cms.git
cd arep-cms
composer install
```
## Les différents rôles

Les différents rôles sont les suivants :

| Rôle | Information |
| ---- | ----------- |
|ROLE_USER| Peut accéder à l'application et peut modifier le contenu le concernant |
|ROLE_ADMIN| Peut accéder à l'application et peut modifier en profindeur le cotenu de l'application |
|ROLE_DEV|Permet de pouvoir accéder à toute l'application sans distinction de droit.|

## Gestions des notifications

### Dans l'interface
Pour afficher les erreurs dans l'interface, il faut ajouter les messages dans le flash intégré dans Symfony avec la ligne : 
```php
$this->addFlash('error', 'message');
```
Et pour les messages de succes, il faut les ajouter de cette manière

```php
$this->addFlash('success', 'message');
```

Dans les templates, pour afficher les notifications, il faut importer les modules concernés, puis placer les macros dans la vue : 

```twig
{% from "Layout/Errors.html.twig" import Errors, Success %}

{{ Errors() }}
{{ Success() }}
```