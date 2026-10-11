<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;

class Tasks extends BaseController
{
    public function today(): string
    {
        $today = Time::today('Asia/Manila')->toDateString();
        $taskModel = new TaskModel();

        return view('tasks/today', [
            'tasks' => $taskModel->getTasksForDate($today),
        ]);
    }

    public function index(): string
    {
        $taskModel = new TaskModel();

        return view('tasks/index', [
            'tasks' => $taskModel->getAllTasks(),
        ]);
    }

    public function profile(): string
    {
        $userModel = new UserModel();

        return view('pages/profile', [
            'user' => $userModel->first(),
        ]);
    }

    public function about(): string
    {
        return view('pages/about');
    }
}