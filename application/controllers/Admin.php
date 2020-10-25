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
     
      $this->load->model('M_Users');
     
      if ($this->POST('delete')) {
       M_Users::where('id', '=', $this->POST('id_user'))->delete();
             echo json_encode('berhasil');
             redirect('Admin','refresh');
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
          $User->role            = 1;
          
          $User->save();
             M_Users::getConnectionResolver()->connection()->commit();
             $this->flashmsg('Admin Berhasil Dibuat');
             redirect('Admin/');
           }
         catch (Exception $e){
           M_Users::getConnectionResolver()->connection()->rollback();
           $this->flashmsg($e->getMessage(), 'danger');
           $this->go_back(-1);
       }      
      }
        $this->data['user'] = M_Users::get();       
        $this->data['title'] 	= 'admin- Create Admin';
        $this->data['content'] 	= 'createadmin';
        $this->template($this->data, $this->module);
    }

    public function photoAndroid(){
     
      $this->load->model('M_PhotoAndroid');

      $config['upload_path']          = './uploads/photoAndroid/';
      $config['allowed_types']        = 'jpeg|jpg|png';
      $config['encrypt_name']         = true;
      $this->load->library('upload', $config);
      if ($this->POST('delete')) {
          $foto = M_PhotoAndroid::where('id', '=', $this->POST('id'))->first();
          M_PhotoAndroid::where('id', '=', $this->POST('id'))->delete();

                echo json_encode('berhasil');
                unlink("./uploads/photoAndroid/".$foto->photo);
                redirect('Admin/photoAndroid','refresh');
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
                  M_PhotoAndroid::getConnectionResolver()->connection()->beginTransaction();
                  $Berkas			    	        =new M_PhotoAndroid();
                  
                  $Berkas->nama_foto 	      =  $uploadData['file_name'];;
                  $Berkas->save();
                  M_PhotoAndroid::getConnectionResolver()->connection()->commit();
                  $this->flashmsg('Foto Berhasil diupload');
                
                }
                else{
                  $this->flashmsg('Foto gagal diupload');
                  
                }
            }
          }
          redirect('Admin/photoAndroid');
        }
        
        $this->data['photo'] = M_PhotoAndroid::OrderBy('created_at','DESC')->get();      
        $this->data['title']  = 'Photo Android';
        $this->data['content']   = 'photoandroid';
        $this->template($this->data, $this->module);
      }
   
}