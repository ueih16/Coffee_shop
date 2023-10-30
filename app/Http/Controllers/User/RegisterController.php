<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends BaseController
{
    public function index(): View
    {
        return view('user.auth.register.index');
    }

    public function registering(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6|max:255|confirmed',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors(implode("<br>", $validator->errors()->all()));
        }

        $user = User::create([
            'email'    => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect()->route('user.login');
    }
}
