<?php
App::uses('Tarea', 'Model');

/**
 * Tarea Test Case
 */
class TareaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tarea',
		'app.usuario',
		'app.bitacora',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tarea = ClassRegistry::init('Tarea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tarea);

		parent::tearDown();
	}

}
