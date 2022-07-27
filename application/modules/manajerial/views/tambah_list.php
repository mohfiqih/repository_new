<head>
     <title>Manajemen Aplikasi | Repository & Kuesioner Online</title>
</head>
<div class="main-panel">
     <div class="content">
          <div class="content-page"><br />
               <div class="content">

                    <!-- Tambah -->
                    <div class="container-fluid">
                         <div>
                              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                   aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                                        </li>
                                        <li class="breadcrumb-item"><a
                                                  href="<?php echo base_url('manajerial'); ?>">Manajerial
                                                  Aplikasi</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Data
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <?php echo form_open_multipart(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="card">
                                        <div class="card-body">
                                             <h4 class="header-title mb-3">
                                                  Tambah List</h4>
                                             <div class="form-floating mb-3">
                                                  <label>Nama Aplikasi</label>
                                                  <select type="text" class="form-control" name="nama_apl"
                                                       placeholder="Nama Aplikasi" autocomplete="off" required>
                                                       <option value="">Pilih Aplikasi</option>
                                                       <option value="OASE" <?php if (uri(1) == "tambah") ?>>
                                                            OASE</option>
                                                       <option value="SYNCNAU" <?php if (uri(1) == "tambah"); ?>>
                                                            SYNCNAU</option>

                                                  </select>

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <label>Versi Aplikasi</label>
                                                  <input type="text" class="form-control" name="versi_apl"
                                                       placeholder="Versi Aplikasi" autocomplete="off" required>

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <label>Tanggal Publish</label>
                                                  <input type="datetime" id="basic-datepicker"
                                                       class="form-control flatpickr-input active" name="tgl_publish"
                                                       placeholder="Tanggal" autocomplete="off">

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <label for="example-select-floating">Penyedia</label>
                                                  <select class="form-control" name="penyedia_apl"
                                                       aria-label="Floating label select example" required>
                                                       <option value="">Penyedia</option>
                                                       <option value="TIK" <?php if (uri(1) == "tambah") ?>>
                                                            TIK</option>
                                                       <option value="Vendor" <?php if (uri(1) == "tambah"); ?>>
                                                            Vendor</option>
                                                  </select>

                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="col-md-6">
                                   <div class="card">
                                        <div class="card-body">
                                             <div class="form-control" style="height: 200px;">
                                                  <input type="file" name="file_foto">
                                                  <center>
                                                       <div class="dz-message needsclick">
                                                            <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                            <h3>Drop files here or click to upload.</h3>
                                                            <span class="text-muted font-13">(Type berkas gif, jpg, png,
                                                                 pdf,
                                                                 doc,
                                                                 docx,
                                                                 xlsx, zip, rar)
                                                       </div>
                                                  </center>
                                             </div><br />
                                             <br />
                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-success third">Tambah</button>
                                                  <a href="<?php echo base_url("manajerial"); ?>">
                                                       <button type="button" class="btn btn-danger">Batal</button>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <?php echo form_close(); ?>
                         </div>
                         <!-- End Tambah -->
                    </div>
               </div>
          </div>
     </div>
</div>