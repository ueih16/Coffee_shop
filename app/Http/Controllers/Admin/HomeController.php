<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends BaseController
{
    public function home()
    {
        $role_list = Role::orderBy('id','DESC')->get();
        $roles  = [];
        foreach ($role_list as $key => $role) {
            if(!str_contains($role['guard_name'],'_api')) {
                $roles[] = $role;
            }
        }
        return view('admin.home', compact('roles'));
    }
}
