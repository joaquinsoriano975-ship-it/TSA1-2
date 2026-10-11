<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TasksSeeder extends Seeder
{
    public function run()
    {
        $today = date('Y-m-d');
        $yesterday = date('Y-m-d', strtotime('-1 day'));
        $twoDaysAgo = date('Y-m-d', strtotime('-2 days'));
        $now = date('Y-m-d H:i:s');

        $tasks = [
            ['title' => 'Review project requirements', 'status' => 'pending', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Prepare daily report', 'status' => 'pending', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Check team messages', 'status' => 'completed', 'task_date' => $today, 'created_at' => $now],
            ['title' => 'Update task list', 'status' => 'pending', 'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Organize project files', 'status' => 'completed', 'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Send progress update', 'status' => 'pending', 'task_date' => $yesterday, 'created_at' => $now],
            ['title' => 'Plan upcoming work', 'status' => 'pending', 'task_date' => $twoDaysAgo, 'created_at' => $now],
            ['title' => 'Review completed tasks', 'status' => 'completed', 'task_date' => $twoDaysAgo, 'created_at' => $now],
        ];

        $this->db->table('tasks')->insertBatch($tasks);

        $this->db->table('users')->insert([
            'username' => 'demo_user',
            'full_name' => 'Demo User',
            'email' => 'demo@example.com',
            'created_at' => $now,
        ]);
    }
}