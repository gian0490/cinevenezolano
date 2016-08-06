<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Referencias Crictica'), ['action' => 'edit', $referenciasCrictica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Referencias Crictica'), ['action' => 'delete', $referenciasCrictica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referenciasCrictica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Referencias Cricticas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referencias Crictica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="referenciasCricticas view large-9 medium-8 columns content">
    <h3><?= h($referenciasCrictica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Crictica') ?></th>
            <td><?= $referenciasCrictica->has('crictica') ? $this->Html->link($referenciasCrictica->crictica->id, ['controller' => 'Cricticas', 'action' => 'view', $referenciasCrictica->crictica->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Referencia') ?></th>
            <td><?= $referenciasCrictica->has('referencia') ? $this->Html->link($referenciasCrictica->referencia->id, ['controller' => 'Referencias', 'action' => 'view', $referenciasCrictica->referencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Ref Cri Mostrar') ?></th>
            <td><?= h($referenciasCrictica->ref_cri_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($referenciasCrictica->id) ?></td>
        </tr>
    </table>
</div>
