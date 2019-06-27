<?php

namespace App\Providers\App\Listeners;

use App\Events\NewCustomerHasRegisterEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class WelcomeNewCustomerListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewCustomerHasRegisterEvent  $event
     * @return void
     */
    public function handle(NewCustomerHasRegisterEvent $event)
    {
        //
    }
}
