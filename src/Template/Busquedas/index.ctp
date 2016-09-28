<!-- row para poner la busquedad-->
<div id="">
<form class="form-inline">
    <div class="row">
        <div class="col-md-3">

            <div class="form-group">
              <?php
             //echo $peliculas;
            /* foreach ($peliculas as $pelicula):
                echo $pelicula->pel_titulo;
             endforeach;*/
               ?>
                 <select   id="select_peliculas" class="combobox_peliculas form-control" name="inline">

                    <option value="" selected="selected">Nombre de Pelicula</option>
                    <?php foreach ($peliculas as $pelicula): ?>
                    <option value=<?=h($pelicula->id); ?> > <?= h($pelicula->pel_titulo);//$this->Html->link($pelicula->pel_mombre,
                 //['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
            <br>
            <div   class="form-group">

                <select id="select_director" class="combobox_director form-control" name="inline">

                    <option  value="" selected="selected">Director</option>
                    <?php foreach ($personas as $persona): ?>
                    <option value="AL"> <?= h($persona->per_primer_nombre);//$this->Html->link($persona->per_nombre,
            //['controller' => 'Busqueda', 'action' => 'view', $persona->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
              <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Año Inicio</option>
                    <?php foreach ($fechas_ini as $fecha_ini): ?>
                    <option value="AL"> <?= h($fecha_ini->pel_ano);//$this->Html->link($pelicula,
            //['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
            <br>
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Año fin</option>
                    <?php foreach ($fechas_fin as $fecha_fin): ?>
                    <option value="AL"> <?= h($fecha_fin->pel_ano); //$this->Html->link($pelicula,
          //  ['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">

                <select id="select_genero" class="combobox form-control" name="inline">
                    <option value="" selected="selected">Genero</option>
                    <?php foreach ($generos as $genero): ?>
                    <option value=<?=h($genero->id); ?>> <?=($genero->gen_nombre); //$this->Html->link($genero->gen_nombre,
            //['controller' => 'Busqueda', 'action' => 'view', $genero->id]) ?></option>
                     <?php endforeach; ?>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <select id="select_tematica" class="combobox form-control" name="inline">
                    <option value="" selected="selected">Tematica</option>
                    <?php foreach ($tematicas as $tematica): ?>
                    <option value=<?=h($tematica->id); ?>> <?= h($tematica->tem_nombre);//$this->Html->link($tematica->tem_nombre,
            //['controller' => 'Busqueda', 'action' => 'view', $tematica->id]) ?></option>
                     <?php endforeach; ?>
                    </select>
            </div>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
</div>
