<?php /* Template Name: Single */ get_header(); 
	// $imagem_de_capa = get_field("imagem_de_capa", $video -> ID);
	// $tempo_de_duracao = get_field("tempo_de_duracao", $video -> ID);
	// $sinopse = get_field("sinopse", $video -> ID);

	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), 'medium'); 
	$values = get_post_custom( get_the_ID() );
    $time = isset( $values['my_meta_box_time'] ) ? esc_attr( $values['my_meta_box_time'][0] ) : '';
    $sinopse = isset( $values['my_meta_box_sinopse'] ) ? esc_attr( $values['my_meta_box_sinopse'][0] ) : '';
    $video = isset( $values['my_meta_box_video'] ) ? esc_attr( $values['my_meta_box_video'][0] ) : '';

	$category = get_the_terms(get_the_ID(), 'category-videos');
	$categoria = $category[0]->name;
?>

	<section class="single">
		<div class="tags">
			<span class="active"><?=$categoria?></span>
			<span><?=$time?></span>
		</div>
		
		<h1><?php the_title(); ?></h1>

		<div class="video">
			<div class="iframe">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/<?=$video?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				<div class="frame">
					<img src="<?=get_template_directory_uri()?>/img/banner.jpg" alt="">
					
					<a href="" class="play">
						<img src="<?=get_template_directory_uri()?>/img/play-light.svg" alt="">
					</a>
				</div>
			</div>
		</div>

		<p><?=$sinopse?></p>
	</section>
<?php get_footer(); ?>
