<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<p>
    <a href="<?= site_url('users') ?>">Back to Users</a>
</p>

<form
    action="<?= site_url('users/update/' . $user['id']) ?>"
    method="post"
    enctype="multipart/form-data"
>
    <?= csrf_field() ?>

    <p>
        Username<br>
        <input
            type="text"
            name="username"
            value="<?= esc($user['username']) ?>"
        >
    </p>

    <p>
        Full Name<br>
        <input
            type="text"
            name="full_name"
            value="<?= esc($user['full_name']) ?>"
        >
    </p>

    <p>
        Avatar<br>
        <input type="file" name="avatar">
    </p>

    <button type="submit">Update User</button>
</form>

</body>
</html>