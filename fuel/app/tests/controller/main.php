<?php

/**
 * @group App
 * @group Controller
 * @group Main
 */

class Main_Controller_Main extends TestCase
{
	// action_indexが正常にレスポンスを返すことをテストする
	public function test_action_index()
	{
		$response = Request::forge('main/index')->execute()->response();
		$this->assertEquals(200, $response->status);
	}
}
