<?php
/**
 * Template name: Denuncias
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<div class="title-top">
			<div class="container">
				<div class="text-center">
					<h1><?php echo get_the_title(); ?></h1>
				</div>
			</div>
      </div>

		<section id="introduccion" class="denuncias-desc py-5">
         <div class="container">
				<div class="row row-img-txt align-items-center justify-content-center">
					<div class="col-12 col-lg-6 pe-lg-5">
						<div class="text-center text-lg-start mb-5 mb-lg-0">
							<h2>Las opiniones de todos, <span class="fw-bold">siempre cuentan.</span></h2>
							<p>Si quieres conocer más acerca de nuestra obra a lo largo de todo el país, los programas implementados y las iniciativas que llevamos adelante, no dudes en rellenar el formulario. Nos pondremos en contacto contigo lo antes posible.</p>
							<p>Te invitamos a dejar tus denuncias, aquí abajo:</p>
						</div>
					</div>
					<div class="col-12 col-lg-6 col-img">
						<img src="<?php echo get_template_directory_uri(); ?>/img/denuncias-img.jpg" class="img-fluid" alt="denuncias">
					</div>
				</div>
         </div>
      </section>

		<section id="formulario" class="py-5">
			<div class="container">
				<form class="row needs-validation" novalidate>
					<!-- Es anónimo? -->
					<div class="col-12 mb-5">
						<div class="text-center">
							<h2 class="h4">Formulario de reporte de irregularidad</h2>
							<p>En Coanil, velamos por la transparencia de nuestros hechos. Te invitamos a reportar irregularidades o problemáticas en las que te has visto envuelto, o en las que has sido testigo.</p>
						</div>
					</div>
					<div class="col-12 mb-4">
						<p class="form-label text-center">¿Su denuncia es anónima?*</p>
						<div class="row justify-content-center">
							<div class="col-auto">
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="anonimoDenuncia" id="anonimaSi" required>
									<label class="form-check-label" for="anonimaSi">
										Sí
									</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="anonimoDenuncia" id="anonimaNo" required>
									<label class="form-check-label" for="anonimaNo">
										No
									</label>
								</div>
							</div>
						</div>
				  	</div>
					<div class="col-lg-6 mb-4">
						<label for="nombreDenuncia" class="form-label">De no ser anónima, deja tu nombre completo aquí</label>
						<input type="text" class="form-control" id="nombreDenuncia" placeholder="Nombre y apellido">
					</div>
					<div class="col-lg-6 mb-4">
						<label for="emailDenuncia" class="form-label">Email*</label>
						<input type="email" class="form-control" id="emailDenuncia" placeholder="nombre@correo.com" required>
						<div class="invalid-feedback">
						Ingresa un correo electrónico válido.
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<label for="validationCustom03" class="form-label">Número telefónico</label>
						<input type="text" class="form-control" id="validationCustom03" value="+56" minlength="8" maxlength="12" required>
						<div class="invalid-feedback">
						Ingresa un número válido.
						</div>
					</div>
				  	<div class="col-lg-6 mb-4">
						<label for="reportadoDenuncia" class="form-label">¿A quién reporta? Escriba su nombre completo*</label>
						<input type="text" class="form-control" id="reportadoDenuncia" placeholder="Nombre y apellido" required>
						<div class="invalid-feedback">
						Ingresa un nombre válido.
						</div>
				  	</div>

					<!-- qué quiere reportar? -->
					<div class="col-12 my-5">
						<div class="text-center">
							<h2 class="h4">¿Qué tipo de irregularidad quiere reportar?</h2>
							<p>*Si deseas conocer la tipificación específica de la denuncia, despliega  el enunciado*</p>
						</div>
					</div>
					<div class="col-12 mb-4">
						<div class="accordion">
						  <div class="accordion-item">
							 <h3 class="accordion-header">
								<button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delitoNiñosDenuncia" aria-expanded="false" aria-controls="delitoNiñosDenuncia">
								Hecho eventualmente constitutivo de delito contra niños, niñas y adolescentes
								</button>
							 </h3>
							 <div id="delitoNiñosDenuncia" class="accordion-collapse collapse">
								<div class="accordion-body">
									<div class="form-check mb-4">
										<input class="form-check-input" type="radio" name="hechoniñosDenuncia" id="hechoniños" required>
										<label class="form-check-label" for="hechoniños-isexual">Contra la libertad / indemnidad Sexual</label>
									</div>
									<div class="form-check mb-4">
										<input class="form-check-input" type="radio" name="hechoniñosDenuncia" id="hechoniños-integridad" required>
										<label class="form-check-label" for="hechoniños-integridad">Contra la integridad física y psíquica</label>
									</div>
									<div class="form-check mb-4">
										<input class="form-check-input" type="radio" name="hechoniñosDenuncia" id="hechoniños-vida" required>
										<label class="form-check-label" for="hechoniños-vida">Contra la vida</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" type="radio" name="hechoniñosDenuncia" id="hechoniños-otro" required>
										<label class="form-check-label" for="hechoniños-otro">Otro tipo de vulneración</label>
									</div>
								</div>
							 </div>
						  </div>
						  
						</div>
					</div>

				  
				  <div class="col-12">
					 <button class="btn btn-primary" type="submit">Enviar</button>
				  </div>
				</form>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
