<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login</h1>

<?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;">
        <?= esc(session()->getFlashdata('error')) ?>
    </p>
<?php endif; ?>

<form
    action="<?= site_url('login/authenticate') ?>"
    method="post"
>
    <?= csrf_field() ?>

    <p>
        Username<br>
        <input
            type="text"
            name="username"
            required
        >
    </p>

    <p>
        Password<br>
        <input
            type="password"
            name="password"
            required
        >
    </p>

    <button type="submit">
        Login
    </button>
</form>

</body>
</html>