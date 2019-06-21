<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 14.10.18
 * Time: 19:44.
 */

namespace App\Modules\User\Listeners;

use App\Modules\User\Events\UserRegisteredEvent;
use App\Modules\User\Notifications\WelcomeNotification;
use Illuminate\Notifications\Notification;

class SendWelcomeNotification extends Notification
{
    /**
     * @param UserRegisteredEvent $event
     */
    public function handle(UserRegisteredEvent $event): void
    {
        $event->getUser()->notify(new WelcomeNotification($event->getUser()));
    }

    /**
     * @param UserRegisteredEvent $event
     * @param $exception
     */
    public function failed(UserRegisteredEvent $event, $exception): void
    {
    }
}