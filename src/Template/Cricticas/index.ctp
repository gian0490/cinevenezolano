<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Critica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cricticas index large-9 medium-8 columns content">
    <h3><?= __('Cricticas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('cri_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($criticas as $critica): ?>
            <tr>
                <td><?= $this->Number->format($critica->id) ?></td>
                <td><?= $critica->has('pelicula') ? $this->Html->link($critica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $critica->pelicula->id]) : '' ?></td>
                <td><?= h($critica->cri_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $critica->id]) ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $critica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $critica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $critica->id)]) ?>
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
