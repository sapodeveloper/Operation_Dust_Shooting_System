<?php

class Controller_Application extends Controller_Template
{
	// 使用するテンプレートファイルを指定する
	public $template = 'layout/application';

	// 共通前処理
	public function before()
	{
		// templateを使用するように初期化する
		parent::before();
	}

	// 共通後処理
	public function after($response)
	{
		// 引数で受け取ったレスポンスをtemplateを用いて表示する
		return parent::after($response);
	}
}
