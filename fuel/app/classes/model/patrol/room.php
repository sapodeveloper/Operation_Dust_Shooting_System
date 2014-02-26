<?php

class Model_Patrol_Room extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'room_name',
		'room_condition',
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
	protected static $_table_name = 'patrol_rooms';

	protected static $_has_many = array(
		'headers' => array(
			'model_to' => 'Model_Patrol_Header',
			'key_from' => 'id',
			'key_to' => 'room_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);

}
