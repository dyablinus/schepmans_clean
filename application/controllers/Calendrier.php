<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendrier extends MY_Controller {
		 public function __construct(){
			 parent::__construct();
             $this->load->model('cal_model');
             $this->load->helper('form');
             }

	public function index(){
        if($this->session->userdata('login') || $this->session->userdata('logged')){
            $this->render1('auth/calendrier');
            } else {
                redirect('auth/login', 'refresh');
            }
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

    public function add_event() 
    {
        /* Our calendar data */
        $name = $this->input->post("name");
        $desc = $this->input->post("description");
        $end_date = $this->input->post("end_date");
        $start_date = $this->input->post ( 'start_date' );
        
        

        if(!empty($start_date)) {
            $sd = DateTime::createFromFormat('d/m/Y H:i', $start_date);

           $start_date = formatDate ( $start_date, '/', '-', true, false );
           $sd = new DateTime($start_date);
           $start_date = $sd->format('Y-m-d H:i:s');

            $start_date_timestamp = $sd->getTimestamp();
        } else {
            $start_date = date("Y-m-d H:i:s", time());
            $start_date_timestamp = time();
        }

        if(!empty($end_date)) {
         
            
           $end_date = formatDate ( $end_date, '/', '-', true, true );
           $ed = new DateTime($end_date);
         
           $end_date = $ed->format('Y-m-d H:i:s');
           
           $end_date_timestamp = $ed->getTimestamp();

        } else {
            $end_date = date('Y-m-d H:i:s', time());
            $end_date_timestamp = time();
        }

        $this->cal_model->add_event(array(
            "title" => $name,
            "description" => $desc,
            "start" => $start_date,
            "end" => $end_date
            )
        );

        redirect(site_url("calendrier"));
    }

    public function edit_event() 
    {
        $eventid = intval($this->input->post("eventid"));
        $event = $this->cal_model->get_event($eventid);
        if($event->num_rows() == 0) {
            echo"Invalid Event";
            exit();
        }

        $event->row();

        /* Our calendar data */
        $name = $this->input->post("name");
        $desc = $this->input->post("description");
        $start_date = $this->input->post("start_date");
        $end_date = $this->input->post("end_date");
        $delete = intval($this->input->post("delete"));

        if(!$delete) {

            if(!empty($start_date)) {

                $start_date = formatDate ( $start_date, '/', '-', true, false );
                $sd = new DateTime($start_date);
                $start_date = $sd->format('Y-m-d H:i:s');
                $start_date_timestamp = $sd->getTimestamp();
            } else {
                $start_date = date("Y-m-d H:i:s", time());
                $start_date_timestamp = time();
            }

            if(!empty($end_date)) {
                $end_date = formatDate ( $end_date, '/', '-', true, true );
                $ed = new DateTime($end_date);
                $end_date = $ed->format('Y-m-d H:i:s');
                $end_date_timestamp = $ed->getTimestamp();
            } else {
                $end_date = date('Y-m-d H:i:s', time());
                $end_date_timestamp = time();
            }

            $this->cal_model->update_event($eventid, array(
                "title" => $name,
                "description" => $desc,
                "start" => $start_date,
                "end" => $end_date,
                )
            );
            
        } else {
            $this->cal_model->delete_event($eventid);
        }

        redirect(site_url("calendrier"));
    }
	public function updEvent(){
		$param['id'] = $this->input->post('id');
		$param['start_date'] = $this->input->post('start_date');
		$param['end_date'] = $this->input->post('end_date');

		$r = $this->cal_model->updEvent($param);

		echo $r;
	}
}
