<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
</head>
<body>

<h1>Edit Customer</h1>

<p>
    <a href="<?= site_url('customers') ?>">Back to Customers</a>
</p>

<form
    action="<?= site_url('customers/update/' . $customer['id']) ?>"
    method="post"
>
    <?= csrf_field() ?>

    <p>
        Full Name<br>
        <input
            type="text"
            name="full_name"
            value="<?= esc($customer['full_name']) ?>"
        >
    </p>

    <p>
        Email<br>
        <input
            type="email"
            name="email"
            value="<?= esc($customer['email']) ?>"
        >
    </p>

    <p>
        Phone<br>
        <input
            type="text"
            name="phone"
            value="<?= esc($customer['phone']) ?>"
        >
    </p>

    <button type="submit">Update Customer</button>
</form>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors() ?>
<?php endif; ?>

</body>
</html>