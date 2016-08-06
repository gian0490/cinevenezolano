<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casas Productoras'), ['controller' => 'CasasProductoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Casas Productora'), ['controller' => 'CasasProductoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guiones'), ['controller' => 'Guiones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guione'), ['controller' => 'Guiones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fichasTecnicas index large-9 medium-8 columns content">
    <h3><?= __('Fichas Tecnicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('persona_id') ?></th>
                <th><?= $this->Paginator->sort('casa_productora_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_cargo_id') ?></th>
                <th><?= $this->Paginator->sort('fic_tec_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fichasTecnicas as $fichasTecnica): ?>
            <tr>
                <td><?= $fichasTecnica->has('pelicula') ? $this->Html->link($fichasTecnica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $fichasTecnica->pelicula->id]) : '' ?></td>
                <td><?= $this->Number->format($fichasTecnica->id) ?></td>
                <td><?= $fichasTecnica->has('persona') ? $this->Html->link($fichasTecnica->persona->id, ['controller' => 'Personas', 'action' => 'view', $fichasTecnica->persona->id]) : '' ?></td>
                <td><?= $fichasTecnica->has('casas_productora') ? $this->Html->link($fichasTecnica->casas_productora->id, ['controller' => 'CasasProductoras', 'action' => 'view', $fichasTecnica->casas_productora->id]) : '' ?></td>
                <td><?= $fichasTecnica->has('guione') ? $this->Html->link($fichasTecnica->guione->id, ['controller' => 'Guiones', 'action' => 'view', $fichasTecnica->guione->id]) : '' ?></td>
                <td><?= h($fichasTecnica->fic_tec_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $fichasTecnica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $fichasTecnica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $fichasTecnica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fichasTecnica->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
