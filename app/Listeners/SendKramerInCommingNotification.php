<?php

namespace App\Listeners;

use App\Events\KramerInComming;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendKramerInCommingNotification
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
     * @param  \App\Events\KramerInComming  $event
     * @return void
     */
    public function handle(KramerInComming $event)
    {
        //
    }
}
