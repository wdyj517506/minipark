<?php
namespace app\admin\controller;

use app\BaseController;

/**
 * 
 */
class Index extends BaseController
{

	public function index()
	{
		$result = [
			"status" => 1,
			"message" => "ok",
			"result" => [
				"id" => 1
			],
		];

		$header = [
			"Token" => "123456"
		];

		return json($result, 201, $header);
	}
	public function demo() {
	    dump($this->request()->get());
    }
	
}