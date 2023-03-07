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
                     <svg width="0" height="0" viewBox="0 0 120 471">
                        <defs>
                           <clipPath id="mask-cards-areas">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M99.8239 -64.0521L106.546 -38.2119L106.718 -37.5493C113.498 -11.4958 126.832 39.7463 113.865 93.3347C107.825 118.296 96.127 143.762 84.4295 169.228C70.7994 198.901 57.1693 228.575 52.4894 257.45C44.0864 310.687 66.1318 361.209 88.1771 411.73L88.6706 412.861C111.109 463.739 133.548 514.617 135.922 567.285C138.527 619.933 121.066 674.37 112.336 701.589L103.606 728.807L63.7072 732.367L63.707 732.365L-153.737 751.764L-153.738 751.761L-192.317 755.203L-207.665 730.133C-223.013 705.062 -253.709 654.92 -260.829 602.676C-268.219 550.455 -252.032 496.131 -235.846 441.808L-235.492 440.601C-219.692 386.703 -203.892 332.806 -223.87 282.1C-234.848 254.622 -256.342 228.082 -277.836 201.542C-296.282 178.765 -314.729 155.989 -326.528 132.619C-351.858 82.4469 -346.284 29.518 -343.449 2.60681L-343.377 1.92243L-340.568 -24.7681L-215.638 -35.9133L-215.638 -35.911L-5.06774 -54.6963L-5.06758 -54.6945L99.8239 -64.0521Z" fill="#0655CD"/>
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
               <div class="card card-area me-4 me-xl-0">
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
               <div class="card card-area me-4 me-xl-0">
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
