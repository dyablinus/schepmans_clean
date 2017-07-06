<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('edit_model');
		     $this->load->model('Ion_auth_model');
             $this->load->helper('form');
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
            //definir les regles de validation

			// redirect them to the home page because they must be an administrator to view this
            if($this->form_validation->run() ===FALSE){
                //$this->authrender('auth/edit');
                      if(isset($_FILES)){  die(var_dump($_FILES));}
            }else{
                //ok c est validé
                 $name_photo_file = "";
      if(isset($_FILES)){  die(var_dump($_FILES));}
        if (! empty ( $_FILES )) {
            $post_input_title = $this->post->input('title');
            $dir_name = generateToken ( 16 );
            
            //création variable pour stoker le fichier
            $file_element_name = 'file';
            // variable stocke le chemin du fichier avec id a la fin
            $uploads_path = './uploads/schepmans/files/schepmans_' . $dir_name . "/";

            //  realpath sert a retourner le chemin absolu, function str replace utilisé pour remplacer les \\ dans le chemin
            if (realpath ( $uploads_path ) !== FALSE) {
                $uploads_path = str_replace ( '\\', '/', realpath ( $uploads_path ) );
            }
            
            
            //si le document n existe pas le créé avec tout les droits (777)
            if (! is_dir ( $uploads_path ))
                mkdir ( $uploads_path, 0777, TRUE );
            $config ['upload_path'] = $uploads_path;
            
            //config les parametres du fichier accepté, variable allowed=type de fichier
            $config ['allowed_types'] = $this->allowed_types;
            $config ['max_size'] = '100000';
            $config ['max_width'] = '1024';
            $config ['max_height'] = '1024';
            // die ( var_dump ( $_FILES ) );

            //variable de nom temporaire du fichier
            $photo_file = $_FILES [$file_element_name] ['tmp_name']; // name to save

            // function explode coupe une chaine en segment pour ajouter le nom au fichier
            $file_extension = explode ( '.', $_FILES [$file_element_name] ['name'] );

            $file_size = $_FILES [$file_element_name] ['size'];

            //rename le fichier avec code aleatoire
            $name_photo_file = generateToken ( 16 );
            //ajoute au fichier son extesion 
            $name_photo_file .= '.' . end ( $file_extension );
            $config ["file_name"] = $name_photo_file;
            $this->load->library ( 'upload', $config );
            //si file est false alors créé un tableau avec parametre du fichier
            if ($this->upload->do_upload ( 'file', FALSE )) {
                
                $data = array (
                        // recup info
                        "title" => $title,
                        "texte" => $texte,
                        "date" => $date,
                        "link" => $link,
                        "file_path" => $name_photo_file,
            
                );
                $this->load->model ( "edit_model" );
                $this->edit_model->create ( $data );
                // resend msg
                $this->authrender('auth/upload_success');
            }
        }
    }
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

    public function create_post() {
        $name_photo_file = "";
        
        if (! empty ( $_FILES )) {
            $dir_name = generateToken ( 16 );
            
            //création variable pour stoker le fichier
            $file_element_name = 'file';
            // variable stocke le chemin du fichier avec id a la fin
            $uploads_path = './uploads/schepmans/files/schepmans_' . $dir_name . "/";

            //  realpath sert a retourner le chemin absolu, function str replace utilisé pour remplacer les \\ dans le chemin
            if (realpath ( $uploads_path ) !== FALSE) {
                $uploads_path = str_replace ( '\\', '/', realpath ( $uploads_path ) );
            }
            
            
            //si le document n existe pas le créé avec tout les droits (777)
            if (! is_dir ( $uploads_path ))
                mkdir ( $uploads_path, 0777, TRUE );
            $config ['upload_path'] = $uploads_path;
            
            //config les parametres du fichier accepté, variable allowed=type de fichier
            $config ['allowed_types'] = $this->allowed_types;
            $config ['max_size'] = '100000';
            $config ['max_width'] = '1024';
            $config ['max_height'] = '1024';
            // die ( var_dump ( $_FILES ) );

            //variable de nom temporaire du fichier
            $photo_file = $_FILES [$file_element_name] ['tmp_name']; // name to save

            // function explode coupe une chaine en segment pour ajouter le nom au fichier
            $file_extension = explode ( '.', $_FILES [$file_element_name] ['name'] );

            $file_size = $_FILES [$file_element_name] ['size'];

            //rename le fichier avec code aleatoire
            $name_photo_file = generateToken ( 16 );
            //ajoute au fichier son extesion 
            $name_photo_file .= '.' . end ( $file_extension );
            $config ["file_name"] = $name_photo_file;
            $this->load->library ( 'upload', $config );
            //si file est false alors créé un tableau avec parametre du fichier
            if ($this->upload->do_upload ( 'file', FALSE )) {
                
                $data = array (
                        // recup info
                        "title" => $title,
                        "texte" => $texte,
                        "date" => $date,
                        "link" => $link,
                        "file_path" => $name_photo_file,
            
                );
                $this->load->model ( "edit_model" );
                $this->edit_model->create ( $data );
                // resend msg
                $this->authrender('auth/upload_success');
            }
        }
    }
}