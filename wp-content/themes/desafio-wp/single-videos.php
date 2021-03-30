<?php /* Template Name: Single */ get_header(); 
	$imagem_de_capa = get_field("imagem_de_capa", $video -> ID);
	$tempo_de_duracao = get_field("tempo_de_duracao", $video -> ID);
	$sinopse = get_field("sinopse", $video -> ID);

	$category = get_the_terms(get_the_ID(), 'category-videos');
	$categoria = $category[0]->name;
?>

	<section class="single">
		<div class="tags">
			<span class="active"><?=$categoria?></span>
			<span><?=$tempo_de_duracao?></span>
		</div>
		
		<h1><?php the_title(); ?></h1>

		<div class="video">
			<div class="iframe">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/89XPBelvrZk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

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
