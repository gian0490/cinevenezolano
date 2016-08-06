<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peliculasTematica->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasTematica->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Peliculas Tematicas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tematicas'), ['controller' => 'Tematicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tematica'), ['controller' => 'Tematicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculasTematicas form large-9 medium-8 columns content">
    <?= $this->Form->create($peliculasTematica) ?>
    <fieldset>
        <legend><?= __('Edit Peliculas Tematica') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('tematica_id', ['options' => $tematicas]);
            echo $this->Form->input('pel_tem_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
