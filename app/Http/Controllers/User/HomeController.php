<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends BaseController
{
    public function index(): View
    {
        return view('user.home');
    }
}
