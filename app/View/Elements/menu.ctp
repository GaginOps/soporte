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




            <li><?php echo $this->Html->link('salir', array('controller' => 'users', 'action' => 'logout')) ?></li>



        </div><!--/.nav-collapse -->
      </div>
    </div>