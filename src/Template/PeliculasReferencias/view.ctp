<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Peliculas Referencia'), ['action' => 'edit', $peliculasReferencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Peliculas Referencia'), ['action' => 'delete', $peliculasReferencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasReferencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas Referencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Peliculas Referencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peliculasReferencias view large-9 medium-8 columns content">
    <h3><?= h($peliculasReferencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $peliculasReferencia->has('pelicula') ? $this->Html->link($peliculasReferencia->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasReferencia->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Referencia') ?></th>
            <td><?= $peliculasReferencia->has('referencia') ? $this->Html->link($peliculasReferencia->referencia->id, ['controller' => 'Referencias', 'action' => 'view', $peliculasReferencia->referencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Ref Mostrar') ?></th>
            <td><?= h($peliculasReferencia->pel_ref_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peliculasReferencia->id) ?></td>
        </tr>
    </table>
</div>
