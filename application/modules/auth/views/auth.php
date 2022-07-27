<!doctype html>
<html lang="en">

<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="shortcut icon"
          href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfk7lfH2fHG_D8mfN-EmaLZtGRdTeaIxDgaonPjvzuK0TlERrWKfsz8ISH1WksPaL0TOA&usqp=CAU" />

     <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="assets/auth/fonts/icomoon/style.css">

     <link rel="stylesheet" href="assets/auth/css/owl.carousel.min.css">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="assets/auth/css/bootstrap.min.css">

     <!-- Style -->
     <link rel="stylesheet" href="assets/auth/css/style.css">

     <title>Login Repository & Kuesioner Online</title>

     <script>
     $(window).load(function() {
          $("#preloader").delay(3000).fadeOut("slow");
     });
     </script>
     <script type="text/javascript">
     function myFunction() {
          var x = document.getElementById("inputPassword");
          if (x.type === "password") {
               x.type = "text";
          } else {
               x.type = "password";
          }
     }
     </script>
</head>

<body>
     <div class="half" style="background-color: #EFEFEF!important">
          <div class="bg order-1 order-md-2" style="background-image: url('assets/frontend/images/dash.jpg');">
          </div>
          <div class="contents order-2 order-md-1">

               <div class="container"><br /><br />
                    <div class="row align-items-center justify-content-center"
                         style="height: 400px;!important;margin-bottom: 0px!important;">
                         <div class="col-md-6">
                              <div class="form-block" style="border-radius: 15px;">
                                   <form action="auth/proses" method="POST" class="login100-form validate-form">
                                        <div class="text-center mb-5">
                                             <h3>Login to <strong>REK-ON Application</strong></h3>
                                             <p>Repository & Kuesioner Online</p>
                                             <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
                                        </div>
                                        <?php if ($this->session->flashdata('notifikasi')){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                             <button type="button" class="btn-close" data-dismiss="alert"
                                                  aria-label="close"></button> <span class="btn-label"><i
                                                       class="fa fa-times"
                                                       style="margin-right: 10px;"></i></span><?php echo $this->session->flashdata('notifikasi'); ?></button>
                                        </div>
                                        <?php } ?>
                                        <input type="hidden"
                                             name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                             value="<?php echo $this->security->get_csrf_hash(); ?>">

                                        <div class="form-group first">
                                             <label for="username">Username</label>
                                             <input type="text" name="username" class="form-control"
                                                  placeholder="Masukan Username.." id="username" required>
                                        </div>
                                        <div class="form-group last mb-3">
                                             <label for="password">Password</label>
                                             <input type="password" name="password" class="form-control"
                                                  placeholder="Masukan Password.." id="inputPassword"
                                                  for="inputPassword" required>
                                        </div>

                                        <div class="d-sm-flex mb-5 align-items-center">
                                             <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"
                                                       for="showpw">Show Password</span>
                                                  <input type="checkbox" class="form-check-input" id="showpw"
                                                       onclick="myFunction()" />
                                                  <div class="control__indicator"></div>
                                             </label>
                                             <span class="ml-auto"><a href="#" class="forgot-pass">Forgot
                                                       Password? Contact Admin</a></span>
                                        </div>

                                        <input type="submit" value="Login"
                                             style="background: #1269DB!important;border-color: #1269DB!important;"
                                             class="btn btn-block btn-primary">
                                   </form>
                              </div>
                              <div class="text-center p-t-100">
                                   <a class="txt2" href="" style="text-decoration: none;">Copyright 2022 &copy;
                                        REK-ON Application Created by mohfiqih_
                                   </a>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
     <script src="assets/auth/js/jquery-3.3.1.min.js"></script>
     <script src="assets/auth/js/popper.min.js"></script>
     <script src="assets/auth/js/bootstrap.min.js"></script>
     <script src="assets/auth/js/main.js"></script>
</body>

</html>