<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $referencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $referencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="referencias form large-9 medium-8 columns content">
    <?= $this->Form->create($referencia) ?>
    <fieldset>
        <legend><?= __('Edit Referencia') ?></legend>
        <?php
            echo $this->Form->input('ref_ruta_web');
            echo $this->Form->input('ref_descripcion');
            echo $this->Form->input('ref_mostrar');
            echo $this->Form->input('peliculas._ids', ['options' => $peliculas]);
            echo $this->Form->input('cricticas._ids', ['options' => $cricticas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
