<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content2 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_content2','content2');
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['content'] = 'admin/content2/content2_table';
		$data['show_content2'] = $this->content2->select();
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_content2(){
		
		$data['content'] = 'admin/content2/add_content2';
    	$this->load->view('admin/menu_admin', $data);

	}

	public function add_content2_data(){
		$judul_content2      	  = $this->input->post('judul_content2');
		$subjudul_content2   	  = $this->input->post('subjudul_content2');
		$kategori_content2        = $this->input->post('kategori_content2');   
        $add_content2=array(
                			'id_content'     	     =>  '',
                			'judul_content'      	 =>  $judul_content2,
                			'sub_judul'      	 	 =>  $subjudul_content2,  
                			'tanggal_content'      	 =>  date('y-m-d'),
                			'kategory_id'      	 	 =>  $kategori_content2,
                			'isi_content'      	 	 =>  "content2" ,
                			'post_by'      	 	     =>  "session" ,
                			'create_at'      	 	 =>  date('y-m-d') ,
                			'update_at'      	 	 =>  null ,
                			'status'      	 	     =>  0              
        				);
        $this->content2->add($add_content2);
        redirect('Controller_content2');
	
	}
    public function add_slider_content2(){
        
        $data['content'] = 'admin/content2/add_slider_content2';
        $this->load->view('admin/menu_admin', $data);

    }

}
