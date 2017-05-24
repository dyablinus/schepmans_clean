<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public $tab_language = null;
	public $current_language = null;

		public $data =array();
        public function render($view, $template = 'template/base/index'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);
    }
        public function render1($view,  $template = 'template/base/index2'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);
    }
	 	public function __construct() {
		parent::__construct ();

		$this->set_lang();
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
		if (is_string ( $idiom ) && $idiom != $CI->config->item ( 'language' )) {
			$CI->config->set_item ( 'language', $idiom );
			$tab =  $this->config->item ( 'lang_uri_abbr' );
			$this->lang->load('index',$tab[$this->current_language] );
			
		}
	}

  }