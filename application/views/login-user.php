<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Masuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/style-login.css' ?>" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- ini jquery -->
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
            <form action="<?= base_url('login/user') ?>" method="post">
                <center>
                    <img class="logo" src="<?= base_url() . 'assets/img/logo.png' ?>" />
                </center>
                <h3>Masuk - User Side</h3>
                <p>Gunakan Akun MediFo yang Terdaftar</p>
                <div class="form-content">
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
                    <?php } ?>
                    <input id="username" name="username" placeholder="Username" type="text" />
                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                    <input id="password" name="password" placeholder="Password" type="password" /><br />
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                    <button type="submit" class="button">
                        Masuk
                    </button>
                    <br />
                    <div type="submit" class="signup-message">
                        <a href="<?= base_url() . 'register/user' ?>">Belum punya Akun?</a>
                    </div>
                </div>
            </form>
        </div>
    </center>
</body>