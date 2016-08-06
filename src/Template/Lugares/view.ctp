<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lugare'), ['action' => 'edit', $lugare->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lugare'), ['action' => 'delete', $lugare->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lugare->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lugares'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugare'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lugares view large-9 medium-8 columns content">
    <h3><?= h($lugare->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lugare') ?></th>
            <td><?= $lugare->has('lugare') ? $this->Html->link($lugare->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $lugare->lugare->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Lug Tipo') ?></th>
            <td><?= h($lugare->lug_tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Lug Nombre') ?></th>
            <td><?= h($lugare->lug_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Lug Mostrar') ?></th>
            <td><?= h($lugare->lug_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($lugare->id) ?></td>
        </tr>
    </table>
</div>
