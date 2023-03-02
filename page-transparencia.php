<?php
/**
 * Template name: Transparencia
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
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/header-transparencia-img.jpg" class="img-fluid" media="(min-width: 992px)">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header-transparencia-img.jpg" class="img-fluid" alt="banner transparencia">
					</picture>
				</div>
				<div class="banner-caption">
					<div class="container-md">
						<div class="col col-lg-6">
							<h1>Transparencia</h1>
							<p>Creando transformación en quiénes más lo necesitan.</p>
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
					<p class="fs-6">Estamos comprometidos a lograr que las personas con discapacidad intelectual sean integradas a la sociedad. Es por ello que te invitamos a revisar las Memorias de la fundación, junto con las rendiciones de cuentas para las Organizaciones Sin Fines de Lucro de Chile y el detalle del Estado de Resultados anuales que respaldan la responsabilidad en generar acciones para la integración de la discapacidad intelectual en nuestro país.</p>
            </div>
         </div>
      </section>

		<section id="memorias">
			<div class="container">
				<div class="text-start text-lg-center mb-5">
					<h2>Memorias de la fundación</h2>
               <p class="fs-6">En esta sección podrás encontrar el detalle de nuestra gestión a lo largo de los años, conocer cómo nos hemos desempeñado en cada paso que hemos dado y nuestra forma de trabajar cada día.</p>
				</div>
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/img/transparencia-memoria-fundacion.jpg" class="img-fluid mb-5 mb-lg-0" alt="memoria fundación coanil">
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<h3 class="h5">Memoria año a año</h3>
						<ul class="dd-list mb-5">
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Educacional Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
							<li><a href="#">Memoria Fundación Coanil 2021</a></li>
						</ul>
						<div class="text-center text-lg-start">
							<a href="#" type="button" class="btn btn-secondary">Ver más</a>
						</div>
					</div>
				</div>
			</div>
      </section>

		<section id="fecus" class="t-fecus text-white bg-gradient diagonal-bottom py-5 py-lg-6">
			<div class="container">
				<div class="row flex-lg-row-reverse row-img-txt align-items-center">
					<div class="col-12 col-lg-6 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/transparencia-fecu.jpg" class="img-fluid" alt="fecu social">
					</div>
					<div class="col-12 col-lg-6">
						<div class="mb-5">
							<h2>Fecu Social</h2>
							<p>Acá encontrarás las <b>Fichas de Estadística Codificada Uniforme</b> por año que trabajamos en fundación Coanil.</p>
						</div>
						<h3 class="h5">Todas los fecus ordenados por año</h3>
						<ul class="dd-list mb-5">
							<li><a href="#">Fecu Social 2021</a></li>
							<li><a href="#">Fecu Social 2019</a></li>
							<li><a href="#">Fecu Social 2018</a></li>
							<li><a href="#">Fecu Social 2017</a></li>
							<li><a href="#">Fecu Social 2016</a></li>
						</ul>
						<div class="text-center text-lg-start">
							<a href="#" type="button" class="btn btn-white">Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section id="estados-financieros">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-4 border-end-lg border-5">
						<h2>Estados Financieros</h2>
					</div>
					<div class="col-12 col-lg-8">
						<p>Fundación Coanil requiere más de $9.000 millones de pesos, cada año, para beneficiar a las más de 4.000 personas que atiende en la actualidad. Debido a lo anterior y, en calidad de institución colaboradora del Estado, Coanil obtiene parte de su financiamiento a través de los Ministerios de Educación, Desarrollo Social, Salud y de Justicia.</p>
						<p>En los siguientes documentos se encuentra la información, de manera transparente, de nuestros Estados Financieros año a año:</p>
					</div>
				</div>
				<div class="balances-tributarios-container mt-5">
					<h3 class="h5 fw-bold text-start text-lg-center">Busca los balances tributarios por año</h3>
					<div class="row justify-content-between">
						<div class="col-12 col-lg-4 mb-4 mb-lg-0">
							<select class="form-select" name="" id="selectInforme">
								<option selected>Descargar informes anuales</option>
								<option value="">1</option>
								<option value="">2</option>
								<option value="">3</option>
								<option value="">4</option>
								<option value="">5</option>
							</select>
						</div>
						<div class="col-12 col-lg-4">
							<div class="input-group" id="searchInforme">
								<input type="text" class="form-control rounded-start me-n4" placeholder="Buscar" aria-describedby="btn-buscar-balances">
								<button class="btn btn-primary rounded" type="button" id="btn-buscar-balances" style="z-index: 5;">Buscar</button>
							</div>
						</div>
						<div class="col-12">
							<div  class="balances-tributarios-results">
								<?php for ($i=1; $i<=8; $i++) { ?>
									<div class="balance">
										<p>EEFF a septiembre 2022</p>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="documentos" class="bg-light py-5 py-lg-6 mb-0" style="--bscoanil-bg-opacity: 0.4;">
			<div class="container">
				<div class="row flex-lg-row-reverse row-img-txt align-items-center">
					<div class="col-12 col-lg-6 col-img my-5 my-lg-0">
						<img src="<?php echo get_template_directory_uri(); ?>/img/transparencia-docs.jpg" class="img-fluid" alt="documentos">
					</div>
					<div class="col-12 col-lg-6">
						<div class="mb-5">
							<h2>Otros documentos</h2>
							<p>La fe pública y el valor otorgado a nuestro quehacer es uno de los activos más importantes, es por ello que en nuestro rol de institución colaboradora de la función del Estado debemos demostrar nuestro paso a paso y los documentos que hacen a nuestra gestión</p>
						</div>
						<ul class="dd-list mb-5">
							<li><a href="#">Certificado de vigencia</a></li>
							<li><a href="#">Convenio crecer en Inclusión Laboral</a></li>
							<li><a href="#">Convenio Inclusión Laboral, Una Oportunidad</a></li>
						</ul>
						<a href="#" type="button" class="btn btn-secondary">Descargar todo</a>
					</div>
				</div>
			</div>
		</section>

	</main><!-- #main -->

<?php
get_footer();
