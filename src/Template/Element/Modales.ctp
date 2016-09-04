<div class="fichasTecnicas index">
	<h2><?php echo __('Fichas Tecnicas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('PELICULA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FICHA_TECNICA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('PERSONA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('CASA_PRODUCTORA_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('TIPO_CARGO_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('FIC_TEC_MOSTRAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($fichasTecnicas as $fichasTecnica): ?>
	<tr>
		<td><?php echo h($fichasTecnica['FichasTecnica']['PELICULA_ID']); ?>&nbsp;</td>
		<td><?php echo h($fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID']); ?>&nbsp;</td>
		<td><?php echo h($fichasTecnica['FichasTecnica']['PERSONA_ID']); ?>&nbsp;</td>
		<td><?php echo h($fichasTecnica['FichasTecnica']['CASA_PRODUCTORA_ID']); ?>&nbsp;</td>
		<td><?php echo h($fichasTecnica['FichasTecnica']['TIPO_CARGO_ID']); ?>&nbsp;</td>
		<td><?php echo h($fichasTecnica['FichasTecnica']['FIC_TEC_MOSTRAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID']), array(), __('Are you sure you want to delete # %s?', $fichasTecnica['FichasTecnica']['FICHA_TECNICA_ID'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Fichas Tecnica'), array('action' => 'add')); ?></li>
	</ul>
</div>
