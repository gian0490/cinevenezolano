<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casas Productoras'), ['controller' => 'CasasProductoras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Casas Productora'), ['controller' => 'CasasProductoras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Guiones'), ['controller' => 'Guiones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Guione'), ['controller' => 'Guiones', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fichasTecnicas form large-9 medium-8 columns content">
    <?= $this->Form->create($fichasTecnica) ?>
    <fieldset>
        <legend><?= __('Add Fichas Tecnica') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('persona_id', ['options' => $personas, 'empty' => true]);
            echo $this->Form->input('casa_productora_id', ['options' => $casasProductoras, 'empty' => true]);
            echo $this->Form->input('tipo_cargo_id', ['options' => $guiones, 'empty' => true]);
            echo $this->Form->input('fic_tec_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
