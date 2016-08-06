<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Locacione'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="locaciones index large-9 medium-8 columns content">
    <h3><?= __('Locaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('lugar_id') ?></th>
                <th><?= $this->Paginator->sort('pelicula_id') ?></th>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('log_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($locaciones as $locacione): ?>
            <tr>
                <td><?= $locacione->has('lugare') ? $this->Html->link($locacione->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $locacione->lugare->id]) : '' ?></td>
                <td><?= $locacione->has('pelicula') ? $this->Html->link($locacione->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $locacione->pelicula->id]) : '' ?></td>
                <td><?= $this->Number->format($locacione->id) ?></td>
                <td><?= h($locacione->log_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $locacione->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $locacione->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $locacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locacione->id)]) ?>
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
