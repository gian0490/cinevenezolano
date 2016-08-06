<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Reparto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="repartos index large-9 medium-8 columns content">
    <h3><?= __('Repartos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('persona_id') ?></th>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('rep_personaje') ?></th>
                <th><?= $this->Paginator->sort('rep_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($repartos as $reparto): ?>
            <tr>
                <td><?= $reparto->has('persona') ? $this->Html->link($reparto->persona->id, ['controller' => 'Personas', 'action' => 'view', $reparto->persona->id]) : '' ?></td>
                <td><?= $reparto->has('pelicula') ? $this->Html->link($reparto->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $reparto->pelicula->id]) : '' ?></td>
                <td><?= $this->Number->format($reparto->id) ?></td>
                <td><?= h($reparto->rep_personaje) ?></td>
                <td><?= h($reparto->rep_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $reparto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reparto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reparto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reparto->id)]) ?>
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
