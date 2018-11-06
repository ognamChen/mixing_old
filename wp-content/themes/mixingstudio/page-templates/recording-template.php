<?php
/*
Template Name: 錄音製作
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 og-border-1">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="og-post">
                        <img src="<?php the_post_thumbnail_url()?>" class="img-fluid" alt="Responsive image">
                        <p style="color:red;"><?php echo get_the_post_thumbnail_caption() ?></p>
                        <div class="title m-b-30">
                            <h1><?php the_title();?></h1>
                        </div>
                        <div class="meta">
                            <p><?php the_content(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div> <!-- row end -->
    </div> <!-- container end -->
</main>
<?php get_footer();