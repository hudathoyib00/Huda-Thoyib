<?php 
session_start();
if ($_SESSION['status_login'] != true) {
    echo '<script>window.location="login.php"</script>';
   }
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-image.php">Data Foto</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>
    </header>
    <div class="section">
        <div class="container">
            <h3>Dashboard</h3>
            <div class="box">
                <h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di website galeri foto</h4>
                </div> 
            </div>
        </div> 
        <footer>
        <div class="container">
            <small>Copyright &copy; 2024 - Web Galeri Foto.</small>
        </div>
    </footer>
    
 </body>
 </html>     
   