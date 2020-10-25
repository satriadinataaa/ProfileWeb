<div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader">
          <ol class="breadcrumb slim-breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeri</li>
          </ol>
          <h6 class="slim-pagetitle">Galeri</h6>
        </div><!-- slim-pageheader -->
        <div class="section-wrapper">
          <label class="section-title"><h2>Android UI Design</h2></label>
            <div class="row ">
            <?php foreach ($photo as $i => $row): ?>
              <div class="col-sm-6 col-md-4 mt-5 text-center bd">
                <img src="<?= base_url()?>uploads/photoAndroid/<?= $row->nama_foto?>" class="img-fluid" alt="">
              </div><!-- col -->
              <?php endforeach; ?> 
            </div>
           
        </div><!-- section-wrapper -->


        
        

        
      </div><!-- container -->
    </div><!-- slim-mainpanel -->

    
    
       