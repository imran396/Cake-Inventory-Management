<?php
/**
 * SellsproductserialFixture
 *
 */
class SellsproductserialFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'sellsdetail_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'serial' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			
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
			'sellsdetail_id' => 1,
			'serial' => 'Lorem ipsum dolor sit amet'
		),
	);

}
