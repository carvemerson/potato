<?php

use Illuminate\Support\Facades\Route;

$panels = array_keys(config()->array('potato.panels', []));

foreach ($panels as $panel) {
    Route::middleware([])->group(function () use ($panel): void {
        Route::prefix($panel)->group(function () use ($panel) {
            Route::get('/potato', function () {
                return 'potato';
            });

            $namespace = config()->string('potato.panels.'.$panel.'.namespace');
            $resourcePath = config()->string('potato.panels.'.$panel.'.paths.resources');

            // When the code is used in package development, load resources from the workbench folder instead of app_path()
            $basePath = file_exists(__DIR__.'/../workbench') ? __DIR__.'/../workbench/app/' : app_path();

            $resourcesPath = $basePath.'/'.$resourcePath.'/';

            $files = glob($resourcesPath.'*.php');

            foreach ($files as $file) {
                $className = $namespace.pathinfo($file, PATHINFO_FILENAME);

                if (class_exists($className)) {
                    $routes = $className::getRoutes();

                    foreach ($routes as $name => $route) {
                        $route->name($panel.'.'.$className::getRoutePrefix().'.'.$name);
                    }
                }
            }
        });
    });
}
