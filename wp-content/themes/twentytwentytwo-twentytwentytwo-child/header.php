<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div id="logo">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
        </div>

        <nav>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'link_before' => '<span itemprop="name">',
                'link_after' => '</span>',
            ));
            ?>
        </nav>

        <!-- Barre de recherche -->
        <div class="search-form">
            <?php get_search_form(); ?>
        </div>
    </header>

    <main>
        <!-- Votre contenu principal ici -->
    </main>

    <?php wp_footer(); ?>
</body>
</html>
