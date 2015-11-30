<?php
App::uses('AppController', 'Controller');
/**
 * Tareas Controller
 *
 * @property Tarea $Tarea
 * @property PaginatorComponent $Paginator
 */
class TareasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
	    $rol=$this->Auth->user('role');
	    if ($rol=='user') {
	    	$this->Tarea->recursive = 0;
		$this->Paginator->settings = array(
		        'conditions' => array('Tarea.user_id =' => $this->Auth->user('id')),
		        'limit' => 10);
		$this->Tarea->recursive = 0;
		$this->set('tareas', $this->Paginator->paginate());
	    }else
	    $this->Tarea->recursive = 0;

		$this->set('tareas', $this->Paginator->paginate());
		 
	    }


		//$this->Paginator->settings = array('conditions' => array('Tarea.user_id =' => $this->Auth->user('id')),
		//'limit' => 10);
		//$options = array('conditions' => array('Tarea.user_id' => '9'));
		//$this->set('tarea', $this->Tarea->find('all', $options));
		//debug($this->Tarea->find('all', $options));
		//$this->set('tareas', $this->Paginator->paginate());
		//$this->User->recursive = 0;
		//$this->set('tareas', $this->Paginator->paginate());	

	

	public function index_admin() {
		$this->Tarea->recursive = 0;

		$this->set('tareas', $this->Paginator->paginate());
		    

	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
		$this->set('tarea', $this->Tarea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tarea->create();
			$this->request->data['Tarea']['numero_tarea']='1';
			$this->request->data['Tarea']['estado']='1';
			$this->request->data['Tarea']['user_id'] = $this->Auth->user('id');
			if ($this->Tarea->save($this->request->data)) {
				$this->Flash->success(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarea could not be saved. Please, try again.'));
			}
		}
		$users = $this->Tarea->User->find('list');
		$this->set(compact('Users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarea->save($this->request->data)) {
				$this->Flash->success(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarea could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
			$this->request->data = $this->Tarea->find('first', $options);
		}
		$users = $this->Tarea->Users->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tarea->id = $id;
		if (!$this->Tarea->exists()) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarea->delete()) {
			$this->Flash->success(__('The tarea has been deleted.'));
		} else {
			$this->Flash->error(__('The tarea could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

public function isAuthorized($user) {
    // All registered users can add posts
    if (in_array($this->action, array('add','index'))) {
        return true;
    }

    // The owner of a post can edit and delete it
    if (in_array($this->action, array('delete'))) {
        $postId = (int)$this->request->params['pass'][0];
        if ($this->Tarea->isOwnedBy($postId, $user['id'])) {
            return true;
        }
    }
		else
			{
				if($this->Auth->user('id'))
				{
					$this->Flash->error('No puede acceder');
					$this->redirect($this->Auth->redirect('/users/login'));
				}
			}
    	return parent::isAuthorized($user);
}}
	
/*
 * admin_index method
 *
 * @return void
 */
	/*public function admin_index() {
		$this->Tarea->recursive = 0;
		$this->set('tareas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*	public function admin_view($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
		$this->set('tarea', $this->Tarea->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
/*	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tarea->create();
			if ($this->Tarea->save($this->request->data)) {
				$this->Flash->success(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarea could not be saved. Please, try again.'));
			}
		}
		$usuarios = $this->Tarea->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*	public function admin_edit($id = null) {
		if (!$this->Tarea->exists($id)) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tarea->save($this->request->data)) {
				$this->Flash->success(__('The tarea has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The tarea could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tarea.' . $this->Tarea->primaryKey => $id));
			$this->request->data = $this->Tarea->find('first', $options);
		}
		$usuarios = $this->Tarea->Usuario->find('list');
		$this->set(compact('usuarios'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*	public function admin_delete($id = null) {
		$this->Tarea->id = $id;
		if (!$this->Tarea->exists()) {
			throw new NotFoundException(__('Invalid tarea'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tarea->delete()) {
			$this->Flash->success(__('The tarea has been deleted.'));
		} else {
			$this->Flash->error(__('The tarea could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
*/
