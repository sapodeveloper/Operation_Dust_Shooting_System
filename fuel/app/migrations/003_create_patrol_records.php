<?php

namespace Fuel\Migrations;

class Create_patrol_records
{
	public function up()
	{
		\DBUtil::create_table('patrol_records', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'header_id' => array('constraint' => 11, 'type' => 'int'),
			'kind_id' => array('constraint' => 11, 'type' => 'int'),
			'kind_count' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patrol_records');
	}
}