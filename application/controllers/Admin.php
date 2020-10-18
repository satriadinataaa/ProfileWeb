<?php  

class Admin extends MY_Controller
{
    public function __construct()
    {
      parent::__construct();
      
      $this->data['name'] = $this->session->userdata('name');
      $this->module = 'admin';
      if($this->session->userdata('role') != '1'){
        redirect('Auth/login');
      }
    }
    public function index(){
     
        $this->load->model('M_Carousel');

        if ($this->POST('delete')) {
          $foto = M_Carousel::where('id','=',$this->POST('id'))->first();
          
          M_Carousel::where('id', '=', $this->POST('id'))->delete();
                echo json_encode('berhasil');
                unlink('uploads/carousel/'.$foto->carousel);
                redirect('Admin/','refresh');
                exit;
         }
        if($this->POST('submit')){
      
          M_Carousel::getConnectionResolver()->connection()->beginTransaction();
          
          try{
            $config['upload_path']          = './uploads/carousel/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['encrypt_name']         = true;
            
            $this->load->library('upload', $config);
            $this->load->library('image_lib');
            if ( ! $this->upload->do_upload('berkas')){
              $this->flashmsg('Gambar gagal diupload');
              redirect('Admin/');
            }else{
              
              $this->image_lib->initialize(array(
                'image_library' => 'gd2', //library yang kita gunakan
                'source_image' => './uploads/carousel/'. $this->upload->data('file_name'),
                'maintain_ratio' => FALSE,
                'width' => 1180,
                'height' => 590
            ));
            $this->image_lib->resize();
              $data = array('upload_data' => $this->upload->data());
              $Berkas			    	      =new M_Carousel();
              $Berkas->carousel	      =  $this->upload->data('file_name');
              
              $Berkas->save();
                 M_Carousel::getConnectionResolver()->connection()->commit();
                 $this->flashmsg('Carousel Berhasil di upload');
                 redirect('Admin/');
            }
  
           
            }
          catch (Exception $e){
            M_Carousel::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
       }
        $this->data['carousel'] = M_Carousel::orderBy('created_at','desc')->get();
        $this->data['title'] 	= 'admin-Carousel';
        $this->data['content'] 	= 'carousel';
        $this->template($this->data, $this->module);
     }

     public function Whatsapp(){
      $this->load->model('M_Whatsapp');
      if ($this->POST('submit'))
     {
         M_Whatsapp::getConnectionResolver()->connection()->beginTransaction();
         try{
               $User 			    	      = M_Whatsapp::find(1);
               $User->nomor_wa	      = '62'.$this->POST('nomor');
               
               $User->save();
               M_Whatsapp::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Nomor WA Berhasil Diperbarui');
               redirect('Admin/Whatsapp');
             
         }
         catch (Exception $e){
             M_Whatsapp::getConnectionResolver()->connection()->rollback();
             $this->flashmsg($e->getMessage(), 'danger');
             $this->go_back(-1);
         }      
     }
      $this->data['wa'] = M_Whatsapp::first();
      $this->data['title']  = 'Nomor Whatsapp';
      $this->data['content']   = 'whatsapp';
      $this->template($this->data, $this->module);
      }

      public function changePassword(){
        $this->load->model('M_Users');
        if ($this->POST('submit'))
       {
           M_Users::getConnectionResolver()->connection()->beginTransaction();
           try{
                 $User 			    	      = M_Users::find($this->session->userdata('account_id'));
                 $User->password	      = md5($this->POST('password'));
                 
                 $User->save();
                 M_Users::getConnectionResolver()->connection()->commit();
                 $this->flashmsg('Password Berhasil Diperbarui');
                 redirect('Admin/changePassword');
               
           }
           catch (Exception $e){
               M_Users::getConnectionResolver()->connection()->rollback();
               $this->flashmsg($e->getMessage(), 'danger');
               $this->go_back(-1);
           }      
       }
        
        $this->data['title']  = 'Ubah Password';
        $this->data['content']   = 'password';
        $this->template($this->data, $this->module);
        }

     public function KataMutiara(){
     
      $this->load->model('M_KataMutiara');
      if ($this->POST('delete')) {
        $foto = M_KataMutiara::where('id','=',$this->POST('id'))->first();

        M_KataMutiara::where('id', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              unlink('uploads/katamutiara/'.$foto->katamutiara);
              redirect('Admin/KataMutiara','refresh');
              exit;
       }
      if($this->POST('submit')){
    
        M_KataMutiara::getConnectionResolver()->connection()->beginTransaction();
        try{
          $config['upload_path']          = './uploads/katamutiara/';
          $config['allowed_types']        = 'jpeg|jpg|png';
          $config['encrypt_name']         = true;
      
          $this->load->library('upload', $config);
      
          if ( ! $this->upload->do_upload('berkas')){
            $this->flashmsg('Gambar gagal diupload');
            redirect('Admin/KataMutiara');
          }else{
            $data = array('upload_data' => $this->upload->data());
            $Berkas			    	      =new M_KataMutiara();
            $Berkas->katamutiara	      =  $this->upload->data('file_name');
            
            $Berkas->save();
               M_KataMutiara::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Kata Mutiara Berhasi di upload');
               redirect('Admin/KataMutiara');
          }

         
          }
        catch (Exception $e){
          M_KataMutiara::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
     }
      $this->data['katamutiara'] = M_KataMutiara::orderBy('created_at','desc')->get();
      $this->data['title'] 	= 'admin-Kata Mutiara';
      $this->data['content'] 	= 'katamutiara';
      $this->template($this->data, $this->module);
   }


     public function createAdmin(){
      $this->load->model('M_Users');
      $this->load->model('M_Schools');
      if ($this->POST('delete')) {
       M_Users::where('id', '=', $this->POST('id_user'))->delete();
             echo json_encode('berhasil');
             redirect('Admin/createAdmin','refresh');
             exit;
      }
      
     if ($this->POST('edit'))
     {
         M_Users::getConnectionResolver()->connection()->beginTransaction();
         try{
              
               $User 			    	      = M_Users::find($this->POST('id_user'));
               $User->username	      = $this->POST('username');
               $User->password 		    = md5($this->POST('password'));
               $User->name            = $this->POST('name');
               $User->save();
               M_Users::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Akun Admin berhasil diperbarui');
               redirect('Admin/createAdmin');
             
         }
         catch (Exception $e){
             M_Users::getConnectionResolver()->connection()->rollback();
             $this->flashmsg($e->getMessage(), 'danger');
             $this->go_back(-1);
         }      
     }
     
      if($this->POST('submit')){
      
         M_Users::getConnectionResolver()->connection()->beginTransaction();
         try{
          $User 			    	      =new M_Users();
          $User->username	      = $this->POST('username');
          $User->password 		    = md5($this->POST('password'));
          $User->name            = $this->POST('name');
          $User->role            = 2;
          $User->school          = $this->POST('school');
          $User->save();
             M_Users::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Admin Berhasil Dibuat');
             redirect('Admin/createAdmin');
           }
         catch (Exception $e){
           M_Users::getConnectionResolver()->connection()->rollback();
           $this->flashmsg($e->getMessage(), 'danger');
           $this->go_back(-1);
       }      
      }
        $this->data['user'] = M_Users::with('schools')->where('role','2')->get();
        
        $this->data['school'] = M_Schools::get();
        $this->data['title'] 	= 'admin- Create Admin';
        $this->data['content'] 	= 'createadmin';
        $this->template($this->data, $this->module);

     }
    public function infografik(){
      $this->load->model('M_Infografik');
      if ($this->POST('delete')) {
        M_Infografik::where('id', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              redirect('Admin/infografik','refresh');
              exit;
       }
       if($this->POST('submit')){
      
        M_Infografik::getConnectionResolver()->connection()->beginTransaction();
        try{
          $config['upload_path']          = './assets/infografis/';
          $config['allowed_types']        = 'jpeg|jpg|png';
          $config['encrypt_name']         = true;
      
          $this->load->library('upload', $config);
      
          if ( ! $this->upload->do_upload('berkas')){
            $this->flashmsg('Gambar gagal diupload');
            redirect('Admin/infografik');
          }else{
            $data = array('upload_data' => $this->upload->data());
            $Berkas			    	      =new M_Infografik();
            $Berkas->nama_file	      =  $this->upload->data('file_name');
            
            $Berkas->save();
               M_Infografik::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Infografik Berhasi di upload');
               redirect('Admin/infografik');
          }

         
          }
        catch (Exception $e){
          M_Infografik::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
     }
       $this->data['infografik'] = M_Infografik::get();
  
       $this->data['title'] 	= 'admin-Infografik';
       $this->data['content'] 	= 'infografik';
       $this->template($this->data, $this->module);

    }

    public function dokumen(){
      $this->load->model('M_Dokumen');
      if ($this->POST('delete')) {
        M_Dokumen::where('id', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              redirect('Admin/dokumen','refresh');
              exit;
       }
       if($this->POST('submit')){
      
        M_Dokumen::getConnectionResolver()->connection()->beginTransaction();
        try{
          $config['upload_path']          = './assets/dokumen/';
          $config['allowed_types']        = 'pdf';
          
      
          $this->load->library('upload', $config);
      
          if ( ! $this->upload->do_upload('berkas')){
            $this->flashmsg('Dokumen gagal diupload');
            redirect('Admin/dokumen');
          }else{
            $data = array('upload_data' => $this->upload->data());
            $Berkas			    	      =new M_Dokumen();
            $Berkas->nama_file	      =  $this->upload->data('file_name');
            
            $Berkas->save();
               M_Dokumen::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Dokumen Berhasi di upload');
               redirect('Admin/dokumen');
          }

         
          }
        catch (Exception $e){
          M_Dokumen::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
     }
       $this->data['dokumen'] = M_Dokumen::orderBy('created_at', 'DESC')->get();
  
       $this->data['title'] 	= 'admin-Dokumen';
       $this->data['content'] 	= 'dokumen';
       $this->template($this->data, $this->module);

    }
    public function Dokumentasi(){
      $this->load->model('M_Dokumentasi');
      $this->load->model('M_Pokja');
      if ($this->POST('delete')) {
        M_Dokumentasi::where('id_dokumentasi', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              redirect('Admin/Dokumentasi','refresh');
              exit;
       }
       if($this->POST('submit')){
      
        M_Dokumentasi::getConnectionResolver()->connection()->beginTransaction();
        try{
          $config['upload_path']          = './assets/dokumentasi/';
          $config['allowed_types']        = 'jpeg|jpg|png';
          $config['encrypt_name']         = true;
          $this->load->library('upload', $config);
      
          if ( ! $this->upload->do_upload('berkas')){
            $this->flashmsg('Gambar gagal diupload');
            redirect('Admin/Dokumentasi');
          }else{
            $data = array('upload_data' => $this->upload->data());
            $Berkas			    	        =new M_Dokumentasi();
            $Berkas->nama_kegiatan    =$this->POST('name');
            $Berkas->nama_file	      =  $this->upload->data('file_name');
            $Berkas->id_pokja            = $this->POST('pokja');
            $Berkas->save();
               M_Dokumentasi::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Dokumentasi Berhasi di upload');
               redirect('Admin/Dokumentasi');
          }

         
          }
        catch (Exception $e){
          M_Dokumentasi::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
     }
       $this->data['dokumentasi'] = M_Dokumentasi::join('pokja', 'dokumentasi.id_pokja', '=', 'pokja.id')->get();
      
       $this->data['pokja'] = M_Pokja::get();
       $this->data['title'] 	= 'admin-Dokumentasi';
       $this->data['content'] 	= 'dokumentasi';
       $this->template($this->data, $this->module);

    }
    public function DokumentasiVideo(){
      $this->load->model('M_DokumentasiVideo');
      $this->load->model('M_Pokja');
      if ($this->POST('delete')) {
        M_DokumentasiVideo::where('id_dokumentasi', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              redirect('Admin/DokumentasiVideo','refresh');
              exit;
       }
       if($this->POST('submit')){
      
        M_DokumentasiVideo::getConnectionResolver()->connection()->beginTransaction();
        try{
          $config['upload_path']          = './assets/dokumentasivideo/';
          $config['allowed_types']        = 'mp4';
          $config['encrypt_name']         = true;
          $this->load->library('upload', $config);
      
          if ( ! $this->upload->do_upload('berkas')){
            $this->flashmsg('Gambar gagal diupload');
            redirect('Admin/DokumentasiVideo');
          }else{
            $data = array('upload_data' => $this->upload->data());
            $Berkas			    	        =new M_DokumentasiVideo();
            $Berkas->nama_kegiatan    =$this->POST('name');
            $Berkas->nama_file	      =  $this->upload->data('file_name');
            $Berkas->id_pokja            = $this->POST('pokja');
            $Berkas->save();
               M_DokumentasiVideo::getConnectionResolver()->connection()->commit();
               $this->flashmsg('Dokumentasi Berhasi di upload');
               redirect('Admin/DokumentasiVideo');
          }

         
          }
        catch (Exception $e){
          M_DokumentasiVideo::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
     }
       $this->data['dokumentasi'] = M_DokumentasiVideo::join('pokja', 'dokumentasivideo.id_pokja', '=', 'pokja.id')->get();
      
       $this->data['pokja'] = M_Pokja::get();
       $this->data['title'] 	= 'admin-Dokumentasi';
       $this->data['content'] 	= 'dokumentasi_video';
       $this->template($this->data, $this->module);

    }
    public function TulisanBerjalan(){
      $this->load->model('M_Marquee');
      if($this->POST('submit')){
        M_Marquee::getConnectionResolver()->connection()->beginTransaction();
        try{
              $Marquee 			    	      = M_Marquee::find(1);
              $Marquee->marquee	        = $this->POST('marquee');
              $Marquee->save();
              M_Marquee::getConnectionResolver()->connection()->commit();
              $this->flashmsg('Tulisan Berjalan berhasil diperbarui');
              redirect('Admin/TulisanBerjalan');
            
        }
        catch (Exception $e){
            M_Marquee::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
      }
   
      $this->data['marquee'] = M_Marquee::first();
      
      $this->data['title']  = 'Edit Tulisan Berjalan';
      $this->data['content']   = 'marquee';
      $this->template($this->data, $this->module);
  }

  public function HeaderPendaftaran(){
    $this->load->model('M_HPendaftaran');
    if($this->POST('submit')){
      M_HPendaftaran::getConnectionResolver()->connection()->beginTransaction();
      try{
            $Marquee 			    	      = M_HPendaftaran::find(1);
            $Marquee->judulpendaftaran	        = $this->POST('header');
            $Marquee->save();
            M_HPendaftaran::getConnectionResolver()->connection()->commit();
            $this->flashmsg('Header Pendaftaran berhasil diperbarui');
            redirect('Admin/HeaderPendaftaran');
          
      }
      catch (Exception $e){
           M_HPendaftaran::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
    }
    
    $this->data['marquee'] = M_HPendaftaran::first();
    
    $this->data['title']  = 'Edit Header Pendaftaran';
    $this->data['content']   = 'headerpendaftaran';
    $this->template($this->data, $this->module);
  }

  public function photoAlbum(){
    $this->load->model('M_AlbumPhoto');
    
    if ($this->POST('delete')) {
      $foto = M_AlbumPhoto::where('id', '=', $this->POST('id'))->first();
      M_AlbumPhoto::where('id', '=', $this->POST('id'))->delete();
            echo json_encode('berhasil');
            unlink('uploads/coveralbum/'.$foto->coverPhoto);
            redirect('Admin/photoAlbum','refresh');
            exit;
     }

     if($this->POST('edit')){
    
      M_AlbumPhoto::getConnectionResolver()->connection()->beginTransaction();
      try{
        $config['upload_path']          = './uploads/coveralbum/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
    
        if ( ! $this->upload->do_upload('berkas')){
          $this->flashmsg('Cover Album gagal diupload');
          redirect('Admin/photoAlbum');
        }else{
          $data = array('upload_data' => $this->upload->data());
          $Berkas			    	        =M_AlbumPhoto::find($this->POST('id'));
          $Berkas->albumName    =  $this->POST('name');
          $Berkas->coverPhoto	      =  $this->upload->data('file_name');
          
          $Berkas->save();
          M_AlbumPhoto::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Album Photo Berhasil Diperbarui');
             redirect('Admin/photoAlbum');
        }

       
        }
      catch (Exception $e){
        M_AlbumPhoto::getConnectionResolver()->connection()->rollback();
        $this->flashmsg($e->getMessage(), 'danger');
        $this->go_back(-1);
    }      
   }

     if($this->POST('submit')){
    
      M_AlbumPhoto::getConnectionResolver()->connection()->beginTransaction();
      try{
        $config['upload_path']          = './uploads/coveralbum/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
    
        if ( ! $this->upload->do_upload('berkas')){
          $this->flashmsg('Cover Album gagal diupload');
          redirect('Admin/photoAlbum');
        }else{
          $data = array('upload_data' => $this->upload->data());
          $Berkas			    	        =new M_AlbumPhoto();
          $Berkas->albumName        =  $this->POST('name');
          $Berkas->coverPhoto	      =  $this->upload->data('file_name');
          
          $Berkas->save();
          M_AlbumPhoto::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Album Photo Berhasil Dibuat');
             redirect('Admin/photoAlbum');
        }

       
        }
      catch (Exception $e){
        M_AlbumPhoto::getConnectionResolver()->connection()->rollback();
        $this->flashmsg($e->getMessage(), 'danger');
        $this->go_back(-1);
    }      
   }
     $this->data['album'] = M_AlbumPhoto::orderBy('created_at','desc')->get();
    
     $this->data['title'] 	= 'admin-Album Photo';
     $this->data['content'] 	= 'albumphoto';
     $this->template($this->data, $this->module);

  }

  public function photo(){
      $this->load->model('M_AlbumPhoto');
      $this->load->model('M_Photo');

      $config['upload_path']          = './uploads/galerifoto/';
      $config['allowed_types']        = 'jpeg|jpg|png';
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
      if ($this->POST('delete')) {
        $foto = M_Photo::where('id', '=', $this->POST('id'))->first();
        M_Photo::where('id', '=', $this->POST('id'))->delete();

              echo json_encode('berhasil');
              unlink("./uploads/galerifoto/".$foto->photo);
              redirect('Admin/photo','refresh');
              exit;
       }
      if($this->POST('submit')){
        $jumlah_berkas = count($_FILES['berkas']['name']);
        
          for($i = 0; $i < $jumlah_berkas;$i++)
          {
            if(!empty($_FILES['berkas']['name'][$i])){
      
                $_FILES['file']['name'] = $_FILES['berkas']['name'][$i];
                $_FILES['file']['type'] = $_FILES['berkas']['type'][$i];
                $_FILES['file']['tmp_name'] = $_FILES['berkas']['tmp_name'][$i];
                $_FILES['file']['error'] = $_FILES['berkas']['error'][$i];
                $_FILES['file']['size'] = $_FILES['berkas']['size'][$i];
            
                if($this->upload->do_upload('file')){
                  
                  $uploadData = $this->upload->data();
                  M_Photo::getConnectionResolver()->connection()->beginTransaction();
                  $Berkas			    	        =new M_Photo();
                  $Berkas->album        =  $this->POST('album');
                  $Berkas->photo 	      =  $uploadData['file_name'];;
                  $Berkas->save();
                  M_Photo::getConnectionResolver()->connection()->commit();
                  $this->flashmsg('Album Photo Berhasil Dibuat');
                 
                }
                else{
                  $this->flashmsg('Foto gagal diupload');
                  
                }
            }
      }
      redirect('Admin/photo');
    }
     
      $this->data['album'] = M_AlbumPhoto::get();
      $this->data['photo'] = M_Photo::with('albumPhoto')->orderBy('created_at','desc')->get();
    
      $this->data['title']  = 'Photo';
      $this->data['content']   = 'photo';
      $this->template($this->data, $this->module);
  }
  
    public function video(){
      $this->load->model('M_AlbumPhoto');
      $this->load->model('M_Video');

      if ($this->POST('delete')) {
        M_Video::where('id', '=', $this->POST('id'))->delete();
              echo json_encode('berhasil');
              redirect('Admin/photo','refresh');
              exit;
      }
      if($this->POST('submit')){
        M_Video::getConnectionResolver()->connection()->beginTransaction();
        try{
              $string = $this->POST('video');
              $Vid 			    	         = new M_Video();
              $Vid->album	             = $this->POST('album');
              $Vid->youtubeID          = "https://www.youtube.com/embed/".$string;
              $Vid->save();
              M_Video::getConnectionResolver()->connection()->commit();
              $this->flashmsg('Video berhasil diperbarui');
              redirect('Admin/video');
            
        }
        catch (Exception $e){
            M_Video::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
        
      }
    
      $this->data['album'] = M_AlbumPhoto::get();
      $this->data['Video'] = M_Video::with('albumPhoto')->orderBy('created_at','desc')->get();
      //echo $this->data['Video'];die();
      $this->data['title']  = 'Video';
      $this->data['content']   = 'video';
      $this->template($this->data, $this->module);
  }

  public function seo_friendly_url($string){
    $string = str_replace(array('[\', \']'), '', $string);
    $string = preg_replace('/\[.*\]/U', '', $string);
    $string = preg_replace('/&(amp;)?#?[a-z0-9]+;/i', '-', $string);
    $string = htmlentities($string, ENT_COMPAT, 'utf-8');
    $string = preg_replace('/&([a-z])(acute|uml|circ|grave|ring|cedil|slash|tilde|caron|lig|quot|rsquo);/i', '\\1', $string );
    $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string);
    return strtolower(trim($string, '-'));
  }

  public function Berita(){
    $this->load->model('M_Berita');
    if ($this->POST('delete')) {
      M_Berita::where('id', '=', $this->POST('id'))->delete();
            echo json_encode('berhasil');
            redirect('Admin/Berita','refresh');
            exit;
     }
    if($this->POST('submit')){
      
      M_Berita::getConnectionResolver()->connection()->beginTransaction();
      $satuan = false;
      $loop = 0;
      $slug= $this->seo_friendly_url($this->POST('judul'));
      
      try{
        $config['upload_path']          = './assets/berita_foto/';
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        
         
        
        if ( ! $this->upload->do_upload('berkas')){
          $this->flashmsg('Gambar gagal diupload');
          redirect('Admin/Berita');
        }else{
          $data = array('upload_data' => $this->upload->data());
          $Berkas			    	        =new M_Berita();
          $Berkas->judulBerita            =$this->POST('judul');
          $Berkas->foto             =  $this->upload->data('file_name');
          $Berkas->slugJudul        = $slug;
          $Berkas->isiBerita       = $this->POST('berita_isi');
          $Berkas->save();
            
             M_Berita::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Berita Berhasi di upload');
             redirect('Admin/Berita');
        }

       
        }
      catch (Exception $e){
         M_Berita::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
       
    }
         
    }
  
    $this->data['berita'] = M_Berita::orderBy('created_at','desc')->get();
    $this->data['title']  = 'Berita';
    $this->data['content']   = 'berita';
    $this->template($this->data, $this->module);
}

  public function pendaftaran(){
    $this->load->model('M_Pendaftaran');
    if ($this->POST('delete')) {
      M_Pendaftaran::where('id', '=', $this->POST('id'))->delete();
            echo json_encode('berhasil');
            redirect('Admin/pendaftaran','refresh');
            exit;
     }
    $this->data['pendaftaran'] = M_Pendaftaran::orderBy('created_at','desc')->get();
    $this->data['title']  = 'Pendaftaran';
    $this->data['content']   = 'pendaftaran';
    $this->template($this->data, $this->module);
  }


  public function Pengumuman(){
    $this->load->model('M_Pengumuman');
    if ($this->POST('delete')) {
      $data = M_Pengumuman::where('id_pengumuman','=',$this->POST('id_pengumuman'))->first();
      M_Pengumuman::where('id_pengumuman', '=', $this->POST('id_pengumuman'))->delete();
      unlink("./assets/pengumuman/".$data->file_pengumuman);

            echo json_encode('berhasil');

            redirect('Admin/Pengumuman','refresh');
            exit;
     }
    if($this->POST('submit')){
      
      M_Pengumuman::getConnectionResolver()->connection()->beginTransaction();
     
      try{
        $config['upload_path']          = './assets/pengumuman/';
        $config['allowed_types']        = 'jpeg|jpg|png|pdf|doc|docx|xlsx';
        $config['encrypt_name']         = true;
        $this->load->library('upload', $config);
        
         
        
        if ( ! $this->upload->do_upload('berkas')){
          $this->flashmsg('Gambar gagal diupload');
          redirect('Admin/Pengumuman');
        }else{
          $data = array('upload_data' => $this->upload->data());
          $Pengumuman			    	          =new M_Pengumuman();
          $Pengumuman->nama_pengumuman    =$this->POST('name');
          $Pengumuman->keterangan         =$this->POST('keterangan');
          $Pengumuman->file_pengumuman    =  $this->upload->data('file_name');
          $Pengumuman->save();
          M_Pengumuman::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Pengumuman Berhasil di upload');
             redirect('Admin/Pengumuman');
        }

       
        }
      catch (Exception $e){
        M_Pengumuman::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
       
      }
      }    
    
  
    $this->data['pengumuman'] = M_Pengumuman::orderBy('created_at','desc')->get();
    $this->data['title']  = 'Pengumuman';
    $this->data['content']   = 'pengumuman';
    $this->template($this->data, $this->module);
}
}