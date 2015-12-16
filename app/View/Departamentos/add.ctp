
<div class="departamentos form">
	<fieldset>
		<div class="page-header">
          <h1>Crear Departamento</h1>
        </div>


<div class="container">

  <div class="form-group required-field-block">
          <div class="col-md-3 input-group">
              <span class="input-group-addon"><span class="fa  fa-suitcase"></span></span>
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
</div>
</div>
<?php
echo $this->Form->submit('Enviar', array(
    'div' => 'form-group',
    'class' => 'btn btn-success'
));
?>
</div>
	</fieldset>

</div>

