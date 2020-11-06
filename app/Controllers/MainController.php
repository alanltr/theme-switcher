<?php

namespace App\Controllers;

class MainController extends CoreController
{

    /**
     * Méthode s'occupant de l'affichage de la page d'accueil
     *
     * @return void
     */
    public function home()
    {
        $this->show('main/home');
    }

    /**
     * Méthode s'occupant de l'affichage de la page des mentions légales
     *
     * @return void
     */
    public function legal()
    {
        $this->show('mentions/legal');
    }

    /**
     * Méthode s'occupant de SET et UNSET un cookie pour le theme-switcher'
     *
     * @return void
     */
    public function themeSwitcher()
    {
        global $router;

        if (empty($_COOKIE['theme'])) {
            // Si le cookie est non présent, on le crée
            setcookie('theme', 'dark');
        } else {
            // Sinon on le supprime
            // par exemple en lui donnant une date inférieure à la date courante
            setcookie('theme', 'dark', time() - 3600);
        }

        // On redirige vers le dossier en cours (la ou User a cliquer sur theme-switcher)
        header("Location: " . $_SERVER['HTTP_REFERER']);
    }
}
