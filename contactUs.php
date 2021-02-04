<!DOCTYPE html>
<html lang="">
<head>
    <title>Southwest Moluccas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="contactUs.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body id="top">
    <!-- Top Background Image Wrapper -->
    <div class="bgded overlay" style="background-image:url('assets/img/a.jpg');">
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
                <nav class="navbar navbar-expand-lg">
                    <!--Logo Website-->
                    <div id="logo" class="fl_left">
                        <h1><a href="index.html">Southwest Moluccas</a></h1>
                    </div>
            
                    <!--Button Navbar Collapse-->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <!--Collapse Navbar-->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!--Navbar List-->
                        <ul class="navbar-nav ml-auto font-weight-bold">
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Photo Gallery</a>
                                    <a class="dropdown-item" href="#">Video Gallery</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="article.html">Article</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contactUs.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="aboutUs.html">About Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <!--End of Navbar-->
    
    <div class="container">
        <h3 class="text-center"><u>Contact Us</u></h3><br>
        <form class="form-horizontal" method="post" action="hasil_input.php" autocomplete="off">
            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1" >Nama :</label>
                <div class="txt">
                    <input type = "text" name="nama" class="form-control-inline col-sm-10" id="nama" placeholder="Masukkan Nama"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ttl">Tanggal Lahir :</label>
                <div class="txt">
                    <input type = "date" name="ttl" class="form-control-inline col-sm-10"/>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ko">Kota :</label>
                <div class="txt">
                    <input type="text" name="kota" class="form-control-inline col-sm-10" placeholder="Masukkan Kota"/>
                </div>
            </div>

            
            <div class="form-group row">
                <label class="col-sm-2 offset-md-1 control-label" for="jk">Jenis Kelamin :</label>
                <div class="form-control-inline">
                    <label class="radio-inline" ><input type="radio" id="jk" name="jk" value="Pria"> Pria</label>
                    <label class="radio-inline"><input type="radio" id="jk" name="jk" value="Wanita"> Wanita</label>
                </div>
            </div>

            <div class="form-group row">
                <label for="name" class="col-sm-2 offset-md-1 ko">Email :</label>
                <div class="txt">
                    <input type="email" name="email" class="form-control-inline col-sm-10" placeholder="Masukkan Email"/>
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="Pendapat">Kesan yang di dapat :</label>
                    <select class="form-control-inline col-sm-8" id="pendapat" name="pendapat">
                        <option value='-'>--Pilihan Anda--</option>
                        <option value='Suka'>Suka</option>
                        <option value='Biasa Saja'>Sangat suka</option>
                        <option value='Tidak Suka'>Suka sekali</option>
                    </select>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="suka">Tempat terbaik  :</label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka1' value='Pantai Nyama' id="suka"> Pantai nyama </label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka2' value='Gunung Kerbau' id="suka"> Gunung Kerbau </label>
                    <label class="checkbox-inline" ><input type='checkbox' name='suka3' value='Pantai Nusa Eden' id="suka"> Pantai Nus Eden </label>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2 offset-md-1" for="pengalaman">Pengalaman anda saat mengunjungi Maluku :</label>
                <textarea class="form-control-inline col-sm-7" rows="3"  id="pengalaman" name="pengalaman" placeholder="Masukkan pengalaman"></textarea>
             </div>

            <div class="for-group row">
                <div class="col-sm-2 offset-md-1 ">
                    <button type="submit" class="btn btn-primary sub">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div><br>
        </form>
    </div>
</body>
<html>