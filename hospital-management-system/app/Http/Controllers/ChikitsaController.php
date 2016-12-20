<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ChikitsaController extends Controller
{
    public function Index()
    {
    	return view('admin.chikitsa.index');
    }
}
