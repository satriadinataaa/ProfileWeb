
						
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Kurikulum</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Kurikulum</strong>
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
                            <h5>Edit Data Kurikulum</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('AdminCabang/Kurikulum', ['class' => 'form-horizontal']) ?>
                               
                                <div class="form-group">
                                <label class="col-lg-1 control-label">Kurikulum</label>
                                    <div class="col-lg-12">
                                        
                                    <textarea class="form-control" id="editor1" name="tekskurikulum" style="resize:none" placeholder="Isi Berita"><?= $datasekolah->kurikulum?></textarea>         
                                    
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


      
           
