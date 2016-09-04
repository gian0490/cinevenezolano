<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css(array('fonts','bootstrap.min','estilo_carrucel','estilo_general','boostrap-submenu.min','boostrap-theme.min','boostrap-combobox'));?>
    <?= $this->Html->script(array('jquery','Main','Carrusel','bootstrap.min','bootstrap-submenu','bootstrap-combobox') ); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

  <div class="social">
   <ul>
       <li>
           <a href="https://www.facebook.com/CIC-UCAB-1626210684296485/timeline" target="_blank" class="icon-facebook"></a>
       </li>
       <li>
           <a href="https://twitter.com/cic_ucab" target="_blank" class="icon-twitter"></a>
       </li>
       <li>
           <a href="mailto:contacto@falconmasters.com" class="icon-youtube"></a>
       </li>
   </ul>
</div>
<div class="container">
 			<div class="row">

 		<?php //echo $this->element(array('header_usu','Marquesina_pc','Modales','Marquesina_cell')); ?>
 		<?php echo $this->element('header_usu'); ?>
 		<?php // echo $this->element('Marquesina_pc'); ?>
 		<?php //echo  $this->element('Modales'); ?>
 		<?php //echo $this->element('Marquesina_cell'); ?>

 			</div>
 			<!--  row primero -->
 	</div>

    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <div class="container">
    <div class="row">
<?php  echo $this->element('footer_usu'); ?>
</div>
</div>
</body>
</html>
