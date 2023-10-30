<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class RegisterController extends BaseController
{
    public function index()
    {
        return view('user.register.index');
    }
}
