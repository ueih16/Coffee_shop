<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;

class HomeController extends BaseController
{
    public function index()
    {
        return view('user.home');
    }
}
