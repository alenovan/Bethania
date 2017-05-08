<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_content1  extends CI_Model {
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

function add($data)
  {
    $this->db->insert('tb_content', $data);
  }

 
}