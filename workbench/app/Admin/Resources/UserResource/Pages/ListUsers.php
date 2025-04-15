<?php

namespace App\Admin\Resources\UserResource\Pages;

use App\Admin\Resources\UserResource;
use Carvemerson\Potato\Pages\RecordList;

class ListUsers extends RecordList
{
    protected static string $resource = UserResource::class;
}
