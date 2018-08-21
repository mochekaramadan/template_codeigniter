<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template
{
	protected $_ci;

	public function __construct()
	{
        $this->_ci =& get_instance();
	}

	function display($content, $data = null, $css = null, $js = null)
	{
		if ($content != null) {
			$data['js'] 	= $this->_ci->load->view('templates/css', $data, TRUE);
			$data['css'] = $this->_ci->load->view('templates/css', $data, TRUE);
			$data['_cssglobal'] 		= $this->_ci->load->view('templates/cssglobal', $data, TRUE);
			$data['_header'] 	= $this->_ci->load->view('templates/header', $data, TRUE);
			$data['_sidebar'] 	= $this->_ci->load->view('templates/sidebar', $data, TRUE);
	        $data['_isi'] 		= $this->_ci->load->view($content, $data, TRUE);
	        $data['_footer'] 	= $this->_ci->load->view('templates/footer', $data, TRUE);
	        $data['_jsglobal'] 		= $this->_ci->load->view('templates/jsglobal', $data, TRUE);
	        
	        echo $data['content'] = $this->_ci->load->view('templates/main', $data, TRUE);
		}
	}

	

}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
