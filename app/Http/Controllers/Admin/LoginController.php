<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.auth.login');
    }

    public function loggingIn(Request $request)
    {
        $validator = validator($request->all(), [
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:6',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors(implode("<br>", $validator->errors()->all()))->withInput();
        }

        $credentials = $request->only('email', 'password');

        auth('admins')->attempt($credentials);

        return auth('admins')->check() ? redirect()->route('admin.home')->withSuccess('You have successfully logged in!.')
                                                : redirect()->back()->withInput()->withError('Invalid credentials!.');
    }
}
