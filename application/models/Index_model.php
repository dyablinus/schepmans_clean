<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Index_model extends CI_Model {
  private $table = "pb_user";

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get_where($where=array()){
    $this->db->where('deleted',0);
    // va chercher dans db table
    $result = $this->db->get_where($this->table,$where);
    return $result;
}

public function create($name,$nsurame,$email){
    $data = array(
        'name' => $name,
        'surname' => $surname,
        'email' => $email
);
   $this->db->insert($this->table, $data);
}

public function insert($data){
    $this->db->insert($this->table, $data);
}

}