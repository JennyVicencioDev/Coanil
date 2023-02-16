<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<section class="error-404 not-found py-5 my-0">
			<div class="container">
				<div class="text-center">
					<span class="h1 text-secondary fw-bold">404</span>
					<h1 class="page-title mt-5">¡Oops!<br>No hemos encontrado esta página</h1>
					<div class="img-deco py-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-arrow-down-fuchsia.svg" class="img-fluid" alt="arrow down">
					</div>
					<div class="mt-5">
						<a href="<?php echo get_home_url(); ?>/" type="button" class="btn btn-secondary">Volver al inicio</a>
					</div>
				</div>
			</div>
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
