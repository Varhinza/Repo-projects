<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class profil extends CI_Controller {


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


	public function visimisi()
	{
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "visimisi";
		$this->load->view('overview_home',$data);
	}

	public function profil_dinas()
	{
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();	
		$data['contents']= "profil_dinas";
		$this->load->view('overview_home',$data);
	}


	public function kontak()
	{
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "kontak";
		$this->load->view('overview_home',$data);
	}



}
