<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instituto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['controller' => 'Financiamientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['controller' => 'Financiamientos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutos index large-9 medium-8 columns content">
    <h3><?= __('Institutos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ins_tipo') ?></th>
                <th><?= $this->Paginator->sort('ins_nombre') ?></th>
                <th><?= $this->Paginator->sort('ins_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($institutos as $instituto): ?>
            <tr>
                <td><?= $this->Number->format($instituto->id) ?></td>
                <td><?= h($instituto->ins_tipo) ?></td>
                <td><?= h($instituto->ins_nombre) ?></td>
                <td><?= h($instituto->ins_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instituto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instituto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instituto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instituto->id)]) ?>
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
