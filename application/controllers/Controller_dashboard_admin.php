<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_dashboard_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        

    }
	public function index()
	{
		$this->load->view('admin/header_admin');
		$this->load->view('admin/dashboard_admin');
		$this->load->view('admin/footer_admin');
		
	}
}
