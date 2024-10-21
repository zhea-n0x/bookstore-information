<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    <?= $title;?>
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
      .wrapper{
          background: url('<?= base_url('assets/img/bg.png') ?>');
    }
  </style>
</head>
<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="blue">
      <div class="logo">
        <a href="<?= base_url('admin');?>" class="simple-text logo-mini">
          NB
        </a>
        <a href="<?= base_url('admin');?>" class="simple-text logo-normal">
          Nissa Bookstore
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="<?= base_url('admin')?>">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="#book" data-toggle="collapse">
              <i class="now-ui-icons education_atom"></i>
              <p>Book Management ⮟</p>
            </a>
          </li>
            <div class="collapse" id="book" style="margin-left: 10px;">
                <li>
                    <a href="<?= base_url('admin/book_management')?>">
                    <i class="now-ui-icons files_single-copy-04"></i>
                    <p>Daftar Buku</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/add_book');?>">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Tambah Buku</p>
                    </a>
                </li>
            </div>
          <li>
            <a href="#author" data-toggle="collapse">
              <i class="now-ui-icons business_badge"></i>
              <p>Author Management ⮟</p>
            </a>
          </li>
            <div class="collapse" id="author" style="margin-left: 10px;">
                <li>
                    <a href="<?= base_url('admin/author_management')?>">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>Daftar Author</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/add_author');?>">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Tambah Author</p>
                    </a>
                </li>
            </div>
            <li>
            <a href="#publisher" data-toggle="collapse">
              <i class="now-ui-icons business_briefcase-24"></i>
              <p>Publisher Management ⮟</p>
            </a>
          </li>
            <div class="collapse show" id="publisher" style="margin-left: 10px;">
                <li>
                    <a href="<?= base_url('admin/publisher_management');?>">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>Daftar Penerbit</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= base_url('admin/add_publisher');?>">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Tambah Penerbit</p>
                    </a>
                </li>
            </div>
            <li>
            <a href="#category" data-toggle="collapse">
              <i class="now-ui-icons shopping_tag-content"></i>
              <p>Category Management ⮟</p>
            </a>
          </li>
            <div class="collapse" id="category" style="margin-left: 10px;">
                <li>
                    <a href="<?= base_url('admin/category_management')?>">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>Daftar Kategori</p>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('admin/add_category');?>">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Tambah Kategori</p>
                    </a>
                </li>
            </div>
            <li>
            <a href="#location" data-toggle="collapse">
              <i class="now-ui-icons location_pin"></i>
              <p>Location Management ⮟</p>
            </a>
          </li>
            <div class="collapse" id="location" style="margin-left: 10px;">
                <li>
                    <a href="<?= base_url('admin/location_management');?>">
                    <i class="now-ui-icons users_circle-08"></i>
                    <p>Daftar Lokasi</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?= base_url('admin/add_location')?>">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Tambah Lokasi</p>
                    </a>
                </li>
            </div>
            <hr>
        <div class="active-pro" style="margin-top: auto;">
          <li>
            <a href="<?= base_url('admin/user_management')?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Management</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('utility/backupdb')?>">
              <i class="now-ui-icons arrows-1_cloud-download-93"></i>
              <p>Back-Up Database</p>
            </a>
          </li>
        </div>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <p>Welcome, <?= $this->session->userdata('nama');?></p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <p>
                        <a class="dropdown-item" href="<?= base_url('admin/configuration/')?><?= $id =$this->session->userdata('id')?>">
                            <i class="now-ui-icons loader_gear"></i>
                            Pengaturan Akun
                        </a>
                        <a href="<?= base_url('auth/logout');?>" class="dropdown-item">
                            <i class="now-ui-icons sport_user-run"></i>
                            Logout
                        </a>
                    </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" style="background-image: url('<?= base_url('assets/img/bg.png');?>');">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Tambah Data Penerbit</h4>
                <small class="text-small" style="margin-top: -100px;">masukkan data <i>penerbit</i> sesuai format pada <b>kolom</b> yang tersedia</small>
              </div>
              <div class="card-body">
                <form action="<?= base_url('control_data/insertpublisher');?>" method="POST">
                    <?php
                    $id = rand(0000,9999);
                    ?>
                    <?php if($this->session->flashdata('pesan')) :?>  
                        <div class="alert alert-danger alert-dismissible fade show card-title" rules="alert">
                        <strong><?= $this->session->flashdata('pesan'); ?></strong>
                        <button class="close" type="button" data-dismiss="alert" aria-label="Close">&times;</button>
                      </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="id">No. Identifikasi</label>
                        <input type="text" class="form-control" name="id" value="<?= $id;?>">
                        <small class="form-text text-muted">nomor identifikasi tergenerate secara otomatis</small>
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Nama Penerbit</label>
                        <input type="text" class="form-control" name="penerbit" placeholder="e.g Gramedia Jaya">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Penerbit</label>
                        <input type="text" class="form-control" name="email" placeholder="e.g act@gerak.org">
                    </div>
                    <div class="form-group">
                        <label for="id">Alamat Pusat</label>
                        <input type="text" class="form-control" name="alamat" placeholder="Jl. Baru no. 56, Jakarta Timur">
                        <small class="form-text text-muted">sesuaikan inputan dengan contoh pada kolom</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
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
        <script type="text/javascript">
            $(document).ready( function () {
                $('.dataTables_filter').addClass('');
                $('#table_id').DataTable({
                    "pageLength": 6,
                    "lengthMenu" : [5,7],
                });
            } );
        </script>
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