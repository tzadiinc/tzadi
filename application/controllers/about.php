<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends My_Controller {

  public function __construct() {
    parent::__construct();
		$this->lang->load('about', $this->session->userdata('language'));
  }

	public function index()
	{

    $data->page_title = lang('abt_page_title');

    if( defined("ORG_ID") ) {

      $this->load->model("org_model");

      $data->user = $this->org_model->getByID(ORG_ID);

      $data->view = 'user/about';

    }

    else
      $data->view = 'tzadi/about';

    $this->page->load($data);
    
  }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */