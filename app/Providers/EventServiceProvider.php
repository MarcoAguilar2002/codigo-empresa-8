<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\PersonaSaved;
use App\Listeners\OptimizePersonaImage;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        PersonaSaved::class => [
            OptimizePersonaImage::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        parent::boot();
    }
}
