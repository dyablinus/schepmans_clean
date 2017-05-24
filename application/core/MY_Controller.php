<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
		public $data =array();
        public function render($view, $template = 'template/base/index'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);

    }
        public function render1($view,  $template = 'template/base/index2'){
			$this->data["view_content"] = $this->load->view($view ,$this->data, TRUE);
			$this->load->view($template, $this->data);
    }


}