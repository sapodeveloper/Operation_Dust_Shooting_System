<?php

class Controller_Main extends Controller_Application
{
	// ログイン後のトップページを表示する
	public function action_index()
	{
		$this->template->contents = View::forge('main/index');
	}

}
