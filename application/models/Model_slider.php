<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_slider  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }


 function select(){
    $this->db->select('a.*,b.*');
    $this->db->from('tb_content a');
    $this->db->join('tb_file b','a.id_content = b.table_id');
    $this->db->where('kategory_id','8');
  
    $result=$this->db->get();
    return  $result->result();

  
}

 function select_edit($id){
    $this->db->select('a.*,b.*');
    $this->db->from('tb_content a');
    $this->db->join('tb_file b','a.id_content = b.table_id');
    $this->db->where('id_content',$id);
  
    $result=$this->db->get();
    return  $result->result();

  
}


 function add($data)
  {
    $this->db->insert('tb_slider', $data);
  }

  function update($id, $data)
  {
    $this->db->where('id_slider', $id);
    $this->db->update('tb_slider', $data);
  }

  function delete($id)
  {
    $this->db->where('id_slider', $id);
    $this->db->delete('tb_slider');
  }



}