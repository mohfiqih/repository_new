<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- App favicon -->
     <link rel="shortcut icon" href="<?php echo base_url('assets/backend'); ?>/images/phb.png">
     <title></title>
</head>
<style>
table {
     border-collapse: collapse;
     width: 100%;
}

table,
th,
td {
     border: 1px solid black;
}

th,
td {
     padding: 5px;
}

th {
     color: black;
}

tr:hover {
     background-color: #f5f5f5;
}
</style>

<body>
     <!-- <div class="container"> -->
     <div class="row">
          <!-- <div class="col-md-6">
               <img width="50" height="50" src="<?php echo base_url('assets/backend/images/phb.png'); ?>" alt="">
          </div> -->
          <div class="col-md-6">
               <center>
                    <p style="line-height: 70%;">Yayasan Pendidikan Harapan Bersama</p>
                    <h3 style="line-height: 70%;">Politeknik Harapan Bersama</h3>
                    <h3 style="line-height: 70%;">Program Studi DIII Teknik Komputer</h3>
                    <p style="line-height: 70%;">Kampus I: Jl. Mataram No.9 Tegal 52142 Telp. 0283-352000 Fx.
                         0283-353353</p>
                    <p style="line-height: 70%;">Website: <a style="text-decoration:none;color: black;"
                              href="www.poltektegal.ac.id">www.poltektegal.ac.id</a><span
                              style="margin-left: 20px;">Email: <a style="text-decoration:none;color: black;"
                                   href="tik@poltektegal.ac.id">tik@poltektegal.ac.id</a></span></p>
                    <hr>
                    <hr>
               </center>
          </div>
          <br />
          <div>
               <center>
                    <h3>DAFTAR DATA BERKAS</h3>
               </center>
          </div>
          <div class="card-body" data-mdb-perfect-scrollbar="true" style="overflow-x: auto;">
               <table class="table table-hover mb-0">
                    <thead>
                         <tr>
                              <td scope="col">No</td>
                              <td scope="col">Kode
                                   Berkas</td>
                              <td scope="col">Nama Berkas</td>
                              <td scope="col">Nama Aplikasi</td>
                              <td scope="col">Tanggal Berkas</td>
                         </tr>
                    </thead>
                    <tbody>
                         <?php
                         $no=0+1;
					if ($data_berkas){
					foreach ($data_berkas as $d){ 
					?>
                         <tr class="fw-normal">
                              <td>
                                   <?php echo $no++; ?>
                              </td>
                              <td>
                                   <?php $inisial = substr($d->judul,0,4);
                                                        echo $inisial;?>_<?php echo $d->id_m; ?>
                              </td>
                              <td>
                                   <?php echo $d->judul; ?>
                              </td>
                              <td>
                                   <?php echo $d->nama_apl; ?>
                              </td>
                              <td>
                                   <?php echo $d->tgl_publish; ?>
                              </td>
                              <?php }} else { ?>
                              <td class="text-center" colspan="6">Tidak ada data</td>
                              <?php } ?>
                         </tr>
                    </tbody>
               </table>
          </div>
          <br />
          <div style="margin-left: 850px;">
               <p style="line-height: 70%;">Tegal,</p>
               <p style="line-height: 70%;">Ka. Prodi</p><br /><br />
               <u style="line-height: 70%;">Rais, S.Pd,M.Kom.</u>
               <p style="line-height: 70%;">NIPY.</p>
          </div>
     </div>
     </div>
</body>

</html>