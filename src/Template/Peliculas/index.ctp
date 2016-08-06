<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['action' => 'add']) ?></li>
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
<div class="peliculas index large-9 medium-8 columns content">
    <h3><?= __('Peliculas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('trailer_id') ?></th>
                <th><?= $this->Paginator->sort('pel_titulo') ?></th>
                <th><?= $this->Paginator->sort('pel_ano') ?></th>
                <th><?= $this->Paginator->sort('pel_recaudo_estreno') ?></th>
                <th><?= $this->Paginator->sort('pel_recaudo_acumulado') ?></th>
                <th><?= $this->Paginator->sort('pel_espectadoresestreno') ?></th>
                <th><?= $this->Paginator->sort('pel_espectadores_acumulado') ?></th>
                <th><?= $this->Paginator->sort('pel_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculas as $pelicula): ?>
            <tr>
                <td><?= $this->Number->format($pelicula->id) ?></td>
                <td><?= $this->Number->format($pelicula->trailer_id) ?></td>
                <td><?= h($pelicula->pel_titulo) ?></td>
                <td><?= h($pelicula->pel_ano) ?></td>
                <td><?= $this->Number->format($pelicula->pel_recaudo_estreno) ?></td>
                <td><?= $this->Number->format($pelicula->pel_recaudo_acumulado) ?></td>
                <td><?= $this->Number->format($pelicula->pel_espectadoresestreno) ?></td>
                <td><?= $this->Number->format($pelicula->pel_espectadores_acumulado) ?></td>
                <td><?= h($pelicula->pel_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pelicula->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pelicula->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pelicula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
