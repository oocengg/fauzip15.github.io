<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "tugasRegistrasi";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if ($connect) {
        echo "Koneksi dengan MySQL berhasil. <br>";
    } else {
        echo "Koneksi dengan MySQL gagal." . mysqli_connect_error();
    }

    $sql = "CREATE TABLE anggotaBaru(
                id INT PRIMARY KEY,
                nama VARCHAR(30) NOT NULL,
                agama VARCHAR(10) NOT NULL,
                umur VARCHAR(5) NOT NULL,
                nohp VARCHAR(20) NOT NULL,
                email VARCHAR(40) NOT NULL,
                alamat VARCHAR(50) NOT NULL,
                gender VARCHAR(20) NOT NULL,
                alasan VARCHAR(200) NOT NULL
           )";

    if (mysqli_query($connect, $sql)) {
        echo "Tabel Data Anggota Baru Berhasil Dibuat!";
    } else {
        echo "Tabel Data Anggota Baru gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>