<div class="tareas form">
<?php echo $this->Form->create('Tarea'); ?>
	<fieldset>
		<div class="page-header">
          <h1>Crear solicitud <small>Selecciona el tipo de solicitud y añade una descripcion.</small></h1>
        </div>

<div class="container">
<div class="form-group required-field-block">
        <div class="col-md-6 input-group">
            <span class="input-group-addon"><span class="fa  fa-desktop"></span></span>
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
                                         </div>
                                                                                     </div>

                                         <div class="form-group required-field-block">
                                                 <div class="col-md-6 input-group">
                                                     <span class="input-group-addon"><span class="fa  fa-book"></span></span>
                                         <?php
                                         echo $this->Form->input('descripcion', array(
                                             'placeholder' => 'Descripcion',
                                             'type' => 'textarea'
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
