<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class dashboard extends Controller
{
    public function index()
    {
    	return view('dashboard/index');
    }
    public function profile()
    {
    	return view('dashboard/profile');
    }
    public function prof_edit()
    {
    	return view('dashboard/prof_edit');
    }
}
