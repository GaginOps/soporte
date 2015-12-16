

<div class="users form">
	<fieldset>
		<div class="page-header">
          <h1>Crear Usuario</h1>
        </div>
<div class="container">




<div class="row">
    <div class="col-md-3">

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
                                    </div>
                                    </div>

<div class="form-group required-field-block">
        <div class="col-md-3 input-group">
            <span class="input-group-addon"><span class="fa fa-user-plus"></span></span>
             <?php
                                                                echo $this->Form->input('username', array(
                                                                    'placeholder' => 'Username'
                                                                ));
                                                                ?>
                <div class="required-icon">
                </div>
        </div>
    </div>
<div class="form-group required-field-block">
        <div class="col-md-3 input-group">
            <span class="input-group-addon"><span class="fa fa-lg fa-lock"></span></span>


<?php
                                    echo $this->Form->input('password', array(
                                        'placeholder' => 'Password'
                                    ));
                                    ?>
                                     </div>
                                                                        </div>
<div class="form-group required-field-block">
        <div class="col-md-3 input-group">
            <span class="input-group-addon"><span class="fa fa-align-justify"></span></span>

<?php
                                    echo $this->Form->input('nombre', array(
                                        'placeholder' => 'Nombre'
                                    ));
                                    ?>
                                     </div>
                                                                        </div>
<div class="form-group required-field-block">
        <div class="col-md-3 input-group">
            <span class="input-group-addon"><span class="fa  fa-suitcase"></span></span>


<?php
                                    echo $this->Form->input('departamento_id', array(
                                        'placeholder' => 'Departamento'
                                    ));
                                    ?>
                                     </div>
                                                                        </div>

                                    <div class="row">
                                     <div class="col-sm-1";>
                                    <?php
                                    echo $this->Form->submit('Enviar', array(
                                        'div' => 'form-group',
                                        'class' => 'btn btn-success'
                                    ));
                                    ?>
 </div> </div>


                                    </div>


</div>
</div>


	</fieldset>

</div>

