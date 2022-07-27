<head>
     <title>Paket Kuesioner | Repository</title>
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
                                                  href="<?php echo base_url('bankpertanyaan'); ?>">Paket
                                                  Kuesioner</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Paket Kuesioner
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <?php
				if ($edit_paket){
				foreach ($edit_paket as $d){ 
                    $responden = explode(',', $d->responden);        
			?>
                         <form action="<?php echo uri(2) == "edit_paket" ? url(1, "update_paket") : url(1, "tambah"); ?>"
                              method="POST">
                              <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                   value="<?php echo $this->security->get_csrf_hash(); ?>">
                              <input type="hidden" name="id_paket"
                                   value="<?php echo uri(2) == "edit_paket" ? enkrip($d->id_paket) : ""; ?>">
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-header bg-success text-white">
                                                  Edit Paket Kuesioner
                                             </div>
                                             <div class="card-body">
                                                  <div class="">
                                                       <div class="form-floating mb-3">
                                                            <label>Nama Paket Kuesioner</label>
                                                            <input type="text"
                                                                 value="<?php echo uri(2) == "edit_paket" ? ($d->nama_paket) : ""; ?>"
                                                                 class="form-control" name="nama_paket"
                                                                 placeholder="Nama Paket Kuesioner" autocomplete="off"
                                                                 required>

                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Nama Aplikasi</label>
                                                            <select type="text" class="form-control" name="aplikasi"
                                                                 placeholder="Nama Aplikasi" autocomplete="off"
                                                                 required>>
                                                                 <option value="">Pilih Aplikasi</option>
                                                                 <option value="OASE"
                                                                      <?php if (uri(2) == "edit_paket") echo $d->aplikasi == 'OASE' ? "selected" : ""; ?>>
                                                                      OASE</option>
                                                                 <option value="SYNCNAU"
                                                                      <?php if (uri(2) == "edit_paket") echo $d->aplikasi == 'SYNCNAU' ? "selected" : ""; ?>>
                                                                      SYNCNAU</option>

                                                            </select>

                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Versi Aplikasi</label>
                                                            <input type="text"
                                                                 value="<?php echo uri(2) == "edit_paket" ? ($d->versi_apl_paket) : ""; ?>"
                                                                 class="form-control" name="versi_apl_paket"
                                                                 placeholder="Versi Aplikasi" autocomplete="off"
                                                                 required>

                                                       </div>
                                                       <div class="form-floating mb-3">
                                                            <label>Jumlah Pertanyaan</label>
                                                            <input type="text"
                                                                 value="<?php echo uri(2) == "edit_paket" ? ($d->jumlah_soal) : ""; ?>"
                                                                 class="form-control" name="jumlah_soal"
                                                                 placeholder="Jumlah Pertanyaan" autocomplete="off"
                                                                 required>

                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="card">
                                             <div class="card-header bg-success text-white">
                                                  Edit Paket Kuesioner
                                             </div>
                                             <div class="card-body">
                                                  <div class="form-floating mb-3">
                                                       <label>Tanggal Kuesioner</label>
                                                       <input
                                                            value="<?php echo uri(2) == "edit_paket" ? ($d->tgl_kuesioner) : ""; ?>"
                                                            type="datetime" id="basic-datepicker"
                                                            class="form-control flatpickr-input active"
                                                            readonly="readonly" name="tgl_kuesioner"
                                                            placeholder="Tanggal" autocomplete="off">

                                                  </div>
                                                  <div class="card" style="border: 1px solid #CED4DA;">
                                                       <div class="card-body">
                                                            <label>Pilih Responden :</label><br /><br />
                                                            <div class="col-md-6">
                                                                 <input
                                                                      <?= (in_array("Dosen", $responden)) ? "checked" : ""; ?>
                                                                      class="checkbox" type="checkbox"
                                                                      name="responden[]" value="Dosen"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Dosen
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input
                                                                      <?= (in_array("Staf", $responden)) ? "checked" : ""; ?>
                                                                      class="checkbox" type="checkbox"
                                                                      name="responden[]" value="Staf"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Staf
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input
                                                                      <?= (in_array("Karyawan", $responden)) ? "checked" : ""; ?>
                                                                      class="checkbox" type="checkbox"
                                                                      name="responden[]" value="Karyawan"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Karyawan
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input
                                                                      <?= (in_array("Mahasiswa", $responden)) ? "checked" : ""; ?>
                                                                      class="checkbox" type="checkbox"
                                                                      name="responden[]" value="Mahasiswa"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Mahasiswa
                                                                 </label>
                                                            </div>
                                                       </div>
                                                  </div>
                                                  <div class="text-center">
                                                       <button type="submit"
                                                            class="btn btn-success third">Update</button>
                                                       <a href="<?php echo base_url("bankpertanyaan"); ?>">
                                                            <button type="button" class="btn btn-danger">Batal</button>
                                                       </a>
                                                  </div>
                                             </div>
                                        </div>
                                        <?php echo form_close(); ?>
                                   </div>
                              </div>
                              <?php }} else { ?>
                              <td class="text-center" colspan="6">Tidak ada data</td>
                              <?php } ?>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- End Tambah -->
<!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->