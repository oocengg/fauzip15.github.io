<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $agama = $_GET['agama'];
    $umur = $_GET['umur'];
    $nohp = $_GET['nohp'];
    $email = $_GET['email'];
    $alamat = $_GET['alamat'];
    $gender = $_GET['gender'];
    $alasan = $_GET['alasan'];
    
    $sql = " INSERT INTO anggotaBaru (id, nama, agama, umur, nohp, email, alamat, gender, alasan)
            VALUES ('$id', '$nama', '$agama', '$umur', '$nohp', '$email', '$alamat', '$gender', '$alasan')";

    if (mysqli_query($connect, $sql)) {
?>
<html>

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

<body>
    <div id="card">
        <center>
            <a href="logout.php">
                <img src="img/logo.png">
                <div class="button" style="margin-top: 180px;">
                    <h1>Data Berhasil ditambahkan!</h1>
                    <h1>Silahkan Menunggu Informasi Lebih Lanjut!</h1>
                    <button class="button-28" role="button">Log Out!</button>
                </div>
            </a>
        </center>
    </div>
</body>

</html>
<?php
    } else {
?>
<html>

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

<body>
    <div id="card">
        <center>
            <a href="login.html">
                <img src="img/logo.png">
                <div class="button" style="margin-top: 180px;">
                    <h1>Data Gagal ditambahkan!</h1>
                    <p><?php echo "Record gagal ditambahkan! <br>" . mysqli_error($connect); ?></p>
                    <button class="button-28" role="button">Log Out!</button>
                </div>
            </a>
        </center>
    </div>
</body>

</html>
<?php
    }
    mysqli_close($connect);
?>