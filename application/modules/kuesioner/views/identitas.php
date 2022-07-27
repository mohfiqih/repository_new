<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Kuesioner Aplikasi | Repository & Kuesioner Online</title>
     <!-- Font Icon -->
     <link rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/frontend/template/fonts/material-icon/css/material-design-iconic-font.min.css" />
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
     <!-- Main css -->
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/template/css/style.css" />

     <!-- Font Awesome -->
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/fontawesome/css/fontawesome.css" />
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/fontawesome/css/fontawesome.min.css" />

     <!-- Bootstrap  -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

     <!-- footer -->
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/template/css/footer.css" />
</head>

<body style="background-color: #34e5a6 !important;">

     <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah/"). uri(3)); ?>
     <?php
     $no = 0 + 1;
     if ($data_paket) {
          foreach ($data_paket as $d) {
     ?>
     <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #fff;">
          <div class="container-fluid">
               <a class="navbar-brand" style="color: #fff;text-align: center;"><i data-width="70" data-height="70"
                         class="zmdi zmdi-collection-text"></i> <?php echo $d->nama_paket; ?>
                    v<?php echo $d->versi_apl_paket; ?></a>
               <img style="width: 50px; height: 50px; float: right;"
                    src="<?php echo base_url('assets') ?>/frontend/template/images/logo.png" alt="poltek" />

          </div>
     </nav>
     <?php }
     } else { ?>

     <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #fff;">
          <div class="container-fluid col-md-6">
               <a class="navbar-brand" style="color: #fff;text-align: center;float: left;"><i data-width="70"
                         data-height="70" class="zmdi zmdi-collection-text"></i> Tidak Ada Kuesioner</a>
          </div>
     </nav>
     <?php } ?>
     <div class="container" style="background-color: #34e5a6 !important;">
          <br />
          <div class="container" style="background-color: #34e5a6 !important;">
               <div class="container" style="border-radius: 10px;">

                    <div class="signup-content">
                         <div class="signup-image">
                              <figure data-tilt
                                   style="will-change: transform;transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
                                   <img src="<?php echo base_url("assets/frontend/images/login.png"); ?>"
                                        alt="kuesioner" />
                              </figure>
                         </div><br /><br />

                         <div class="signup-form"><br />
                              <h1 class="form-title">Masukkan Identitas Anda</h1>
                              <p><span style="color: red;">*</span> Masukkan data diri anda dengan benar dan jujur!
                                   Hindari
                                   penggunaan identitas yang sama
                                   terutama NIM/NIDN/NIPY!</p><br />
                              <div class="form-group">
                                   <label for="nim"><i class="zmdi zmdi-assignment"></i></label>
                                   <input id="copyText" type="text" name="id_identitas" id="name"
                                        placeholder="NIM / NIDN / NIPY / Lainnya.." autocomplete="off" required />
                              </div>
                              <div class="form-group">
                                   <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                   <input type="text" name="nama_lengkap" id="name" placeholder="Nama Lengkap"
                                        autocomplete="off" required />
                              </div>
                              <!-- <div class="form-group">
                                   <label for="email"><i class="zmdi zmdi-email"></i></label>
                                   <input type="email" name="email" id="email" placeholder="Email" autocomplete="off"
                                        required />
                              </div> -->
                              <div class="form-group">
                                   <label for="semester"><i class="zmdi zmdi-card"></i></label>
                                   <select class="" name="sebagai" style="background-color: white;" required>
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
                              <div class="form-group">
                                   <label for="semester"><i class="zmdi zmdi zmdi-male"></i></label>
                                   <select class="" name="gender" required>
                                        <option>Pilih Gender</option>
                                        <option value="Laki-Laki" <?php if (uri(1) == "tambah") ?>>
                                             Laki-Laki</option>
                                        <option value="Perempuan" <?php if (uri(1) == "tambah"); ?>>
                                             Perempuan</option>
                                   </select>
                              </div><br />
                              <div class="form-group">
                                   <center>
                                        <button id="copyBtn" type="submit" class="form-button btn btn-primary"
                                             style="width: 100%; text-align: center;radius: 0px;">Next</button>
                                   </center>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
     <br />
     <?php echo form_close(); ?>
     <!-- Pertanyaan Positif -->

     <footer class="site-footer" style="background-color: #343A40;">
          <div class="container" style="background-color: #343A40;">
               <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                         <p class="copyright-text">Copyright &copy; 2022 Repository v.1.0.0 - by</a> moh.fiqih_
                         </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <ul class="social-icons">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                         </ul>
                    </div>
               </div>
          </div>
     </footer>
     <!-- JS -->
     <script src="assets/frontend/template/vendor/jquery/jquery.min.js"></script>
     <script src="assets/frontend/template/js/main.js"></script>
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