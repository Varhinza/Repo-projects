<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {


	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
        $this->load->model('M_akomodasi');
    }
	public function index()
	{
		$wisata=$this->M_home->wisata();
		$data = array(
			'wisata' => $wisata
		);
		$event=$this->M_home->events();
		$data['events']=$event;
		$data['contents']= "home";
		$this->load->view('overview_home',$data);

		
	}

	public function maps()
	{
		$data['contents']= "maps";
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


	public function detail_eve($id){
		$detail=$this->M_akomodasi->detail_event($id);
		$data = array(
			'detail' => $detail
		);
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "detail_event";
		$this->load->view('overview_home',$data);
	}


}
