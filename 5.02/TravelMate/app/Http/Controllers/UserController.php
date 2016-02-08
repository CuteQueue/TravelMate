<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User as User;

class UserController extends Controller
{
    public function show(){
		$users = User::all();
		$data = array('users' => $users);
		return view('userview', $data);
	}
}
