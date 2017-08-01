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

       $this->render('schepmans/actualite');
	}

	public function show($id=FALSE){
    // place en paramettre l'id
        if($id===FALSE){
            $this->index();
            return;
        }
        $where = array("id" => $id);
       $this->data["result"] = $this->edit_model->get_where($where);
       $this->render('schepmans/article');
	}

}
