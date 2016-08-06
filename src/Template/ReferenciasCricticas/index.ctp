<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Referencias Crictica'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="referenciasCricticas index large-9 medium-8 columns content">
    <h3><?= __('Referencias Cricticas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('crictica_id') ?></th>
                <th><?= $this->Paginator->sort('referencia_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('ref_cri_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($referenciasCricticas as $referenciasCrictica): ?>
            <tr>
                <td><?= $referenciasCrictica->has('crictica') ? $this->Html->link($referenciasCrictica->crictica->id, ['controller' => 'Cricticas', 'action' => 'view', $referenciasCrictica->crictica->id]) : '' ?></td>
                <td><?= $referenciasCrictica->has('referencia') ? $this->Html->link($referenciasCrictica->referencia->id, ['controller' => 'Referencias', 'action' => 'view', $referenciasCrictica->referencia->id]) : '' ?></td>
                <td><?= $this->Number->format($referenciasCrictica->id) ?></td>
                <td><?= h($referenciasCrictica->ref_cri_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $referenciasCrictica->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $referenciasCrictica->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $referenciasCrictica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referenciasCrictica->id)]) ?>
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
