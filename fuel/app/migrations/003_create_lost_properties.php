<?php

namespace Fuel\Migrations;

class Create_lost_properties
{
	public function up()
	{
		\DBUtil::create_table('lost_properties', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'room_id' => array('constraint' => 11, 'type' => 'int'),
			'lost_object' => array('constraint' => 20, 'type' => 'varchar'),
			'lost_object_count' => array('constraint' => 11, 'type' => 'int'),
			'pc_number' => array('constraint' => 11, 'type' => 'int'),
			'memo' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('lost_properties');
	}
}