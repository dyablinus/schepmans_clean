<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
  
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  private $table ="contact";
  public function contact_send($nom, $prenom, $email, $message){
    $data = array(
      'nom'   => $nom,
      'prenom'  => $prenom,
      'email'  => $email,
      'message' => $message
    );
    $this->db->insert($this->table, $data);
  }
}