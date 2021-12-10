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
    
    $query = "UPDATE anggotaBaru SET nama = '$nama', agama = '$agama', umur = '$umur', 
                nohp = '$nohp', email = '$email', alamat = '$alamat', gender = '$gender', alasan = '$alasan' WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if (mysqli_query($connect, $query)) {
        ?>
        <html>
        
        <head>
            <title>Edit!</title>
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
                    <a href="homeCRUD.php">
                        <img src="img/logo.png">
                        <div class="button" style="margin-top: 180px;">
                            <h1>Data Berhasil diEdit!</h1>
                            <button class="button-28" role="button">Kembali Ke Halaman Utama</button>
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
            <title>Edit!</title>
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
                    <a href="homeCRUD.php">
                        <img src="img/logo.png">
                        <div class="button" style="margin-top: 180px;">
                            <h1>Data Gagal diEdit!</h1>
                            <p><?php echo "Record gagal ditambahkan! <br>" . mysqli_error($connect); ?></p>
                            <button class="button-28" role="button">Kembali Ke Home!</button>
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