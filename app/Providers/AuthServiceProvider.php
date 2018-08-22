<?php

namespace App\Providers;

use App\AdminPermission;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
//        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $permissions = AdminPermission::all();
        foreach ($permissions as $permission) {
            Gate::define($permission->name, function ($user) use ($permission) {
//                var_dump($user->hasPermission($permission));
//                return $user->hasPermission($permission);
                return true;//先强制写成true吧
            });
        }
    }
}
