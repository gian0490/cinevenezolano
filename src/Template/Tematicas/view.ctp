<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tematica'), ['action' => 'edit', $tematica->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tematica'), ['action' => 'delete', $tematica->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tematica->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tematicas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tematica'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tematicas view large-9 medium-8 columns content">
    <h3><?= h($tematica->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Tem Nombre') ?></th>
            <td><?= h($tematica->tem_nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tem Mostrar') ?></th>
            <td><?= h($tematica->tem_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tematica->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Peliculas') ?></h4>
        <?php if (!empty($tematica->peliculas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Trailer Id') ?></th>
                <th><?= __('Pel Titulo') ?></th>
                <th><?= __('Pel Ano') ?></th>
                <th><?= __('Pel Sinopsis') ?></th>
                <th><?= __('Pel Recaudo Estreno') ?></th>
                <th><?= __('Pel Recaudo Acumulado') ?></th>
                <th><?= __('Pel Espectadoresestreno') ?></th>
                <th><?= __('Pel Espectadores Acumulado') ?></th>
                <th><?= __('Pel Ruta Ima Captura') ?></th>
                <th><?= __('Pel Ruta Ima Poster') ?></th>
                <th><?= __('Pel Ruta Pelicula') ?></th>
                <th><?= __('Pel Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tematica->peliculas as $peliculas): ?>
            <tr>
                <td><?= h($peliculas->id) ?></td>
                <td><?= h($peliculas->trailer_id) ?></td>
                <td><?= h($peliculas->pel_titulo) ?></td>
                <td><?= h($peliculas->pel_ano) ?></td>
                <td><?= h($peliculas->pel_sinopsis) ?></td>
                <td><?= h($peliculas->pel_recaudo_estreno) ?></td>
                <td><?= h($peliculas->pel_recaudo_acumulado) ?></td>
                <td><?= h($peliculas->pel_espectadoresestreno) ?></td>
                <td><?= h($peliculas->pel_espectadores_acumulado) ?></td>
                <td><?= h($peliculas->pel_ruta_ima_captura) ?></td>
                <td><?= h($peliculas->pel_ruta_ima_poster) ?></td>
                <td><?= h($peliculas->pel_ruta_pelicula) ?></td>
                <td><?= h($peliculas->pel_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Peliculas', 'action' => 'view', $peliculas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Peliculas', 'action' => 'edit', $peliculas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Peliculas', 'action' => 'delete', $peliculas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $peliculas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
