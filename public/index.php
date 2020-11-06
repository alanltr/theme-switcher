<?php

require_once '../vendor/autoload.php';


// -- ROUTAGE --

$router = new AltoRouter();


// Condition SI il y a un sous-répertoire afin de lui renseigner le chemin d'acces de base setBasePath() (Mais on pourrait travailler sans sous-répertoire)
if (array_key_exists('BASE_URI', $_SERVER)) {
    // Alors on définit le basePath d'AltoRouter
    $router->setBasePath($_SERVER['BASE_URI']);
    // ainsi, nos routes correspondront à l'URL, après la suite de sous-répertoire
} else {

    $_SERVER['BASE_URI'] = '/'; // Sinon on donne une valeur par défaut à $_SERVER['BASE_URI'] car c'est utilisé dans le CoreController
}
// $baseURI = $_SERVER['BASE_URI'] ?? '/'; // Version courte de la condition



// ---- MAP ----

// Page d'accueil 
$router->map( 'GET', '/', '\App\Controllers\MainController::home',  'main-home' );

// Page mentions légales
$router->map( 'GET', '/mentions-legales', '\App\Controllers\MainController::legal', 'main-legal');

// Page theme switcher
$router->map( 'GET', '/theme-switcher',  '\App\Controllers\MainController::themeSwitcher', 'theme-switcher');



// -- DISPATCH --

// On demande à AltoRouter de trouver une route qui correspond à l'URL courante
$match = $router->match();

// On configure le dispatcher (c'est lui qui fait le lien avec le Controller), 1er argument : la variable $match retournée par AltoRouter / 2e argument : le "target" de la 404
$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

// Une fois le "dispatcher" configuré, on lance le dispatch qui va exécuter la méthode du controller
$dispatcher->dispatch();
