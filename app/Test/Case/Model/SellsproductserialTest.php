<?php
App::uses('Sellsproductserial', 'Model');

/**
 * Sellsproductserial Test Case
 *
 */
class SellsproductserialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sellsproductserial',
		'app.sellsdetail',
		'app.sell',
		'app.company',
		'app.purchase',
		'app.purchasedetail',
		'app.product',
		'app.brand',
		'app.puchasedetail',
		'app.openingbalance',
		'app.productserial',
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
		$this->Sellsproductserial = ClassRegistry::init('Sellsproductserial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sellsproductserial);

		parent::tearDown();
	}

}
