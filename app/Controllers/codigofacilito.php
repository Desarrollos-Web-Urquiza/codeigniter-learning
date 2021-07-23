<?php

namespace App\Controllers;

class Codigofacilito extends BaseController
{
	function __construct() {
		//parent::__construct();

	}
    
    public function index()
	{
		//$dato['string'] = ":D";
		return view('codigofacilito/bienvenido');
	}
}
