
<div class="departamentos form">
	<fieldset>
		<div class="page-header">
          <h1>Crear Departamento</h1>
        </div>



	<?php
                                    echo $this->Form->create('Departamento', array(
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
                                    echo $this->Form->input('nombre', array(
                                        'placeholder' => 'Nombre del departamento'
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

