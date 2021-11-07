<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('status') != "login"){
			redirect(base_url("admin_dinas/index.php/LoginAdministrator"));
		}
        $this->load->library('Crud');
    }
	public function index()
	{
        $table="saran";
        $data['data']=$this->Admin_model->get_data($table);
        $data['contents']="dashboard";
        $data['active']="dashboard";
        $this->load->view('overview_admin',$data);
    }

    public function profile()
    {
        $data['contents']="profile";
        $data['active']="no";
        $table="admin";
        $data['data']=$this->Admin_model->get_data($table);
        $this->load->view('overview_admin',$data);
    }

    public function update_profile($id)
    {
        $rules['rules']="id_admin";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="admin";
        $rules['id']=$id;
        $rules['image']=false;
        $rules['redirect']="admin_dinas/index.php/Admin/profile/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_profile";
        $view['active']="no";
        $data['id_admin']=$this->input->post('id_admin');
        $data['username']=$this->input->post('username');
        $data['password']=md5($this->input->post('password'));
        $this->crud->inup($rules,$view,$data);
    }

    public function help()
    {
        $data['contents']="help_map";
        $data['active']="false";
        $this->load->view('overview_admin',$data);
    }
    
    public function list_wisata()
    {
        $data['contents']="list_wisata";
        $data['active']="wisata";
        $table="dwt";
        $data['data']=$this->Admin_model->get_data($table);
        $this->load->view('overview_admin',$data);
    }

    public function detail_wisata($id)
    {
        $rules['rules']="id_dwt";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="dwt";
        $rules['id']=$id;
        $rules['image']=True;
        $rules['path']="wisata/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_wisata/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="detail_wisata";
        $view['active']="dropdown";
        $data['data']='false';
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function input_wisata()
    {
        $rules['rules']="nm_wst";
        $rules['crud']="input";
        $rules['model']="input_data";
        $rules['table']="dwt";
        $rules['image']=True;
        $rules['path']="wisata/";
        $rules['redirect']="admin_dinas/index.php/admin/list_wisata/";
        $view['contents']="input_wisata";
        $view['active']="dropdown";
        $data['id_dwt']=$this->input->post('id_dwt');
        $data['nm_wst']=$this->input->post('nm_wst');
        $data['jns_wst']=$this->input->post('jns_wst');
        $data['lokasi']=$this->input->post('lokasi');
        $data['aktivitas']=$this->input->post('aktivitas');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $this->crud->inup($rules,$view,$data);
    }

    public function update_wisata($id)
    {
        $rules['rules']="id_dwt";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="dwt";
        $rules['id']=$id;
        $rules['image']=True;
        $rules['path']="wisata/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_wisata/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_wisata";
        $view['active']="dropdown";
        $data['id_dwt']=$this->input->post('id_dwt');
        $data['nm_wst']=$this->input->post('nm_wst');
        $data['jns_wst']=$this->input->post('jns_wst');
        $data['lokasi']=$this->input->post('lokasi');
        $data['aktivitas']=$this->input->post('aktivitas');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function delete_wisata($id)
    {
        $table="dwt";
        $field="id_dwt";
        $this->Admin_model->delete_data($id,$table,$field);
        redirect( base_url('admin_dinas/index.php/Admin/list_wisata/'));
    }

    public function list_events()
    {
        $data['contents']="list_events";
        $data['active']="events";
        $table="events";
        $data['data']=$this->Admin_model->get_data($table);
        $this->load->view('overview_admin',$data);
    }

    public function detail_events($id)
    {
        $rules['rules']="id_eve";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="events";
        $rules['id']=$id;
        $rules['image']=True;
        $rules['path']="events/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_events/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="detail_events";
        $view['active']="dropdown";
        $data['data']='false';
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function input_events()
    {
        $rules['rules']="nm_eve";
        $rules['crud']="input";
        $rules['model']="input_data";
        $rules['table']="events";
        $rules['image']=True;
        $rules['path']="events/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_events/";
        $view['contents']="input_events";
        $view['active']="dropdown";
        $data['id_eve']=$this->input->post('id_eve');
        $data['nm_eve']=$this->input->post('nm_eve');
        $data['lokasi']=$this->input->post('lokasi');
        $tgl=$this->input->post('date');
        $date=date('Y-m-d', strtotime($tgl));
        $data['date']=$date;
        $data['kontak']=$this->input->post('kontak');
        $data['deskripsi']=$this->input->post('deskripsi');
        $data['map']=$this->input->post('map');
        $this->crud->inup($rules,$view,$data);
    }

    public function update_events($id)
    {
        $rules['rules']="id_eve";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="events";
        $rules['id']=$id;
        $rules['image']=True;
        $rules['path']="events/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_events/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_events";
        $view['active']="dropdown";
        $data['id_eve']=$this->input->post('id_eve');
        $data['nm_eve']=$this->input->post('nm_eve');
        $data['lokasi']=$this->input->post('lokasi');
        $tgl=$this->input->post('date');
        $date=date('Y-m-d', strtotime($tgl));
        $data['date']=$date;
        $data['kontak']=$this->input->post('kontak');
        $data['deskripsi']=$this->input->post('deskripsi');
        $data['map']=$this->input->post('map');
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function delete_events($id)
    {
        $table="events";
        $field="id_eve";
        $this->Admin_model->delete_data($id,$table,$field);
        redirect( base_url('admin_dinas/index.php/Admin/list_events/'));
    }

    public function list_pasar()
    {
        $data['contents']="list_pasar";
        $data['active']="pasar";
        $table="pasar";
        $data['data']=$this->Admin_model->get_data($table);
        $this->load->view('overview_admin',$data);
    }

    public function detail_pasar($id)
    {
        $rules['rules']="id_pas";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="pasar";
        $rules['image']=True;
        $rules['id']=$id;
        $rules['path']="pasar/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_pasar/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="detail_pasar";
        $view['active']="dropdown";
        $data['data']='false';
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function input_pasar()
    {
        $rules['rules']="nm_pas";
        $rules['crud']="input";
        $rules['model']="input_data";
        $rules['table']="pasar";
        $rules['image']=True;
        $rules['path']="pasar/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_pasar/";
        $view['contents']="input_pasar";
        $view['active']="dropdown";
        $data['id_pas']=$this->input->post('id_pas');
        $data['nm_pas']=$this->input->post('nm_pas');
        $data['jns_pas']=$this->input->post('jns_pas');
        $data['lokasi']=$this->input->post('lokasi');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $this->crud->inup($rules,$view,$data);
    }

    public function update_pasar($id)
    {
        $rules['rules']="id_pas";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="pasar";
        $rules['image']=True;
        $rules['id']=$id;
        $rules['path']="pasar/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_pasar/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_pasar";
        $view['active']="dropdown";
        $data['id_pas']=$this->input->post('id_pas');
        $data['nm_pas']=$this->input->post('nm_pas');
        $data['jns_pas']=$this->input->post('jns_pas');
        $data['lokasi']=$this->input->post('lokasi');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function delete_pasar($id)
    {
        $table="pasar";
        $field="id_pas";
        $this->Admin_model->delete_data($id,$table,$field);
        redirect( base_url('admin_dinas/index.php/Admin/list_pasar/'));
    }

    public function list_jns_akomodasi()
    {
        $data['contents']="list_jns_akomodasi";
        $table="jenis-ako";
        $data['active']="akomodasi";
        $data['data']=$this->Admin_model->get_data($table);
        $this->load->view('overview_admin',$data);
    }

    public function input_jns_akomodasi()
    {
        $rules['rules']="jns_ako";
        $rules['crud']="input";
        $rules['model']="input_data";
        $rules['table']="jenis-ako";
        $rules['image']=False;
        $rules['redirect']="admin_dinas/index.php/Admin/list_jns_akomodasi/";
        $view['contents']="input_jns_akomodasi";
        $view['active']="dropdown";
        $data['id_jns_ako']=$this->input->post('id_jns_ako');
        $data['jns_ako']=$this->input->post('jns_ako');
        $this->crud->inup($rules,$view,$data);
    }

    public function update_jns_akomodasi($id)
    {
        $rules['rules']="id_jns_ako";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="jenis-ako";
        $rules['image']=False;
        $rules['id']=$id;
        $rules['redirect']="admin_dinas/index.php/Admin/list_jns_akomodasi/";
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_jns_akomodasi";
        $view['active']="dropdown";
        $data['id_jns_ako']=$this->input->post('id_jns_ako');
        $data['jns_ako']=$this->input->post('jns_ako');
        $this->crud->inup($rules,$view,$data);
    }

    public function list_akomodasi()
    {
        $data['contents']="list_akomodasi";
        $data['active']="akomodasi";
        $table="akomodasi";
        $table2="jenis-ako";
        $kondisi="akomodasi.id_jns_ako = jenis-ako.id_jns_ako";
        $data['data']=$this->Admin_model->get_data_join($table,$table2,$kondisi);
        $this->load->view('overview_admin',$data);
    }

    public function detail_akomodasi($id)
    {
        $rules['rules']="id_ako";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="akomodasi";
        $rules['id']=$id;
        $rules['path']='akomodasi';
        $rules['redirect']="admin_dinas/index.php/Admin/list_akomodasi/";
        $rules['image']=True;
        $table="jenis-ako";
        $view['data1']=$this->Admin_model->get_data($table);
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="detail_akomodasi";
        $view['active']="dropdown";
        $data['data']='false';
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function input_akomodasi()
    {
        $rules['rules']="nm_ako";
        $rules['crud']="input";
        $rules['model']="input_data";
        $rules['table']="akomodasi";
        $rules['image']=True;
        $rules['path']="akomodasi/";
        $rules['redirect']="admin_dinas/index.php/Admin/list_akomodasi/";
        $table="jenis-ako";
        $view['data']=$this->Admin_model->get_data($table);
        $view['contents']="input_akomodasi";
        $view['active']="dropdown";
        $data['id_ako']=$this->input->post('id_ako');
        $data['nm_ako']=$this->input->post('nm_ako');
        $data['id_jns_ako']=$this->input->post('jns_ako');
        $data['lokasi']=$this->input->post('lokasi');
        $data['kontak']=$this->input->post('kontak');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $this->crud->inup($rules,$view,$data);
    }

    public function update_akomodasi($id)
    {
        $rules['rules']="id_ako";
        $rules['crud']="update";
        $rules['model']="update_data";
        $rules['table']="akomodasi";
        $rules['id']=$id;
        $rules['path']='akomodasi';
        $rules['redirect']="admin_dinas/index.php/Admin/list_akomodasi/";
        $rules['image']=True;
        $table="jenis-ako";
        $view['data1']=$this->Admin_model->get_data($table);
        $view['data']=$this->Admin_model->get_data_id($id,$rules['table'],$rules['rules']);
        $view['contents']="edit_akomodasi";
        $view['active']="dropdown";
        $data['id_ako']=$this->input->post('id_ako');
        $data['nm_ako']=$this->input->post('nm_ako');
        $data['id_jns_ako']=$this->input->post('jns_ako');
        $data['lokasi']=$this->input->post('lokasi');
        $data['kontak']=$this->input->post('kontak');
        $data['map']=$this->input->post('map');
        $data['deskripsi']=$this->input->post('deskripsi');
        $rules['old_image']=$this->input->post('old_image');
        $this->crud->inup($rules,$view,$data);
    }

    public function delete_akomodasi($id)
    {
        $table="akomodasi";
        $field="id_ako";
        $this->Admin_model->delete_data($id,$table,$field);
        redirect( base_url('admin_dinas/index.php/Admin/list_akomodasi'));
    }

}