<?php get_header(); ?>
	<div id="banner">
		<!-- <picture>
			<source media="(min-width: 768px)" srcset="/img/medium-size.png"> -->
			<img src="<?=get_template_directory_uri()?>/img/banner.jpg" alt="">
		<!-- </picture> -->

		<div class="align">
			<div class="tags">
				<span class="active">Filmes</span>
				<span>130m</span>
			</div>

			<h2>Pallentesque habitant morbi</h2>

			<a href="<?=get_site_url()?>/category-videos/filmes/">Mais informações</a>
		</div>
	</div>

	<?php
		$terms = get_terms([
			'taxonomy' => 'category-videos',
			'hide_empty' => false,
		]);

		if( sizeof($terms) ){
			foreach ($terms as $key => $value) {
				?>
					<section>
						<h1><a href="<?=get_term_link($value -> term_id, 'category-videos')?>"><?=$value -> name?></a></h1>

						<div class="row owl-carousel">
							<?php
								$args = array(
									'post_type' => 'videos',
									'posts_per_page' => 12,
									'tax_query' => array(
										array(
											'taxonomy' => 'category-videos',
											'field' => 'term_id',
											'terms' => $value -> term_id
										)
									)
								);

								$loop = new WP_Query($args);

								$x = 0;

								if( sizeof( $loop -> posts ) ){
									foreach ($loop -> posts as $key => $video) {
									    $values = get_post_custom( $video->ID );
										$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($video->ID), 'medium'); 

										$time = isset( $values['my_meta_box_time'] ) ? esc_attr( $values['my_meta_box_time'][0] ) : '';

										?>
											<article class="item">
												<a href="<?=get_the_permalink($video -> ID)?>"><img src="<?=$thumb[0]?>" alt="<?=$video -> post_title?>"></a>

												<div class="tags">
													<span><?=$time?></span>
												</div>

												<h2><a href="<?=get_the_permalink($video -> ID)?>"><?=$video -> post_title?></a></h2>
											</article>
										<?php
									}
								}
							?>
						</div>
					</section>
				<?php
			}
		}
	?>
<?php get_footer(); ?>
