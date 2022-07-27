<head>
     <title>Paket Kuesioner | Repository</title>
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
                                        <li class="breadcrumb-item active" aria-current="page">Paket Kuesioner
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <div class="card-body">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <a href="<?php echo base_url('bankpertanyaan/tambah_paket'); ?>">
                                                  <button style="margin-left: 10px;" type="button"
                                                       class="btn btn-success"><span class="btn-label"><i
                                                                 class="fa fa-plus"></i></span>
                                                       Paket Kuesioner</button>
                                             </a>
                                             <a href="<?php echo base_url('bankpertanyaan/laporan_paket'); ?>"
                                                  target="_blank">
                                                  <button type="button" style="margin-left: 10px;"
                                                       class=" btn btn-danger waves-effect waves-light">
                                                       <span class="btn-label"><i
                                                                 class="fa fa-download"></i></span>Export PDF
                                                  </button>
                                             </a>
                                        </div>
                                        <div class="card-body" data-mdb-perfect-scrollbar="true"
                                             style="overflow-x: auto;">
                                             <table id="myTable" class="table table-hover mb-0">
                                                  <thead>
                                                       <tr>
                                                            <th class="align-middle" scope="col" style="width: 5px;">No
                                                            </th>
                                                            <th class="align-middle" scope="col">Kode Paket
                                                            </th>
                                                            <th class="align-middle" scope="col">Nama Paket
                                                                 Pertanyaan</th>
                                                            <th class="align-middle" scope="col">Aplikasi
                                                            </th>
                                                            <th class="align-middle" scope="col" style="width: 100px;">
                                                                 Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <?php
                                                       $no=0+1;
                                                       if ($data_paket){
                                                       foreach ($data_paket as $d){ 
                                                       ?>
                                                       <tr class="fw-normal">
                                                            <th class="align-middle">
                                                                 <?php echo $no++; ?>
                                                            </th>
                                                            <th class="align-middle">
                                                                 <?php $inisial = substr($d->aplikasi,0,3);
                                                        echo $inisial;?>_v<?php echo $d->versi_apl_paket; ?>
                                                            </th>
                                                            <td class="align-middle">
                                                                 <?php echo $d->nama_paket; ?>
                                                                 v<?php echo $d->versi_apl_paket; ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                 <?php echo $d->aplikasi; ?>
                                                            </td>
                                                            <td class="align-middle">
                                                                 <a style="margin-left: 10px;text-decoration: none;"
                                                                      href="<?php echo url(1) .'/evaluasi_pertanyaan/'. enkrip($d->id_paket); ?>"
                                                                      data-mdb-toggle="tooltip"
                                                                      class="fas fa-eye text-success me-3" title="Soal">
                                                                 </a>

                                                                 <a style="margin-left: 10px;text-decoration: none;"
                                                                      href="<?php echo url(1) .'/edit_paket/'. enkrip($d->id_paket); ?>"
                                                                      data-mdb-toggle="tooltip" title="Edit"><i
                                                                           class="fas fa-edit text-warning me-3"></i></a>

                                                                 <a style="margin-left: 10px;text-decoration: none;"
                                                                      href="<?php echo url(1) .'/hapus_paket/'. enkrip($d->id_paket); ?>"
                                                                      data-mdb-toggle="tooltip" title="Remove"
                                                                      onclick="return confirm('Yakin hapus paket <?php echo $d->nama_paket; ?> v<?php echo $d->versi_apl_paket; ?>?')"><i
                                                                           class="fas fa-trash-alt text-danger"></i></a>
                                                            </td>
                                                       </tr>
                                                       <?php }} else { ?>
                                                       <td class="text-center" colspan="8">Tidak ada data</td>
                                                       <?php } ?>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <!-- End Tabel -->
                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>
<!-- <?php echo $this->session->flashdata('notifikasi'); ?> -->