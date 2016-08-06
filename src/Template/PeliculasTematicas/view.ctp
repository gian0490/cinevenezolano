<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Peliculas Tematica'), ['action' => 'edit', $peliculasTematica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Peliculas Tematica'), ['action' => 'delete', $peliculasTematica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasTematica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas Tematicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Peliculas Tematica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tematicas'), ['controller' => 'Tematicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tematica'), ['controller' => 'Tematicas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peliculasTematicas view large-9 medium-8 columns content">
    <h3><?= h($peliculasTematica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $peliculasTematica->has('pelicula') ? $this->Html->link($peliculasTematica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasTematica->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tematica') ?></th>
            <td><?= $peliculasTematica->has('tematica') ? $this->Html->link($peliculasTematica->tematica->id, ['controller' => 'Tematicas', 'action' => 'view', $peliculasTematica->tematica->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Tem Id') ?></th>
            <td><?= h($peliculasTematica->pel_tem_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($peliculasTematica->id) ?></td>
        </tr>
    </table>
</div>
