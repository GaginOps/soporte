<?php
App::uses('Bitacora', 'Model');

/**
 * Bitacora Test Case
 */
class BitacoraTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bitacora',
		'app.tarea'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bitacora = ClassRegistry::init('Bitacora');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bitacora);

		parent::tearDown();
	}

}
