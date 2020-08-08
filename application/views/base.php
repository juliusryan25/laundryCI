<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
</head>


   
<body>
    <!-- As a heading -->
<nav class="navbar  fixed-top" style="background-image:url(<?php echo base_url();?>assets/image/nav3.jpg);font-family: 'Lemonada', cursive;color:black" >
  <span class="navbar-brand mb-0 h1" style="font-size:30px" >Starbhak Laundry</span>
  </a>
                   <ul class="nav nav-tabs">
                    <li class="nav-item">
                      <a class="nav-link  " style="color: white;"  href="<?php echo site_url('sistem/base/home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                     <b> <a class="nav-link  " style="color: white;"  href="<?php echo site_url('sistem/base/data_karyawan'); ?>">Data Karyawan</a></b>
                    </li> 
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="data_pesanan.php">Data Pesanan</a></b>
                    </li>
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="#">Pembayaran</a></b>
                    </li>
                    <li class="nav-item">
                      <b><a class="nav-link" style="color: white;" href="#">Laporan</a></b>
                    </li>
                  </ul>
</nav>




<?php
    if ($this->uri->segment(3) == "") {
        $this->load->view('login');
    }
    elseif ($this->uri->segment(3) == "home") {
      $this->load->view('home');
    }
    elseif ($this->uri->segment(3) == "data_karyawan") {
      $this->load->view('data_karyawan');
      
    }

?>

</body>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/Jquery/jquery.js' ?>"></script>



</html>