<?php
/**
 * Template name: Home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

      <div id="hero" class="banner-top banner-home" role="banner">
         <div class="banner-top-slider">
            <?php for($i=1;$i<=3;$i++) { ?>
               <div>
                  <div class="slide">
                     <div class="banner-bg">
                        <picture>
                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/header-home-img.jpg" class="img-fluid" media="(min-width: 992px)">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/header-home-img.jpg" class="img-fluid" alt="banner">
                        </picture>
                     </div>
                     <div class="banner-caption">
                        <div class="container-md">
                           <div class="col-6">
                              <h3>Abriendo caminos a las personas con discapacidad intelectual</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
         <div class="social-buttons">

         </div>
      </div>

      <section id="introduccion">
         <div class="container">
            <div class="text-start text-lg-center mx-lg-6">
               <h2>Un espacio seguro para el bienestar <br>y <span class="fw-bold">la integración social</span></h2>
               <p class="fs-6">En Fundación Coanil apoyamos y brindamos herramientas para el desarrollo de personas con discapacidad intelectual en Chile para promover su crecimiento educativo y profesional.</p>
            </div>
            <div class="datos-coanil-container mt-5">
               <div class="row g-0">
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono border-circle-clip">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-residence.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero fs-1">
                              <span>+45</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Años de <br>Experiencia</span>
                              <span class="dato-texto-nombre-desc fs-6">Que reciben personas de la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono border-circle-clip">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-education.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero fs-1">
                              <span>29</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Programas <br>sociales</span>
                              <span class="dato-texto-nombre-desc fs-6">Implementados por la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono border-circle-clip">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-mental-health.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero fs-1">
                              <span>600</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Beneficiarios <br>con discapacidad</span>
                              <span class="dato-texto-nombre-desc fs-6">Implementados por la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono border-circle-clip">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-persons.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero fs-1">
                              <span>+70</span>
                           </div>
                           <div class="dato-texto-nombre fs-5">
                              <span>Colaboradores <br>junto a Coanil</span>
                              <span class="dato-texto-nombre-desc fs-6">Implementados por la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="areas-trabajo" class="pt-5 bg-gradient diagonal-bottom">
         <div class="container">
            <h2 class="text-white text-center fw-bold">¡Conoce nuestras áreas de trabajo!</h2>
            <div class="areas-cards-container pt-5">
               <div class="card card-area me-4 me-xl-0">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-programas-sociales.jpg" class="img-fluid" alt="programas educativos">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas" clipPathUnits="objectBoundingBox" transform="scale(0.0059, 0.0026)">
                              <path d="M153.353 -54.101L158.316 -33.5468L158.443 -33.0197C163.449 -12.2958 173.294 28.4639 162.689 70.7529C157.749 90.451 148.41 110.478 139.071 130.505C128.19 153.841 117.308 177.176 113.385 199.992C106.329 242.06 122.947 282.358 139.565 322.656L139.937 323.558C156.857 364.144 173.777 404.729 175.096 446.481C176.594 488.22 162.491 531.125 155.439 552.578L148.388 574.031L117.364 576.35L117.364 576.349L-51.7098 588.992L-51.71 588.99L-81.7074 591.233L-93.3777 571.181C-105.048 551.128 -128.389 511.023 -133.397 469.546C-138.616 428.086 -125.503 385.255 -112.39 342.424L-112.104 341.472C-99.2955 298.974 -86.4873 256.475 -101.498 216.057C-109.75 194.152 -126.179 172.858 -142.608 151.565C-156.707 133.29 -170.807 115.016 -179.738 96.3553C-198.911 56.293 -194.054 14.4339 -191.584 -6.849L-191.521 -7.39027L-189.074 -28.4986L-91.9346 -35.7624L-91.9345 -35.7607L71.7937 -48.0038L71.7938 -48.0023L153.353 -54.101Z" fill="#0655CD"/>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Programas sociales</h5>
                     <p class="card-text">Junto a nuestros planes de residencia y calidad de vida, nos encargamos de resguardar el bienestar de nuestros usuarios y garantizarles un espacio seguro para su diario vivir.</p>
                     <div class="mt-auto"><a class="btn btn-primary" href="#" role="button">Leer más</a></div>
                  </div>
               </div>

               <div class="card card-area me-4 me-xl-0">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-programas-laborales.jpg" class="img-fluid" alt="programas laborales">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path d="M153.353 -54.101L158.316 -33.5468L158.443 -33.0197C163.449 -12.2958 173.294 28.4639 162.689 70.7529C157.749 90.451 148.41 110.478 139.071 130.505C128.19 153.841 117.308 177.176 113.385 199.992C106.329 242.06 122.947 282.358 139.565 322.656L139.937 323.558C156.857 364.144 173.777 404.729 175.096 446.481C176.594 488.22 162.491 531.125 155.439 552.578L148.388 574.031L117.364 576.35L117.364 576.349L-51.7098 588.992L-51.71 588.99L-81.7074 591.233L-93.3777 571.181C-105.048 551.128 -128.389 511.023 -133.397 469.546C-138.616 428.086 -125.503 385.255 -112.39 342.424L-112.104 341.472C-99.2955 298.974 -86.4873 256.475 -101.498 216.057C-109.75 194.152 -126.179 172.858 -142.608 151.565C-156.707 133.29 -170.807 115.016 -179.738 96.3553C-198.911 56.293 -194.054 14.4339 -191.584 -6.849L-191.521 -7.39027L-189.074 -28.4986L-91.9346 -35.7624L-91.9345 -35.7607L71.7937 -48.0038L71.7938 -48.0023L153.353 -54.101Z" fill="#0655CD"/>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Programas laborales</h5>
                     <p class="card-text">Trabajamos en la inclusión laboral de personas con discapacidad intelectual, a través de programas que desarrollan las competencias necesarias para la inserción en el mercado laboral.</p>
                     <div class="mt-auto"><a class="btn btn-primary" href="#" role="button">Leer más</a></div>
                  </div>
               </div>

               <div class="card card-area me-4 me-xl-0">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-centros-educativos.jpg" class="img-fluid" alt="centros educativos">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path d="M153.353 -54.101L158.316 -33.5468L158.443 -33.0197C163.449 -12.2958 173.294 28.4639 162.689 70.7529C157.749 90.451 148.41 110.478 139.071 130.505C128.19 153.841 117.308 177.176 113.385 199.992C106.329 242.06 122.947 282.358 139.565 322.656L139.937 323.558C156.857 364.144 173.777 404.729 175.096 446.481C176.594 488.22 162.491 531.125 155.439 552.578L148.388 574.031L117.364 576.35L117.364 576.349L-51.7098 588.992L-51.71 588.99L-81.7074 591.233L-93.3777 571.181C-105.048 551.128 -128.389 511.023 -133.397 469.546C-138.616 428.086 -125.503 385.255 -112.39 342.424L-112.104 341.472C-99.2955 298.974 -86.4873 256.475 -101.498 216.057C-109.75 194.152 -126.179 172.858 -142.608 151.565C-156.707 133.29 -170.807 115.016 -179.738 96.3553C-198.911 56.293 -194.054 14.4339 -191.584 -6.849L-191.521 -7.39027L-189.074 -28.4986L-91.9346 -35.7624L-91.9345 -35.7607L71.7937 -48.0038L71.7938 -48.0023L153.353 -54.101Z" fill="#0655CD"/>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Centros educativos</h5>
                     <p class="card-text">A través de nuestros proyectos de integración social, potenciamos las capacidades de las personas con discapacidad intelectual, ayudándolos a adquirir nuevos conocimientos y desarrollar sus talentos.</p>
                     <div class="mt-auto"><a class="btn btn-primary" href="#" role="button">Leer más</a></div>
                  </div>
               </div>

               <div class="card card-area me-4 me-xl-0">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-otec.jpg" class="img-fluid" alt="capacitaciones otec">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path d="M153.353 -54.101L158.316 -33.5468L158.443 -33.0197C163.449 -12.2958 173.294 28.4639 162.689 70.7529C157.749 90.451 148.41 110.478 139.071 130.505C128.19 153.841 117.308 177.176 113.385 199.992C106.329 242.06 122.947 282.358 139.565 322.656L139.937 323.558C156.857 364.144 173.777 404.729 175.096 446.481C176.594 488.22 162.491 531.125 155.439 552.578L148.388 574.031L117.364 576.35L117.364 576.349L-51.7098 588.992L-51.71 588.99L-81.7074 591.233L-93.3777 571.181C-105.048 551.128 -128.389 511.023 -133.397 469.546C-138.616 428.086 -125.503 385.255 -112.39 342.424L-112.104 341.472C-99.2955 298.974 -86.4873 256.475 -101.498 216.057C-109.75 194.152 -126.179 172.858 -142.608 151.565C-156.707 133.29 -170.807 115.016 -179.738 96.3553C-198.911 56.293 -194.054 14.4339 -191.584 -6.849L-191.521 -7.39027L-189.074 -28.4986L-91.9346 -35.7624L-91.9345 -35.7607L71.7937 -48.0038L71.7938 -48.0023L153.353 -54.101Z" fill="#0655CD"/>
                           </clipPath>
                        </defs>
                     </svg>
                  </div>
                  <div class="card-body">
                     <h5 class="card-title">Capacitaciones OTEC</h5>
                     <p class="card-text">Ofrecemos asesoría y concientización a miembros de la fundación, distintas organizaciones y trabajadores en torno a la discapacidad intelectual y tópicos relacionados.</p>
                     <div class="mt-auto"><a class="btn btn-primary" href="#" role="button">Leer más</a></div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="discapacidad-intelectual" class="di-desc py-5">
         <div class="container">
            <div class="row flex-lg-row-reverse row-img-txt align-items-center justify-content-center">
               <div class="col-12 col-lg-6 col-xxl-7 col-img mb-5 mb-lg-0">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/discapacidad-intelectual-home.jpg" class="img-fluid" alt="sobre la discapacidad intelectual">
               </div>
               <div class="col-12 col-lg-6 col-xxl-5 pe-lg-5">
                  <div class="text-start">
                     <h2>Hablemos de <span class="fw-bold">discapacidad intelectual</span></h2>
                     <p class="mb-5">En Coanil despejamos todas tus dudas y te contamos sobre qué significa la discapacidad intelectual, cuáles son los desafíos a los que nos enfrentamos y qué puedes hacer para ayudar a crear una sociedad más inclusiva.</p>
                     <a class="btn btn-primary" href="#" role="button">Leer más</a>
                  </div>
               </div>

            </div>
         </div>
      </section>

      <section id="instagram-feed">
         <div class="container">
            <h2>Revisa nuestras <span class="text-primary fw-bold">últimas <br>publicaciones en Instagram</span></h2>
            <div class="img-deco">
               <img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-arrow-down-light-blue.svg" class="img-fluid my-4" alt="arrow down" style="left: 10%; width: 40%;">
            </div>
            <div class="feed-container">
               <p class="text-center text-warning display-4">aquí irá el feed :B</p>
            </div>
         </div>
      </section>

      <section id="alianzas">
         <div class="container">
            <h2 class="text-center fw-bold">Nuestras alianzas</h2>
            <div class="alianzas-slider pt-5">
               <div class="alianza-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logos/alianzas/mcdonalds.png" class="img-fluid" alt="logo">
               </div>
               <div class="alianza-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logos/alianzas/RMHC.png" class="img-fluid" alt="logo">
               </div>
               <div class="alianza-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logos/alianzas/micare.png" class="img-fluid" alt="logo">
               </div>
               <div class="alianza-logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logos/alianzas/funicular.png" class="img-fluid" alt="logo">
               </div>
            </div>
         </div>
      </section>

      <section id="newsletter" class="py-6 mb-0 bg-waves-light">
         <div class="container">
            <div class="img-deco">
               <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-mail.svg" class="img-fluid my-5" alt="mail" style="width: 20%; max-width: 120px; transform: rotate(-15deg);">
            </div>
            <div class="row">
               <div class="col-12 col-lg-7">
                  <p class="text-center text-lg-start mb-5">Si quieres estar al día con las novedades más recientes de Coanil accede a nuestro newsletter y entérate de qué estamos haciendo.</p>
               </div>
               <div class="col-12 px-5 px-lg-0">
                  <form class="row needs-validation justify-content-between" novalidate>
                     <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <input type="text" class="form-control bg-transparent border-0 border-bottom border-primary border-5 text-center text-md-start px-0" id="validationCustom01" placeholder="Nombre y apellido" required>
                        <div class="invalid-feedback">
                           Ingresa tu nombre y apellido.
                        </div>
                     </div>
                     <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <input type="email" class="form-control bg-transparent border-0 border-bottom border-primary border-5 text-center text-md-start px-0" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Correo electrónico" required>
                        <div class="invalid-feedback">
                           Ingresa un correo electrónico válido.
                        </div>
                     </div>
                     <div class="col-12 col-md-3 mt-4 mt-md-0">
                        <div class="text-center">
                           <button class="btn btn-secondary" type="submit">Me quiero suscribir</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
            
	</main><!-- #main -->

<?php
get_footer();
