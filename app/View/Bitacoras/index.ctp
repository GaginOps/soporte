<div class="bitacoras index">
	<h2><?php echo __('Bitacoras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('descipcion'); ?></th>
			<th><?php echo $this->Paginator->sort('descr_tecn'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('tarea_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($bitacoras as $bitacora): ?>
	<tr>
		<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['numero_tarea']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['estado']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['tipo_solicitud']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['descipcion']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['descr_tecn']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['created']); ?>&nbsp;</td>
		<td><?php echo h($bitacora['Bitacora']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bitacora['Tarea']['numero_tarea'], array('controller' => 'tareas', 'action' => 'view', $bitacora['Tarea']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bitacora['Bitacora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
