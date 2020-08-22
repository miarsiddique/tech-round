<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestController extends Controller
{
	public function usersList()
	{
		$userArr = [];
		$users = User::get();

		foreach ($users as $key => $users) {
			$userArr[$key] = $users->getFullName();
		}

		$users = setStatus($userArr);
		return $this->successResponse($users);
	}

    public function index()
    {
    	return view('userlist');
    }

	public function create(){
		return view('new-user');
	}

    public function store(Request $request)
    {
		$user = User::create($request->all());
		return $this->successResponse($user);
	}

}
