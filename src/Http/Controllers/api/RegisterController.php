<?php

namespace HanhDo\Register\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\User;
use HanhDo\Register\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register::index');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create($request->all());
        return response()->json([
            'data' => $user,
            'message' => 'Success'
        ], 200
        );
    }
}
