<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_slider extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('Model_slider','slider');
        $this->load->model('Model_file','file');
        $this->load->model('Model_content1','content');
        $this->load->view('admin/header_admin');
        

    }
	
	public function index()
	{
		$data['show_slider'] = $this->slider->select();
		$data['content'] = 'admin/slider/slider_table';
    	$this->load->view('admin/menu_admin', $data);
	}

	public function add_slider(){
		
		$data['content'] = 'admin/slider/add_slider';
    	$this->load->view('admin/menu_admin', $data);

	}

		public function add_slider_data(){
		

					$config['upload_path']   = './assets/images/upload/slider1';
                    $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
                    $config['max_size']      =   "5000";
                    $config['width']         =   "300";
                    $config['height']        =   "100";
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);
                    if(!$this->upload->do_upload())
                	{
                        echo $this->upload->display_errors();
                	}else{
                        $finfo=$this->upload->data();
                        $add_content=array('id_content'=>'','kategory_id'=>'8');
                        $this->content->add($add_content);
                        //print_r($finfo);
                        $cid = $this->getLastContent();
                $add_file=array(
                     'id_file'              =>  '',
                     'nama_file'            =>  $finfo['file_name'],
                     'tanggal_file'         =>  date('y-m-d'), 
                     'size_file'            =>  $finfo['file_size'],
                     'dir_file'             =>  $finfo['file_path'],
                     'type_file'            =>  $finfo['file_ext'],
                     'table_id'             =>  $cid ,
                     'table'                =>   'tb_content',
                     'create_at'            =>  date('y-m-d') ,
                     'update_at'            =>  0              
               );
                $this->file->add($add_file);
                $add_slider=array(
                     'id_slider'            =>'',
                     'create_at'            =>  date('y-m-d') ,
                     'update_at'            =>  0,
                     'status'               => 0             
               );
                $this->slider->add($add_slider);

                redirect('Controller_slider');
                }
	
	}

     function getLastContent(){
        $query = $this->db->query("SELECT id_content FROM tb_content ORDER BY id_content DESC LIMIT 1")->result();
        
        foreach ($query as $q){
            $id_content = $q->id_content;
        }
        
        return $id_content;
    }

       public function edit_view()
    {
        $id = $this->uri->segment(4);
        $data['content'] = 'admin/slider/edit_slider';
        $data['slider'] = $this->slider->select_edit($id);
        $this->load->view('admin/menu_admin', $data);
    }

    public function edit_slider(){
                    $id = $this->uri->segment(3);
                    $hapus_slider = $this->input->post('hapus_gambar');
                    $cek_gambar = $this->input->post('cek_gambar');
                    $file = $this->input->post('userfile');
                    if($cek_gambar == 1 ){
                            unlink($hapus_slider);
                        //echo "hapus";
                    }else if($cek_gambar == 0){
                            echo "belumm";
                   }
                    
                  
                    $config['upload_path']   = './assets/images/upload/slider1';
                    $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
                    $config['max_size']      =   "5000";
                    $config['width']         =   "300";
                    $config['height']        =   "100";
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload())
                    {
                        //echo $this->upload->display_errors();
                       redirect('Controller_slider');
                    }else{
                        
                        $finfo=$this->upload->data();
                        $add_content=array('kategory_id'=>'8');
                        $this->content->update($id,$add_content);
                        //print_r($finfo);
                        $cid = $this->getLastContent();
                        $add_file=array(
                         'nama_file'            =>  $finfo['file_name'],
                         'tanggal_file'         =>  date('y-m-d'), 
                         'size_file'            =>  $finfo['file_size'],
                         'dir_file'             =>  $finfo['file_path'],
                         'type_file'            =>  $finfo['file_ext'],
                         'table_id'             =>  $cid ,
                         'table'                =>   'tb_content',
                         'create_at'            =>  date('y-m-d') ,
                         'update_at'            =>  date('y-m-d')              
                );
                $this->file->update($id,$add_file);
                $add_slider=array(
                     'create_at'            =>  date('y-m-d') ,
                     'update_at'            =>  date('y-m-d'),
                     'status'               => 0             
               );
                $this->slider->update($id,$add_slider);

               redirect('Controller_slider');
             
         }
    
    }

    public function delete_slider(){ 
    $id = $this->uri->segment(3);
    $hapus_gambar = $this->input->post('hapus_gambar');
    unlink($hapus_gambar);
    $this->content->delete($id);
    $this->file->delete($id);
    $this->slider->delete($id);
    redirect('Controller_slider');
  }

}
