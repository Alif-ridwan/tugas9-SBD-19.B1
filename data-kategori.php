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
            <h3>Data Kategori</h3>
            <div class="box">
                <p><a href="tambah-kategori.php">Tambah Data</a></p>
               <table border="1" cellspacing="0" class="table">
                   <thead>
                       <tr>
                           <th width="30px">No</th>
                           <th>Kategori</th>
                           <th width="130px">Aksi</th>
                       </tr>
                   </thead>
                   <tbody>
                    <?php
                        $no = 1; 
                        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                        while($row = mysqli_fetch_array($kategori)){
                       
                    ?>
                       <tr>
                           <td><?php echo $no++ ?></td>
                           <td><?php echo $row['category_name'] ?></td>
                           <td>
                               <a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="hapus.php?idk=<?php echo $row['category_id'] ?>" onclick="return confirm('Anda Yakin Ingin Menghapus?')">Hapus</a>
                           </td>
                       </tr>
                   <?php } ?>
                   </tbody>
               </table>
            </div>
        </div>
    </div>
    <footer>
            <small>Copyright 2021 - Liefz.co</small>
        </div>
    </footer>
</body>
</html>