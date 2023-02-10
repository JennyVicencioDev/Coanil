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
            <div class="text-center mx-lg-5 px-lg-5 mb-5">
               <h2>Un espacio seguro para el bienestar <br>y <span class="fw-bold">la integración social</span></h2>
               <p class="fs-6">En Fundación Coanil apoyamos y brindamos herramientas para el desarrollo de personas con discapacidad intelectual en Chile para promover su crecimiento educativo y profesional.</p>
            </div>
            <div class="datos-coanil pt-5">
               <div class="row g-0">
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-residence.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero">
                              <span>+45</span>
                           </div>
                           <div class="dato-texto-nombre">
                              <span>Años de <br>Experiencia</span>
                              <span class="dato-texto-nombre-desc">Que reciben personas de la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-education.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero">
                              <span>29</span>
                           </div>
                           <div class="dato-texto-nombre">
                              <span>Programas <br>sociales</span>
                              <span class="dato-texto-nombre-desc">Implementados por la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-mental-health.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero">
                              <span>600</span>
                           </div>
                           <div class="dato-texto-nombre">
                              <span>Beneficiarios <br>con discapacidad</span>
                              <span class="dato-texto-nombre-desc">Implementados por la fundación</span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-12 col-sm-6 col-xl-3">
                     <div class="dato">
                        <div class="dato-icono">
                           <span>
                              <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-persons.svg" alt="">
                           </span>
                        </div>
                        <div class="dato-texto">
                           <div class="dato-texto-numero">
                              <span>+70</span>
                           </div>
                           <div class="dato-texto-nombre">
                              <span>Colaboradores <br>junto a Coanil</span>
                              <span class="dato-texto-nombre-desc">Implementados por la fundación</span>
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
               <div class="card card-area">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-programas-sociales.jpg" class="img-fluid" alt="programas educativos">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M153.678 -56.1982L158.936 -35.7173L159.07 -35.1921C164.373 -14.5421 174.801 26.0723 164.804 68.509C160.147 88.2759 151.096 108.435 142.045 128.593C131.499 152.083 120.953 175.572 117.358 198.441C110.905 240.607 128.1 280.662 145.294 320.718L145.679 321.615C163.179 361.953 180.679 402.292 182.597 444.021C184.693 485.734 171.206 528.837 164.463 550.389L157.72 571.94L126.733 574.704L126.733 574.703L-42.1425 589.769L-42.1426 589.767L-72.1048 592.44L-84.0614 572.557C-96.0181 552.673 -119.931 512.907 -125.534 471.507C-131.347 430.125 -118.85 387.111 -106.352 344.096L-106.079 343.14C-93.8815 300.463 -81.6839 257.785 -97.2727 217.586C-105.838 195.802 -122.57 174.746 -139.303 153.69L-139.303 153.69C-153.663 135.62 -168.023 117.549 -177.221 99.0185C-196.966 59.2352 -192.71 17.3107 -190.546 -4.00538L-190.491 -4.5475L-188.346 -25.6888L-91.3208 -34.3446L-91.3207 -34.3429L72.2151 -48.9322L72.2153 -48.9308L153.678 -56.1982Z" fill="#0655CD"/>
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
               <div class="card card-area">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-programas-laborales.jpg" class="img-fluid" alt="programas laborales">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M153.678 -56.1982L158.936 -35.7173L159.07 -35.1921C164.373 -14.5421 174.801 26.0723 164.804 68.509C160.147 88.2759 151.096 108.435 142.045 128.593C131.499 152.083 120.953 175.572 117.358 198.441C110.905 240.607 128.1 280.662 145.294 320.718L145.679 321.615C163.179 361.953 180.679 402.292 182.597 444.021C184.693 485.734 171.206 528.837 164.463 550.389L157.72 571.94L126.733 574.704L126.733 574.703L-42.1425 589.769L-42.1426 589.767L-72.1048 592.44L-84.0614 572.557C-96.0181 552.673 -119.931 512.907 -125.534 471.507C-131.347 430.125 -118.85 387.111 -106.352 344.096L-106.079 343.14C-93.8815 300.463 -81.6839 257.785 -97.2727 217.586C-105.838 195.802 -122.57 174.746 -139.303 153.69L-139.303 153.69C-153.663 135.62 -168.023 117.549 -177.221 99.0185C-196.966 59.2352 -192.71 17.3107 -190.546 -4.00538L-190.491 -4.5475L-188.346 -25.6888L-91.3208 -34.3446L-91.3207 -34.3429L72.2151 -48.9322L72.2153 -48.9308L153.678 -56.1982Z" fill="#0655CD"/>
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
               <div class="card card-area">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-centros-educativos.jpg" class="img-fluid" alt="centros educativos">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M153.678 -56.1982L158.936 -35.7173L159.07 -35.1921C164.373 -14.5421 174.801 26.0723 164.804 68.509C160.147 88.2759 151.096 108.435 142.045 128.593C131.499 152.083 120.953 175.572 117.358 198.441C110.905 240.607 128.1 280.662 145.294 320.718L145.679 321.615C163.179 361.953 180.679 402.292 182.597 444.021C184.693 485.734 171.206 528.837 164.463 550.389L157.72 571.94L126.733 574.704L126.733 574.703L-42.1425 589.769L-42.1426 589.767L-72.1048 592.44L-84.0614 572.557C-96.0181 552.673 -119.931 512.907 -125.534 471.507C-131.347 430.125 -118.85 387.111 -106.352 344.096L-106.079 343.14C-93.8815 300.463 -81.6839 257.785 -97.2727 217.586C-105.838 195.802 -122.57 174.746 -139.303 153.69L-139.303 153.69C-153.663 135.62 -168.023 117.549 -177.221 99.0185C-196.966 59.2352 -192.71 17.3107 -190.546 -4.00538L-190.491 -4.5475L-188.346 -25.6888L-91.3208 -34.3446L-91.3207 -34.3429L72.2151 -48.9322L72.2153 -48.9308L153.678 -56.1982Z" fill="#0655CD"/>
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
               <div class="card card-area">
                  <div class="card-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/areas/card-img-otec.jpg" class="img-fluid" alt="capacitaciones otec">
                     <svg width="0" height="0">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M153.678 -56.1982L158.936 -35.7173L159.07 -35.1921C164.373 -14.5421 174.801 26.0723 164.804 68.509C160.147 88.2759 151.096 108.435 142.045 128.593C131.499 152.083 120.953 175.572 117.358 198.441C110.905 240.607 128.1 280.662 145.294 320.718L145.679 321.615C163.179 361.953 180.679 402.292 182.597 444.021C184.693 485.734 171.206 528.837 164.463 550.389L157.72 571.94L126.733 574.704L126.733 574.703L-42.1425 589.769L-42.1426 589.767L-72.1048 592.44L-84.0614 572.557C-96.0181 552.673 -119.931 512.907 -125.534 471.507C-131.347 430.125 -118.85 387.111 -106.352 344.096L-106.079 343.14C-93.8815 300.463 -81.6839 257.785 -97.2727 217.586C-105.838 195.802 -122.57 174.746 -139.303 153.69L-139.303 153.69C-153.663 135.62 -168.023 117.549 -177.221 99.0185C-196.966 59.2352 -192.71 17.3107 -190.546 -4.00538L-190.491 -4.5475L-188.346 -25.6888L-91.3208 -34.3446L-91.3207 -34.3429L72.2151 -48.9322L72.2153 -48.9308L153.678 -56.1982Z" fill="#0655CD"/>
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

      <section id="discapacidad-intelectual">
         <div class="container">
            <div class="di-desc">
               <div class="row row-img-txt align-items-center justify-content-center">
                  <div class="col-12 col-lg-6 col-xl-5 pe-lg-5">
                     <div class="text-center text-lg-start mb-5 mb-lg-0">
                        <h2>Hablemos de <span class="fw-bold">discapacidad intelectual</span></h2>
                        <p>En Coanil despejamos todas tus dudas y te contamos sobre qué significa la discapacidad intelectual, cuáles son los desafíos a los que nos enfrentamos y qué puedes hacer para ayudar a crear una sociedad más inclusiva.</p>
                        <div class="mt-5"><a class="btn btn-primary" href="#" role="button">Leer más</a></div>
                     </div>
                  </div>
                  <div class="col-12 col-lg-6 col-xl-7 col-img">
                     <img src="<?php echo get_template_directory_uri(); ?>/img/discapacidad-intelectual-home.jpg" class="img-fluid" alt="sobre la discapacidad intelectual">
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="instagram-feed">
         <div class="container">
            <h2>Revisa nuestras <span class="text-primary fw-bold">últimas <br>publicaciones en Instagram</span></h2>
            <div class="img-deco py-4">
               <img src="<?php echo get_template_directory_uri(); ?>/img/vectors/vector-arrow-down-light-blue.svg" class="img-fluid" alt="arrow down" >
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

      <section id="newsletter" class="py-6 bg-waves-light">
         <div class="container">
            <div class="img-deco my-5">
               <img src="<?php echo get_template_directory_uri(); ?>/img/icons/icon-mail.svg" class="img-fluid" alt="mail">
            </div>
            <div class="row">
               <div class="col-12 col-lg-7">
                  <p class="mb-5">Si quieres estar al día con las novedades más recientes de Coanil, <br>accede a nuestro newsletter y entérate de qué estamos haciendo.</p>
               </div>
               <div class="col-12">
                  <form class="row needs-validation justify-content-between" novalidate>
                     <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <input type="text" class="form-control bg-transparent border-0 border-bottom border-primary border-5 px-0" id="validationCustom01" placeholder="Nombre y apellido" value="" required>
                        <div class="valid-feedback">
                           Looks good!
                        </div>
                     </div>
                     <div class="col-12 col-md-4 mb-4 mb-md-0">
                        <input type="email" class="form-control bg-transparent border-0 border-bottom border-primary border-5 px-0" id="validationCustomUsername" aria-describedby="inputGroupPrepend" placeholder="Correo electrónico" required>
                        <div class="invalid-feedback">
                           Please choose a username.
                        </div>
                     </div>
                     <div class="col-12 col-md-3 mb-4 mb-md-0">
                        <div class="text-center">
                           <button class="btn btn-secondary" type="submit">Suscríbete</button>
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
