<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['departamento_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tarea'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Tarea']['numero_tarea'], array('controller' => 'tareas', 'action' => 'view', $user['Tarea']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tareas'), array('controller' => 'tareas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tarea'), array('controller' => 'tareas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Departamentos'); ?></h3>
	<?php if (!empty($user['Departamento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Departamento'] as $departamento): ?>
		<tr>
			<td><?php echo $departamento['id']; ?></td>
			<td><?php echo $departamento['nombre']; ?></td>
			<td><?php echo $departamento['created']; ?></td>
			<td><?php echo $departamento['modified']; ?></td>
			<td><?php echo $departamento['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'departamentos', 'action' => 'view', $departamento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'departamentos', 'action' => 'edit', $departamento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'departamentos', 'action' => 'delete', $departamento['id']), array('confirm' => __('Are you sure you want to delete # %s?', $departamento['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
