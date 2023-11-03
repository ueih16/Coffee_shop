<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\BaseController;
use Illuminate\Http\RedirectResponse;
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
            'email' => 'required|email|exists:employees|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors(implode("<br>", $validator->errors()->all()))->withInput();
        }

        $credentials = $request->only('email', 'password');

        auth('employees')->attempt($credentials);

        return auth('employees')->check() ? redirect()->route('employee.home')->withSuccess('You have successfully logged in!.')
                                                : redirect()->back()->withInput()->withError('Invalid credentials!.');
    }

    public function logout(Request $request): RedirectResponse
    {
        auth('employees')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('employee.login')->withSuccess('You have successfully logged out!.');
    }
}
