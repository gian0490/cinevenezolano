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

$this->layout = false;
$cakeDescription = 'script';
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
    <?= $this->Html->meta('icon') ?>li


    <?= $this->Html->css(array('fonts','bootstrap.min','estilo_carrucel','estilo_general','bootstrap-submenu.min','bootstrap-theme.min','bootstrap-combobox','combobox'));?>
    <?= $this->Html->script(array('jquery','Main','Carrusel','bootstrap.min','bootstrap-submenu','bootstrap-combobox','combo') ); ?>
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
 		<?php// echo $this->element('Marquesina_pc'); ?>
 		<?php //echo  $this->element('Modales'); ?>
 		<?php //echo $this->element('Marquesina_cell'); ?>

 			</div>
 			<!--  row primero -->
 	</div>

  <div class="container">
        <div class="row">
            <div class=" clearfix col-md-6">
                <div class="panel panel-info" style="background-color:#292F33;">
                    <div style="background-color:#292F33; background-image:initial;" class="panel-heading">
                        <font color="#FFFFFF"><strong>NOTICIAS</strong></font>
                    </div>
                    <div class="panel-body">
                    <!--  <script language="javascript" type="text/javascript" src="http://rss.sindicacion.net/view_rss/b2ZkPSZvZm09MjAmb2Z4PXRydWU=/ZWJiPTI5MkYzMyZlYnQ9YWFhMWY0JmVmcz0zJmVmdD0xNCZldGI9MjkyRjMzJmV0dD00ZDNlYzkmZXc9NDAw/aD1odHRwcyUzQSUyRiUyRmNpbmVkZXZlbmV6dWVsYTIwMTEud29yZHByZXNzLmNvbSUyRmZlZWQlMkY="></script><a href="http://rss.sindicacion.net/" style="padding:3px 0px 3px 8px;text-indent:-8px;font:14px Times New Roman, serif;color:#aaa1f4;">RSS</a>-->

                    <?php

                 function getFeed($feed_url) {

                    $content = file_get_contents($feed_url);
                    $x = new SimpleXmlElement($content);

                    echo "<ul>";

                    foreach($x->channel->item as $entry) {
                      echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
                      }
                    echo "</ul>";
            }
            ?>
	      <?php


             getFeed("http://www.racotecnic.com/feed");


        ?>


                        <!--<div id="carousel-example-generic" class="carousel slide" data-ride="carousel_noticias">
                            <!-- Indicators
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="http://placehold.it/1200x550" alt="...">
                                    <div class="carousel-caption">
                                        <h3>Caption Text</h3>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>-->
                        <!-- Carousel -->
                    </div>
                    <!--  "panel-body  -->
                </div>
                <!--panel panel-info -->

            </div>
            <!-- fin de la primera columna col-md-6 -->


            <div class=" clearfix col-md-6">
                <a class="twitter-timeline" data-theme="dark" data-link-color="#008080" href="https://twitter.com/cic_ucab" data-widget-id="657229786876628993">Tweets de @cic_ucab </a>
                <script>
                    ! function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0],
                            p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script>
            </div>
        </div>
        <!--row -->




    </div>
    <!--container -->


    <div class="container">
    <div class="row">
<?php  echo $this->element('footer_usu'); ?>
</div>
</div>
</body>
</html>
