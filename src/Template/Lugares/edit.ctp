<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $lugare->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $lugare->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lugares form large-9 medium-8 columns content">
    <?= $this->Form->create($lugare) ?>
    <fieldset>
        <legend><?= __('Edit Lugare') ?></legend>
        <?php
            echo $this->Form->input('lugar_id', ['options' => $lugares, 'empty' => true]);
            echo $this->Form->input('lug_tipo');
            echo $this->Form->input('lug_nombre');
            echo $this->Form->input('lug_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
