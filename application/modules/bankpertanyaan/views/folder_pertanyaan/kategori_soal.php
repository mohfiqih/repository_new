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
                                        <li class="breadcrumb-item active" aria-current="page">Kategori Pertanyaan
                                        </li>
                                   </ol>
                              </nav>
                         </div>
                         <?php echo form_open(uri(2) == "edit" ? url(1, "update") : url(1, "tambah_soal/"). uri(3)); ?>

                         <div class="row">
                              <div class="col-md-6">
                                   <div class="card">
                                        <a href="<?php echo url(1) .'/soal_positif/'. uri(3); ?>" class="dropdown-item">
                                             <div class="card-body"><br />
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-4">Tambah Pertanyaan Positif</h4>
                                                  </center>
                                             </div>
                                        </a>
                                   </div>
                              </div>
                              <div class="col-md-6">
                                   <div class="card">
                                        <a href="<?php echo url(1) .'/soal_negatif/'. uri(3); ?>" class="dropdown-item">
                                             <div class="card-body"><br />
                                                  <center>
                                                       <h4 class="header-title mt-0 mb-4">Tambah Pertanyaan Negatif</h4>
                                                  </center>
                                             </div>
                                        </a>

                                   </div>
                              </div>
                         </div>

                    </div>
               </div>
          </div>
     </div>
</div>