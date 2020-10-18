<div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Admin</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <strong>Buat Album Photo</strong>
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
                                <h5>Tambah Album Photo</h5>
                            </div>
                            <div class="ibox-content">
                                <?= form_open_multipart('Admin/photoAlbum', ['class' => 'form-horizontal']) ?>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Nama Album Photo</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Cover Album Photo</label>
                                        <div class="col-lg-10">
                                            <input type="file"  name="berkas" class="form-control" accept=".jpg,.jpeg,.png"> 
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
                            <h5>Album Photo</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Album Photo</th>
                                        <th>Cover</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($album as $i => $row): ?>
                                    <tr>
                                    
                                        <td><?= $i + 1 ?></td>
                                        <td><?= $row->albumName ?></td>
                                        <td><img src="<?= base_url()?>uploads/coveralbum/<?=  $row->coverPhoto ?>" width="100px" height="100px"></td>
                                        <td>
                                        <button  id="swal-6" onclick="edit('<?= $row->id ?>');" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button> 
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
               
               
               
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Album Photo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <?= form_open_multipart('Admin/photoAlbum', ['class' => 'form-horizontal']) ?>
                        <input type="hidden" id="selector" name="id"  class="form-control">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Nama Album Photo</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Sampul Album </label>
                                        <div class="col-lg-10">
                                            <input type="file"  name="berkas" class="form-control" accept=".jpg,.jpeg,.png"> 
                                        </div>
                                    </div>
                                   
                                
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" name="edit" value="Edit" class="btn btn-sm btn-success">
                                        </div>
                                    </div>
                                <?= form_close() ?>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            
                        </div>
                        </div>
                    </div>
                </div>                          

                <script type="text/javascript">
                function edit(id){
                    $('#selector').val(id);
                }

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
                        $.post('<?php echo base_url(); ?>Admin/photoAlbum', {delete: true, id: id})
                            .done(function(response) {
                                swal('Dokumentasi berhasil dihapus', {
                                    icon: 'success',
                                });
                                // window.location.href = '<?= base_url('Admin/infografik') ?>';
                                location.reload();
                            });
                    
                    } else {
                    swal('Document is safe!');
                    }
                    });
                }
        </script>