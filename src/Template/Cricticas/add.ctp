<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Criticas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criticas form large-9 medium-8 columns content">
    <?= $this->Form->create($crictica) ?>
    <fieldset>
        <legend><?= __('Add Critica') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('cri_descripcion');
            echo $this->Form->input('cri_mostrar');
            echo $this->Form->input('referencias._ids', ['options' => $referencias]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
