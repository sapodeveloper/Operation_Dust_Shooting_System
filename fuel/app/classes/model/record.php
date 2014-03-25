<?php

class Model_Record extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'room_id',
		'paper',
		'vinyl',
		'plastic',
		'confectionery_trash',
		'paper_pack',
		'plastic_bottle',
		'others',
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
	protected static $_table_name = 'records';

	protected static $_belongs_to = array(
		'users' => array(
			'model_to' => 'Model_User',
			'key_from' => 'user_id',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false
		),
		'rooms' => array(
			'model_to' => 'Model_Room',
			'key_from' => 'room_id',
			'key_to' => 'id',
			'cascade_save' => false,
			'cascade_delete' => false
		),
	);

}
