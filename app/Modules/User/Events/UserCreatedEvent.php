<?php

namespace App\Modules\User\Events;

use App\Modules\Authorization\Listeners\AssignConfigRoleToUser;
use App\Modules\Authorization\Listeners\AssignDefaultRoleToUser;

class UserCreatedEvent extends UserRegisteredEvent
{
    public function listeners(): array
    {
        return [
            AssignDefaultRoleToUser::class,
            AssignConfigRoleToUser::class
        ];
    }
}
