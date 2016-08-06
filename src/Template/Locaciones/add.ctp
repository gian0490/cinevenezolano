<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Locaciones'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($locacione) ?>
    <fieldset>
        <legend><?= __('Add Locacione') ?></legend>
        <?php
            echo $this->Form->input('lugar_id', ['options' => $lugares]);
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('log_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
