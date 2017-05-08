<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_file  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('*');
    $this->db->from('tb_file');
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_file', $data);
  }

  function update($id, $data)
  {
    $this->db->where('table_id', $id);
    $this->db->update('tb_file', $data);
  }

  function delete($id)
  {
    $this->db->where('table_id', $id);
    $this->db->delete('tb_file');
  }

  function last()
  {
    $this->db->select('*');
    $this->db->from('tb_content');
    $this->db->order_by('id_content');
  
    $result=$this->db->get();
    return  $result->result();
}

}