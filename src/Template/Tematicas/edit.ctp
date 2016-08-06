<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tematica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tematica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tematicas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tematicas form large-9 medium-8 columns content">
    <?= $this->Form->create($tematica) ?>
    <fieldset>
        <legend><?= __('Edit Tematica') ?></legend>
        <?php
            echo $this->Form->input('tem_nombre');
            echo $this->Form->input('tem_mostrar');
            echo $this->Form->input('peliculas._ids', ['options' => $peliculas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
