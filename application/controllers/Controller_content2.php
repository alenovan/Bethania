<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content2 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/content2/content2_table';
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_content2(){
		
		$data['content'] = 'admin/content2/add_content2';
    	$this->load->view('admin/menu_admin', $data);

	}

}
