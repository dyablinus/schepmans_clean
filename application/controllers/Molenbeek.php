<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Molenbeek extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		 }
    public function index(){
		$this->render('schepmans/molenbeek');
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