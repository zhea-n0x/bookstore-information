<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Nissa Bookstore
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/datables/dataTables.bootstrap4.min.css")?>">
  <link href="<?= base_url('assets/css/now-ui-dashboard.css?v=1.5.0')?>" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url('assets/demo/demo.css')?>" rel="stylesheet" />
  <style>
      body{
          background: url('<?= base_url('assets/img/bg.png') ?>') no-repeat;
    }
    .text-dark{
        font-size: 20px;
    }
    header{
        margin-top: 20px;
    }
    #caption{
        margin-top: 100px;

    }
    #caption2{
        float: right;
        margin-right: 210px;
    }
  </style>
</head>

<body>
    <div class="container">
    <header>
        <nav class="navbar navbar-expand-lg my-lg-0" style="border-radius: 20px;" id="nav1">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-dark" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">
                    <img src="<?= base_url('assets/img/favicon.png')?>" alt="" height="50" style="margin-left: 20px;">
                </a>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?= base_url('home/book')?>">Daftar Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?= base_url('home/author')?>">Daftar Penulis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?= base_url('home/publisher')?>">Daftar Penerbit</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    </div>
    
    <div class="container" id="caption">
        
        <h2>your books knowledgement.</h2>
        <h3 style="margin-top:-20px;">cari informasi, sebelum membeli</h3>
        <div class="capt1" style="margin-top: 40px;">
            <a href="<?= base_url('home/book')?>" class="btn-outline-warning">cari bukumu disini !</a>
        </div>
    
    </div>

  
    <footer class="container footer fixed-bottom" style="margin-right: -10px;">
    <div class=" container-fluid">
        <div class="copyright" id="copyright">
        &copy; <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
        </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Recoded by <a href="https://www.instagram.com/hyunsoo.o" target="_blank">Adam Firdaus</a>.
        </div>
    </div>
    </footer>
    </div>
</div>
  <!--   Core JS Files   -->
  <script type="text/javascript" src="<?php echo base_url("assets/datables/jquery.js")?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js")?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/datables/jquery.dataTables.min.js")?>"></script>
  <script type="text/javascript" src="<?php echo base_url("assets/datables/dataTables.bootstrap4.min.js")?>"></script>

  <script src="<?= base_url('assets/js/core/popper.min.js');?>"></script>
  <script src="<?= base_url('assets/js/plugins/perfect-scrollbar.jquery.min.js');?>"></script>
  <!-- Chart JS -->
  <script src="<?= base_url('assets/js/plugins/chartjs.min.js'); ?>"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url('assets/js/plugins/bootstrap-notify.js')?>"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/js/now-ui-dashboard.min.js?v=1.5.0')?>" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url('assets/demo/demo.js');?>"></script>
</body>

</html>