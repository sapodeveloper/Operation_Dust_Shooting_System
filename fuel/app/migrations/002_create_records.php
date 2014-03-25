<?php

namespace Fuel\Migrations;

class Create_records
{
	public function up()
	{
		\DBUtil::create_table('records', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_id' => array('constraint' => 11, 'type' => 'int'),
			'room_id' => array('constraint' => 11, 'type' => 'int'),
			'paper' => array('constraint' => 11, 'type' => 'int'),
			'vinyl' => array('constraint' => 11, 'type' => 'int'),
			'plastic' => array('constraint' => 11, 'type' => 'int'),
			'confectionery_trash' => array('constraint' => 11, 'type' => 'int'),
			'paper_pack' => array('constraint' => 11, 'type' => 'int'),
			'plastic_bottle' => array('constraint' => 11, 'type' => 'int'),
			'others' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('records');
	}
}
