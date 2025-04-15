<?php

use function Pest\Laravel\get;

describe('UserResource route tests', function (): void {
    it('Index route works', function (): void {
        $response = get('/admin/users');

        $response->assertStatus(200);
    });

    it('validate the index return structure', function (): void {
        $response = get('/admin/users');

        $response->assertJson([
            'title' => 'Users',
        ]);
    });
});
