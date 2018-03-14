<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;



?>

	<!-- Noticias Slider Carousel -->
  	<div class="container">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      		<ol class="carousel-indicators">
        	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
        	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
      		</ol>

      		<!-- Wrapper for slides -->
	      	<div class="carousel-inner">
	        	<div class="item active">
	          		<img src="img/9.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Promocion de nuestras carreras en Escuelas de Moreno</h2>
	         			</div>
	       		</div>
	        	<div class="item">
	          		<img src="img/10.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Pizza Party hecho por los aumnos de Gastronomia</h2>
	          			</div>
	        	</div>
	        	<div class="item">
	          		<img src="img/11.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Directivos del Instituto</h2>
	          			</div>
	        	</div>
	        	<div class="item">
	          		<img src="img/12.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Comenzaron las Inscripciones</h2>
	          			</div>
	        	</div>
	      	</div>

      		<!-- Controls -->
      		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"></span>
      		</a>
      		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        		<span class="glyphicon glyphicon-chevron-right"></span>
      		</a>
    	</div>
  	</div>



  	<!-- Seccion mas noticias - Bootstrapp -->

	<div class="container">
		<div class="row blog-row">
		   	<div class="jumbotron">
				<h1>Mas Noticias</h1>
			</div>
	<!-- acá arrancan los posts -->
	<?php foreach($posts as $post):	?>
	<div class="col-md-12 col-sm-12 col-xs-12 margin_bottom30">
		<div class="blog-content bg-white">
			<h3><?= h($post->title) ?></h3>
			<?= $post->content ?>
			<?= $this->Html->link(__('Continuar leyendo...'), ['controller' => 'posts', 'action' => 'view', $post->id]) ?>
			<p><span>Compartir: : 
			<a href="javascript::;"><i class="fa fa-facebook margin_left10" aria-hidden="true"></i></a>
			<a href="javascript::;"><i class="fa fa-twitter margin_left10" aria-hidden="true"></i></a>
		 	</span> 
			<span class="pull-right">Subido por : <strong> <?= h($post->author_name) ?></strong></span> </p>
		</div>
		<hr>
	</div>
	<?php endforeach; ?>
	<script src="https://use.fontawesome.com/1dec14be15.js"></script>

	<!-- Carreras -->

	<div class="jumbotron">
		<h1>Encontrá tu carrera</h1>
		<p>El espíritu del Instituto Superior es establecer una articulación entre el proceso de enseñanza y la sociedad actual, ya sea hacia la vinculación en lo laboral como hacia la capacitación académica que habilite la continuidad en carreras universitarias.<br>
		</p>
	</div>
	<section class="box">
		<div class="container">
			<div class="row">				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="services">
							<div class="icons">
								<img src="img/1.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Administracion General</h4>	
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>
					</div>
					<hr>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="services">
							<div class="icons">
								<img src="img/4.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Análisis de Sistemas</h4>	
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>
					</div>
					<hr>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
						<div class="services">											<div class="icons">
								<img src="img/6.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Automatización, Control y Robótica</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<div class="services">											<div class="icons">
								<img src="img/3.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Servicios Gastronómicos</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>						
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.0s">
						<div class="services">											<div class="icons">
								<img src="img/7.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Industria Textil e Indumentaria</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.4s">
						<div class="services">											<div class="icons">
								<img src="img/5.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Logística</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.8s">
						<div class="services">											<div class="icons">
								<img src="img/8.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Turismo</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>					
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="3.2s">
						<div class="services">											<div class="icons">
								<img src="img/2.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Higiene y Seguridad en el trabajo</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>					
			</div>
		</div>
	</section>
