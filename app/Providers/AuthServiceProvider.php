<?php

namespace App\Providers;

use Laravel\Passport\Passport;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();

        Passport::tokensExpireIn(
            now()->addMinutes(
                config('services.passport.oauth.expiration.access_token'),
            ),
        );
        Passport::refreshTokensExpireIn(
            now()->addMinutes(
                config('services.passport.oauth.expiration.refresh_token'),
            ),
        );
        Passport::personalAccessTokensExpireIn(now()->addMonths(6));
    }
}
