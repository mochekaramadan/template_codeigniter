<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$data['tes'] = 'tes';
		$this->template->display('index', $data);
	}
	public function function2()
	{
		$this->load->view('view2');
	}

}

/* End of file Home.php */
/* Location: ./application/modules/home/controllers/Home.php */