<?php
/* Client Test cases generated on: 2012-02-11 11:33:13 : 1328956393*/
App::uses('Client', 'Model');

/**
 * Client Test Case
 *
 */
class ClientTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.client', 'app.movement');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Client = ClassRegistry::init('Client');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Client);

		parent::tearDown();
	}

}
