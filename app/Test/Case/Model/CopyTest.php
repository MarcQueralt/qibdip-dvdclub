<?php
/* Copy Test cases generated on: 2012-02-11 11:35:02 : 1328956502*/
App::uses('Copy', 'Model');

/**
 * Copy Test Case
 *
 */
class CopyTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.copy', 'app.format', 'app.movement');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Copy = ClassRegistry::init('Copy');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Copy);

		parent::tearDown();
	}

}
