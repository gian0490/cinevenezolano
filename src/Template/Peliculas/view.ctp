<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pelicula'), ['action' => 'edit', $pelicula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pelicula'), ['action' => 'delete', $pelicula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pelicula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Peliculas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pelicula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Trailers'), ['controller' => 'Trailers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Trailer'), ['controller' => 'Trailers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cricticas'), ['controller' => 'Cricticas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Crictica'), ['controller' => 'Cricticas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fichas Tecnicas'), ['controller' => 'FichasTecnicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Fichas Tecnica'), ['controller' => 'FichasTecnicas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Financiamientos'), ['controller' => 'Financiamientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Financiamiento'), ['controller' => 'Financiamientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locaciones'), ['controller' => 'Locaciones', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Locacione'), ['controller' => 'Locaciones', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Repartos'), ['controller' => 'Repartos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Reparto'), ['controller' => 'Repartos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Generos'), ['controller' => 'Generos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Genero'), ['controller' => 'Generos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Referencias'), ['controller' => 'Referencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Referencia'), ['controller' => 'Referencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tematicas'), ['controller' => 'Tematicas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tematica'), ['controller' => 'Tematicas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="peliculas view large-9 medium-8 columns content">
    <h3><?= h($pelicula->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Pel Titulo') ?></th>
            <td><?= h($pelicula->pel_titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Mostrar') ?></th>
            <td><?= h($pelicula->pel_mostrar) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($pelicula->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Trailer Id') ?></th>
            <td><?= $this->Number->format($pelicula->trailer_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Recaudo Estreno') ?></th>
            <td><?= $this->Number->format($pelicula->pel_recaudo_estreno) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Recaudo Acumulado') ?></th>
            <td><?= $this->Number->format($pelicula->pel_recaudo_acumulado) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Espectadoresestreno') ?></th>
            <td><?= $this->Number->format($pelicula->pel_espectadoresestreno) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Espectadores Acumulado') ?></th>
            <td><?= $this->Number->format($pelicula->pel_espectadores_acumulado) ?></td>
        </tr>
        <tr>
            <th><?= __('Pel Ano') ?></th>
            <td><?= h($pelicula->pel_ano) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Pel Sinopsis') ?></h4>
        <?= $this->Text->autoParagraph(h($pelicula->pel_sinopsis)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pel Ruta Ima Captura') ?></h4>
        <?= $this->Text->autoParagraph(h($pelicula->pel_ruta_ima_captura)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pel Ruta Ima Poster') ?></h4>
        <?= $this->Text->autoParagraph(h($pelicula->pel_ruta_ima_poster)); ?>
    </div>
    <div class="row">
        <h4><?= __('Pel Ruta Pelicula') ?></h4>
        <?= $this->Text->autoParagraph(h($pelicula->pel_ruta_pelicula)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Trailers') ?></h4>
        <?php if (!empty($pelicula->trailers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Tra Ruta Trailer') ?></th>
                <th><?= __('Tra Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->trailers as $trailers): ?>
            <tr>
                <td><?= h($trailers->id) ?></td>
                <td><?= h($trailers->pelicula_id) ?></td>
                <td><?= h($trailers->tra_ruta_trailer) ?></td>
                <td><?= h($trailers->tra_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Trailers', 'action' => 'view', $trailers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Trailers', 'action' => 'edit', $trailers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Trailers', 'action' => 'delete', $trailers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $trailers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cricticas') ?></h4>
        <?php if (!empty($pelicula->cricticas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Cri Descripcion') ?></th>
                <th><?= __('Cri Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->cricticas as $cricticas): ?>
            <tr>
                <td><?= h($cricticas->id) ?></td>
                <td><?= h($cricticas->pelicula_id) ?></td>
                <td><?= h($cricticas->cri_descripcion) ?></td>
                <td><?= h($cricticas->cri_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cricticas', 'action' => 'view', $cricticas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cricticas', 'action' => 'edit', $cricticas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cricticas', 'action' => 'delete', $cricticas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cricticas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Fichas Tecnicas') ?></h4>
        <?php if (!empty($pelicula->fichas_tecnicas)): ?>
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
            <?php foreach ($pelicula->fichas_tecnicas as $fichasTecnicas): ?>
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
        <h4><?= __('Related Financiamientos') ?></h4>
        <?php if (!empty($pelicula->financiamientos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Instituto Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Fin Monto') ?></th>
                <th><?= __('Fin Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->financiamientos as $financiamientos): ?>
            <tr>
                <td><?= h($financiamientos->pelicula_id) ?></td>
                <td><?= h($financiamientos->instituto_id) ?></td>
                <td><?= h($financiamientos->id) ?></td>
                <td><?= h($financiamientos->fin_monto) ?></td>
                <td><?= h($financiamientos->fin_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Financiamientos', 'action' => 'view', $financiamientos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Financiamientos', 'action' => 'edit', $financiamientos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Financiamientos', 'action' => 'delete', $financiamientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $financiamientos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Locaciones') ?></h4>
        <?php if (!empty($pelicula->locaciones)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Lugar Id') ?></th>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Log Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->locaciones as $locaciones): ?>
            <tr>
                <td><?= h($locaciones->lugar_id) ?></td>
                <td><?= h($locaciones->pelicula_id) ?></td>
                <td><?= h($locaciones->id) ?></td>
                <td><?= h($locaciones->log_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Locaciones', 'action' => 'view', $locaciones->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Locaciones', 'action' => 'edit', $locaciones->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Locaciones', 'action' => 'delete', $locaciones->id], ['confirm' => __('Are you sure you want to delete # {0}?', $locaciones->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Repartos') ?></h4>
        <?php if (!empty($pelicula->repartos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Persona Id') ?></th>
                <th><?= __('Pelicula Id') ?></th>
                <th><?= __('Id') ?></th>
                <th><?= __('Rep Personaje') ?></th>
                <th><?= __('Rep Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->repartos as $repartos): ?>
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
    <div class="related">
        <h4><?= __('Related Generos') ?></h4>
        <?php if (!empty($pelicula->generos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Gen Nombre') ?></th>
                <th><?= __('Gen Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->generos as $generos): ?>
            <tr>
                <td><?= h($generos->id) ?></td>
                <td><?= h($generos->gen_nombre) ?></td>
                <td><?= h($generos->gen_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Generos', 'action' => 'view', $generos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Generos', 'action' => 'edit', $generos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Generos', 'action' => 'delete', $generos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $generos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Referencias') ?></h4>
        <?php if (!empty($pelicula->referencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Ref Ruta Web') ?></th>
                <th><?= __('Ref Descripcion') ?></th>
                <th><?= __('Ref Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->referencias as $referencias): ?>
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
    <div class="related">
        <h4><?= __('Related Tematicas') ?></h4>
        <?php if (!empty($pelicula->tematicas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Tem Nombre') ?></th>
                <th><?= __('Tem Mostrar') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pelicula->tematicas as $tematicas): ?>
            <tr>
                <td><?= h($tematicas->id) ?></td>
                <td><?= h($tematicas->tem_nombre) ?></td>
                <td><?= h($tematicas->tem_mostrar) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tematicas', 'action' => 'view', $tematicas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tematicas', 'action' => 'edit', $tematicas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tematicas', 'action' => 'delete', $tematicas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tematicas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
