<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {


	 public function __construct()
    {
        parent::__construct();
        $this->load->model('M_home');
    }
	

	public function index()
	{
		$this->form_validation->set_rules('nama', 'nama','required');
        
        if ($this->form_validation->run() == FALSE)
        {
			$data['data']=$this->M_home->link_wisata();
			$data['data2']=$this->M_home->link_events();
			$data['contents']= "saran";
            $this->load->view('overview_home',$data);
        }
        else
        {
			$data['id']=$this->input->post('id');
			$data['nama']=$this->input->post('nama');
			$data['email']=$this->input->post('email');
			$data['date']=date('Y-m-d');
			$data['saran']=$this->input->post('saran');
			$this->M_home->input_saran($data);
			$this->session->set_flashdata('success',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data berhasil dikirim..
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		  	</div>');
            redirect(base_url('Saran'));
        }
	}

}
