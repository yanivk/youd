<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="logged">
        <?php 
            if ( is_user_logged_in() ):
                $current_user = wp_get_current_user(); 
            ?>
            <div class="user_informations">
                <img src="<?php echo esc_url( get_avatar_url( $current_user->ID ) ); ?>" />
                <p>
                    <?php echo $current_user->user_login; ?>
                </p>
            </div>
            <div class="logged">
                <p>
                    <a href="<?php echo wp_login_url(); ?>"> Déconnexion </a>
                </p>
            </div>
            <?php else: ?>
                <p>
                    <a href="<?php echo wp_login_url(); ?>"> Connexion </a>
                </p>
            <?php endif; ?>
        </div>
    <header class="header">
        <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/img/you'd-logo.png" alt="Logo">
        </a>
        <?php wp_nav_menu( 
                    array( 
                        'theme_location' => 'main', 
                        'container' => 'ul',
                        'menu_class' => 'site__header__menu', 
                    ) 
                ); 
        ?>
        <?php get_search_form(); ?>
    </header>
    