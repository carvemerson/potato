<?php

namespace App\Admin\Resources;

use App\Admin\Resources\TaskResource\Pages\ListTasks;
use App\Admin\Resources\TaskResource\Pages\SecondListOfTasks;
use App\Models\Task;
use Carvemerson\Potato\Resource;

class TaskResource extends Resource
{
    public static string $model = Task::class;

    protected static ?string $title = 'The List of Tasks';

    public static function getRoutes(): array
    {
        return [
            'index' => ListTasks::route('/'),
            'index2' => SecondListOfTasks::route('/t2'),
        ];
    }
}
