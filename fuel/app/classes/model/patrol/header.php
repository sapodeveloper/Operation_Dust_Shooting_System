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

}
