<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    public function index()
    {
        return view('user.auth.login');
    }
}
