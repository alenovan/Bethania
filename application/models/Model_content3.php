<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_content3  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_content');
    $this->db->where('kategory_id','6');
  
    $result=$this->db->get();
    return  $result->result();

  
}
 function select_edit($id){
    $this->db->select('*');
    $this->db->from('tb_content');
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