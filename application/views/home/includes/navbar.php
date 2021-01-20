<div class="slim-header">
      <div class="container">
        <div class="slim-header-left">
          <h2><a href="<?= base_url()?>">Get In Touch With Me</a></h2>

        </div><!-- slim-header-left -->
        <div class="slim-header-right">
         
	<!--	<div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
          </div><!-- search-box -->
          
          
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->
    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item 
          <?php if($content === 'beranda'){
            echo "active";
          }?>">
            <a class="nav-link" href="<?= base_url()?>">
              <i class="icon ion-ios-home-outline"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="nav-item <?php if($content === 'galeri'){
            echo "active";
          }?>">
            <a class="nav-link" href="<?= base_url()?>Home/Images">
              <i class="icon ion-ios-filing-outline"></i>
              <span>Images</span>
            </a>
            
          </li>
         
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

   