<div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Admin</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <strong>Video</strong>
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
                                <h5>Tambah Video</h5>
                            </div>
                            <div class="ibox-content">
                                <?= form_open_multipart('Admin/Video', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                        <label class="col-lg-2 control-label">Pilih Album</label>
                                        <div class="col-lg-10">
                                            <select name="album" class="form-control" required>
                                                <option disabled selected>Pilih Album</option>
                                                <?php foreach ($album as $pok => $p): ?>
                                                <option value="<?= $p->id?>"><?= $p->albumName ?></option>
                                                <?php endforeach;?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Kode Video Youtube</label>
                                        <div class="col-lg-10">
                                             
                                            <div class="input-group m-b">
                                                            <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                                                            <input type="text"  name="video" class="form-control" required >
                                                        </div>
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
                            <h5>Video</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Album</th>
                                        <th>Video</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($Video as $i => $row): ?>
                                    <tr>
                                    
                                        <td><?= $i + 1 ?></td>
                                        
                                        <td><?= $row->albumPhoto->albumName ?></td>
                                       
                                        <td><iframe width="100%" src="<?= $row->youtubeID ?>"></iframe></td>
                                        
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
                        $.post('<?php echo base_url(); ?>Admin/Video', {delete: true, id: id})
                            .done(function(response) {
                                swal('Video berhasil dihapus', {
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