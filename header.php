<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo("charset"); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="./final/css/styles.css">
<?php wp_head(); ?>
</head>
<header>
    <div class="navigation">
        <div class="navigation__menu">
            <div class="navigation__menu--brand">
                This is the one
            </div>
            <?php
                wp_nav_menu (
                    array(
                        'theme_location' => 'main_menu',
                        'menu_class' => 'menu'
                    )
                )
            ?>
        </div>
    </div>
</header>


<body>