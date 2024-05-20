<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TaskServiceTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_can_create_task(): void
    {
        $taskData = [
            'user_id' => 1,
            'title' => 'Test Task',
            'status' => 0
        ];

        $service = new TaskService();
        $service->createTask($taskData);

        $this->assertDatabaseHas('tasks', [
            'user_id' => 1,
            'title' => 'Test Task',
            'status' => 0
        ]);
    }
}
