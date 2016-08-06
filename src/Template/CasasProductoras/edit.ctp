<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $casasProductora->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $casasProductora->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Casas Productoras'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="casasProductoras form large-9 medium-8 columns content">
    <?= $this->Form->create($casasProductora) ?>
    <fieldset>
        <legend><?= __('Edit Casas Productora') ?></legend>
        <?php
            echo $this->Form->input('cas_pro_nombre');
            echo $this->Form->input('cas_pro_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
