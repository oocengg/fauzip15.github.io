<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include "koneksi.php";
        $id = $_GET['id'];
        $query = "SELECT * FROM anggotaBaru WHERE id = '$id'";
        $result = mysqli_query($connect, $query);
    ?>
    <div class="container">
        <div class="title">Edit Data Anggota ABASMANSA</div>
        <div class="content">
            <form action="prosesEdit.php" method="get">
            <?php
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="user-details">
                    <div class="input-box" style="width: 100%;">
                        <span class="details">ID Anggota</span>
                        <input type="text" name="id" value="<?php echo $row['id'];?>" readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">Nama</span>
                        <input type="text" name="nama" value="<?php echo $row['nama'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Agama</span>
                        <input type="text" name="agama" value="<?php echo $row['agama'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Umur</span>
                        <input type="text" name="umur" value="<?php echo $row['umur'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">No. HP</span>
                        <input type="text" name="nohp" value="<?php echo $row['nohp'];?>" required>
                    </div> 
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" value="<?php echo $row['email'];?>" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Alamat</span>
                        <input type="text" name="alamat" value="<?php echo $row['alamat'];?>" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value="Pria">
                    <input type="radio" name="gender" id="dot-2" value="Wanita">
                    <input type="radio" name="gender" id="dot-3" value="-">
                    <span class="gender-title">Jenis Kelamin</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Pria</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Wanita</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">Memilih untuk tidak mengutarakan.</span>
                        </label>
                    </div>
                </div>
                <div class="user-details">
                    <div class="input-box" style="width: 100%;">
                        <span class="details">Alasan Memasuki Organisasi</span>
                        <textarea name="alasan" cols="30" rows="10" value="<?php echo $row['alasan'];?>" required></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Edit">
                </div>
            <?php
                }
            ?>
            </form>
        </div>
    </div>

</body>

</html>