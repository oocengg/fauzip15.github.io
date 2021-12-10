<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "DELETE FROM anggotaBaru WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if (mysqli_query($connect, $query)) {
?>
        <html>
        
        <head>
            <title>Hapus!</title>
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
                            <h1>Data Berhasil dihapus!</h1>
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
            <title>Hapus!</title>
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
                            <h1>Data Gagal dihapus!</h1>
                            <p><?php echo "Record gagal dihapus! <br>" . mysqli_error($connect); ?></p>
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