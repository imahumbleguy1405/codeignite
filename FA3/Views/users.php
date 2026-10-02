<!DOCTYPE html>
<html>
<head>
    <title>User Accounts</title>
</head>
<body>

<h1>User Accounts</h1>

<p>
    <a href="<?= site_url('/') ?>">Home</a> |
    <a href="<?= site_url('about') ?>">About</a> |
    <a href="<?= site_url('users/new') ?>">Add User</a>
</p>

<hr>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Avatar</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= esc($user['id']) ?></td>

            <td>
                <?php if (!empty($user['avatar'])): ?>
    <img
        src="<?= esc(base_url('uploads/avatars/' . $user['avatar'])) ?>"
        alt="User Avatar"
        width="80"
        height="80"
    >
<?php else: ?>
    No Avatar
<?php endif; ?>
            </td>

            <td><?= esc($user['username']) ?></td>
            <td><?= esc($user['full_name']) ?></td>

            <td>
                <a href="<?= site_url('users/edit/' . $user['id']) ?>">
                    Edit
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>