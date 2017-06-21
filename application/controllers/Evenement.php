<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Evenement extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('cal_model');
             $this->load->helper('form');
             }

	public function index(){

            $this->render1('schepmans/evenement');

	}

        public function get_events() 
    {
        // Our Stand and End Dates
        $start =$this->input->get("start");
        $end =$this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $format2 = $enddt->format('Y-m-d H:i:s');
        $events = $this->cal_model->get_where(array());
        //$events = $this->cal_model->get_events($format, $format2);

        $data_events = array();

        foreach($events->result() as $r) { 

            $data_events[] = array(
                "id" => $r->id,
                "title" => $r->title,
                "description" => $r->description,
                "end" => $r->end,
                "start" => $r->start
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    }





}