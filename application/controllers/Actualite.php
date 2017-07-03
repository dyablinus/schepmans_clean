<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualite extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		 $this->load->model('edit_model');
		 }



    public function index(){

		$this->archives();
	}


     public function archives(){
		 $this->data["result"] = $this->edit_model->get_where();
		//  var_dump($this->index_model->get_where()->result());
       $this->render('schepmans/actualite');
	}

}
