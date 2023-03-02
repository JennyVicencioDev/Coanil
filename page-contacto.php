<?php
/**
 * Template name: Contacto
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coanil_2023
 */

get_header();
?>

	<main id="main-content" class="site-main">

		<div class="banner-top" role="banner">
			<div class="banner-top-content">
				<div class="banner-bg">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/header-contacto-img.jpg" class="img-fluid" media="(min-width: 992px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-contacto-img.jpg" class="img-fluid" alt="banner contacto">
					</picture>
				</div>
				<div class="banner-caption">
					<div class="container-md">
						<div class="col col-lg-6">
							<h1>Contacto</h1>
							<!-- <p></p> -->
						</div>
					</div>
				</div>
			</div>

         <div class="social-buttons">

         </div>
      </div>

		<section id="introduccion">
         <div class="container">
				<div class="text-start text-lg-center mx-lg-6">
					<h2>Hablemos</h2>
					<p class="fs-6">Si quieres conocer más acerca de nuestra obra, los programas implementados y las iniciativas que llevamos adelante, no dudes en contactarte con nosotros. Nos pondremos en contacto contigo lo antes posible.</p>
				</div>
         </div>
      </section>

		<section id="formulario-contacto">
			<div class="container">
				<form id="formContacto" class="needs-validation" novalidate>
					<!-- anónimo/no anónimo -->
					<div class="row">
						<div class="col-12 mb-5">
							<div class="text-start text-lg-center mx-lg-6">
								<h2 class="h4">Déjanos tus datos</h2>
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="nombreContacto" class="form-label">Nombre</label>
							<input type="text" class="form-control" id="nombreContacto" placeholder="Nombre" required>
							<div class="invalid-feedback">
							Ingresa tu nombre
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="apellidoContacto" class="form-label">Apellido</label>
							<input type="text" class="form-control" id="apellidoContacto" placeholder="Apellido" required>
							<div class="invalid-feedback">
							Ingresa tu apellido
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="regionContacto" class="form-label">Región*</label>
							<select class="form-select" id="regionContacto" required>
								<option disabled selected value="">Selecciona...</option>
								<option value="AP">Región de Arica y Parinacota</option>
								<option value="TA">Región de Tarapacá</option>
								<option value="AN">Región de Antofagasta</option>
								<option value="AT">Región de Atacama</option>
								<option value="CO">Región de Coquimbo</option>
								<option value="VA">Región de Valparaíso</option>
								<option value="RM">Región Metropolitana de Santiago</option>
								<option value="LI">Región del Libertador General Bernardo O'Higgins</option>
								<option value="ML">Región del Maule</option>
								<option value="NB">Región del Ñuble</option>
								<option value="BI">Región del Biobio</option>
								<option value="AR">Región de La Araucanía</option>
								<option value="LR">Región de Los Ríos</option>
								<option value="LL">Región de Los Lagos</option>
								<option value="AI">Región de Aysén del Gral. Carlos Ibáñez del Campo</option>
								<option value="MA">Región de Magallanes y de la Antártica Chilena</option>
							</select>
							<div class="invalid-feedback">
							Selecciona una región
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="comunaContacto" class="form-label">Comuna*</label>
							<input type="text" class="form-control" id="comunaContacto" maxlength="50" placeholder="Comuna" required>
							<div class="invalid-feedback">
							Ingresa una comuna
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="validationCustom03" class="form-label">Número telefónico*</label>
							<input type="text" class="form-control" id="validationCustom03" value="+56" minlength="8" maxlength="12" required>
							<div class="invalid-feedback">
							Ingresa un número válido.
							</div>
						</div>
						<div class="col-lg-6 mb-4">
							<label for="emailContacto" class="form-label">Email*</label>
							<input type="email" class="form-control" id="emailContacto" placeholder="nombre@correo.com" required>
							<div class="invalid-feedback">
							Ingresa un correo electrónico válido.
							</div>
						</div>
						<div class="col-12 mb-4">
							<label for="asuntoContacto" class="form-label">Asunto</label>
							<textarea class="form-control" name="" id="asuntoContacto" rows="6" placeholder="Describa en detalle" required></textarea>
							<div class="invalid-feedback">
							Campo obligatorio
							</div>
						</div>
						<p class="text-primary mb-5">(*) Campos obligatorios</p>
					</div>
					<div class="col-12">
						<div class="text-center">
							<button class="btn btn-secondary" type="submit">Enviar</button>
						</div>
					</div>
				</form>
			</div>
		</section>

		<section id="denuncias-confidenciales" class="text-white bg-primary py-5 py-lg-6">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-5 col-xl-4 border-end-lg border-5" style="--bscoanil-border-color: #fff;">
					<div class="d-flex flex-column flex-lg-column-reverse">
						<img src="<?php echo get_template_directory_uri(); ?>/img/contacto-denuncia.png" width="175" height="auto" class="img-fluid my-4 mx-auto" alt="denuncia confidencial">
						<h2>Denuncias confidenciales</h2>
					</div>
					</div>
					<div class="col-12 col-lg-7 col-xl-8">
						<p>Fundación Coanil vela por la seguridad y protección de cada uno de sus integrantes. Es por esto que hemos habilitado este canal de comunicación protegido para realizar denuncias confidenciales, anónimas o no, sobre hechos que vulneren la integridad de las personas: infracciones a normas internas, faltas a la ética, conductas ilegales, acoso, violencia de cualquier tipo y/o discriminación de género, son algunas de las causas que pueden ser denunciadas por este canal.</p>
						<p>Es importante destacar que cada denuncia es confidencial, manteniéndose el anonimato del denunciante.</p>
						<p class="my-5"><a href="#" type="button" class="btn btn-white">Quiero enviar mi denuncia</a></p>
						<p class="fs-5">Queremos que nuestros espacios sean seguros para cada una de las personas que componen nuestra institución.</p>
					</div>
				</div>
			</div>
		</section>

		<section id="ofertas">
			<div class="container">
				<div class="text-start text-lg-center mx-lg-6">
					<h2>Trabaja con nosotros</h2>
					<p class="fs-6">Tu labor es esencial para nosotros y para los que más lo necesitan.<br> Postula en Fundación Coanil y sé parte del cambio.</p>
				</div>
         </div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
