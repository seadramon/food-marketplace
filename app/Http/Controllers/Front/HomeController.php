<?php

namespace marketplace\Http\Controllers\Front;

use Illuminate\Http\Request;

use marketplace\Http\Requests;
use marketplace\Http\Controllers\Controller;

class HomeController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	return view('front.home');
    }
}
