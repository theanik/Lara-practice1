<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\NewCustomerHasRegisterEvent;
use App\Listeners\WelcomeNewCustomerListener;
use App\Listeners\RegisterCustomerNewsletter;
use App\Listeners\notifyAdminVieSlaks;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
            NewCustomerHasRegisterEvent::class =>[
                WelcomeNewCustomerListener::class,
                //RegisterCustomerNewsletter::class,
               // notifyAdminVieSlaks::class,
            ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
