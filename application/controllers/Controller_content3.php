<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content3 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_content3','content3');
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/content3/content3_table';
		$data['show_content3'] = $this->content3->select();
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_content3(){
		
		$data['content'] = 'admin/content3/add_content3';
    	$this->load->view('admin/menu_admin', $data);

	}

	public function add_content3_data(){
		$judul_content3      	  = $this->input->post('judul_content3');
		$subjudul_content3   	  = $this->input->post('subjudul_content3');
		$tgl_content3        	  = $this->input->post('tgl_content3');   
        $add_content3=array(
                			'id_content'     	     =>  '',
                			'judul_content'      	 =>  $judul_content3,
                			'sub_judul'      	 	 =>  $subjudul_content3,  
                			'tanggal_content'      	 =>  date('y-m-d'),
                			'kategory_id'      	 	 =>  6,
                			'isi_content'      	 	 =>  "content3" ,
                			'post_by'      	 	     =>  "session" ,
                			'create_at'      	 	 =>  $tgl_content3,
                			'update_at'      	 	 =>  null ,
                			'status'      	 	     =>  0              
        				);
        $this->content3->add($add_content3);
        redirect('Controller_content3');

	
	}

      public function edit_view()
    {
        $id = $this->uri->segment(2);
        $data['content'] = 'admin/content3/edit_content3';
        $data['content3'] = $this->content3->select_edit($id);
        $this->load->view('admin/menu_admin', $data);
    }

    public function edit_content3(){
        $id = $this->uri->segment(3);
        $judul_content3           = $this->input->post('judul_content3');
        $subjudul_content3        = $this->input->post('subjudul_content3');
        $tgl_content3             = $this->input->post('tgl_content3');   
        $add_content3=array(
                            'judul_content'          =>  $judul_content3,
                            'sub_judul'              =>  $subjudul_content3,  
                            'tanggal_content'        =>  date('y-m-d'),
                            'kategory_id'            =>  6,
                            'isi_content'            =>  "content3" ,
                            'post_by'                =>  "session" ,
                            'create_at'              =>  $tgl_content3,
                            'update_at'              =>  $tgl_content3 ,
                            'status'                 =>  0              
                        );
        $this->content3->update($id,$add_content3);
        redirect('Controller_content3');

    
    }

}
