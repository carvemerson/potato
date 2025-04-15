<?php

namespace Carvemerson\Potato\Concerns;

use Illuminate\Routing\Route;

interface DefinesRoutes
{
    /**
     * @return array<string, Route>
     */
    public static function getRoutes(): array;
}
