<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Admin</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Ubah Password</strong>
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
                            <h5>Ubah Password</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('Admin/changePassword', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Ubah Password</label>
                                    <div class="col-lg-10">
                                    
                                        
                                        <input type="password"  name="password"  class="form-control"> 
                                    </div>
                                    </div>
                                
                               
                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <input type="submit" name="submit" value="Ubah Password" class="btn btn-sm btn-success">
                                    </div>
                                </div>
                            <?= form_close() ?>
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