<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Institutos'), ['controller' => 'Institutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instituto'), ['controller' => 'Institutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="financiamientos index large-9 medium-8 columns content">
    <h3><?= __('Financiamientos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('instituto_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('fin_monto') ?></th>
                <th><?= $this->Paginator->sort('fin_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($financiamientos as $financiamiento): ?>
            <tr>
                <td><?= $financiamiento->has('pelicula') ? $this->Html->link($financiamiento->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $financiamiento->pelicula->id]) : '' ?></td>
                <td><?= $financiamiento->has('instituto') ? $this->Html->link($financiamiento->instituto->id, ['controller' => 'Institutos', 'action' => 'view', $financiamiento->instituto->id]) : '' ?></td>
                <td><?= $this->Number->format($financiamiento->id) ?></td>
                <td><?= $this->Number->format($financiamiento->fin_monto) ?></td>
                <td><?= h($financiamiento->fin_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $financiamiento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $financiamiento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $financiamiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financiamiento->id)]) ?>
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
