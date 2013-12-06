<?php
/**
 * PurchaseFixture
 *
 */
class PurchaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'invoice_no' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'company_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'paid' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '10,2'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'paymentmode' => array('type' => 'integer', 'null' => false, 'default' => null),
		'check_no' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'bank_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'branch_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'billdate' => array('type' => 'date', 'null' => true, 'default' => null),
		'purchaseby' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'company_id' => 1,
			'paid' => 1,
			'date' => '2012-10-24',
			'paymentmode' => 1,
			'check_no' => 'Lorem ipsum dolor sit amet',
			'bank_name' => 'Lorem ipsum dolor sit amet',
			'branch_name' => 'Lorem ipsum dolor sit amet',
			'billdate' => '2012-10-24',
			'purchaseby' => 'Lorem ipsum dolor sit amet'
		),
	);

}
