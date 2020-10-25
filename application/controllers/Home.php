<?php

class Home extends MY_Controller
{
    var $API ="";
	public function __construct()
	{
		parent::__construct();
       // $this->API="https://api.kawalcorona.com/indonesia";
        $this->load->library('session');
        $this->module = 'home';

	}

	public function index()
	{
        $this->data['title']  = 'Beranda';
        $this->data['content']   = 'beranda';
        $this->template($this->data, $this->module);
    }

    public function Images()
	{
        $this->load->model('M_PhotoAndroid');
        $this->data['photo'] = M_PhotoAndroid::OrderBy('created_at','DESC')->get(); 
        $this->data['title']  = 'Galeri';
        $this->data['content']   = 'galeri';
        $this->template($this->data, $this->module);
    }

    
   /* public function data(){
        $this->data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/provinsi'),true);
        if(isset($this->data['datakontak'])){
        $this->data['length'] = count($this->data['datakontak']);
        //$this->data['provinsi'] = $this->data['datakontak'][14];
        for($i=0;$i<$this->data['length'];$i++){
             foreach ($this->data['datakontak'][$i] as $key => $p[$i]) {
                 if($p[$i]['Provinsi'] == "Sumatera Selatan"){
                     $this->data['provinsi']= $p[$i];
                 }

             }
         }
        }
         $this->data['datanasional'] = json_decode($this->curl->simple_get($this->API),true);
         if(isset($this->data['datanasional'])){
         $this->data['datanasional']= $this->data['datanasional'][0];
         }

        $this->data['title'] 	= 'Data Covid - Satgas UNSRI';
        $this->data['content'] 	= 'data';
        $this->template($this->data, $this->module);
    }*/

    public function donasi(){
        $this->load->model('M_Donate');


        $this->data['donasi'] = M_Donate::get();
        $this->data['title']  = 'Donasi';
        $this->data['content']   = 'donasi';
        $this->template($this->data, $this->module);
    }

    public function faq(){
        $this->data['title']  = 'FAQ';
        $this->data['content']   = 'faq';
        $this->template($this->data, $this->module);
    }
    public function publikasi_video(){
        $this->data['title']  = 'Publikasi Video';
        $this->data['content']   = 'video';
        $this->template($this->data, $this->module);
    }

    public function Pendaftaran(){
        $this->load->model('M_HPendaftaran');
        if($this->POST('submit')){
            $data = array(
                'nama_siswa' => $this->POST('nama_siswa'),
                'jenis_kelamin' => $this->POST('jenis_kelamin'),
                'tempat_lahir' => $this->POST('tempat_lahir'),
                'tanggal_lahir' => $this->POST('tanggal_lahir'),
                'cabang' => $this->POST('cabang'),
                'jenjang' => $this->POST('jenjang'),
                'nama_ayah' => $this->POST('nama_ayah'),
                'telepon_ayah' => $this->POST('telepon_ayah'),
                'email_ayah' => $this->POST('email_ayah'),
                'pekerjaan_ayah' => $this->POST('pekerjaan_ayah'),
                'pendidikan_ayah' => $this->POST('pendidikan_ayah'),
                'nama_ibu' => $this->POST('nama_ibu'),
                'telepon_ibu' => $this->POST('telepon_ibu'),
                'email_ibu' => $this->POST('email_ibu'),
                'pekerjaan_ibu' => $this->POST('pekerjaan_ibu'),
                'pendidikan_ibu' => $this->POST('pendidikan_ibu'),
                'alamat' => $this->POST('alamat')
            );
            $this->db->insert('pendaftaran', $data);
            $this->flashmsg('Pendaftaran Berhasil dikirim');
        }
        $this->data['regtitle'] = M_HPendaftaran::first();
        $this->data['title']  = 'Pendaftaran';
        $this->data['content']   = 'pendaftaran';
        $this->template($this->data, $this->module);
    }

    public function Tentang(){
        $this->data['title']  = 'Tentang Yayasan Auladi';
        $this->data['content']   = 'tentang';
        $this->template($this->data, $this->module);
    }

    public function Kontak(){
        $this->data['title']  = 'Kontak Yayasan Auladi';
        $this->data['content']   = 'kontak';
        $this->template($this->data, $this->module);
    }
    public function Galeri(){
        $this->load->library('pagination');
        $this->load->model('M_AlbumPhoto');
       
        $config['base_url'] = site_url('Home/Galeri'); //site url
        $config['total_rows'] = $this->db->count_all('photoalbum'); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->order_by('created_at','desc');
        $this->data['album'] = $this->db->get('photoalbum',$config["per_page"],$this->data['page'])->result_array();
        $this->data['pagination'] = $this->pagination->create_links();
        $this->data['title']  = 'Galeri Foto & Video';
        $this->data['content']   = 'galeri';
        $this->template($this->data, $this->module);
    }
    public function Detail_galeri($id=null){
        $this->load->model('M_Photo');
        $this->load->model('M_Video');
        $this->load->model('M_AlbumPhoto');
        if($id==null){
            redirect('Errors');
        }
        $this->data['albumname'] =  M_AlbumPhoto::select('albumName')->where('id',$id)->first();
    
        if(!($this->data['albumname'])){
            redirect('Errors');
        }
        if($this->data['albumname']==null){
            
            $this->data['photo'] = [];
            $this->data['video']=[];
        }
        
        else{
            
            $this->data['photo'] = M_Photo::where('album',$id)->orderBy('created_at','desc')->get();
        
            $this->data['video'] = M_Video::where('album',$id)->orderBy('created_at','desc')->get();
        }
        
        $this->data['title']  = 'Galeri Foto & Video';
        $this->data['content']   = 'detail_galeri';
        $this->template($this->data, $this->module);
    }
    public function Cabang($id){
        $this->load->model('M_Schools');
        $this->load->model('M_DetailSekolah');
        $this->data['sekolah'] = M_Schools::with('data_sekolah')->where('id',$id)->first();
        
        if($this->data['sekolah']==null){
            redirect('Errors');
        }
        $this->data['detailsekolah'] = M_DetailSekolah::where('id_sekolah',$id)->first();
        //echo $this->data['sekolah'];die();
        $this->data['title']  = $this->data['sekolah']->schoolName;
        $this->data['content']   = 'cabang';
        $this->template($this->data, $this->module);
    }

    public function publikasi_dokumen(){
        $this->load->model('M_Dokumen');
        $this->data['dokumen'] = M_Dokumen::orderBy('created_at', 'DESC')->get();
        $this->data['title']  = 'Publikasi Dokumen';
        $this->data['content']   = 'dokumen';
        $this->template($this->data, $this->module);
    }

    public function publikasi_infografik(){
        $this->load->model('M_Infografik');
        $this->data['infografik'] = M_Infografik::orderBy('created_at', 'DESC')->get();

        $this->data['title']  = 'Publikasi Infografik';
        $this->data['content']   = 'infografik';
        $this->template($this->data, $this->module);
    }

  
    public function Dokumentasi(){
        $this->load->model('M_Dokumentasi');
        $this->data['dokumentasi'] = M_Dokumentasi::join('pokja', 'dokumentasi.id_pokja', '=', 'pokja.id')->orderBy('created_at', 'DESC')->get();

        $this->data['title']  = 'Dokumentasi';
        $this->data['content']   = 'dokumentasi';
        $this->template($this->data, $this->module);
    }/*
    public function Dokumentasi_video(){
        $this->load->model('M_DokumentasiVideo');
        $this->data['dokumentasi'] = M_DokumentasiVideo::join('pokja', 'dokumentasivideo.id_pokja', '=', 'pokja.id')->orderBy('created_at', 'DESC')->get();

        $this->data['title']  = 'Dokumentasi';
        $this->data['content']   = 'dokumentasivideo';
        $this->template($this->data, $this->module);
    }*/
    public function AboutUs(){
        $this->data['title']  = 'Tentang Kami';
        $this->data['content']   = 'aboutus';
        $this->template($this->data, $this->module);
    }
    public function tentangkami(){
        $this->data['title']  = 'Tentang Kami';
        $this->data['content']   = 'tentangkami';
        $this->template($this->data, $this->module);
    }
    public function error(){
        $this->data['title']  = 'Page Not Found';
        $this->data['content']   = 'error';
        $this->template($this->data, $this->module);
    }
    public function cariBerita(){
        
        $this->load->model('M_Berita');
       if($this->POST('search')==''){
           redirect('Home/Berita');
       }
        $this->data['berita'] = M_Berita::where('isiBerita','like','%'.$this->POST('search').'%')->orderBy('created_at', 'DESC')->get();
        if(count($this->data['berita']) <= 0 ){
           $this->data['berita'] = [];
          $this->data['pagination'] = '';
        }
        $this->data['title']  = 'Berita';
        $this->data['content']   = 'berita';
        $this->template($this->data, $this->module);
    }
    public function berita(){
        $this->load->model('M_Berita');
        $this->load->library('pagination');
        $config['base_url'] = site_url('Home/berita'); //site url
        $config['total_rows'] = $this->db->count_all('berita'); //total row
        $config['per_page'] = 9;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->order_by('created_at','desc');
        $this->data['berita'] = $this->db->get('berita',$config["per_page"],$this->data['page'])->result_array();
        $this->data['pagination'] = $this->pagination->create_links();


        //$this->data['berita'] = M_Berita::orderBy('created_at', 'DESC')->get();
        $this->data['title']  = 'Berita';
        $this->data['content']   = 'berita';
        $this->template($this->data, $this->module);
    }
   

    public function detailberita($slug="null"){
        $this->load->model('M_Berita');
        $slug = str_replace("_","-",$slug);
        
        $this->data['berita'] = M_Berita::where('slugJudul',$slug)->first();
        
        if($this->data['berita']==null){
            redirect('Errors');
        }
       
        $this->data['idberitaini'] = $slug;
        
        $this->data['beritalain'] = M_Berita::where('slugJudul','!=',$slug)->Orderby('id','desc')->limit(5)->get();
        $this->data['title']  = $this->data['berita']->judulBerita;
        $this->data['content']   = 'detailberita';
        $this->template($this->data, $this->module);
    }
    public function dataalumni(){
        $this->data['title']  = 'Data Alumni';
        $this->data['content']   = 'dataalumni';
        $this->template($this->data, $this->module);
    }
    public function detailberita_($id_berita = null){
        if($id_berita == null){
            redirect('Home/berita');
        }
        $this->load->model('M_Berita');
        $this->data['Berita'] = M_Berita::where('id_berita',$id_berita)->get();
        $this->data['title']  = 'Detail Berita';
        $this->data['content']   = 'detailberita';
        $this->template($this->data, $this->module);
    }
    public function tentangcovid(){
        $this->data['title']  = 'Tentang Covid';
        $this->data['content']   = 'tentangcovid';
        $this->template($this->data, $this->module);
    }

    public function pengumuman(){
        $this->load->model('M_Pengumuman');
        $this->load->library('pagination');
        $config['base_url'] = site_url('Home/pengumuman'); //site url
        $config['total_rows'] = $this->db->count_all('pengumuman'); //total row
        $config['per_page'] = 7;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->db->order_by('created_at','desc');
        $this->data['pengumuman'] = $this->db->get('pengumuman',$config["per_page"],$this->data['page'])->result_array();
        $this->data['pagination'] = $this->pagination->create_links();


        //$this->data['berita'] = M_Berita::orderBy('created_at', 'DESC')->get();
        $this->data['title']  = 'Pengumuman';
        $this->data['content']   = 'pengumuman';
        $this->template($this->data, $this->module);
    }
   

}
