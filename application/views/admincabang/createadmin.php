<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Admin</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Create Admin</strong>
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
                            <h5>Tambah Admin</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('Admin/createAdmin', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama Admin</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Username</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Username" name="username" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" placeholder="Password" name="password" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-2 control-label">Pilih Cabang</label>
                                        <div class="col-lg-10">
                                            <select name="school" class="form-control" required>
                                                <option disabled selected>Pilih Cabang</option>
                                                <?php foreach ($school as $pok => $p): ?>
                                                <option value="<?= $p->id?>"><?= $p->schoolName ?></option>
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
                        <h5>Admin</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Admin</th>
                                    <th>Cabang Auladi</th>
                                    <th>Username</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach ($user as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $row->name ?></td>
                                    <td><?= $row->schools->schoolName ?></td>
                                    <td><?= $row->username ?></td>
                                    <td> <a data-toggle="modal" class="btn btn-warning" onclick="document.getElementById('account_id').value = <?= $row->id_user ?>" id="toggle-change-password-<?= $row->nama ?>" href="#modal-form2">Ubah Data Admin</a>
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


            <div id="modal-form2" class="modal fade" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <?= form_open_multipart('Admin/createAdmin', ['class' => 'form-horizontal']) ?>
                                    <h3 class="m-t-none m-b">Ubah Data Admin</h3>
                                    <div class="form-group">
                                    <label class="col-lg-2 control-label">Nama Admin</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Nama" name="name" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Username</label>
                                    <div class="col-lg-10">
                                        <input type="text" placeholder="Username" name="username" class="form-control"> 
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" placeholder="Password" name="password" class="form-control"> 
                                    </div>
                                </div>
                                
                               
                                
                                    <input type="hidden" name="id_user" id="account_id">
                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <input type="submit" name="edit" value="Ubah" class="btn btn-sm btn-success">
                                        </div>
                                    </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            
            function hapus(id_user){
                swal({
                  title: 'Are you sure?',
                  text: '',
                  icon: 'warning',
                  buttons: true,
                  dangerMode: true,
                })
                .then((willDelete) => {
                  if (willDelete) {
                    $.post('<?php echo base_url(); ?>Admin/createAdmin', {delete: true, id_user: id_user})
                        .done(function(response) {
                            swal('Admin berhasil dihapus', {
                                icon: 'success',
                              });
                            // window.location.href = '<?= base_url('Admin/createAdmin') ?>';
                            location.reload();
                        });
                  
                  } else {
                  swal('Admin is safe!');
                  }
                });
            }
    </script>