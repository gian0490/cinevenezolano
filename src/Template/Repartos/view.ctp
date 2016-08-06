<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Reparto'), ['action' => 'edit', $reparto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Reparto'), ['action' => 'delete', $reparto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reparto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Repartos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reparto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="repartos view large-9 medium-8 columns content">
    <h3><?= h($reparto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Persona') ?></th>
            <td><?= $reparto->has('persona') ? $this->Html->link($reparto->persona->id, ['controller' => 'Personas', 'action' => 'view', $reparto->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $reparto->has('pelicula') ? $this->Html->link($reparto->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $reparto->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Rep Personaje') ?></th>
            <td><?= h($reparto->rep_personaje) ?></td>
        </tr>
        <tr>
            <th><?= __('Rep Mostrar') ?></th>
            <td><?= h($reparto->rep_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($reparto->id) ?></td>
        </tr>
    </table>
</div>
