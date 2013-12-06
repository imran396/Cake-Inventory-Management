<?php
App::uses('Sell', 'Model');

/**
 * Sell Test Case
 *
 */
class SellTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.retrning',
		'app.sellsdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sell = ClassRegistry::init('Sell');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sell);

		parent::tearDown();
	}

}
