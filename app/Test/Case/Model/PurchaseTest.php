<?php
App::uses('Purchase', 'Model');

/**
 * Purchase Test Case
 *
 */
class PurchaseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.purchase',
		'app.company',
		'app.sell',
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
		'app.sellsdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Purchase = ClassRegistry::init('Purchase');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Purchase);

		parent::tearDown();
	}

}
