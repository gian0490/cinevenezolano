<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $reparto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $reparto->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Repartos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="repartos form large-9 medium-8 columns content">
    <?= $this->Form->create($reparto) ?>
    <fieldset>
        <legend><?= __('Edit Reparto') ?></legend>
        <?php
            echo $this->Form->input('persona_id', ['options' => $personas]);
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('rep_personaje');
            echo $this->Form->input('rep_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
