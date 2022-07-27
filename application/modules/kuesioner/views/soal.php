<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title>Kuesioner Aplikasi | Repository</title>
     <!-- Font Icon -->
     <link rel="stylesheet"
          href="<?php echo base_url('assets'); ?>/frontend/template/fonts/material-icon/css/material-design-iconic-font.min.css" />
     <!-- Main css -->
     <link rel="stylesheet" href="<?php echo base_url('assets'); ?>/frontend/template/css/style.css" />

     <!-- Font Awesome -->
     <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" />

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

<body style="background-color: #F0EBF8 !important;">
     <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal")); ?>
     <form method="POST" id="register-form">
          <!-- kuesioner form -->
          <?php
          $no = 0 + 1;
          if ($data_paket) {
               foreach ($data_paket as $d) {
          ?>
          <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="background-color: #fff;">
               <div class="container-fluid">
                    <a class="navbar-brand" style="color: #fff;text-align: center;"><i data-width="70" data-height="70"
                              class="zmdi zmdi-collection-text"></i> <?php echo $d->nama_paket; ?>
                         <?php echo $d->versi_apl_paket; ?></a>
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

          <div class="container" style="background-color: #F0EBF8 !important;">
               <br />
               <div class="container"
                    style="background-color: #fff;height: 100%;border-radius: 10px; overflow-x: auto;">
                    <div style=""><br />
                         <div class="card" style="margin-left: 10px;margin-right: 10px;">
                              <div class="card-body" style="overflow: auto;">
                                   <div class="row">
                                        <div class="col-md-12">
                                             <div class="box-header with-border">
                                                  <h5 class="box-title" style="margin-left: 10px;">Keterangan Skor</h5>
                                             </div>

                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <th width="200">Sangat Setuju (SS)</th>
                                                            <th width="20">:</th>
                                                            <td>5
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="200">Setuju (S)</th>
                                                            <th width="20">:</th>
                                                            <td>4
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="200">Cukup/Netral (C)</th>
                                                            <th width="20">:</th>
                                                            <td>3
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="200">Tidak Setuju (TS)</th>
                                                            <th width="20">:</th>
                                                            <td>2
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th width="200">Sangat T. Setuju (STS)</th>
                                                            <th width="20">:</th>
                                                            <td>1
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <!--<div class="col-md-6">-->
                                        <!--     <div class="box-header with-border">-->
                                        <!--          <h5 class="box-title" style="margin-left: 10px;">Data Kuesioner-->
                                        <!--          </h5>-->
                                        <!--     </div>-->

                                        <!--     <table class="table table-hover mb-0">-->
                                        <!--          <tbody>-->

                                        <!--               <tr>-->
                                        <!--                    <th width="150">Nama Kuesioner</th>-->
                                        <!--                    <th width="20">:</th>-->
                                        <!--                    <td>-->
                                        <!--                    </td>-->
                                        <!--               </tr>-->
                                        <!--               <tr>-->
                                        <!--                    <th width="150">Nama Aplikasi</th>-->
                                        <!--                    <th width="20">:</th>-->
                                        <!--                    <td>-->
                                        <!--                    </td>-->
                                        <!--               </tr>-->
                                        <!--               <tr>-->
                                        <!--                    <th width="150">Jumlah Soal</th>-->
                                        <!--                    <th width="20">:</th>-->
                                        <!--                    <td>Soal-->
                                        <!--                    </td>-->
                                        <!--               </tr>-->
                                        <!--               <tr>-->
                                        <!--                    <th width="150">Tanggal</th>-->
                                        <!--                    <th width="20">:</th>-->
                                        <!--                    <td>-->
                                        <!--                    </td>-->
                                        <!--               </tr>-->
                                        <!--               <tr>-->
                                        <!--                    <th width="150">Responden</th>-->
                                        <!--                    <th width="20">:</th>-->
                                        <!--                    <td>-->
                                        <!--                    </td>-->
                                        <!--               </tr>-->

                                        <!--          </tbody>-->
                                        <!--     </table>-->
                                        <!--</div>-->
                                   </div>
                              </div>
                         </div>
                    </div><br />
               </div><br />
               <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
                    method="POST">

                    <?php
                         $no = 0 + 1;
                         if ($data_soal) {
                              foreach ($data_soal as $d) {
                    ?>

                    <div class="container"
                         style="background-color: #fff;height: 100%;border-radius: 10px; overflow-x: auto;">
                         <div style="margin-left: 20px; margin-right: 10px;"><br />
                              <div class="form-items">
                                   <td class="title"><?php echo $no++; ?>. <?php echo $d->soal; ?>
                                   </td>
                                   <br />
                                   <td>
                              </div><br />
                              <div class="form-items">
                                   <input type="hidden" name="id_respon" value="<?php echo $d->id_respon; ?>">
                                   <input id="copyText" type="hidden" name="id_identitas"
                                        value="<?php echo $d->id_identitas; ?>">
                                   <input type="hidden" name="id_paket_jawaban" value="<?php echo $d->id_paket; ?>">
                                   <input type="hidden" name="id_soal_jawaban" value="<?php echo $d->id_soal; ?>">
                                   <input type="hidden" name="kategori_soal" value="<?php echo $d->kategori_soal; ?>">
                                   <table>
                                        <tbody>
                                             <tr>
                                                  <td class="align-middle" style="width: 50px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <input class="radio the_input_element"
                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                 value="<?php echo $d->sangat_setuju; ?>"
                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                 autocomplete="off" type="radio"><b>SS</b>
                                                            </input>
                                                       </div>
                                                  </td>
                                                  <td class="align-middle" style="width: 150px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <input class="radio the_input_element"
                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                 id="radio2" for="radio2"
                                                                 value="<?php echo $d->setuju; ?>"
                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                 autocomplete="off" type="radio"><b>S</b>
                                                            </input>
                                                       </div>
                                                  </td>
                                                  <td class="align-middle" style="width: 150px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <input class="radio the_input_element"
                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                 id=" radio3" for="radio3"
                                                                 value="<?php echo $d->cukup; ?>"
                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                 autocomplete="off" type="radio"><b>C</b>
                                                            </input>
                                                       </div>
                                                  </td>
                                                  <td class="align-middle" style="width: 150px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <input class="radio the_input_element"
                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                 id="radio4" value="<?php echo $d->tidak_setuju; ?>"
                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                 autocomplete="off" type="radio"><b>TS</b>
                                                            </input>
                                                       </div>
                                                  </td>
                                                  <td class="align-middle" style="width: 150px; text-align: center;">
                                                       <div
                                                            class="clearfix prettyradio labelright  blue has-pretty-child">
                                                            <input class="radio5 the_input_element"
                                                                 name="<?php echo "jawaban" . $d->id_soal; ?>"
                                                                 id="concern"
                                                                 value="<?php echo $d->sangat_tidaksetuju; ?>"
                                                                 style="display: block !important; color: rgb(50, 55, 60);"
                                                                 autocomplete="off" type="radio"><b>STS</b>
                                                            </input>
                                                       </div>
                                                  </td>
                                             </tr>
                                        </tbody>
                                   </table><br />
                              </div>
                         </div>
                    </div><br />
                    <?php }
                         } else { ?>
                    <div class="container"
                         style="background-color: #fff;height: 150px;border-radius: 10px; overflow-x: auto;">
                         <div style="margin-left: 20px; margin-right: 25px;"><br />
                              <p class="form-title"><br />Tidak Ada Data Kuesioner
                              </p>
                         </div>
                    </div><br />
                    <?php } ?>
                    <center>
                         <div class="form-group">
                              <button id="copyBtn" type="submit" class="form-button btn btn-success"
                                   style="width: 100%;radius: 0px;">Selesai</button>
                         </div>
          </div>
          </div>
     </form><br />
     <?php echo form_close(); ?>

     <!-- <footer class="site-footer" style="background-color: #343A40;">
          <div class="container" style="background-color: #343A40;">
               <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                         <p class="copyright-text">Copyright &copy; 2022 Repository v.1.0.0
                         </p>
                    </div>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                         <ul class="social-icons">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li>
                                   <p class="copyright-text">by moh.fiqih_</p>
                              </li>
                              </p>
                         </ul>
                    </div>
               </div>
          </div>
     </footer> -->
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
               title: 'Berhasil menyimpan jawaban',
               showConfirmButton: false,
               timer: 10000
          });
     }
     </script>
</body>

</html>