<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends My_Controller {

  public function __construct() {
    // define os tipos de usuarios que podem acessar a classe Task
    parent::__construct();
    
    $this->lang->load('index', $this->session->userdata('language'));

  }

  public function index()
  {

    $this->landing();

  }
  
  public function landing()
  {

    if( $this->session->userdata("profileIdentity") == "tzadi" )
      $data->view = 'tzadi/landing';
    
    else if( $this->session->userdata("identity") == $this->session->userdata("profileIdentity") )
      $data->view = $this->session->userdata("profileKind").'/index_private';

    else
      $data->view = $this->session->userdata("profileKind").'/index_public';

    $this->lang->load('user', $this->session->userdata('language'));
    $data->dynJS = 'user/signup';
    $data->page_title = lang('idx_title');
    $this->page->load($data);
  }
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */