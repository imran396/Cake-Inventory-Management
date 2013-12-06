<?php
App::uses('Retrndetail', 'Model');

/**
 * Retrndetail Test Case
 *
 */
class RetrndetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.retrndetail',
		'app.retrning',
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
		$this->Retrndetail = ClassRegistry::init('Retrndetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Retrndetail);

		parent::tearDown();
	}

}
