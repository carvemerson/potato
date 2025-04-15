<?php

namespace App\Admin\Resources\TaskResource\Pages;

use App\Admin\Resources\TaskResource;
use Carvemerson\Potato\Pages\RecordList;

class ListTasks extends RecordList
{
    protected static string $resource = TaskResource::class;
}
