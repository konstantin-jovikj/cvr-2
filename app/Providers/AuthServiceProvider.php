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

        //Users

        Gate::define('бриши-корисник', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-корисник');
        });

        Gate::define('едитирај-корисник', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-корисник');
        });

        Gate::define('додај-корисник', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-корисник');
        });

        Gate::define('погледни-корисник', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-корисник');
        });


        //Resources

        Gate::define('бриши-ресурс', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-ресурс');
        });

        Gate::define('едитирај-ресурс', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-ресурс');
        });

        Gate::define('додај-ресурс', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-ресурс');
        });

        Gate::define('погледни-ресурс', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-ресурс');
        });


        //Documents

        Gate::define('бриши-документ', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-документ');
        });

        Gate::define('едитирај-документ', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-документ');
        });

        Gate::define('додај-документ', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-документ');
        });

        Gate::define('погледни-документ', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-документ');
        });


        //Cars

        Gate::define('бриши-возило', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-возило');
        });

        Gate::define('едитирај-возило', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-возило');
        });

        Gate::define('додај-возило', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-возило');
        });

        Gate::define('погледни-возило', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-возило');
        });



        //Finances

        Gate::define('бриши-финансии', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'бриши-финансии');
        });

        Gate::define('едитирај-финансии', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'едитирај-финансии');
        });

        Gate::define('додај-финансии', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'додај-финансии');
        });

        Gate::define('погледни-финансии', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'погледни-финансии');
        });


        //Authorized Signatory

        Gate::define('авторизиран-потписник', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'авторизиран-потписник');
        });


        //Authorized Принтер

        Gate::define('авторизиран-за-принтање', function (User $user) {
            return $user->role->permisions->contains('permision_name', 'авторизиран-за-принтање');
        });
    }
}
