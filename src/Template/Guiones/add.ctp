<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Guiones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="guiones form large-9 medium-8 columns content">
    <?= $this->Form->create($guione) ?>
    <fieldset>
        <legend><?= __('Add Guione') ?></legend>
        <?php
            echo $this->Form->input('gui_tipo');
            echo $this->Form->input('gui_obra');
            echo $this->Form->input('gui_autor_obra');
            echo $this->Form->input('tip_car_nombre');
            echo $this->Form->input('tip_car_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
