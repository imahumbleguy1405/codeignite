<!DOCTYPE html>
<html>
<head>
    <title>New Task</title>
</head>
<body>

<h1>New Task</h1>

<p>
    <a href="<?= site_url('tasks') ?>">
        Back to Task List
    </a>
</p>

<form
    action="<?= site_url('tasks/create') ?>"
    method="post"
>
    <?= csrf_field() ?>

    <p>
        Title<br>
        <input
            type="text"
            name="title"
            value="<?= old('title') ?>"
            required
        >
    </p>

    <p>
        Status<br>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="In Progress">In Progress</option>
            <option value="Completed">Completed</option>
        </select>
    </p>

    <p>
        Task Date<br>
        <input
            type="date"
            name="task_date"
            value="<?= old('task_date') ?>"
            required
        >
    </p>

    <button type="submit">
        Save Task
    </button>
</form>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

</body>
</html>