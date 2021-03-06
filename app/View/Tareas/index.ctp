<div class="page-header">

	<h2><?php echo __('Tarea'); ?></h2>

</div>



<div class="col-md-12">
	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_tarea'); ?></th>
			<th><?php echo $this->Paginator->sort('estado'); ?></th>
			<th><?php echo $this->Paginator->sort('tip_solicitud'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tareas as $tarea): ?>
	<tr>
		<td><?php echo h($tarea['Tarea']['id']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['numero_tarea']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['estado']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['tip_solicitud']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['created']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['modified']); ?>&nbsp;</td>
		<td><?php echo h($tarea['Tarea']['user_id']); ?>&nbsp;</td>
		<td><?php //echo $this->Html->link($user['Tarea']['numero_tarea'], array('controller' => 'tareas', 'action' => 'view', $user['Tarea']['id'])); ?><td>
		</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View'), array('action' => 'view', $user['Tarea']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php //echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tarea['Tarea']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $tarea['Tarea']['id']))); ?>
		</td>
	</tr>


<?php endforeach; ?>
	</tbody>
	</table>

	</div>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-sm btn-info'));
        		echo $this->Paginator->numbers(array('separator' => ''));
        		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-sm btn-info'));
	?>
	</div>
</div>