<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tematicas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tematicas form large-9 medium-8 columns content">
    <?= $this->Form->create($tematica) ?>
    <fieldset>
        <legend><?= __('Add Tematica') ?></legend>
        <?php
            echo $this->Form->input('tem_nombre');
            echo $this->Form->input('tem_mostrar');
            echo $this->Form->input('peliculas._ids', ['options' => $peliculas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
