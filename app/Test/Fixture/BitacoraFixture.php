<?php
/**
 * Bitacora Fixture
 */
class BitacoraFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'bitacora';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'numero_tarea' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'estado' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'tipo_solicitud' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descipcion' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descr_tecn' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'tarea_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
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
			'tipo_solicitud' => 'Lorem ipsum dolor sit a',
			'descipcion' => 'Lorem ipsum dolor sit amet',
			'descr_tecn' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2015-11-19 07:19:43',
			'modified' => '2015-11-19 07:19:43',
			'tarea_id' => 1
		),
	);

}
