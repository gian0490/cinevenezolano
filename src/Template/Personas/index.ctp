<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['controller' => 'FichasTecnicas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['controller' => 'FichasTecnicas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Repartos'), ['controller' => 'Repartos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Reparto'), ['controller' => 'Repartos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="personas index large-9 medium-8 columns content">
    <h3><?= __('Personas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('per_primer_nombre') ?></th>
                <th><?= $this->Paginator->sort('per_segundo_nombre') ?></th>
                <th><?= $this->Paginator->sort('per_primer_apellido') ?></th>
                <th><?= $this->Paginator->sort('per_segundo_apellido') ?></th>
                <th><?= $this->Paginator->sort('per_sexo') ?></th>
                <th><?= $this->Paginator->sort('per_fecha_nac') ?></th>
                <th><?= $this->Paginator->sort('per_fecha_falle') ?></th>
                <th><?= $this->Paginator->sort('per_mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personas as $persona): ?>
            <tr>
                <td><?= $this->Number->format($persona->id) ?></td>
                <td><?= h($persona->per_primer_nombre) ?></td>
                <td><?= h($persona->per_segundo_nombre) ?></td>
                <td><?= h($persona->per_primer_apellido) ?></td>
                <td><?= h($persona->per_segundo_apellido) ?></td>
                <td><?= h($persona->per_sexo) ?></td>
                <td><?= h($persona->per_fecha_nac) ?></td>
                <td><?= h($persona->per_fecha_falle) ?></td>
                <td><?= h($persona->per_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
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
