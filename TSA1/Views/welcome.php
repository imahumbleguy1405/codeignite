<!DOCTYPE html>
<html>
<head>
    <title>Today's Tasks</title>
</head>
<body>

<h1>Today's Tasks</h1>

<nav>
    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('tasks') ?>">All Tasks</a> |
    <a href="<?= site_url('about') ?>">About</a>
</nav>

<hr>

<table border="1" cellpadding="5">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Task Date</th>
    </tr>

    <?php foreach ($tasks as $task): ?>
        <tr>
            <td><?= esc($task['title']) ?></td>
            <td><?= esc($task['status']) ?></td>
            <td><?= esc($task['task_date']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>