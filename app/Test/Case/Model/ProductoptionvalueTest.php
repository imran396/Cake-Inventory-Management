<?php
App::uses('Productoptionvalue', 'Model');

/**
 * Productoptionvalue Test Case
 *
 */
class ProductoptionvalueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productoptionvalue',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.productserial',
		'app.purchase',
		'app.company',
		'app.sell',
		'app.retrndetail',
		'app.retrning',
		'app.sellsdetail',
		'app.puchasedetail',
		'app.brand',
		'app.optionvalue',
		'app.value',
		'app.option'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Productoptionvalue = ClassRegistry::init('Productoptionvalue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Productoptionvalue);

		parent::tearDown();
	}

}
