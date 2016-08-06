<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Peliculas Tematica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tematicas'), ['controller' => 'Tematicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tematica'), ['controller' => 'Tematicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculasTematicas index large-9 medium-8 columns content">
    <h3><?= __('Peliculas Tematicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('tematica_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pel_tem_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculasTematicas as $peliculasTematica): ?>
            <tr>
                <td><?= $peliculasTematica->has('pelicula') ? $this->Html->link($peliculasTematica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasTematica->pelicula->id]) : '' ?></td>
                <td><?= $peliculasTematica->has('tematica') ? $this->Html->link($peliculasTematica->tematica->id, ['controller' => 'Tematicas', 'action' => 'view', $peliculasTematica->tematica->id]) : '' ?></td>
                <td><?= $this->Number->format($peliculasTematica->id) ?></td>
                <td><?= h($peliculasTematica->pel_tem_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peliculasTematica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peliculasTematica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peliculasTematica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasTematica->id)]) ?>
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
