<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MediFo | Daftar Dokter</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style-login.css" />
    <link rel="stylesheet" type="text/css" href="css/profile.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</head>

<body class="bg-white">
    <div class="container">
        <form action="index.html" method="post">
            <h3 style="padding-bottom: 15px; ">Edit Profile - Dokter Side</h3>
            <center>
                <div>
                    <img src="img/avatar.png" alt="" class="box-img">
                    <h2 style="padding-bottom: 15px; font-weight: 300;">Username</h2>
                </div>
            </center>
            <div class="form-content">
                <input id="name" name="name" placeholder="Nama" type="text" />
                <input id="nid" name="nid" placeholder="Nomor Induk Dokter" type="text" />
                <input id="user-name" name="user-name" placeholder="Username" type="text" />
                <input id="password" name="password" placeholder="Password" type="password" />
                <input id="email" name="email" placeholder="Email" type="text" />
                <input id="number" name="number" placeholder="Nomor Telepon" type="text" />
                <br />
                <div class="button">
                    Edit
                </div>
            </div>
        </form>
    </div>
</body>