<head>
     <title>Bank Soal | Repository</title>
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
                                                  href="<?php echo base_url('banksoal'); ?>">Bank Soal</a>
                                        </li>

                                        <li class="breadcrumb-item active" aria-current="page">Edit Soal
                                        </li>
                                   </ol>
                              </nav>
                         </div>

                         <div class="row">
                              <div class="col-md-12">
                                   <?php
                          if ($edit_soal){
                          foreach ($edit_soal as $d){ 
                         ?>
                                   <div class="card">
                                        <div class="card-body">
                                             <!-- <form action="<?php echo uri(2) == "edit_soal" ? url(1, "update_soal") : url(1, "update_soal/").uri(3); ?>"
                                        method="POST"> -->
                                             <?php echo form_open(uri(2) == "edit" ? url(1, "update_soal"). uri(3) : url(1, "update_soal/"). uri(3)); ?>
                                             <input type="hidden"
                                                  name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                                  value="<?php echo $this->security->get_csrf_hash(); ?>">
                                             <input type="hidden" name="id_soal"
                                                  value="<?php echo uri(2) == "edit_soal" ? enkrip($d->id_soal) : ""; ?>">

                                             <div class="form-floating mb-3">

                                                  <select type="option" class="form-select" name="paket_id"
                                                       placeholder="Paket ID" autocomplete="off">
                                                       <?php 
                                                       foreach($data_paket as $e) : ?>

                                                       <option value="<?php echo ($e->id_paket) ?>"
                                                            <?=$d->paket_id == $e->id_paket ? 'selected' : null ?>>
                                                            <?=$e->nama_paket;?> v<?php echo $e->versi_apl_paket; ?>
                                                       </option>

                                                       <?php endforeach; ?>
                                                  </select>
                                                  <label for="example-select-floating">Paket Soal</label>

                                             </div>
                                             <div class="form-floating mb-3">
                                                  <select type="text" class="form-select" name="kategori_soal"
                                                       placeholder="Kategori Soal" autocomplete="off" required>
                                                       <option value="">Pilih Kategori</option>
                                                       <option value="Positif"
                                                            <?php if (uri(2) == "edit_soal") echo $d->kategori_soal == 'Positif' ? "selected" : ""; ?>>
                                                            Positif</option>
                                                       <option value="Negatif"
                                                            <?php if (uri(2) == "edit_soal") echo $d->kategori_soal == 'Negatif' ? "selected" : ""; ?>>
                                                            Negatif</option>

                                                  </select>
                                                  <label>Kategori Soal</label>
                                             </div>
                                             <div class="form-floating mb-3">
                                                  <textarea style="height: 80px;" class="form-control" name="soal"
                                                       rows="15"
                                                       placeholder="Ketikkan soal.."><?php echo uri(2) == "edit_soal" ? ($d->soal) : ""; ?></textarea>
                                                  <label>Pertanyaan</label>
                                             </div><br />
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Sangat Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text"
                                                            value="<?php echo uri(2) == "edit_soal" ? ($d->sangat_setuju) : ""; ?>"
                                                            class="form-control" name="sangat_setuju"
                                                            placeholder="Pekerjaan" autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>
                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text"
                                                            value="<?php echo uri(2) == "edit_soal" ? ($d->setuju) : ""; ?>"
                                                            class="form-control" name="setuju" placeholder="Pekerjaan"
                                                            autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>

                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Cukup</label>
                                                  <div class="col-sm-12">
                                                       <input type="text"
                                                            value="<?php echo uri(2) == "edit_soal" ? ($d->cukup) : ""; ?>"
                                                            class="form-control" name="cukup" placeholder="Pekerjaan"
                                                            autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>

                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Tidak Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text"
                                                            value="<?php echo uri(2) == "edit_soal" ? ($d->tidak_setuju) : ""; ?>"
                                                            class="form-control" name="tidak_setuju"
                                                            placeholder="Pekerjaan" autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>

                                             <div class="form-group" hidden>
                                                  <label for="kets" class="control-label col-sm-6">Sangat Tidak
                                                       Setuju</label>
                                                  <div class="col-sm-12">
                                                       <input type="text"
                                                            value="<?php echo uri(2) == "edit_soal" ? ($d->sangat_tidaksetuju) : ""; ?>"
                                                            class="form-control" name="sangat_tidaksetuju"
                                                            placeholder="Pekerjaan" autocomplete="off" readonly hidden>
                                                  </div>
                                             </div>

                                             <div class="text-center">
                                                  <a href="<?php echo base_url("banksoal"); ?>">
                                                       <button type="submit"
                                                            class="btn btn-success third">Update</button>
                                                  </a>
                                                  <a href="<?php echo base_url("banksoal/evaluasi_soal/"). uri(3); ?>">
                                                       <button type="button" class="btn btn-danger">Batal</button>
                                                  </a>
                                             </div>
                                             <?php echo form_close(); ?>
                                             <!-- </form> -->
                                        </div>
                                        <?php }} else { ?>
                                        <td class="text-center" colspan="6">Tidak ada data</td>
                                        <?php } ?>
                                   </div>
                              </div>
                         </div>
                         <?php echo form_close(); ?>
                    </div>
               </div>
          </div>
     </div>
</div>

<script>
$('#mainform').submit(function() {
     $('#formdata_container').show();
     $('#formdata').html($(this).serialize());
     return false;
});
</script>