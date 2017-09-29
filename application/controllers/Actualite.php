<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualite extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
		 $this->load->model('edit_model');
		 }



    public function index(){
        $where = array("valeur" => 'Actualite');
        $this->data["query"] = $this->edit_model->get_where_order_limit($where);
		$this->render('schepmans/actualite');
	}

	public function article($id=FALSE){
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
