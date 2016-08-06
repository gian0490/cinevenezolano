<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Casas Productora'), ['action' => 'edit', $casasProductora->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Casas Productora'), ['action' => 'delete', $casasProductora->id], ['confirm' => __('Are you sure you want to delete # {0}?', $casasProductora->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Casas Productoras'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Casas Productora'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="casasProductoras view large-9 medium-8 columns content">
    <h3><?= h($casasProductora->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cas Pro Nombre') ?></th>
            <td><?= h($casasProductora->cas_pro_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Cas Pro Mostrar') ?></th>
            <td><?= h($casasProductora->cas_pro_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($casasProductora->id) ?></td>
        </tr>
    </table>
</div>
