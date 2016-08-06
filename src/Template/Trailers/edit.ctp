<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $trailer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $trailer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Trailers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="trailers form large-9 medium-8 columns content">
    <?= $this->Form->create($trailer) ?>
    <fieldset>
        <legend><?= __('Edit Trailer') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id');
            echo $this->Form->input('tra_ruta_trailer');
            echo $this->Form->input('tra_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
