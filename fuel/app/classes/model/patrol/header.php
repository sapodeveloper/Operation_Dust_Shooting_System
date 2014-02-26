<?php

class Model_Patrol_Header extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'check_date',
		'user_id',
		'room_id',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);
	protected static $_table_name = 'patrol_headers';

	protected static $_belongs_to = array(
		'user' => array(
			'model_to' => 'Model_User_Datum',
			'key_from' => 'user_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
		'room' => array(
			'model_to' => 'Model_Patrol_Room',
			'key_from' => 'room_id',
			'key_to' => 'id',
			'cascade_save' => true,
			'cascade_delete' => false
		)
	);

	protected static $_has_many = array(
		'records' => array(
			'model_to' => 'Model_Patrol_Record',
			'key_from' => 'id',
			'key_to' => 'header_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
		'reports' => array(
			'model_to' => 'Model_Patrol_Report',
			'key_from' => 'id',
			'key_to' => 'header_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);

}
