<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akomodasi extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_akomodasi');
		$this->load->model('M_home');
	}
	public function index()
	{
		$data['contents']= "home";
		$this->load->view('overview_home',$data);

		
	}

	public function list_akomodasi()
	{
		$data['contents']= "list_akomodasi";
		$this->load->view('overview_home',$data);
	}

	public function list_jns_akomodasi($id){
		$list=$this->M_akomodasi->list_akomodasi($id);
		$data = array(
			'data' => $list
		);
		$data['contents']= "list_jns_akomodasi";
		$data['data2']=$this->M_akomodasi->list_jns_akomodasi($id);
		$this->load->view('overview_home',$data);
	}

	public function list_pasar(){
		$list=$this->M_akomodasi->list_pasar();
		$data = array(
			'data' => $list
		);
		$data['contents']= "pasar";
		$this->load->view('overview_home',$data);
	}

	public function detail_ako($id)
	{
		$detail=$this->M_akomodasi->detail($id);
		$data = array(
			'detail' => $detail
		);
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "detail_hotel";
		$this->load->view('overview_home',$data);
	}
	
	public function detail_pasar($id)
	{
		$detail=$this->M_akomodasi->detail_pas($id);
		$data = array(
			'detail' => $detail
		);
		$data['data']=$this->M_home->link_wisata();
		$data['data2']=$this->M_home->link_events();
		$data['contents']= "detail_pasar";
		$this->load->view('overview_home',$data);
	}

	public function homestay(){
		$homestay=$this->M_akomodasi->homestay();
		$data = array(
			'homestay' => $homestay
		);
		$data['contents']= "homestay";
		$this->load->view('overview_home',$data);
	}

	public function penginapan(){
		$penginapan=$this->M_akomodasi->penginapan();
		$data = array(
			'penginapan' => $penginapan
		);
		$data['contents']= "penginapan";
		$this->load->view('overview_home',$data);
	}



	public function detail_artikel(){
		
		$data['contents']= "detail_artikel";
		$this->load->view('overview_home',$data);
	}


}
