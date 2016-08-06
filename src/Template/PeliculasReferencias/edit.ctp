<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $peliculasReferencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasReferencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Peliculas Referencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculasReferencias form large-9 medium-8 columns content">
    <?= $this->Form->create($peliculasReferencia) ?>
    <fieldset>
        <legend><?= __('Edit Peliculas Referencia') ?></legend>
        <?php
            echo $this->Form->input('pelicula_id', ['options' => $peliculas]);
            echo $this->Form->input('referencia_id', ['options' => $referencias]);
            echo $this->Form->input('pel_ref_mostrar');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
