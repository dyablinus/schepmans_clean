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

        protected $allowed_types = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';

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

            $this->form_validation->set_rules('title', 'Title', 'required|min_length[12]|max_length[60]');
            $this->form_validation->set_rules('texte', 'Texte', 'required|min_length[60]|max_length[210]');
            $this->form_validation->set_rules('date', 'Date','required');
            $this->form_validation->set_rules('link', 'Link','valid_url');

            $config = array();
            $config ['upload_path'] = './uploads/schepmans/files/schepmans_';
            $config ['aloowed_types'] = '|jpg|png|jpeg|PNG|JPEG|JPG|pdf';
            $config ['max_size'] = '100';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';
                
            
            $this->load->library('upload',$config);
            if($this->form_validation->run()==false and empty($_Files['userfile']['name'][0])){
                // $error = array(
                //     'error_image' => 'Ajoutez une image à l\'article',
                //     'error_title' => 'Completez les champs manquants'
                // );
                
                $this->authrender('auth/edit');
                
            }elseif ($this->form_validation->run()==true and empty($_Files['userfile']['name'][0])){
                // $error = array(
                //     'error_image' => 'Ajoutez une image à l\'article',
                //     'error_title' => ''
                // );
                $this->authrender('auth/edit');
                
                
            }elseif ($this->form_validation->run()==false and !empty($_Files['userfile']['name'][0])){
               !$this->upload->data();
                // $error = array(
                //     'error_image' => ' ',
                //     'error_title' => 'Completez les champs manquants'
                // );
                $this->authrender('auth/edit');
                
            }elseif ($this->form_validation->run()==true and !empty($_Files['userfile']['name'][0])){
                $this->upload->do_upload();
                $data = array('upload_data' => $this->upload->data()); 
                // $this->$data['upload_data']['file_name'];
            }

                $data_article = array(
                    "title" => $_POST['title'],
                    "texte" => $_POST['texte'],
                    "date" => $_POST['date'],
                    "link" => $_POST['link'],
                    "file_name" => 'userfile'
                );
       
             $this->edit_model->create($data_article);
             $this->authrender('auth/dashboard');
            
        }
        // public function create_post(){
        // // recup info
        // $title = $_POST['title'];
        // $texte = $_POST['texte'];
        // $date = $_POST['date'];
        // $link = $_POST['link'];

        // // stock in db
        // $this->edit_model->create($title,$texte,$date,$link,$token);
        // // resend msg
        // $this->authrender('auth/upload_success');
        // }

           //definir les regles de validation
    //  public function create_post(){ 

    //         $this->form_validation->set_rules('title', 'Title', 'required|min_length[42]|max_length[60]');
    //         $this->form_validation->set_rules('texte', 'Texte', 'required|min_length[120]|max_length[210]');
    //         $this->form_validation->set_rules('date', 'Date','required');
    //         $this->form_validation->set_rules('link', 'Link','valid_url');

    //             // if($this->form_validation->run() === FALSE){
                    
    //             //     die(var_dump($data));
   
    //             // }else{
    //                 //ok c est validé
    //                 $name_photo_file = "";
      
    //         if (! empty ( $_FILES )) {
    //             $post_input_title = $this->input->post('file');
    //             $dir_name = generateToken ( 16 );
                
    //             //création variable pour stoker le fichier
    //             $file_element_name = 'file';
    //             // variable stocke le chemin du fichier avec id a la fin
    //             $uploads_path = './uploads/schepmans/files/schepmans_' . $dir_name . "/";

    //             //  realpath sert a retourner le chemin absolu, function str replace utilisé pour remplacer les \\ dans le chemin
    //             if (realpath ( $uploads_path ) !== FALSE) {
    //                 $uploads_path = str_replace ( '\\', '/', realpath ( $uploads_path ) );
    //             }
                
                
    //             //si le document n existe pas le créé avec tout les droits (777)
    //             if (! is_dir ( $uploads_path ))
    //                 mkdir ( $uploads_path, 0777, TRUE );
    //                 $config ['upload_path'] = $uploads_path;
                    
    //                 //config les parametres du fichier accepté, variable allowed=type de fichier
    //                 $config ['allowed_types'] = $this->allowed_types;
    //                 $config ['max_size'] = '100000';
    //                 $config ['max_width'] = '1024';
    //                 $config ['max_height'] = '1024';
        

    //                 //variable de nom temporaire du fichier
    //                 $photo_file = $_FILES [$file_element_name] ['tmp_name']; // name to save

    //                 // function explode coupe une chaine en segment pour ajouter le nom au fichier
    //                 $file_extension = explode ( '.', $_FILES [$file_element_name] ['name'] );

    //                 $file_size = $_FILES [$file_element_name] ['size'];

    //                 //rename le fichier avec code aleatoire
    //                 $name_photo_file = generateToken ( 16 );
    //                 //ajoute au fichier son extesion 
    //                 $name_photo_file .= '.' . end ( $file_extension );
    //                 $config ["file_name"] = $name_photo_file;
    //                 $this->load->library ( 'upload', $config );
    //                 //si file est false alors créé un tableau avec parametre du fichier
    //                 if ($this->upload->do_upload ( 'file', FALSE )) {
                        
    //                    $data = array(
    //                             // recup info
    //                             "title" => $_POST['title'],
    //                             "texte" => $_POST['texte'],
    //                             "date" => $_POST['date'],
    //                             "link" => $_POST['link'],
    //                             "file_path" => $name_photo_file
    //                    );
                        
    //                     die(var_dump($data));
    //                     $this->edit_model->create($data);
    //                     // $this->load->model ( "edit_model" );
    //                     // $this->edit_model->create ( $data );
    //                     // resend msg
    //                     $this->authrender('auth/upload_success');
    //                 }
    //             }
    //     }       
        
}
