<div class="users form">
<?php echo $this->Form->create('BoostCake', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => false,
		'wrapInput' => false,
		'class' => 'form-control'
	),
	'class' => 'well form-inline'
)); ?>
<?php echo $this->Flash->render('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend>
            <?php echo __('Please enter your username and password'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'),array(
                                       		'div' => 'form-group',
                                       		'class' => 'btn btn-primary')); ?>
<?php echo $this->Html->link('salir',array('controller'=>'users','action'=>'logout'));?>
</div>
<?php //debug($this->Auth->RedirectUrl()); ?>