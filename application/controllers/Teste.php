<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teste extends MY_Controller {
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
			// redirect them to the home page because they must be an administrator to view this
            $this->render('auth/edit');
			
		}
     
	}


public function update($id){
    //recup id 
    // recup infos de la db
    $where = array(
        'id' => $id
    );
    $this->data["result"] = $this->edit_model->get_where($where);
    $this->render('post/update_post');
    // renvoyer post pré-rempli

}

// créer le post pré-rempli
public function updated_post(){
    // recup info
    $title = $_POST['title'];
    $message = $_POST['message'];
    $id = $_POST['id_post'];
    // maj db, appel de la methode du model
    $this->edit_model->update($title,$message,$id);
    // renvoyer message success
    $this->render('post/updated');
}

//suppression post
public function delete($id){
    // recup id entre paranthese dans la function
    // delete post
    $this->edit_model->delete($id);
    // renvois message
    $this->render('post/deleted');
}

//afficher un seul post
public function show($id=FALSE){
    // place en paramettre l'id
        if($id===FALSE){
            $this->index();
            return;
        }
        $where = array("id" => $id);
       $this->data["result"] = $this->edit_model->get_where($where);
       $this->render('post/show');
}

//    public function create_post(){
//        // recup info
//       $title = $_POST['title'];
//       $texte = $_POST['texte'];
//       $date = $_POST['date'];
// 	  $link = $_POST['link'];

//        // stock in db
//        $this->edit_model->create($title,$texte,$date,$link);
//        // resend msg
//        $this->authrender('auth/edit');
//    }


//                 public function do_upload()
//         {
//                 $config['upload_path']          = './uploads/';
//                 $config['allowed_types']        = 'sjpg|png';
//                 $config['max_size']             = 100;
//                 $config['max_width']            = 1024;
//                 $config['max_height']           = 768;

//                 $this->load->library('upload', $config);

//                 if ( ! $this->upload->do_upload('userfile'))
//                 {
//                         $error = array('error' => $this->upload->display_errors());

//                         $this->load->view('upload_form', $error);
//                 }
//                 else
//                 {
//                         $data = array('upload_data' => $this->upload->data());

//                         $this->load->view('upload_success', $data);
//                 }
//         }



}