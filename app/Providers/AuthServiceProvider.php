<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Voyage;
use App\Policies\VoyagePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Voyage::class => VoyagePolicy::class,
        Etape::class => EtapePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void {
        $this->registerPolicies();
    }
}
