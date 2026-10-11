<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo User Profile</title>
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
        <p class="eyebrow">Account</p>
        <h1>Demo User Profile</h1>

        <?php if ($user): ?>
            <section class="profile-card">
                <p><strong>Name:</strong> <?= esc($user['full_name']) ?></p>
                <p><strong>Username:</strong> <?= esc($user['username']) ?></p>
                <p><strong>Email:</strong> <?= esc($user['email']) ?></p>
            </section>
        <?php else: ?>
            <p class="empty-message">No user record found.</p>
        <?php endif; ?>
    </main>
</body>
</html>