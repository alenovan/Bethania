<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content1 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_content1','content1');
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/content1/content1_table';
		$data['show_content1'] = $this->content1->select();
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_content1_view(){
		
		$data['content'] = 'admin/content1/add_content1';
    	$this->load->view('admin/menu_admin', $data);

	}

	public function add_content1(){
		$judul_content1      = $this->input->post('judul_content1');
		$subjudul_content1   = $this->input->post('subjudul_content1');
		$isi_content1        = $this->input->post('isi_content1');   
        $add_content1=array(
                			'id_content'     	     =>  '',
                			'judul_content'      	 =>  $judul_content1,
                			'sub_judul'      	 	 =>  $subjudul_content1,  
                			'tanggal_content'      	 =>  date('y-m-d'),
                			'kategory_id'      	 	 =>  1,
                			'isi_content'      	 	 =>  $isi_content1 ,
                			'post_by'      	 	     =>  "session" ,
                			'create_at'      	 	 =>  date('y-m-d') ,
                			'update_at'      	 	 =>  null ,
                			'status'      	 	     =>  0              
        				);
        $this->content1->add($add_content1); 
		redirect('Controller_content1');
	}

     public function edit_view()
    {
        $id = $this->uri->segment(2);
        $data['content'] = 'admin/content1/edit_content1';
        $data['content1'] = $this->content1->select_edit($id);
        $this->load->view('admin/menu_admin', $data);
    }


    public function edit_content1(){
        $id = $this->uri->segment(3);
        $judul_content1      = $this->input->post('judul_content1');
        $subjudul_content1   = $this->input->post('subjudul_content1');
        $isi_content1        = $this->input->post('isi_content1');   
        $add_content1=array(
                            'judul_content'          =>  $judul_content1,
                            'sub_judul'              =>  $subjudul_content1,  
                            'tanggal_content'        =>  date('y-m-d'),
                            'kategory_id'            =>  1,
                            'isi_content'            =>  $isi_content1 ,
                            'post_by'                =>  "session" ,
                            'create_at'              =>  date('y-m-d') ,
                            'update_at'              =>  date('y-m-d') ,
                            'status'                 =>  0              
                        );
        $this->content1->update($id,$add_content1); 
        redirect('Controller_content1');
    }


}

