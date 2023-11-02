<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;

class HomeController extends BaseController
{
    public function index(): View
    {
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

        return view('employee.home');
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
