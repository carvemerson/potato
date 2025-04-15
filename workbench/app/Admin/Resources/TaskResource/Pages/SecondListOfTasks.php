<?php

namespace App\Admin\Resources\TaskResource\Pages;

use App\Admin\Resources\TaskResource;
use Carvemerson\Potato\Pages\RecordList;

class SecondListOfTasks extends RecordList
{
    protected static string $resource = TaskResource::class;

    protected ?string $title = 'The Second List of Tasks';
}
