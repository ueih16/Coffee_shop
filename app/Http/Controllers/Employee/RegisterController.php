<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\BaseController;
use App\Mail\SendRegisterMail;
use App\Models\Employee;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RegisterController extends BaseController
{
    public function index(): View
    {
        return view('employee.auth.register.index');
    }

    public function sendConfirmationMail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|unique:employees',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $data = [
            'email' => $request->email,
        ];

        try {
            Mail::to($request->email)->send(new SendRegisterMail($data['email']));
            return redirect()->route('employee.register')->withSuccess('Email sent successfully');
        } catch (Exception $er) {
            return redirect()->route('employee.register')->withError('Email sent failed');
        }
    }

    public function confirmPassword(Request $request)
    {
        $email = $request->data;
//        $check_verified = Employee::where('email', $email)->first();
//        if($check_verified->verify_at){
//            return redirect()->route('employee.register')->withError('Account already exists');
//        }
        return view ('employee.auth.register.confirm_password', compact('email'));
    }

    public function confirmingPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email|unique:employees',
            'password' => 'required|min:8|confirmed',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors()->all())->withInput();
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $input['email_verified_at'] = Carbon::now();

        try {
            Employee::create($input)->assignRole(['employee']);
            return redirect()->route('employee.login')->withSuccess('Account created successfully');
        } catch (\Exception $er) {
            return redirect()->route('employee.register')->withError('Account created failed');
        }
    }
}
