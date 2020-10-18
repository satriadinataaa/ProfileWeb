<div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Admin</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <strong>Buat Pengumuman</strong>
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
                                <h5>Tambah Pengumuman</h5>
                            </div>
                            <div class="ibox-content">
                                <?= form_open_multipart('Admin/Pengumuman', ['class' => 'form-horizontal']) ?>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Judul Pengumuman</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Keterangan</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Keterangan" name="keterangan" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">File Pengumuman</label>
                                        <div class="col-lg-10">
                                            <input type="file"  name="berkas" class="form-control" accept=""> 
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
                            <h5>Pengumuman</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pengumuman</th>
                                        <th>Keterangan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pengumuman as $i => $row): ?>
                                    <tr>
                                    
                                        <td><?= $i + 1 ?></td>
                                        <td><?= $row->nama_pengumuman ?></td>
                                        <td><?=$row->keterangan?></td>
                                        <td>
                                        <a href="<?= base_url()?>assets/pengumuman/<?= $row->file_pengumuman?>" class="btn btn-primary">Download</a> 
                                        <button  id="swal-6" onclick="hapus('<?= $row->id_pengumuman ?>');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
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
                

                function hapus(id_pengumuman){
                    swal({
                    title: 'Are you sure?',
                    text: '',
                    icon: 'warning',
                    buttons: true,
                    dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $.post('<?php echo base_url(); ?>Admin/Pengumuman', {delete: true, id_pengumuman: id_pengumuman})
                            .done(function(response) {
                                swal('Pengumuman berhasil dihapus', {
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