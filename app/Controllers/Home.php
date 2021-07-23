<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$dato['string'] = ":D";
		return view('welcome_message', $dato);
	}
}
