<?php
/**
 * Template name: Página gracias
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<section class="msj-gracias py-5 my-0">
			<div class="container">
				<div class="text-center">
					<h1>Gracias por comunicarte con nosotros, muy pronto nos pondremos en contacto</h1>
					<div class="mt-5">
						<a href="<?php echo get_home_url(); ?>/" type="button" class="btn btn-secondary">Volver al inicio</a>
					</div>
				</div>
			</div>
			<script>
				$(function () {
					var headerH = $('.site-header').height();
					console.log(headerH);
					$('.msj-gracias').css('height', 'calc(100vh - '+headerH+'px)');
				});
			</script>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
