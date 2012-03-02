<?php
/* Client Fixture generated on: 2012-02-11 11:33:13 : 1328956393 */

/**
 * ClientFixture
 *
 */
class ClientFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'firstname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'surname' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'address' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'cp' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'mobile' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 9, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => '1', 'collate' => NULL, 'comment' => ''),
		'comments' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'balance' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'firstname' => 'Lorem ipsum dolor sit amet',
			'surname' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'cp' => 'Lor',
			'city' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem i',
			'mobile' => 'Lorem i',
			'active' => 1,
			'comments' => 'Lorem ipsum dolor sit amet',
			'balance' => 1,
			'created' => '2012-02-11 11:33:13',
			'modified' => '2012-02-11 11:33:13'
		),
	);
}
