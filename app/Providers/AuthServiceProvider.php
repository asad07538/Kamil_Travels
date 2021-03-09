<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerPermissionPolicies();


        //
    }


    public function registerPermissionPolicies(){
            Gate::define('has_per',function($user,$permi){
               // $user=Auth::user();
               if ($user->type=="super_user") {
                   return true;
               }
               foreach($user->permissions as $permission){
                    if($permission->name == $permi){
                        return true;
                    }
               }
               foreach($user->groups as $group){
                    foreach($group->permissions as $permission){
                        if($permission->name == $permi){
                            return true;
                        }
                    }
                }
            return false;
        });
    }
}
