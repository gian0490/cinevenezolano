<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Guione'), ['action' => 'edit', $guione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Guione'), ['action' => 'delete', $guione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $guione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Guiones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Guione'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="guiones view large-9 medium-8 columns content">
    <h3><?= h($guione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Gui Tipo') ?></th>
            <td><?= h($guione->gui_tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Gui Obra') ?></th>
            <td><?= h($guione->gui_obra) ?></td>
        </tr>
        <tr>
            <th><?= __('Gui Autor Obra') ?></th>
            <td><?= h($guione->gui_autor_obra) ?></td>
        </tr>
        <tr>
            <th><?= __('Tip Car Nombre') ?></th>
            <td><?= h($guione->tip_car_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tip Car Mostrar') ?></th>
            <td><?= h($guione->tip_car_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($guione->id) ?></td>
        </tr>
    </table>
</div>
