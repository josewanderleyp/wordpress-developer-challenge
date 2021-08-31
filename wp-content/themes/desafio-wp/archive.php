<?php /* Template Name: Categorias */ get_header(); $this_category = get_queried_object(); ?>
	<section class="category wrapper">
		<div class="col">
			<h1><?=$this_category -> name?></h1>
			
			<p><?=$this_category -> description?></p>
		</div>

		<div class="col">
			<?php
				$args = array(
					'post_type' => 'videos',
					'posts_per_page' => 12,
					'tax_query' => array(
						array(
							'taxonomy' => 'category-videos',
							'field' => 'term_id',
							'terms' => $this_category -> term_id
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
	
<?php get_footer(); ?>
