
						
<div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Berita</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo base_url(); ?>home">Home</a>
                        </li>
                        <li class="active">
                            <strong>Berita</strong>
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
                            <h5>Tambah Berita</h5>
                        </div>
                        <div class="ibox-content">
                            <?= form_open_multipart('Admin/Berita', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">Judul</label>
                                        <div class="col-lg-11">
                                            <input type="text" placeholder="Judul" name="judul" class="form-control"> 
                                        </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-lg-1 control-label">Foto Berita </label>
                                        <div class="col-lg-11">
                                            <input type="file"  name="berkas" class="form-control" accept=".jpg,.jpeg,.png"> 
                                        </div>
                                    </div>
                                <div class="form-group">
                                <label class="col-lg-1 control-label">Isi Berita</label>
                                    <div class="col-lg-12">
                                        
                                    <textarea class="form-control" id="editor1" name="berita_isi" style="resize:none" placeholder="Isi Berita"></textarea>         
                                    
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
                        <h5>Berita</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table ">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                   
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php foreach ($berita as $i => $row): ?>
                                <tr>
                                    <td><?= $i + 1 ?></td>
                                    <td><?= $row->judulBerita ?></td>
                                    
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
                    $.post('<?php echo base_url(); ?>Admin/Berita', {delete: true, id: id})
                        .done(function(response) {
                            swal('Berita berhasil dihapus', {
                                icon: 'success',
                              });
                            // window.location.href = '<?= base_url('Admin') ?>';
                            location.reload();
                        });
                  
                  } else {
                  swal('Berita aman!');
                  }
                });
            }
    </script>
