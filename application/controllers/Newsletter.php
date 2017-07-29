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
		 $this->data["result"] = $this->index_model->get_where();
		//  var_dump($this->index_model->get_where()->result());
       $this->authrender('auth/newsletter');
			
		}
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

		public function csv($value='')
        {
            $filename = "CSV_FILE_".date("YmdH_i_s").'.csv';

            header('Conten-type:text/csv');
            header('Content-Disposition: attachment;filename='.$filename);
            header('Cache-Control: no-store, no-cache, must-revalidate');
            header('Cache-Control: post-check=0, pre-check=0');
            header('Pragma: no-cache');
            header('Expires:0');

            $handle = fopen('php://output','w');

            fputcsv($handle, array(
                // 'Nom',
                // 'Prenom',
                'Email',
            ));

            $this->db->select('email');
            $this->db->from('pb_user');
            $query = $this->db->get();
            $data['pb_user'] = $query->result_array();

            foreach ($data['pb_user'] as $key => $row)
            {
                fputcsv($handle, $row);
            }
            fclose($handle);
            exit;
        }



}