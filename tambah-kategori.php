<?php 
    session_start();
    include'db.php';
    if($_SESSION['status_loggin'] != true){
        echo '<script>window.location="login.php"</script>';
    }


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Liefz.co</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Tourney:wght@900&display=swap" rel="stylesheet">
</Head>
<body>
    <img class="kiri" src="logo.png" width="100">
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Liefz.co</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="Keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>

    <!-- content -->
    <div class="section">
        <div>
            <h3>Tambah Data Kategori</h3>
            <div class="box">
                <form action="" method="POST">
                    <input class="kotak" type="text" name="nama" placeholder="Nama Kategori"  required>
                    <input type="submit" name="submit" class="btn" value="submit"> 
                </form>
               <?php 
                    if(isset($_POST['submit'])){

                        $nama = ucwords($_POST['nama']);

                        $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES (null, '".$nama."')");

                        if($insert){
                            echo '<script>alert("Berhasil Menambahkan Data")</script>';
                            echo '<script>window.location="data-kategori.php"</script>';
                        }else{
                            echo 'gagal'.mysqli_error($conn);
                        }
                    }
               ?>
            </div>
            
            </div>
        </div>
    </div>
    <footer>
            <small>Copyright 2021 - Liefz.co</small>
        </div>
    </footer>
</body>
</html>