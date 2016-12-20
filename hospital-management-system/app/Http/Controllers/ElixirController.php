<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ElixirController extends Controller
{
    public function hospitalIndex()
    {
    	return view('admin.elixir.hospital');
    }

    public function staffIndex()
    {
    	return view('admin.elixir.staff');
    }

    public function buildingIndex()
    {
    	return view('admin.elixir.building');
    }

    public function departmentIndex()
    {
    	return view('admin.elixir.department');
    }

    public function floorIndex()
    {
    	return view('admin.elixir.floor');
    }
}
