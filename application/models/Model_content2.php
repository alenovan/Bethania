<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_content2  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_content');
    $this->db->where('kategory_id','2');
    $this->db->or_where('kategory_id','3');
    $this->db->or_where('kategory_id','4');
    $this->db->or_where('kategory_id','5');
  
  
    $result =$this->db->get();
    return  $result->result();

  
}

 function select_slider(){
    $this->db->select('a.*,b.*');
    $this->db->from('tb_content a');
    $this->db->join('tb_file b','a.id_content = b.table_id');
    $this->db->where('kategory_id','7');
  
  
    $result =$this->db->get();
    return  $result->result();

  
}


 function select_edit($id){
    $this->db->select('*');
    $this->db->from('tb_content');
    $this->db->where('id_content',$id);
  
    $result=$this->db->get();
    return  $result->result();

  
}
function select_edit_slider($id){
    $this->db->select('a.*,b.*');
    $this->db->from('tb_content a');
    $this->db->join('tb_file b','a.id_content = b.table_id');
    $this->db->where('id_content',$id);
  
    $result=$this->db->get();
    return  $result->result();

  
}

 function add($data)
  {
    $this->db->insert('tb_content', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_content', $id);
    $this->db->update('tb_content', $data);
  }

  function delete($id)
  {
    $this->db->where('id_content', $id);
    $this->db->delete('tb_content');
  }



}