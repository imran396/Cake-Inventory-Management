<?php
/**
 * RetrndetailFixture
 *
 */
class RetrndetailFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'retrning_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'sell_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'qty' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'retrning_id' => 1,
			'sell_id' => 1,
			'product_id' => 1,
			'qty' => 1
		),
	);

}
