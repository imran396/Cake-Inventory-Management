<?php
/**
 * ProductoptionvalueFixture
 *
 */
class ProductoptionvalueFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'product_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'purchase_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'puchasedetail_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'optionvalue_id' => array('type' => 'integer', 'null' => false, 'default' => null),
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
			'purchase_id' => 1,
			'puchasedetail_id' => 1,
			'optionvalue_id' => 1
		),
	);

}
