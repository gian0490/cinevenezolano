<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['controller' => 'FichasTecnicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['controller' => 'FichasTecnicas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Repartos'), ['controller' => 'Repartos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reparto'), ['controller' => 'Repartos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personas view large-9 medium-8 columns content">
    <h3><?= h($persona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Per Primer Nombre') ?></th>
            <td><?= h($persona->per_primer_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Segundo Nombre') ?></th>
            <td><?= h($persona->per_segundo_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Primer Apellido') ?></th>
            <td><?= h($persona->per_primer_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Segundo Apellido') ?></th>
            <td><?= h($persona->per_segundo_apellido) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Sexo') ?></th>
            <td><?= h($persona->per_sexo) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Mostrar') ?></th>
            <td><?= h($persona->per_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($persona->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Fecha Nac') ?></th>
            <td><?= h($persona->per_fecha_nac) ?></td>
        </tr>
        <tr>
            <th><?= __('Per Fecha Falle') ?></th>
            <td><?= h($persona->per_fecha_falle) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Per Ruta Foto') ?></h4>
        <?= $this->Text->autoParagraph(h($persona->per_ruta_foto)); ?>
    </div>
    <div class="row">
        <h4><?= __('Per Biografia') ?></h4>
        <?= $this->Text->autoParagraph(h($persona->per_biografia)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fichas Tecnicas') ?></h4>
        <?php if (!empty($persona->fichas_tecnicas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Persona Id') ?></th>
                <th><?= __('Casa Productora Id') ?></th>
                <th><?= __('Tipo Cargo Id') ?></th>
                <th><?= __('Fic Tec Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->fichas_tecnicas as $fichasTecnicas): ?>
            <tr>
                <td><?= h($fichasTecnicas->pelicula_id) ?></td>
                <td><?= h($fichasTecnicas->id) ?></td>
                <td><?= h($fichasTecnicas->persona_id) ?></td>
                <td><?= h($fichasTecnicas->casa_productora_id) ?></td>
                <td><?= h($fichasTecnicas->tipo_cargo_id) ?></td>
                <td><?= h($fichasTecnicas->fic_tec_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'FichasTecnicas', 'action' => 'view', $fichasTecnicas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'FichasTecnicas', 'action' => 'edit', $fichasTecnicas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'FichasTecnicas', 'action' => 'delete', $fichasTecnicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fichasTecnicas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Repartos') ?></h4>
        <?php if (!empty($persona->repartos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Persona Id') ?></th>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Rep Personaje') ?></th>
                <th><?= __('Rep Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->repartos as $repartos): ?>
            <tr>
                <td><?= h($repartos->persona_id) ?></td>
                <td><?= h($repartos->pelicula_id) ?></td>
                <td><?= h($repartos->id) ?></td>
                <td><?= h($repartos->rep_personaje) ?></td>
                <td><?= h($repartos->rep_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Repartos', 'action' => 'view', $repartos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Repartos', 'action' => 'edit', $repartos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Repartos', 'action' => 'delete', $repartos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $repartos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
