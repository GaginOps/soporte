<?php
/**
 * Tarea Fixture
 */
class TareaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numero_tarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tip_solicitud' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descripcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'usuario_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'numero_tarea' => array('column' => 'numero_tarea', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'numero_tarea' => 1,
			'estado' => 1,
			'tip_solicitud' => 'Lorem ipsum dolor sit a',
			'descripcion' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-11-19 07:50:21',
			'modified' => '2015-11-19 07:50:21',
			'usuario_id' => 1
		),
	);

}
