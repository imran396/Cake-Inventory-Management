<?php
/**
 * OpeningbalanceFixture
 *
 */
class OpeningbalanceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qty' => array('type' => 'integer', 'null' => false, 'default' => null),
		'srerialno' => array('type' => 'integer', 'null' => false, 'default' => null),
		'purchaserate' => array('type' => 'integer', 'null' => false, 'default' => null),
		'salesrate' => array('type' => 'integer', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
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
			'product_id' => 1,
			'qty' => 1,
			'srerialno' => 1,
			'purchaserate' => 1,
			'salesrate' => 1
		),
	);

}
