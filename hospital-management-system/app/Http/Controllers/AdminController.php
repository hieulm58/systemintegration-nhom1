<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Auth;
//session_start();
class AdminController extends Controller {
	public function index()
	{	
		//echo Auth::user()->email;
		$_SESSION["session_user"] = Auth::user()->email;
		$_SESSION["session_password"] = Auth::user()->password;
		return view('admin.index');
	}
}