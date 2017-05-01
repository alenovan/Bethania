<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content1 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/content1/content1_table';
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_content1(){
		
		$data['content'] = 'admin/content1/add_content1';
    	$this->load->view('admin/menu_admin', $data);

	}

}
