<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendrier extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		$this->load->model('calendrier_model');
		 }

	public function index(){
		$this->render1('schepmans/calendrier');
	}

	public function getEvent(){
		$r = $this->calendrier_model->getEvent();
		echo json_encode($r);
	}

	public function updEvent(){
		$param['id'] = $this->input->post('id');
		$param['datedebut'] = $this->input->post('datedebut');
		$param['datefin'] = $this->input->post('datefin');

		$r = $this->calendrier_model->updEvent($param);

		echo $r;
	}

	public function deleteEvent(){
		$id = $this->input->post('id');
		$r = $this->calendrier_model->deleteEvent($id);
		echo $r;
	}

	public function updEvent2(){
		$param['id'] = $this->input->post('id');
		$param['nome'] = $this->input->post('nom');
		$param['web'] = $this->input->post('web');

		$r = $this->Mcalendar->updEvent2($param);

		echo $r;
	}
}