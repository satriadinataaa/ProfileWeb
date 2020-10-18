<div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                        <h2>Admin</h2>
                        <ol class="breadcrumb">
                            <li>
                                <a href="<?php echo base_url(); ?>home">Home</a>
                            </li>
                            <li class="active">
                                <strong>Pendaftaran</strong>
                            </li>
                        </ol>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pendaftar</h5>
                        </div>
                        <div class="ibox-content">

                            <table class="table table-striped table-bordered table-hover dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Cabang</th>
                                        <th>Jenjang</th>
                                        <th>Nama Ayah</th>
                                        <th>Telepon Ayah</th>
                                        <th>Unduh Data</th>
                                        <th>Hapus Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($pendaftaran as $i => $row): ?>
                                    <tr>
                                    
                                        <td><?= $i + 1 ?></td>
                                        
                                        <td><?= $row->nama_siswa?></td>
                                        <td><?= $row->jenis_kelamin?></td>
                                        <td><?= $row->tanggal_lahir?></td>
                                        <td><?= $row->cabang?></td>
                                        <td><?= $row->jenjang?></td>
                                        <td><?= $row->nama_ayah?></td>
                                        <td><?= $row->telepon_ayah?></td>
                                       
                                        <td> <a  href="<?= base_url()?>Laporanpdf/make_pdf2/<?= $row->id?>" class="btn btn-primary"><i class="fa fa-trash"></i>Download</a></td>
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
                        $.post('<?php echo base_url(); ?>Admin/pendaftaran', {delete: true, id: id})
                            .done(function(response) {
                                swal('Foto berhasil dihapus', {
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