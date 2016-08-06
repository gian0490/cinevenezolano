<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Fichas Tecnica'), ['action' => 'edit', $fichasTecnica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Fichas Tecnica'), ['action' => 'delete', $fichasTecnica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fichasTecnica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Casas Productoras'), ['controller' => 'CasasProductoras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Casas Productora'), ['controller' => 'CasasProductoras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Guiones'), ['controller' => 'Guiones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guione'), ['controller' => 'Guiones', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fichasTecnicas view large-9 medium-8 columns content">
    <h3><?= h($fichasTecnica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $fichasTecnica->has('pelicula') ? $this->Html->link($fichasTecnica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $fichasTecnica->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Persona') ?></th>
            <td><?= $fichasTecnica->has('persona') ? $this->Html->link($fichasTecnica->persona->id, ['controller' => 'Personas', 'action' => 'view', $fichasTecnica->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Casas Productora') ?></th>
            <td><?= $fichasTecnica->has('casas_productora') ? $this->Html->link($fichasTecnica->casas_productora->id, ['controller' => 'CasasProductoras', 'action' => 'view', $fichasTecnica->casas_productora->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Guione') ?></th>
            <td><?= $fichasTecnica->has('guione') ? $this->Html->link($fichasTecnica->guione->id, ['controller' => 'Guiones', 'action' => 'view', $fichasTecnica->guione->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Fic Tec Mostrar') ?></th>
            <td><?= h($fichasTecnica->fic_tec_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($fichasTecnica->id) ?></td>
        </tr>
    </table>
</div>
