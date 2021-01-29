<?php
defined('BASEPATH') or die('No direct scrip access allowed');

/**
* 
*/
class Mylib
{
	protected $_ci;
	
	function __construct()
	{
		$this->_ci = &get_instance();
	}

	function skin($content,$data=NULL)
	{
		$data['menu'] = $this->_ci->load->view('menu', $data, TRUE);
		$data['content'] = $this->_ci->load->view($content,$data, TRUE);
		$this->_ci->load->view('main',$data);
	}
	
}
?>