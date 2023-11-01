<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class LoginController extends BaseController
{
    public function index()
    {
        return view('employee.auth.login');
    }

    public function loggingIn(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors(implode("<br>", $validator->errors()->all()))->withInput();
        }

        $credentials = $request->only('email', 'password');

        auth('employees')->attempt($credentials);

        if(auth('employees')->check()) {
            return redirect()->route('employee.home')->withSuccess('You have successfully logged in!.');
        } else {
            return redirect()->back()->withErrors('Invalid credentials!')->withInput();
        }
    }

    public function logout()
    {
        auth('employees')->logout();

        return redirect()->route('employee.home')->withSuccess('You have successfully logged out!');
    }
}
