<?php
/* Format Test cases generated on: 2012-02-11 11:35:44 : 1328956544*/
App::uses('Format', 'Model');

/**
 * Format Test Case
 *
 */
class FormatTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.format', 'app.copy', 'app.movement');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Format = ClassRegistry::init('Format');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Format);

		parent::tearDown();
	}

}
