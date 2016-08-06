<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lugares index large-9 medium-8 columns content">
    <h3><?= __('Lugares') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('lugar_id') ?></th>
                <th><?= $this->Paginator->sort('lug_tipo') ?></th>
                <th><?= $this->Paginator->sort('lug_nombre') ?></th>
                <th><?= $this->Paginator->sort('lug_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lugares as $lugare): ?>
            <tr>
                <td><?= $this->Number->format($lugare->id) ?></td>
                <td><?= $lugare->has('lugare') ? $this->Html->link($lugare->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $lugare->lugare->id]) : '' ?></td>
                <td><?= h($lugare->lug_tipo) ?></td>
                <td><?= h($lugare->lug_nombre) ?></td>
                <td><?= h($lugare->lug_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lugare->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lugare->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lugare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lugare->id)]) ?>
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
