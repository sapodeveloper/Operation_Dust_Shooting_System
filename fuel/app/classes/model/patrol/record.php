<?php

class Model_Patrol_Record extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'header_id',
		'kind_id',
		'kind_count',
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
	protected static $_table_name = 'patrol_records';

}
