<?php
App::uses('Productserial', 'Model');

/**
 * Productserial Test Case
 *
 */
class ProductserialTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.productserial',
		'app.product',
		'app.category',
		'app.openingbalance',
		'app.puchasedetail',
		'app.retrndetail',
		'app.sellsdetail',
		'app.purchase'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Productserial = ClassRegistry::init('Productserial');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Productserial);

		parent::tearDown();
	}

}
