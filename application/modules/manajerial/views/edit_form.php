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
                                        <li class="breadcrumb-item">
                                             <a href="<?php echo base_url('dasbor'); ?>">Home
                                             </a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                             <a href="<?php echo base_url('manajerial'); ?>">Manajerial Aplikasi
                                             </a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page">
                                             <a href="<?php echo base_url('manajerial/lihat'); ?>">Detail
                                             </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "update"); ?>"
                              method="POST" enctype="multipart/form-data">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                   value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <?php
					if ($data_edit){
					foreach ($data_edit as $d){ 
				    ?>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-body">
                                                  <h4 class="header-title mb-3">
                                                       <?php echo (uri(2) == 'edit') ? 'Edit' : 'Tambah'; ?> </h4>

                                                  <input type="hidden" name="id_m"
                                                       value="<?php echo uri(2) == "edit" ? enkrip($d->id_m) : ""; ?>">
                                                  <div class="form-floating mb-3">
                                                       <label>Nama Aplikasi</label>
                                                       <input
                                                            value="<?php echo uri(2) == "edit" ? ($d->nama_apl) : ""; ?>"
                                                            type="text" class="form-control" name="nama_apl"
                                                            placeholder="Nama Aplikasi" autocomplete="off">

                                                  </div>
                                                  <div class="form-floating mb-3">
                                                       <label>Versi Aplikasi</label>
                                                       <input
                                                            value="<?php echo uri(2) == "edit" ? ($d->versi_apl) : ""; ?>"
                                                            type="text" class="form-control" name="versi_apl"
                                                            placeholder="Versi Aplikasi" autocomplete="off" required>

                                                  </div>
                                                  <div class="form-floating mb-3">
                                                       <label>Tanggal Publish</label>
                                                       <input
                                                            value="<?php echo uri(2) == "edit" ? ($d->tgl_publish) : ""; ?>"
                                                            type="text" id="basic-datepicker"
                                                            class="form-control flatpickr-input active"
                                                            name="tgl_publish" placeholder="Tanggal Publish"
                                                            autocomplete="off">

                                                  </div>
                                                  <div class="form-floating mb-3">
                                                       <label for="example-select-floating">Penyedia</label>
                                                       <select class="form-control" name="penyedia_apl"
                                                            aria-label="Floating label select example" required>
                                                            <option value="">Penyedia</option>
                                                            <option value="TIK"
                                                                 <?php if (uri(2) == "edit") echo $d->penyedia_apl == 'TIK' ? "selected" : ""; ?>>
                                                                 TIK</option>
                                                            <option value="Vendor"
                                                                 <?php if (uri(2) == "edit") echo $d->penyedia_apl == 'Vendor' ? "selected" : ""; ?>>
                                                                 Vendor</option>
                                                       </select>

                                                  </div>
                                                  <div class="text-center">
                                                       <button type="submit"
                                                            class="btn btn-success third">Update</button>
                                                       <a href="<?php echo base_url("manajerial"); ?>">
                                                            <button type="button" class="btn btn-danger">Batal</button>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-body">
                                                  <input type="text" class="form-control"
                                                       value="<?php echo ($d->judul); ?>"><br>
                                                  <div class="form-control" style="height: 200px;">
                                                       <input type="file" class="form-control" name="file_foto"
                                                            value="<?php echo ($d->judul); ?>">

                                                       <center>
                                                            <div class="dz-message needsclick">
                                                                 <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                                 <h3>Drop files here or click to upload.</h3>
                                                                 <span class="text-muted font-13">(Type berkas gif, jpg,
                                                                      png,
                                                                      pdf,
                                                                      doc,
                                                                      docx,
                                                                      xlsx, zip, rar)
                                                            </div>
                                                       </center>
                                                  </div><br />
                                                  <br />
                                             </div>
                                        </div>
                                   </div>
                              </div>
                    </div>

                    <?php }} else { ?>
                    <td class="text-center" colspan="6">Tidak ada data</td>
                    <?php } ?>
               </div>
               </form>
          </div>
     </div>
</div>