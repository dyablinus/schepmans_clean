<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {
	public function __construct(){
        parent::__construct();
		$this->load->model("user_model");
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->render('index');
	}

	public function contact(){
		$this->render('index');
	}

	public function contact_post(){
		//if($this->form_validation->run()){

			// récupérer les données
			$nom = $this->input->post('nom');
			$prenom = $this->input->post('prenom');
			$email = $this->input->post('email');
			$message = $this->input->post('message');

			// mettre dans la BDD
			$this->user_model->contact_send($nom,$prenom,$email,$message);

			// envoyer par email
			$data_msg = array(
								"var" => "mavar",
								"nom"=>$nom,
								"prenom"=>$prenom,
								"email"=>$email,
								"message"=>$message
							);
            $this->load->library('email');
            // $config['protocol']='smtp';
            // $config['smtp_host']='your host';
            // $config['smtp_port']='465';
            // $config['smtp_timeout']='30';
            // $config['smtp_user']='ismailmahaj@gmail.com';
            // $config['smtp_pass']='813b55f47';
            // $config['charset']='utf-8';
			$msg = $this->load->view("mail/index",$data_msg,TRUE);
            $this->email->initialize();
            $this->email->from($email, 'Site name');
            $this->email->to('jerem.negaret@gmail.com');
            $this->email->subject('Notification Mail');
            $this->email->message($msg);
            $this->email->send();

			redirect('/');
			
	}

}