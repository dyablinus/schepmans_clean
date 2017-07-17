<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {
  
  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
  private $table ="newsletterschepmans";
  public function email_send($prenom, $email){
    $data = array(
      'prenom'  => $prenom,
      'email'  => $email,
    );
    $this->db->insert($this->table, $data);
  }
  }
