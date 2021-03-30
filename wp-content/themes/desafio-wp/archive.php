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
						$imagem_de_capa = get_field("imagem_de_capa", $video -> ID);
						$tempo_de_duracao = get_field("tempo_de_duracao", $video -> ID);

						?>
							<article class="item">
								<a href="<?=get_the_permalink($video -> ID)?>"><img src="<?=$imagem_de_capa?>" alt="<?=$video -> post_title?>"></a>

								<div class="tags">
									<span><?=$tempo_de_duracao?></span>
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
