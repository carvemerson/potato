<?php

namespace Carvemerson\Potato;

use Carvemerson\Potato\Concerns\DefinesRoutes;

abstract class Resource implements DefinesRoutes
{
    protected static string $model = '';

    protected static ?string $title;

    public static function getTitle(): string
    {
        return static::$title ?? str(class_basename(static::$model))->plural()->title();
    }

    public static function getRoutePrefix(): string
    {
        return str(class_basename(static::$model))->plural()->kebab();
    }
}
