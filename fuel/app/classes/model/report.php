<?php

class Model_Report extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'user_id',
		'room_id',
		'report',
		'correspond_user_id',
		'report_condition',
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
	protected static $_table_name = 'reports';

}