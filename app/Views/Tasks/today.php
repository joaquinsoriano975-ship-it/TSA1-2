<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks for Today</title>
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
        <p class="eyebrow">Daily Dashboard</p>
        <h1>Tasks for Today</h1>
        <p class="subtitle"><?= esc(date('F j, Y')) ?></p>

        <?php if (empty($tasks)): ?>
            <p class="empty-message">No tasks scheduled for today.</p>
        <?php else: ?>
            <section class="task-list">
                <?php foreach ($tasks as $task): ?>
                    <article class="task-card">
                        <div>
                            <h2><?= esc($task['title']) ?></h2>
                            <p>Scheduled for today</p>
                        </div>
                        <span class="badge"><?= esc($task['status']) ?></span>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php endif; ?>
    </main>
</body>
</html>