<?php

namespace App\Providers\Filament;

use App\Models\User;

class BoringAvatarsProvider
{
    public function get(User $user): string
    {
        $name = $user->name;

        return 'https://source.boringavatars.com/beam/120/' . urlencode($name);
    }
}
