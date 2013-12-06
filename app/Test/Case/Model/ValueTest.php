<?php
App::uses('Value', 'Model');

/**
 * Value Test Case
 *
 */
class ValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.value',
		'app.optionvalue',
		'app.option',
		'app.puchasedetail',
		'app.purchase',
		'app.company',
		'app.sell',
		'app.retrndetail',
		'app.retrning',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.productserial',
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
		$this->Value = ClassRegistry::init('Value');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Value);

		parent::tearDown();
	}

}
