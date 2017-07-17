<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model("newsletter_model");
		$this->load->library('form_validation');
	}


	public function contact_post(){
		//if($this->form_validation->run()){

			// récupérer les données
			$prenom = $this->input->post('prenom');
			$email = $this->input->post('email');
			// mettre dans la BDD
			$this->newsletter_model->contact_send($prenom,$email);

			// envoyer par email
	$data_msg = array(
						"prenom"=>$prenom,
						"email"=>$email,
					 );
            $this->load->library('email');
            $this->email->initialize();
            $this->email->from($email, 'Site name');
            $this->email->to('ismailmahaj@gmail.com');
            $this->email->subject('Notification Mail');
            $this->email->message($msg);
            $this->email->send();

			redirect('/');
			
	}

}