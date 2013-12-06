<?php
App::uses('Sellsdetail', 'Model');

/**
 * Sellsdetail Test Case
 *
 */
class SellsdetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sellsdetail',
		'app.sell',
		'app.company',
		'app.purchase',
		'app.productserial',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.puchasedetail',
		'app.brand',
		'app.optionvalue',
		'app.value',
		'app.option',
		'app.retrndetail',
		'app.retrning'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sellsdetail = ClassRegistry::init('Sellsdetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sellsdetail);

		parent::tearDown();
	}

}
