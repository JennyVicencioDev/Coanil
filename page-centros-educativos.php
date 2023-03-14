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
				<div class="row flex-lg-row-reverse row-img-txt align-items-center justify-content-center mt-5 ce-desc">
					<div class="col-12 col-lg-6 col-xxl-7 col-img my-5">
						<img src="<?php echo get_template_directory_uri(); ?>/img/centros-img.jpg" class="img-fluid" alt="centros educativos">
					</div>
					<div class="col-12 col-lg-6 col-xxl-5">
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
                        <div class="dato-texto text-centros-1">
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
                        <div class="dato-texto text-centros-1">
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
                        <div class="dato-texto text-centros-1">
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
                        <div class="dato-texto text-centros-1">
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

				<div class="img-deco text-center">
               <img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-arrow-down-yellow.svg" class="img-fluid my-4" alt="arrow down" style="max-width:100%;width:350px;">
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
						<p>Nuestro enfoque de enseñanza se centra en potenciar cada una de las habilidades de las personas con discapacidad intelectual, donde el foco principal está en lograr la inserción e inclusión social de cada uno de nuestros estudiantes.</p>
                  <p>Para esto, Fundación Educacional Coanil cuenta con programas, actividades y acciones destinadas a proporcionar una educación integral, considerando el entorno personal y social de cada uno de nuestros alumnos.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="acciones">
			<div class="container">
				<h3 class="text-center">Para lograr los objetivos, desarrollamos distintas acciones enfocadas en:</h3>
				<div class="enfoque-centros-container">
               <div class="row g-3">
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-config.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <div class="text-center">
                              <h3 class="fs-5 fw-bold text-centros-1 my-4">Ejecutar</h3>
                              <p>Lineamientos teóricos y técnicos para la atención integral en las escuelas.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-holding-hands.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <div class="text-center">
                              <h3 class="fs-5 fw-bold text-centros-1 my-4">Acompañar</h3>
                              <p>Lineamientos teóricos y técnicos para la atención integral en las escuelas.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-signs.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <div class="text-center">
                              <h3 class="fs-5 fw-bold text-centros-1 my-4">Guiar</h3>
                              <p>El proyecto educativo de cada escuela.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-asistance.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <div class="text-center">
                              <h3 class="fs-5 fw-bold text-centros-1 my-4">Asesorar</h3>
                              <p>Los procesos bajo la normativa MINEDUC – Coanil.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm">
                     <div class="enfoque">
                        <div class="enfoque-icono border-circle-clip yellow">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-eye.svg" alt="">
                           </span>
                        </div>
                        <div class="enfoque-texto">
                           <div class="text-center">
                              <h3 class="fs-5 fw-bold text-centros-1 my-4">Supervisar</h3>
                              <p>Los procesos para medir la calidad del aprendizaje de los estudiantes.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

			</div>
      </section>

      <section id="propuesta-valor" class="text-white bg-centros-2 diagonal-bottom py-5 py-lg-6">
         <div class="container">
            <h2 class="text-center">Nuestra propuesta de valor</h2>
            <div class="row">
               <div class="col-12 col-lg-10">
                  <div class="text-center text-lg-start">
                     <div class="row align-items-center">
                        <div class="col-12 col-lg-4">
                           <img src="<?php echo get_template_directory_uri(); ?>/img/diamond-yellow.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-lg">
                           <p>De norte a sur, contamos con escuelas que permiten a todos nuestros alumnos optar por la licenciatura de Octavo Básico y acceder a clases de inglés como asignatura obligatoria. La formación e inclusión laboral de personas con discapacidad intelectual ha sido, durante más de 47 años, una tarea primordial para Fundación Educacional Coanil y, específicamente, para el Área Técnica Laboral.</p>
                        </div>
                        <div class="col-12">
                           <p class="fs-5">Además, nuestros centros educativos cuentan con profesionales altamente capacitados para <strong>atender las necesidades de cada uno de nuestros alumnos, entregando una educación integral para cada etapa del desarrollo</strong>.</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-2 d-none d-lg-block">
                  <div class="border-circle-clip yellow mb-4" style="width:100px;height:100px;">
                     <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-config.svg" alt="">
                     </span>
                  </div>
                  <div class="border-circle-clip yellow mb-4" style="width:100px;height:100px;">
                     <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-config.svg" alt="">
                     </span>
                  </div>
                  <div class="border-circle-clip yellow mb-4" style="width:100px;height:100px;">
                     <span>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-config.svg" alt="">
                     </span>
                  </div>
               </div>
            </div>
         </div>
      </section>
      
		<section id="equipo">
			<div class="container">
				<div class="row row-img-txt flex-lg-row-reverse align-items-center justify-content-center py-5 ce-equipo">
					<div class="col-12 col-lg-6 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/areas/centros-equipo.jpg" class="img-fluid" alt="equipo multidisciplinario">
					</div>
					<div class="col-12 col-lg-6">
						<h2>Equipo Multidisciplinario</h2>
						<p>Nuestro equipo de profesionales trabaja en conjunto, de manera multidisciplinaria, para entregar las mejores herramientas a los alumnos, con el fin facilitar y fomentar su inserción en la sociedad. Además de nuestros docentes y, dependiendo del centro educativo, Coanil cuenta con el apoyo de kinesiólogos, fonoaudiólogos, terapeutas ocupacionales, psicólogos, educadores diferenciales y psicopedagogos que acompañan integralmente en el proceso de desarrollo de nuestros estudiantes.</p>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
