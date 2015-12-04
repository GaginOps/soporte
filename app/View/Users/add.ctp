

<div class="users form">
	<fieldset>
		<div class="page-header">
          <h1>Crear Usuario</h1>
        </div>



	<?php
                                    echo $this->Form->create('User', array(
                                        'action' => 'add',
                                        'class' => 'form-inline',
                                        'role' => 'form',
                                        'inputDefaults' => array(
                                            'div' => array('class' => 'form-group'),
                                            'class' => array('form-control'),
                                            'label' => false,
                                            'wrapInput' => false
                                    )));
                                    ?>

	   <?php
                                    echo $this->Form->input('username', array(
                                        'placeholder' => 'Username'
                                    ));
                                    ?>

<?php
                                    echo $this->Form->input('password', array(
                                        'placeholder' => 'Password'
                                    ));
                                    ?>
<?php
                                    echo $this->Form->input('nombre', array(
                                        'placeholder' => 'Nombre'
                                    ));
                                    ?>
<?php
                                    echo $this->Form->input('departamento_id', array(
                                        'placeholder' => 'Departamento'
                                    ));
                                    ?>




	</fieldset>
<?php
echo $this->Form->submit('Enviar', array(
    'div' => 'form-group',
    'class' => 'btn btn-success'
));
?>
</div>

