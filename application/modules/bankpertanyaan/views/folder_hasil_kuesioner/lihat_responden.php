<head>
     <title>Bank Soal | Repository</title>
</head>
<div class="main-panel">
     <div class="content">
          <div class="content-page"><br />
               <div class="content">
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
                                             <a href="<?php echo base_url('bankpertanyaan/data_kuesioner'); ?>">Data
                                                  Responden
                                             </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                    </div>
                    <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
                         method="POST">
                         <input type="hidden" name="id_identitas"
                              value="<?php echo uri(2) == "edit" ? enkrip($d->id_identitas) : ""; ?>">
                         <?php
                    $no=0+1;
				if ($data_identitas){
				foreach ($data_identitas as $d){ 
			?>
                         <div class="card" style="margin-left: 10px;margin-right: 10px;">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 10px;">Paket Soal</h4>
                                             </div>

                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <th width="150">Identitas</th>
                                                            <th width="20">:</th>
                                                            <td><?php echo $d->id_identitas; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th>Nama Lengkap</th>
                                                            <th>:</th>
                                                            <td> <?php echo $d->nama_lengkap; ?></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="col-md-6">
                                             <div class="box-header with-border">
                                                  <h4 class="box-title" style="margin-left: 10px;">Data Lain</h4>
                                             </div>

                                             <table class="table table-hover mb-0">
                                                  <tbody>
                                                       <tr>
                                                            <th>Sebagai</th>
                                                            <th>:</th>
                                                            <td>
                                                                 <?php echo $d->sebagai; ?>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <th>Gender</th>
                                                            <th>:</th>
                                                            <td>
                                                                 <?php echo $d->gender; ?>
                                                            </td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <?php }} else { ?>
                         <td class="text-center" colspan="8">Tidak ada data</td>
                         <?php } ?>



                         <div class="card" style="margin-left: 10px;margin-right: 10px;">
                              <div class="card-body">
                                   <div class="row" style="overflow-x: auto;">
                                        <div class="col-md-6">
                                             <a href="<?php echo base_url('banksoal/kuesioner'); ?>">
                                                  <button style="float: left;height: 35px;margin-left: 10px;"
                                                       type="button" class="btn btn-warning"><i
                                                            class=" fas fa-backward"></i>
                                                       Kembali</button>
                                             </a>
                                        </div>
                                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                                             style="position: relative; overflow-x: auto;">
                                             <div class="col-md-12">
                                                  <table id="example" class="table table-hover mb-0">
                                                       <thead>
                                                            <tr>
                                                                 <th class="align-middle" scope="col"
                                                                      style="width: 5px;">No
                                                                 </th>
                                                                 <th class="align-middle" scope="col">Soal</th>
                                                                 <th class="align-middle" scope="col">Kategori Soal</th>
                                                                 <th class="align-middle" scope="col">Jawaban</th>
                                                            </tr>
                                                       </thead>

                                                       <tbody>
                                                            <?php
                                                  $no=0+1;
                                                  if ($data_kuesioner){
                                                  foreach ($data_kuesioner as $d){ 
                                                  ?>
                                                            <tr class="fw-normal">
                                                                 <!-- <td><input type='checkbox' class='check-item' name='id[]'
                                                                 value='".$data->id."'></td> -->
                                                                 <th class="align-middle">
                                                                      <?php echo $no++; ?>
                                                                 </th>
                                                                 <td class="align-middle">
                                                                      <?php echo $d->soal; ?>
                                                                 </td>
                                                                 <td class="align-middle">
                                                                      <?php echo $d->kategori_soal; ?>
                                                                 </td>
                                                                 <td class="align-middle">
                                                                      <?php echo $d->jawaban; ?>
                                                                 </td>
                                                            </tr>
                                                            <?php }} else { ?>
                                                            <td class="text-center" colspan="12">Tidak Ada Data
                                                                 Kuesioner</td>
                                                            <?php } ?>
                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                    </form>
               </div>
          </div>
     </div>
</div>