<?php
/* Movement Test cases generated on: 2012-02-11 11:37:06 : 1328956626*/
App::uses('Movement', 'Model');

/**
 * Movement Test Case
 *
 */
class MovementTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.movement', 'app.client', 'app.copy', 'app.format');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Movement = ClassRegistry::init('Movement');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Movement);

		parent::tearDown();
	}

}
