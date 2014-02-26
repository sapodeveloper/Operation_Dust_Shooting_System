<?php

class Model_Patrol_Kind extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'kind_name',
		'kind_condition',
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
	protected static $_table_name = 'patrol_kinds';

	protected static $_has_many = array(
		'records' => array(
			'model_to' => 'Model_Patrol_Record',
			'key_from' => 'id',
			'key_to' => 'kind_id',
			'cascade_save' => true,
			'cascade_delete' => false
		),
	);

}
