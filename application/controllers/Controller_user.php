<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_user','user');
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/user/user_table';
		$data['show_akun'] = $this->user->select();
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_view(){
		
		$data['content'] = 'admin/user/user_add';
    	$this->load->view('admin/menu_admin', $data);

	}

	public function add_user(){
		$username_akun        = $this->input->post('username_akun');
		$email_akun           = $this->input->post('email_akun');
		$password_akun        = $this->input->post('password_akun');   
        $add_user=array(
                			'id_akun'     	   		 =>  '',
                			'username_akun'      	 =>  $username_akun,
                			'email_akun'      	 	 =>  $email_akun,  
                			'password_akun'      	 =>  $password_akun,
                			'create_at'      	 	 =>  date('d-m-y'),
                			'update_at'      	 	 =>  null              
        				);
        $this->user->add($add_user);
        redirect('Controller_user');
	}

    public function edit_view()
    {
        $id = $this->uri->segment(2);
        $data['content'] = 'admin/user/user_edit';
        $data['edit_user'] = $this->user->select_edit($id);
        $this->load->view('admin/menu_admin', $data);
    }

    public function edit_user(){
        $id = $this->uri->segment(3);
        $username_akun        = $this->input->post('username_akun');
        $email_akun           = $this->input->post('email_akun');
        $password_akun        = $this->input->post('password_akun');   
        $edit_user=array(
                            'username_akun'          =>  $username_akun,
                            'email_akun'             =>  $email_akun,  
                            'password_akun'          =>  $password_akun,
                            'create_at'              =>  date('d-m-y'),
                            'update_at'              =>  date('d-m-y')              
                        );
        $this->user->update($id,$edit_user);
        redirect('Controller_user');
    }

}
