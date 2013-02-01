<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }
	public function index()
	{
                $data['page_title'] = "eFormation - School Management System";
                $data['current_menu'] = 1;
		$this->load->view('welcome',$data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */