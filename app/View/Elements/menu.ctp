<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Soporte</a>
        </div>
        <div class="navbar-collapse collapse">

        <?php if ($this->Session->read('Auth.User.id')): ?>


          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Inicio</a></li>

            <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tarea <span class="caret"></span></a>
                         <ul class="dropdown-menu" role="menu">
                           <li><?php echo $this->Html->link('Lista Tareas', array('controller' => 'tareas', 'action' => 'index')) ?></li>
                           <li><?php echo $this->Html->link('Nueva Tarea', array('controller' => 'tareas', 'action' => 'add')) ?></li>
                         </ul>
                       </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Departamentos <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista de Departamentos', array('controller' => 'departamentos', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Departamento', array('controller' => 'departamentos', 'action' => 'add')) ?></li>
              </ul>
            </li>


            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Lista de Usuarios', array('controller' => 'users', 'action' => 'index')) ?></li>
                <li><?php echo $this->Html->link('Nuevo Usuario', array('controller' => 'users', 'action' => 'add')) ?></li>
              </ul>
            </li>



<form id="signout" class="navbar-form navbar-right" >

            <li><?php echo $this->Html->link('Salir', array('controller' => 'users', 'action' => 'logout'),array('class' => 'btn btn-sm btn-danger')) ?></li>

</form>

<?php endif; ?>
<form class="navbar-form navbar-right">
                        <div class="form-group">



                            <?php if ($this->Session->read('Auth.User.id')): ?>
                                <?php
                                print
                                        'Welcome back ';
                                ?>
                            <?Php else: ?>




                                <?php
                                echo $this->Form->create('User', array(
                                    'action' => 'login',
                                    'class' => 'form-inline',
                                    'role' => 'form',
                                    'inputDefaults' => array(
                                        'div' => array('class' => 'form-group'),
                                        'class' => array('form-control'),
                                        'label' => false,
                                        'wrapInput' => false
                                )));
                                ?>







                                <?php echo $this->Form->end(); ?>
                            <?php
                                echo $this->Form->create('User', array(
                                    'action' => 'login',
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
echo $this->Form->submit('Sign in', array(
    'div' => 'form-group',
    'class' => 'btn btn-success'
));
?>

                                <?php echo $this->Form->end(); ?>




                                <!--//    echo $this->Form->create('User', array('action' => 'login', 'class' => 'form-inline'));
                                //        echo $this->Form->input('username');
                                //        echo $this->Form->input('password');
                                //     echo $this->Form->end(__('Login'));
                                -->

            <?php endif; ?>

                        </div>
                    </form>

        </div><!--/.nav-collapse -->
      </div>
    </div>














