

<select  class="combobox form-control" name="inline">
    <option  value="" selected="selected">Director</option>
    <?php //foreach ($personas as $persona): ?>
    <option value="AL"> <?= $personas;//$this->Html->link($persona->per_nombre,
//['controller' => 'Busqueda', 'action' => 'view', $persona->id]) ?></option>
     <?php// endforeach; ?>

</select>
