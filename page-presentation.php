<?php get_header(); ?>

<style>
    
    h2 {
        text-align: center;
    }
    
    .grid-overlay {
        background-size: 2px 2px;
        background-image: linear-gradient(transparent 60%, black), linear-gradient(90deg, transparent 60%, black);
    }
    
    .jumbotron-bg {
        background-image: url(https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg);
        background-size: cover;
    }
    
    .jumbotron {
        color: white;
        background: none;
        margin-bottom: 0;
    }
    
    .jumbotron h1 {
        text-align: left;
        margin: .5em 0 .2em;
    }
    
    @media (min-width: 768px) {
        .chiffres {
            perspective-origin: center;
            perspective: 3000px;
        }
    
        :nth-child(2) > .chiffre {
            transform-origin: right;
            transform: rotateY(30deg);
        }
        
        :nth-child(4) > .chiffre {
            transform-origin: left;
            transform: rotateY(-30deg);
        }
    }
    
    .chiffre {
        background-color: #c31b21;
        font-family: 'Alegreya Sans SC', sans-serif;
        word-spacing: .1em;
        font-size: 150%;
        margin: auto;
        padding: 1em .2em;
        margin-bottom: 1em;
        border: .1em solid white;
        max-width: 12em;
    }
    
    .chiffre:first-line {
        font-size: 200%;
    }
    
    .prestations {
        color: #c31b21;
        font-size: 130%;
        text-shadow: 0 0 .2em black, 0 0 .2em black, 0 0 .2em black, 0 0 .2em black, 0 0 .2em black;
    }
    
</style>

<?php the_post(); ?>

<div class="jumbotron-bg">
    <div class="grid-overlay">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1><?php the_field('slogan'); ?></h1>
                    </div>
                    <div class="col-md-6">
                        <p><?php the_field('accroche'); ?></p>
                        <p><a class="btn btn-primary btn-lg" href="#" role="button">Demandez un devis</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('accroche_etudes'); ?></h2>
            </div>
            <?php 
            $post_objects = get_field('etudes');
            if ($post_objects):
                foreach ($post_objects as $post):
                    setup_postdata($post);
                    ?>
                    <div class="col-md-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo get_field('image')['sizes']['presentation']; ?>">
                            <div class="caption">
                                <div><?php the_title(); ?></div>
                                <div><small><?php the_field('client'); ?></small></div>
                            </div>
                        </div>
                    </div>
                <?php 
                endforeach;
                wp_reset_postdata();
            endif; 
            ?>
        </div>
    </div>
</div>

<div class="banner banner-red chiffres">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('accroche_chiffres'); ?></h2>
            </div>
            <div class="col-sm-4 col-xs-6">
                <p class="chiffre"><?php the_field('chiffre_1'); ?></p>
            </div>
            <div class="col-sm-4 col-xs-6">
                <p class="chiffre"><?php the_field('chiffre_2'); ?></p>
            </div>
            <div class="col-sm-4 col-xs-12">
                <p class="chiffre"><?php the_field('chiffre_3'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2><?php the_field('accroche_prestations'); ?></h2>
            </div>
            <?php
            $post_objects = get_field('prestations');
            if ($post_objects):
                foreach ($post_objects as $post):
                    setup_postdata($post);
                    ?>
                    <div class="col-md-3 col-xs-6">
                        <div class="thumbnail">
                            <img src="<?php echo get_field('image')['sizes']['presentation']; ?>">
                            <div class="caption">
                                <div><?php the_title(); ?></div>
                                <div><?php the_field('resume'); ?></div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>



<?php get_footer(); ?>