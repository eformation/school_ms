<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('session');
        }
	public function index()
	{
                $data['page_title'] = "eFormation - Members Login";
                $data['current_menu'] = 5;
		$this->load->view('welcome',$data);
	}
        
}

/* End of file members.php */
/* Location: ./application/controllers/members.php */
