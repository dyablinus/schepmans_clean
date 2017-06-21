<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Index_model extends CI_Model {
  private $table = "calendar_events";

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }

  public function get_where($where=array()){
    $this->db->where('delete',0);
    // va chercher dans db table
    $result = $this->db->get_where($this->table,$where);
    return $result;
}

public function create($user,$password,$email){
    $data = array(
        'user' => $user,
        'password' => $password,
        'email' => $email
);
}


}