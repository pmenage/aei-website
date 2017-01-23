<!DOCTYPE html>
<html <?php language_attributes(); ?> >
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#aei-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-left" href="<?php bloginfo('url'); ?>"><img src="<?php header_image(); ?>" alt="<?php bloginfo('name'); ?>"></a>
                </div>
                
                <div class="collapse navbar-collapse" id="aei-navbar-collapse">
                    <ul class="nav navbar-nav">
                        <?php wp_nav_menu([
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'items_wrap' => '%3$s'
                        ]); ?>
                        <li>
                            <p class="navbar-btn">
                                <a class="btn btn-primary" style="margin: 0 1em" href="#">Demandez un devis</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
                
        </nav>