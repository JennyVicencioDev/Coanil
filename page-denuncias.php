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

		<section id="introduccion">
         <div class="container">
				<div class="row flex-lg-row-reverse row-img-txt align-items-center justify-content-center denuncias-desc">
					<div class="col-12 col-lg-6 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/denuncias-img.jpg" class="img-fluid" alt="denuncias">
					</div>
					<div class="col-12 col-lg-6">
						<h2>Las opiniones de todos, <span class="fw-bold">siempre cuentan.</span></h2>
						<p>Si quieres conocer más acerca de nuestra obra a lo largo de todo el país, los programas implementados y las iniciativas que llevamos adelante, no dudes en rellenar el formulario. Nos pondremos en contacto contigo lo antes posible.</p>
						<p>Te invitamos a dejar tus denuncias, aquí abajo:</p>
					</div>
				</div>
         </div>
      </section>

		<section id="formulario-denuncia">
			<div class="container">
				<form id="formDenuncia" class="needs-validation" novalidate>
					<!-- anónimo/no anónimo -->
					<div class="row">
						<div class="col-12 mb-5">
							<div class="text-start text-lg-center mx-lg-6">
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
							<input type="text" class="form-control" id="nombreDenuncia" placeholder="Nombre y apellido" required>
							<div class="invalid-feedback">
							Ingresa tu nombre y apellido
							</div>
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
					</div>
					<!-- tipo reporte -->
					<div class="row">
						<div class="col-12 my-5">
							<div class="text-start text-lg-center mx-lg-6">
								<h2 class="h4">¿Qué tipo de irregularidad quiere reportar?</h2>
								<p>*Si deseas conocer la tipificación específica de la denuncia, despliega  el enunciado*</p>
							</div>
						</div>
						<!-- Delito contra niños -->
						<div class="col-12 mb-4">
							<!-- accordion -->
							<div class="accordion">
							  <div class="accordion-item">
								 <h3 class="accordion-header">
									<button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delitoNiñosDenuncia" aria-expanded="false" aria-controls="delitoNiñosDenuncia">
									Hecho eventualmente constitutivo de delito contra niños, niñas y adolescentes
									</button>
								 </h3>
								 <div id="delitoNiñosDenuncia" class="accordion-collapse collapse">
									<div class="accordion-body">
										<p>Las personas podrán comunicar observaciones, inquietudes, quejas, reclamos o denuncias, o cualquier situación o sospecha de comisión de delitos contra usuarios niños, niñas y adolescentes, de acuerdo con las disposiciones establecidas en las leyes chilenas y los protocolos internos establecidos para estos casos.</p>
									</div>
								 </div>
							  </div>
							</div>
							<!-- checkboxes -->
							<div class="my-5 ps-lg-5">
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hechoniñosDenuncia" id="hechoniños-libertad" required>
									<label class="form-check-label" for="hechoniños-libertad">Contra la libertad / indemnidad Sexual</label>
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
						<!-- Delito contra adultos -->
						<div class="col-12 mb-4">
							<!-- accordion -->
							<div class="accordion">
							  <div class="accordion-item">
								 <h3 class="accordion-header">
									<button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delitoAdultosDenuncia" aria-expanded="false" aria-controls="delitoAdultosDenuncia">
									Hecho eventualmente constitutivo de delito contra adultos
									</button>
								 </h3>
								 <div id="delitoAdultosDenuncia" class="accordion-collapse collapse">
									<div class="accordion-body">
										<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus beatae architecto nulla enim maiores, obcaecati cumque, dolore illo id non, quisquam excepturi quibusdam fugiat! Necessitatibus dicta nihil maxime quae dolorum?</p>
									</div>
								 </div>
							  </div>
							</div>
							<!-- checkboxes -->
							<div class="my-5 ps-lg-5">
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hechoadultosDenuncia" id="hechoadultos-libertad" required>
									<label class="form-check-label" for="hechoadultos-libertad">Contra la libertad / indemnidad Sexual</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hechoadultosDenuncia" id="hechoadultos-integridad" required>
									<label class="form-check-label" for="hechoadultos-integridad">Contra la integridad física y psíquica</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hechoadultosDenuncia" id="hechoadultos-vida" required>
									<label class="form-check-label" for="hechoadultos-vida">Contra la vida</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="hechoadultosDenuncia" id="hechoadultos-otro" required>
									<label class="form-check-label" for="hechoadultos-otro">Otro tipo de vulneración</label>
								</div>
							</div>
						</div>
						<!-- Situación laboral -->
						<div class="col-12 mb-4">
							<!-- accordion -->
							<div class="accordion">
							  <div class="accordion-item">
								 <h3 class="accordion-header">
									<button class="accordion-button fs-5 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#delitoLaboralDenuncia" aria-expanded="false" aria-controls="delitoLaboralDenuncia">
									Situaciones en el ámbito laboral
									</button>
								 </h3>
								 <div id="delitoLaboralDenuncia" class="accordion-collapse collapse">
									<div class="accordion-body">
										<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum mollitia, animi quasi ipsa exercitationem nobis omnis id, aperiam eaque dignissimos dolor nostrum deserunt! Officia, autem eligendi beatae enim magni perspiciatis?</p>
									</div>
								 </div>
							  </div>
							</div>
							<!-- checkboxes -->
							<div class="my-5 ps-lg-5">
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-acosoS" required>
									<label class="form-check-label" for="hecholaboral-acosoS">Acoso Sexual</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-acosoL" required>
									<label class="form-check-label" for="hecholaboral-acosoL">Acoso Laboral</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-igualdad" required>
									<label class="form-check-label" for="hecholaboral-igualdad">Falta a la igualdad de las remuneraciones</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-discriminacion" required>
									<label class="form-check-label" for="hecholaboral-discriminacion">Prácticas discriminatorias</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-higiene" required>
									<label class="form-check-label" for="hecholaboral-higiene">Riesgos de higiene y seguridad de las personas</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-robo" required>
									<label class="form-check-label" for="hecholaboral-robo">Robo / Hurto / Fraude</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-bienes" required>
									<label class="form-check-label" for="hecholaboral-bienes">Uso incorrecto de Activos, bienes y/o servicios</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-informacion" required>
									<label class="form-check-label" for="hecholaboral-informacion">Uso inapropiado de información de la Fundación, sus Colaboradores, Usuarios / Beneficiarios</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-intereses" required>
									<label class="form-check-label" for="hecholaboral-intereses">Conflictos de Interés</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-regalos" required>
									<label class="form-check-label" for="hecholaboral-regalos">Regalos u Obsequios</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-prevencion" required>
									<label class="form-check-label" for="hecholaboral-prevencion">Modelo de Prevención del Delito (Mejor Niñez)</label>
								</div>
								<div class="form-check mb-4">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-penal" required>
									<label class="form-check-label" for="hecholaboral-penal">Ley de Responsabilidad Penal de las Personas Jurídicas N° 20.393</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="hecholaboralDenuncia" id="hecholaboral-otro" required>
									<label class="form-check-label" for="hecholaboral-otro">Otro tipo de Denuncias (No Reclamos)</label>
								</div>
							</div>
						</div>
					</div>
					<!-- detalles reporte -->
					<div class="row">
						<div class="col-12 mb-5">
							<label for="afectadosDenuncia" class="form-label">Indique nombre/s de el/los afectados, en caso que ud. no lo sea.</label>
							<input type="text" class="form-control" id="afectadosDenuncia" placeholder="Nombre y apellido">
						</div>
						<div class="col-12 mb-5">
							<label for="detallesDenuncia" class="form-label">¿En qué consistió el hecho y cuándo ocurrió? Señale si ha ocurrido más de una vez.</label>
							<textarea class="form-control" name="" id="detallesDenuncia" rows="6" placeholder="Describa en detalle"></textarea>
						</div>
						<div class="col-12 mb-5">
							<p class="form-label mb-4">¿Dónde sucede o sucedió la irregularidad? Marque una opción*</p>
							<div class="form-check mb-4">
								<input class="form-check-input" type="radio" name="lugarDenuncia" id="lugarDenuncia-central" required>
								<label class="form-check-label" for="lugarDenuncia-central">Casa central</label>
							</div>
							<div class="form-check mb-4">
								<input class="form-check-input" type="radio" name="lugarDenuncia" id="lugarDenuncia-residencia" required>
								<label class="form-check-label" for="lugarDenuncia-residencia">Residencia</label>
							</div>
							<div class="form-check mb-4">
								<input class="form-check-input" type="radio" name="lugarDenuncia" id="lugarDenuncia-escuela" required>
								<label class="form-check-label" for="lugarDenuncia-escuela">Escuela</label>
							</div>
							<div class="form-check mb-4">
								<input class="form-check-input" type="radio" name="lugarDenuncia" id="lugarDenuncia-programa" required>
								<label class="form-check-label" for="lugarDenuncia-programa">Programa ambulatorio u otro</label>
							</div>
						</div>
						<div class="col-12 mb-5">
							<label for="lugarDenuncia" class="form-label">Especifique el lugar y/o área.*</label>
							<textarea class="form-control" name="" id="lugarDenuncia" rows="6" placeholder="Describa en detalle" required></textarea>
							<div class="invalid-feedback">
							Campo obligatorio
							</div>
						</div>
						<div class="col-12 mb-5">
							<label for="testigosDenuncia" class="form-label">¿Alguien más presenció los hechos? Indique nombre/s, cargo/s y área/s.</label>
							<textarea class="form-control" name="" id="testigosDenuncia" rows="6" placeholder="Describa en detalle"></textarea>
						</div>
						<div class="col-12 mb-5">
							<label for="involucradosDenuncia" class="form-label">¿Además del denunciado/a existen otras personas involucradas? Indique nombre/s, cargo/s y área/s.</label>
							<textarea class="form-control" name="" id="involucradosDenuncia" rows="6" placeholder="Describa en detalle"></textarea>
						</div>
						<p class="text-primary mb-5">(*) Campos obligatorios</p>
						<div class="col-auto mb-5">
							<label for="adjuntosDenuncia" class="form-label">Adjunta tus archivos de respaldo:</label>
							<input type="file" class="form-control" name="" id="adjuntosDenuncia" placeholder="asdf">
						</div>
						<div class="col-12">
						 <button class="btn btn-primary" type="submit">Enviar</button>
					  	</div>
					</div>
				</form>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
