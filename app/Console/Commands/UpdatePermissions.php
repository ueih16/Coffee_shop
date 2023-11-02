<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;

class PermissionUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permit';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Permission begin!.');
        //get
        // $routes_admin = collect(Route::getRoutes())
        // ->map(fn($route) => $this->getRouteInformation($route))
        // ->filter(fn($route) => $this->routeIsPermission($route,'permission:,admin'))
        // ->sortBy('name')
        // ->values()
        // ->toArray();

        $routes_role_admin = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermissionRole($route, 'permission:,admins', 'role:sadmin,admin', false))
            ->sortBy('name')
            ->values()
            ->toArray();

        $routes_role_sadmin = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermissionRole($route, 'permission:,admins', 'role:sadmin,admin', true))
            ->sortBy('name')
            ->values()
            ->toArray();

        // $routes_admin_api = collect(Route::getRoutes())
        // ->map(fn($route) => $this->getRouteInformation($route))
        // ->filter(fn($route) => $this->routeIsPermission($route, 'permission:,admin_api'))
        // ->sortBy('name')
        // ->values()
        // ->toArray();

        $routes_role_admin_api = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermissionRole($route, 'permission:,admins_api', 'role:sadmin,admin_api', false))
            ->sortBy('name')
            ->values()
            ->toArray();

        $routes_role_sadmin_api = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermissionRole($route, 'permission:,admins_api', 'role:sadmin,admin_api', true))
            ->sortBy('name')
            ->values()
            ->toArray();

        $routes_employee = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermission($route, 'permission:,employees'))
            ->sortBy('name')
            ->values()
            ->toArray();

        $routes_employee_api = collect(Route::getRoutes())
            ->map(fn($route) => $this->getRouteInformation($route))
            ->filter(fn($route) => $this->routeIsPermission($route, 'permission:,employees_api'))
            ->sortBy('name')
            ->values()
            ->toArray();

        $permissionNames_admin = [];
        foreach ($routes_role_admin as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'admins',
                ],
            );
            $permissionNames_admin[] = $routeName;

            $this->info("{$routeName->name}");
        }

        foreach ($routes_role_sadmin as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'admins',
                ],
            );

            $this->info("{$routeName->name}");
        }

        $permissionNames_admin_api = [];
        foreach ($routes_role_admin_api as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'admins_api',
                ],
            );

            $permissionNames_admin_api[] = $routeName;

            $this->info("{$routeName->name}");
        }

        foreach ($routes_role_sadmin_api as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'admins_api',
                ],
            );

            $this->info("{$routeName->name}");
        }

        $permissionNames_employee = [];
        foreach ($routes_employee as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'employees',
                ],
            );

            $permissionNames_employee[] = $routeName;

            $this->info("{$routeName->name}");
        }

        $permissionNames_employee_api = [];
        foreach ($routes_employee_api as $route) {
            $routeName = Permission::updateOrCreate(
                [
                    'name' => $route['name'],
                ],
                [
                    'name' => $route['name'],
                    'guard_name' => 'employees_api',
                ],
            );

            $permissionNames_employee_api[] = $routeName;

            $this->info("{$routeName->name}");
        }


        //Tạo tài khoản sadmin
        $role = Role::where([
            'name' => 'sadmin',
            'guard_name' => 'admins',
        ])->first();

        $permissions = Permission::where('guard_name','admins')->pluck('id');

        $role->syncPermissions($permissions);

        $role = Role::where([
            'name' => 'sadmin',
            'guard_name' => 'admins_api',
        ])->first();

        $permissions = Permission::where('guard_name','admins_api')->pluck('id');

        $role->syncPermissions($permissions);

        //Tạo tài khoản admin
        $role = Role::where([
            'name' => 'admin',
            'guard_name' => 'admins',
        ])->first();

        $role->syncPermissions($permissionNames_admin);

        $role = Role::where([
            'name' => 'admin',
            'guard_name' => 'admins_api',
        ])->first();

        $role->syncPermissions($permissionNames_admin_api);

        //Tạo tài khoản employee
        $role = Role::where([
            'name' => 'employee',
            'guard_name' => 'employees',
        ])->first();

        $role->syncPermissions($permissionNames_employee);

        $role = Role::where([
            'name' => 'employee',
            'guard_name' => 'employees_api',
        ])->first();

        $role->syncPermissions($permissionNames_employee_api);

        $this->info('Permission end!.');
    }

    /**
     * @param  array  $route
     * @return bool
     */
    private function routeIsPermission(array $route,string $permission): bool
    {
        if (in_array($permission, $route['middleware'])) {
            return true;
        }
        return false;
    }

    /**
     * @param  array  $route
     * @return bool
     */
    private function routeIsPermissionRole(array $route,string $permission,string $role,bool $is_role): bool
    {
        if (in_array($permission, $route['middleware'])) {
            if (in_array($role, $route['middleware'])) {
                return $is_role;
            } else {
                return !$is_role;
            }
        }
        return false;
    }

    /**
     * @param  Route  $route
     * @return array
     */
    private function getRouteInformation($route): array
    {
        return [
            'method' => implode('|', $route->methods()),
            'uri' => $route->uri(),
            'name' => $route->getName(),
            'middleware' => $route->middleware(),
        ];
    }
}
