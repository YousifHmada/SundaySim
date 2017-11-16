<?php

namespace SundaySim\Http\Controllers\Backend;

use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
	function __construct()
	{
		$this->middleware('auth');
	}
}
