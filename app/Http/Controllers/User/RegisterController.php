<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\View\View;

class RegisterController extends BaseController
{
    public function index(): View
    {
        return view('user.auth.register.index');
    }

    public function registering(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = $this->user->create([
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        auth('users')->login($user);

        return redirect()->route('user.login');
=======

class RegisterController extends BaseController
{
    public function index()
    {
        return view('user.register.index');
>>>>>>> 7488440b735fc61bf679cba0e8b32cf9fc53c5b3
    }
}
