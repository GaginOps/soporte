<div class="bitacoras form">
<?php echo $this->Form->create('Bitacora'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bitacora'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero_tarea');
		echo $this->Form->input('estado');
		echo $this->Form->input('tipo_solicitud');
		echo $this->Form->input('descipcion');
		echo $this->Form->input('descr_tecn');
		echo $this->Form->input('tarea_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bitacora.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Bitacora.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
