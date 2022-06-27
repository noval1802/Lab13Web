<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/login.css'); ?>">
</head>

<body class="container">
    <?php if (session()->getFlashdata('flash_msg')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('flash_msg') ?></div>
    <?php endif; ?>
    <form action="" method="post">
        <h2>Sign In</h2>
        <div class="inputBox">
            <span for="InputForEmail">Email address</span>
            <div class="box">
                <div class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </div>
                <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
            </div>
        </div>
        <div class="inputBox">
            <span for="InputForPassword">Password</span>
            <div class="box">
                <div class="icon"><ion-icon name="lock-closed"></ion-icon>
                </div>
                <input type="password" name="password" class="form-control" id="InputForPassword">
            </div>
            
        </div>
        <div class="inputBox">
            <div class="box">
                <div class="icon"></div>
                <input type="submit" value="Log in"></input>
            </div>
        </div>
    </form>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>