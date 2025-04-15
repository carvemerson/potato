<?php

namespace App\Admin\Resources;

use App\Admin\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Carvemerson\Potato\Resource;

class UserResource extends Resource
{
    public static string $model = User::class;

    public static function getRoutes(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'othername' => ListUsers::route('/{record}'),
        ];
    }
}
