<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<header>
			<div class="wrapper">
				<div class="logo">
					<a href="<?=get_site_url()?>">
						<img src="<?=get_template_directory_uri()?>/img/logo.svg" alt="">
					</a>
				</div>

				<nav>
					<ul>
						<li>
							<a href="<?=get_site_url()?>/category-videos/filmes/">
								<img src="<?=get_template_directory_uri()?>/img/video.svg" alt="">

								Filmes
							</a>
						</li>
						<li>
							<a href="<?=get_site_url()?>/category-videos/documentarios/">
								<img src="<?=get_template_directory_uri()?>/img/documentario.svg" alt="">

								Documentários
							</a>
						</li>
						<li>
							<a href="<?=get_site_url()?>/category-videos/series/">
								<img src="<?=get_template_directory_uri()?>/img/serie.svg" alt="">

								Séries
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>