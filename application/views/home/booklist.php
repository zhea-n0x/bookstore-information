<?php $this->load->view('template/_header');?>

<body>
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="<?= base_url('home/index'); ?>" class="simple-text logo-mini">
          NB
        </a>
        <a href="<?= base_url('home/index'); ?>" class="simple-text logo-normal">
          Nissa Bookstore
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="<?= base_url('home/book');?>">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Daftar Buku</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('home/author');?>">
              <i class="now-ui-icons users_single-02"></i>
              <p>Daftar Penulis</p>
            </a>
          </li>
          <li>
            <a href="<?= base_url('home/publisher');?>">
              <i class="now-ui-icons business_briefcase-24"></i>
              <p>Daftar Penerbit</p>
            </a>
          </li>
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
            <a class="navbar-brand">Halaman Daftar Buku</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content" style="background-image: url('<?= base_url('assets/img/bg.png');?>');">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Buku</h4>
                <small class="text-small" style="margin-top: -100px;">silahkan cari <i>buku</i> yang kamu inginkan pada <b>kolom</b> yang tersedia</small>
              </div>
              <div class="card-body">
              <div class="table-responsive">
            <table class="table" id="table_id">
                <thead class="table-secondary">
                <tr align="center">
                    <th class="text-danger">Nomor</th>
                    <th class="text-danger">Judul Buku</th>
                    <th class="text-danger">Penulis</th>
                    <th class="text-danger">Kategori</th>
                    <th class="text-danger">Lokasi Buku</th>
                    <th class="text-danger">Harga</th>
                    <th class="text-danger">Stock</th>
                </tr>
                </thead>
                <tbody class="table-striped"> 
                <?php
                $i=1;
                foreach($bookdetail as $row) { ?>
                <tr align="center">
                    <td><?php echo $row['book_id']; ?></td>
                    <td align="left"><?php echo $row['book_title']; ?></td>
                    <td><a href="<?= base_url('home/author')?>"><?php echo $row['author_name']; ?></a></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['location'];?></td>
                    <td><?= 'Rp. '. number_format($row['price'],2,',','.');?></td>
                    <td><?php echo $row['stock_unit']; ?></td>
                </tr>
                <?php $i++; }?>
                </tbody>
            </table>
            </div>
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
                    "lengthMenu" : [5,10]
                });
            } );
        </script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
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