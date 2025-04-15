<?php

use function Pest\Laravel\get;

test('Service provider works', function (): void {
    $response = get('/admin/potato');

    $response->assertStatus(200);
});
