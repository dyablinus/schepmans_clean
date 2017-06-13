<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calendrier_model extends CI_Model {
  private $table = "schepmans_calendrier";

  public function __construct(){
    parent::__construct();
    $this->load->database();
  }
	public function getEvent(){
        // var_dump($this);
		$this->db->select('idEvent id, nombre title, datedebut start, datefin end');
		$this->db->from('event');

		return $this->db->get()->result();
	}

	public function updEvent($param){
		$campos = array(
			'datedebut' => $param['datedebut'],
			'datefin' => $param['datefin']
			);

		$this->db->where('idEvent',$param['id']);
		$this->db->update('event',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}

	public function deleteEvent($id){
		$this->db->where('idEvent', $id);
		return $this->db->delete('event');
	}

	public function updEvent2($param){
		$campos = array(
			'nombre' => $param['nome'],
			'url' => $param['web']
			);

		$this->db->where('idEvent',$param['id']);
		$this->db->update('event',$campos);

		if ($this->db->affected_rows() == 1) {
			return 1;
		}else{
			return 0;
		}
	}
}