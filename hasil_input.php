<?php
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $kota = $_POST['kota'];
    $jenis = $_POST['jk'];
    $mail = $_POST['email'];
    $pend = $_POST['kesan'];
    $disukai = "";
    for ($i=1;$i<=2;$i++){
        $suka = $_POST['suka'.$i];
        if(!empty ($suka))
            $disukai .= $suka.", ";
    }
    $tambah = $_POST['pengalaman'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Hasil Contact Us</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/css/bootstrap.css"> 
        <script src="jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="hasilInput.css">
        <link rel="stylesheet" href="fontawesome/css/all.css"/>
    </head>
    <body>
            
<title>Southwest Moluccas</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('assets/img/a.jpg');"> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Southwest Moluccas</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Gallery</a>
            <ul>
              <li><a href="gallery.html">Photo Gallery</a></li>
              <li><a href="Video.html">Video Gallery</a></li>
            </ul>
          </li>
          <li><a href="about.html">About</a></li>
          <li><a href="article.html">Article</a></li>
          <li><a href="contactUs.php">Contact Us</a></li>
          <li><a href="aboutUs.html">About Us</a></li>
        </ul>
      </nav>
    </header>
  </div>

        <div class="container">
            <div class="panel-group">
                <div class="panel panel-success">
                    <div class="panel-heading"><h3 class="text-center">Hasil Contact Us</h3><br></div>
                        <div class="panel-body">
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Nama :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$nama?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Tanggal Lahir:</label>
                                <div class="col-sm-7 hasil">
                                    <?=$ttl?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Kota :</label>
                                <div class="col-sm-7 hasil">
                                    <?php echo $kota; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Jenis Kelamin :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$jenis?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Email :</label>
                                <div class="col-sm-7 hasil">
                                    <?php echo $mail; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Kesan yang didapat :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$pend?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Tempat terbaik :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$disukai?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm2 offset-md-1" for="nama">Pengalaman anda saat berkunjung :</label>
                                <div class="col-sm-7 hasil">
                                    <?=$tambah?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    </body>
<html>
        
