<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8" />

     <link href="<?php echo base_url('assets/backend'); ?>/datatables/css/bootstrap4.css" rel="stylesheet"
          type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/datatables/css/buttons.bootstrap4.css" rel="stylesheet"
          type="text/css" />

     <!-- datepicker -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/flatpickr/flatpickr.min.css" rel="stylesheet"
          type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/clockpicker/bootstrap-clockpicker.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker.standalone.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
          rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet"
          type="text/css" />

     <!--  -->
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
          integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
     </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>
     <!-- pop up -->

     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">

     <!-- App css -->
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/bootstrap.min.css" rel="stylesheet"
          type="text/css" id="bs-default-stylesheet" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/app.min.css" rel="stylesheet"
          type="text/css" id="app-default-stylesheet" />

     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/bootstrap-dark.min.css" rel="stylesheet"
          type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/config/default/app-dark.min.css" rel="stylesheet"
          type="text/css" id="app-dark-stylesheet" disabled="disabled" />

     <!-- Notification css (Toastr) -->
     <link href="<?php echo base_url('assets/backend'); ?>/libs/toastr/build/toastr.min.css" rel="stylesheet"
          type="text/css" />

     <!-- Chart -->
     <link href="<?php echo base_url('assets/chart'); ?>/highcharts.js" rel="stylesheet" type="text/javascript" />

     <!-- icons -->
     <link href="<?php echo base_url('assets/backend'); ?>/css/icons.min.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/card.css" rel="stylesheet" type="text/css" />
     <link href="<?php echo base_url('assets/backend'); ?>/css/todolist.css" rel="stylesheet" type="text/css" />
</head>


<!-- body start -->

<body class="loading"
     data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>
     <!-- Begin page -->
     <div id="wrapper">

          <!-- Topbar Start -->
          <div class="navbar-custom" style="background-color: #fff;">
               <ul class="list-unstyled topnav-menu float-end mb-0">
                    <li class="dropdown d-inline-block d-lg-none">
                         <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light"
                              data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                              aria-expanded="false">
                              <i class="fe-search noti-icon"></i>
                         </a>
                         <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                              <form class="p-3">
                                   <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                              </form>
                         </div>
                    </li>

                    <li class="dropdown notification-list topbar-dropdown">
                         <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"
                              data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                              aria-expanded="false">
                              <img style="width: 30px;height: 30px;"
                                   src="<?php echo base_url().'assets/images/'.$user->user_foto;?>" alt="repo-image"
                                   class="rounded-circle">
                              <span class="pro-user-name ms-1">
                                   <?php echo $user->user_namalengkap;?>
                                   <i class="mdi mdi-chevron-down"></i>
                              </span>
                         </a>
                         <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                              <!-- item-->
                              <div class="dropdown-header noti-title">
                                   <h5 class="m-0 text-center"><?php echo $user->user_namalengkap; ?></h5>
                              </div>

                              <!-- item-->
                              <a href="<?php echo base_url('profil'); ?>" class="dropdown-item notify-item">
                                   <i class="fe-user"></i>
                                   <span>Profil</span>
                              </a>

                              <!-- item-->
                              <a href="<?php echo base_url('logout'); ?>" class="dropdown-item notify-item"
                                   onclick="return confirm('Apakah Anda yakin?')">
                                   <i class="fe-log-out"></i>
                                   <span>Logout</span>
                              </a>
                         </div>
                    </li>
               </ul>

               <!-- LOGO -->
               <div class="logo-box">
                    <a href="<?php echo base_url('.'); ?>" class="logo logo-light text-center">
                         <span class="logo-sm">
                              <h4 class="d-inline">ReQ-On</h4>
                         </span>

                         <span class="logo-lg">
                              <h4 class="d-inline">Repo PHB</h4>
                         </span>
                    </a>

                    <a href="<?php echo base_url('.'); ?>" class="logo logo-dark text-center">
                         <span class="logo-sm">
                              <h4 class="d-inline" style="color: #52A643;">ReQ-On</h4>
                         </span>
                         <span class="logo-lg">
                              <h4 class="d-inline"><img style="width: 160px;height: 50px;margin-top: 5px;"
                                        src="<?php echo base_url("assets/frontend/images/logo-req-on.png"); ?>"
                                        alt=" IMG" /></h4>
                              <!-- <h4>Repository & Kuesioner Online</h4> -->
                              <!-- <h4 class="d-inline">Repo PHB</h4> -->
                              <!-- <img class="d-inline" style="width: 80px;height: 50px;"
                                   src="<?php echo base_url('assets/frontend/images/logo-repo.png'); ?>"> -->
                         </span>
                    </a>
               </div>

               <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                    <li>
                         <button class="button-menu-mobile waves-effect">
                              <i class="fe-menu"></i>
                         </button>
                    </li>

                    <li>
                         <h4 class="page-title-main"><?php echo $judul; ?></h4>
                    </li>

               </ul>

               <div class="clearfix"></div>

          </div>
          <!-- end Topbar -->

          <!-- ========== Left Sidebar Start ========== -->
          <div class="left-side-menu">
               <div class="h-100" data-simplebar>

                    <?php if ($this->user_level == "1") {?>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <ul id="side-menu">
                              <li class="menu-title">Navigation Menu</li>
                              <li>
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="mdi mdi-home"></i>
                                        <span>Dasboard</span>
                                   </a>
                              </li>

                              <li class="menu-title mt-2">Master Data</li>
                              <li>
                                   <a href="<?php echo base_url('user'); ?>">
                                        <i class="fa fa-users"></i>
                                        <span>User</span>
                                   </a>
                              </li>
                         </ul>

                    </div>
                    <!-- End Sidebar -->

                    <?php } else if($this->user_level == "2") {?>
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <ul id="side-menu">
                              <li class="menu-title">Navigation Menu</li>
                              <li>
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="mdi mdi-home"></i>
                                        <span>Dasboard</span>
                                   </a>
                              </li>
                         </ul>
                    </div>
                    <!-- End Sidebar -->
                    <?php } else { ?>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                         <ul id="side-menu">
                              <li class="menu-title">Navigation</li>
                              <li>
                                   <a href="<?php echo base_url('dasbor'); ?>">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span>Dasboard</span>
                                   </a>
                              </li>
                         </ul>

                    </div>
                    <!-- End Sidebar -->

                    <?php } ?>

                    <div class="clearfix"></div>
               </div>
               <!-- Sidebar -left -->

          </div>
          <!-- Left Sidebar End -->

          <!-- ============================================================== -->
          <!-- Start Page Content here -->
          <!-- ============================================================== -->

          <?php $this->load->view($view); ?>

          <!-- ============================================================== -->
          <!-- End Page content -->
          <!-- ============================================================== -->


          <!-- Footer Start -->
          <footer class="footer">
               <div class="container-fluid">
                    <div class="row">
                         <div class="col-md-6">
                              Copyright 2022 &copy; ReQ-On by mohfiqih_
                              </a>
                         </div>
                         <div class="col-md-6">
                              <div class="text-md-end footer-links d-none d-sm-blocks">
                                   <a href="javascript:void(0);">About Us</a>
                                   <a href="javascript:void(0);">Help</a>
                                   <a href="javascript:void(0);">Contact Us</a>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
          <!-- end Footer -->
     </div>
     <!-- END wrapper -->


     <script src="<?php echo base_url('assets/multiple_delete/jquery.min.js'); ?>"></script>

     <!-- Vendor js -->
     <script src="<?php echo base_url('assets/backend'); ?>/js/vendor.min.js"></script>

     <!-- knob plugin -->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/jquery-knob/jquery.knob.min.js"></script>

     <!--Morris Chart-->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/morris.js06/morris.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/raphael/raphael.min.js"></script>

     <!-- Toastr js -->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/toastr/build/toastr.min.js"></script>
     <script>
     toastr.options = {
          "newestOnTop": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": true
     }
     </script>
     <!-- tiny 6 -->
     <!-- <script src="https://cdn.tiny.cloud/1/po9r5rtyigi9k6233qld3yekxkqfn2haky39k30gv8chhdma/tinymce/6/tinymce.min.js"
          referrerpolicy="origin"></script> -->
     <!-- tiny 5 -->
     <script src="https://cdn.tiny.cloud/1/po9r5rtyigi9k6233qld3yekxkqfn2haky39k30gv8chhdma/tinymce/5/tinymce.min.js"
          referrerpolicy="origin"></script>
     <script>
     tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap preview anchor pagebreak',
          toolbar_mode: 'floating',
          forced_root_block: false,
          forced_p_block: false,
     });
     </script>

     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
          integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
     </script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
          integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
     </script>

     <!-- Plugins js-->
     <script src="<?php echo base_url('assets/backend'); ?>/libs/flatpickr/flatpickr.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/spectrum-colorpicker2/spectrum.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
     <script src="<?php echo base_url('assets/backend'); ?>/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js">
     </script>

     <!-- Init js-->
     <script src="<?php echo base_url('assets/backend'); ?>/js/pages/form-pickers.init.js"></script>

     <script type="text/javascript">
     $('.clockpicker').clockpicker();
     </script>

     <script>
     $(document).ready(function() {
          $('#myTable').DataTable();
     });
     </script>


     <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
     <script type="text/javascript"
          src="<?php echo base_url('assets/backend'); ?>/datatables/js/jquery.dataTables.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('assets/backend'); ?>/datatables/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('assets/backend'); ?>/datatables/js/dataTables.buttons.min.js"></script>
     <script type="text/javascript"
          src="<?php echo base_url('assets/backend'); ?>/datatables/js/buttons.bootstrap4.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/datatables/js/jszip.min.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/datatables/js/pdfmake.min.js">
     </script>
     <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/datatables/js/vfs_fonts.js"></script>
     <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/datatables/js/buttons.html5.min.js">
     </script>
     <script type="text/javascript" src="<?php echo base_url('assets/backend'); ?>/datatables/js/buttons.colVis.min.js">
     </script>

     <!-- App js-->
     <script src="<?php echo base_url('assets/backend'); ?>/js/app.min.js"></script>

     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
     <script>
     const copyBtn = document.getElementById('copyBtn')
     const copyText = document.getElementById('copyText')

     copyBtn.onclick = () => {
          copyText.select(); // Selects the text inside the input
          document.execCommand('copy'); // Simply copies the selected text to clipboard 
          Swal.fire({ //displays a pop up with sweetalert
               icon: 'success',
               title: 'Text copied to clipboard',
               showConfirmButton: false,
               timer: 1000
          });
     }
     </script>

     <script>
     const tambahIdentitas = document.getElementById('tambahIdentitas')
     const berhasil = document.getElementById('berhasil')

     copyBtn.onclick = () => {
          copyText.select(); // Selects the text inside the input
          document.execCommand('copy'); // Simply copies the selected text to clipboard 
          Swal.fire({ //displays a pop up with sweetalert
               icon: 'success',
               title: 'Berhasil menambah identitas',
               showConfirmButton: false,
               timer: 5000
          });
     }
     </script>

     <script>
     $(document).ready(function() {
          $('#cari').DataTable({
               dom: '<"top"<"pull-left"f><"pull-left"l>>rt<"bottom"<"pull-left"i><"pull-left"p>>',
               paging: false,
               ordering: false,
               info: false,
          });
     });
     </script>

     <!-- <?php echo $this->session->flashdata('notifikasi'); { ?>
     <?php } ?> -->
     <?php echo $this->session->flashdata('notifikasi'); ?>

</body>

</html>