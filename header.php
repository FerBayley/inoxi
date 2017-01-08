<!DOCTYPE html>
<html lang="es-AR">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("name")?> | <?php bloginfo("description") ?> </title>
	<meta name="description" content="INOXIGAS, precisión gastronómica. Con más de 45 años dotando a la industria del mejor equipamiento y brindando asesoramiento especializado. Proyectos a medida y equipos de las mejores marcas internacionales; mesadas, exhibidoras, carros, parrillas, hornos, heladeras.">

	<!-- VIEWPORT -->
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
	<!-- / VIEWPORT -->

	<?php wp_head(); ?>

	<link rel="icon" type="image/png" href="assets/images/favicon.ico" />
	<meta name="google-site-verification" content="FrpFKxwcwEd8r4VfB0Ix3JXRya8alHFu4TFbfIYDVCQ" />
</head>
<body>

		<header>
		<div class="Container">
			<div class="Logo">
				<a href="<?php echo home_url()."/"; ?>">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Inoxigas">
				</a>
			</div> <!-- / Logo -->

			<nav>
				<?php 
					$opciones = array(
						'theme_location' => 'menu_cabecera',
						'container'      => false,
						'menu_class'  => ''
					);

					wp_nav_menu( $opciones );

					?>
			</nav>

			<div class="Redes">
				<ul>
					<li>
						<a href="https://www.facebook.com/poleme.cocinas/?fref=ts" target="_blanck">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/facebook.png" alt="Facebook Inoxigas">
						</a>
					</li>
					<li>
						<a href="https://twitter.com/inoxigas" target="_blanck">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/twitter.png" alt="Twitter Inoxigas">
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/inoxigasargentina/" target="_blanck">
							<img src="<?php echo get_template_directory_uri();?>/assets/images/instagram.png" alt="Instagram Inoxigas">
						</a>
					</li>
				</ul>
			</div> <!-- / Redes -->
		</header> <!-- / header -->