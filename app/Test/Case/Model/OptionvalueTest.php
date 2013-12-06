<?php
App::uses('Optionvalue', 'Model');

/**
 * Optionvalue Test Case
 *
 */
class OptionvalueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.optionvalue',
		'app.value',
		'app.option',
		'app.puchasedetail'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Optionvalue = ClassRegistry::init('Optionvalue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Optionvalue);

		parent::tearDown();
	}

}
