<?php
/* Movement Fixture generated on: 2012-02-11 11:37:06 : 1328956626 */

/**
 * MovementFixture
 *
 */
class MovementFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'client_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'copy_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 10, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'mov_type' => array('type' => 'string', 'null' => true, 'default' => 'C', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => true, 'default' => '0', 'collate' => NULL, 'comment' => ''),
		'started' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'ended' => array('type' => 'datetime', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'returned' => array('type' => 'boolean', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'comments' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'client_id' => array('column' => 'client_id', 'unique' => 0), 'copy_id' => array('column' => 'copy_id', 'unique' => 0)),
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
			'client_id' => 1,
			'copy_id' => 1,
			'mov_type' => 'Lorem ipsum dolor sit ame',
			'amount' => 1,
			'started' => '2012-02-11 11:37:06',
			'ended' => '2012-02-11 11:37:06',
			'returned' => 1,
			'comments' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-02-11 11:37:06',
			'modified' => '2012-02-11 11:37:06'
		),
	);
}
