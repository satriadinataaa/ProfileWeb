
    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> 
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">AdminCabang <br> <?= $sekolah ?></strong>
                             </span> 
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li class="<?php if($content == 'data_sekolah'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/"><i class="fa fa-laptop"></i> <span class="nav-label">Edit Data Sekolah</span></a>
                </li>
                <li class="<?php if($content == 'kurikulum'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Kurikulum"><i class="fa fa-pencil"></i> <span class="nav-label">Kurikulum</span></a>
                </li>
                <li class="<?php if($content == 'Pelajaran'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Pelajaran"><i class="fa fa-book"></i> <span class="nav-label">Pelajaran</span></a>
                </li>
                <li class="<?php if($content == 'Kegiatan'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Kegiatan"><i class="fa fa-file-o"></i> <span class="nav-label">Kegiatan</span></a>
                </li>
                              
              
                <li class="<?php if($content == 'Ekstrakurikuler'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Ekstrakurikuler"><i class="fa fa-child"></i> <span class="nav-label">Ekstrakurikuler</span></a>
                </li>
                <li class="<?php if($content == 'Kompetensi'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Kompetensi"><i class="fa fa-rocket"></i> <span class="nav-label">Kompetensi</span></a>
                </li>
                <li class="<?php if($content == 'Pengajar'){echo "active";}?>">
                    <a href="<?php echo base_url(); ?>AdminCabang/Pengajar"><i class="fa fa-user-circle-o"></i> <span class="nav-label">Pengajar</span></a>
                </li>
                <!--<li>
                    <a href="<?php echo base_url(); ?>AdminCabang/createAdminCabang"><i class="fa fa-user"></i> <span class="nav-label">Buat Akun AdminCabang Cabang</span></a>
                </li>-->
                <!-- <li>
                    <a href="<?php echo base_url(); ?>Home/add-vendor"><i class="fa fa-laptop"></i> <span class="nav-label">Kelola PPTK</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Home/add_project"><i class="fa fa-laptop"></i> <span class="nav-label">Tambah Program</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Home/transaksi"><i class="fa fa-laptop"></i> <span class="nav-label">Transaksi</span></a>
                </li>
                <li>
                    <a href="<?php echo base_url(); ?>Home/listprogram"><i class="fa fa-laptop"></i> <span class="nav-label">List Program</span></a>
                </li>
               <li>
                    <a href="<?php echo base_url(); ?>home"><i class="fa fa-table"></i> <span class="nav-label">Data Laporan</span></a>
                    <!-- <a href="<?php echo base_url(); ?>home"><i class="fa fa-table"></i> <span class="nav-label">Data Laporan</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="<?php echo base_url(); ?>home">Bulan ini</a></li>
                        <li><a href="<?php echo base_url(); ?>home/history">Riwayat</a></li>
                    </ul> 
                </li>-->
               
            </ul>

        </div>
    </nav>