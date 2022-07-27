<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Kuesioner Aplikasi | Repository</title>
     <meta content="" name="description">
     <meta content="" name="keywords">

     <!-- Favicons -->
     <link href="assets/img/favicon.png" rel="icon">
     <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

     <!-- Vendor CSS Files -->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/kuesioner/vendor/aos/aos.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/bootstrap/css/bootstrap.min.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/bootstrap-icons/bootstrap-icons.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/boxicons/css/boxicons.min.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/glightbox/css/glightbox.min.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/remixicon/remixicon.css">
     <link type="text/css" rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/kuesioner/vendor/swiper/swiper-bundle.min.css">
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets'); ?>/kuesioner/css/style.css">

</head>

<body style="background-color: #0C55B3!important;">

     <!-- ======= Header ======= -->
     <header id="header" class="fixed-top d-flex align-items-center header-transparent">
          <div class="container d-flex align-items-center justify-content-between">

               <div class="logo">
                    <img style="width: 50px; height: 100px; float: right;"
                         src="<?php echo base_url('assets') ?>/frontend/template/images/logo.png" alt="repo-phb" />
               </div>

               <!-- <nav id="navbar" class="navbar"> -->
               <ul>
                    <?php
                         $no = 0 + 1;
                         if ($data_paket) {
                              foreach ($data_paket as $d) {
                         ?>
                    <li><a class="nav-link scrollto" href="" style="color: white;"><?php echo $d->nama_paket; ?>
                              v<?php echo $d->versi_apl_paket; ?></a></li>
                    <?php }
                         } else { ?>
                    <div class="logo">
                         <h1><a href="index.html"><span>Tidak Ada Data</span></a></h1>
                    </div>
                    <?php } ?>
               </ul>


          </div>
     </header><!-- End Header -->
     <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah/"). uri(3)); ?>
     <!-- ======= Hero Section ======= -->
     <section id="hero">
          <div class="container"><br /><br />
               <div class="row justify-content-between">
                    <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                         <div data-aos="zoom-out">
                              <div class="container" style="margin-left: 0px;margin-right: 50px;">
                                   <h5 style="color: white;">Masukan Data Identitas</h5>
                                   <p style="color: white;">Masukkan data diri anda dengan benar dan jujur!
                                        Hindari
                                        penggunaan identitas yang sama
                                        terutama NIM/NIDN/NIPY!</p><br />
                                   <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="id_identitas"
                                             placeholder="Masukkan ID Identitas" aria-describedby="button-addon2"
                                             required>
                                   </div>
                                   <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="nama_lengkap"
                                             placeholder="Masukkan Nama Lengkap" aria-describedby="button-addon2"
                                             required>
                                   </div>
                                   <div class="input-group mb-3">
                                        <select class="form-control" name="sebagai" style="background-color: white;"
                                             required>
                                             <option>Pilih Sebagai</option>
                                             <option value="Mahasiswa" <?php if (uri(1) == "tambah") ?>>
                                                  Mahasiswa</option>
                                             <option value="Dosen" <?php if (uri(1) == "tambah"); ?>>
                                                  Dosen</option>
                                             <option value="Karyawan" <?php if (uri(1) == "tambah"); ?>>
                                                  Karyawan</option>
                                             <option value="Staf" <?php if (uri(1) == "tambah"); ?>>
                                                  Staf</option>
                                        </select>
                                   </div>
                                   <div class="input-group mb-3">
                                        <select class="form-control" name="gender" style="background-color: white;"
                                             required>
                                             <option>Pilih Gender</option>
                                             <option value="Laki-Laki" <?php if (uri(1) == "tambah") ?>>
                                                  Laki-Laki</option>
                                             <option value="Perempuan" <?php if (uri(1) == "tambah"); ?>>
                                                  Perempuan</option>
                                        </select>
                                   </div>
                                   <div class="text-center">
                                        <button type="submit" style="width: 100%;" class="btn btn-success">Next</button>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                         <img src="<?php echo base_url("assets/frontend/images/login.png"); ?>"
                              class="img-fluid animated" alt="">
                    </div>
               </div><br /><br /><br />
          </div>
          <?php echo form_close(); ?>
          <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               viewBox="0 24 150 28 " preserveAspectRatio="none">
               <defs>
                    <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
               </defs>
               <g class="wave1">
                    <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
               </g>
               <g class="wave2">
                    <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
               </g>
               <g class="wave3">
                    <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
               </g>
          </svg>

     </section><!-- End Hero -->



     <!-- ======= Footer ======= -->
     <!-- <footer id="footer">
          <div class="container">
               <div class="copyright">
                    &copy; Copyright <strong><span>Bootslander</span></strong>. All Rights Reserved
               </div>
               <div class="credits">
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
               </div>
          </div>
     </footer> -->
     <!-- End Footer -->

     <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
               class="bi bi-arrow-up-short"></i></a>
     <div id="preloader" style="background-color: #34e5a6;"></div>

     <script type=" text/javascript"
          src="<?php echo base_url('assets'); ?>/kuesioner/vendor/purecounter/purecounter_vanilla.js">
     </script>
     <script type="text/javascript"
          src="<?php echo base_url('assets'); ?>/kuesioner/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('assets'); ?>/kuesioner/vendor/glightbox/js/glightbox.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('assets'); ?>/kuesioner/vendor/swiper/swiper-bundle.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets'); ?>/kuesioner/vendor/php-email-form/validate.js">
     </script>
     <script type="text/javascript" src="<?php echo base_url('assets'); ?>/kuesioner/js/main.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets'); ?>/kuesioner/vendor/aos/aos.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script>
     const copyBtn = document.getElementById('copyBtn')
     const copyText = document.getElementById('copyText')

     copyBtn.onclick = () => {
          copyText.select(); // Selects the text inside the input
          document.execCommand('copy'); // Simply copies the selected text to clipboard 
          Swal.fire({ //displays a pop up with sweetalert
               icon: 'success',
               title: 'Berhasil menambah identitas',
               showConfirmButton: false,
               timer: 10000
          });
     }
     </script>
</body>

</html>