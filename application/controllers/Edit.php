<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model(array('edit_model','Ion_auth_model'));
             $this->load->helper('form');
             $this->load->helper('file');
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
    public function create() {

        $fileData = array();
        // File upload script
        $name = $_FILES["userfile"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $config['upload_path']   = './uploads/schepmans/files/schepmans_';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $config['upload_path']   = './uploads/schepmans/files/schepmans_';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[2]');
        $this->form_validation->set_rules('date', 'date', 'required|min_length[2]');
        $this->form_validation->set_rules('texte', 'texte', 'required|min_length[2]');
        $this->form_validation->set_rules('link', 'link', 'required|min_length[2]');
        $this->form_validation->set_rules('valeur', 'value', 'required');

        if ($this->form_validation->run() == TRUE) {

            if ($this->upload->do_upload('userfile')) {

                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

                $this->db->insert('posts', array(
                    // So you can work with the values, like:
                    'title' => $this->input->post('title', true), // TRUE is XSS protection
                    'date' => $this->input->post('date', true),
                    'texte' => $this->input->post('texte', true),
                    'link' => $this->input->post('link', true),
                    'file_name' => $file_data['file_name'],
                    'valeur' => $this->input->post('valeur', true),
                ));

                $this->session->set_flashdata('success', 'Form submitted successfully');
                redirect('edit');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('edit');
            }
            } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('edit');
        }
        
    }

    public function show_all()
	{
    $this->data["result"] = $this->edit_model->get_where();
    $this->authrender('auth/show_all');
    }

    public function update($id){
        //recup id 
        // recup infos de la db
        $where = array(
            'id' => $id
        );
        $this->data["result"] = $this->edit_model->get_where($where);
        $this->authrender('auth/update_post');
        // renvoyer post pré-rempli
    }

    // créer le post pré-rempli
    public function updated_post(){
        // recup info
        $title = $_POST['title'];
        $message = $_POST['message'];
        $id = $_POST['id_post'];
        // maj db, appel de la methode du model
        $this->post_model->update($title,$message,$id);
        // renvoyer message success
        $this->authrender('auth/updated');
    }

    //suppression post
    public function delete($id){
        // recup id entre paranthese dans la function
        // delete post
        $this->edit_model->delete($id);
        // renvois message
        $this->authrender('auth/delete');
    }

    public function create_slider() {

        $fileData = array();
        // File upload script
        $name = $_FILES["userfile"]["name"];
        $ext = end((explode(".", $name))); # extra () to prevent notice

        $config['upload_path']   = './uploads/schepmans/files/schepmans_';
        $config['allowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
        $config['max_size']      = 0;

        $this->load->library('upload', $config);

        $this->form_validation->set_rules('title', 'Title', 'required|min_length[2]');
        // $this->form_validation->set_rules('date', 'date', 'required|min_length[2]');
        // $this->form_validation->set_rules('texte', 'texte', 'required|min_length[2]');
        // $this->form_validation->set_rules('link', 'link', 'required|min_length[2]');

        if ($this->form_validation->run() == TRUE) {

            if ($this->upload->do_upload('userfile')) {

                $data = $this->upload->data(); // Get the file data
                $fileData[] = $data; // It's an array with many data
                // Interate throught the data to work with them
                foreach ($fileData as $file) {
                    $file_data = $file;
                }

                $this->db->insert('sliders', array(
                    // So you can work with the values, like:
                    'title' => $this->input->post('title', true), // TRUE is XSS protection
                    'date' => $this->input->post('date', true),
                    'texte' => $this->input->post('texte', true),
                    'link' => $this->input->post('link', true),
                    'file_name' => $file_data['file_name'],
                    
                ));

                $this->session->set_flashdata('success', 'Form submitted successfully');
                redirect('edit');
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect('edit');
            }
            } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect('edit');
        }
    }

   
}
