<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_slider extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/slider/slider_table';
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_view(){
		
		// $data['content'] = 'admin/user/user_add';
  //   	$this->load->view('admin/menu_admin', $data);

	}

}
