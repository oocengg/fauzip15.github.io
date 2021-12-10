<?php
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: login.html");
    }
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://www.iconj.com/ico/k/k/kk66h8j9fa.ico">

  <title>ABAS Admin Page</title>

  <!-- <link rel="stylesheet" href="css/style.css"> -->

  <!-- Bootstrap core CSS -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="jumbotron.css" rel="stylesheet">

  <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            border-radius: 5px;
        }
        
        #customers td,
        #customers th {
            padding: 8px;
        }
        
        #customers tr {
            background-color: #f2f2f2;
            border-radius: 5px;
        }
        
        #customers tr:hover {
            background-color: #ddd;
        }
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
        
        h1 {
            color: white;
        }
        
        .content {
            width: 100%;
            background-color: #fff;
            padding: 25px 30px;
            margin: 0 auto;
            border-radius: 5px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.5);
            color: black;
        }

        .content1 {
            width: 100%;
            background-color: none;
            padding: 20px 30px;
            margin: 0 auto;
            color: black;
        }

        body {
            background-color: #0f0f0f;
        }
        
        /* CSS Button */

        .button-28 {
            appearance: none;
            background-color: transparent;
            border: 2px solid white;
            border-radius: 15px;
            box-sizing: border-box;
            color: white;
            cursor: pointer;
            display: inline-block;
            font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 16px;
            font-weight: 600;
            line-height: normal;
            min-height: 60px;
            min-width: 0;
            outline: none;
            padding: 5px 13px;
            text-align: center;
            text-decoration: none;
            transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            width: 40%;
            will-change: transform;
        }

        .button-28:disabled {
            pointer-events: none;
        }

        .button-28:hover {
            color: #1A1A1A;
            background-color: #fff;
            box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
            transform: translateY(-2px);
        }

        .button-28:active {
            box-shadow: none;
            transform: translateY(0);
        }
        .jumbotron {
            background-color: maroon;
            width: 80%;
            margin: 0 auto;
            border-radius: 30px;
        }
        .container {
            color: white;
        }
        hr {
            border-top: none;
        }
    </style>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <a style="font-weight: bold;" class="navbar-brand" href="homeCRUD.php">ABASMANSA</a>
        <a style="border: 1px maroon;" class="navbar-brand" href="form.html">Tambah Anggota</a>
      </div>
      <div id="navbar" class="navbar-right">
        <form action="logout.php" class="navbar-form navbar-right">
          <button type="submit" class="btn btn-success" style="background-color: red; border: none">Logout</button>
        </form>
      </div>
      <!--/.navbar-collapse -->
    </div>
  </nav>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="content1">
        <hr>
  </div>
  
  <div class="jumbotron">
    <div class="container">
        <img src="img/Logo.png" style="width: 350px; float: left; padding-right:20px">
        <hr>
        
      <center>
        <h2 style="font-weight: bold">ABASMANSA</h2>
        <h3>Asosiasi Blogger Anak SMA NEGERI 1 MAMUJU merupakan organisasi yang ada di SMAN 1 MAMUJU 
            organisasi ini mengajarkan kita untuk menulis artikel dengan mengemukakan karya yang kita miliki, 
            ABASMANSA memiliki moto yaitu : </h3>
        <h3>"Menulis Adalah Membaca Dua Kali"</h3>
            
      </center>
    </div>
  </div>

    <hr>

    <div class="content">
        <h1 style="color: black;">Daftar Anggota Baru</h1>
        <table id="customers">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Agama</th>
                <th>Umur</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Gender</th>
                <th>Alasan</th>
                <th>Aksi</th>
            </tr>
            <?php
                include "koneksi.php";

                $query = "SELECT * FROM anggotabaru";
                $result = mysqli_query($connect, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr>
                    <td>
                        <?php echo $row["id"] ?>
                    </td>
                    <td>
                        <?php echo $row["nama"] ?>
                    </td>
                    <td>
                        <?php echo $row["agama"] ?>
                    </td>
                    <td>
                        <?php echo $row["umur"] ?>
                    </td>
                    <td>
                        <?php echo $row["nohp"] ?>
                    </td>
                    <td>
                        <?php echo $row["email"] ?>
                    </td>
                    <td>
                        <?php echo $row["alamat"] ?>
                    </td>
                    <td>
                        <?php echo $row["gender"] ?>
                    </td>
                    <td>
                        <?php echo $row["alasan"] ?>
                    </td>
                    <td>
                        <center>
                        <a href="editForm.php?id=<?php echo $row['id']?>">
                            <button type="submit" class="btn btn-warning" style="margin-bottom:10px; border: none">Edit</button>
                        </a>
                        <a href="hapus.php?id=<?php echo $row['id']?>">
                            <button type="submit" class="btn btn-success" style="background-color: red; border: none">Hapus</button>
                        </a>
                        </center> 
                    </td>
                </tr>
                <?php
                    }
                } else {
                    echo "0 result";
                }
            ?>
        </table>
    </div>

    <footer style="color: #fff;">
        <center>
            <h4>&copy; 2021 ABASMANSA, ORG.</h4>
        </center>
    </footer>
  </div>
  <!-- /container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>
  <script src="../../dist/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>