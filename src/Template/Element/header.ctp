<nav class="navbar-default" role="presentation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
			<span class="sr-only">Noticias</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/isft/"><span>ISFT N° 179</span></a>
		</div>
		<div class="navbar-collapse collapse">							
			<div class="menu">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation">
						<?= $this->Html->link('Institucional', '/pages/historia') ?>
					</li>
					<li role="presentation">	
						<?= $this->Html->link('Carreras', '/pages/carreras') ?>
					</li>
					<li role="presentation">
						<?= $this->Html->link('Concursos', '/contests') ?>
					</li>
					<li role="presentation">
						<?= $this->Html->link('Requisitos', '/pages/requisitos') ?>
					</li>
					<li role="presentation">
						<?= $this->Html->link('Ubicacion', '/pages/contacto') ?>
					</li>
     					<li>
						<?= $this->Html->link('Login', '/users/login') ?>
					</li>
				</ul>
			</div>
		</div>			
	</div>
</nav>
