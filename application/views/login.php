<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>">
    <title>Admin Dashboard | Login</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        
        <div id="formContent">
            
          <h1 class="title">Login Admin</h1>
          <div class="fadeIn first oke">
            <img src="<?= base_url('assets/img/features-3.png') ?>" id="icon"/>
          </div>
          <?php
            if($this->session->flashdata('message')){
              $info = $this->session->flashdata('message');
            }else{
              $info = 'Masukkan Identitas Anda !';
            }
          ?>
          <div class="alert" style="margin-bottom: -15px;">
            <h6 class="text-danger"><?= $info;?></h6>
          </div>
          <form action="<?= base_url('auth/login');?>" method="POST">
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
            <div class="button">
                <button type="submit" class="btn btn-primary ids">Log In</button>
                <button type="reset" class="btn btn-danger ids">Reset</button>
            </div>
          </form>
      
          <div id="formFooter">
            <a class="underlineHover" href="<?= base_url('home') ?>">Back Home</a>
          </div>
      
        </div>
      </div>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/vendor/jquery/jquery.min.js"></script>
</body>
</html>