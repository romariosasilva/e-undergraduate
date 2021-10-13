<?php

namespace App\Providers;

use App\Models\Permission;
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
    /**
   * 'App\Models\Model' => 'App\Policies\ModelPolicy',
   * 'App\Models\User' => 'App\Policies\UserPolicy',
   * 'App\Models\Work' => 'App\Policies\WorkPolicy',
   */
  ];

  /**
   * Register any authentication / authorization services.
   *
   * @return void
   */
  public function boot()
  {
    $this->registerPolicies();

    /**
     * Gate::define('viewWork', function ($user, $work) {
     * return $user->id === $work->user_id;
     * });
     */

    $permissions = Permission::with('roles')->get();

    foreach ($permissions as $permission) {
      Gate::define($permission->name, function ($user) use ($permission) {
        return $user->hasPermission($permission);
      });
    }
  }
}
