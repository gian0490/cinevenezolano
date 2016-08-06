<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instituto'), ['action' => 'edit', $instituto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instituto'), ['action' => 'delete', $instituto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instituto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Institutos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instituto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['controller' => 'Financiamientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['controller' => 'Financiamientos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="institutos view large-9 medium-8 columns content">
    <h3><?= h($instituto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Ins Tipo') ?></th>
            <td><?= h($instituto->ins_tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Ins Nombre') ?></th>
            <td><?= h($instituto->ins_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Ins Mostrar') ?></th>
            <td><?= h($instituto->ins_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($instituto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Financiamientos') ?></h4>
        <?php if (!empty($instituto->financiamientos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Instituto Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Fin Monto') ?></th>
                <th><?= __('Fin Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($instituto->financiamientos as $financiamientos): ?>
            <tr>
                <td><?= h($financiamientos->pelicula_id) ?></td>
                <td><?= h($financiamientos->instituto_id) ?></td>
                <td><?= h($financiamientos->id) ?></td>
                <td><?= h($financiamientos->fin_monto) ?></td>
                <td><?= h($financiamientos->fin_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Financiamientos', 'action' => 'view', $financiamientos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Financiamientos', 'action' => 'edit', $financiamientos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financiamientos', 'action' => 'delete', $financiamientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financiamientos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
