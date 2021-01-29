<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('mylib');
		$this->load->model('Database_model');
		
	}

	public function index()
	{
		// $this->load->view('dashboard');
		$this->mylib->skin('dashboard');
	}
}
