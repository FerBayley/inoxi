<?php
/*
Template Name: servicios
*/
?>

<?php get_header(); ?>


		<section class="Servicios">
			<div class="Servicios1">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/servicios1.jpg" alt="Servicios Inoxigas">
				<h2>PROYECTOS A MEDIDA</h2>
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</article>
				<ul>
					<li>- Hoteles</li>
					<li>- Restaurantes & Comedores</li>
					<li>- Plantas de producción</li>
					<li>- Foodtrucks</li>
					<li>- Clínicas y Hospitales</li>
					<li>- Fast Food</li>
					<li>- Patios de comida</li>
					<li>- Supermercados</li>
					<li>- Cadenas gastrinómicas</li>
				</ul>
			</div> <!-- / Servicios1 -->

			<div class="Servicios2">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/servicios2.jpg" alt="Servicios Inoxigas">
				<h2>EQUIPAMIENTO</h2>
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
					</p>
				</article>

				<div class="Lista-servicios1">
					<ul>
						<li>- Mesadas</li>
						<li>- Exhibidoras</li>
						<li>- Carros</li>
						<li>- Freezers</li>
						<li>- Campanas</li>
						<li>- Muebles cocteleros</li>
						<li>- Estanterias</li>
						<li>- Hornos</li>
						<li>- Bachas</li>
					</ul>
				</div> <!-- / Lista-servicios1 -->

				<div class="Lista-servicios2">
					<ul>
						<li>- Calienta platos</li>
						<li>- Revestimientos</li>
						<li>- Cámaras</li>
						<li>- Parrillas</li>
						<li>- Heladeras</li>
						<li>- Cocinas</li>
						<li>- Freidoras	</li>
						<li>- Cuccipasta</li>
						<li>- Mostradores frio - caliente</li>
					</ul>
				</div> <!-- / Lista-servicios2 -->
			</div> <!-- / Servicios2 -->
		</section> <!-- / Servicios -->


		<section class="Separador"></section> <!-- / Separador -->


		<section class="Equipos">			
			<div class="Equipos1">
				<h2>EQUIPOS DE SERIE</h2>
					<article>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						</p>
					</article>

					<p>Circulos</p>
					<h3>
						Heladeras, Cocinas, Hornos, Lavavajilla, Batidoras, Máquinas de vacío, Roner, Procesadoras, y más.
					</h3>
			</div> <!-- / Equipos1 -->

			<div class="Equipos2">
				<h2>BAZAR GASTRONÓMICO</h2>
				<img src="<?php echo get_template_directory_uri();?>/assets/images/bartulos-servicios.jpg" alt="Bartulos Bazar">
				<article>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua:
					</p>
				</article>

				<a href="#">
					ir a la web de Bártulos
				</a>
			</div> <!-- / Equipos2 -->
		</section> <!-- / Equipos -->



		<section class="Modelo-trabajo">
			
			<h2>NUESTRO MODELO DE TRABAJO</h2>

			<ul>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/asesoramiento.jpg" alt="">
					<p>
						Asesoramiento en el Layout y en el equipamiento de las cocinas.
					</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/cotizacion.jpg" alt="">
					<p>
						Cotización de proyectos: Equipamiento a medida - Nuevos Desarrollos.Equipos de serie – (marcas).
					</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/produccion.jpg" alt="">
					<p>Producción y armado.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/equipamiento.jpg" alt="">
					<p>Equipamiento de servicio BARTULOS BAZAR.</p>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri();?>/assets/images/instalacion.jpg" alt="">
					<p>Instalación y puesta en marcha.</p>
				</li>
			</ul>			
		</section> <!-- / Modelo-trabajo -->


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