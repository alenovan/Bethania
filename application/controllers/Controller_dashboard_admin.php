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
		$data['content'] = 'admin/dashboard/dashboard_admin';
    	$this->load->view('admin/menu_admin', $data);
		$this->load->view('admin/footer_admin');
		
	}

	public function dashboard(){
		$this->load->view('admin/dashboard/dashboard_admin');
	}
}
