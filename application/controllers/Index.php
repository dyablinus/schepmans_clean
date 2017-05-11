<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class index extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
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

}
