<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('index_model');
		     $this->load->model('Ion_auth_model');
             $this->load->helper('form');
             $this->load->library('ion_auth');

             $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

        	 $this->lang->load('auth');
             }

	public function index(){
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		elseif ($this->ion_auth->is_admin()) // remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the home page because they must be an administrator to view this
            //$this->load->view('auth/newsletter');
			$this->listutilisateurs();
		}
	}
	public function listutilisateurs(){
		 $this->data["result"] = $this->index_model->get_where();
		//  var_dump($this->index_model->get_where()->result());
       $this->authrender('auth/newsletter');
	}

	    public function show($id=FALSE){
        if($id===FALSE){
            $this->index();
            return;
        }
		
        $where = array("id" => $id);
		
       $this->data["result"] = $this->index_model->get_where($where);
       $this->load->view('auth/newsletter',$this->data);
}


}