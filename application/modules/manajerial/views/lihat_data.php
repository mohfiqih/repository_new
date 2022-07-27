<head>
     <title>Manajerial Aplikasi | Repository & Kuesioner Online</title>
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
                                             <a href="<?php echo base_url('manajerial'); ?>">Manajerial Aplikasi
                                             </a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">Detail Manajerial
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <div class="card">
                              <div class="card-body">
                                   <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "edit"); ?>"
                                        method="POST">
                                        <input type="hidden"
                                             name="<?php echo $this->security->get_csrf_token_name(); ?>"
                                             value="<?php echo $this->security->get_csrf_hash(); ?>">
                                        <?php
                                   if ($data_manajemen){
                                   foreach ($data_manajemen as $d){ 
                              ?>

                                        <div class="row">
                                             <form action="<?php echo uri(2) == "edit" ? url(1, "update") : url(1, "edit"); ?>"
                                                  method="POST">
                                                  <input type="hidden" name="id_m"
                                                       value="<?php echo uri(2) == "edit" ? enkrip($d->id_m) : ""; ?>">
                                                  <div class="col-md-6">
                                                       <div class="box-header with-border">
                                                            <h4 class="box-title" style="margin-left: 10px;">Data
                                                                 Aplikasi</h4>
                                                       </div>
                                                       <table class="table table-hover mb-0">
                                                            <tbody>
                                                                 <tr>
                                                                      <td width="150">Kode Aplikasi</td>
                                                                      <td width="20">:</td>
                                                                      <td><?php $inisial = substr($d->nama_apl,0,3);
                                                        echo $inisial;?>_<?php echo $d->id_m; ?>_<?php echo $d->versi_apl; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td width="150">Nama Aplikasi</td>
                                                                      <td width="20">:</td>
                                                                      <td><?php echo $d->nama_apl; ?>
                                                                           v<?php echo $d->versi_apl; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>Versi Aplikasi</td>
                                                                      <td>:</td>
                                                                      <td>v <?php echo $d->versi_apl; ?>
                                                                      </td>
                                                                 </tr>


                                                            </tbody>

                                                       </table>
                                                  </div>
                                             </form>
                                             <div class="col-md-6">
                                                  <div class="box-header with-border">
                                                       <h4 class="box-title" style="margin-left: 10px;">Data Lain</h4>
                                                  </div>
                                                  <div style="overflow: auto;">
                                                       <table class="table table-hover mb-0">
                                                            <tbody>
                                                                 <tr>
                                                                      <td>Penyedia</td>
                                                                      <td>:</td>
                                                                      <td><?php echo $d->penyedia_apl; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>Tanggal Terbit</td>
                                                                      <td>:</td>
                                                                      <td><?php echo $d->tgl_publish; ?>
                                                                      </td>
                                                                 </tr>
                                                                 <tr>
                                                                      <td>Lihat File</td>
                                                                      <td>:</td>
                                                                      <td>
                                                                           <a
                                                                                href="<?php echo base_url('bankberkas/lihat/'). uri(3); ?>">Lihat
                                                                                Berkas</a>
                                                                      </td>
                                                                 </tr>
                                                            </tbody>
                                                       </table>
                                                  </div>
                                             </div>
                                             <div style="margin-left: 35px;"><br />
                                                  <a href="<?php echo url(1) .'/edit/'. enkrip($d->id_m); ?>">
                                                       <button type="button" class="btn btn-danger"><span
                                                                 class="btn-label"><i class=" fas fa-edit"></i></span>
                                                            Edit</button>
                                                  </a>
                                                  <a href="<?php echo base_url('manajerial'); ?>">
                                                       <button type="button" class="btn btn-warning"><span
                                                                 class="btn-label"><i
                                                                      class=" fas fa-backward"></i></span>
                                                            Kembali</button>
                                                  </a>
                                             </div><br />
                                        </div>

                                        <?php }} else { ?>
                                        <td class="text-center" colspan="6">Tidak ada data</td>
                                        <?php } ?>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>