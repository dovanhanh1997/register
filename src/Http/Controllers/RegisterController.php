<?php

namespace HanhDo\Register\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use HanhDo\Register\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('register::index',compact('users'));
    }

    public function register(RegisterRequest $request)
    {
        User::create($request->all());
        return back();
    }
}
