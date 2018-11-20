<section id="currentPost">
    <div class="owl-carousel owl-theme">
        <?php
        $args = array(
            'numberposts' => 5,
            'orderby' => 'date',
        );
        $products = get_posts($args);
        foreach ($products as $product) {
            $image = get_the_post_thumbnail_url($product);
            $permalink = get_permalink($product);
            $time = get_post_time('Y-m-d', true, $product, false);
            $postMeta = get_post_meta($product->ID, 'description', true);
            $excerpt = wp_trim_words( get_the_excerpt($product), 40, '...');
            ?>
            <div>
                <a href="<?php echo $permalink ?>">
                    <img class="img-fluid" src="<?php echo $image ?>">
                    <div class="og-body">
                        <h2 class=""><?php echo $product->post_title ?></h2>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</section>
