<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About This System</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>
<body>
    <nav class="navbar">
        <a href="<?= site_url('/') ?>">Welcome</a>
        <a href="<?= site_url('tasks') ?>">All Tasks</a>
        <a href="<?= site_url('profile') ?>">Profile</a>
        <a href="<?= site_url('about') ?>">About</a>
    </nav>

    <main class="container">
        <p class="eyebrow">About</p>
        <h1>About This System</h1>

        <section class="about-box">
            <p>This task management system was developed by <strong>Jose Gerard Joaquin S. Soriano</strong>.</p>
            <p>It displays today’s tasks, lists all tasks, and shows a demo user profile.</p>
        </section>
    </main>
</body>
</html>