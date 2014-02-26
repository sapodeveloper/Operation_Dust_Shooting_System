<?php

namespace Fuel\Migrations;

class Create_patrol_reports
{
	public function up()
	{
		\DBUtil::create_table('patrol_reports', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'header_id' => array('constraint' => 11, 'type' => 'int'),
			'report_text' => array('type' => 'text'),
			'finish' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patrol_reports');
	}
}