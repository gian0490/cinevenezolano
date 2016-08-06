<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Institutos'), ['controller' => 'Institutos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instituto'), ['controller' => 'Institutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="financiamientos form large-9 medium-8 columns content">
    <?= $this->Form->create($financiamiento) ?>
    <fieldset>
        <legend><?= __('Add Financiamiento') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('instituto_id', ['options' => $institutos]);
            echo $this->Form->input('fin_monto');
            echo $this->Form->input('fin_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
