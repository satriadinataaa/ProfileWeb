<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Admin</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Dokumen</strong>
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
                            <h5>Tambah Dokumen</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('Admin/dokumen', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Berkas dokumen <br>(PDF)</label>
                                    <div class="col-lg-10">
                                        <input type="file"  name="berkas" class="form-control" accept=".pdf"> 
                                    </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" name="submit" value="Tambah" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
                        </div>
                     </div>
                    <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Dokumen</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Dokumen</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach ($dokumen as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><a href="<?= base_url()?>assets/dokumen/<?=  $row->nama_file ?>" download><?= $row->nama_file?></a></td>
                                    
                                    <td> 
                                     <button  id="swal-6" onclick="hapus('<?= $row->id ?>');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                 </td>
                                </tr>
                                <?php endforeach; ?> 

                            </tbody>
                        </table>

                    </div>
                </div>
                    
                 </div>
             </div>


            <script type="text/javascript">
            
            function hapus(id){
                swal({
                  title: 'Are you sure?',
                  text: '',
                  icon: 'warning',
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $.post('<?php echo base_url(); ?>Admin/dokumen', {delete: true, id: id})
                        .done(function(response) {
                            swal('dokumen berhasil dihapus', {
                                icon: 'success',
                              });
                            // window.location.href = '<?= base_url('Admin/dokumen') ?>';
                            location.reload();
                        });
                  
                  } else {
                  swal('Document is safe!');
                  }
                });
            }
    </script>