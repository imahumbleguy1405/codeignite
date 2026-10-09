<!DOCTYPE html>
<html>
<head>
    <title>Edit Task</title>
</head>
<body>

<h1>Edit Task</h1>

<p>
    <a href="<?= site_url('tasks') ?>">
        Back to Task List
    </a>
</p>

<form
    action="<?= site_url('tasks/update/' . $task['id']) ?>"
    method="post"
>
    <?= csrf_field() ?>

    <p>
        Title<br>
        <input
            type="text"
            name="title"
            value="<?= esc($task['title']) ?>"
            required
        >
    </p>

    <p>
        Status<br>
        <select name="status">
            <option
                value="Pending"
                <?= $task['status'] === 'Pending'
                    ? 'selected'
                    : '' ?>
            >
                Pending
            </option>

            <option
                value="In Progress"
                <?= $task['status'] === 'In Progress'
                    ? 'selected'
                    : '' ?>
            >
                In Progress
            </option>

            <option
                value="Completed"
                <?= $task['status'] === 'Completed'
                    ? 'selected'
                    : '' ?>
            >
                Completed
            </option>
        </select>
    </p>

    <p>
        Task Date<br>
        <input
            type="date"
            name="task_date"
            value="<?= esc($task['task_date']) ?>"
            required
        >
    </p>

    <button type="submit">
        Update Task
    </button>
</form>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

</body>
</html>