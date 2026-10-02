<!DOCTYPE html>
<html>
<head>
    <title>Add User</title>
</head>
<body>

<h1>Add User</h1>

<p>
    <a href="<?= site_url('users') ?>">Back to Users</a>
</p>

<form
    action="<?= site_url('users/create') ?>"
    method="post"
    enctype="multipart/form-data"
>
    <?= csrf_field() ?>

    <p>
        Username<br>
        <input type="text" name="username">
    </p>

    <p>
        Full Name<br>
        <input type="text" name="full_name">
    </p>

    <p>
        Avatar<br>
        <input type="file" name="avatar" accept="image/jpeg,image/png">
    </p>

    <button type="submit">Save User</button>
</form>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

</body>
</html>