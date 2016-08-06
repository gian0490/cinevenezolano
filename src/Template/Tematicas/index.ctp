<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tematica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tematicas index large-9 medium-8 columns content">
    <h3><?= __('Tematicas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('tem_nombre') ?></th>
                <th><?= $this->Paginator->sort('tem_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tematicas as $tematica): ?>
            <tr>
                <td><?= $this->Number->format($tematica->id) ?></td>
                <td><?= h($tematica->tem_nombre) ?></td>
                <td><?= h($tematica->tem_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tematica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tematica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tematica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tematica->id)]) ?>
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
