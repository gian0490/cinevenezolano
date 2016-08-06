<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Locacione'), ['action' => 'edit', $locacione->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Locacione'), ['action' => 'delete', $locacione->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locacione->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Locaciones'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Locacione'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lugares'), ['controller' => 'Lugares', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lugare'), ['controller' => 'Lugares', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['controller' => 'Peliculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['controller' => 'Peliculas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="locaciones view large-9 medium-8 columns content">
    <h3><?= h($locacione->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Lugare') ?></th>
            <td><?= $locacione->has('lugare') ? $this->Html->link($locacione->lugare->id, ['controller' => 'Lugares', 'action' => 'view', $locacione->lugare->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Pelicula') ?></th>
            <td><?= $locacione->has('pelicula') ? $this->Html->link($locacione->pelicula->id, ['controller' => 'Peliculas', 'action' => 'view', $locacione->pelicula->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Log Mostrar') ?></th>
            <td><?= h($locacione->log_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($locacione->id) ?></td>
        </tr>
    </table>
</div>
