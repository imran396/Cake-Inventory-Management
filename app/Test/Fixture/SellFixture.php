<?php
/**
 * SellFixture
 *
 */
class SellFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'invoice_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'amount' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '10,2'),
		'paid' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
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
			'invoice_no' => 'Lorem ipsum dolor sit amet',
			'date' => '2012-10-24',
			'company_id' => 1,
			'amount' => 1,
			'paid' => 1
		),
	);

}
