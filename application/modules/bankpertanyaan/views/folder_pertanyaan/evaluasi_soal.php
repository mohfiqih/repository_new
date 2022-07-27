<head>
     <title>Bank Pertanyaan | Repository</title>
</head>
<div class="main-panel">
     <div class="content">
          <div class="content-page"><br />
               <div class="content">
                    <!-- Start Content-->
                    <div class="container-fluid">
                         <div>
                              <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                                   aria-label="breadcrumb">
                                   <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="<?php echo base_url('dasbor'); ?>">Home</a>
                                        </li>
                                        <li class="breadcrumb-item" aria-current="page"><a
                                                  href="<?php echo base_url('bankpertanyaan'); ?>">Bank Pertanyaan</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Daftar Pertanyaan
                                        </li>
                                   </ol>
                              </nav>
                         </div>

                         <!-- <form action="<?php echo uri(2) == "hapus_soal" ? url(1, "edit_soal"). uri(3) : url(1, "tambah_soal"); ?>"
                    method="POST"> -->
                         <!-- <?php echo form_open(uri(2) == "edit" ? url(1, "hapus_soal/"). uri(3) : url(1, "tambah_soal")); ?> -->
                         <input type="hidden" name="id_paket"
                              value="<?php echo uri(2) == "edit" ? enkrip($d->id_paket) : ""; ?>">
                         <?php
                              $no = 0 + 1;
                              if ($data_paket) {
                                   foreach ($data_paket as $d) {
                         ?>
                         <div class="card">
                              <div style="margin-left: 20px;margin-top: 20px;">
                                   <a href="<?php echo base_url('bankpertanyaam/laporan_daftar_pertanyaan/' . uri(3)); ?>"
                                        target="_blank">
                                        <button type="button" style="margin-left: 10px;"
                                             class=" btn btn-danger waves-effect waves-light">
                                             <span class="btn-label"><i class="fa fa-download"></i></span>Export
                                        </button>
                                   </a>
                                   <a href="<?php echo base_url('bankpertanyaam'); ?>">
                                        <button style="margin-left: 25px;" type="button" class="btn btn-warning"><i
                                                  class=" fas fa-backward"></i>
                                             Kembali</button>
                                   </a>
                              </div>
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6" style="overflow: auto;">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 10px;">Paket Kuesioner</h4>
                                             </div>

                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Nama Paket</th>
                                                            <th width="20">:</th>
                                                            <td><?php echo $d->nama_paket; ?>
                                                                 v<?php echo $d->versi_apl_paket; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Aplikasi</th>
                                                            <th width="20">:</th>
                                                            <td>
                                                                 <?php echo $d->aplikasi; ?>
                                                                 v<?php echo $d->versi_apl_paket; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th>Responden</th>
                                                            <th>:</th>
                                                            <td><?php echo $d->responden; ?>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="col-md-6" style="overflow: auto;">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 10px;">Data Lain</h4>
                                             </div>

                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Jumlah Pertanyaan</th>
                                                            <th width="20">:</th>
                                                            <td><?php echo $d->jumlah_soal; ?> Soal
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;">
                                                            <th width="150">Tanggal</th>
                                                            <th width="20">:</th>
                                                            <td>
                                                                 <?php echo $d->tgl_kuesioner; ?>
                                                            </td>
                                                       </tr>
                                                       <tr style="overflow-x: auto;">
                                                            <th>Link Kuesioner</th>
                                                            <th>:</th>
                                                            <td> <a target="_blank"
                                                                      href="<?php echo base_url('kuesioner/index/') . enkrip($d->id_paket); ?>">Link
                                                                      Kuesioner
                                                                 </a>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php }
                    } else { ?>
                         <td class="text-center" colspan="8">Tidak ada data</td>
                         <?php } ?>
                         <div class="card">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6">


                                             <a href="<?php echo url(1) .'/kategori_soal/'. enkrip($d->id_paket); ?>">
                                                  <button style="margin-left: 10px;" type="button"
                                                       class="btn btn-success"><span class="btn-label"><i
                                                                 class="fa fa-plus"></i></span>
                                                       Pertanyaan</button>
                                             </a>

                                        </div>

                                        <?php echo form_open(uri(2) == "edit" ? url(1, "hapus_soal") : url(1, "edit_soal/"). uri(3)); ?>
                                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                                             style="overflow-x: auto;">
                                             <table id="myTable" class="table table-hover mb-0">
                                                  <thead>
                                                       <tr>
                                                            <th class="align-middle" scope="col" style="width: 5px;">No
                                                            </th>
                                                            <th class="align-middle" scope="col">Nama Paket</th>
                                                            <th class="align-middle" scope="col">Pertanyaan Kuesioner
                                                            </th>
                                                            <th class="align-middle" scope="col">Kategori Pertanyaan
                                                            </th>
                                                            <th class="align-middle" scope="col" style="width: 5px;">
                                                                 Action</th>
                                                       </tr>
                                                  </thead>

                                                  <tbody>
                                                       <?php
                                                  $no = 0 + 1;
                                                  if ($data_soal) {
                                                       foreach ($data_soal as $d) {
                                                  ?>
                                                       <tr class="fw-normal">
                                                            <th class="align-middle">
                                                                 <?php echo $no++; ?>
                                                            </th>
                                                            <th class="align-middle">
                                                                 <?php echo $d->nama_paket; ?>
                                                                 v<?php echo $d->versi_apl_paket; ?>
                                                            </th>
                                                            <td class="align-middle">
                                                                 <?php echo $d->soal; ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                 <?php echo $d->kategori_soal; ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                 <a style="margin-left: 10px;text-decoration: none;"
                                                                      href="<?php echo url(1) . '/hapus_soal/' . enkrip($d->id_soal); ?>"
                                                                      data-mdb-toggle="tooltip" title="Remove"
                                                                      onclick="return confirm('Yakin hapus soal?')"><i
                                                                           class="fas fa-trash-alt text-danger"></i></a>
                                                            </td>
                                                            <?php }
                                                  } else { ?>
                                                            <td class="text-center" colspan="6">Tidak ada data</td>
                                                            <?php } ?>
                                                       </tr>
                                                  </tbody>

                                             </table>
                                        </div>
                                        <?php echo form_close(); ?>
                                   </div>
                              </div>
                         </div>
                         </form>
                    </div>
               </div>
               <!-- End Tabel -->
          </div>
     </div>
</div>
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