
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Pengajar</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Pengajar</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <?= $this->session->flashdata('msg') ?>
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Data Pengajar</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('AdminCabang/Pengajar', ['class' => 'form-horizontal']) ?>
                               
                                <div class="form-group">
                                <div class="col-lg-12">
                                    <p>Mendapatkan image dari google drive : https://drive.google.com/uc?export=view&id</p>
                                </div>
                                </div>
                                
                                <div  class="form-group">
                                <div class="col-lg-12">
                                        
                                    <textarea class="form-control" id="editor1" name="teksPengajar" style="resize:none" placeholder="Isi Berita"><?= $datasekolah->pengajar?></textarea>         
                                    
                                    </div>
                                </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class=" col-lg-10">
                                        <input type="submit" name="submit" value="Perbarui" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                     </div>
                    
                    
                 </div>
             </div>


      
           
