<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wisata extends CI_Controller {


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

	public function list_wisata(){
		$wisata=$this->M_home->wisata();
		$data = array(
			'wisata' => $wisata
		);
		$data['contents']= "list_wisata";
		$this->load->view('overview_home',$data);
	}


	public function detail_wisata($id){
		$wisata=$this->M_home->detail_wisata($id);
		$data = array(
			'wisata' => $wisata
		);
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "detail_wisata";
		$this->load->view('overview_home',$data);
	}


}
