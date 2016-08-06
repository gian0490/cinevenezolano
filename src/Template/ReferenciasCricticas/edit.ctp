<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $referenciasCrictica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $referenciasCrictica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Referencias Cricticas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="referenciasCricticas form large-9 medium-8 columns content">
    <?= $this->Form->create($referenciasCrictica) ?>
    <fieldset>
        <legend><?= __('Edit Referencias Crictica') ?></legend>
        <?php
            echo $this->Form->input('crictica_id', ['options' => $cricticas]);
            echo $this->Form->input('referencia_id', ['options' => $referencias]);
            echo $this->Form->input('ref_cri_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
