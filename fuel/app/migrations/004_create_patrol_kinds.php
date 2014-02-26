<?php

namespace Fuel\Migrations;

class Create_patrol_kinds
{
	public function up()
	{
		\DBUtil::create_table('patrol_kinds', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'kind_name' => array('constraint' => 50, 'type' => 'varchar'),
			'kind_condition' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('patrol_kinds');
	}
}