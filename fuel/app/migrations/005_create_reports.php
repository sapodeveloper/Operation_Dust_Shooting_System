<?php

namespace Fuel\Migrations;

class Create_reports
{
	public function up()
	{
		\DBUtil::create_table('reports', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'room_id' => array('constraint' => 11, 'type' => 'int'),
			'report' => array('type' => 'text'),
			'correspond_user_id' => array('constraint' => 11, 'type' => 'int'),
			'report_condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('reports');
	}
}