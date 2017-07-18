<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('edit_model');
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
                $this->authrender('auth/edit');
            }
        }

        public function create(){

            $this->form_validation->set_rules('title', 'Title', 'required|min_length[42]|max_length[60]');
            $this->form_validation->set_rules('texte', 'Texte', 'required|min_length[120]|max_length[210]');
            $this->form_validation->set_rules('date', 'Date','required');
            $this->form_validation->set_rules('link', 'Link','valid_url');

            $config_image = array(
                'upload_path' => 'upload/',
                'aloowed_types' => '|jpg|png|jpeg|PNG|JPEG|JPG|pdf',
                'max_size' => '1024',
                'filename' => url_titl($this-input->post('file'))
            );
            $this->load->library('upload',$config_image);
                $data_article = array (
                    "title" => $_POST['title'];
                    "texte" => $_POST['texte'];
                    "date" => $_POST['date'];
                    "link" => $_POST['link'];
                );
       
             $this->edit_model->create($data_article);
                
            }
        }

}