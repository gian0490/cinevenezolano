<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Peliculas Referencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="peliculasReferencias index large-9 medium-8 columns content">
    <h3><?= __('Peliculas Referencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('referencia_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('pel_ref_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($peliculasReferencias as $peliculasReferencia): ?>
            <tr>
                <td><?= $peliculasReferencia->has('pelicula') ? $this->Html->link($peliculasReferencia->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $peliculasReferencia->pelicula->id]) : '' ?></td>
                <td><?= $peliculasReferencia->has('referencia') ? $this->Html->link($peliculasReferencia->referencia->id, ['controller' => 'Referencias', 'action' => 'view', $peliculasReferencia->referencia->id]) : '' ?></td>
                <td><?= $this->Number->format($peliculasReferencia->id) ?></td>
                <td><?= h($peliculasReferencia->pel_ref_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $peliculasReferencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $peliculasReferencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $peliculasReferencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculasReferencia->id)]) ?>
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
