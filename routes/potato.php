<?php

use Illuminate\Support\Facades\Route;

$panels = config()->array('potato.panels', []);

foreach($panels as $panel) {
    Route::middleware([])->group(function () use ($panel): void {
        Route::prefix($panel)->group(function () {
            Route::get('/potato', function () {
                return 'potato';
            });
        });
    });
}
