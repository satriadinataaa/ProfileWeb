<?php 
if(!defined('BASEPATH'))
exit('No Direct Script Allowed');

class Errors extends MY_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->module = 'error';
    }
    public function page_missing(){
        $this->data['title']  = 'Page Not Found';
        $this->data['content']   = 'error';
        $this->template($this->data, $this->module);
    }
}