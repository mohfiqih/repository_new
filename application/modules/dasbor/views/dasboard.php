<div class="main-panel">
     <div class="content">
          <div class="panel-header bg-primary-gradient">
               <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                         <div>
                              <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                              <h5 class="text-white op-7 mb-2">Selamat Datang
                                   <?php echo $user->user_namalengkap; ?> di Aplikasi Repository dan Kuesioner Online
                                   (Rek-On Application)
                              </h5>
                         </div>
                         <div class="ml-md-auto py-2 py-md-0">
                              <a href="<?php echo base_url('manajerial'); ?>"
                                   class="btn btn-white btn-border btn-round mr-2">Manajerial</a>
                              <a href="<?php echo base_url('users'); ?>" class="btn btn-secondary btn-round">Add
                                   User</a>
                         </div>
                    </div>
               </div>
          </div>
          <div class="page-inner mt--5">
               <div class="row mt--2">
                    <div class="container-fluid">

                         <div class="row">
                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('users'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">Total<br />User
                                                       </h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_user; ?> </h2>
                                                                 <p class="text-muted mb-3">Users</p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->

                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('bankberkas'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">
                                                            Total<br />Berkas</h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_berkas; ?> </h2>
                                                                 <p class="text-muted mb-3">Berkas</p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->

                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('manajerial'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">
                                                            Total<br />Aplikasi</h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_apl; ?> </h2>
                                                                 <p class="text-muted mb-3">Aplikasi</p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->

                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('bankpertanyaan'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">
                                                            Total<br />Responden</h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_responden; ?> </h2>
                                                                 <p class="text-muted mb-3">Responden</p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->

                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('bankberkas'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">
                                                            Paket<br />Kuesioner</h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_paket; ?> </h2>
                                                                 <p class="text-muted mb-3">Paket</p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->

                              <div class="col-xl-2 col-md-6">
                                   <div class="card">
                                        <a href="<?php echo base_url('bankberkas'); ?>" class="dropdown-item">
                                             <div class="card-body">
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-3">
                                                            Total<br />Pertanyaan</h4>
                                                  </center>

                                                  <div class="widget-box-2">
                                                       <div class="widget-detail-2 text-end">
                                                            <!-- <span class="badge bg-success rounded-pill float-start mt-3"><?php echo $jml_apl; ?>
                                                       <i class="mdi mdi-trending-up"></i> </span> -->
                                                            <center>
                                                                 <h2 class="fw-normal text-secondary"
                                                                      data-plugin="counterup">
                                                                      <?php echo $jml_soal; ?> </h2>
                                                                 <p class="text-muted mb-3">Pertanyaan
                                                                 </p>
                                                            </center>
                                                       </div>
                                                       <!-- <div class="progress progress-bar-alt-success progress-sm">
                                                  <div class="progress-bar bg-success" role="progressbar"
                                                       aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                                       style="width: 77%;">
                                                       <span class="visually-hidden"><?php echo $jml_apl; ?></span>
                                                  </div>
                                             </div> -->
                                                  </div>
                                             </div>
                                        </a>
                                   </div>
                              </div><!-- end col -->
                         </div>

                         <form action="<?php echo uri(2) == "evaluasi_soal" ? url(1, "edit_soal") : url(1, "tambah_soal"); ?>"
                              method="POST">
                              <input type="hidden" name="id_paket"
                                   value="<?php echo uri(2) == "edit" ? enkrip($d->id_paket) : ""; ?>">
                              <div class="row">
                                   <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                             <div class="card-body" style="overflow: auto;">
                                                  <h4 class=" header-title mt-0 mb-3">Hasil Kuesioner
                                                  </h4>
                                                  <div class="table-responsive">
                                                       <table id="cari" class="table table-hover mb-0">
                                                            <thead>
                                                                 <tr>
                                                                      <th>No</th>
                                                                      <th>Nama Paket</th>
                                                                      <th>Persentase</th>
                                                                      <th>Kategori</th>
                                                                      <th>Detail</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <?php
                                                            $no = 0 + 1;
                                                            $this->load->model('M_dasbor');
                                                            if ($data_paket) {
                                                            foreach ($data_paket as $d) {
                                                            ?>
                                                                 <tr>
                                                                      <th><?php echo $no++; ?></th>
                                                                      <td><?php echo $d->nama_paket; ?>
                                                                           v<?php echo $d->versi_apl_paket; ?>
                                                                      </td>
                                                                      <td>

                                                                           <?php

                                                                      $total_id		= "id_paket_jawaban='" . $d->id_paket . "' ";
                                                                      $tertinggi    = $this->M_dasbor->total_soal($total_id)*5;
                                                                      $terendah     = $this->M_dasbor->total_soal($total_id)*1;
 
                                                                      $total = (($this->M_dasbor->total_ss_p($total_id) + $this->M_dasbor->total_ss_n($total_id))*5)+(($this->M_dasbor->total_s_p($total_id) + $this->M_dasbor->total_s_n($total_id))*4)+(($this->M_dasbor->total_c_p($total_id) + $this->M_dasbor->total_c_n($total_id))*3)+(($this->M_dasbor->total_ts_p($total_id) + $this->M_dasbor->total_ts_n($total_id))*2)+(($this->M_dasbor->total_sts_p($total_id) + $this->M_dasbor->total_sts_n($total_id))*1);
                                                       
                                                                      $nilai = substr(($total / $tertinggi) * (100), 0, 5);
                                                                      
                                                                      if ($nilai <= 100 && $nilai >= 80) { ?>
                                                                           <span class="badge bg-success text-white">
                                                                                <?php echo $nilai ?>%
                                                                           </span>
                                                                           <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                                                           <span class="badge bg-success text-white">
                                                                                <?php echo $nilai ?>%
                                                                           </span>
                                                                           <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                                                           <span class="badge bg-warning text-white">
                                                                                <?php echo $nilai ?>%
                                                                           </span>
                                                                           <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                                                           <span class="badge bg-danger text-white">
                                                                                <?php echo $nilai ?>%
                                                                           </span>
                                                                           <?php } else if ($nilai <= 19.9) { ?>
                                                                           <span class="badge bg-danger text-white">
                                                                                <?php echo $nilai ?>%
                                                                           </span>
                                                                           <?php } ?>
                                                                      </td>
                                                                      <td>
                                                                           <?php
                    
                                                                     $total_id	   = "id_paket_jawaban='" . $d->id_paket . "' ";
                                                                     $tertinggi    = $this->M_dasbor->total_soal($total_id)*5;
                                                                     $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                                                                     $total = (($this->M_dasbor->total_ss_p($total_id) + $this->M_dasbor->total_ss_n($total_id))*5)+(($this->M_dasbor->total_s_p($total_id) + $this->M_dasbor->total_s_n($total_id))*4)+(($this->M_dasbor->total_c_p($total_id) + $this->M_dasbor->total_c_n($total_id))*3)+(($this->M_dasbor->total_ts_p($total_id) + $this->M_dasbor->total_ts_n($total_id))*2)+(($this->M_dasbor->total_sts_p($total_id) + $this->M_dasbor->total_sts_n($total_id))*1);
                                                                    
                                                                     $nilai = ($total / $tertinggi) * 100;
                                                                      
                                                                     if ($nilai <= 100 && $nilai >= 80) { ?>
                                                                           <span class="badge bg-success text-white">
                                                                                Sangat Setuju
                                                                           </span>
                                                                           <?php } else if ($nilai <= 79.9 && $nilai >= 60) { ?>
                                                                           <span class="badge bg-success text-white">
                                                                                Setuju
                                                                           </span>
                                                                           <?php } else if ($nilai <= 59.9 && $nilai >= 40) { ?>
                                                                           <span class="badge bg-warning text-white">
                                                                                Cukup
                                                                           </span>
                                                                           <?php } else if ($nilai <= 39.9 && $nilai >= 20) { ?>
                                                                           <span class="badge bg-danger text-white">
                                                                                Tidak Setuju
                                                                           </span>
                                                                           <?php } else if ($nilai <= 19.9) { ?>
                                                                           <span class="badge bg-danger text-white">
                                                                                Sangat Tidak Setuju
                                                                           </span>
                                                                           <?php } ?>
                                                                      </td>
                                                                      <td>
                                                                           <a href="<?php echo base_url('banksoal/data_responden') . '/' . enkrip($d->id_paket); ?>"
                                                                                data-mdb-toggle="tooltip"
                                                                                class="fas fa-eye text-success me-3"
                                                                                title="Detail">
                                                                           </a>
                                                                      </td>
                                                                 </tr>

                                                                 <?php }} else { ?>
                                                                 <td class="text-center" colspan="9">
                                                                      Tidak ada data</td>
                                                                 <?php } ?>
                                                            </tbody>
                                                       </table>
                                                  </div>

                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-xl-6 col-md-6">
                                        <div class="card">
                                             <div class="card-body" style="height: 384px;overflow: auto;">
                                                  <h4 class="header-title mt-0 mb-3">Total Responden
                                                       Berdasarkan
                                                       Kategori</h4>
                                                  <div class="table-responsive">
                                                       <table id="cari" class="table table-hover mb-0">
                                                            <thead>
                                                                 <tr>
                                                                      <th>No</th>
                                                                      <th>Kategori Responden</th>
                                                                      <th>Jumlah Responden</th>
                                                                 </tr>
                                                            </thead>
                                                            <tbody>
                                                                 <tr>
                                                                      <th>1</th>
                                                                      <td>Dosen</td>
                                                                      <td><?php echo $jml_dosen; ?></td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>2</th>
                                                                      <td>Mahasiswa</td>
                                                                      <td><?php echo $jml_mahasiswa; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>3</th>
                                                                      <td>Karyawan</td>
                                                                      <td><?php echo $jml_karyawan; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <th>4</th>
                                                                      <td>Staf</td>
                                                                      <td><?php echo $jml_staf; ?></td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>

                              </div> <!-- end col-->
                         </form>

                         <div class="row">
                              <div class="col-xl-6 col-md-6">
                                   <div class="card">
                                        <div class="card-body" style="height: 384px;overflow: auto;">
                                             <h4 class="header-title mt-0 mb-3">Jumlah Responden Setiap
                                                  Paket</h4>
                                             <div class="table-responsive">
                                                  <table id="cari" class="table table-hover mb-0">
                                                       <thead>
                                                            <tr>
                                                                 <th>No</th>
                                                                 <th>Nama Paket</th>
                                                                 <th>Jumlah Responden</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <?php
                                                  $no = 0 + 1;
                                                  if ($data_pertanyaan) {
                                                  foreach ($data_pertanyaan as $d) {
                                                  ?>
                                                            <tr>
                                                                 <td><?php echo $no++; ?></td>
                                                                 <td><?php echo $d->nama_paket; ?></td>
                                                                 <td>
                                                                      <?php
                                                            $total_id	       = "id_paket='" . $d->id_paket . "' ";
                                                            $total_responden = $this->M_dasbor->total_responden($total_id);
                                                            
                                                            echo $total_responden;
                                                            ?>
                                                                 </td>
                                                            </tr>
                                                            <?php }} else { ?>
                                                            <td class="text-center" colspan="9">Tidak ada
                                                                 data</td>
                                                            <?php } ?>
                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-xl-6 col-md-6">
                                   <div class="card">
                                        <div class="card-body">
                                             <h4 class="header-title mt-0 mb-3">
                                                  <center>Diagram Persentase Kuesioner</center>
                                             </h4>
                                             <div class="table-responsive" style="overflow: auto;">
                                                  <figure class="highcharts-figure">
                                                       <div id="kesimpulan"></div>
                                                  </figure>
                                             </div>

                                        </div>
                                   </div>
                              </div>

                         </div>


                         <div class="row">
                              <div class="col-xl-6 col-md-6">
                                   <div class="card">
                                        <div class="card-body">
                                             <h4 class="header-title mt-0 mb-3">
                                                  <center>Diagram Kategori Responden</center>
                                             </h4>
                                             <div class="table-responsive" style="overflow: auto;">
                                                  <figure class="highcharts-figure">
                                                       <div id="pie"></div>
                                                  </figure>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-xl-6 col-md-6">
                                   <div class="card">
                                        <div class="card-body">
                                             <h4 class="header-title mt-0 mb-3">
                                                  <center>Diagram Total Responden Setiap Paket</center>
                                             </h4>
                                             <div class="table-responsive" style="overflow: auto;">
                                                  <figure class="highcharts-figure">
                                                       <div id="responden"></div>
                                                  </figure>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div><!-- end col -->
               </div>
          </div>
     </div>

     <footer class="footer">
          <div class="container-fluid">
               <nav class="pull-left">
                    <ul class="nav">
                         <li class="nav-item">
                              <a class="nav-link" href="#">
                                   Help
                              </a>
                         </li>
                         <!-- <li class="nav-item">
                                        <a class="nav-link" href="#">
                                             Licenses
                                        </a>
                                   </li> -->
                    </ul>
               </nav>
               <div class="copyright ml-auto">
                    Repository & Kuesioner 2022, Created by <i class="fa fa-heart heart text-danger"></i> by <a
                         href="#">Moh.
                         Fiqih</a>
               </div>
          </div>
     </footer>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>

<!-- Pie Responden -->
<script type="text/javascript">
Highcharts.chart('pie', {
     chart: {
          plotBackgroundColor: null,
          plotBorderWidth: null,
          plotShadow: false,
          type: 'pie'
     },
     title: {
          text: ''
     },
     tooltip: {
          pointFormat: '{series.name}: <b>{point.y:1f} Responden</b>'
     },
     accessibility: {
          point: {
               valueSuffix: '%'
          }
     },
     plotOptions: {
          pie: {
               allowPointSelect: true,
               cursor: 'pointer',
               dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.y:1f} '
               }
          }
     },
     series: [{
          name: 'Total',
          colorByPoint: true,
          data: [
               <?php
                         if(is_array($data_pie)){
                         foreach ($data_pie as $d) {
                              $seb = $d->sebagai;
                              $jml = $d->Jumlah;
                              echo "{name: '$seb',y: $jml},";
                         }
                    }  
                    ?>
          ]
     }]
});
</script>
<!-- Ebd Pie Responden -->

<!-- Kesimpulan -->
<script type="text/javascript">
// Create the chart
Highcharts.chart('kesimpulan', {
     chart: {
          type: 'column'
     },
     title: {
          align: 'center',
          text: ''
     },
     subtitle: {
          align: 'left',
          text: ''
     },
     accessibility: {
          announceNewData: {
               enabled: true
          }
     },
     xAxis: {
          type: 'category'
     },
     yAxis: {
          title: {
               text: 'Persentase'
          }

     },
     legend: {
          enabled: false
     },
     plotOptions: {
          series: {
               borderWidth: 0,
               dataLabels: {
                    enabled: true,
                    format: '{point.y:1f} %'
               }
          }
     },

     tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f} Persen</b><br/>'
     },

     series: [{
          name: "Persentase",
          colorByPoint: true,
          data: [
               <?php
                         if(is_array($data_paket)){
                         foreach ($data_paket as $d) {
                              $id = $d->nama_paket;
                              
                              $total_id		= "id_paket_jawaban='" . $d->id_paket . "' ";
                              $tertinggi    = $this->M_dasbor->total_soal($total_id)*5;
                              $terendah     = $this->M_dasbor->total_soal($total_id)*1;

                              $jml = (($this->M_dasbor->total_ss_p($total_id) + $this->M_dasbor->total_ss_n($total_id))*5)+(($this->M_dasbor->total_s_p($total_id) + $this->M_dasbor->total_s_n($total_id))*4)+(($this->M_dasbor->total_c_p($total_id) + $this->M_dasbor->total_c_n($total_id))*3)+(($this->M_dasbor->total_ts_p($total_id) + $this->M_dasbor->total_ts_n($total_id))*2)+(($this->M_dasbor->total_sts_p($total_id) + $this->M_dasbor->total_sts_n($total_id))*1);

                              // $tertinggi = $this->M_dasbor->total_soal($total_soal)*5;
                              
                              $nilai = substr(($jml / $tertinggi) * (100), 0, 5);
                              
                              echo "{name: '$id',y: $nilai},";
                         }
                    }  
                    ?>
          ]
     }],
     drilldown: {
          breadcrumbs: {
               position: {
                    align: 'right'
               }
          },
          series: [{
               name: "Chrome",
               id: "Chrome",
               data: [
                    [
                         "v65.0",
                         0.1
                    ]
               ]
          }, ]
     }
});
</script>
<!-- End Kesimpulan -->

<!-- Total Responden -->
<script type="text/javascript">
// Create the chart
Highcharts.chart('responden', {
     chart: {
          type: 'column'
     },
     title: {
          align: 'center',
          text: ''
     },
     subtitle: {
          align: 'left',
          text: ''
     },
     accessibility: {
          announceNewData: {
               enabled: true
          }
     },
     xAxis: {
          type: 'category'
     },
     yAxis: {
          title: {
               text: 'Total Responden'
          }

     },
     legend: {
          enabled: false
     },
     plotOptions: {
          series: {
               borderWidth: 0,
               dataLabels: {
                    enabled: true,
                    format: '{point.y:1f}'
               }
          }
     },

     tooltip: {
          headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
          pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f} Responden</b><br/>'
     },

     series: [{
          name: "Persentase",
          colorByPoint: true,
          data: [
               <?php
                         if(is_array($data_paket)){
                         foreach ($data_paket as $d) {
                              $id = $d->nama_paket;
                              
                              $total_id		= "id_paket='" . $d->id_paket . "' ";
                              $total_responden = $this->M_dasbor->total_responden($total_id);

                              echo "{name: '$id',y: $total_responden},";
                         }
                    }  
                    ?>
          ]
     }],
     drilldown: {
          breadcrumbs: {
               position: {
                    align: 'right'
               }
          },
          series: [{
               name: "Chrome",
               id: "Chrome",
               data: [
                    [
                         "v65.0",
                         0.1
                    ]
               ]
          }, ]
     }
});
</script>
<!-- End Total Responden -->