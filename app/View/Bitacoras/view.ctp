<div class="bitacoras view">
<h2><?php echo __('Bitacora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Tarea'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['numero_tarea']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Solicitud'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['tipo_solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descipcion'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['descipcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descr Tecn'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['descr_tecn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bitacora['Tarea']['numero_tarea'], array('controller' => 'tareas', 'action' => 'view', $bitacora['Tarea']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bitacora'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bitacora'), array('action' => 'delete', $bitacora['Bitacora']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
	</ul>
</div>
