<?php get_header(); ?>

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
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-push-1">
                    <div><?php the_content(); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php get_footer(); ?>