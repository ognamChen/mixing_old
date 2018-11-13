<section id="youtubePost">
	<div class="row">
		<div class="col-lg-8">
			<div class="og-video">
				<iframe class="video-player" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="og-video-list">
				<ul class="wpp-list list-unstyled">
				<?php
				$category_slug = 'youtube';
				$args = array(
					'numberposts' => -1,
					'category_name' => $category_slug,
					'orderby' => 'date',
				);
				$products = get_posts($args);
				foreach ($products as $product) {
					$videoTitle = $product->post_title;
					$youtubeVideoId = get_post_meta($product->ID, "youtube_video_id", true);
					?>
						
					<li class='media video-list' data-video='<?php echo $youtubeVideoId; ?>'>
						<img class="video-thumb m-r-5" src="https://img.youtube.com/vi/<?php echo $youtubeVideoId; ?>/default.jpg" alt="">
						<div class="media-body">
							<span><?php echo $videoTitle; ?></span>
						</div>
					</li>
					<?php }?>
				</ul>
			</div>
		</div>
	</div>
</section>