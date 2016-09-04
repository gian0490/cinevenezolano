<?php  $listaPeliculas = $this->requestAction('/Peliculas/lista'); ?>
<?php  $cantidad_peliculas = $this->requestAction('/Peliculas/tamano_lista',array('return'));?>

<?php  //$listaPeliculas = $this->requestAction(array('controller' => 'Peliculas','action' =>'lista' ),array('return')); ?>
<?php  //$cantidad_peliculas = $this->requestAction(array('controller' => 'Peliculas','action' =>'tamano_lista' ),array('return'));


        //echo $listaPeliculas;

        $opcion_completar     = $cantidad_peliculas % 4;
        $contador_fotos_seg   = 0;
        $contador_fotos       = 0;

        $bool_seg_principal   = 0;
        $bool_seg             = 0;
        $foto_1               = "";
        $foto_2               = "";
        $foto_3               = "";

?>


<div class=" clearfix container">
    <div id="marque" class="row nada_marquesina">
        <div class="carousel-reviews broun-block hidden-sm-down visible-md visible-lg ">

            <div id="carousel-reviews" class="  carousel slide" data-ride="carousel">
                <div class="carousel-inner">

<?php   foreach ($listaPeliculas as $pelicula): ?>


            <?php  if($bool_seg_principal==0 && $bool_seg==0):  ?>
              <div class="item active">
                <?php
                    $bool_seg=1;
                    $bool_seg_principal=1;
                  ?>
            <?php  endif;  ?>


            <?php  if($bool_seg_principal==1 && $bool_seg==0):  ?>
                   <div class="item ">
                    <?php $bool_seg=1; ?>
            <?php  endif;  ?>

            <div class="col-md-3 col-sm-6 ">
              <a href="Menu_pelicula.php">
            <img alt="Nena saludame al diego" <?PHP echo 'src ="'.$pelicula['Pelicula']['PEL_RUTA_IMA_POSTER'].$pelicula['Pelicula']['PEL_IMA_POSTER'].'"' ?> width="213" height="259" class="img-rounded">
              </a>
           </div>

            <?php  $contador_fotos_seg=$contador_fotos_seg+1;  ?>
            <?php  $contador_fotos=$contador_fotos+1; ?>

            <?php  if($contador_fotos==1):
                      $foto_1 = 'src ="'.$pelicula['Pelicula']['PEL_RUTA_IMA_POSTER'].$pelicula['Pelicula']['PEL_IMA_POSTER'].'"';
                   endif;  ?>
            <?php  if($contador_fotos==2):
                      $foto_2 =   'src ="'.$pelicula['Pelicula']['PEL_RUTA_IMA_POSTER'].$pelicula['Pelicula']['PEL_IMA_POSTER'].'"'  ;
                   endif;  ?>
            <?php  if($contador_fotos==3):
                      $foto_3 = 'src ="'.$pelicula['Pelicula']['PEL_RUTA_IMA_POSTER'].$pelicula['Pelicula']['PEL_IMA_POSTER'].'"' ;
                   endif;  ?>
            <!-- if para cerrar los segmentos cuando llegue a cuatro foto  -->
            <?php  if($contador_fotos_seg==4):  ?>
                    </div>
                    <?php
                    $bool_seg=0;
                    $contador_fotos_seg=0;
                    ?>

            <?php  endif;  ?>

 <?php endforeach;  ?>

<?php switch ($contador_fotos_seg):
  case 1:   ?>
  <div class="col-md-3 col-sm-6 ">
    <a href="Menu_pelicula.php">
  <img alt="Nena saludame al diego" <?PHP echo $foto_1 ?> width="213" height="259" class="img-rounded">
    </a>
 </div>
 <div class="col-md-3 col-sm-6 ">
   <a href="Menu_pelicula.php">
 <img alt="Nena saludame al diego" <?PHP echo $foto_2 ?> width="213" height="259" class="img-rounded">
   </a>
</div>
<div class="col-md-3 col-sm-6 ">
  <a href="Menu_pelicula.php">
<img alt="Nena saludame al diego" <?PHP echo $foto_3 ?> width="213" height="259" class="img-rounded">
  </a>
</div>
      </div>
<?php break;?>
<?case 2:   ?>
<div class="col-md-3 col-sm-6 ">
  <a href="Menu_pelicula.php">
<img alt="Nena saludame al diego" <?PHP echo $foto_1 ?> width="213" height="259" class="img-rounded">
  </a>
</div>
<div class="col-md-3 col-sm-6 ">
  <a href="Menu_pelicula.php">
<img alt="Nena saludame al diego" <?PHP echo $foto_2 ?> width="213" height="259" class="img-rounded">
  </a>
</div>
      </div>
<?php break;?>
<?case 3:   ?>
<div class="col-md-3 col-sm-6 ">
  <a href="Menu_pelicula.php">
<img alt="Nena saludame al diego" <?PHP echo $foto_1 ?> width="213" height="259" class="img-rounded">
  </a>
</div>
      </div>
<?php break;?>

  <?php default:?>

 <?php endswitch;?>
</div>
<!-- carousel-inner -->
<a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a  class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>
<!-- carousel slide -->
</div>
<!-- carousel-reviews -->
</div>
<!--row -->
</div>
<!-- container-->
<br/>
<!--    </div>
</div>-->
