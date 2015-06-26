<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
	<div id="top" class="row">
    <div class="column large-12 medium-12 small-12">
        <header class="cf">
            <div class="logo column large-5 medium-5 small-12">
                <?php if( !get_theme_mod( 'hide_text_logo' ) == 1 ) : ?>
                    <a href="<?php echo esc_url( home_url() ) ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'logo-upload' ) ) : ?>
                    <a href="<?php echo esc_url( home_url() ) ?>" title="<?php bloginfo('name') ?>">
                        <img src='<?php echo esc_url( get_theme_mod( 'logo-upload' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                    </a>
                <?php endif; ?>
            </div>

            <?php

            $args = array(
                'theme_location'  => 'primary',
                'container'       => false,
                'items_wrap'      => '<ul id="%1$s" class="%2$s column large-7 medium-7 small-12">%3$s</ul>'
            );

            wp_nav_menu( $args );

            ?>
        </header>
    </div>
</div>