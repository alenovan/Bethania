<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller_content2 extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_content2','content2');
        $this->load->model('Model_file','file');
        $this->load->model('Model_slider','slider'); 
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
      $kategori_content2      = $this->input->post('kategori_content2');   
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

  public function slider2_view(){
    
    $data['content'] = 'admin/content2/content2_slider_table';
    $data['show_slider2'] = $this->content2->select_slider();
    $this->load->view('admin/menu_admin', $data);

}
public function add_slider_content2(){
    
    $data['content'] = 'admin/content2/add_slider_content2';
    $this->load->view('admin/menu_admin', $data);

}

public function add_slider2(){
    

    $config['upload_path']   = './assets/images/upload/slider2';
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
        $add_content=array('id_content'=>'',
         'judul_content'=>'Slider Menu 2',
         'sub_judul'=>'Slider Menu 2',
         'create_at'=>date('y-m-d'),
         'kategory_id'=>'7'
         );
        $this->content2->add($add_content);
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
        redirect('Controller_content2/slider2_view');
    }
    
}

function getLastContent(){
    $query = $this->db->query("SELECT id_content FROM tb_content ORDER BY id_content DESC LIMIT 1")->result();
    
    foreach ($query as $q){
        $id_content = $q->id_content;
    }
    
    return $id_content;
}

public function editview_data_content2()
{   
    $id = $this->uri->segment(4);
    $data['content'] = 'admin/content2/edit_data_content2';
    $data['content2'] = $this->content2->select_edit($id);
    $this->load->view('admin/menu_admin', $data);
}

public function edit_content2_data(){
    $id = $this->uri->segment(3);
    $judul_content2           = $this->input->post('judul_content2');
    $subjudul_content2        = $this->input->post('subjudul_content2');
    $kategori_content2        = $this->input->post('kategori_content2');   
    $add_content2=array(
        'judul_content'          =>  $judul_content2,
        'sub_judul'              =>  $subjudul_content2,  
        'tanggal_content'        =>  date('y-m-d'),
        'kategory_id'            =>  $kategori_content2,
        'isi_content'            =>  "content2" ,
        'post_by'                =>  "session" ,
        'create_at'              =>  date('y-m-d') ,
        'update_at'              =>  date('y-m-d') ,
        'status'                 =>  0              
        );
    $this->content2->update($id,$add_content2);
    redirect('Controller_content2');
    
}
 public function delete_content2(){ 
    $id = $this->uri->segment(2);
    $this->content2->delete($id);
    redirect('Controller_content2');
  }

    public function edit_slider_view()
    {
        $id = $this->uri->segment(4);
        $data['content'] = 'admin/content2/edit_slider_content2';
        $data['slider'] = $this->content2->select_edit_slider($id);
        $this->load->view('admin/menu_admin', $data);
    }

     public function edit_slider(){

                    $id = $this->uri->segment(4);

                    $hapus_slider = $this->input->post('hapus_gambar');
                    $cek_gambar = $this->input->post('cek_gambar');
                    $file = $this->input->post('userfile');

                    if($cek_gambar == 1 ){
                            unlink($hapus_slider);
                        //echo "hapus";
                    }else if($cek_gambar == 0){
                            echo "belumm";
                   }
                    
                  

                    $config['upload_path']   = './assets/images/upload/slider2';
                    $config['allowed_types'] =   "gif|jpg|jpeg|png"; 
                    $config['max_size']      =   "5000";
                    $config['width']         =   "300";
                    $config['height']        =   "100";
                    $this->load->library('upload',$config);
                    $this->upload->initialize($config);

                    if(!$this->upload->do_upload())
                    {
                       //echo $this->upload->display_errors();
                        redirect('Controller_content2');
                    }else{
                        
                        $finfo=$this->upload->data();
                        $add_content=array('kategory_id'=>'7');
                        $this->content2->update($id,$add_content);
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

                redirect('Controller_content2/slider2_view');
             
         }
    
    }

    public function delete_slider_content2(){ 
    $id = $this->uri->segment(4);
    $hapus_gambar = $this->input->post('hapus_gambar');
    unlink($hapus_gambar);
    $this->content2->delete($id);
    $this->file->delete($id);
    $this->slider->delete($id);
    redirect('Controller_content2/slider2_view');
  }

}
