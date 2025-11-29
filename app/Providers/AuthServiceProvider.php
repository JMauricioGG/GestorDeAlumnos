<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Tarea;
use App\Policies\TareaPolicy;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Tarea::class => TareaPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
