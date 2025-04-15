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

describe('TaskResource route tests', function (): void {
    it('Index route works', function (): void {
        $response = get('/admin/tasks');

        $response->assertStatus(200);
    });

    it('validate the index return structure', function (): void {
        $response = get('/admin/tasks');

        $response->assertJson([
            'title' => 'The List of Tasks',
        ]);
    });

    it('validate the second list of tasks', function (): void {
        $response = get('/admin/tasks/t2');

        $response->assertJson([
            'title' => 'The Second List of Tasks',
        ]);
    });
});
