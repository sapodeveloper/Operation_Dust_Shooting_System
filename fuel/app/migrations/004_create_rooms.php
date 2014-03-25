<?php

namespace Fuel\Migrations;

class Create_rooms
{
	public function up()
	{
		\DBUtil::create_table('rooms', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'room_name' => array('constraint' => 20, 'type' => 'varchar'),
			'room_condition' => array('type' => 'boolean'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('rooms');
	}
}