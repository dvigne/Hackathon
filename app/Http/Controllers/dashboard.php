<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Auth;
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
    public function prof_edit_save(Request $request)
    {
    	$first = $request->input('first');
    	$last = $request->input('last');
    	$email = $request->input('email');
    	$role = $request->input('role');

    	\App\User::where('id', Auth::user()->id)
    	->update(['first' => $first, 'last' => $last, 'email' => $email, 'role' => $role]);

    	return redirect('/dashboard/profile');
    }
    public function mail()
    {
    	return view('dashboard/mail_view');
    }
}
