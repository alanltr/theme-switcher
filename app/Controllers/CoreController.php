<?php

namespace App\Controllers;

abstract class CoreController
{

    /**
     * Méthode permettant d'afficher du code HTML en se basant sur les views
     *
     * @param string $viewName Nom du fichier de vue
     * @param array $viewVars Tableau des données à transmettre aux vues
     * @return void
     */
    protected function show(string $viewName, $viewVars = [])
    {
        global $router;
    
        $viewVars['currentPage'] = $viewName; // definir la page courante
        
        $viewVars['assetsBaseUri'] = $_SERVER['BASE_URI'] . '/assets/'; // définir l'url absolue pour nos assets
        
        $viewVars['baseUri'] = $_SERVER['BASE_URI']; // définir l'url absolue pour la racine du site

        extract($viewVars);

        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';
    }
}
