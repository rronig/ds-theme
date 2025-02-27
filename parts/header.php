<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DS Theme</title>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main_menu')) ?>
        </nav>
    </header>