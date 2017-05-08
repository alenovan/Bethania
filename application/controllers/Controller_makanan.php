<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_makanan extends CI_Controller {

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
        $data['content'] = 'admin/makanan/add_makanan';
    	$this->load->view('admin/menu_admin', $data);
        // $this->load->view('admin/footer_admin');
	}

    function add_makanan(){

    $judul_content           = $this->input->post('judul_content');
    $subjudul_content        = $this->input->post('subjudul_content'); 
    $isi_content             = $this->input->post('isi_content');   
    $add_content=array(
     'id_content'            =>  '',
     'judul_content'         =>  $judul_content,
     'sub_judul'             =>  $subjudul_content,  
     'tanggal_content'       =>  date('y-m-d'),
     'kategory_id'           =>  1,
     'table'                =>  "tb_kategori_menu",
     'isi_content'           =>  $isi_content ,
     'post_by'               =>  "session" ,
     'create_at'             =>  date('d-m-y'),
     'update_at'             =>  null ,
     'status'                =>  0              
     );
    $this->content->add($add_content);
    

    }

    function upload_makanan(){
       
        $config['upload_path']   = FCPATH.'/assets/images/upload/makanan/';
        $config['allowed_types'] = 'gif|jpg|png|ico';
        $this->load->library('upload',$config);

        if($this->upload->do_upload('userfile')){
            $finfo=$this->upload->data();
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

        }

    }

      function upload_profil_makanan(){
                    $config['upload_path']   = './assets/images/upload/makanan';
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
                        $cid = $this->getLastContent();
                        $add_file=array(
                        'id_file'              =>  '',
                        'nama_file'            =>  $finfo['file_name'],
                        'tanggal_file'         =>  date('y-m-d'), 
                        'size_file'            =>  $finfo['file_size'],
                        'dir_file'             =>  $finfo['file_path'],
                        'type_file'            =>  $finfo['file_ext'],
                        'table_id'             =>  $cid ,
                        'table'                =>  'tb_content',
                        'create_at'            =>  date('y-m-d') ,
                        'update_at'            =>  0,
                        'keterangan'           =>  "Profil Menu Makanan"              
               );
                $this->file->add($add_file);
                        $add_slider=array(
                             'id_slider'            => '',
                             'create_at'            =>  date('y-m-d') ,
                             'update_at'            =>  0,
                             'status'               =>  0             
                       );
                        $this->slider->add($add_slider);

    }
}

    function getLastContent(){
        $query = $this->db->query("SELECT id_content FROM tb_content ORDER BY id_content DESC LIMIT 1")->result();
        
        foreach ($query as $q){
            $id_content = $q->id_content;
        }
        
        return $id_content;
    }

	

}
