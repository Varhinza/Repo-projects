<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class events extends CI_Controller {


	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }
	public function index()
	{
		$data['contents']= "home";
		$this->load->view('overview_home',$data);

		
	}

	public function events(){
		$events=$this->M_home->events();
		$data = array(
			'events' => $events
		);
		$data['contents']= "events";
		$this->load->view('overview_home',$data);
	}


	public function detail_artikel(){
		
		$data['contents']= "detail_artikel";
		$this->load->view('overview_home',$data);
	}


}
