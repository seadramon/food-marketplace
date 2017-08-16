<?php

namespace marketplace\Http\Controllers\Front;

use Auth;
use Cache;
use View;
use marketplace\Http\Controllers\Controller;
use marketplace\Models\PrivateMessages;
use marketplace\Models\Conversation;
use marketplace\Models\Category;
use marketplace\Models\Notifications;
use DB;
use Session;

class BaseController extends Controller
{
	public $user, $settings;

    public function __construct()
    {
    	$this->settings = ['url'=>url('/')];

		$this->user = $user = Auth::user();	

		View::share('user', $this->user);
		View::share('settings', $this->settings);
    }
}
