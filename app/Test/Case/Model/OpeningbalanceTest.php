<?php
App::uses('Openingbalance', 'Model');

/**
 * Openingbalance Test Case
 *
 */
class OpeningbalanceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.openingbalance',
		'app.product'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Openingbalance = ClassRegistry::init('Openingbalance');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Openingbalance);

		parent::tearDown();
	}

}
