<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Peliculas Genero'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculasGeneros index large-9 medium-8 columns content">
    <h3><?= __('Peliculas Generos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('genero_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pel_gen_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculasGeneros as $peliculasGenero): ?>
            <tr>
                <td><?= $peliculasGenero->has('pelicula') ? $this->Html->link($peliculasGenero->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasGenero->pelicula->id]) : '' ?></td>
                <td><?= $peliculasGenero->has('genero') ? $this->Html->link($peliculasGenero->genero->id, ['controller' => 'Generos', 'action' => 'view', $peliculasGenero->genero->id]) : '' ?></td>
                <td><?= $this->Number->format($peliculasGenero->id) ?></td>
                <td><?= h($peliculasGenero->pel_gen_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peliculasGenero->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peliculasGenero->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peliculasGenero->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasGenero->id)]) ?>
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
