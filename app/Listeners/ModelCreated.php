<?php

namespace App\Listeners;

use App\Events\ModelCreated as EventModelCreated;
use App\Notifications\ModelCreated as ModelCreatedNotification;


class ModelCreated
{
    /**
     * Handle the event.
     *
     * @param  ModelCreated  $event
     * @return void
     */
    public function handle(EventModelCreated $event)
    {
        $event->model->notify(new ModelCreatedNotification);
    }
}
