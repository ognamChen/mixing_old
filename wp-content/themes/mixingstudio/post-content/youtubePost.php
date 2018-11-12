<section id="youtubePost">
	<div class="row">
		<div class="col-md-8">
			<div class="og-video">
				<iframe id="video-player" src="https://www.youtube.com/embed/" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="col-md-4">
			<div class="og-video-list">
				<ul>
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
						echo "<li class='video-list' data-video='{$youtubeVideoId}'>{$videoTitle}</li>";
					}
					?>
				</ul>
			</div>
		</div>
	</div>
</section>