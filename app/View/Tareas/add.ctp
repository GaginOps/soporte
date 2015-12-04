<div class="tareas form">
<?php echo $this->Form->create('Tarea'); ?>
	<fieldset>
		<div class="page-header">
          <h1>Crear solicitud <small>Selecciona el tipo de solicitud y añade una descripcion.</small></h1>
        </div>



	<?php
                                    echo $this->Form->create('Tarea', array(
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
                                    echo $this->Form->input('tip_solicitud', array(
                                        'placeholder' => 'Tipo de Solicitud'
                                    ));
                                    ?>
                                    <?php
                                    echo $this->Form->input('descripcion', array(
                                        'placeholder' => 'Descripcion',
                                        'type' => 'textarea'
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
