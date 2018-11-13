<section id="blogPost">
    <?php
    $category_slug = 'blog';
    $args = array(
    'numberposts' => 5,
    'category_name' => $category_slug,
    'orderby' => 'date',
    );
    $products = get_posts($args);
    foreach ($products as $product) {
        $image = get_the_post_thumbnail_url($product);
        $permalink = get_permalink($product);
        $time = get_post_time('Y-m-d', true, $product, false);
        $category_id = get_category_by_slug( $category_slug )->term_id;
        $category_url = get_category_link($category_id);
        $postMeta = get_post_meta($product->ID, 'description', true);
        $category_name = get_category_by_slug( $category_slug)->name;
        $excerpt = wp_trim_words( get_the_excerpt($product), 40, '...');
    ?>
    <div class="og-box">
        <a href="<?php echo $permalink ?>">
            <div class="media">
                <img class="media-img m-r-10" src="<?php echo $image ?>" alt="" srcset="">
                <div class="media-body">
                    <h5 class="title"><?php echo $product->post_title ?></h5>
                    <p class="meta"><?php echo $excerpt; ?></p>
                </div>
            </div>
        </a>
    </div>
    <?php }?>
    <!-- end repeat -->
</section>

