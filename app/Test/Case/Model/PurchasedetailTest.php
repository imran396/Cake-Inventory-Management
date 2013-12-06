<?php
App::uses('Purchasedetail', 'Model');

/**
 * Purchasedetail Test Case
 *
 */
class PurchasedetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchasedetail',
		'app.purchase',
		'app.company',
		'app.sell',
		'app.retrndetail',
		'app.retrning',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.productserial',
		'app.puchasedetail',
		'app.sellsdetail',
		'app.brand'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Purchasedetail = ClassRegistry::init('Purchasedetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchasedetail);

		parent::tearDown();
	}

}
