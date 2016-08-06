<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $instituto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $instituto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Institutos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['controller' => 'Financiamientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['controller' => 'Financiamientos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="institutos form large-9 medium-8 columns content">
    <?= $this->Form->create($instituto) ?>
    <fieldset>
        <legend><?= __('Edit Instituto') ?></legend>
        <?php
            echo $this->Form->input('ins_tipo');
            echo $this->Form->input('ins_nombre');
            echo $this->Form->input('ins_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
