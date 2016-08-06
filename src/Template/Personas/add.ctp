<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['controller' => 'FichasTecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['controller' => 'FichasTecnicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Repartos'), ['controller' => 'Repartos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reparto'), ['controller' => 'Repartos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personas form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Add Persona') ?></legend>
        <?php
            echo $this->Form->input('per_primer_nombre');
            echo $this->Form->input('per_segundo_nombre');
            echo $this->Form->input('per_primer_apellido');
            echo $this->Form->input('per_segundo_apellido');
            echo $this->Form->input('per_sexo');
            echo $this->Form->input('per_fecha_nac', ['empty' => true]);
            echo $this->Form->input('per_fecha_falle', ['empty' => true]);
            echo $this->Form->input('per_ruta_foto');
            echo $this->Form->input('per_biografia');
            echo $this->Form->input('per_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
