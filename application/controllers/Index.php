<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('index_model');
             $this->load->helper('form');
             $this->load->helper('security');
		
		 }
    
	
	public function index(){
		$this->render('schepmans/index');
	}

// Fonction liée à mon fichier php contenant l'API Facebook
	public function apifcb(){
		$this->render('schepmans/apifacebook');
	}
//  function pour lié mon fichier twitter 
	public function apitwitter(){
		$this->render('schepmans/apitwitter');
	}

	public function news(){

    $result = $this->index_model->get_where();
    $name = $this->input->post("name");
    $surname = $this->input->post("surname");
    $email = $this->input->post("email");
    $this->data["result"] = $result;
    $this->load->library('form_validation');
   
    $this->form_validation->set_rules( 'name' ,  'name' ,  'alpha|max_length[20]');

    $this->form_validation->set_rules( 'surname' ,  'surname' ,  'trim|alpha|max_length[26]'); 

   
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pb_user.email]' ,
	 array( 'required'  =>  'The %s field is required.' ) 
	            );
    
    if ($this->form_validation->run() == FALSE){
         $this->render1('schepmans/about');
     } else {
          $data_insert = array(
              'name' => $name,
              'surname' => $surname,
              'email' => $email
          );
     $this->index_model->insert($data_insert);
     $data['titre'] = 'inscrit';
     $this->data["result"] =$this->index_model->get_where();
     $this->render('schepmans/index');
      }
    }



}
