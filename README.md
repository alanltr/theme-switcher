# theme-switcher

Mise en place d'un thème switcher avec MVC

# Minimum nécessaire en structure MVC 
-------------------------------------

### app

* Controllers
  * CoreController : uniquement la fonction shwo, qui va afficher et envoyer les données à la vue
  * ErrorController : nécessaire au fonctionnement de **Dispatcher**
  * MainController : 3 méthodes
    * home : affiche la page d'accueil
    * legal : affiche la page des mentions d'acceuil
    * themeSwitcher : genere ou supprime un cookie pour le theme
* Models : pas de model nécessaire
* views : uniquement les templates nécessaire a l'affichage de 2 pages, afin de pouvoir vérifier que la redirection est bonne à l'activation ou désactivation du thème)

### public

* assets
  * css : 2 feuilles de style, dans la configuration actuelle celle du thème héritera par défaut de la première
* .htaccess : nécessaire pour notre framework (définit BASE_URI)
* index.php : point d'entrée unqiue

### racine

* composer.json : nécessaire pour nos frameworks (importe le fichier vendor)

