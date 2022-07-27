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
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Paket Kuesioner
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah")); ?>
                         <div class="row">
                              <div class="col-md-6">
                                   <div class="card">
                                        <div class="card-header bg-success text-white">
                                             Tambah Paket Kuesioner
                                        </div>
                                        <div class="card-body">
                                             <div class="">
                                                  <label>Nama Paket Kuesioner</label>
                                                  <div class="form-floating mb-3">
                                                       <input type="text" class="form-control" name="nama_paket"
                                                            placeholder="Nama Paket Kuesioner" autocomplete="off"
                                                            required>

                                                  </div>
                                                  <div class="form-floating mb-3">
                                                       <label>Nama Aplikasi</label>
                                                       <select type="text" class="form-control" name="aplikasi"
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
                                                       <input type="text" class="form-control" name="versi_apl_paket"
                                                            placeholder="Versi Aplikasi" autocomplete="off" required>

                                                  </div>
                                                  <div class="form-floating mb-3">
                                                       <label>Jumlah Pertanyaan</label>
                                                       <input type="text" class="form-control" name="jumlah_soal"
                                                            placeholder="Jumlah Pertanyaan" autocomplete="off" required>

                                                  </div>
                                             </div>

                                             <div class="text-center">
                                                  <button type="submit" class="btn btn-success third">Tambah</button>
                                                  <a href="<?php echo base_url("banksoal"); ?>">
                                                       <button type="button" class="btn btn-danger">Batal</button>
                                                  </a>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="card">
                                        <div class="card-header bg-success text-white">
                                             Tambah Paket Kuesioner
                                        </div>
                                        <div class="card-body">
                                             <div class="form-floating mb-3">
                                                  <label>Tanggal Kuesioner</label>
                                                  <input type="datetime" id="basic-datepicker"
                                                       class="form-control flatpickr-input active" name="tgl_kuesioner"
                                                       placeholder="Tanggal Kuesioner" autocomplete="off" required>

                                             </div>
                                             <div class="card" style="border: 1px solid #CED4DA;">
                                                  <div class="card-body" required>
                                                       <label>Pilih Responden :</label><br />
                                                       <div style="margin-left: 5px;">
                                                            <div class="col-md-6">
                                                                 <input class="form-check-input" type="checkbox"
                                                                      name="responden[]" value="Dosen"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Dosen
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input class="form-check-input" type="checkbox"
                                                                      name="responden[]" value="Staf"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Staf
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input class="form-check-input" type="checkbox"
                                                                      name="responden[]" value="Karyawan"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Karyawan
                                                                 </label>
                                                            </div>
                                                            <div class="col-md-6">
                                                                 <input class="form-check-input" type="checkbox"
                                                                      name="responden[]" value="Mahasiswa"
                                                                      id="flexCheckDefault">
                                                                 <label class="form-check-label" for="flexCheckDefault">
                                                                      Mahasiswa
                                                                 </label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php echo form_close(); ?>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- End Tambah -->