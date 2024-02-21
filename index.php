<?php  
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_address FROM tb_admin WHERE admin_id = 2");
$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html PUBLIK "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml-transional.dtd">
<html xmlns="http://www.w3.org/1999.xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WEB Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
        <div class="container">
            <h1><a href="dashboard.php">WEB GALERI FOTO</a></h1>
           <ul>
            <li><a href="galeri.php">Galeri</a></li>
            <li><a href="register.php">Registrasi</a></li>
            <li><a href="login.php">login</a></li>
           </ul>
        </div>
    </header>
    <div class="search">
        <div class="conteiner">
           <form action="galeri.php">
            <input type="text" name="search" placeholder="Cari Foto">
            <input type="submit" class="btn" name="cari" value="Cari Foto"/>
            
           </form>
        </div>
    </div>
    <div class="section">
        <div class="conteiner">
            <h3>Kategori</h3>
            <div class="box">
                <?php 
                 $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                 if(mysqli_num_rows($kategori) > 0){ 
                    while($k = mysqli_fetch_array($kategori)){
            ?>
             <a href="galeri.php?kat=<?php echo $k['category_id'] ?>">
              <div class="col-5">
                <img src="img/icon-kategori.png" height="50px" style="margin-botton:5px;" />
                <p><?php echo $k['category_name'] ?></p>
              </div>
            </a>
               <?php }}else{ ?>
                <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="container">
        <h3>Foto Terbaru</h3>
        <div class="box">
            <?php 
              $foto=mysqli_query($conn, "SELECT * FROM tb_image WHERE image_status = 1 ORDER BY image_id DESC LIMIT 8");
              if(mysqli_num_rows($foto) > 0) {
                while($p = mysqli_fetch_array($foto)){
         ?>
         <a href="detail-image.php?id=<?php echo $p['image_id'] ?>">
          <div class="col-4">
          <img src="foto/<?php echo $p['image'] ?>" height="150px"> 
          <p class="name"><?php echo substr($p['image_name'], 0, 30,) ?></p>
          <p class="admin">Nama User : <?php echo $p['admin_name'] ?></p>
          <p class="name"><?php echo $p['date_created'] ?></p>
        </div>
       </a>
       <?php }}else{ ?>
        <p>Foto tidak ada</p>
        <?php } ?>
        </div>
    </div>
    <footer>
        <div class="container">
        <small>copyright &copy; 2024 - Web Galeri Foto.</small>
        </div> 
    </footer>
    
</body>
</html>