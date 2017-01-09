<?php
/*
Template Name: clientes-proyectos
*/
?>

<?php get_header(); ?>


		<section class="Clientes-fondo"></section> <!-- / Clientes-fondo -->


		<section class="Clientes-proyectos">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/clientes-y-proyectos.jpg" alt="Inoxigas Clientes y pryectos">
		</section> <!-- / Clientes-proyectos -->


		<section class="Clientes-proyectos-caso3">
			<h4>PROYECTO #03</h4>
			<h2>FREDDO FOODTRUCK</h2>
			<article>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</p>
			</article>
		</section> <!-- / Clientes-proyectos-caso3 -->


		<section class="Resena">
			<div class="Resena1">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/planos.jpg" alt="Proyectos Inoxigas Food Truck de Freddo">
			</div> <!-- / Resena1 -->

			<div class="Resena2">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/mesa-acero.jpg" alt="Inoxigas aceros inoxidables">

				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>
			</div> <!-- / Resena2 -->
		</section> <!-- / Resena -->


		<section class="Detalles">
			<div class="Detalles1">
				<h2>DETALLE DEL PROYECTO</h2>
				<article>
					<p>
						TIEMPOS: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
					</p>
					<p>
						MATERIALES: Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
					</p>
				</article>
			</div> <!-- / Detalles1 -->

			<div class="Detalles2">
				<h2>CLIENTE: HELADERÍAS FREDDO</h2>
				<article>
					<p>
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>
			</div> <!-- / Detalles2 -->
		</section> <!-- / Detalles -->

		<section class="Imagenes-finales">
			<img src="<?php echo get_template_directory_uri();?>/assets/images/pie-proyectos.png" alt="Fotos desarrollo foodtruck">
		</section> <!-- / Imagenes-finales -->

		<!-- FORMULARIO -->
		<section class="Formulario">
			<div class="Container">
				<div class="Formulario-col1">
					<h2>Háganos llegar su consulta:</h2>
					<h3>o llamanos ahora <br>+54 11 4716-6682</h3>
				</div> <!-- / Formulario-col1 -->

				<div class="Formulario-col2">
					<?php query_posts('category_name=form'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
						<?php the_content(); ?>
					<?php endwhile; else: ?>				
					<?php endif; ?>
				</div> <!-- / Formulario-col2 -->
			</div> <!-- / Container -->
		</section> <!-- / Formulario -->
		<!-- / FORMULARIO -->

		<section class="Franja"></section> <!-- / Franja -->

<?php get_footer(); ?>