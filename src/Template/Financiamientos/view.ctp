<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Financiamiento'), ['action' => 'edit', $financiamiento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Financiamiento'), ['action' => 'delete', $financiamiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financiamiento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Institutos'), ['controller' => 'Institutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituto'), ['controller' => 'Institutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="financiamientos view large-9 medium-8 columns content">
    <h3><?= h($financiamiento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $financiamiento->has('pelicula') ? $this->Html->link($financiamiento->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $financiamiento->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Instituto') ?></th>
            <td><?= $financiamiento->has('instituto') ? $this->Html->link($financiamiento->instituto->id, ['controller' => 'Institutos', 'action' => 'view', $financiamiento->instituto->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fin Mostrar') ?></th>
            <td><?= h($financiamiento->fin_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($financiamiento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Fin Monto') ?></th>
            <td><?= $this->Number->format($financiamiento->fin_monto) ?></td>
        </tr>
    </table>
</div>
