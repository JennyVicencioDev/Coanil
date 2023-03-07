<?php
/**
 * Template name: Área: Centros Educativos
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<div class="banner-top banner-ce" role="banner">
			<div class="banner-top-content">
				<div class="banner-bg">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/header-centros-img.jpg" class="img-fluid" media="(min-width: 992px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-centros-img.jpg" class="img-fluid" alt="banner Centros Educativos">
					</picture>
				</div>
				<div class="banner-caption">
					<div class="container-md">
						<div class="col col-lg-6">
							<h1><?php echo get_the_title(); ?></h1>
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
					<h2>Educar <b>para integrar</b></h2>
               <p class="fs-6">El objetivo del área educativa de Fundación Educacional Coanil (FEC) es brindar una educación integral para incluir y fortalecer a las personas con discapacidad intelectual y sus familias. Los principios que sustentan nuestra propuesta y misión educativa son: inclusión, autodeterminación, corresponsabilidad, equidad e igualdad.</p>
            </div>

				<!-- nuestros centros -->
				<div class="row flex-lg-row-reverse row-img-txt align-items-center justify-content-center py-5 ce-desc">
					<div class="col-12 col-md-6 col-lg-7 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/centros-img.jpg" class="img-fluid" alt="centros educativos">
					</div>
					<div class="col-12 col-md-6 col-lg-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-coanil-educa.png" class="img-fluid mb-4" alt="logo Coanil Educa" width="300">
						<h2>Nos mueve <strong>la inclusión</strong></h2>
						<p>Fundación Educacional Coanil cuenta, al día de hoy, con 28 centros educacionales a lo largo del país. Cada una de nuestras instituciones está capacitada para brindar una educación de calidad a nuestros estudiantes, demostrando que la discapacidad intelectual no es una barrera para el aprendizaje y el crecimiento personal.</p>
						<div><a href="<?php echo get_home_url(); ?>/que-hacemos/centros-educativos/conoce-nuestros-centros-educativos" class="btn btn-primary mt-4">Conoce nuestros centros</a></div>
					</div>
				</div>
				<!-- cifras -->
				<div class="datos-coanil-container mt-5">
					<h2 class="text-start text-lg-center">Educación Coanil en cifras</h2>
               <div class="row g-0">
                  <div class="col-12 col-sm-6 col-xl">
                     <div class="dato">
                        <div class="dato-texto text-centros">
                           <div class="dato-texto-numero fs-1">
                              <span>28</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Escuelas a lo largo del país</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl">
                     <div class="dato">
                        <div class="dato-texto text-centros">
                           <div class="dato-texto-numero fs-1">
                              <span>+45</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Años al servicio de la educación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl">
                     <div class="dato">
                        <div class="dato-texto text-centros">
                           <div class="dato-texto-numero fs-1">
                              <span>+2000</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Alumnos cada año</span>
                           </div>
                        </div>
                     </div>
                  </div>
						<div class="col-12 col-sm-6 col-xl">
                     <div class="dato">
                        <div class="dato-texto text-centros">
                           <div class="dato-texto-numero fs-1">
                              <span>+500</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Profesionales al servicio de nuestra comunidad</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

				<div class="img-deco">
               <img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-arrow-down-yellow.svg" class="img-fluid my-4" alt="arrow down" style="left:25%; max-width: 350px;">
            </div>
         </div>
      </section>

		<section id="enfoque">
			<div class="container">
				<div class="row row-img-txt align-items-center justify-content-center py-5 ce-desc">
					<div class="col-12 col-lg-6 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/areas/centros-enfoque.jpg" class="img-fluid" alt="nuestro enfoque">
					</div>
					<div class="col-12 col-lg-6">
						<h2>Nuestro enfoque</h2>
						<p>Nuestro enfoque de enseñanza se centra en potenciar cada una de las habilidades de las personas con discapacidad intelectual, donde el foco principal está en lograr la inserción e inclusión social de cada uno de nuestros estudiantes. Para ésto, Fundación Educacional Coanil cuenta con programas, actividades y acciones destinadas a proporcionar una educación integral, considerando el entorno personal y social de cada uno de nuestros alumnos.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="acciones" class="py-5">
			<div class="container">
				<h3 class="text-center">Para lograr los objetivos, desarrollamos distintas acciones enfocadas en:</h3>
				<div class="enfoque-centros-container">
               <div class="row g-0">
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-residence.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <h3>Ejecutar</h3>
                           <p>Lineamientos teóricos y técnicos para la atención integral en las escuelas.</p>
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
