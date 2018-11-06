<?php
/*
Template Name: 首頁
 */
?>
<?php get_header();?>
<?php get_template_part('nav');?>
<main>
	<div class="background-logo" style="background-image:url(<?php the_post_thumbnail_url() ?>);">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 p-r-0 p-l-0">
					<?php get_template_part('post-content/currentPost');?>
				</div>
			</div>
		</div>
		<div class="container og-background-1">
			<div class="row justify-content-around">
			<?php 
				$args = array(
					'numberposts' => 4,
					'post_type' => 'page',
					'post_parent' => '2',
				);
				$products = get_posts($args);
				foreach ($products as $product) {
					$image = get_the_post_thumbnail_url($product);
					$permalink = get_permalink($product);
				?>
				<div class="col-md-3">
					<div class="og-box">
						<a href="<?php echo $permalink ?>">
							<img class="img-fluid" src="<?php echo $image ?>" alt="" srcset="">
							<div class="og-page">
								<p class="title"><?php echo $product->post_title ?></p>
							</div>
						</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div style="height:500px;">
		</div>
	</div>
</main>
<?php get_footer();