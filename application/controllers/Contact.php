<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
			 $this->load->helper('form');
		 }
    public function index(){
		$this->render1('schepmans/contact');
	}

	    public function contact_post(){
    //if($this->form_validation->run()){

        // récupérer les données
        $nom = $this->input->post('nom');
        $prenom = $this->input->post('prenom');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        // envoyer par email
        $data_msg = array(
                    "var" => "mavar",
                    "nom"=>$nom,
                    "prenom"=>$prenom,
                    "email"=>$email,
                    "message"=>$message,

                    );
        
        $this->form_validation->set_rules('nom', 'Nom', 'required');
        $this->form_validation->set_rules('prenom', 'Prenom', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'message', 'required');


        if ($this->form_validation->run() == FALSE)
        {
                redirect('/?validation=0&n='.$prenom.'&c='.$nom.'&email='.$email.'&message='.$message.'&reference='.'#section_register');
        }

        $msg = $this->load->view("mail/index",$data_msg, TRUE);


         // Pour envoyer un mail HTML, l'en-tête Content-type doit être défini
     $headers  = 'MIME-Version: 1.0' . "\r\n";
     $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

     // En-têtes additionnels
     $headers .= 'From:Françoise Schepmans <fschepmans@molenbeek.irisnet.be>' . "\r\n";


        if(mail( 'fschepmans@molenbeek.irisnet.be', "Notification mail", $msg, $headers )){
            redirect('/?mail=1#section_register');
        }else{
            redirect('/?mail=0#section_register');
        }
        
}


}