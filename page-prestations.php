<?php get_header(); ?>

<style>
    
    @media(min-width:768px) {
    
        .prestation-image > div {
            background-image: url('https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg');
            background-size: cover;
            background-position: center;
            display: table;
            width: 100%;
        }
        
        .prestation-image a {
            height: 12em;
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            line-height: 1;
            word-break: break-word;
        }
        
        .prestation-image a:hover {
            text-decoration: none;
        }
        
        .prestation-image a > div {
            color: white;
            font-family: 'Alegreya Sans SC', sans-serif;
            font-size: 1.8em;
            background-color: rgba(0, 0, 0, .8);
            padding: .5em;
        }
    
        .prestations {
            background-size: cover;
            background-position: center;
        }
        
        .prestations h2 {
            background-color: #222;
            color: white;
            display: inline-block;
            padding: .5em 1em;
            border: .05em solid #eee;
        }
        
        .prestations h2::after {
            display: none;
        }
        
        .prestation-droite {
            text-align: right;
        }
        
        #prestations-telecommunications {
            background-image: url('https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg');
        }
    
        #prestations-mathematiques-mecanique {
            background-image: url('https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg');
        }
    
        #prestations-informatique {
            background-image: url('https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg');
        }
    
        #prestations-electronique {
            background-image: url('https://madebysidecar.com/assets/products/thumbs/developer-photo-bundle-4.jpg');
        }
        
        .prestation-detail {
            background-color: white;
            border: .1em solid #eee;
        }

    }
    
</style>

<?php while ( have_posts() ) : the_post(); ?>
    <div class="banner banner-red">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><?php the_title(); ?></h1>                
                </div>
            </div>
        </div>
    </div>
    <div class="banner banner-grey">
        <div class="container">
            <div class="row">
                <?php
                $the_query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => get_the_ID() ) );
                if ($the_query->have_posts()):
                    ?>
                    <?php
                    while ($the_query->have_posts()):
                        $the_query->the_post();
                        ?>
                        <div class="col-sm-3 prestation-image">
                            <div>
                                <a href="#prestations-<?php echo get_post_field('post_name', get_post()); ?>">
                                    <div><?php the_title(); ?></div>
                                </a>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();    
                endif;
                ?>
            </div>
        </div>
    </div>

    <?php
    $the_query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => get_the_ID() ) );
    if ($the_query->have_posts()):
        ?>
        <?php
        for ($i = 1; $the_query->have_posts(); $i++):
            $the_query->the_post();
            ?>
            <div class="banner">
            <div class="container">
                <div class="row prestations" id="prestations-<?php echo get_post_field('post_name', get_post()); ?>">
                    <?php
                    if ($i%2):
                        ?>
                        <div class="col-sm-8">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="col-sm-4 prestation-detail">
                            <div><?php the_content(); ?></div>
                        </div>
                        <?php
                    else:
                        ?>    
                        <div class="col-sm-8 prestation-droite col-sm-push-4">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="col-sm-4 prestation-detail col-sm-pull-8">
                            <div><?php the_content(); ?></div>
                        </div>
                        <?php
                    endif;
                    ?>
                </div>
            </div>
            </div>
        <?php
        endfor;
        wp_reset_postdata();    
    endif;
    ?>
    
<?php endwhile; ?>

<?php get_footer(); ?>