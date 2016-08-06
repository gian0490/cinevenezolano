<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pelicula->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Trailers'), ['controller' => 'Trailers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Trailer'), ['controller' => 'Trailers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['controller' => 'FichasTecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['controller' => 'FichasTecnicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['controller' => 'Financiamientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['controller' => 'Financiamientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locaciones'), ['controller' => 'Locaciones', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Locacione'), ['controller' => 'Locaciones', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Repartos'), ['controller' => 'Repartos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reparto'), ['controller' => 'Repartos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tematicas'), ['controller' => 'Tematicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tematica'), ['controller' => 'Tematicas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculas form large-9 medium-8 columns content">
    <?= $this->Form->create($pelicula) ?>
    <fieldset>
        <legend><?= __('Edit Pelicula') ?></legend>
        <?php
            echo $this->Form->input('trailer_id');
            echo $this->Form->input('pel_titulo');
            echo $this->Form->input('pel_ano');
            echo $this->Form->input('pel_sinopsis');
            echo $this->Form->input('pel_recaudo_estreno');
            echo $this->Form->input('pel_recaudo_acumulado');
            echo $this->Form->input('pel_espectadoresestreno');
            echo $this->Form->input('pel_espectadores_acumulado');
            echo $this->Form->input('pel_ruta_ima_captura');
            echo $this->Form->input('pel_ruta_ima_poster');
            echo $this->Form->input('pel_ruta_pelicula');
            echo $this->Form->input('pel_mostrar');
            echo $this->Form->input('generos._ids', ['options' => $generos]);
            echo $this->Form->input('referencias._ids', ['options' => $referencias]);
            echo $this->Form->input('tematicas._ids', ['options' => $tematicas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
