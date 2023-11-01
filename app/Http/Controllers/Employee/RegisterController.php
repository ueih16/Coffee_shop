<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\BaseController;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends BaseController
{
    public function index(): View
    {
        return view('employee.auth.register.index');
    }

    public function registering(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|unique:employees',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        Employee::query()->create([
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('employee.login')->withSuccess('You have successfully registered!.');
    }
}
