<?php
/**
 * Module Fixture
 */
class ModuleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'semester' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mark' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'mh' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'is_enable' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'course_id' => 1,
			'semester' => 1,
			'mark' => 1,
			'mh' => 1,
			'is_enable' => 1,
			'created' => '2016-10-17 13:49:58',
			'modified' => '2016-10-17 13:49:58'
		),
	);

}
