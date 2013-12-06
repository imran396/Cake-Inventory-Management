<?php
App::uses('Retrning', 'Model');

/**
 * Retrning Test Case
 *
 */
class RetrningTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retrning',
		'app.retrndetail',
		'app.sell',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.productserial',
		'app.purchase',
		'app.company',
		'app.puchasedetail',
		'app.brand',
		'app.optionvalue',
		'app.value',
		'app.option',
		'app.sellsdetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Retrning = ClassRegistry::init('Retrning');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Retrning);

		parent::tearDown();
	}

}
