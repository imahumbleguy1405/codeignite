<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
</head>
<body>

<h1>Add Customer</h1>

<p>
    <a href="<?= site_url('customers') ?>">Back to Customers</a>
</p>

<form
    action="<?= site_url('customers/create') ?>"
    method="post"
>
    <?= csrf_field() ?>

    <p>
        Full Name<br>
        <input type="text" name="full_name">
    </p>

    <p>
        Email<br>
        <input type="email" name="email">
    </p>

    <p>
        Phone<br>
        <input type="text" name="phone">
    </p>

    <button type="submit">Save Customer</button>
</form>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

</body>
</html>