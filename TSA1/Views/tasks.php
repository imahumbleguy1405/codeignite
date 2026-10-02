<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
</head>
<body>

<h1>All Tasks</h1>

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
        <td><?= $task['title']; ?></td>
        <td><?= $task['status']; ?></td>
        <td><?= $task['task_date']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>