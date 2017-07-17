<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $tab_language = null;
	public $current_language = null;
	public $data =array();

		public function __construct() {
			parent::__construct ();
			$this->set_lang();
		}
	public function render($view, $template = 'template/base/index'){
		$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
		$this->load->view($template, $this->data);

    }
        public function render1($view,  $template = 'template/base/index2'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);
    }
        
		
		public function authrender($view, $template = 'template/base/auth_dash'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);

    }

		protected function set_lang(){
		$this->tab_language = $this->config->item ( 'lang_uri_abbr' );
		//lang
		if (! isset ( $this->session->userdata ['select_language'] )) {
			$this->session->set_userdata ( 'select_language', 'en' );
			if (isset ( $_SERVER ['HTTP_ACCEPT_LANGUAGE'] )) {
				$Langue = explode ( ',', $_SERVER ['HTTP_ACCEPT_LANGUAGE'] );
				$Langue = strtolower ( substr ( chop ( $Langue [0] ), 0, 2 ) );
				if (in_array ( $Langue, $this->config->item ( 'langArray' ) )) {
						
					$this->session->set_userdata ( 'select_language', $Langue );
					$this->current_language = $Langue;
				}
			}
		}
		if ($this->session->userdata ['select_language']) {
			$this->current_language = $this->session->userdata ['select_language'];
		} else {
			$this->session->set_userdata ( 'select_language', 'en' );
			$this->current_language = "en";
		}
		
		$this->switch_to ( $this->tab_language[$this->current_language] );
		$this->data["current_lang"] = $this->current_language;
}
		function switch_to($idiom) {
		$CI = & get_instance ();
		
		//die(var_dump($idiom));
		if (is_string ( $idiom ) && in_array ( $idiom, $this->config->item ( 'lang_uri_abbr' ) )) {
			$CI->config->set_item ( 'language', $idiom );
		//	die(var_dump($CI->config->item ( 'language' )));
			$tab =  $this->config->item ( 'lang_uri_abbr' );
			$this->lang->load('index',$tab[$this->current_language] );
		//	die(var_dump($this->current_language));
			
		}
	}

  }