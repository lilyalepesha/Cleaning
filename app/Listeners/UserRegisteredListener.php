<?php

namespace App\Listeners;

use App\Notifications\UserRegisteredNotification;
use Illuminate\Auth\Events\Registered;


class UserRegisteredListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Registered $event): void
    {
        $event->user->notify((new UserRegisteredNotification($event->user))->locale('ru'));
    }
}
