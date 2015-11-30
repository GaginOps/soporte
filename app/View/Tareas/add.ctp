<div class="tareas form">
<?php echo $this->Form->create('Tarea'); ?>
	<fieldset>
		<legend><?php echo __('Add Tarea'); ?></legend>
	<?php
		echo $this->Form->input('tip_solicitud');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div>