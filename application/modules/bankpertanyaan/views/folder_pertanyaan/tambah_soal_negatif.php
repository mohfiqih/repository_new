<head>
     <title>Bank Pertanyaan | Repository</title>
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
                                        <li class="breadcrumb-item" aria-current="page"><a
                                                  href="<?php echo base_url('banksoal'); ?>">Bank Pertanyaan</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Tambah Paket Kuesioner
                                             Negatif
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal_negatif/"). uri(3)); ?>
                         <div class="row">
                              <div class="col-md-12">
                                   <div class="card">
                                        <div class="card-body">
                                             <div class="form-floating mb-3">
                                                  <select type="option" class="form-select" name="paket_id"
                                                       placeholder="Paket ID" autocomplete="off" readonly>
                                                       <?php
                                                  foreach($data_paket as $d) : ?>
                                                       <option value="<?php echo $d->id_paket ?>">
                                                            <?=$d->nama_paket;?> v<?php echo $d->versi_apl_paket; ?>
                                                       </option>
                                                       <?php endforeach; ?>
                                                  </select>
                                                  <label for="example-select-floating">Paket Kuesioner</label>
                                             </div>
                                             <div class="form-floating mb-3">
                                                  <select type="text" class="form-select" name="kategori_soal"
                                                       placeholder="Kategori Soal" autocomplete="off" required readonly>
                                                       <option value="Negatif"
                                                            <?php if (uri(1) == "tambah_soal_negatif") ?>>
                                                            Negatif</option>
                                                  </select>
                                                  <label>Kategori Pertanyaan</label>
                                             </div>
                                             <div class="form-floating mb-3">
                                                  <textarea style="height: 200px;" class="form-control" name="soal"
                                                       rows="15" placeholder="Ketikkan Pertanyaan.."></textarea>
                                                  <label>Pertanyaan</label>
                                             </div>

                                             <!-- SS -->
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Sangat Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text" value="1" class="form-control"
                                                            name="sangat_setuju" placeholder="Pekerjaan"
                                                            autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>
                                             <!-- S -->
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text" value="2" class="form-control" name="setuju"
                                                            placeholder="Pekerjaan" autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>
                                             <!-- C -->
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Cukup</label>
                                                  <div class="col-sm-12">
                                                       <input type="text" value="3" class="form-control" name="cukup"
                                                            placeholder="Pekerjaan" autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>
                                             <!-- TS -->
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Tidak Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text" value="4" class="form-control"
                                                            name="tidak_setuju" placeholder="Pekerjaan"
                                                            autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>
                                             <!-- STS -->
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Sangat Tidak
                                                       Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text" value="5" class="form-control"
                                                            name="sangat_tidaksetuju" placeholder="Pekerjaan"
                                                            autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>

                                             <div class="text-center">
                                                  <a href="<?php echo base_url('bankberkas') ?>">
                                                       <button type="submit"
                                                            class="btn btn-success"><?php echo (uri(2) == 'tambah') ? 'Update' : 'Tambah'; ?></button>
                                                  </a>
                                                  <a href="<?php echo base_url('banksoal/evaluasi_soal/' . uri(3)); ?>">
                                                       <button type="button" class="btn btn-danger">Batal</button>
                                                  </a>
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