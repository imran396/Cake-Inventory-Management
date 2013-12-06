<?php
App::uses('Puchasedetail', 'Model');

/**
 * Puchasedetail Test Case
 *
 */
class PuchasedetailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.puchasedetail',
		'app.purchase',
		'app.brand',
		'app.optionvalue',
		'app.value',
		'app.option',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.productserial',
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
		$this->Puchasedetail = ClassRegistry::init('Puchasedetail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Puchasedetail);

		parent::tearDown();
	}

}
