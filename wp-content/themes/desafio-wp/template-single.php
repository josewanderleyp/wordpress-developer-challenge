<?php /* Template Name: Single */ get_header(); ?>
	<section class="single">
		<div class="tags">
			<span class="active">Filmes</span>
			<span>130m</span>
		</div>
		
		<h1>Anean Convallis tortor</h1>

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

		<p>Praesent et risus est. Nullam nec euismod arcu. Integer massa sem, iaculis sit amet ante et, fermentum sollicitudin est. Proin egestas felis arcu, eget egestas nisi accumsan non. Donec tincidunt et ipsum nec consectetur. Fusce dapibus, urna id cursus accumsan, lacus diam sagittis enim, in facilisis lorem purus in magna. Aenean sed augue commodo, auctor purus ac, varius purus. Etiam vel congue ligula, id porttitor dui. Aenean interdum mi ante, in volutpat quam laoreet quis. Donec aliquam convallis tempus.</p>
	</section>
<?php get_footer(); ?>
