<?php

namespace App\Controllers;

// Classe gérant les erreurs (404, 403)
class ErrorController extends CoreController {
    /**
     * Méthode gérant l'affichage de la page 404
     *
     * @return void
     */
    public function err404() {
        // On envoie le header 404
        header('HTTP/1.0 404 Not Found');

        // Puis on gère l'affichage
        $this->show('error/err404');
    }

    public static function err403()
    {
        // On définit le code d'erreur HTTP à 403 (=Forbidden)
        http_response_code(403);

        // On affiche un petit message
        echo "403 Forbidden - Vous n'avez pas accès à cette page";
        // TODO amélio : Avoir une page d'erreur 403 personnalisé, avec navigation etc

        // On stoppe l'exécution du script
        exit;
    }
}