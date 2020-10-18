
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
});
</script>

						
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Edit Data Sekolah</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Edit Data Sekolah</strong>
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
                            <h5>Edit Data Sekolah</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('AdminCabang/', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">NSS</label>
                                        <div class="col-lg-11">
                                            <input type="text" placeholder="NSS" name="NSS" value="<?= $datasekolah->nss?>" class="form-control"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">Alamat</label>
                                        <div class="col-lg-11">
                                            <input type="text" placeholder="Alamat" name="alamat" value="<?= $datasekolah->alamat?>" class="form-control"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">No Telepon</label>
                                        <div class="col-lg-11">
                                            <input type="text" placeholder="No Telepon" name="telepon" value="<?= $datasekolah->no_telepon?>" class="form-control"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">Email</label>
                                        <div class="col-lg-11">
                                            <input type="text" placeholder="Email" name="email" value="<?= $datasekolah->email?>" class="form-control"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-1 col-lg-10">
                                        <input type="submit" name="submit" value="Perbarui" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                     </div>
                   
                    
                 </div>
             </div>
              <div class="wrapper wrapper-content animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Edit Foto Sekolah</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('AdminCabang/', ['class' => 'form-horizontal']) ?>
                            <div class="form-group">
                                        <label class="col-lg-1 control-label">Foto Sekolah </label>
                                        <div class="col-lg-11">
                                            <input type="file"  name="berkas" class="form-control" accept=".jpg,.jpeg,.png"> 
                                        </div>
                                    </div>
                                <div class="form-group">
                                    <div class="col-lg-offset-1 col-lg-10">
                                        <input type="submit" name="submitfoto" value="Perbarui" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                     </div>
                   
                    
                 </div>
             </div>


      
           