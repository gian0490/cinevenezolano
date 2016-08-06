<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Trailer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trailers index large-9 medium-8 columns content">
    <h3><?= __('Trailers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('tra_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($trailers as $trailer): ?>
            <tr>
                <td><?= $this->Number->format($trailer->id) ?></td>
                <td><?= $this->Number->format($trailer->pelicula_id) ?></td>
                <td><?= h($trailer->tra_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $trailer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $trailer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $trailer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trailer->id)]) ?>
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
