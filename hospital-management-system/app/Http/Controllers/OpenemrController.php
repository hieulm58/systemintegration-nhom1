<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class OpenemrController extends Controller
{
    public function index()
    {
    	return view('admin.openemr');
    }
}
