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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
	<head>

<!-- ACA EMPIEZA MI BARDO LINDO :D -->

		<meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> <title>ISFT N° 179 - "Dr. Carlos Pellegrinni"</title> <!-- Bootstrap --> <link href="css/bootstrap.min.css" rel="stylesheet">
	
		<?= $this->Html->css(['bootstrap.min', 'animate.min', 'font-awesome.min', 'style']) ?>
		<?= $this->Html->script(['jquery-2.1.1.min', 'bootstrap.min', 'wow.min.js', 'jquery.easing.1.3', 'jquery.bxslider.min.js', 'jquery.isotope.min', 'fancybox/jquery.fancybox.pack', 'functions', ]) ?>

	</head>
	<body>
		<!-- Menu Bootstrap -->
		<?= $this->element('header') ?>
	    <?= $this->Flash->render() ?>
	    
    	    <?= $this->fetch('content') ?>
		<!-- Comienzo del pie de pagina -->
		<?= $this->element('footer') ?>
	</body>
</html>
