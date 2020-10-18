<?php  

class AdminCabang extends MY_Controller
{
    public function __construct()
    {
      parent::__construct();
      $this->load->model('M_Schools');
      $this->data['name'] = $this->session->userdata('name');
      $this->data['school'] = $this->session->userdata('school');
     $this->data['sekolah'] = M_Schools::where('id',$this->data['school'])->first();
     $this->data['sekolah'] = $this->data['sekolah']->schoolName;
     
      $this->module = 'admincabang';
      if($this->session->userdata('role') != '2'){
        redirect('Auth/login');
      }
    }
    public function index(){
     
        $this->load->model('M_DataSekolah');
        if($this->POST('submit')){
          M_DataSekolah::getConnectionResolver()->connection()->beginTransaction();
          try{
                $User 			    	      = M_DataSekolah::where('id_sekolah',$this->data['school']);
                $User->update([
                                'NSS' => $this->POST('NSS'),
                                'alamat' => $this->POST('alamat'),
                                'no_telepon' => $this->POST('telepon'),
                                'email' => $this->POST('email'),
                                ]);
                M_DataSekolah::getConnectionResolver()->connection()->commit();
                $this->flashmsg('Data Sekolah berhasil diperbarui');
                redirect('AdminCabang/');
              
          }
          catch (Exception $e){
              M_DataSekolah::getConnectionResolver()->connection()->rollback();
              $this->flashmsg($e->getMessage(), 'danger');
              $this->go_back(-1);
          }      
        
        }

        if($this->POST('submitfoto')){
      
          M_DataSekolah::getConnectionResolver()->connection()->beginTransaction();
          try{
            $config['upload_path']          = './uploads/fotosekolah/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['encrypt_name']         = true;
        
            $this->load->library('upload', $config);
        
            if ( ! $this->upload->do_upload('berkas')){
              $this->flashmsg('Gambar gagal diupload');
              redirect('AdminCabang/');
            }else{
              $data = array('upload_data' => $this->upload->data());
              $Berkas			    	      = M_DataSekolah::where('id_sekolah',$this->data['school']);
              $Berkas->update(['foto' => $this->upload->data('file_name')]);
                 M_DataSekolah::getConnectionResolver()->connection()->commit();
                 $this->flashmsg('Foto Berhasil Diperbarui');
                 redirect('AdminCabang/');
            }
  
           
            }
          catch (Exception $e){
            M_DataSekolah::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
       }
       
        $this->data['datasekolah'] = M_DataSekolah::where('id_sekolah',$this->data['school'])->first();
        $this->data['title'] 	= 'Admin Cabang-Data Sekolah';
        $this->data['content'] 	= 'data_sekolah';
        $this->template($this->data, $this->module);
     }

     public function Kurikulum(){
     
      $this->load->model('M_DetailSekolah');
      if($this->POST('submit')){
        M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
        try{
              $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
              $User->update([
                              'kurikulum' => $this->POST('tekskurikulum')
                              ]);
              M_DetailSekolah::getConnectionResolver()->connection()->commit();
              $this->flashmsg('Data Kurikulum berhasil diperbarui');
              redirect('AdminCabang/Kurikulum');
            
        }
        catch (Exception $e){
            M_DetailSekolah::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
      
      }  
      $this->data['datasekolah'] = M_DetailSekolah::select('kurikulum')
                                 ->where('id_sekolah',$this->data['school'])->first();
      $this->data['title'] 	= 'Admin Cabang-Kurikulum';
      $this->data['content'] 	= 'kurikulum';
      $this->template($this->data, $this->module);
   }

   public function Pelajaran(){
     
    $this->load->model('M_DetailSekolah');
    if($this->POST('submit')){
      M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
      try{
            $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
            $User->update([
                            'Pelajaran' => $this->POST('teksPelajaran')
                            ]);
            M_DetailSekolah::getConnectionResolver()->connection()->commit();
            $this->flashmsg('Data Pelajaran berhasil diperbarui');
            redirect('AdminCabang/Pelajaran');
          
      }
      catch (Exception $e){
          M_DetailSekolah::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
    
    }  
    $this->data['datasekolah'] = M_DetailSekolah::select('pelajaran')
                               ->where('id_sekolah',$this->data['school'])->first();
    $this->data['title'] 	= 'Admin Cabang-Pelajaran';
    $this->data['content'] 	= 'Pelajaran';
    $this->template($this->data, $this->module);
  }

  public function Kegiatan(){
        
      $this->load->model('M_DetailSekolah');
      if($this->POST('submit')){
        M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
        try{
              $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
              $User->update([
                              'Kegiatan' => $this->POST('teksKegiatan')
                              ]);
              M_DetailSekolah::getConnectionResolver()->connection()->commit();
              $this->flashmsg('Data Kegiatan berhasil diperbarui');
              redirect('AdminCabang/Kegiatan');
            
        }
        catch (Exception $e){
            M_DetailSekolah::getConnectionResolver()->connection()->rollback();
            $this->flashmsg($e->getMessage(), 'danger');
            $this->go_back(-1);
        }      
      
      }  
      $this->data['datasekolah'] = M_DetailSekolah::select('kegiatan')
                                ->where('id_sekolah',$this->data['school'])->first();
      $this->data['title'] 	= 'Admin Cabang-Kegiatan';
      $this->data['content'] 	= 'Kegiatan';
      $this->template($this->data, $this->module);
  }

  public function Ekstrakurikuler(){
     
    $this->load->model('M_DetailSekolah');
    if($this->POST('submit')){
      M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
      try{
            $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
            $User->update([
                            'Ekstrakurikuler' => $this->POST('teksEkstrakurikuler')
                            ]);
            M_DetailSekolah::getConnectionResolver()->connection()->commit();
            $this->flashmsg('Data Ekstrakurikuler berhasil diperbarui');
            redirect('AdminCabang/Ekstrakurikuler');
          
      }
      catch (Exception $e){
          M_DetailSekolah::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
    
    }  
    $this->data['datasekolah'] = M_DetailSekolah::select('ekstrakurikuler')
                               ->where('id_sekolah',$this->data['school'])->first();
    $this->data['title'] 	= 'Admin Cabang-Ekstrakurikuler';
    $this->data['content'] 	= 'Ekstrakurikuler';
    $this->template($this->data, $this->module);
 }

  public function Kompetensi(){
      
    $this->load->model('M_DetailSekolah');
    if($this->POST('submit')){
      M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
      try{
            $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
            $User->update([
                            'Kompetensi' => $this->POST('teksKompetensi')
                            ]);
            M_DetailSekolah::getConnectionResolver()->connection()->commit();
            $this->flashmsg('Data Kompetensi berhasil diperbarui');
            redirect('AdminCabang/Kompetensi');
          
      }
      catch (Exception $e){
          M_DetailSekolah::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
    
    }  
    $this->data['datasekolah'] = M_DetailSekolah::select('kompetensi')
                              ->where('id_sekolah',$this->data['school'])->first();
    $this->data['title'] 	= 'Admin Cabang-Kompetensi';
    $this->data['content'] 	= 'Kompetensi';
    $this->template($this->data, $this->module);
  }

  public function Pengajar(){
     
    $this->load->model('M_DetailSekolah');
    if($this->POST('submit')){
      M_DetailSekolah::getConnectionResolver()->connection()->beginTransaction();
      try{
            $User 			    	      = M_DetailSekolah::where('id_sekolah',$this->data['school']);
            $User->update([
                            'Pengajar' => $this->POST('teksPengajar')
                            ]);
            M_DetailSekolah::getConnectionResolver()->connection()->commit();
            $this->flashmsg('Data Pengajar berhasil diperbarui');
            redirect('AdminCabang/Pengajar');
          
      }
      catch (Exception $e){
          M_DetailSekolah::getConnectionResolver()->connection()->rollback();
          $this->flashmsg($e->getMessage(), 'danger');
          $this->go_back(-1);
      }      
    
    }  
    $this->data['datasekolah'] = M_DetailSekolah::select('pengajar')
                               ->where('id_sekolah',$this->data['school'])->first();
    $this->data['title'] 	= 'Admin Cabang-Pengajar';
    $this->data['content'] 	= 'Pengajar';
    $this->template($this->data, $this->module);
 }

}