<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
		{
			return view('register.index', [
				'title' => 'Register',
				'active' => 'register'
			]);
		}
    public function store(Request $request)
		{
			return $request->validate([
				'name' => 'required|min:5|max:255|alpha',
				'username' => ['required', 'min:5', 'max:255', 'unique:users' ],
				'email' => 'required|email:dns|unique:users',
				'password' => 'required|min:6|max:255'

			]);

		}
}
