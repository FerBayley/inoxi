<?php get_header(); ?>

		<section class="Slide">
			<?php query_posts('category_name=slide'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
				<?php the_content(); ?>
			<?php endwhile; else: ?>				
			<?php endif; ?>
		</section> <!-- / Slider -->

		<div class="Cuarenta">
			<div class="Container">
				<div class="col145">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/45.png" alt="45 años">
			</div> <!-- /col145 -->

				<div class="col245">
					<h2>PRECISIÓN GASTRONÓMICA</h2>
						<article>
							<p>
								Brindamos un servicio de asesoramiento para que usted pueda comprar el equipamiento adecuado a la necesidad del proyecto, entendiendo como se usa el producto debido a nuestra experiencia en la utilización y aplicación de los mismos.
							</p>
						</article>
				</div> <!-- /col245 -->
			</div> <!-- / Container -->
		</div> <!-- / Cuarenta -->
		
		<!-- FIRMA -->
		<div class="Firma">
			<div class="Container">
				<div class="FirmaCol1"></div> <!-- / FirmaCol1 -->
				<div class="FirmaCol2">	
					<article>
						<p>
							Los años de formación como cocinero me han dado la oportunidad de vivir las cocinas por dentro y conocer sus diferentes necesidades.
							Sumado a la experiencia como chef ejecutivo y asesor comercial en Rational Argentina, estuve en contacto con la mejores tecnologías y equipamiento del mercado.
							Gracias a estos factores y la visión comercial, adquirí Inoxigas con el objetivo de refundarla. Hoy mi misión es hacer de INOXIGAS una empresa que sea sinónimo de tecnología, eficiencia, confianza, precisión y compromiso.  Una empresa que agregue valor a la industria nacional, posicionándose en los más altos estándares de calidad. 
						</p>
					</article>
				</div> <!-- / FirmaCol2 -->
				<div class="FirmaHernan">
					<img src="<?php echo get_template_directory_uri();?>/assets/images/firma.png" alt="Hernan Poleggio">
				</div> <!-- / FirmaHernan -->
			</div> <!-- / Container -->
		</div> <!-- / Firma -->
		<!-- / FIRMA -->

		
		<!-- CLIENTES -->
		<section class="Clientes">
			<div class="Container">
				<h2>CLIENTES QUE CONFÍAN EN NOSOTROS</h2>

				<div class="Col1">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/bredas.jpg" alt="Bridas"images/uade-logo.png" alt="UADE">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/hilton.jpg" alt="Hilton">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/dashi.jpg" alt="Dashi">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/lospetersen.jpg" alt="lospetersen">
						</li>
					</ul>
				</div> <!-- / Clol1 -->

				<div class="Col2">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/ellerstina.jpg" alt="La Ellerstina">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/roux.jpg" alt="Restaurant Roux">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/uade.jpg" alt="Uade">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/vasalissa.jpg" alt="Vasalissa">
						</li>
					</ul>
				</div> <!-- / Clol2 -->

				<div class="Col3">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/lajuvenil.jpg"" alt="La Juvenil">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/cimino.jpg" alt="Cimino">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/freddo.jpg" alt="Freddo">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/lacabrera.jpg" alt="La Cabrera">
						</li>
					</ul>
				</div> <!-- / Clol3 -->

				<div class="Col4">
					<ul>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/demuru.jpg" alt="Demuru">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/melimelo.jpg" alt="Meli Melo">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/donjulio.jpg" alt="Don Julio">
						</li>
						<li>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/logos/carrefour.jpg" alt="Ellerstina Polo">
						</li>
					</ul>
				</div> <!-- / Clol4 -->
			</div><!-- / Container -->
		</section> <!-- / Clientes -->


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