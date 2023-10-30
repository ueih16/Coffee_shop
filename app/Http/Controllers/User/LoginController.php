<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends BaseController
{
    public function index(): View
    {
        return view('user.auth.login');
    }

<<<<<<< HEAD
    public function loggingIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withError(implode("<br>", $validator->errors()->all()))->withInput();
        }

        $credentials = $request->only('email', 'password');

        auth('users')->attempt($credentials);

        if(auth('users')->check()) {
            return redirect()->route('user.home')->withSuccess('You have successfully logged in!');
        } else {
            return redirect()->back()->withError('Invalid credentials!')->withInput();
        }
=======
    public function redirect()
    {
        return redirect()->route('user.login')->withErrors('123');
>>>>>>> 7488440b735fc61bf679cba0e8b32cf9fc53c5b3
    }
}
