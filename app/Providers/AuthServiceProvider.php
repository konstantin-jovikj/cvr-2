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
        Gate::define('бриши-корисник', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-корисник');
        });

        Gate::define('едитирај-корисник', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-корисник');
        });

        Gate::define('додај-корисник', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-корисник');
        });

        Gate::define('погледни-корисник', function(User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-корисник');
        });
    }
}
