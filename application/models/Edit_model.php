<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_model extends CI_Model {

   // va chercher la table dans db
    private $table = "posts";
	public function __construct(){
    parent::__construct();
    // charge db pour tous
    $this->load->database();
	}


public function get_where($where=array()){
    $this->db->where('deleted', NULL);
    // va chercher dans db table
    $result = $this->db->get_where($this->table,$where);
    return $result;
}

// créer un tableau avec le post et son message
public function create($title,$message){
    $data = array(
        'title'  => $title,
        'message' => $message
        //'id' => $id
);
$this->db->insert($this->table, $data);
}

 //modifie le commentaire
 public function update($title,$message,$id){
     $data = array(
          'title' => $title,
         'message' => $message
     );

     $this->db->where('id', $id);
     $this->db->update($this->table,$data);
 }
 public function delete($id){
 $data = array(
     'deleted' => 1
 );
     $this->db->where('id', $id);
     $this->db->update($this->table,$data);
 }

}