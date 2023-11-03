<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('delete_user', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'delete_user');
        });

        Gate::define('edit_user', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'edit_user');
        });

        Gate::define('add_user', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'add_user');
        });
    }
}
