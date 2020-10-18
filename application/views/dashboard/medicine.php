<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Obat</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Obat</strong>
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
                            <h5>Tambah Obat</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('home/add-vendor', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama Obat</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">No. Batch</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Batch" name="batch" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Expired Date</label>
                                    <div class="col-lg-10">
                                        <input type="date" placeholder="Expired" name="expiredDate" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Stock</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Stock" name="Stock" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Harga Satuan</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Harga" name="price" class="form-control">
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
                        <h5>Obat</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Obat</th>
                                    <th>No. Batch</th>
                                    <th>Expired</th>
                                    <th>Stock</th>
                                    <th>Harga Satuan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?php foreach ($vendor as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $row->name ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><?= $row->contact ?></td>
                                    <td><?= $row->email ?></td>
                                    <td> <a data-toggle="modal" class="btn btn-warning" onclick="document.getElementById('account_id').value = <?= $row->id ?>" id="toggle-change-password-<?= $row->username ?>" href="#modal-form2">Ubah Password</a>
                                     <button  id="swal-6" onclick="hapus('<?= $row->id ?>');" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                 </td>
                                </tr>
                                <?php endforeach; ?> -->

                            </tbody>
                        </table>

                    </div>
                </div>
                    
                 </div>
             </div>


            <div id="modal-form2" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <?= form_open_multipart('home/add-vendor', ['class' => 'form-horizontal']) ?>
                                    <h3 class="m-t-none m-b">Ubah Password</h3>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Password Lama</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="Password Lama" name="c_old_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Password Baru</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="Password Baru" name="c_new_password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Konfirmasi Password</label>
                                        <div class="col-lg-10">
                                            <input type="password" placeholder="Konfirmasi Password" name="c_rpassword" class="form-control">
                                        </div>
                                    </div>
                                    <input type="hidden" name="account_id" id="account_id">
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" name="change_password" value="Ubah" class="btn btn-sm btn-success">
                                        </div>
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            function hapus(username){
                swal({
                  title: 'Are you sure?',
                  text: '',
                  icon: 'warning',
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $.post('<?php echo base_url(); ?>Home/add-vendor', {delete: true, id: username})
                        .done(function(response) {
                            swal('Akun berhasil dihapus', {
                                icon: 'success',
                              });
                            // window.location.href = '<?= base_url('home/add-vendor') ?>';
                            location.reload();
                        });
                  
                  } else {
                  swal('Your imaginary file is safe!');
                  }
                });
            }
    </script>