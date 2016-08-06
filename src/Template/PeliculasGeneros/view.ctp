<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Peliculas Genero'), ['action' => 'edit', $peliculasGenero->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Peliculas Genero'), ['action' => 'delete', $peliculasGenero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasGenero->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas Generos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Peliculas Genero'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peliculasGeneros view large-9 medium-8 columns content">
    <h3><?= h($peliculasGenero->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $peliculasGenero->has('pelicula') ? $this->Html->link($peliculasGenero->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasGenero->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Genero') ?></th>
            <td><?= $peliculasGenero->has('genero') ? $this->Html->link($peliculasGenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $peliculasGenero->genero->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Gen Mostrar') ?></th>
            <td><?= h($peliculasGenero->pel_gen_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peliculasGenero->id) ?></td>
        </tr>
    </table>
</div>
