<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('events_model');
    }

	public function index()	{

        $years = $this->events_model->getYears();

        foreach ($years as $value) {
            $this->data['events'][$value] = $this->events_model->getEvents($value);
            $this->data['graduates'][$value] = $this->events_model->getGraduates($value);
        }

        $this->load->view('header');
        $this->load->view('events', $this->data);
		$this->load->view('footer');
	}
}