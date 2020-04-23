<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Daftar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style-login.css' ?>" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.logo').click(function() {
                window.location = '<?= base_url('Welcome'); ?>';
            });

        });
    </script>
</head>

<body class="bg-white">
    <center>
        <div class="container">
            <form action="#" method="post">
                <center>
                    <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>" href="<?= base_url('Welcome') ?>" />
                </center>
                <h3>Daftar</h3>
                <p>Buat Akun MediFo</p>
                <div class="form-content">
                    <input id="name" name="name" placeholder="Nama" type="text" value="<?= set_value('name'); ?>" />
                    <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
                    <input id="username" name="username" placeholder="Username" type="text" value="<?= set_value('usernamedok'); ?>" />
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    <input id="password" name="password" placeholder="Password" type="password" value="<?= set_value(''); ?>" />
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    <input id="email" name="email" placeholder="Email" type="text" value="<?= set_value('email'); ?>" />
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                    <input id="number" name="number" placeholder="Nomor Telepon" type="text" value="<?= set_value('number'); ?>" />
                    <?= form_error('number', '<small class="text-danger">', '</small>'); ?>
                    <br />
                    <button type="submit" class="button">
                        Daftar Sekarang!
                    </button>
                    <br />
                    <div class="register-message">
                        <a href="<?= base_url() . 'login/user' ?>">Sudah punya Akun?</a>
                    </div>
                </div>
            </form>
        </div>
    </center>
</body>