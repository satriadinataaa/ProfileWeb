    <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Admin</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <strong>Dokumentasi</strong>
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
                                <h5>Tambah Dokumentasi</h5>
                            </div>
                            <div class="ibox-content">
                                <?= form_open_multipart('Admin/Dokumentasi', ['class' => 'form-horizontal']) ?>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Nama Kegiatan</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Berkas Dokumentasi <br>(PNG | JPG | JPEG)</label>
                                        <div class="col-lg-10">
                                            <input type="file"  name="berkas" class="form-control" accept=".jpg,.jpeg,.png"> 
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Pokja</label>
                                        <div class="col-lg-10">
                                            <select name="pokja" class="form-control" required>
                                                <option disabled selected>Pilih Pokja</option>
                                                <?php foreach ($pokja as $pok => $p): ?>
                                                <option value="<?= $p->id?>"><?= $p->nama_pokja ?></option>
                                                <?php endforeach;?>
                                            </select>
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
                            <h5>Dokumentasi</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kegiatan</th>
                                        <th>Dokumentasi</th>
                                        <th>Pokja</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($dokumentasi as $i => $row): ?>
                                    <tr>
                                    
                                        <td><?= $i + 1 ?></td>
                                        <td><?= $row->nama_kegiatan ?></td>
                                        <td><img src="<?= base_url()?>assets/dokumentasi/<?=  $row->nama_file ?>" width="100px" height="100px"></td>
                                        <td><?= $row->pokja->nama_pokja?></td>
                                        <td> 
                                        <button  id="swal-6" onclick="hapus('<?= $row->id_dokumentasi ?>');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
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
                        $.post('<?php echo base_url(); ?>Admin/Dokumentasi', {delete: true, id: id})
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