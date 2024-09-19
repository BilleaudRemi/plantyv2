<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div id="logo">
            <?php if(has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
            <?php endif; ?>
        </div>

        <nav>
            <?php wp_nav_menu( array( 
                'theme_location' => 'header-menu',
                'link_before' => '<span itemprop="name">', 
                'link_after' => '</span>' ) ); ?>
        </nav>
    </header>
    <main>