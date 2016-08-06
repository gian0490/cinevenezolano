<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Crictica'), ['action' => 'edit', $crictica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Crictica'), ['action' => 'delete', $crictica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $crictica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cricticas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crictica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cricticas view large-9 medium-8 columns content">
    <h3><?= h($crictica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $crictica->has('pelicula') ? $this->Html->link($crictica->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $crictica->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cri Mostrar') ?></th>
            <td><?= h($crictica->cri_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($crictica->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Cri Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($crictica->cri_descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Referencias') ?></h4>
        <?php if (!empty($crictica->referencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ref Ruta Web') ?></th>
                <th><?= __('Ref Descripcion') ?></th>
                <th><?= __('Ref Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($crictica->referencias as $referencias): ?>
            <tr>
                <td><?= h($referencias->id) ?></td>
                <td><?= h($referencias->ref_ruta_web) ?></td>
                <td><?= h($referencias->ref_descripcion) ?></td>
                <td><?= h($referencias->ref_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Referencias', 'action' => 'view', $referencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Referencias', 'action' => 'edit', $referencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Referencias', 'action' => 'delete', $referencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $referencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
