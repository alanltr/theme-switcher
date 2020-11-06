<h1>
    Theme Switcher - Accueil
</h1>




<?php if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') : ?>
    <p>
        Le nouveau paragraphe ici
    </p>
<?php elseif (!isset($_COOKIE['theme'])) : ?>
    <p>
        Ceci un paragraphe paramétré en fonction du theme
    </p>
<?php endif; ?>

<p>
    Ceci est un paragraphe fixe standard
</p>