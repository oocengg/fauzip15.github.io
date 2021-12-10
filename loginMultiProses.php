<head>
    <title>Input!</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <script src="jquery-3.6.0.js"></script>
    <link href='css/styleEks.css' rel='stylesheet' type='text/css'>
    <script>
        $(document).ready(function() {
            $("#card").show()
                .css({
                    'opacity': 0,
                    'bottom': '-100px'
                })
                .animate({
                    'opacity': '1',
                    'bottom': '30px'
                }, 1000);
        });
    </script>
</head>

<?php
    include "koneksi.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row['level'] == 1) {
        session_start();
        $_SESSION['username'] = $username;
        ?>
        <div id="card">
            <center>
                <a href="homeCRUD.php">
                    <img src="img/logo.png">
                        <div class="button" style="margin-top: 180px;">
                            <h1>Selamat Datang Admin!</h1>
                            <button class="button-28" role="button">Halaman Utama</button>
                        </div>
                </a>
            </center>
        </div>
    <?php
    $_SESSION['username'] = $username;
    } else if($row['level'] == 2){
        $_SESSION['username'] = $username;
        ?>
        <div id="card">
            <center>
                <a href="formGuest.php">
                    <img src="img/logo.png">
                        <div class="button" style="margin-top: 180px;">
                            <h1>Selamat Datang Guest!</h1>
                            <button class="button-28" role="button">Masuk Kehalaman Register</button>
                        </div>
                </a>
                </center>
        </div>
    <?php
    } else {
        echo "Anda gagal login! Silahkan ";
        ?>
        <a href="login.html">Login Kembali</a>
    <?php

        echo mysqli_error($connect);
    }
?>