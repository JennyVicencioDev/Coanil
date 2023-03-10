<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coanil_2023
 */

?>

	<footer id="footer" class="site-footer">

		<div class="container">
			<div class="row py-5">
				<div class="footer-column logo col-lg-3">
					<a href="<?php echo get_home_url(); ?>/">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-coanil-white.svg" class="img-fluid" alt="logo Coanil">
					</a>
					<ul class="list-group list-group-horizontal justify-content-center justify-content-lg-end py-3">
						<li>
							<a href="#" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/img/i-fb.svg" class="img-fluid" alt="logo red social">
							</a>
						</li>
						<li>
							<a href="#" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/img/i-ig.svg" class="img-fluid" alt="logo red social">
							</a>
						</li>
						<li>
							<a href="#" target="_blank" rel="noopener noreferrer">
								<img src="<?php echo get_template_directory_uri(); ?>/img/i-yt.svg" class="img-fluid" alt="logo red social">
							</a>
						</li>
					</ul>
				</div>
				<div class="footer-column links col-lg-9">
					<div class="row">
						<div class="col-md-6 col-lg-3">
							<div class="footer-column-title">Conócenos</div>
							<ul>
								<li><a href="<?php echo get_home_url(); ?>/programas-sociales">Programas sociales</a></li>
								<li><a href="<?php echo get_home_url(); ?>/insercion-laboral">Inserción laboral</a></li>
								<li><a href="<?php echo get_home_url(); ?>/centros-educativos">Centros educativos</a></li>
								<li><a href="<?php echo get_home_url(); ?>/capacitaciones-otec">Capacitaciones OTEC</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer-column-title">Contacto</div>
							<ul>
								<li><a href="<?php echo get_home_url(); ?>/#">Consultas</a></li>
								<li><a href="<?php echo get_home_url(); ?>/trabaja-con-nosotros">Trabaja con nosotros</a></li>
								<li><a href="<?php echo get_home_url(); ?>/#">Portal trabajador</a></li>
								<li><a href="<?php echo get_home_url(); ?>/denuncias">Denuncias</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer-column-title">Colabora</div>
							<ul>
								<li><a href="<?php echo get_home_url(); ?>/donar">Dona</a></li>
								<li><a href="<?php echo get_home_url(); ?>/haste-socio">Hazte socio</a></li>
							</ul>
						</div>
						<div class="col-md-6 col-lg-3">
							<div class="footer-column-title">Nuestros vínculos</div>
							<ul>
								<li><a href="<?php echo get_home_url(); ?>/#">Coanil Educa</a></li>
								<li><a href="<?php echo get_home_url(); ?>/#">Coanil Servicios</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright py-4">
				<span>(c) Copyright <a href="mailto:comunicaciones@coanil.cl">comunicaciones@coanil.cl</a> | Derechos Reservados | Coanil Sede Central: Julio Prado 1761, Ñuñoa, Santiago</span>
			</div>
		</div>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
