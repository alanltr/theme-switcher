<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Theme Switcher</title>

    <link rel="stylesheet" href="<?= $viewVars['assetsBaseUri'] ?>css/style.css">

    <?php if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') : ?>
    <link rel="stylesheet" href="<?= $viewVars['assetsBaseUri'] ?>css/dark-style.css">
    <?php endif; ?>
    
</head>

<body>
    <header>
        <nav>

            <a href="<?= $router->generate('main-home') ?>">Acceuil</a>

            <br>

            <a href="<?= $router->generate('main-legal') ?>">Mentions légales</a>

            <br>

            <a href="<?= $router->generate('theme-switcher') ?>">Switch Theme</a>

        </nav>
    </header>
    <?php dump($viewVars, $_SERVER) ?>