<?php

namespace Fuel\Migrations;

class Create_users
{
	public function up()
	{
		\DBUtil::create_table('users', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'user_name' => array('constraint' => 10, 'type' => 'varchar'),
			'user_condition' => array('type' => 'boolean'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));

		$users = array("中奥", "王子", "大盛", "三澤", "Edy豊嶋");
		reset($users);
		foreach ($users as $key => $value) {
			\DB::insert('users')->set(array('user_name' => $value, 'user_condition' => 1))->execute();
		}
	}

	public function down()
	{
		\DBUtil::drop_table('users');
	}
}
