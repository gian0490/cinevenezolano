<!-- row para poner la busquedad-->
<form class="form-inline">
    <div class="row">
        <div class="col-md-3">

            <div class="form-group">

                <select class="combobox form-control" name="inline">

                    <option value="" selected="selected">Nombre de Pelicula</option>
                    <?php foreach ($peliculas as $pelicula): ?>
                    <option value="AL"> <?= $this->Html->link($pelicula->pel_mombre,
            ['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
            <br>
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Director</option>
                    <?php foreach ($personas as $persona): ?>
                    <option value="AL"> <?= $this->Html->link($persona->per_nombre,
            ['controller' => 'Busqueda', 'action' => 'view', $persona->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Año Inicio</option>
                    <?php foreach ($peliculas as $pelicula): ?>
                    <option value="AL"> <?= $this->Html->link($pelicula,
            ['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>

                </select>
            </div>
            <br>
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Año fin</option>
                    <?php foreach ($peliculas as $pelicula): ?>
                    <option value="AL"> <?= $this->Html->link($pelicula,
            ['controller' => 'Busqueda', 'action' => 'view', $pelicula->id]) ?></option>
                     <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Genero</option>
                    <?php foreach ($generos as $genero): ?>
                    <option value="AL"> <?= $this->Html->link($genero->gen_nombre,
            ['controller' => 'Busqueda', 'action' => 'view', $genero->id]) ?></option>
                     <?php endforeach; ?>
                    </select>
            </div>
            <br>
            <div class="form-group">
                <select class="combobox form-control" name="inline">
                    <option value="" selected="selected">Tematica</option>
                    <?php foreach ($tematicas as $tematica): ?>
                    <option value="AL"> <?= $this->Html->link($tematica->tem_nombre,
            ['controller' => 'Busqueda', 'action' => 'view', $tematica->id]) ?></option>
                     <?php endforeach; ?>
                    </select>
            </div>
        </div>

        <div class="col-md-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>
