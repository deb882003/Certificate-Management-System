<?php
App::uses('Center', 'Model');

/**
 * Center Test Case
 */
class CenterTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.center'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Center = ClassRegistry::init('Center');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Center);

		parent::tearDown();
	}

}
