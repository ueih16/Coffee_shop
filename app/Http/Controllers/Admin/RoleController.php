<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends BaseController
{
    public function edit(Request $request): View
    {
        $id = $request->id;

        $role = Role::find($id);
        $sadminAuthRoutes = [];

        if($role->name !== 'sadmin' && $role->guard_name === 'admins') {
            foreach (Route::getRoutes() as $route) {
                $middlewares = $route->gatherMiddleware();

//                dd($middlewares);

                if (in_array('permission:,admins', $middlewares) || in_array('permission:,admins_api', $middlewares)) {
                    if (in_array('role:sadmin,admin', $middlewares) || in_array('role:sadmin,admin_api', $middlewares)) {
                        $sadminAuthRoutes[] = $route->getName();
                    }
                }
            }
        }

        $permissions = Permission::select("*")->orWhere('guard_name',$role->guard_name)->orWhere('guard_name',$role->guard_name.'_api')
            ->get();

        foreach ($permissions as $key => $permission) {
            if(in_array($permission->name, $sadminAuthRoutes)) {
                unset($permissions[$key]);
            }
        }

        if($role->name != 'sadmin' && $role->guard_name == 'admin') {
            $permissions = array_values($permissions->toarray());
        }

        $rolePermissions = implode(',', $role->permissions->pluck('id')->toArray());

        $role1 = Role::where('name',$role->name)->where('id','<>',$role->id)->first();

        if($rolePermissions){
            if(count($role1->permissions)){
                $rolePermissions = $rolePermissions.','.implode(',', $role1->permissions->pluck('id')->toArray());
            } else {
                $rolePermissions = $rolePermissions;
            }
        } else {
            $rolePermissions = implode(',', $role1->permissions->pluck('id')->toArray());
        }

        // $role_name = Role::where('guard_name',$role->guard_name)->select('id','name')->orderBy('id','asc')->get();

        $role_name = Role::where("id",$id)->get();
        return view('admin.authorization.role.edit',compact('role','permissions','rolePermissions','role_name'));
        // return view('admin.authorization.role.edit',compact('role','permissions','rolePermissions'));
    }
}
