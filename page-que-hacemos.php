<?php
/**
 * Template name: Qué hacemos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<div id="hero" class="banner-top" role="banner">
			<div class="banner-top-content">
				<div class="banner-bg">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/header-nosotros-img.jpg" class="img-fluid" media="(min-width: 992px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-nosotros-img.jpg" class="img-fluid" alt="banner nosotros">
					</picture>
				</div>
				<div class="banner-caption">
					<div class="container-md">
						<div class="col col-lg-6">
							<h3>Estamos comprometidos en construir y contribuir</h3>
							<p>Con una sociedad más justa e inclusiva para las personas con discapacidad intelectual.</p>
						</div>
					</div>
				</div>
			</div>

         <div class="social-buttons">

         </div>
      </div>
		
		<?php include('template-parts/breadcrumb.php'); ?>

		<section id="introduccion">
         <div class="container">
            <div class="text-start text-lg-center mx-lg-6">
					<h2>Responsabilidad y dedicación <br><b>por la inclusión</b></h2>
               <p class="fs-6 fs-lg">Nuestra gestión está enfocada en mejorar la calidad de vida de la personas con discapacidad intelectual, trabajando en las áreas de educación, protección y de inserción laboral. Reconocemos estas necesidades y potenciamos la autonomía e inclusión social en todos los niveles.</p>
            </div>
         </div>
      </section>

		<section id="areas-trabajo" class="py-5">
			<div class="container">
				<div class="areas-desc-container">
					<div class="area-desc">
						<div class="row row-img-txt align-items-center">
							<div class="col-12 col-lg-6 col-img mb-5 mb-lg-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/areas/nosotros-programas-sociales.jpg" class="img-fluid" alt="area">
							</div>
							<div class="col-12 col-lg-6">
								<div class="text-start">
									<h2>Programas sociales</h2>
									<p>En Coanil contamos con una serie de programas sociales de excelencia que otorgan una red de apoyo a las personas con discapacidad intelectual. A través de estas distintas iniciativas, velamos por cubrir las necesidades integrales de seguridad y bienestar.</p>
									<div><a href="#" class="btn btn-primary mt-4">Quiero saber más</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="area-desc">
						<div class="row row-img-txt align-items-center">
							<div class="col-12 col-lg-6 col-img mb-5 mb-lg-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/areas/nosotros-inclusion-laboral.jpg" class="img-fluid" alt="area">
							</div>
							<div class="col-12 col-lg-6">
								<div class="text-start">
									<h2>Inclusión laboral</h2>
									<p>Generamos estrategias para favorecer la adquisición de competencias laborales, estimulando la participación en diferentes contextos reales. Entregamos las herramientas necesarias para la inserción laboral de las personas, con el objetivo de mantener un puesto de trabajo en el tiempo frente al espacio competitivo del mercado laboral actual.</p>
									<div><a href="#" class="btn btn-primary mt-4">Quiero saber más</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="area-desc">
						<div class="row row-img-txt align-items-center">
							<div class="col-12 col-lg-6 col-img mb-5 mb-lg-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/areas/nosotros-centros-educativos.jpg" class="img-fluid" alt="area">
							</div>
							<div class="col-12 col-lg-6">
								<div class="text-start">
									<h2>Centros Educativos</h2>
									<p>Fundación Educacional Coanil cuenta con 28 escuelas diferenciales a lo largo del país, donde se brinda una educación normalizadora y de calidad a los estudiantes de manera permanente. Nuestro objetivo es potenciar al máximo sus talentos y capacidades, favoreciendo una calidad de vida inclusiva y entregando todos los apoyos necesarios.</p>
									<div><a href="#" class="btn btn-primary mt-4">Quiero saber más</a></div>
								</div>
							</div>
						</div>
					</div>
					<div class="area-desc">
						<div class="row row-img-txt align-items-center">
							<div class="col-12 col-lg-6 col-img mb-5 mb-lg-0">
								<img src="<?php echo get_template_directory_uri(); ?>/img/areas/nosotros-otec.jpg" class="img-fluid ratio ratio-4x3" alt="area">
							</div>
							<div class="col-12 col-lg-6">
								<div class="text-start">
									<h2>Capacitaciones OTEC</h2>
									<p>Con el objetivo de reducir la brecha social laboral, Coanil dispone de personal capacitado para educar y dar las herramientas necesarias a los colaboradores de empresas sujetas a la Ley N° 21015 de Inclusión Laboral. De este modo, entregamos soluciones para que las empresas puedan atender a los nuevos cambios sociales.</p>
									<div><a href="#" class="btn btn-primary mt-4">Quiero saber más</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
      </section>

	</main><!-- #main -->

<?php
get_footer();
