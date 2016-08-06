<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Guione'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="guiones index large-9 medium-8 columns content">
    <h3><?= __('Guiones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('gui_tipo') ?></th>
                <th><?= $this->Paginator->sort('gui_obra') ?></th>
                <th><?= $this->Paginator->sort('gui_autor_obra') ?></th>
                <th><?= $this->Paginator->sort('tip_car_nombre') ?></th>
                <th><?= $this->Paginator->sort('tip_car_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($guiones as $guione): ?>
            <tr>
                <td><?= $this->Number->format($guione->id) ?></td>
                <td><?= h($guione->gui_tipo) ?></td>
                <td><?= h($guione->gui_obra) ?></td>
                <td><?= h($guione->gui_autor_obra) ?></td>
                <td><?= h($guione->tip_car_nombre) ?></td>
                <td><?= h($guione->tip_car_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $guione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $guione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $guione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guione->id)]) ?>
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
